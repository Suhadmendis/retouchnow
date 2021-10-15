<?php

session_start();


require_once ("../connection_sql.php");


date_default_timezone_set('Asia/Colombo');

if ($_GET["Command"] == "generate") {
   header('Content-Type: application/json');

    
    $objArray = Array();
    $sql = "SELECT * FROM m_category";
    $result = $conn->query($sql);
    $row = $result->fetchAll(); 

    array_push($objArray,$row);

    echo json_encode($objArray);
    
}


