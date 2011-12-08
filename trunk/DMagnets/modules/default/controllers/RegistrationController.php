<?php

class RegistrationController extends Zend_Controller_Action
{
	public function init()
	{
		$this->view->headLink()->appendStylesheet('/css/form.css');
		$this->view->sidebar = false;
	}
	public function indexAction()
	{
		$form = new Application_Form_Registration();
		$this->view->form = $form;
		if($this->getRequest()->isPost()){
			$regData = $this->getRequest()->getPost();
			if($form->isValid($regData)){
				$user = new Application_Model_DbTable_User();
				$user->addUser($form);
				$this->_helper->redirector('index','index');
			}
			else $form->populate($regData);
		}
	}
}