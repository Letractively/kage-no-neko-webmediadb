<?php

class Application_Model_DbTable_User extends Zend_Db_Table_Abstract
{

    protected $_name = 'user';
    protected $_primary = 'user_id';
    protected $_dependentTables = array('Application_Model_DbTable_Comment');
    
    public function getAllUsers($pageNumber,$recordsCount)
    {
    	$select = $this->select();
    	$paginator = new Zend_Paginator(new Zend_Paginator_Adapter_DbTableSelect($select));
		$paginator->setCurrentPageNumber($pageNumber);
		$paginator->setItemCountPerPage($recordsCount);
		return $paginator;
    }
    
    public function getUserById($id){
    	return $this->find($id)->current();
    }
    
	public function addUser($form){
		$userData['user_pass'] = md5(md5($form->getValue('pass')));
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
    /*
	public function updateUser(){
    	
    }
    
	public function deleteUser($id){
    	$this->delete('user_id = ?',$id);
    }
*/
}

