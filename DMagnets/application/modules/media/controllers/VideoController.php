<?php

class Media_VideoController extends Zend_Controller_Action
{
	private $video;
	private $paginator;
	
	public function init()
	{
		$this->view->headLink()->appendStylesheet('/css/video_list.css');
		$this->view->headLink()->appendStylesheet('/css/item.css');
		$this->video = new Application_Model_DbTable_Video();
	}
	
	public function indexAction()
	{
		$this->paginator = $this->video->getAllVideo($this->_getParam('page',1),10);
		$this->postMethod();
	}
	
	public function moviesAction()
	{
		$this->paginator = $this->video->getAllVideo($this->_getParam('page',1),10,'no','no');
		$this->postMethod();
	}
	
	public function cartoonsAction()
	{
		$this->paginator = $this->video->getAllVideo($this->_getParam('page',1),10,'yes','no');
		$this->postMethod();
	}
	
	public function serialsAction()
	{
		$this->paginator = $this->video->getAllVideo($this->_getParam('page',1),10,'no','yes');
		$this->postMethod();
	}
	
	public function cserialsAction()
	{
		$this->paginator = $this->video->getAllVideo($this->_getParam('page',1),10,'yes','yes');
		$this->postMethod();
	}
	
	public function itemAction()
	{
		if($this->_getParam('id',null) != null){
			$this->view->item = $this->video->getVideo($this->_getParam('id'));
			$this->view->comment_flag = true;
		}
		else{
			$this->_helper->redirector('index');
		}
	}
	
	public function postMethod()
	{
		$item_count = $this->paginator->getCurrentItemCount();
		$this->view->paginator = $this->paginator;
		$this->view->total = $item_count;
		$this->view->none_col = (int)($item_count/5)*5+5-$item_count;
	}
}