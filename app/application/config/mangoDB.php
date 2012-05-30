<?php defined('SYSPATH') or die('No direct script access.');

return array(
	
	/**
	 * Configuration Name
	 *
	 * You use this name when initializing a new MangoDB instance
	 *
	 * $db = MangoDB::instance('default');
	 */
	'local' => array(

		/**
		 * Connection Setup
		 * 
		 * See http://www.php.net/manual/en/mongo.construct.php for more information
		 *
		 * or just edit / uncomment the keys below to your requirements
		 */
		'connection' => array(

			'hostnames' => $_SERVER['DB_HOST'],
			'database'  => $_SERVER['DB_NAME'],
			'username'  => $_SERVER['DB_USER'],
			'password'  => $_SERVER['DB_PASS'],

			/** connection options (see http://www.php.net/manual/en/mongo.construct.php) **/
			/*
			'options'   => array(
				'persist'    => 'local',
				'timeout'    => 1000, 
				'replicaSet' => TRUE
			)
			*/
		),

		/**
		 * Whether or not to use profiling
		 *
		 * If enabled, profiling data will be shown through Kohana's profiler library
		 */
		'profiling' => true
	),
	
	/**
	 * Configuration Name
	 *
	 * You use this name when initializing a new MangoDB instance
	 *
	 * $db = MangoDB::instance('default');
	 */
	'default' => array(

		/**
		 * Connection Setup
		 * 
		 * See http://www.php.net/manual/en/mongo.construct.php for more information
		 *
		 * or just edit / uncomment the keys below to your requirements
		 */
		'connection' => array(

			'hostnames' => $_SERVER['DB_HOST'],
			'database'  => $_SERVER['DB_NAME'],
			'username'  => $_SERVER['DB_USER'],
			'password'  => $_SERVER['DB_PASS'],

			/** connection options (see http://www.php.net/manual/en/mongo.construct.php) **/
			/*
			'options'   => array(
				'persist'    => 'local',
				'timeout'    => 1000, 
				'replicaSet' => TRUE
			)
			*/
		),

		/**
		 * Whether or not to use profiling
		 *
		 * If enabled, profiling data will be shown through Kohana's profiler library
		 */
		'profiling' => true
	)
	
	
);