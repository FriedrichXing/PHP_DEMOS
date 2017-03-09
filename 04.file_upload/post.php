<?php
/**
 * Created by Administrator.
 * Date: 2017/2/18
 */

//  保存在服务端的临时文件，在代码执行结束时自动清除
echo '<pre>';
//print_r($_FILES);

define('UPLOAD_DIR', './uploads/');

if ($_FILES['file']) {
    $file = $_FILES['file'];
//    print_r($file);

    if (is_uploaded_file($file['tmp_name'])) {
        //  获取文件后缀名
        $ext = substr($file['name'], strrpos($file['name'], '.'));

        //  更换文件名
        $new_name = date('Ymd') . '_' . mt_rand(1, 100);

        $new_name .= $ext;

//        echo $new_name;

        //  保存上传文件
        if (move_uploaded_file($file['tmp_name'], UPLOAD_DIR . $new_name)) {
            echo '上传文件成功';
        } else {
            echo '保存上传文件失败';
        }

    } else {
        echo '请勿非法上传，必须通过HTTP POST方式上传文件';
    }

}