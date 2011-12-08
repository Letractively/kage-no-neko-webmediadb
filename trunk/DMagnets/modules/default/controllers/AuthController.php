<?php

class AuthController extends Zend_Controller_Action
{	
	public function init()
	{
		
	}
	
	public function indexAction()
	{
		$this->_helper->redirector('index','index');
	}
	
	public function loginAction()
	{
		if($this->getRequest()->isXmlHttpRequest()){
			//отключаем рендеринг шаблонов
			$this->_helper->viewRenderer->setNoRender();
			$this->_helper->layout->disableLayout();
			$loginData = $this->getRequest()->getParams();
			$form = new Application_Form_Auth();
			if($form->isValid($loginData)){
				$authAdapter = new Zend_Auth_Adapter_DbTable(Zend_Db_Table::getDefaultAdapter());
				$authAdapter->setTableName('user')
							->setIdentityColumn('user_mail')
							->setCredentialColumn('user_pass')
							->setIdentity($form->getValue('email'))
							->setCredential(md5(md5($form->getValue('pass'))));
				$auth = Zend_Auth::getInstance();
				$result = $auth->authenticate($authAdapter);
				if($result->isValid()){
					$identity = $authAdapter->getResultRowObject();
					$authStorage = $auth->getStorage();
					$authStorage->write($identity);
					echo true;
				}
				else{
					echo 'Неверный логин или пароль';
				}
			}
			else{
				echo 'Неверный логин или пароль';
			}
		}
		else{
			$this->_helper->redirector('index','index');
		}
	}
	
	public function logoutAction()
	{
		Zend_Auth::getInstance()->clearIdentity();
		$this->_helper->redirector('index','index');
	}
	
}