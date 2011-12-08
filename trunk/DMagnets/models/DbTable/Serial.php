<?php

class Application_Model_DbTable_Serial extends Zend_Db_Table_Abstract
{

    protected $_name		 = 'serial';
    protected $_primary		 = 'item_id';
    protected $_dependentTables = array('Application_Model_DbTable_Season');
    protected $_referenceMap = array(
		'Item' => array(
			'columns' 		=> 'item_id',
			'refTableClass' => 'Application_Model_DbTable_Video',
			'refColumns' 	=> 'film_id'
		)
	);

	public function getAllSerials($pageNumber,$recordsCount)
	{
		$select = $this->select()->setIntegrityCheck(false);
		$select->from($this->_name)
			   ->join('films','films.film_id = serial.item_id');
		/*echo (string)$select;
		die;*/
		$paginator = new Zend_Paginator(new Zend_Paginator_Adapter_DbTableSelect($select));
		$paginator->setCurrentPageNumber($pageNumber);
		$paginator->setItemCountPerPage($recordsCount);
		return $paginator;
	}
	
	public function getSerial($id)
	{
		return $this->find($id)->toArray();
	}
}

