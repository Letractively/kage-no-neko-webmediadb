<?php

class Application_Model_DbTable_Season extends Zend_Db_Table_Abstract
{

    protected $_name = 'season';
    protected $_primary = 'season_id';
    protected $_dependentTables = array('Application_Model_DbTable_Episode');
    protected $_referenceMap = array(
		'SerSeas' => array(
			'columns' 		=> 'item_id',
			'refTableClass' => 'Application_Model_DbTable_Serial',
			'refColumns' 	=> 'item_id'
		)
	);


}

