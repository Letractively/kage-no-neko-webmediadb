<?php

class Application_Form_Video extends Zend_Form
{

    public function init()
    {
    	$translator = new Zend_Translate('array', APPLICATION_PATH.'/languages/errors.php');
    	$this->setTranslator($translator);
    	
        $this->setName('video');
        $this->setMethod('post');
        $this->setAction('');
        $this->setEnctype('multipart/form-data');
        $this->setDecorators(array(
        	array('ViewScript', array('viewScript' => '/partials/video.tpl'))
    	));
        
    	$cartoon = new Zend_Form_Element_Radio('cartoon',array(
        	'multiOptions'=>array('yes'=>'да','no'=>'нет')
       	));
       	$cartoon->setLabel('Мультфильм?')
       		->setValue('no')
       		->setRequired(true)
       		->addValidator('InArray', true, array(array('yes', 'no'),true))
       		->setSeparator(' ')
       		->setDecorators(array(
        				'ViewHelper',
        				'Errors',
        				array(array('data' => 'HtmlTag'), array('tag' => 'td')),
        				array('Label', array('tag' => 'td')),
        				array(array('row' => 'HtmlTag'), array('tag' => 'tr'))
    			   ));
    	
    	$name = new Zend_Form_Element_Text('name');
        $name->setLabel('Название')
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
    			   
        $original_name = new Zend_Form_Element_Text('original_name');
        $original_name->setLabel('Оригинальное название')
        	  ->setAttribs(array(
        	  			'size'=>'20',
        	  			'maxlength'=>'50'
        	  ))
        	  ->setRequired(true)
        	  ->addFilter('StripTags')
        	  ->addFilter('StringTrim')
        	  ->addValidator('NotEmpty',true)
        	  ->setDecorators(array(
        				'ViewHelper',
        				'Errors',
        				array(array('data' => 'HtmlTag'), array('tag' => 'td')),
        				array('Label', array('tag' => 'td')),
        				array(array('row' => 'HtmlTag'), array('tag' => 'tr'))
    			   ));
    			   
        $list['Выберите']='Выберите';
    	for($i=(int)date('Y',time());$i>1920;$i--){
    		$list[$i] = $i;
    		$list2[$i] = $i;
    	}
    	$year = new Zend_Form_Element_Select('year', array(
            'multiOptions'=> $list,
        ));
        $year->setLabel('Год')
        	->setAttrib('onClick', "javascript: $('option[value=Выберите]').attr('disabled','disabled')")
       		->setValue('Выберите')
       		->setRequired(true)
       		->addValidator('Digits',true)
       		->addValidator('InArray', true, array($list2))
       		->setDecorators(array(
        				'ViewHelper',
        				'Errors',
        				array(array('data' => 'HtmlTag'), array('tag' => 'td')),
        				array('Label', array('tag' => 'td')),
        				array(array('row' => 'HtmlTag'), array('tag' => 'tr'))
    			   ));
    			   
    	$about = new Zend_Form_Element_Textarea('about',array(
    		'rows'=>10,
    		'cols'=>80
    	));
    	$about->setLabel('Описание')
       		->setRequired(true)
        	->addFilter('StripTags')
        	->addFilter('StringTrim')
        	->addValidator('NotEmpty',true)
       		->setDecorators(array(
        				'ViewHelper',
        				'Errors',
        				array(array('data' => 'HtmlTag'), array('tag' => 'td')),
        				array('Label', array('tag' => 'td')),
        				array(array('row' => 'HtmlTag'), array('tag' => 'tr'))
    			   ));

    	$length = new Zend_Form_Element_Text('length');
        $length->setLabel('Продолжительность')
        	  ->setAttribs(array(
        	  			'size'=>'20',
        	  			'maxlength'=>'3'
        	  ))
        	  ->setRequired(true)
        	  ->addFilter('StripTags')
        	  ->addFilter('StringTrim')
        	  ->addValidator('NotEmpty',true)
        	  ->addValidator('Digits',true)
        	  ->setDecorators(array(
        				'ViewHelper',
        				'Errors',
        				array(array('data' => 'HtmlTag'), array('tag' => 'td')),
        				array('Label', array('tag' => 'td')),
        				array(array('row' => 'HtmlTag'), array('tag' => 'tr'))
    			   ));
    			   
    	$poster = new Zend_Form_Element_File('poster');
        $poster->setLabel('Постер')
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
    			   
       	$cencel = new Zend_Form_Element_Reset('cencel');
 		$cencel->setLabel('Отменить')
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
       	
       	$this->addElements(array($cartoon,$name,$original_name,$year,$about,$length,$poster,$cencel,$submit));

    }


}

