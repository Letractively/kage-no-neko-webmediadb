<?php

class Application_Model_DbTable_Comment extends Zend_Db_Table_Abstract
{

    protected $_name = 'comment';
    protected $_primary = 'comment_id';
    protected $_referenceMap = array(
		'User' => array(
			'columns' 		=> 'user_id',
			'refTableClass' => 'Application_Model_DbTable_User',
			'refColumns' 	=> 'user_id'
		),
		'Item' => array(
			'columns' 		=> 'film_id',
			'refTableClass' => 'Application_Model_DbTable_Video',
			'refColumns' 	=> 'film_id'
		)
	);

}

