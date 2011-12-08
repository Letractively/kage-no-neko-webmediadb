<?php

class Admin_CountryController extends Zend_Controller_Action
{
	private $_country;

    public function init()
    {
    	$this->view->headLink()->appendStylesheet('/css/admin.css');
    	$this->_country = new Application_Model_DbTable_Country();
    }

    public function indexAction()
    {
    	$this->view->all_countries = $this->_country->getAllCountries($this->_getParam('page',1),10);
    	$this->view->controller = $this->_request->getControllerName();
    	$param['urlPart'] =  '/'.$this->_request->getModuleName().'/'.$this->_request->getControllerName().'/'.$this->_request->getActionName();
    	$this->view->paginatorParam = $param;
    }
    
    public function addAction()
    {
    	$this->view->headLink()->appendStylesheet('/css/form.css');
    	$form = new Application_Form_TextField();
    	$form->setAction('/admin/country/add')
    		 ->setName('country');
    	$form->getElement('name')->addValidator(new Ext_Validate_NoDbRecordExists('countries', 'name'),true);
    	$form->getElement('cencel')->setAttrib('onClick', "javascript: window.location = '/".$this->_request->getModuleName()."/".$this->_request->getControllerName()."'");
		$this->view->form = $form;
		if($this->getRequest()->isPost()){
			$formData = $this->getRequest()->getPost();
			if($form->isValid($formData)){
				$this->_country->addCountry($form);
				$this->_helper->redirector('index');
			}
			else $form->populate($formData);
		}
    }
    /*
	public function editAction()
    {
    	//$this->_helper->redirector('index','user');
    }*/
    
	public function deleteAction()
    {
    	if($this->_getParam('id',null) != null){
    		$this->_country->deleteCountry($this->_getParam('id'));
    	}
    	$this->_helper->redirector('index');
    }
}

