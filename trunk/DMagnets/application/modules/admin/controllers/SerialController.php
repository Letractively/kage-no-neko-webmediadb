<?php

class Admin_SerialController extends Zend_Controller_Action
{
	private $_video;
	private $_serial;

    public function init()
    {
    	$this->view->headLink()->appendStylesheet('/css/admin.css');
    	$this->_video = new Application_Model_DbTable_Video();
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
	    $this->view->headLink()->appendStylesheet('/css/form.css');
    	$form = new Application_Form_Video();
    	$form->setName('serial')
    		 ->setAction('/admin/serial/add');
    	$form->getElement('cencel')->setAttrib('onClick', "javascript: window.location = '/".$this->_request->getModuleName()."/".$this->_request->getControllerName()."'");
    	$form->removeElement('magnet');
    	$form->removeElement('length');
    	$form->getElement('year')->setLabel('Год начала');
    	
    	$list['Выберите']='Выберите';
    	$list['...']='...';
    	$list2['...']='...';
    	for($i=(int)date('Y',time());$i>1920;$i--){
    		$list[$i] = $i;
    		$list2[$i] = $i;
    	}
    	$year_end = new Zend_Form_Element_Select('year_end', array(
            'multiOptions'=> $list,
        ));
        $year_end->setLabel('Год окончания')
        	->setAttrib('onClick', "javascript: $('option[value=Выберите]').attr('disabled','disabled')")
       		->setValue('Выберите')
       		->setRequired(true)
       		->addValidator('InArray', true, array($list2))
       		->setDecorators(array(
        				'ViewHelper',
        				'Errors',
        				array(array('data' => 'HtmlTag'), array('tag' => 'td')),
        				array('Label', array('tag' => 'td')),
        				array(array('row' => 'HtmlTag'), array('tag' => 'tr'))
    			   ));
    	$form->addElement($year_end);
		$this->view->form = $form;
		if($this->getRequest()->isPost()){
			$formData = $this->getRequest()->getPost();
			if($form->isValid($formData)){
				$this->_serial->addSerial($form);
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
    		$this->_video->deleteVideo($this->_getParam('id'));
    	}
    	$this->_helper->redirector('index');
    }
}

