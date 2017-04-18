<?php
/**
 * cli.php
 * User: wlq314@qq.com
 * Time: 2017/4/18  17:17
 */

define("APP_PATH",  realpath(dirname(__FILE__) . '/../')); /* 指向public的上一级 */
$app  = new Yaf_Application(APP_PATH . "/conf/application.ini");

/** Yaf_Request_Simple 请求实例 */
$app->getDispatcher()->dispatch(new Yaf_Request_Simple('cli', '', 'sendmail', 'index', ['name' => 'qcg']));
