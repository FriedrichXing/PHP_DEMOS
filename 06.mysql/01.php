<?php
/**
 * Created by Administrator.
 * Date: 2017/2/20
 */

/**
 * mysql 连接方式
 * 1.连接数据库
 * 2.选择要操作的数据库并且设置字符集
 * 3.执行sql语句
 * 4.关闭连接
 */

//  1.连接数据库
$conn = @mysql_connect('localhost','root','123456');

if(!$conn){
    echo '数据库连接失败，错误代码：'.mysql_errno().'错误信息：'.mysql_error().'<br/>';
} else{
    echo '数据库连接成功<br/>';
}

//  2.选择要操作的数据库并且设置字符集
mysql_select_db('ewen');
mysql_set_charset('utf8');

//  3.执行sql语句
$sql = 'SELECT * FROM test LIMIT 5';
$result = mysql_query($sql);

//var_dump($result);

//  读取结果集内容
//  mysql_fetch_array($result, MYSQL_ASSOC/MYSQL_NUM/MYSQL_BOTH);
//  mysql_fetch_array($result);   <==>   mysql_fetch_array($result, MYSQL_ASSOC);
//  mysql_fetch_row($result);     <==>   mysql_fetch_array($result, MYSQL_NUM);

echo '<pre>';
//var_dump(mysql_fetch_array($result,MYSQL_BOTH));
//var_dump(mysql_fetch_array($result,MYSQL_ASSOC));

//  通过while循环读取结果集所有数据
while($row = mysql_fetch_assoc($result)){
    echo 'ID:'.$row['id'].' name:'.$row['name'].' age:'.$row['age'].'<br/>';
}

