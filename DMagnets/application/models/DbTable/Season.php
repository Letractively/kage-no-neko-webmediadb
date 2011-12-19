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

	public function getAllSeasons($pageNumber,$recordsCount)
    {
    	$select = $this->select();
    	$paginator = new Zend_Paginator(new Zend_Paginator_Adapter_DbTableSelect($select));
		$paginator->setCurrentPageNumber($pageNumber);
		$paginator->setItemCountPerPage($recordsCount);
		return $paginator;
    }

}

