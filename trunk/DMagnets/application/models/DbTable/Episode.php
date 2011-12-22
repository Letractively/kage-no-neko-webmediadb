<?php

class Application_Model_DbTable_Episode extends Zend_Db_Table_Abstract
{

    protected $_name = 'episod';
    protected $_primary = 'episode_id';
    protected $_referenceMap = array(
		'SeasEp' => array(
			'columns' 		=> 'season_id',
			'refTableClass' => 'Application_Model_DbTable_Season',
			'refColumns' 	=> 'season_id'
		),
		'File' => array(
			'columns'		=> 'file_id',
			'refTableClass'	=> 'Application_Model_DbTable_File',
			'refColumns'	=> 'file_id'
		)
	);

	public function getAllEpisodes($pageNumber,$recordsCount,$season_id)
    {
    	$select = $this->select()->where('season_id = ?',$season_id);
    	$paginator = new Zend_Paginator(new Zend_Paginator_Adapter_DbTableSelect($select));
		$paginator->setCurrentPageNumber($pageNumber);
		$paginator->setItemCountPerPage($recordsCount);
		return $paginator;
    }

}

