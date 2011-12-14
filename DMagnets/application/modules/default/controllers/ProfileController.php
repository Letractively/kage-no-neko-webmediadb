<?php

class ProfileController extends Zend_Controller_Action
{	
	public function init()
	{
		$this->view->headLink()->appendStylesheet('/css/profile.css');
	}
	
	public function indexAction()
	{
		$identity = Zend_Auth::getInstance()->getStorage()->read();
		$this->view->user = (array)$identity;
	}
	
	public function showAction()
	{
		if($this->_getParam('id',null) != null){
			$user = new Application_Model_DbTable_User();
			$this->view->user = $user->getUserById($this->_getParam('id'));
		}
		else{
			$this->_helper->redirector('index');
		}
	}
	/*
	public function editAction()
	{
		if($this->_getParam('id',null) != null){
			$this->_helper->redirector('show');
		}
		else{
			
		}
	}
	
	public function deleteAction()
	{
		if($this->_getParam('id',null) != null){
			$this->_helper->redirector('show');
		}
		else{
			
		}
	}*/
}