<?php

class Application_Model_DbTable_Topic extends Zend_Db_Table_Abstract
{

    protected $_name = 'topic';
    protected $_primary = 'topic_id';
    protected $dependentTables = array('Application_Model_DbTable_Post');
    protected $_referenceMap = array(
		'User' => array(
			'columns' 		=> 'user_id',
			'refTableClass' => 'Application_Model_DbTable_User',
			'refColumns' 	=> 'user_id'
		),
		'Section' => array(
			'columns' 		=> 'section_id',
			'refTableClass' => 'Application_Model_DbTable_Section',
			'refColumns' 	=> 'section_id'
		)
	);

	public function getAllTopics($pageNumber,$recordsCount)
    {
    	$select = $this->select();
    	$paginator = new Zend_Paginator(new Zend_Paginator_Adapter_DbTableSelect($select));
		$paginator->setCurrentPageNumber($pageNumber);
		$paginator->setItemCountPerPage($recordsCount);
		return $paginator;
    }
}

