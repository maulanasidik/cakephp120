<?php

/**
 * file: app/model/type.php
 *
 * Type Model
 */
class Type extends AppModel {
	// good practice to include the name variable
	var $name = 'Type';
	
	// setup the has many relationships
	var $hasMany = array(
		'Dvd'=>array(
			'className'=>'Dvd'
		)
	);
}

?>