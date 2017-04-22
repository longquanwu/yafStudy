<?php
/**
 * service1.php
 * User: wlq314@qq.com
 * Time: 2017/4/18  19:56
 */

class API {
    /**
     * the doc info will be generated automatically into service info page.
     * @params
     * @return
     */
    public function api() {
        return ['name' => '炒股'];
    }

    protected function client_can_not_see() {
    }
}

$service = new Yar_Server(new API());
$service->handle();
?>
