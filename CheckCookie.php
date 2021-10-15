<?php

session_start();
date_default_timezone_set('Asia/Colombo');

function chk_cookie($UserName) {
    include './connection_sql.php';

    $action = "ok";
    //        $cookie_name = "user";
    //        $cookie_value = $UserName;
    //        setcookie($cookie_name, $cookie_value, time() + (43200), "/"); // 86400 = 1 day
    
    
    
            $cookie_name = "user";
            $cookie_value = $UserName;
    
            $token = substr(hash('sha512', mt_rand() . microtime()), 0, 50);
            $extime = time() + 160000000;
            $domain = $_SERVER['HTTP_HOST'];
            setcookie('user', $cookie_value, $extime, "/", $domain);
    
            //$ResponseXML .= "<stat><![CDATA[" . $action . "]]></stat>";
            $time = date("H:i:s");
            $today = date('Y-m-d');
    //        $sql = "Insert into loging(Name,User_Type,Date,Logon_Time,Sessioan_Id,ip) values ('" . $UserName . "','" . $_SESSION['User_Type'] . "','" . $today . "','" . $time . "','" . $_SESSION['sessionId'] . "','" . $ip . "')";
    //        $conn->exec($sql);
            return $action;
}
