<?php
/**
 * Created by Administrator.
 * Date: 2017/2/17
 */
session_start();
session_unset($_SESSION['username']);
header('Location:index.php');