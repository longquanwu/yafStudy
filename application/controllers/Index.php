<?php
/**
 * Index.php
 * User: wlq314@qq.com
 * Time: 2017/4/18  16:10
 */

$msg = [];
function callback($retval, $callinfo) {
    $retval = is_array($retval) ? $retval : [];
    global $msg;
    $msg = array_merge($msg, $retval);
    if (isset($msg['xing']) && isset($msg['name'])) {
        echo $msg['xing'] . $msg['name'];
    }
}

function error_callback($type, $error, $callinfo) {
    var_dump($error);
}



class IndexController extends Yaf_Controller_Abstract {

    public function indexAction() {
        $this->getView()->assign("name", "趣炒股");
        $this->getView()->assign("time", date('Y-m-d H:i:s'));
        $this->getView()->assign("content", "Hello World");
    }

    public function infoAction() {//默认Action
        $this->getView()->assign("content", "Hello World");
        phpinfo();
    }

    public function yarAction() {
        Yar_Concurrent_Client::call("http://service.quchaogu.com/service1.php", "Api", [], "callback", "error_callback", array(YAR_OPT_PACKAGER => "msgpack"));
        Yar_Concurrent_Client::call("http://service.quchaogu.com/service2.php", "Api", [], "callback", "error_callback", array(YAR_OPT_PACKAGER => "msgpack"));

        Yar_Concurrent_Client::loop("callback", "error_callback"); //send the requests, 
        exit();
    }

    public function mysqlAction() {
//        Yaf_Dispatcher::getInstance()->disableView();
        $mod = new baseModel();

        $sql = 'select * from user limit 3';

        $data = $mod->get_all($sql);
        $this->getView()->assign("data", $data);
    }

}
