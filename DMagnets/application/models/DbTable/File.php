<?php

class Application_Model_DbTable_File extends Zend_Db_Table_Abstract
{

    protected $_name = 'files';
    protected $_primary = 'file_id';
    protected $_dependentTables = array('Application_Model_DbTable_Movie','Application_Model_DbTable_Episode');
    
    public function addFile($form)
    {
    	$fileData['file_link'] = $form->getValue('file_link');
    	return $this->insert($fileData);
    }
}