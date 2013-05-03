<?php
require_once 'Zend/Controller/Action.php';
require_once 'Zend/Version.php';

class My_Samplehelper extends Zend_Controller_Action_Helper_Abstract
{
    public function ver() {
        return Zend_Version::VERSION;
    }
}
