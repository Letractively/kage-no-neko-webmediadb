<?php

class Application_Form_Auth extends Zend_Form
{

    public function init()
    {
    	$this->setName('auth')
        	 ->setMethod('post')
        	 ->setAction('/auth/login')
        	 ->setDecorators(array(
        		array('ViewScript', array('viewScript' => '/partials/auth.tpl'))
    		 ));
    		 
    	$email = new Zend_Form_Element_Text('e-mail');
        $email->setLabel('E-mail')
        	  ->setAttribs(array(
        	  			'size'=>'20',
        	  			'maxlength'=>'50',
        	  			'style'=>'width: 100%;'
        	  ))
        	  ->setRequired(true)
        	  ->addFilter('StripTags')
        	  ->addFilter('StringTrim')
        	  ->addValidator('NotEmpty',true)
        	  ->addValidator('Regex',true,array('/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/'))
        	  //->addValidator(new Ext_Validate_NoDbRecordExists('user', 'user_mail'),true)
        	  ->setDecorators(array(
        				'ViewHelper',
        				'Errors',
        				array(array('data' => 'HtmlTag'), array('tag' => 'td')),
        				array('Label', array('tag' => 'td','width'=>'20%')),
        				array(array('row' => 'HtmlTag'), array('tag' => 'tr'))
    			   ));
        
        $pass = new Zend_Form_Element_Password('pass');
        $pass->setLabel('Пароль')
        	  ->setAttribs(array(
        	  			'size'=>'20',
        	  			'maxlength'=>'15',
        	  			'style'=>'width: 100%;'
        	  ))
        	  ->setRequired(true)
        	  ->addFilter('StripTags')
        	  ->addFilter('StringTrim')
        	  ->addValidator('NotEmpty')
        	  ->setDecorators(array(
        				'ViewHelper',
        				'Errors',
        				array(array('data' => 'HtmlTag'), array('tag' => 'td')),
        				array('Label', array('tag' => 'td')),
        				array(array('row' => 'HtmlTag'), array('tag' => 'tr'))
    			   ));
    
    	$submit = new Zend_Form_Element_Submit('submit');
 		$submit->setLabel('Отправить')
 			   ->setDecorators(array(
        			'ViewHelper',
        			array(array('data' => 'HtmlTag'), array('tag' => 'td','align'=>'right')),
        			array(array('row' => 'HtmlTag'), array('tag' => 'tr'))
    	));
    	
   		$this->addElements(array($email,$pass,$submit));
    }
}