<?php

class Application_Form_SerialSub extends Zend_Form
{

    public function init()
    {
    	$translator = new Zend_Translate('array', APPLICATION_PATH.'/languages/errors.php');
    	$this->setTranslator($translator);
    	
        $this->setName('serialSub');
        $this->setMethod('post');
        $this->setAction('');
        $this->setDecorators(array(
        	array('ViewScript', array('viewScript' => '/partials/serialsub.tpl'))
    	));
        
    	$parent_id = new Zend_Form_Element_Hidden('parent_id');
    	
        $num = new Zend_Form_Element_Text('num');
        $num->setLabel('Номер')
        	  ->setAttribs(array(
        	  			'size'=>'5',
        	  			'maxlength'=>'2'
        	  ))
        	  ->setRequired(true)
        	  ->addFilter('StripTags')
        	  ->addFilter('StringTrim')
        	  ->addValidator('NotEmpty',true)
        	  ->addValidator('Int',true)
        	  ->setDecorators(array(
        				'ViewHelper',
        				'Errors',
        				array(array('data' => 'HtmlTag'), array('tag' => 'td')),
        				array('Label', array('tag' => 'td')),
        				array(array('row' => 'HtmlTag'), array('tag' => 'tr'))
    			   ));
    			   
    	$num = new Zend_Form_Element_Text('name');
        $num->setLabel('Название')
        	  ->setAttribs(array(
        	  			'size'=>'20',
        	  			'maxlength'=>'250'
        	  ))
        	  ->addFilter('StripTags')
        	  ->addFilter('StringTrim')
        	  ->addValidator('Alpha',true, array('allowWhiteSpace' => true))
        	  ->setDecorators(array(
        				'ViewHelper',
        				'Errors',
        				array(array('data' => 'HtmlTag'), array('tag' => 'td')),
        				array('Label', array('tag' => 'td')),
        				array(array('row' => 'HtmlTag'), array('tag' => 'tr'))
    			   ));
        	  
       	$cencel = new Zend_Form_Element_Reset('cencel');
 		$cencel->setLabel('Отмена')
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
       	
       	$this->addElements(array($name,$cencel,$submit));

    }


}

