<?php
/**
 * Created by Administrator.
 * Date: 2017/2/17
 */
session_start();
if(isset($_SESSION['username'])){
    echo '用户 '.$_SESSION['username'].' 登录成功！<br/>';
    echo '<a href="logout.php">退出登录</a>';
}