<?php
require_once 'Zend/Controller/Action.php';
require_once 'Zend/Date.php';

class InitsampleController extends Zend_Controller_Action
{
    public function init()
    {
        $this->view->assign('message', '初期化処理を呼び出しました');
    }
    public function preDispatch()
    {
        $date = new Zend_Date();
        $this->view->assign('dt', $date->get(Zend_Date::TIMES));
        if(($date->compare('09:00:00', Zend_Date::TIMES) < 0)
            ||($date->compare('18:00:00', Zend_Date::TIMES) > 0)) {  // (1)
            $this->view->assign(
                'message2', '営業時間は9時から17時までです');
            $this->_forward('index','index');  // (2)
        } else {
        $this->view->assign('message2', 'いらっしゃいませ');
        }
    }
    public function indexAction()
    {
        $this->view->assign('actionname', 'indexアクションです');
    }
    public function index2Action()
    {
        $this->view->assign('actionname', 'index2アクションです');
    }
}