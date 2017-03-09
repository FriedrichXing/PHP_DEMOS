<?php
/**
 * Created by Administrator.
 * Date: 2017/2/28
 */

//  引入数据库配置信息
require_once __DIR__.'/config.php';

$username = isset($_POST['username']) ? $_POST['username'] : '';
$psw = isset($_POST['password']) ? $_POST['password'] : '';
$conn = mysql_connect($db_host,$db_user,$db_psw) or die('数据库连接失败：'.mysql_error());

mysql_select_db($db_name,$conn);    //  选择要操作的数据库名
mysql_query('SET NAMES '.$db_charset);  //  设置字符集

$sql="select * from user where username='$username'";
$result=mysql_query($sql);

$row = mysql_fetch_array($result, MYSQL_ASSOC);

if (!mysql_num_rows($result))
{
    echo '注册成功,跳转登录页面...';
    header("Refresh:2;url=index.html");
}
else
{
    echo '已存在该用户，请重新输入...';
    header("Refresh:2;url=register.html");
}



mysql_close();


//echo '注册成功,跳转登录页面...';
//header("Refresh:2;url=index.html");