<?php

class Application_Model_DbTable_Post extends Zend_Db_Table_Abstract
{

    protected $_name = 'post';
    protected $_primary = 'post_id';
    protected $_referenceMap = array(
		'User' => array(
			'columns' 		=> 'user_id',
			'refTableClass' => 'Application_Model_DbTable_User',
			'refColumns' 	=> 'user_id'
		),
		'Topic' => array(
			'columns' 		=> 'topic_id',
			'refTableClass' => 'Application_Model_DbTable_Topic',
			'refColumns' 	=> 'topic_id'
		)
	);

}

