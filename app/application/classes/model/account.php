<?php defined('SYSPATH') OR die('No direct access allowed.');

// put all logic and database stuff in here to conform with MVC rules
class Model_Account extends Model 
{	
	public function validate_update(& $array)
	{
		// Initialise the validation library and setup some rules       
        $array = Validation::factory($array)
			->rule('username', 'alpha_dash')
            ->rule('password', array('required' => true))
            ->rule('email', array('required' => true))
            ->rule('email', 'email')
            ->rule('email', array('email_domain'));
            
        return $array; 
	}
    
    /**
     * Used to log the user in automatically with their facebook account
     * Need to log in the user by email because a username isn't required by 
     * Facebook.  
     * 
     * @param Kohana_Facebook Account object retrieved via the facebook php skd core
     * @return void
     * @author Winter King
     */
    public function autolog($fb_account) 
    {
        //auto log in this user by facebook
        if ($fb_account)
        {
        	// load them by facebook ID
            $user = Mango::factory('mango_user', array('facebook_id' => $fb_account['id']))->load();
			// hack so users are reconnected to facebook
			if ( ! $user->loaded())
			{
				$check = $this->create(array(), 'facebook');
			}
            // NEED TO LOG IN HERE NOW VIA facebook ID
            $check = a1::instance()->complete_login($user);
            Request::$current->redirect('account');
        }
        Request::$current->redirect();
    }
    
	/**
	 * Sends an email to the user email provided with a link back to account/complete_registration/$token
	 * 
	 * @param  MangoObject Mango user object
	 * @return void
	 * @author Winter King  
	 */
	private function _email_verification($user, $type = 'default')
	{
		if ( $type == 'default' )
		{
			$token = Encrypt::instance()->encode($user->email . '|' . $user->created);
			$subject = 'Qwizzle Registration';
			$to 	 = $user->email;
			$headers = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			$headers .= 'From: noreply@qwizzle.us' . "\r\n";
			$message = View::factory('private/account/emails/register')->bind('token', $token);
			
			if ( mail($to, $subject, $message, $headers) )
                return true;
            else
                return false;
		}
		else if ( $type == 'agent_prospect' )
		{
			$token = Encrypt::instance()->encode($user->email.'|'.$user->created);
			$subject = 'Qwizzle Registration';
			$to 	 = $user->email;
			$headers = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			$headers .= 'From: noreply@qwizzle.us' . "\r\n";
			$message = View::factory('private/account/emails/agent_prospect')->bind('token', $token);
			
			if ( mail($to, $subject, $message, $headers) )
				return true;
			else
				return false;
		}
	}
	
    public function create(array $post = array(), $role = null)
    {
        switch ($role) 
        {
            case 'facebook':
				if ( ! isset($_GET['code']))
					return false;
                // facebook account creation
                $fb = Kohana_Facebook::instance()->account();
				$fb['auth_code'] = $_GET['code'];
				// check for existing email and do something if they are already loaded
				if ( ! isset($fb['id']))
				{
					return false;
				}
				$check = Mango::factory('mango_user', array('facebook_id' => $fb['id']))->load();
                // if this ID exists send them to the facebook relay 
                if ($check->loaded())
				{
					$this->autolog($fb);
				}
                // check to see if their email is already in our db but not connected
                $update = false;
                $check = Mango::factory('mango_user', array('email' => $fb['email']))->load();
                if ($check->loaded())
                {
                    // this means they are already in the system 
                    // and need to be connected to fb
                    $update = true;
                    $user = $check;
                }
                else 
                {
                	// make a new user object
                    $user = Mango::factory('mango_user');       
                }
                
				// check for existing username in our database
				if (isset($fb['username']))
				{
					$username = Mango::factory('mango_user', array('username' => $fb['username']))->load();
					if($username->loaded())
					{
						// if username was found then remove it from the fb array so no conflicts arise
						unset($fb['username']);					
					}	
				}
				
                try
                {
                    switch ($update) {
                        case true:
                            $user->external = array('facebook' => $fb);
							$user->facebook_id = $fb['id'];
							$user->email = $fb['email'];
							@$user->birthday = @strtotime(@$fb['birthday']);
							@$user->relationship_status = @$fb['relationship_status'];
							@$user->significant_other = @$fb['significant_other'];
							@$user->timezone = @$fb['timezone'];
							@$user->locale = @$fb['locale'];
							@$user->hometown = @$fb['hometown'];
                            $user->check();
                            $user->update();
                            $check = true;
                            break;
                        case false:
                            $user->role = 'user';
                            $user->external = array('facebook' => $fb);
							$user->facebook_id = $fb['id'];
                            $user->created = time();
							$user->email = $fb['email'];
							@$user->birthday = @strtotime(@$fb['birthday']);
							@$user->relationship_status = @$fb['relationship_status'];
							@$user->significant_other = @$fb['significant_other'];
							@$user->timezone = @$fb['timezone'];
							@$user->locale = @$fb['locale'];
							@$user->hometown = @$fb['hometown'];
                            // validate data
                            $user->check();
                            $user->create();
                            $check = $this->_create_user_folder($user->_id);
                            break;
                        default:
                            break;
                    }
					if($check)
					{
					    $profile_image_link = 'http://graph.facebook.com/'.$fb['id'] . '/picture?type=large';
                        $ch = curl_init($profile_image_link);
                        $image_path = '/var/data/users/'.$user->_id.'/'.$user->_id . '.jpg';
                        $fp = fopen($image_path, 'wb');
                        curl_setopt($ch, CURLOPT_FILE, $fp);
                        curl_setopt($ch, CURLOPT_HEADER, 0);
                        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
                        curl_exec($ch);
                        curl_close($ch);
                        fclose($fp);
                        $user->avatar = $image_path;
                        $user->update();
						//automatically log the user in by passing $user object		
						$user = A1::instance()->complete_login($user);
						return true;
					}
					else 
					{
						$user->delete();
                  		return false;
					}
					
                }
                catch (Validation_Exception $e)
                {
                    return $e->array->errors('account/user');
                } 
                break;
				
			case 'agent_prospect':
				$errors = array();
                $u = Mango::factory('Mango_User');
				$post = Validation::factory($post);
				
                if ( $post->check() )
                {
                    $post = $post->as_array();
					$u->username = urldecode($post['email']);
					$nrds_credentials = array('last_name' => $post['last_name'], 'email' => urldecode($post['email']));
					$nrds_num = $this->nrds_lookup($nrds_credentials);
					
					if ( $nrds_num == false )
					{
						$this->errors = array('nrds' => 'We were unable to find your nrds number. Please check and make sure that the email you entered is the same as the one registered your NRDS number with.');
						return false;
					}
					else 
					{
						$u->password = $nrds_num;
						$u->role = 'agent_prospect';
						$u->created = time();  
						$u->nrds_number = $nrds_num;	
						
	                    try
	                    {
	                        $u->values($post);
								
							//if ( $this->_email_verification($u, 'agent_prospect') )
							//{
								$u->create();
	        					$this->_create_user_folder($u->_id);
								return true;
							//} 							
	                    }
	                    catch ( Validation_Exception $e )
	                    {
	                    	$errors = $e->array->errors('account/user');
							return false;
	                    }
	                }
                }
                else
                {
                	$post['created'] = time();
					$post['role'] = 'pending';
                	try
                	{
                		$u->check($post->as_array());	
                	}
					catch(Mango_Validation_Exception $e)
					{
						$errors = $e->array->errors('account/user');
					}
                    // Validation failed, collect the errors
                    $errors = arr::merge($errors, $post->errors('account/user'));
                }
				return $errors;
				break;
				
            default: // normal account registration  
				$errors = array();
                // initial validation
                $post = Validation::factory($post)
					->rule('username', 'required')
					->rule('password', 'required');
                $user = Mango::factory('Mango_User');
                if ($post->check())
                {
                    $post = $post->as_array();
					$user->created = time();  
					$user->email = $post['username'];
					$user->role = 'user';
                    try
                    {
						// create the account
                        $user->values($post);
						// validate data
                        $user->check();
						
						
                        $check = $user->create();
						//$default_img = '/var/www/dev/resources/images/default_user.jpg';
						//$image_path = '/var/data/users/'.$user->_id.'/'.$user->_id . '.jpg';
						if ($check)
						{
							return true;
								
						} 
						else // somthing failed internally
						{
							$user->delete();
							return false;
						}
                        $user->delete();
                    	return false;
                    }
                    catch (Validation_Exception $e)
                    {   
                    	$errors = $e->array->errors('account/user');
                    }
                }
                else
                {
                	$post['created'] = time();
					$post['role'] = 'pending';
                	try
                	{
                		$user->check($post->as_array());	
                	}
					catch(Mango_Validation_Exception $e)
					{
						$errors = $e->array->errors('account/user');
					}
                    // Validation failed, collect the errors
                    // make sure to get ALL errors
                    $errors = arr::merge($errors, $post->errors('account/user'));
                }
				return $errors;
        	break;
        }
    }
}
	