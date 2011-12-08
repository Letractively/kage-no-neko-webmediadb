<?php

class Application_Plugin_CheckAccess extends Zend_Controller_Plugin_Abstract
{
    private $_acl = null;
    private $_auth = null;
    
    public function __construct(Zend_Acl $acl, Zend_Auth $auth)
    {
        $this->_acl = $acl;
        $this->_auth = $auth;
    }
    
    public function preDispatch(Zend_Controller_Request_Abstract $request)
    {
    	$module = $request->getModuleName();
        $resource = $request->getControllerName();
        $action = $request->getActionName();
        $identity = $this->_auth->getStorage()->read();
        
        $role = !empty($identity->group) ? $identity->group : 'guest';
        
        if (!$this->_acl->isAllowed($role, $module.':'.$resource, $action)) {
        	/*echo 'deny: '.$role.'>>'.$module.'/'.$resource.'/'.$action;
        	echo var_dump($this->_acl->isAllowed($role, $module.':'.$resource, $action));
        	die;*/
            $request->setModuleName('default')->setControllerName('error')->setActionName('denied');
        }/*
        else{
        	echo 'allow: '.$role.'>>'.$module.'/'.$resource.'/'.$action;
        	die;
        }*/
    }
}
