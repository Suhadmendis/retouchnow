<?php

session_start();


require_once ("../connection_sql.php");


date_default_timezone_set('Asia/Colombo');

if ($_GET["Command"] == "check") {
   header('Content-Type: application/json');

    $REF = "";
    if (isset($_SESSION['REF'])) {
        $REF = $_SESSION['REF'];
    }
    

    $CHECK = "NO";
    if ($REF != "") {
        $CHECK = "YES";
    }



    $objArray = Array();
    array_push($objArray,$CHECK);

    echo json_encode($objArray);
    
}


