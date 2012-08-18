<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Mango user model 
 * 
 * @package account
 * @author  Winter
 */
class Model_Mango_User extends Model_A1_User_Mango implements Acl_Role_Interface {
	
	protected $_fields = array(
	    
	    /* relationships */
        'mango_contacts'        => array('type'=>'has_many'),
        'mango_appointments'    => array('type'=>'array'),
        
        'mango_filedrop'		=> array('type'=>'array'),
        'mango_notes'			=> array('type'=>'array'),
        
        // required for task modules
		'mango_tasks'           => array('type'=>'has_many'),
        'mango_task_categories'	=> array('type'=>'has_many'),
        'mango_task_tags'		=> array('type'=>'has_many'),
        
		// required for message module
		'mango_threads'         => array('type'=>'array'),
		'mango_thread_categories'	=> array('type'=>'array'),
		'mango_thread_tags'		=> array('type'=>'array'),
		
        'contacts' => array(
        	'type'  => 'set',
		),
		'created' => array(
            'type'     => 'string',
            'required' => true,
        ),
		'last_login' => array(
            'type'      => 'int',
        ),
        // role used for a1 and a2 (authorization and authentication)
		'role' => array(
            'type'     => 'string',
            'required' => true,
        ),
		'logins'    => array(
            'type'  => 'int',    
        ),
		'contacts' => array(
			'type' => 'mixed',
		),
		'token' => array(
            'type' => 'string',
        ),
        'updated_time' => array(
            'type' => 'string',
        ),
        'avatar' => array(
            'type'       => 'string',
        ),
		
		/* editable fields*/
		'username'  => array(
			'type'		 => 'string',
			'required'   => false,
			'min_length' => 4,
			'max_length' => 32,
			'unique'	 => true,
			'rules'      => 
			     array(
    			     array( array(':model', 'username'))
            )
		),
		'password'       => array(
			'type'       => 'string',
			'required'   => false,
			'min_length' => 6,
			'max_length' => 256,
		),
		'email' => array(
			'type'		 => 'string',
			'required'   => true,
			'min_length' => 4,
			'max_length' => 32,
			'unique'	 => true,
			'rules' => 
			    array( 
			    	array('email'),
			    	array('email_domain'),
			    )
		),
        'first_name' => array(
        	'type' 		 => 'string',
        	'max_length' => 32,
        	'rules'      => 
                 array(
                     array('alpha_dash')
            )
        ),
        'middle_name' => array(
        	'type' 		 => 'string',
        	'max_length' => 32,
        	'rules'      => 
                 array(
                     array('alpha_dash')
            )
        ),
        'last_name' => array(
        	'type' 		 => 'string',
        	'max_length' => 32,
        	'rules'      => 
                 array(
                     array('alpha_dash')
            )
        ),
		'office_phone' => array(
			'type' => 'string',
			'max_length' => 15,
			'rules'      => 
                 array(
                     array('phone')
            )
		),
		'home_phone' => array(
			'type'  => 'string',
			'max_length' => 15,
			'rules'      => 
                 array(
                     array('phone')
            )
		),
		'cell_phone' => array(
			'type' => 'string',
			'max_length' => 15,
			'rules'      => 
                 array(
                     array('phone')
            )
		),
        'gender' => array(
            'type' => 'enum',
            'values' => 
           		array('male', 'female')
        ),
        'dob' => array(
        	'type' 		 => 'string',
        	'max_length' => 32,
        	'rules'      => 
                 array(
                     array('date')
            )
        ),
        'street_address' => array(
        	'type' 		 => 'string',
        ),
        'city' => array(
        	'type' 		 => 'string',
        ),
        'state' => array(
        	'type' 		 => 'string',
        	'min_length' => 2,
        	'max_length' => 2,
        ),
        'zip' => array(
        	'type' 		 => 'string',
        	'rules'      => 
                 array(
                     array('numeric')
            )
        ),
        'fax' => array(
            'type' => 'string',
            'max_length' => 15,
			'rules'      => 
                 array(
                     array('phone')
            )
        ),
        'question_1' => array(
        	'type' 		 => 'string',
        	'min_length' => 1,
        	'max_length' => 2,
        ),
        'question_2' => array(
        	'type' 		 => 'string',
        	'min_length' => 1,
        	'max_length' => 2,
        ),
        'question_3' => array(
        	'type' 		 => 'string',
        	'min_length' => 1,
        	'max_length' => 2,
        ),
        'question_4' => array(
        	'type' 		 => 'string',
        	'min_length' => 1,
        	'max_length' => 2,
        ),
        'question_5' => array(
        	'type' 		 => 'string',
        	'min_length' => 1,
        	'max_length' => 2,
        ),
        'question_6' => array(
        	'type' 		 => 'string',
        	'min_length' => 1,
        	'max_length' => 2,
        ),
        'question_7' => array(
        	'type' 		 => 'string',
        	'min_length' => 1,
        	'max_length' => 2,
        ),
        'question_8' => array(
        	'type' 		 => 'string',
        	'min_length' => 1,
        	'max_length' => 2,
        ),
        'question_9' => array(
        	'type' 		 => 'string',
        	'min_length' => 1,
        	'max_length' => 2,
        ),
        'question_10' => array(
        	'type' 		 => 'string',
        	'min_length' => 1,
        	'max_length' => 2,
        ),
		'education' => array(
			'type' => 'string',
		),
        /* end editable fields */
        'birthday' => array(
            'type' => 'string',
        ),
        /* Facebook Fields */
        'facebook_id'    => array(
            'type' => 'string',
        ),
        'relationship_status' => array(
            'type' => 'string',
        ),
        'significant_other' => array(
            'type' => 'array',
        ),
		'timezone' => array(
            'type' => 'string',
        ),  
        'locale' => array(
            'type' => 'string',
        ),
        'hometown' => array( 
            'type' => 'array',
            //'max_length' => 256,
        ),
        'location' => array( 
            'type' => 'array',
            //'max_length' => 64,
        ),
        'nrds_number' => array(
        	'type' => 'string',
		),
		'resume' => array(
			'type' => 'string',
		),
		'about_me' => array(
			'type' => 'string',
		),
		'testimonials' => array(
			'type' => 'array',
		),
		'chargify'	=> array(
			'type' => 'array',
		),
		'im'	=> array(
			'type' => 'array',
		),
	);
	//protected $_relations = array('mango_task' => array('type'=>'has_many'));
	
	public function get_role_id()
    {
        return $this->role;
    }
    
	public static function username($val) {
		$regex = '/^[-a-z0-9_\@\.]++$/iD';
		return (bool) preg_match($regex, $val);
	}
	
	protected $_db = 'local'; //don't use default db config
}
