<?php

class Application_Model_DbTable_Movie extends Zend_Db_Table_Abstract
{

    protected $_name			= 'movie';
	protected $_primary			= 'item_id';
	protected $_referenceMap	= array(
		'Item'	=> array(
			'columns' 		=> 'item_id',
			'refTableClass' => 'Application_Model_DbTable_Video',
			'refColumns' 	=> 'film_id'
		),
		'File'	=> array(
			'columns'		=> 'file_id',
			'refTableClass'	=> 'Application_Model_DbTable_File',
			'refColumns'	=> 'file_id'
		)
	);
	
	public function getAllMovies($pageNumber,$recordsCount)
	{
		$select = $this->select()->setIntegrityCheck(false);
		$select->from($this->_name)
			   ->join('films', 'films.film_id = movie.item_id');
		/*echo (string)$select;
		die;*/
		$paginator = new Zend_Paginator(new Zend_Paginator_Adapter_DbTableSelect($select));
		$paginator->setCurrentPageNumber($pageNumber);
		$paginator->setItemCountPerPage($recordsCount);
		return $paginator;
	}
	
	public function addMovie($form)
	{
		$ret = true;
		
		$video		= new Application_Model_DbTable_Video();
		$file		= new Application_Model_DbTable_File();
		$actor		= new Application_Model_DbTable_ActorInFilm();
		$director	= new Application_Model_DbTable_DirectorOfFilm();
		$country	= new Application_Model_DbTable_CountryOfFilm();
		$genre		= new Application_Model_DbTable_GenreOfFilm();
		
		$videoData['serial']		= 'no';
		$videoData['cartoon']		= $form->getValue('cartoon');
		$videoData['name']			= $form->getValue('name');
		$videoData['original_name']	= $form->getValue('original_name');
		$videoData['about']			= $form->getValue('about');
		$poster = $form->poster->getFileInfo();
		if(is_uploaded_file($poster["poster"]["tmp_name"])){
	    	$index = strrpos($poster["poster"]["name"],'.');
	    	$videoData['poster'] = md5(time().$poster["poster"]["name"]).substr($poster['poster']["name"],$index);
	    	$form->poster->addFilter('Rename','./resources/posters/'.$videoData['poster']);
	    	$form->poster->receive();
    	}
		$movieData['item_id'] = $video->insert($videoData);
		
		$fileData['file_link'] = $form->getValue('magnet');
		$movieData['file_id'] = $file->insert($fileData);
		
		if(!empty($movieData['item_id']) && !empty($movieData['file_id'])){
    		$movieData['year']			= $form->getValue('year');
    		$movieData['length']		= $form->getValue('length');
    		$this->insert($movieData);
		}
    	else $ret = false;
    	
    	$ids = $form->getValue('actors');
    	$actorData['film_id'] = $movieData['item_id'];
    	foreach($ids as $key => $value){
	    	$actorData['actor_id'] = $value;
	    	$actor->insert($actorData);
    	}

		$ids = $form->getValue('directors');
    	$directorData['film_id'] = $movieData['item_id'];
    	foreach($ids as $key => $value){
	    	$directorData['producer_id'] = $value;
	    	$director->insert($directorData);
    	}
    	
		$ids = $form->getValue('countries');
    	$countryData['film_id'] = $movieData['item_id'];
    	foreach($ids as $key => $value){
	    	$countryData['country_id'] = $value;
	    	$country->insert($countryData);
    	}
    	
		$ids = $form->getValue('genres');
    	$genreData['film_id'] = $movieData['item_id'];
    	foreach($ids as $key => $value){
	    	$genreData['genre_id'] = $value;
	    	$genre->insert($genreData);
    	}
    	
    	
    	
    	return $ret;
	}
}

