<?php

/**
 * Created by Administrator.
 * Date: 2017/2/25
 */
class User{
    public $userinfo = array(); //  用户的信息
    public $username ='';   //  可查询的用户名

    /**
     * 构造方法
     * $username string 用户名
     */
    public function __construct($username){
        $this->username = $username;
    }

    /**
     * 获取用户信息
     * $return array 用户信息
     */
    public function getUserinfo(){
        require_once __DIR__.'/config.php';
        $conn = mysql_connect($db_host,$db_user,$db_psw) or die('数据库连接失败'.mysql_error());
        mysql_select_db($db_name,$conn);    //  选择要操作的数据库
        mysql_query('SET NAMES '.$db_charset);  //  设置字符集

        $sql = "SELECT * FROM user WHERE username = '{$this->username}'";
        $res = mysql_query($sql,$conn);
        $userinfo = mysql_fetch_assoc($res);
        if($userinfo){
            $this->userinfo = $userinfo;
        }
        mysql_close($conn);
        return $this->userinfo;
    }


}