<?php defined('SYSPATH') or die('No direct script access.'); 

/**
 * Public Site - handle public urls
 *
 * @package		Annex
 * @category	Public
 * @author		Clay McIlrath
 */
class Controller_Public_Site extends Controller_Public
{
	
	public function before()
	{
		parent::$jqmobile['theme'] = 'a';
		
		parent::before();
		
		$this->template->head = '<script type="text/javascript">$.mobile.ajaxEnabled = false;</script>';		
		
		$this->template->styles = array(
			"http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.css" => "all",
			"styles/vibrational/global.less" => "all"
		);
		$this->template->scripts = array(
			"http://code.jquery.com/jquery-1.6.4.min.js", 
			"http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.js"
		);
		$this->template->header->data_role = 'navbar';
		$this->template->header->content = Theme::view('vibrational/blocks/header');
		$this->template->main->data_role = 'content';
		
		$this->model_account = new Model_Account;
	}
	
	/**
	 * The Home Page
	 *
	 * Display the welcome text and give the user the option to login or register
	 */
	public function action_index()
	{
		// $this->template->styles = array("styles/default/test.less" => "screen");
		
		$this->template->main->content = Theme::view('vibrational/index');
	}

	/**
     * Function for user logout
     *
     * @return  void
     */
    public function action_logout()
    {
        A1::instance()->logout(true);
        Request::$current->redirect();
    }
	
	/**
	 * Function for user login and facebook login/registration
	 * 
	 * @todo    Make custom error messages for invalid login creds
	 * 
	 * @return  void
	 */
	public function action_login()
	{	
		if ( isset($_POST['username']) AND isset($_POST['password']) )
		{
			$this->auto_render = FALSE;
			
			$post = Validation::factory($_POST)
				->rule('username', 'not_empty')
				->rule('password', 'not_empty');
				
			if ($post->check())
			{
				// Attempt to login user
				$user = A1::instance()->login($this->request->post('username'), $this->request->post('password'));

				if ($user) 
				{
					$messages['success'][] = __('login.success.body');
				}
				else
				{
					$messages['errors'][] = __('login.errors.invalid');
				}
			}
			else
			{
				$messages['errors'][] = __('login.errors.empty');
			}
			
			echo json_encode($messages);
		}
		else
		{		
			$this->template->main->content = Theme::view('vibrational/forms/login')
				->bind('messages', $messages)
				->bind('post', $_POST);
		}		
	}


	public function action_registerform()
	{
		$this->template->main->content = Theme::view('vibrational/forms/register');
	}

	/**
	 * Used for basic user registration and facebook registration
	 *
	 * @return void
	 * @author Winter King
	 */
	public function action_register()
	{
		$user = Mango::factory('Mango_User');
		$this->auto_render = false;
		$role = Request::$current->param('id');
		//$fb = Kohana_Facebook::instance();
		switch ($role) 
		{
			// facebook registration and login use the same logic  
			case "facebook":
				$fb_account = $fb->account();
				$link = $fb->facebook()->getLoginUrl(static::$fb_params);
				if ( ! $fb_account) // if they are not authorized redirect them to the fb_link to get an auth_code
				{
					Request::$current->redirect($link);
				}
				if ( isset($_GET['code'] ) AND ! isset($_GET['error']))
				{
					if ($fb_account) // ensure they are verified
					{
						// load user by email
						$user = Mango::factory('mango_user')->load(
							1,
							null,
							null,
							array(),
							array(
								'email' => array(
									'$regex' => $fb_account['email'],
									'$options' => 'i'
								)
							)
						);
						
						if ($user->loaded())
						{
							// auto log them in
							$this->model_account->autolog($fb_account);
						}
						else // they are not in our DB yet so register and log them in automatically 
						{
							$check = $this->model_account->create(array(), 'facebook');
							
							if (is_array($check))
							{
								$errors = $check; 
							}
							else
							{
								Request::$current->redirect('account');
							}
						}
						
					}
				}
				else
				{
					Request::$current->redirect();
				}
				
				break;
				
			default:
                if ($_POST)
                {
                    $check = $this->model_account->create($_POST, 'user');
                    if (is_array($check))
                    {
                        $check['success'] = 0; 
                        echo json_encode($check);
                    }
                    else if ($check == false)
                    {
                        echo json_encode(array('success' => 0, 'message'=>'User creation failed'));
                    }
                    else if ($check == true)
                    {
                    	$user = A1::instance()->login($_POST['username'], $_POST['password'])->as_array();
						Request::$current->redirect('site/profile');
                    }
				} 
				else 
				{
					Request::$current->redirect('account');
				}
				break;
		}
	}
	
	
	
	public function action_profile()
	{
		$user = A1::instance()->get_user();
		if ($user)
		{
			if (isset($user->color))
			{
				$this->template->main->content = Theme::view('vibrational/color');
			}
			else
			{
				$this->template->main->content = Theme::view('vibrational/forms/profile');
			}
		}
		else
		{
			$this->request->redirect('/site/login');
		}
	}
	
	/**
	 * Used for basic user registration and facebook registration
	 *
	 * @return void
	 * @author Winter King
	 */
	public function action_complete_registration()
	{
		if (isset($_GET['token']))
		{
			$token = Encrypt::instance()->decode($_GET['token']);
			$explode = explode('|', $token);
			$email = $explode[0];
			$created = $explode[1];
			$user = Mango::factory('mango_user')->load(1, null, null, array(), array('email' => array('$regex' => $email, '$options' => 'i')));       

			if ($user->role == 'agent_prospect')
			{
				$user->role = $user->role;
			}
			else
			{
				$user->role = 'user';
			}

			$user->update();
			$david = array('first_name' => 'David', 'last_name' => 'Tschetter', 'email' => 'David@qwizzle.us');
			$contact = Contacts::factory($user->_id)->save_contact($david);
			
			if (A1::instance()->complete_login($user))
			{
				Request::$current->redirect('account');
			}
			else
			{
				Request::$current->redirect();
			}
		}
		else 
		{
			//echo 'token failed';
			Request::$current->redirect(); 
		}
	}
	
	/**
	 * Handles the password reset functionality
	 *
	 *
	 * @return 
	 * @author Winter 
	 */
	public function action_reset()
	{
		if (isset($_GET['token']))
		{
			$token = Encrypt::instance()->decode($_GET['token']);
			$explode = explode('|', $token);
			$email = $explode[0];
			$password_hash = $explode[1];
			$timestamp = $explode[2];
			$this->template = View::factory('public/default');
			$this->template->styles = array(
				'resources/styles/1140.css' => 'screen',
				'resources/styles/ui.css' => 'screen',
				'resources/styles/global.css' => 'screen',
				'resources/styles/public/global.css' => 'screen',
			);
			$this->template->scripts = array('resources/scripts/jquery.js', 'resources/scripts/public/account/reset.js');
			if ((time() - $timestamp) > 600)
			{
				// send to home page if its been more then 10 mintues
				$this->template->main = "<p>Sorry, your password recovery token has expired.</p>";
			}
			else
			{
				$user = Mango::factory('mango_user',array(
							'password' => $password_hash
						))->load(1, null, null, array(), array('email'=>array('$regex'=>$email, '$options' => 'i')));
				if (!$user->loaded())
				{
					// send to home page if user is not loaded
					Request::$current->redirect();
				}
				//a1::instance()->complete_login($user);
				$this->template->main = View::factory('/public/site/password-reset')->bind('token', $_GET['token']);
			}
		}
		
		if ($_POST)
		{
			$this->auto_render = false;
			// new password has been entered
			$post = Validation::factory($_POST)
					->rule('password', 'required')
					->rule('password', 'min_length', array(':value', 5))
					->rule('password', 'max_length', array(':value', 35))
					->rule('password_confirm', 'required')
					->rule('password_confirm', 'min_length', array(':value', 5))
					->rule('password_confirm', 'max_length', array(':value', 35))
					->rule('password_confirm', 'matches', array(':validation', 'password', 'password_confirm'));
			if ($post->check())
			{
				
				$post  = $post->as_array();
				$token = Encrypt::instance()->decode($post['token']);
				$explode = explode('|', $token);
				$email = $explode[0];
				$password_hash = $explode[1];
				$timestamp = $explode[2]; 
				/// load user by email and password based on the token
				
				$user = Mango::factory('mango_user', array('password'=>$password_hash))->load(1, null, null, array(), array('email'=>array('$regex' => $fb_account['email'], '$options' => 'i')));
				if($user->loaded())
				{
					$user->password = $post["password"];
					$user->update();
					a1::instance()->complete_login($user);
					echo json_encode(array('message' => 'Password succesfully updated.'));
				}
				else
				{
					echo json_encode(array('message' => 'Failed to load user'));
				}
			}
			else 
			{
				echo json_encode($post->errors('account/user'));
			}
		} 
	}

	// quick method for user creation for devs
	public function action_create()
	{
		echo 'create'; exit;
		$user = Mango::factory('mango_user');
		$user->username = 'winterpk66';
		$user->password = 'artesia5464';
		$user->email = 'winterpk@gmail.com';
		$user->role = 'developer';
		$user->create();
	}
	
	public function action_recovery()
	{
		$this->auto_render = false;
		if($_POST) 
		{
			// set token for this user
			$post = Validation::factory($_POST)
				->rule('email', 'required')
				->rule('email', 'email');
			if ($post->check())
			{
				$response = array('message' => 'An email has been sent to ' . $_POST['email'] . ' with further instructions. Thank you');
				$user = Mango::factory('mango_user', array('email' => $_POST['email']))->load();
				if ($user->loaded())
				{
					// create a reset_token from username, password hash and timestamp
					//$token = Encrypt::
					$token = Encrypt::instance()->encode($user->email . '|' . $user->password . '|' . time());
					$subject = 'Qwizzle Password Reset';
					$to 	 = $_POST['email'];
					$headers = 'MIME-Version: 1.0' . "\r\n";
					$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
					$headers .= 'From: info@qwizzle.com' . "\r\n";
					$message = View::factory('/private/account/emails/reset')->bind('token', $token)->bind('username', @$user->username);
					mail($to, $subject, $message, $headers);
					//return true;
				}
			} else {
				$response = $post->errors('account/user');
			}
			echo json_encode($response);
		} else {
			Request::$current->redirect();
		}
	}
}