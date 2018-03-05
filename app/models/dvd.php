<?php

/**
 * file: app/model/dvd.php
 *
 * Dvd Model
 */
class Dvd extends AppModel {
	// good practice to include the name variable
	var $name = 'Dvd';
	
	// setup the belongs to relationships
	var $belongsTo = array(
		'Format'=>array(
			'className'=>'Format'
		),
		'Type'=>array(
			'className'=>'Type'
		),
		'Location'=>array(
			'className'=>'Location'
		)
	);
	
	// setup the has and belongs to many relationship
	var $hasAndBelongsToMany = array(
		'Genre'=>array(
			'className'=>'Genre'
		)
	);
}

?>