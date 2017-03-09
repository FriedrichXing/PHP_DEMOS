<?php
    session_start();
    if(isset($_SESSION['username'])){
        header('Location:user.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>用户登录(SESSION)</title>
</head>
<body>

<form action="login.php" method="post">
    用户名：<input type="text" name="username" value="admin"><br/>
    密码：<input type="password" name="password" value="123456"><br/>
    <input type="submit" value="提交">
</form>

</body>
</html>