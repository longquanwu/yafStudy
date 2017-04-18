<?php
/**
 * Index.php
 * User: wlq314@qq.com
 * Time: 2017/4/18  16:10
 */

class IndexController extends Yaf_Controller_Abstract {
    public function indexAction() {//默认Action
        $this->getView()->assign("content", "Hello World");
    }
}
