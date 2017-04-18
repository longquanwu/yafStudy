<?php
/**
 * Sendmail.php
 * User: wlq314@qq.com
 * Time: 2017/4/18  17:25
 */

require(APP_PATH . "/application/library/Email.php");

class SendmailController extends Yaf_Controller_Abstract {

    /** @var Email */
    private $mail;

    public function indexAction() {
        $this->mail = new Email(
            [
                'host' => 'smtp.qq.com',  //邮箱的服务器地址
                'name' => '趣炒股',  //发件人姓名（昵称） 任意内容，显示在收件人邮件的发件人邮箱地址前的发件人姓名
                'from' => 'wlq314@qq.com',  //发件人邮箱地址
                'username' => '294556942',  //登录账号
                'password' => 'ytafbwykieawbibb',  //登录密码(注:如果是QQ邮箱,不是指登录密码,而是授权的登录密码)
            ]
        );

        if($this->mail->send(
            '294556942@qq.com',
            '趣炒股YAF定时邮件',
            '当前时间：' . date('Y-m-d H:i:s')
        )) {
            echo '发送成功';
        } else {
            print_r($this->mail->errorInfo());
        }
        exit();
    }

}