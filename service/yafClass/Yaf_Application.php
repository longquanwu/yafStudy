<?php
/**
 * Yaf_Application.php
 * User: wlq314@qq.com
 * Time: 2017/4/19  14:10
 */

final class Yaf_Application {
    protected $_config;
    protected $_dispatcher;
    protected static $_app;
    protected $_run = FALSE;
    protected $_environ;
    protected $_modules;
    public function __construct($config, $section = 'ap.environ') {}
    public function bootstrap() {}
    public function run() {}
    public function getDispatcher() {}
    public function getConfig() {}
    public function environ() {}
    public function geModules() {}
    public static function app() {}
    public function execute($function , $parameter = NULL ,$params = NULL ) {}
}