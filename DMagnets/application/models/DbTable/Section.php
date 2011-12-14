<?php

class Application_Model_DbTable_Section extends Zend_Db_Table_Abstract
{

    protected $_name = 'section';
    protected $_primary = 'section_id';
    protected $dependentTables = array('Application_Model_DbTable_Topic');

	public function getAllSections($pageNumber,$recordsCount)
    {
    	$select = $this->select();
    	$paginator = new Zend_Paginator(new Zend_Paginator_Adapter_DbTableSelect($select));
		$paginator->setCurrentPageNumber($pageNumber);
		$paginator->setItemCountPerPage($recordsCount);
		return $paginator;
    }
}

