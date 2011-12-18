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
        	  			'maxlength'=>'250'
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
        	  			'maxlength'=>'250'
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
    		  
    	$magnet = new Zend_Form_Element_Textarea('magnet');
        $magnet->setLabel('Magnet-ссылка')
        	  ->setAttribs(array(
        	  		'rows'=>3,
    				'cols'=>80
        	  ))
        	  ->setRequired(true)
        	  ->addFilter('StringTrim')
        	  ->addValidator('NotEmpty',true)
        	  ->addValidator('Regex',true,array('/^(magnet:\?xt=urn:tree:tiger:[\w\d]+\&xl=\d+\&dn=(\w|\d|\.|\%|\(|\)|\_|\-)+)$/'))
        	  ->addValidator(new Ext_Validate_NoDbRecordExists('files', 'file_link'),true)
        	  ->setDecorators(array(
        				'ViewHelper',
        				'Errors',
        				array(array('data' => 'HtmlTag'), array('tag' => 'td')),
        				array('Label', array('tag' => 'td','width'=>'30%')),
        				array(array('row' => 'HtmlTag'), array('tag' => 'tr'))
    			   ));
    			   
    	//Selected fields for actor, director, country, genre
    	
    	$actor_entity = new Application_Model_DbTable_Actor();
    	$director_entity = new Application_Model_DbTable_Director();
    	$country_entity = new Application_Model_DbTable_Country();
    	$genre_entity = new Application_Model_DbTable_Genre();
    			   
    	$list = $actor_entity->getActorsMass()->toArray();
    	foreach ($list as $key => $value){
    		$actors_list[$value['actor_id']] = $value['first_name'].' '.$value['last_name'];
    		$actors_haystack[$value['actor_id']] = $value['actor_id'];
    	}


    	$list = $director_entity->getDirectorsMass()->toArray();
    	foreach ($list as $key => $value){
    		$directors_list[$value['producer_id']] = $value['first_name'].' '.$value['last_name'];
    		$directors_haystack[$value['producer_id']] = $value['producer_id'];
    	}

    	
    	$list = $country_entity->getCountriesMass()->toArray();
    	foreach ($list as $key => $value){
    		$countries_list[$value['country_id']] = $value['name'];
    		$countries_haystack[$value['country_id']] = $value['country_id'];
    	}
    	
    	
    	$list = $genre_entity->getGenresMass()->toArray();
    	foreach ($list as $key => $value){
    		$genres_list[$value['genre_id']] = $value['name'];
    		$genres_haystack[$value['genre_id']] = $value['genre_id'];
    	}

    	//Ext_Unificated::ext_var_dump($actors_list,$directors_list,$countries_list,$genres_list);

    	$actors = new Zend_Form_Element_Select('actors', array(
            'multiOptions'=> $actors_list,
        ));
        $actors->setLabel('Актеры')
        	->setAttrib('multiple', 'multiple')
        	->setAttrib('size','5')
       		->setValue('Выберите')
       		->setRequired(true)
       		->addValidator(new Ext_Validate_MultipleInArray($actors_haystack), true)
       		->setDecorators(array(
        				'ViewHelper',
        				'Errors',
        				array(array('data' => 'HtmlTag'), array('tag' => 'td')),
        				array('Label', array('tag' => 'td')),
        				array(array('row' => 'HtmlTag'), array('tag' => 'tr'))
    			   ));
    			   
    	$directors = new Zend_Form_Element_Select('directors', array(
            'multiOptions'=> $directors_list,
        ));
        $directors->setLabel('Режиссеры')
        	->setAttrib('multiple', 'multiple')
        	->setAttrib('size','5')
       		->setValue('Выберите')
       		->setRequired(true)
       		->addValidator(new Ext_Validate_MultipleInArray($directors_haystack), true)
       		->setDecorators(array(
        				'ViewHelper',
        				'Errors',
        				array(array('data' => 'HtmlTag'), array('tag' => 'td')),
        				array('Label', array('tag' => 'td')),
        				array(array('row' => 'HtmlTag'), array('tag' => 'tr'))
    			   ));
    			   
    	$countries = new Zend_Form_Element_Select('countries', array(
            'multiOptions'=> $countries_list,
        ));
        $countries->setLabel('Страны')
        	->setAttrib('multiple', 'multiple')
        	->setAttrib('size','5')
       		->setValue('Выберите')
       		->setRequired(true)
       		->addValidator(new Ext_Validate_MultipleInArray($countries_haystack), true)
       		->setDecorators(array(
        				'ViewHelper',
        				'Errors',
        				array(array('data' => 'HtmlTag'), array('tag' => 'td')),
        				array('Label', array('tag' => 'td')),
        				array(array('row' => 'HtmlTag'), array('tag' => 'tr'))
    			   ));
    	
    	$genres = new Zend_Form_Element_Select('genres', array(
            'multiOptions'=> $genres_list,
        ));
        $genres->setLabel('Жанры')
        	->setAttrib('multiple', 'multiple')
        	->setAttrib('size','5')
       		->setValue('Выберите')
       		->setRequired(true)
       		->addValidator(new Ext_Validate_MultipleInArray($genres_haystack), true)
       		->setDecorators(array(
        				'ViewHelper',
        				'Errors',
        				array(array('data' => 'HtmlTag'), array('tag' => 'td')),
        				array('Label', array('tag' => 'td')),
        				array(array('row' => 'HtmlTag'), array('tag' => 'tr'))
    			   ));
    	//Selected fields end		   
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
       	
       	$this->addElements(array($cartoon,$name,$original_name,$year,$about,$length,$poster,$magnet,$actors,$directors,$countries,$genres,$cencel,$submit));

    }


}

