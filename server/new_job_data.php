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


if ($_GET["Command"] == "save_operation") {
   header('Content-Type: application/json');

    
    $sub_jobs = json_decode($_GET["sub_jobs"]);

    // print_r($sub_jobs);
    // print_r($_GET);

    try {
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->beginTransaction();

        $CURRENT_USER = "User Name";
        
        $sql      = "SELECT order_ref FROM sys_info";
        $resul    = $conn->query($sql);
        $row      = $resul->fetch();
        $no       = $row["order_ref"];
        $tmpinvno = "0000000000" . $row["order_ref"];
        $lenth    = strlen($tmpinvno);
        $no1      = trim("JOB/") . substr($tmpinvno, $lenth - 10);

     
        $sql    = "Insert into m_order(REF, name, date, reg_ref, reg_name, tot, status)values
            ('" . $no1 . "' ,'" . $_GET['job_name'] . "','" . date('Y-m-d') . "','" . $_SESSION['REF'] . "','" . $_SESSION['CURRENT_USER'] . "','" . $_GET['tot'] . "','Delivered')";
        $result = $conn->query($sql);
// print_r($sub_jobs);

        for ($i=0; $i < sizeof($sub_jobs); $i++) { 
            $sql11    = "Insert into m_order_detail(REF, category_ref, cost, url, remark, status)values
            ('" . $no1 . "' ,'" . $sub_jobs[$i]->cat_ref . "','" . $sub_jobs[$i]->cost . "','" . $sub_jobs[$i]->image_name . "','" . $sub_jobs[$i]->notes . "','Delivered')";
            $result = $conn->query($sql11);
        }



        $no2    = $no + 1;
        $sql    = "update sys_info set order_ref = '" . $no2 . "' where order_ref = '" . $no . "'";
        $result = $conn->query($sql);

        $sql = "Insert into sys_log(REF, entry, operation, user, ip)values
                        ('" . $no1 . "' ,'entry' ,'SAVE Product'  ,'" . $CURRENT_USER . "' ,'ip')";
        $result = $conn->query($sql);

        $conn->commit();
        echo "Saved";

    } catch (Exception $e) {
        $conn->rollBack();
        echo $e;
    }  
}





