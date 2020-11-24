<?php
    $db_host = "localhost";
    $db_user = "admin";
    $db_pw = "admin";
    $db_name = "php1320200916";
    $db_charset = "utf8mb4";
    date_default_timezone_set("Asia/Taipei");
    $now = date("Y-m-d H:i:s");
    

    try {  
        $dsn = "mysql:host=localhost;dbname=php1320200916;charset=utf8mb4";
        $pdo = new PDO($dsn,$db_user,$db_pw);
    }catch(PDOException $e){
        echo $e->getMessage();
    }