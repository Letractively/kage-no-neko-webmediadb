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
		$video = new Application_Model_DbTable_Video();
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
		if(!empty($movieData['item_id'])){
    		$movieData['year']			= $form->getValue('year');
    		$movieData['length']		= $form->getValue('length');
		}
    	else return false;
	}
}

