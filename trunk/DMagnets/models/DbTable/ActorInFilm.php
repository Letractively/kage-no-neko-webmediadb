<?php

class Application_Model_DbTable_ActorInFilm extends Zend_Db_Table_Abstract
{

    protected $_name = 'actor_in_film';
    protected $_primary = array('actor_id',
    							'film_id');
    protected $_referenceMap = array(
    	'Item' => array(
			'columns' 		=> 'film_id',
			'refTableClass' => 'Application_Model_DbTable_Video',
			'refColumns' 	=> 'film_id'
		),
		'Actor' => array(
			'columns' 		=> 'actor_id',
			'refTableClass' => 'Application_Model_DbTable_Actor',
			'refColumns' 	=> 'actor_id'
		)
    );

}

