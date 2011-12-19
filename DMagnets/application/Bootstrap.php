<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
	protected function _initView()
	{
		// initialize smarty view
		$view = new Ext_View_Smarty($this->getOption('smarty'));
		// setup viewRenderer with suffix and view
		$viewRenderer = Zend_Controller_Action_HelperBroker::getStaticHelper('ViewRenderer');
		$viewRenderer->setViewSuffix('tpl');
		$viewRenderer->setView($view);	
		// ensure we have layout bootstraped
		$this->bootstrap('layout');
		// set the tpl suffix to layout also
		$layout = Zend_Layout::getMvcInstance();
		$layout->setViewSuffix('tpl');

		$view->debugModeFlag = false;
		
		return $view;
	}
	
	protected function _initPlaceholders()
    {
        $this->bootstrap('View');
        $view = $this->getResource('View');
        $view->headTitle('DMagnets')
             ->setSeparator(' :: ');
        $view->headLink()->prependStylesheet('/css/site.css');
        $view->headLink()->prependStylesheet('/css/sidebar.css');
        $view->headScript()->prependFile('/js/jquery-1.6.2.min.js');
        $view->headScript()->appendFile('/js/site.js');
    }
    
    protected function _initAuth()
    {
    	$this->bootstrap('View');
    	$view = $this->getResource('View');
    	if (Zend_Auth::getInstance()->hasIdentity()) { 
			$identity = Zend_Auth::getInstance()->getStorage()->read();
			$view->userRole = $identity->group;
			$view->currentUser = (array)$identity;
		}
    	else{
    		$view->userRole = 'guest';
    		$form = new Application_Form_Auth();
    		$view->authForm = $form;
    	}
    }
    
    protected function _initAcl()
    {
    	$acl = new Zend_Acl();
    	//Resources
    	//default module
    	$acl->addResource('default');
    	$acl->addResource('default:index','default');
    	$acl->addResource('default:error','default');
    	$acl->addResource('default:profile','default');
    	$acl->addResource('default:registration','default');
    	$acl->addResource('default:auth','default');
    	
    	//admin module
    	$acl->addResource('admin');
    	$acl->addResource('admin:index','admin');
    	$acl->addResource('admin:error','admin');
    	$acl->addResource('admin:user','admin');
    	$acl->addResource('admin:movie','admin');
    	$acl->addResource('admin:serial','admin');
    	$acl->addResource('admin:actor','admin');
    	$acl->addResource('admin:director','admin');
    	$acl->addResource('admin:country','admin');
    	$acl->addResource('admin:genre','admin');
    	$acl->addResource('admin:section','admin');
    	$acl->addResource('admin:topic','admin');
    	$acl->addResource('admin:season','admin');
    	$acl->addResource('admin:episode','admin');
    	
    	//media module
    	$acl->addResource('media');
    	$acl->addResource('media:index','media');
    	$acl->addResource('media:error','media');
    	$acl->addResource('media:video','media');
    	
    	//forum module
    	$acl->addResource('forum');
    	$acl->addResource('forum:index','forum');
    	$acl->addResource('forum:error','forum');

    	//Roles
    	$acl->addRole('guest');
    	$acl->addRole('User','guest');
    	$acl->addRole('Administrator');
    	
    	$acl->allow('guest','default:index');
    	$acl->allow('guest','default:auth',array('index','login'));
    	$acl->allow('guest','default:registration');
    	//$acl->allow('guest','default:error');
    	$acl->allow('guest','media');
    	
    	
    	$acl->allow('User','default:auth',array('logout'));
    	$acl->deny('User','default:auth',array('login'));
    	$acl->allow('User','default:profile');
    	$acl->deny('User','default:registration');
    	
    	$acl->allow('Administrator');
    	$acl->deny('Administrator','default:registration');
    	
    	$frontControll = Zend_Controller_Front::getInstance();
    	$frontControll->registerPlugin(new Application_Plugin_CheckAccess($acl, Zend_Auth::getInstance()));
    }
    
    protected function _initFlags()
    {
    	$this->bootstrap('View');
    	$view = $this->getResource('View');
    	$view->sidebar = true;
    }

}

