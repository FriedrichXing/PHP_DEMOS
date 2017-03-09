<?php
/**
 * Created by Administrator.
 * Date: 2017/2/17
 */

/**
 * 使用cookie来记录用户访问的网址
 * 浏览记录是多条数据，用数组来保存
 * cookie只能保存字符串，如何保存数组？
 * 解决方案：通过序列化与反序列化函数解决 serialize() unserialize()
 */


/**
 * //  序列化与反序列化
 * $arr = [1,2,3];
 * $a = serialize($arr);
 * echo '序列化之后的字符串为：',$a,'<br/>';
 *
 * echo '<pre>';
 * echo '反序列化之后的数组为：';
 * print_r(unserialize($a));
 **/

//  1.获得到URL地址，用到$_SERVER['REQUEST_URI'];
$url = $_SERVER['REQUEST_URI'];
echo $url, '<br/>';

//  2.将URL地址放到cookie中
//  用一个数组保存URL
$arr = [];
//  首先判断是否有浏览记录，如果有，将当前URL放到浏览记录的最前面
//  如果不存在浏览记录，则新建浏览记录
if (isset($_COOKIE['his'])) {
    $arr = unserialize($_COOKIE['his']);    //  取出来的是字符串，需要反序列化
    array_unshift($arr, $url);

    //  重复的浏览记录去除掉
    $arr = array_unique($arr);

    //  只保存最近浏览的10条记录
    if (count($arr) > 10) {
        array_pop($arr);    //  将末尾的数据弹出
    }

    //  再次存放到cookie中
    setcookie('his', serialize($arr));
} else {
    $arr[] = $url;
    //  首次设置cookie
    setcookie('his', serialize($arr));
}

echo '历史浏览记录：<br/>';
echo '<pre>';
//    print_r($arr);
echo '<ol>';
foreach ($arr as $k => $v) {

    echo '<li>' . $v . '</li>';
}
echo '</ol>';

echo '<hr/>';
echo '<a href="?id=' . mt_rand(1, 100) . '">随机产生一个URL地址</a>';