<?php

class Application_Form_Registration extends Zend_Form
{

    public function init()
    {
    	$translator = new Zend_Translate('array', APPLICATION_PATH.'/languages/errors.php');
    	$this->setTranslator($translator);
    	
        $this->setName('registration');
        $this->setMethod('post');
        $this->setAction('/registration');
        $this->setEnctype('multipart/form-data');
        $this->setDecorators(array(
        	array('ViewScript', array('viewScript' => '/partials/registration.tpl'))
    	));
        
        $email = new Zend_Form_Element_Text('e-mail');
        $email->setLabel('E-mail')
        	  ->setAttribs(array(
        	  			'size'=>'20',
        	  			'maxlength'=>'50'
        	  ))
        	  ->setRequired(true)
        	  ->addFilter('StripTags')
        	  ->addFilter('StringTrim')
        	  ->addValidator('NotEmpty',true)
        	  ->addValidator('Regex',true,array('/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/'))
        	  ->addValidator(new Ext_Validate_NoDbRecordExists('user', 'user_mail'),true)
        	  ->setDecorators(array(
        				'ViewHelper',
        				'Errors',
        				array(array('data' => 'HtmlTag'), array('tag' => 'td')),
        				array('Label', array('tag' => 'td','width'=>'30%')),
        				array(array('row' => 'HtmlTag'), array('tag' => 'tr'))
    			   ));
        
        $pass = new Zend_Form_Element_Password('pass');
        $pass->setLabel('Пароль')
        	  ->setAttribs(array(
        	  			'size'=>'20',
        	  			'maxlength'=>'15'
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
        	  
        $pass2 = new Zend_Form_Element_Password('pass2');
        $pass2->setLabel('Подтвердите пароль')
        	  ->setAttribs(array(
        	  			'size'=>'20',
        	  			'maxlength'=>'15'
        	  ))
        	  ->setRequired(true)
        	  ->addFilter('StripTags')
        	  ->addFilter('StringTrim')
        	  ->addValidator('NotEmpty')
        	  ->addValidator(new Ext_Validate_EqualInputs('pass'),true)
        	  ->setDecorators(array(
        				'ViewHelper',
        				'Errors',
        				array(array('data' => 'HtmlTag'), array('tag' => 'td')),
        				array('Label', array('tag' => 'td')),
        				array(array('row' => 'HtmlTag'), array('tag' => 'tr'))
    			   ));
        
    	
    	$nickname = new Zend_Form_Element_Text('nickname');
        $nickname->setLabel('Ник')
        	  ->setAttribs(array(
        	  			'size'=>'20',
        	  			'maxlength'=>'20'
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
    			   
        $first_name = new Zend_Form_Element_Text('first_name');
        $first_name->setLabel('Фамилия')
        	  ->setAttribs(array(
        	  			'size'=>'20',
        	  			'maxlength'=>'50'
        	  ))
        	  ->setRequired(true)
        	  ->addFilter('StripTags')
        	  ->addFilter('StringTrim')
        	  ->addValidator('NotEmpty',true)
        	  ->addValidator('Alpha',true)
        	  ->setDecorators(array(
        				'ViewHelper',
        				'Errors',
        				array(array('data' => 'HtmlTag'), array('tag' => 'td')),
        				array('Label', array('tag' => 'td')),
        				array(array('row' => 'HtmlTag'), array('tag' => 'tr'))
    			   ));
        
        $last_name = new Zend_Form_Element_Text('last_name');
        $last_name->setLabel('Имя')
        	  ->setAttribs(array(
        	  			'size'=>'20',
        	  			'maxlength'=>'50'
        	  ))
        	  ->setRequired(true)
        	  ->addFilter('StripTags')
        	  ->addFilter('StringTrim')
        	  ->addValidator('NotEmpty',true)
        	  ->addValidator('Alpha',true)
        	  ->setDecorators(array(
        				'ViewHelper',
        				'Errors',
        				array(array('data' => 'HtmlTag'), array('tag' => 'td')),
        				array('Label', array('tag' => 'td')),
        				array(array('row' => 'HtmlTag'), array('tag' => 'tr'))
    			   ));
        	  
        $sex = new Zend_Form_Element_Radio('sex',array(
        	'multiOptions'=>array('male'=>'мужской','female'=>'женский')
       	));
       	$sex->setLabel('Пол')
       		->setValue('male')
       		->setRequired(true)
       		->addValidator('InArray', true, array(array('male', 'female'),true))
       		->setSeparator(' ')
       		->setDecorators(array(
        				'ViewHelper',
        				'Errors',
        				array(array('data' => 'HtmlTag'), array('tag' => 'td')),
        				array('Label', array('tag' => 'td')),
        				array(array('row' => 'HtmlTag'), array('tag' => 'tr'))
    			   ));
       	
       	$birthday = new Zend_Form_Element_Text('birthday');
       	$birthday->setLabel('Дата рождения')
       		  ->setAttribs(array(
        	  			'size'=>'20',
        	  			'maxlength'=>'10'
        	  ))
        	  ->setRequired(true)
        	  ->addFilter('StripTags')
        	  ->addFilter('StringTrim')
        	  ->addValidator('NotEmpty',true)
        	  ->addValidator('Date',true,array('yyyy-mm-dd'))
        	  ->setDecorators(array(
        				'ViewHelper',
        				'Errors',
        				array(array('data' => 'HtmlTag'), array('tag' => 'td')),
        				array('Label', array('tag' => 'td')),
        				array(array('row' => 'HtmlTag'), array('tag' => 'tr'))
    			   ));
       	
    	$avatar = new Zend_Form_Element_File('avatar_upl');
        $avatar->setLabel('Аватар')
        ->setAttribs(array(
        	  			'size'=>'20'
        	  ))
        	  ->addValidator('Size', true, 512000)
        	  ->addValidator('Extension', true,'jpg,jpeg,png,gif')
        	  ->setDecorators(array(
        	  		'File',
        	  		'Errors',
        	  		array(array('data' => 'HtmlTag'), array('tag' => 'td')),
        			array('Label', array('tag' => 'td')),
        			array(array('row' => 'HtmlTag'), array('tag' => 'tr'))
    		  ));
    			   
       	$reset = new Zend_Form_Element_Reset('reset');
 		$reset->setLabel('Очистить')
 			   ->setDecorators(array(
        			'ViewHelper',
        			array(array('data' => 'HtmlTag'), array('tag' => 'td'),
        			array(array('row' => 'HtmlTag'), array('tag' => 'tr','openOnly'=>true)))
    	));
 		
 		$submit = new Zend_Form_Element_Submit('submit');
 		$submit->setLabel('Отправить')
 			   ->setDecorators(array(
        			'ViewHelper',
        			array(array('data' => 'HtmlTag'), array('tag' => 'td','align'=>'right')),
        			array(array('row' => 'HtmlTag'), array('tag' => 'tr','closeOnly'=>true))
    	));
       	
       	$this->addElements(array($email,$pass,$pass2,$nickname,$first_name,$last_name,$sex,$birthday,$avatar,$reset,$submit));

    }


}

