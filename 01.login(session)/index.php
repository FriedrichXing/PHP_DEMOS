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
    <title>登录实例(SESSION机制)</title>
</head>
<body>

    <form action="login.php" method="post">
        <p>用户名：<input type="text" name="username" value="admin"></p>
        <p>密&nbsp;码：<input type="password" name="password" value="123456"></p>
        <p><input type="submit" value="登录"></p>
    </form>

</body>
</html>