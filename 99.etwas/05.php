<?php
/**
 * Created by Administrator.
 * Date: 2017/2/17
 */

session_start();

//  设置session值
$_SESSION['a'] = 'aaa';
$_SESSION['b'] = 'bbb';
$_SESSION['c'] = 'ccc';

echo '<pre>';
print_r($_SESSION);

//  删除session值
unset($_SESSION['c']);
print_r($_SESSION);