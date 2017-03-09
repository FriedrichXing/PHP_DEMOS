<?php
/**
 * Created by Administrator.
 * Date: 2017/2/25
 */

//  1.引入数据库配置信息
require_once __DIR__.'/config.php';

//  2.获取要查询的用户名(通过地址栏传递参数)
$username = isset($_GET['username']) ? $_GET['username'] : '';

//  3.连接数据库
$conn = @mysql_connect($db_host,$db_user,$db_psw) or die('数据库连接失败：'.mysql_error());
mysql_select_db($db_name,$conn);    //  选择要操作的数据库名
mysql_query('SET NAMES '.$db_charset);  //  设置字符集

//  4.构建查询的sql语句
$sql = "SELECT * FROM user WHERE username = '{$username}'";

//  5.查询数据库获取用户信息
$res = mysql_query($sql,$conn);
$userinfo = mysql_fetch_assoc($res);
echo '<pre>';
//print_r($userinfo);

//  6.关闭数据库
mysql_close($conn);

//  7.格式化输出用户信息
if($userinfo){
    echo '用户名：'.$username.'<br/>用户ID：'.$userinfo['uid'].'<br/>用户密码：'.$userinfo['psw'].'<br/>年龄：'.$userinfo['age'].'<br/>';
}else{
    echo '<font>不存在用户名为：'.$username.'的用户<br/>';
}