
<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Mango model for school documents
 * 
 * @package attractions
 * @author  Winter
 */
class Model_Mango_Attraction extends Mango {
	
	protected $_relations = array(
		//'city' => 'belongs_to',
		//'city' => 'has_and_belongs_to_many',
	);
	
	protected $_fields = array(
		/**
		 * This will be the various types of attractions
		 * ie. School, Park, Hotel
		 *
		 */
	    'attraction_type' => array(
			'type' => 'string',
			'required' => true,
		),
		'school_code' => array(
            'type' => 'string',
        ),
	    'last_update' => array(
            'type' => 'int'
        ),
        'doe_district_code' => array(
            'type' => 'string',
        ),
        'gs_id'	=> array(
			'type' => 'string',
			'field' => 'gsId',
		),
        'name' => array(
        	'type'  => 'string',
		),
		'type' => array(
			'type' => 'string',
		),
		'grade_range' => array(
        	'type'  => 'string',
		),
		'enrollment' => array(
        	'type'  => 'string',
		),
		'gs_rating' => array(
        	'type'  => 'string',
		),
		'parent_rating' => array(
        	'type'  => 'string',
		),
		'city' => array(
        	'type'  => 'string',
		),
		'state' => array(
        	'type'  => 'string',
		),
		'district_id' => array(
        	'type'  => 'string',
		),
		'district' => array(
        	'type'  => 'string',
		),
		'district_nces_id' => array(
        	'type'  => 'string',
		),
		'address' => array(
        	'type'  => 'string',
		),
		'phone' => array(
        	'type'  => 'string',
		),
		'fax' => array(
        	'type'  => 'string',
		),
		'website' => array(
        	'type'  => 'string',
		),
		'nces_id' => array(
        	'type'  => 'string',
		),
		'lat' => array(
            'type' => 'float',
        ),
        'lon' => array(
            'type' => 'float',
        ),
        'location' => array(
            'type' => 'set',
        ), 
        'overview_link' => array(
            'type' => 'string',
        ), 
        'ratings_link' => array(
            'type' => 'string',
        ), 
        'reviews_link' => array(
            'type' => 'string',
        ), 
        'school_stats_link' => array(
            'type' => 'string',
        ), 
	);
	
	protected $_db = 'local'; //don't use default db config
}

