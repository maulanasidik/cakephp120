<?php

/**
 * file: app/model/genre.php
 *
 * Genre Model
 */
class Genre extends AppModel {
	// good practice to include the name variable
	var $name = 'Genre';
	
	// setup the has and belongs to many relationship
	var $hasAndBelongsToMany = array(
		'Dvd'=>array(
			'className'=>'Dvd'
		)
	);
}

?>