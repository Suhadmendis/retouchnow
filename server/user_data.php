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




if ($_GET["Command"] == "register") {
    header('Content-Type: application/json');
 
  
    $sql = "SELECT * FROM m_registration where email = '" . $_GET['email'] . "'";
    $result = $conn->query($sql);
    $row = $result->fetchAll(); 
    echo sizeof($row);

    if (sizeof($row) == 0) {
    
         try {
             $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
             $conn->beginTransaction();
    
             $CURRENT_USER = "User Name";
            
             $sql      = "SELECT reg_ref FROM sys_info";
             $resul    = $conn->query($sql);
             $row      = $resul->fetch();
             $no       = $row["reg_ref"];
             $tmpinvno = "0000000000" . $row["reg_ref"];
             $lenth    = strlen($tmpinvno);
             $no1      = trim("REG/") . substr($tmpinvno, $lenth - 10);
    
        
            $sql    = "Insert into m_registration(REF, first_name, last_name, email, password)values
                 ('" . $no1 . "' ,'" . $_GET['first_name'] . "','" . $_GET['last_name'] . "','" . $_GET['email'] . "','" . $_GET['password'] . "')";
             $result = $conn->query($sql);
    
             $no2    = $no + 1;
             $sql    = "update sys_info set reg_ref = '" . $no2 . "' where reg_ref = '" . $no . "'";
             $result = $conn->query($sql);
    
             $sql = "Insert into sys_log(REF, entry, operation, user, ip)values
                             ('" . $no1 . "' ,'entry' ,'SAVE Client'  ,'" . $CURRENT_USER . "' ,'ip')";
             $result = $conn->query($sql);
    
             $conn->commit();
             echo "Saved";
    
         } catch (Exception $e) {
             $conn->rollBack();
             echo $e;
         } 
    }else{

        echo 'Already Exists';
    }
 
     
 }
 

 ?>