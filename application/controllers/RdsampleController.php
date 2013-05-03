<?php
require_once 'Zend/Controller/Action.php';
class RdsampleController extends Zend_Controller_Action{
    protected $_redirector = null;

    public function init()
    {
        $this->_redirector = $this->_helper->getHelper('Redirector');
    }

    public function wingsAction()
    {
         $this->_redirector->gotoUrl('http://www.google.co.jp');
    }
}
