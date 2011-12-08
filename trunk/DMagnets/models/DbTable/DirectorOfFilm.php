<?php

class Application_Model_DbTable_DirectorOfFilm extends Zend_Db_Table_Abstract
{

    protected $_name = 'producer_if_film';
    protected $_primary = array('producer_id',
    							'film_id');
    protected $_referenceMap = array(
    	'Item' => array(
			'columns' 		=> 'film_id',
			'refTableClass' => 'Application_Model_DbTable_Video',
			'refColumns' 	=> 'film_id'
		),
		'Director' => array(
			'columns' 		=> 'producer_id',
			'refTableClass' => 'Application_Model_DbTable_Director',
			'refColumns' 	=> 'producer_id'
		)
    );

}

