<?php

class Admin_EpisodeController extends Zend_Controller_Action
{
	private $_episode;

    public function init()
    {
    	$this->view->headLink()->appendStylesheet('/css/admin.css');
    	$this->_episode = new Application_Model_DbTable_Episode();
    }

    public function indexAction()
    {
    	if($this->_getParam('season',null) != null){
	    	$this->view->all_episodes = $this->_episode->getAllEpisodes($this->_getParam('page',1),50,$this->_getParam('season'));
	    	$season = new Application_Model_DbTable_Season();
	    	$season_info = $season->find($this->_getParam('season'))->current();
	    	$this->view->season_info = $season_info;
	    	$serial = $season_info->findParentRow('Application_Model_DbTable_Serial','SerSeas');
	    	$serial_name = $serial->findParentRow('Application_Model_DbTable_Video','Item')->toArray();
	    	$this->view->serial_name = $serial_name['name'];
	    	$this->view->controller = $this->_request->getControllerName();
	    	$param['urlPart'] =  '/'.$this->_request->getModuleName().'/'.$this->_request->getControllerName().'/'.$this->_request->getActionName();
	    	$this->view->paginatorParam = $param;
    	}
    	else{
    		$this->_helper->redirector('index','serial');
    	}
    }
/*
    public function addAction()
    {
    	$this->view->headLink()->appendStylesheet('/css/form.css');
    	$form = new Application_Form_People();
    	$form->setAction('/admin/actor/add')
    		 ->setName('actor');
    	$form->getElement('cencel')->setAttrib('onClick', "javascript: window.location = '/".$this->_request->getModuleName()."/".$this->_request->getControllerName()."'");
		$this->view->form = $form;
		if($this->getRequest()->isPost()){
			$formData = $this->getRequest()->getPost();
			if($form->isValid($formData)){
				$validator = new Ext_Validate_NoDbRecordExists('actor', array(
							 	'first_name'	=> 'first_name',
							 	'last_name'		=> 'last_name'
							 ));
				$validator->setMessage('Актер %value% уже есть в списке',Ext_Validate_NoDbRecordExists::RECORD_EXISTS);
				$data = array(
							'first_name'	=> $form->getValue('first_name'),
							'last_name'		=> $form->getValue('last_name')
						);
				if($validator->isMultipleFieldValid($data)){
					$this->_actor->addActor($form);
					$this->_helper->redirector('index');
				}
				else{
					$err = $validator->getMessages();
					$form->last_name->addError($err['dbRecordExists']);
					$form->populate($formData);
				}
			}
			else{
				$form->populate($formData);
			}
		}
    }*/
    /*
	public function editAction()
    {
    	//$this->_helper->redirector('index','user');
    }
    *//*
	public function deleteAction()
    {
    	if($this->_getParam('id',null) != null){
    		$this->_actor->deleteActor($this->_getParam('id'));
    	}
    	$this->_helper->redirector('index');
    }*/
}

