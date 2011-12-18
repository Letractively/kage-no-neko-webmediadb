<?php

class Ext_Validate_MultipleInArray extends Zend_Validate_InArray
{
	/**
     * Sets validator options
     *
     * @param  array|Zend_Config $haystack
     * @return void
     */
    public function __construct($options)
    {
    	parent::__construct($options);
    }
    
    public function isValid($value)
    {
    	$result = true;
    	if(is_array($value)){
    		foreach($value as $key => $one){
    			$result = $result && parent::isValid($one);
    			if(!$result){
    				Ext_Unificated::ext_var_dump($result,$this->_haystack,$value,$key,$one);
    			}
    		}
    	}
    	else{
    		$result = parent::isValid($value);
    	}
    	
    	
    	return $result;
    }
}