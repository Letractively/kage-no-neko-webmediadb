<?php

class Application_Model_DbTable_Genre extends Zend_Db_Table_Abstract
{

    protected $_name = 'genres';
    protected $_primary = 'genre_id';
    protected $dependentTables = array('Application_Model_DbTable_GenreOfFilm');

	public function getAllGenres($pageNumber,$recordsCount)
    {
    	$select = $this->select();
    	$paginator = new Zend_Paginator(new Zend_Paginator_Adapter_DbTableSelect($select));
		$paginator->setCurrentPageNumber($pageNumber);
		$paginator->setItemCountPerPage($recordsCount);
		return $paginator;
    }
    
    public function addGenre($form)
    {
    	$genreData['name'] = $form->getValue('name');
    	return $this->insert($genreData);
    }
    
	public function deleteGenre($id){
    	$this->delete('genre_id = '.$id);
    }
}

