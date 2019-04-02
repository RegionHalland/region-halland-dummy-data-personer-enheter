<?php

	/**
	 * @package Region Halland Dummy Data Personer Enheter
	 */
	/*
	Plugin Name: Region Halland Dummy Data Personer Enheter
	Description: Hämta dummy data
	Version: 1.0.0
	Author: Roland Hydén
	License: MIT
	Text Domain: regionhalland
	*/

	// Dummy data om person
	function get_region_halland_dummy_data_person()
	{
		
		// Skapa dummy data
		$myArray = array();
		$myArray['firstname'] = "Kalle";
		$myArray['lastname'] = "Karlsson";
		$myArray['jobtitle'] = "Utvecklare/IT";
		$myArray['telephone'] = "0123456789";
		
		// Returnera dummy data
		return $myArray;
	}

	// Metod som anropas när pluginen aktiveras
	function region_halland_dummy_data_personer_enheter_activate() {
		// Ingenting just nu...
	}

	// Metod som anropas när pluginen avaktiveras
	function region_halland_dummy_data_personer_enheter_deactivate() {
		// Ingenting just nu...
	}
	
	// Vilken metod som ska anropas när pluginen aktiveras
	register_activation_hook( __FILE__, 'region_halland_dummy_data_personer_enheter_activate');
	
	// Vilken metod som ska anropas när pluginen avaktiveras
	register_deactivation_hook( __FILE__, 'region_halland_dummy_data_personer_enheter_deactivate');

?>