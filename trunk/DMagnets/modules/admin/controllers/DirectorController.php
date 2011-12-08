<?php

class Admin_DirectorController extends Zend_Controller_Action
{
	private $_director;

    public function init()
    {
    	$this->view->headLink()->appendStylesheet('/css/admin.css');
    	$this->_director = new Application_Model_DbTable_Director();
    }

    public function indexAction()
    {
    	$this->view->all_directors = $this->_director->getAllDirectors($this->_getParam('page',1),10);
    	$this->view->controller = $this->_request->getControllerName();
    	$param['urlPart'] =  '/'.$this->_request->getModuleName().'/'.$this->_request->getControllerName().'/'.$this->_request->getActionName();
    	$this->view->paginatorParam = $param;
    }
    
    public function addAction()
    {
    	$this->view->headLink()->appendStylesheet('/css/form.css');
    	$form = new Application_Form_People();
    	$form->setAction('/admin/director/add')
    		 ->setName('director');
    	$form->getElement('cencel')->setAttrib('onClick', "javascript: window.location = '/".$this->_request->getModuleName()."/".$this->_request->getControllerName()."'");
		$this->view->form = $form;
		if($this->getRequest()->isPost()){
			$formData = $this->getRequest()->getPost();
			if($form->isValid($formData)){
				$validator = new Ext_Validate_NoDbRecordExists('producerі', array(
							 	'first_name'	=> 'first_name',
							 	'last_name'		=> 'last_name'
							 ));
				$validator->setMessage('Режиссер %value% уже есть в списке',Ext_Validate_NoDbRecordExists::RECORD_EXISTS);
				$data = array(
							'first_name'	=> $form->getValue('first_name'),
							'last_name'		=> $form->getValue('last_name')
						);
				if($validator->isMultipleFieldValid($data)){
					$this->_director->addDirector($form);
					$this->_helper->redirector('index');
				}
				else{
					$err = $validator->getMessages();
					$form->last_name->addError($err['dbRecordExists']);
					$form->populate($formData);
				}
			}
			else $form->populate($formData);
		}
    }
    /*
	public function editAction()
    {
    	//$this->_helper->redirector('index','user');
    }
    */
	public function deleteAction()
    {
    	if($this->_getParam('id',null) != null){
    		$this->_director->deleteDirector($this->_getParam('id'));
    	}
    	$this->_helper->redirector('index');
    }
}

