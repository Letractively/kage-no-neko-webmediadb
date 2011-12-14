<?php

class Admin_TopicController extends Zend_Controller_Action
{
	private $_topic;

    public function init()
    {
    	$this->view->headLink()->appendStylesheet('/css/admin.css');
    	$this->_topic = new Application_Model_DbTable_Topic();
    }

    public function indexAction()
    {
    	$this->view->all_topics = $this->_topic->getAllTopics($this->_getParam('page',1),10);
    	$this->view->controller = $this->_request->getControllerName();
    	$param['urlPart'] =  '/'.$this->_request->getModuleName().'/'.$this->_request->getControllerName().'/'.$this->_request->getActionName();
    	$this->view->paginatorParam = $param;
    }
    /*
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
    }*/
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

