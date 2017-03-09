<?php
/**
 * Created by Administrator.
 * Date: 2017/2/21
 */

/**
 * mysqli 连接方式
 * 1.连接数据库
 * 2.选择要操作的数据库并且设置字符集
 * 3.数据库操作(增、删、改、差)
 * 4.施放结果集并且关闭连接
 */

//  1.连接数据库
//$link = mysqli_connect('localhost','root','123456','ewen');
$link = mysqli_connect('localhost','root','123456');
if(!$link){
    echo '数据库连接失败，错误代码：'.mysqli_connect_errno().' 错误信息：'.mysqli_connect_error().'<br/>';
} else{
    echo '数据库连接成功<br/>';
}

//  2.选择要操作的数据库并且设置字符集
mysqli_select_db($link,'ewen');
mysqli_set_charset($link,'utf8');

//  3.数据库操作(增、删、改、差)
$sql = 'SELECT * FROM test LIMIT 5';
$result = mysqli_query($link,$sql); //  返回一个结果集

echo '<pre>';
//var_dump(mysqli_fetch_array($result));  //  返回关联数组和索引数组
//var_dump(mysqli_fetch_array($result,MYSQLI_ASSOC)); //  只返回关联数组
//var_dump(mysqli_fetch_assoc($result));  //  等同于上一行代码
//var_dump(mysqli_fetch_array($result,MYSQLI_NUM)); //  只返回索引数组
//var_dump(mysqli_fetch_row($result)); //  等同于上一行代码

//  通过while循环读取结果集所有数据
while($row = mysqli_fetch_assoc($result)){
    echo 'ID:'.$row['id'].' name:'.$row['name'].' age:'.$row['age'].'<br/>';
}

//  受影响函数
echo '受影响条数：'.mysqli_num_rows($result).'<br/>';

//  插入数据库
//$sql = "INSERT INTO test VALUES(8,'hhh',88)";
//$result = mysqli_query($link,$sql);
//if($result){
//    echo '新增数据成功<br/>';
//}else{
//    echo '新增数据失败，失败原因：'.mysqli_error($link).'<br/>';
//}

//  修改数据
$sql2 = "UPDATE test SET name = 'Ggg' WHERE id = 7";
$result = mysqli_query($link,$sql2);
if($result){
    echo '修改数据成功<br/>';
}else{
    echo '修改数据失败，失败原因：'.mysqli_error($link).'<br/>';
}

//  删除数据
$sql3 = "DELETE FROM test WHERE id = 7 LIMIT 1";
$result = mysqli_query($link,$sql3);
if($result){
    echo '删除数据成功<br/>';
}else{
    echo '删除数据失败，失败原因：'.mysqli_error($link).'<br/>';
}


//  4.施放结果集并且关闭连接
//mysqli_free_result($result);    //  一般在查询时会用到
mysqli_close($link);