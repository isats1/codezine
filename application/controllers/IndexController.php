<?php
require_once 'Zend/Controller/Action.php';
require_once 'Zend/Date.php';

class IndexController extends Zend_Controller_Action
{
    public function indexAction()
    {
        $date=new Zend_Date;
        $this->view->assign('dt', $date->get(Zend_Date::TIMES));
    }
}
