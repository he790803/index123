<?php
$db_server ="localhost";
//資料庫名稱
$db_name = "contact";
//資料庫管理者帳號
$db_user = "he790803";
//資料庫管理者密碼
$db_passwd = "he0933152519";
$c = mysqli_connect($db_server, $db_user, $db_passwd,$db_name );
//對資料庫連線
if(!@mysqli_connect($db_server, $db_user, $db_passwd,$db_name ))
        die("無法對資料庫連線");
mysqli_query($c,"SET NAMES UTF8");
//資料庫連線採UTF8        
mysqli_select_db($c,$db_name);
$data = mysqli_query($c,"SELECT * FROM contact");

if(!@mysqli_select_db($c,$db_name))
        die("無法使用資料庫");
?>