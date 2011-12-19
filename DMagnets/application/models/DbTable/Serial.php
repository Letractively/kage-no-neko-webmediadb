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
	
	public function addSerial($form)
	{
		$ret = true;
		
		$video		= new Application_Model_DbTable_Video();
		$season		= new Application_Model_DbTable_Season();
		$episode	= new Application_Model_DbTable_Episode();
		$file		= new Application_Model_DbTable_File();
		$actor		= new Application_Model_DbTable_ActorInFilm();
		$director	= new Application_Model_DbTable_DirectorOfFilm();
		$country	= new Application_Model_DbTable_CountryOfFilm();
		$genre		= new Application_Model_DbTable_GenreOfFilm();
		
		$videoData['serial']		= 'yes';
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
		$serialData['item_id'] = $video->insert($videoData);
		
		if(!empty($serialData['item_id'])){
    		$serialData['year_start']	= $form->getValue('year');
    		$serialData['year_end']		= $form->getValue('year_end');
    		$this->insert($serialData);
    		
			$ids = $form->getValue('actors');
	    	$actorData['film_id'] = $serialData['item_id'];
	    	foreach($ids as $key => $value){
		    	$actorData['actor_id'] = $value;
		    	$actor->insert($actorData);
	    	}
	
			$ids = $form->getValue('directors');
	    	$directorData['film_id'] = $serialData['item_id'];
	    	foreach($ids as $key => $value){
		    	$directorData['producer_id'] = $value;
		    	$director->insert($directorData);
	    	}
	    	
			$ids = $form->getValue('countries');
	    	$countryData['film_id'] = $serialData['item_id'];
	    	foreach($ids as $key => $value){
		    	$countryData['country_id'] = $value;
		    	$country->insert($countryData);
	    	}
	    	
			$ids = $form->getValue('genres');
	    	$genreData['film_id'] = $serialData['item_id'];
	    	foreach($ids as $key => $value){
		    	$genreData['genre_id'] = $value;
		    	$genre->insert($genreData);
	    	}
		}
    	else{
    		$ret = false;
    	}
    	   	
    	return $ret;
	}
	
	public function deleteSerial($id){
    	$this->delete('item_id = '.$id);
    }
}

