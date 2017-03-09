<?php
/**
 * Created by Administrator.
 * Date: 2017/2/25
 */

require_once __DIR__.'/User.php';
$username = isset($_GET['username'])?$_GET['username']:'';
if(empty($username)){
    echo '用户名不能为空<br/>';
}

//  1.创建一个User对象
$xing = new User($username);

//  2.调用对象的方法，获取用户信息
$userinfo = $xing->getUserinfo();

//  3.格式化输出用户信息
if($userinfo){
    echo '用户名：'.$username.'<br/>用户ID：'.$userinfo['uid'].'<br/>用户密码：'.$userinfo['psw'].'<br/>年龄：'.$userinfo['age'].'<br/>';
}else{
    echo '<font>不存在用户名为：'.$username.'的用户<br/>';
}