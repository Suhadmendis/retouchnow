<?php

session_start();


require_once ("../connection_sql.php");


date_default_timezone_set('Asia/Colombo');

if ($_GET["Command"] == "generate") {
   header('Content-Type: application/json');
    
    $objArray = Array();
    $sql = "SELECT * FROM m_order where REF = '" . $_GET['REF'] . "'";
    $result = $conn->query($sql);
    $row = $result->fetchAll(); 

    for ($i=0; $i < sizeof($row); $i++) { 
        $sql1 = "SELECT * FROM m_order_detail where REF = '" . $row[$i]['REF'] . "'";
        $result = $conn->query($sql1);
        $row1 = $result->fetchAll(); 


        for ($j=0; $j < sizeof($row1); $j++) { 
            $sql1 = "SELECT * FROM m_category where REF = '" . $row1[$j]['category_ref'] . "'";
            $result = $conn->query($sql1);
            $row2 = $result->fetchAll(); 
    
            $row1[$j]['category'] = $row2;
        }

        $row[$i]['sub_jobs'] = $row1;
    }

    

    array_push($objArray,$row);

    echo json_encode($objArray);
    
}
