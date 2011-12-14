<?php

class Application_Model_DbTable_Video extends Zend_Db_Table_Abstract
{
    protected $_name = 'films';
	protected $_primary = 'film_id';
	protected $_dependentTables = array('Application_Model_DbTable_Movie',
										'Application_Model_DbTable_Serial',
										'Application_Model_DbTable_Comment');
	
	public function getAllVideo($pageNumber,$recordsCount,$cartoon_flag=null,$serial_flag=null)
	{
		if($cartoon_flag != null && $serial_flag != null){
			$select = $this->select()->where('cartoon = ?', $cartoon_flag)
									 ->where('serial = ?', $serial_flag);
		}
		else{
			$select = $this->select();
		}
		$paginator = new Zend_Paginator(new Zend_Paginator_Adapter_DbTableSelect($select));
		$paginator->setCurrentPageNumber($pageNumber);
		$paginator->setItemCountPerPage($recordsCount);
		return $paginator;
	}
	
	public function getVideo($id)
	{
		//Data from table Films
		$video['info'] = $this->find($id)->current();
		
		// ... Country
		$country_info = $video['info']->findManyToManyRowset('Application_Model_DbTable_Country',
															 'Application_Model_DbTable_CountryOfFilm',
															 'Item','Country');
		
		// ... Genre
		$genre_info = $video['info']->findManyToManyRowset('Application_Model_DbTable_Genre',
														   'Application_Model_DbTable_GenreOfFilm',
														   'Item','Genre');
		
		// ... Actor
		$actor_info = $video['info']->findManyToManyRowset('Application_Model_DbTable_Actor',
														   'Application_Model_DbTable_ActorInFilm',
														   'Item','Actor');
		
		// ... Director
		$director_info = $video['info']->findManyToManyRowset('Application_Model_DbTable_Director',
															  'Application_Model_DbTable_DirectorOfFilm',
															  'Item','Director');
		
		$video['country_info']	= $country_info->toArray();
		$video['genre_info']	= $genre_info->toArray();
		$video['actor_info']	= $actor_info->toArray();
		$video['director_info']	= $director_info->toArray();
		
		if($video['info']['serial'] == 'yes'){
			// ... Serial
			$more_info = $video['info']->findDependentRowset('Application_Model_DbTable_Serial','Item');
			$more_info = $more_info[0];
			// ... Season
			$season_info = $more_info->findDependentRowset('Application_Model_DbTable_Season','SerSeas');
			
			foreach($season_info as $skey => $svalue){
				// ... Episode
				$episode_info[$skey] = $svalue->findDependentRowset('Application_Model_DbTable_Episode','SeasEp');
				
				foreach($episode_info[$skey] as $ekey => $evalue){
					// ... File
					$file_info[$skey][$ekey] = $evalue->findParentRow('Application_Model_DbTable_File','File');
					$file_info[$skey][$ekey] = $file_info[$skey][$ekey]->toArray();
				}
				
				$episode_info[$skey] = $episode_info[$skey]->toArray();
			}

			if(!(count($season_info)>0)){
				$episode_info = null;
				$file_info = null;
			}
			
			$video['more_info']		= $more_info->toArray();
			$video['season_info']	= $season_info->toArray();
			$video['episode_info']	= $episode_info;
			$video['file_info']		= $file_info;
			
		}
		else{
			// ... Movie
			$more_info = $video['info']->findDependentRowset('Application_Model_DbTable_Movie','Item');
			$more_info = $more_info[0];
			// ... File
			$file_info = $more_info->findParentRow('Application_Model_DbTable_File','File');
			$video['more_info'] = $more_info->toArray();
			$video['file_info'] = $file_info->toArray();
		}
		
		// ... Comment and User
		$comment_info['comment'] = $video['info']->findDependentRowset('Application_Model_DbTable_Comment','Item');
		foreach($comment_info['comment'] as $ckey => $cvalue){
			$comment_info['user'][$ckey] = $cvalue->findParentRow('Application_Model_DbTable_User','User');
			$comment_info['user'][$ckey] = $comment_info['user'][$ckey]->toArray();
		}
		$comment_info['comment'] = $comment_info['comment']->toArray();
		$video['comment_info']	= $comment_info;

		/*echo var_dump($video);
		die;*/
		return $video;
	}

}

