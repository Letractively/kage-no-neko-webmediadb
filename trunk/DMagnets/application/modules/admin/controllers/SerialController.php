<?php

class Admin_SerialController extends Zend_Controller_Action
{
	private $_serial;

    public function init()
    {
    	$this->view->headLink()->appendStylesheet('/css/admin.css');
    	$this->_serial = new Application_Model_DbTable_Serial();
    }

    public function indexAction()
    {
    	$this->view->all_serials = $this->_serial->getAllSerials($this->_getParam('page',1),5);
    	/*echo '<pre>';
    	echo var_dump($this->view->all_serials);
    	echo '</pre>';
    	die;*/
    	$this->view->controller = $this->_request->getControllerName();
    	$param['urlPart'] =  '/'.$this->_request->getModuleName().'/'.$this->_request->getControllerName().'/'.$this->_request->getActionName();
    	$this->view->paginatorParam = $param;
    }

    public function addAction()
    {
    	$form = new Application_Form_Video();
    	$form->setName('serial')
    		 ->setAction('/admin/serial/add');
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

