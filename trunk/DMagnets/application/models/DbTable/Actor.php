<?php

class Application_Model_DbTable_Actor extends Zend_Db_Table_Abstract
{

    protected $_name = 'actor';
    protected $_primary = 'actor_id';
    protected $dependentTables = array('Application_Model_DbTable_ActorInFilm');

	public function getAllActors($pageNumber,$recordsCount)
    {
    	$select = $this->select();
    	$paginator = new Zend_Paginator(new Zend_Paginator_Adapter_DbTableSelect($select));
		$paginator->setCurrentPageNumber($pageNumber);
		$paginator->setItemCountPerPage($recordsCount);
		return $paginator;
    }
    
    public function addActor($form)
    {
    	$actorData['first_name'] = $form->getValue('first_name');
    	$actorData['last_name'] = $form->getValue('last_name');
    	return $this->insert($actorData);
    }
    
	public function deleteActor($id){
    	$this->delete('actor_id = '.$id);
    }
}

