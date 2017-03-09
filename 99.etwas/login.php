<?php
/**
 * Created by Administrator.
 * Date: 2017/2/17
 */
session_start();

if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    if($username == 'admin' && $password == '123456'){

        //  设置session
        $_SESSION['username'] = $username;

        header('Location:user.php');
    }else{
        echo '用户名或密码错误...';
    }
}