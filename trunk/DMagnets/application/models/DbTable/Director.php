<?php

class Application_Model_DbTable_Director extends Zend_Db_Table_Abstract
{

    protected $_name = 'producerі';
    protected $_primary = 'producer_id';
    protected $dependentTables = array('Application_Model_DbTable_DirectorOfFilm');

	public function getAllDirectors($pageNumber,$recordsCount)
    {
    	$select = $this->select();
    	$paginator = new Zend_Paginator(new Zend_Paginator_Adapter_DbTableSelect($select));
		$paginator->setCurrentPageNumber($pageNumber);
		$paginator->setItemCountPerPage($recordsCount);
		return $paginator;
    }
    
	public function getDirectorsMass()
    {
    	$select = $this->select();
    	return $this->fetchAll($select);
    }
    
    public function addDirector($form)
    {
    	$directorData['first_name'] = $form->getValue('first_name');
    	$directorData['last_name'] = $form->getValue('last_name');
    	return $this->insert($directorData);
    }
    
	public function deleteDirector($id){
    	$this->delete('producer_id = '.$id);
    }
}