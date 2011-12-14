<?php

class Application_Model_DbTable_GenreOfFilm extends Zend_Db_Table_Abstract
{

    protected $_name = 'genres_of_films';
    protected $_primary = array('genre_id',
    							'film_id');
    protected $_referenceMap = array(
    	'Item' => array(
			'columns' 		=> 'film_id',
			'refTableClass' => 'Application_Model_DbTable_Video',
			'refColumns' 	=> 'film_id'
		),
		'Genre' => array(
			'columns' 		=> 'genre_id',
			'refTableClass' => 'Application_Model_DbTable_Genre',
			'refColumns' 	=> 'genre_id'
		)
    );

}

