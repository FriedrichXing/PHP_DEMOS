<?php
/**
 * Created by Administrator.
 * Date: 2017/2/24
 */

//  系统内置常量的使用
echo 'PHP版本：'.PHP_VERSION.'<br/>';
echo '当前系统：'.PHP_OS.'<br/>';
echo '文件路径：'.__FILE__.'<br/>';
echo '当前行数：'.__LINE__.'<br/>';

//  自定义常量
define('CONSTANT1','abcd');
echo '自定义常量：'.CONSTANT1.'<br/>';