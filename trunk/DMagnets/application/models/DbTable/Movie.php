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
	
	public function addMovie()
	{
		$movieData['user_pass'] = md5(md5($form->getValue('pass')));
		$userData['user_mail'] = $form->getValue('email');
		$userData['nickname'] = $form->getValue('nickname');
    	$userData['user_first_name'] = $form->getValue('first_name');
    	$userData['user_last_name'] = $form->getValue('last_name');
    	$userData['user_birthday'] = $form->getValue('birthday');
    	$userData['gender'] = $form->getValue('sex');
    	//получаем данные о загруженом файле с фото
    	$avatar = $form->avatar_upl->getFileInfo();
    	//был ли загружен файл?
    	if(is_uploaded_file($avatar["avatar_upl"]["tmp_name"])){
    		//создаем новое уникальное имя файла
	    	$index = strrpos($avatar["avatar_upl"]["name"],'.');
	    	$userData['avatar'] = md5(time().$avatar["avatar_upl"]["name"]).substr($avatar['avatar_upl']["name"],$index);
	    	//перемещаем файл
	    	$form->avatar_upl->addFilter('Rename','./resources/avatars/'.$userData['avatar']);
	    	$form->avatar_upl->receive();
    	}
    	$userData['reg_date'] = date('Y-m-d H:i:s');
    	//добавляем нового пользователя
    	return $this->insert($userData);
	}
}

