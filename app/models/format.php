<?php

/**
 * file: app/model/format.php
 *
 * Format Model
 */
class Format extends AppModel {
	// good practice to include the name variable
	var $name = 'Format';
	
	// setup the has many relationships
	var $hasMany = array(
		'Dvd'=>array(
			'className'=>'Dvd'
		)
	);
}

?>