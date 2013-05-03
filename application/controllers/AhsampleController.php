<?php
require_once 'Zend/Controller/Action.php';
class AhsampleController extends Zend_Controller_Action{
    protected $_mysamplehelper = null;
    public function init()
    {
        Zend_Controller_Action_HelperBroker::addPath('../zendapps/controllers/helpers','My');
        $this->_mysamplehelper = $this->_helper->getHelper('Samplehelper');
    }
    public function indexAction()
    {
         $this->view->assign('message',$this->_mysamplehelper->ver());
    }
}
