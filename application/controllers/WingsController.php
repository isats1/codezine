<?php
require_once 'Zend/Controller/Action.php';
require_once 'Zend/Date.php';

class WingsController extends Zend_Controller_Action
{
    public function codezineAction()
    {
        $date=new Zend_Date;
        $this->view->assign('dt', $date->get(Zend_Date::TIMES));
	$this->view->assign('routing_id', $this->_getParam('id'));
    }
}
