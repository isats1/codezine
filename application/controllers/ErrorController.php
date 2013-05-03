<?php
require_once 'Zend/Controller/Action.php';
class ErrorController extends Zend_Controller_Action
{
    public function errorAction()
    {
    $this->view->assign('errortype', $this->_getParam('error_handler')->type);
    }
}
