<?php
/**
 * Index.php
 * User: wlq314@qq.com
 * Time: 2017/4/18  16:10
 */

function callback($retval, $callinfo) {
    echo $retval;
}

function error_callback($type, $error, $callinfo) {
    var_dump($error);
}



class IndexController extends Yaf_Controller_Abstract {

    public function indexAction() {//默认Action
        $this->getView()->assign("content", "Hello World");
//        phpinfo();
    }

    public function yarAction() {
        Yar_Concurrent_Client::call("http://service.quchaogu.com/service1.php", "api", [], "callback", "error_callback", array(YAR_OPT_PACKAGER => "msgpack"));
        Yar_Concurrent_Client::call("http://service.quchaogu.com/service2.php", "api", [], "callback", "error_callback", array(YAR_OPT_PACKAGER => "msgpack"));

        Yar_Concurrent_Client::loop("callback", "error_callback"); //send the requests, 
        exit();
    }

}
