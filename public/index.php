<?php

ini_set("display_errors", "on");
error_reporting(E_ALL | E_STRICT);

define("APP_PATH",  realpath(dirname(__FILE__) . '/../')); /* 指向public的上一级 */
$app  = new Yaf_Application(APP_PATH . "/conf/application.ini");
$app->run();
