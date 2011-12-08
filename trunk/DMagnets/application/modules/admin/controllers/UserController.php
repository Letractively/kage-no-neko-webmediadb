<?php

class Admin_UserController extends Zend_Controller_Action
{
	private $_user;

    public function init()
    {
    	$this->view->headLink()->appendStylesheet('/css/admin.css');
    	$this->view->headLink()->appendStylesheet('/css/registration.css');
    	$this->_user = new Application_Model_DbTable_User();
    }

    public function indexAction()
    {
    	$this->view->all_users = $this->_user->getAllUsers($this->_getParam('page',1),1);
    	$this->view->controller = $this->_request->getControllerName();
    	$param['urlPart'] =  '/'.$this->_request->getModuleName().'/'.$this->_request->getControllerName().'/'.$this->_request->getActionName();
    	$this->view->paginatorParam = $param;
    }
    
    public function addAction()
    {
    	$form = new Application_Form_Registration();
		$this->view->form = $form;
		if($this->getRequest()->isPost()){
			$regData = $this->getRequest()->getPost();
			if($form->isValid($regData)){
				$this->_user->addUser($form);
				$this->_helper->redirector('index','user');
			}
			else $form->populate($regData);
		}
    }
    /*
	public function editAction()
    {
    	//$this->_helper->redirector('index','user');
    }
    
	public function deleteAction()
    {
    	if($this->_getParam('id',null) != null)
    }*/
}

