<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Only used for validation, not actually used as a database model.
 * 
 * 
 */
class Model_Mango_Agent extends Mango {
	protected $_fields = array(
		'email' => array(
				'type'		 => 'string',
				'required'   => true,
				'min_length' => 4,
				'max_length' => 32,
				'rules' => 
				    array( 
				    	array('email'),
				    	array('email_domain'),
				    )
			),
			
	        'first_name' => array(
	        	'type' 		 => 'string',
	        	'required' => true,
	        	'max_length' => 32,
	        	'rules'      => 
	                 array(
	                     array('alpha_dash')
	            )
	        ),
	        'middle_name' => array(
	        	'type' 		 => 'string',
	        	'required' => true,
	        	'max_length' => 32,
	        	'rules'      => 
	                 array(
	                     array('alpha_dash')
	            )
	        ),
	        'last_name' => array(
	        	'type' 		 => 'string',
	        	'required' => true,
	        	'max_length' => 32,
	        	'rules'      => 
	                 array(
	                     array('alpha_dash')
	            )
	        ),
			'home_phone' => array(
				'type' => 'string',
				'required' => true,
				'max_length' => 15,
				'rules'      => 
	                 array(
	                     array('phone')
	            )
			),
			'cell_phone' => array(
				'type'  => 'string',
				'required' => true,
				'max_length' => 15,
				'rules'      => 
	                 array(
	                     array('phone')
	            )
			),
			'dob' => array(
	        	'type' 		 => 'string',
	        	'required' => true,
	        	'max_length' => 32,
	        	'rules'      => 
	                 array(
	                     array('date')
	            )
	        ),
	        'street_address' => array(
	        	'type' 		 => 'string',
	        	'required' => true,
	        ),
	        'city' => array(
	        	'type' 		 => 'string',
	        	'required' => true,
	        ),
	        'state' => array(
	        	'type' 		 => 'string',
	        	'min_length' => 2,
	        	'max_length' => 2,
	        	'required' => true,
	        ),
	        'zip' => array(
	        	'type' 		 => 'string',
	        	'required' => true,
	        	'rules'      => 
	                 array(
	                     array('numeric')
	            )
	        ),
	        'nrds_number' => array(
	        	'type' 		 => 'string',
	        	'required' => true,
	        	'rules'      => 
	                 array(
	                     array('numeric')
	            )
	        ),
	        'license_number' => array(
	        	'type' 		 => 'string',
	        	'required' => true,
	        ),
	        'years_licensed_realtor' => array(
	        	'type' 		 => 'string',
	        	'required' => true,
	        	'min_length' => 1,
	        	'max_length' => 3,
	        	'rules'      => 
	                 array(
	                     array('numeric')
	            )
	        ),
	        'license_state' => array(
	        	'type' 		 => 'string',
	        	'min_length' => 2,
	        	'max_length' => 2,
	        	'required' => true,
	        ),
	        'current_broker' => array(
	        	'type' 		 => 'string',
	        	'required' => true,
	        	'rules'      => 
	                 array(
	                     array('alpha_dash')
	            )
	        ),
	        'current_broker_years' => array(
	        	'type' 		 => 'string',
	        	'required' => true,
	        	'min_length' => 1,
	        	'max_length' => 3,
	        	'rules'      => 
	                 array(
	                     array('numeric')
	            )
	        ),
			'current_broker_phone' => array(
				'type' => 'string',
				'max_length' => 15,
				'required' => true,
				'rules'      => 
	                 array(
	                     array('phone')
	            )
			),
			'education' => array(
				'type' => 'string',
				'required' => true,
			),
			'realtor_board' => array(
	        	'type' 		 => 'string',
	        	'required' => true,
	        ),
	        'ethics_training_year' => array(
	        	'type' 		 => 'string',
	        	'required' => true,
	        	'min_length' => 2,
	        	'max_length' => 4,
	        	'rules'      => 
	                 array(
	                     array('numeric')
	            )
	        ),
	        'ethics_violation_explanation' => array(
	        	'type' 		 => 'string',
	        	'required' => true,
	        ),
	);
	protected $_db = 'local'; //don't use default db config
}