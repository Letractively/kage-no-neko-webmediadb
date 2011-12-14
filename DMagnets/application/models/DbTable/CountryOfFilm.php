<?php

class Application_Model_DbTable_CountryOfFilm extends Zend_Db_Table_Abstract
{

    protected $_name = 'countries_of_films';
    protected $_primary = array('country_id',
    							'film_id');
    protected $_referenceMap = array(
    	'Item' => array(
			'columns' 		=> 'film_id',
			'refTableClass' => 'Application_Model_DbTable_Video',
			'refColumns' 	=> 'film_id'
		),
		'Country' => array(
			'columns' 		=> 'country_id',
			'refTableClass' => 'Application_Model_DbTable_Country',
			'refColumns' 	=> 'country_id'
		)
    );

}

