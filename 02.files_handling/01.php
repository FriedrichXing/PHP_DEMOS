<?php
/**
 * Created by Administrator.
 * Date: 2017/2/17
 */

/**
 * 打开文件
 * 操作文件（读写或者其他操作）
 * 关闭文件
 */

//  要打开的文件
$file = './test.txt';

//  打开文件
$fp = fopen($file,'ab');    //  以二进制写入的方式打开文件

if($fp == false){
    echo '打开文件失败<br/>';
}else{
    echo '打开文件成功<br/>';

    $str = md5(time());
    echo $str,'<br/>';

    //  写入内容
    fwrite($fp,$str);

    //  关闭文件
    fclose($fp);
}
