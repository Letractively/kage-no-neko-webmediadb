<?php

class Application_Model_DbTable_Country extends Zend_Db_Table_Abstract
{

    protected $_name = 'countries';
    protected $_primary = 'country_id';
    protected $dependentTables = array('Application_Model_DbTable_CountryOfFilm');

	public function getAllCountries($pageNumber,$recordsCount)
    {
    	$select = $this->select();
    	$paginator = new Zend_Paginator(new Zend_Paginator_Adapter_DbTableSelect($select));
		$paginator->setCurrentPageNumber($pageNumber);
		$paginator->setItemCountPerPage($recordsCount);
		return $paginator;
    }
    
    public function addCountry($form)
    {
    	$countryData['name'] = $form->getValue('name');
    	return $this->insert($countryData);
    }
    
	public function deleteCountry($id){
    	$this->delete('country_id = '.$id);
    }
}

