<?php
/**
 * Login.php
 * User: wlq314@qq.com
 * Time: 2017/4/18  23:10
 */

class LoginController extends Yaf_Controller_Abstract {

    public function indexAction() {
        Yaf_Dispatcher::getInstance()->disableView();
        echo 'modules/Api/controllers/Login   登录';
    }

}