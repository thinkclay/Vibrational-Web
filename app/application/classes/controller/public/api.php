<?php defined('SYSPATH') or die('No direct script access.'); 

/**
 * Public Site - handle public urls
 *
 * @package		Geolocation
 * @category	Public
 * @author		Clay McIlrath
 */
class Controller_Public_Api extends Controller_Public
{
	public function action_geolocation()
	{
		$this->auto_render = FALSE;
		
		$data = array();
		
		if ( isset($_GET['latitude']) AND isset($_GET['longitude']) )
		{
			//$latitude2 = "37.786078"; $longitude2 = "-122.405948";
			$latitude = $_GET['latitude'];
			$longitude = $_GET['longitude'];
			$pin = '21';
			
			if ( parent::$user )
			{
				$pin = round(array_sum(array(
					$user->question_1,
					$user->question_2,
					$user->question_3,
					$user->question_4,
					$user->question_5,
					$user->question_6,
					$user->question_7,
					$user->question_8,
					$user->question_9
				)) / 9);
			}
			
			
			// Return the current user
			$data[] = array(
				"color" => $pin,
	    		"latitude" => $latitude,
	    		"longitude" => $longitude	
			);
			
			$data[] = array(
	    		"color" => "red",
	    		"latitude" => $latitude,
	    		"longitude" => $longitude
	 		);
			
			echo json_encode($data);
		}
	}
	
	// Use this from Qwizzle to set up the new search
	private function _public_property ( $format )
	{
		if ( $format == 'geospatial' )
		{
			$criteria = array();
			
			$data = json_decode(json_encode($_GET, JSON_NUMERIC_CHECK));
						
			if ( isset($data->points) ) 
				$criteria['location'] = array( '$within' => array('$polygon' => $data->points) );
			
			if ( isset($data->min_price) AND isset($data->max_price) )		
				$criteria['price'] = array('$gte' => $data->min_price, '$lte' => $data->max_price);
			
			if ( isset($data->bedrooms) )
				$criteria['total_beds'] = array('$gte' => $data->bedrooms);
			
			if ( isset($data->bathrooms) )
				$criteria['total_baths'] = array('$gte' => $data->bathrooms);
			
			$property = Mango::factory('mango_property')->load(null, null, 0, array(), $criteria)->as_array(false);
	        
	        echo json_encode($property);
		}
	}
	
}