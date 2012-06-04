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
			
			$data[] = array(
	    		"color" => "red",
	    		"latitude" => $latitude,
	    		"longitude" => $longitude
	 		);
	 		
	 		// Jon
	 		$data[] = array(
	    		"color" => "blue",
	    		"latitude" => "39.8138",
	    		"longitude" => "-104.9769"
	 		);
	 		
	 		// Clay
	 		$data[] = array(
	    		"color" => "blue",
	    		"latitude" => "39.9938",
	    		"longitude" => "-105.0868"
	 		);
	 		
	 		// Walt
	 		$data[] = array(
	    		"color" => "green",
	    		"latitude" => "39.5427",
	    		"longitude" => "-104.9737"
	 		);
 		
	 		/*
			$user = A1::instance()->get_user();
			if ($user)
				echo "logged in";
			else
				echo "Not Logged In";
				
			$id = $user->_id;
					echo "<br/>";
					
			echo $id;
					echo "<br/>";
			*/
			
			echo json_encode($data);
		}
	}
}