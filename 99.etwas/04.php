<?php
/**
 * Created by Administrator.
 * Date: 2017/2/17
 */

//  session
session_start();
/**
 * 1.服务器端生成一个文件
 * 2.客户端要保存session_id(会话id)
 */

//  获取要保存到COOKIE中会话KEY
echo session_name(),'<br/>';

//  获取会话ID
echo session_id(),'<br/>';