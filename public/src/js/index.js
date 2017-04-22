/**
 * Author: wlq314@qq.com
 * Date: 2017/4/21  14:11
 */

function q() {
    alert('事件Q');
}

function c() {
    document.getElementById('c').innerHTML = document.getElementById('c').innerHTML == '趣炒股' ? '事件C' : '趣炒股';
}

function show() {
    document.getElementById('loginModal').className = 'modal show';
}
