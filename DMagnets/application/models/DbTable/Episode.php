<?php

class Application_Model_DbTable_Episode extends Zend_Db_Table_Abstract
{

    protected $_name = 'episod';
    protected $_primary = 'episode_id';
    protected $_referenceMap = array(
		'SeasEp' => array(
			'columns' 		=> 'season_id',
			'refTableClass' => 'Application_Model_DbTable_Season',
			'refColumns' 	=> 'season_id'
		),
		'File' => array(
			'columns'		=> 'file_id',
			'refTableClass'	=> 'Application_Model_DbTable_File',
			'refColumns'	=> 'file_id'
		)
	);


}

