<?php

class Admin_IndexController extends Zend_Controller_Action
{

    public function init()
    {
    	$this->view->headLink()->appendStylesheet('/css/admin.css');
    }

    public function indexAction()
    {
    	$this->view->controller = $this->_request->getControllerName();
    }
}

