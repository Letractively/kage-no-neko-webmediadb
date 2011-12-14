<?php

//require_once 'Smarty/Smarty.class.php'; 

class Zend_View_Smarty implements Zend_View_Interface
{
/**
* Smarty object
* @var Smarty	
* @return void
*/
	protected $_smarty;
public function __construct($tmplPath = null, $extraParams = array())
{
require_once 'Smarty/Smarty.class.php'; 
$this->_smarty = new Smarty;
if(null !== $tmplPath)
{
$this->setScriptPath($tmplPath);
}

foreach ($extraParams as $key=>$value)
{
$this->_smarty->$key = $value;	
}
}

/**
* ��������� �������
* 
* @return Smarty
* @see library/Zend/View/Zend_View_Interface#getEngine()
*/
public function getEngine()
{
return $this->_smarty;
}

/**
*��������� ���� �����
* 
* @param string $path 
* return void
* @see library/Zend/View/Zend_View_Interface#setScriptPath()
*/
public function setScriptPath($path)
{
if (is_readable($path)) 
{
//Sets all smarty directories
//$this->_smarty->template_dir = $path;
$this->_smarty->template_dir = $path;
$this->_smarty->compile_dir = APPLICATION_PATH.'/cache/compile_dir';
$this->_smarty->cache_dir = APPLICATION_PATH . '/cache';
$this->_smarty->config_dir = APPLICATION_PATH . '/configs';
//$this->_smarty->testInstall();

get_class_methods('Smarty');
return;
}

throw new Exception('Invalid path provided');
}

/**
* ��������� ���� � ��������
* 
* @return string
* @see library/Zend/View/Zend_View_Interface#getScriptPaths()
*/
public function getScriptPaths()
{
return $this->_smarty->template_dir;
}

/**
* ��������� ���� � ��������
* 
* @param string $path
* @param string prefix unused
* @return void
* @see library/Zend/View/Zend_View_Interface#setBasePath()
*/
public function setBasePath($path, $prefix = 'Zend_View')
{
return $this->setScriptPath($path);
}

/**
* ������ ���� � ����������
*
* @param string $path
* @param string $prefix Unused
* @return void
*/
public function addBasePath($path, $prefix = 'Zend_View')
{
return $this->setScriptPath($path);
}

/**
* ��������� ���������� �� �����
* 
* @param string $key ����.
* @param mixed $val ��������.
* @return void
*/
public function __set($key, $val)
{
$this->_smarty->assign($key, $val);
}

/**
* ��������� ���������� �� �����
* 
* @param $key
* @return unknown_type
*/
public function __get($key)
{
return $this->_smarty->get_template_vars($key);
}

/**
* �������� �� ������������� �� �����
*
* @param string $key
* @return boolean
*/
public function __isset($key)
{
return (null !== $this->_smarty->get_template_vars($key));
}

/**
* ������� ���������� �� �����
*
* @param string $key
* @return void
*/
public function __unset($key)
{
$this->_smarty->clear_assign($key);
}

/** 
*  
* @see __set()
* @param string|array $spec ���� ���� ���� ��� �����
* @param mixed $value �������� ��� �����(�� �����������)
* @return void
*/
public function assign($spec, $value = null)
{
if (is_array($spec)) {
$this->_smarty->assign($spec);
return;
}

$this->_smarty->assign($spec, $value);
}

/**
*
*������� ���������� �������
*
* @return void
*/
public function clearVars()
{
$this->_smarty->clear_all_assign();
}
/**
 * 
 * ����� � ������
 * @param sting $name
 */

public function display($name)
{
$this->_smarty->display($name);
}
/**
* ��������� �� ������(� ��� ������� �� display()???)
*
* @param string $name The template to process.
* @return string The output.
*/
public function render($name)
{
	return $this->_smarty->fetch($name);
}
}

?>