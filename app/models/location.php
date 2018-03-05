<?php

/**
 * file: app/model/location.php
 *
 * Location Model
 */
class Location extends AppModel {
	// good practice to include the name variable
	var $name = 'Location';
	
	// setup the has many relationships
	var $hasMany = array(
		'Dvd'=>array(
			'className'=>'Dvd'
		)
	);
}

?>