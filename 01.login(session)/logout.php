<?php
/**
 * Created by Administrator.
 * Date: 2017/2/17
 */
session_start();
session_unset($_SESSION['username']);
echo '退出成功...';
header('Location:index.php');