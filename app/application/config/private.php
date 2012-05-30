<?php defined('SYSPATH') or die('No direct script access.');

return array(

	/*
	 * The Authentication library to use
	 * Make sure that the library supports:
	 * 1) A get_user method that returns FALSE when no user is logged in
	 *	  and a user object that implements Acl_Role_Interface when a user is logged in
	 * 2) A static instance method to instantiate a Authentication object
	 *
	 * array(CLASS_NAME,array $arguments)
	 */
	'lib' => array(
		'class'  => 'A1', // (or AUTH)
		'params' => array('a1')
	),

	/**
	 * Throws an a2_exception when authentication fails
	 */
	'exception' => FALSE,

	/*
	 * The ACL Roles (String IDs are fine, use of ACL_Role_Interface objects also possible)
	 * Use: ROLE => PARENT(S) (make sure parent is defined as role itself before you use it as a parent)
	 */
	'roles' => array
	(
		// ADD YOUR OWN ROLES HERE
		//'buyer'         => null, // this is essentailly the "guest_role"
		'pending'		  => null,
		'user'			  => null, // user will be the parent role for anyone logged in
		'seller'          => array('user'), // sellers will only inherit user priveliges
		'agent_prospect'  => array('user'),
 		'agent_pending'   => array('user'),
		'agent'           => array('user'),
		'facebook'        => array('user'),
		'admin'           => array('user', 'seller', 'agent_pending', 'agent'),
		'developer'       => array('user', 'admin', 'external', 'agent'),
		'external'        => 'user', // external will inherit user priveliges and will be for our external users
		'csr'             => array('external'),
		'photographer'    => array('external'),
		'lender'          => array('external'),
	),

	/*
	 * The name of the guest role 
	 * Used when no user is logged in.
	 */
	'guest_role' => 'guest',

	/*
	 * The ACL Resources (String IDs are fine, use of ACL_Resource_Interface objects also possible)
	 * Use: ROLE => PARENT (make sure parent is defined as resource itself before you use it as a parent)
	 */
	'resources' => array
	(
		// ADD YOUR OWN RESOURCES HERE
		'account'	=> null,
		'admin'		=> null,
		'agents'	=> null,
		'api'		=> null,
		'calendar'	=> null,
		'contacts'	=> null,
		'contract'	=> null,
		'documents'	=> null,
		'filedrop' 	=> null,
		'message'	=> null,
		'property'	=> null,
		'task'		=> null
	),


	/*
	 * The ACL Rules (Again, string IDs are fine, use of ACL_Role/Resource_Interface objects also possible)
	 * Split in allow rules and deny rules, one sub-array per rule:
	     array( ROLES, RESOURCES, PRIVILEGES, ASSERTION)
	 *
	 * Assertions are defined as follows :
			array(CLASS_NAME,$argument) // (only assertion objects that support (at most) 1 argument are supported
			                            //  if you need to give your assertion object several arguments, use an array)
	 */
	'rules' => array
	(
		'allow' => array
		(
			'account'	=> array(
				'role'		=> array('user', 'agent_prospect', 'agent_pending', 'agent'),
				'resource'	=> array('account'),
				'privilege' => array('reset', 'logout', 'index', 'update', 'resume', 'avatar', 'facebook', 'lookup', 'contacts', 'messages', 'register', 'gclient', 'test'),
			),
			'account_create'=> array(
				'role'		=> array('developer'),
				'resource'	=> array('account'),
				'privilege' => array('create'),
			),
			'admin'		=> array(
				'role'		=> array('admin'),
				'resource'	=> array('admin'),
				'privelege'	=> array('index', 'create', 'agents', 'login_as_user', 'remove_user'),
			),
			'agents'	=> array(
				'role'		=> array('agent_prospect', 'agent_pending', 'agent'),
				'resource'	=> array('agents'),
				'privelege'	=> array('index', 'signup', 'verify', 'subscription'),
			),
			'calendar' => array(
				'role'		=> 'user',
				'resource'  => array('calendar'),
				'privelege' => array('index', 'test', 'update', 'test2'),
			),
			'contacts' => array(
				'role'      => 'user',
				'resource'  => array('contacts'),
				'privelege' => array('index')
			),
			'contract' => array(
				'role'		=> 'user',
				'resource'	=> array('contract'),
				'privelege' => array('index')
			),
			'documents' => array(
				'role'      => 'user',
				'resource'  => array('documents'),
				'privelege' => array('index')
			),
			'filedrop' => array(
				'role'		=> array('user'),
				'resource'	=> array('filedrop'),
				'privilege'	=> array('index', 'directory', 'upload'),
			),
			'guest' => array(
				'role'		=> array('guest', 'developer', 'pending'),
				'resource'	=> array('account', 'property'),
				'privilege' => array('login', 'register', 'facebook', 'autolog', 'test', 'recovery', 'reset', 'complete_registration'), 
			),
			'message' => array(
				'role'      => 'user',
				'resource'  => array('message'),
				'privelege' => array('index')
			),
			'property' => array(
                'role'      => array('developer'),
                'resource'  => array('property'),
                'privilege' => array('import', 'index', 'update'), 
            ),
			'task' => array(
				'role'		=> array('user'),
				'resource'	=> array('task'),
				'privelege'	=> array('index', 'daily_raw'),
			),
			'notes' => array(
				'role'		=> array('user'),
				'resource'	=> array('notes'),
				'privelege'	=> array('index'),
			)
		),
		'deny' => array
		(
			// ADD YOUR OWN DENY RULES HERE
		)
	)
);
