<?php
/**
 * Created by Administrator.
 * Date: 2017/2/17
 */

/**
 * cookie记录用户浏览地址
 */

$url = $_SERVER['REQUEST_URI'];
echo '访问的地址为：<br/>',$url,'<br/>';


$arr = [];

if(isset($_COOKIE['his'])){
    $arr = unserialize($_COOKIE['his']);
    array_unshift($arr,$url);

    //  去重
    $arr = array_unique($arr);

    if(count($arr)>10){
        array_pop($arr);
    }
    setcookie('his',serialize($arr));

}else{
    $arr = $url;

    setcookie('his',serialize($arr));
}

echo '访问记录：';
echo '<pre>';
echo '<ol>';
foreach ($arr as $k=>$v) {
    echo '<li>'.$v.'</li>';
}
echo '</ol>';

echo '<a href="?id='.mt_rand(1,100).'">随机产生一条访问记录</a>';