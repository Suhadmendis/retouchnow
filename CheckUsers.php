<?php

session_start();
date_default_timezone_set('Asia/Colombo');



// require_once ("../DB_connector.php");
require "phpmailertesting/PHPMailer/PHPMailerAutoload.php";


// print_r($_POST);


function smtpmailer($to, $from, $from_name, $subject, $body)
    {
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true; 
 
        $mail->SMTPSecure = 'ssl'; 
        $mail->Host = 'talleeslivestream.com';
        $mail->Port = 465;  
        $mail->Username = 'autoreply@talleeslivestream.com';
        $mail->Password = 'hUb[!5YrkmdM';   
   
   //   $path = 'reseller.pdf';
   //   $mail->AddAttachment($path);
   
        $mail->IsHTML(true);
        $mail->From="autoreply@talleeslivestream.com";
        $mail->FromName=$from_name;
        $mail->Sender=$from;
        $mail->AddReplyTo($from, $from_name);
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->AddAddress($to);
        if(!$mail->Send())
        {
            // $error ="Please try Later, Error Occured while Processing...";
            $error ="0";
            return $error; 
        }
        else 
        {
            // $error = "Thanks You !! Your email is sent.";  
            $error = "1";  
            return $error;
        }
    }







$Command = "";
if (isset($_GET['Command'])) {

    $Command = $_GET["Command"];
    include './connection_sql.php';
}

if ($Command == "CheckUsers") {



    try {
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->beginTransaction();


           $sql = "Insert into user_mast(user_name, mobile, display_name)values
                        ('" . $_GET['UserName'] . "','" . $_GET['Password'] . "','" . $_GET['display_name'] . "')";
            $result = $conn->query($sql);

            $action = "ok";

            
            
            
            $cookie_name = "user";
            $cookie_value = "John Doe";
            setcookie('tallleesstreamsanofi', $cookie_value, time() + (86400 * 30), "/");
        

        $conn->commit();

        echo "Saved";
    } catch (Exception $e) {
        $conn->rollBack();
        echo $e;
    }

  

}

























































if ($Command == "register") {



    try {
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->beginTransaction();


           $sql = "Insert into registration(name, mobile, email, speciality)values
                        ('" . $_GET['name'] . "','" . $_GET['mobile'] . "','" . $_GET['email'] . "','" . $_GET['speciality'] . "')";
            $result = $conn->query($sql);

            $action = "ok";
          
            
            if($action == "ok"){

                // $full_name = $_POST['first_name']." ".$_POST['last_name'];
                // $email = $_POST['email'];
                // $number = $_POST['mobile'];
                // $street_address = $_POST['street_address'];
                // $branch = $_POST['branch'];
                // $contact_by_internet = $_POST['contact_by_internet'];




                // echo $_GET['email_to_revover'];
                // $to   = "suhad.a.mendis@gmail.com";
                $to   = $_GET['email'];
                $from = 'autoreply@talleeslivestream.com';
                $name = 'Tallees';
                $subj = 'Sanofi Webinar';


                $msg = "<div class='info-pallet'>
                    <p class='info-pill'><strong>Thank you for Registering.</strong></p>
                    <p class='info-pill'>Follow the link to join the Live Webinar on 16th October at 7.30pm</p>
                    <p class='info-pill'>https://sanofi.talleeslivestream.com/auth.php</p>
                </div>";

                
                // $msg = "ds";

                // $error=smtpmailer($to,$from, $name ,$subj, $msg);


                // if($error == 1){
                //     echo "E-mail Sent";
                // }else{
                //     echo "E-mail not Sent";
                // }

                $response = file_get_contents('https://cccl.lk/IELTS/test.php?Command=register&name=fnsd&mobile=fdsg&email='. $to .'&speciality=sfdsdf');
            
                $response = json_decode($response);

                echo $response;


            }
        

        $conn->commit();

        echo "Saved";
    } catch (Exception $e) {
        $conn->rollBack();
        echo $e;
    }

  

}


if ($Command == "showDataRegister") {
    header('Content-Type: application/json');
    
    $objArray = Array();

   
    $sql = "SELECT * FROM registration";
   
    $result = $conn->query($sql);
    $row = $result->fetchAll();
  
    array_push($objArray,$row);

    $sql = "SELECT * FROM user_mast";
   
    $result = $conn->query($sql);
    $row = $result->fetchAll();
  
    array_push($objArray,$row);

    echo json_encode($objArray);
}

if ($_GET["Command"] == "save_inv") {


    $sql = "select * from user_mast where user_name='" . $_GET["user_name"] . "'";
    $result = $conn->query($sql);
    if ($row1 = $result->fetch()) {
        echo "User Found !!!";
    } else {
        $sql = "insert into user_mast(user_name,user_type, password,U_email,R_email) values ('" . $_GET["user_name"] . "', '" . $_GET["user_type"] . "', '" . $_GET["password"] . "', '" . $_GET["U_email"] . "', '" . $_GET["R_email"] . "')";
//        echo $sql;
        $result = $conn->query($sql);
//        echo "Saved";

        date_default_timezone_set('Asia/Colombo');

        require 'email/PHPMailerAutoload.php';
        $mail = new PHPMailer;
        $mail->isSMTP();

        $mail->Host = 'mail.infodatasl.com';
        $mail->Port = 587;
        $mail->SMTPSecure = 'tls';
        $mail->SMTPAuth = true;
        $mail->Username = "autoemail@infodatasl.com";
        $mail->Password = "autoemail@123";


        $sql = "select * from user_mast where user_name='" . $_GET["user_name"] . "'";
        $result = $conn->query($sql);
//        echo $sql;
        if ($row = $result->fetch()) {

            $uemail = $row["U_email"];
            $remail = $row["R_email"];

            $mail->setFrom('autoemail@infodatasl.com', 'Kot System');
            $mail->addAddress($uemail, 'hhh');
        }

        $table = "";
        $table .= "<table style = 'width: 660px;' class = 'table1'>
                    <tr>
                    <th class = 'bottom head' colspan = '3'><center>Unichela Biyagama</center></th>
                    </tr>

                    <tr>
                    <th class = 'bottom head' colspan = '3'><center>Kot System Login Details</center></th>
                    </tr>
                    <tr>
                    <th class = 'bottom head' colspan = '3'><center></center></th>
                    </tr>
                    <tr>
                    <th class = 'bottom head' colspan = '3'><center></center></th>
                    </tr>
                    <tr>
                    <th class = 'bottom head' colspan = '3'><center></center></th>
                    </tr>
                    </table>";

        $table .= "<table style = 'width: 660px;' class = 'table1'><tr>
                    <th style = 'width: 40px;' class = 'left'>User Name :</th>
                    <th style = 'width: 200px;' class = 'left'>" . $_GET['user_name'] . "</th>

                    </tr></table>";

        $table .= "<table style = 'width: 660px;' class = 'table1'><tr>
                    <th style = 'width: 40px;' class = 'left'>Password :</th>
                    <th style = 'width: 200px;' class = 'left'>" . $_GET['password'] . "</th>

                    </tr></table>";

        $table .= "<table style = 'width: 660px;' class = 'table1'><tr>
                    <th style = 'width: 20px;' class = 'left'></th>
                    <th style = 'width: 200px;' class = 'left'>Login Url :</th>
                    <a href = 'http://infodatasl.com/UnichelaBiyagama/index.php'>Login Here</a>

                    </tr></table>";


        $mail->Body = '"' . $table . '"';
        $mail->Subject = 'Kot Order';
        $mail->isHTML(true);

        if (!$mail->send()) {
            echo "Mailer Error: " . $mail->ErrorInfo;
        } else {
            echo "Saved";
        }
    }
}

if ($Command == "logout") {

    $today = date('Y-m-d');
    $domain = $_SERVER['HTTP_HOST'];
    setcookie('tallleesstreamsanofi', "", 1, "/", $domain);



    session_unset();
    session_destroy();
}


if ($_GET["Command"] == "getdt") {

    $tb = "";
    $tb .= "<table class='table table-hover'>";


    $sql = "select * from user_mast order by user_name desc";




    $tb .= "<tr>";
    $tb .= "<th style=\"width: 100px;\" class=\"success\">Name</th>";
    $tb .= "<th style=\"width: 200px;\" class=\"success\">User Type</th>";
    $tb .= "<th style=\"width: 100px;\" class=\"success\">User Department</th>";
    $tb .= "<th style=\"width: 100px;\" class=\"success\">User Email</th>";
    $tb .= "<th style=\"width: 200px;\" class=\"success\">Department Head Mail</th>";

    $tb .= "</tr>";

    foreach ($conn->query($sql) as $row) {
        $tb .= "<tr>";
        $tb .= "<td onclick=\"getcode('" . $row['user_name'] . "','" . $row['user_type'] . "','" . $row['user_depart'] . "','" . $row['U_email'] . "','" . $row['R_email'] . "')\">" . $row['user_name'] . "</td>";
        $tb .= "<td onclick=\"getcode('" . $row['user_name'] . "','" . $row['user_type'] . "','" . $row['user_depart'] . "','" . $row['U_email'] . "','" . $row['R_email'] . "')\">" . $row['user_type'] . "</td>";
        $tb .= "<td onclick=\"getcode('" . $row['user_name'] . "','" . $row['user_type'] . "','" . $row['user_depart'] . "','" . $row['U_email'] . "','" . $row['R_email'] . "')\">" . $row['user_depart'] . "</td>";
        $tb .= "<td onclick=\"getcode('" . $row['user_name'] . "','" . $row['user_type'] . "','" . $row['user_depart'] . "','" . $row['U_email'] . "','" . $row['R_email'] . "')\">" . $row['U_email'] . "</td>";
        $tb .= "<td onclick=\"getcode('" . $row['user_name'] . "','" . $row['user_type'] . "','" . $row['user_depart'] . "','" . $row['U_email'] . "','" . $row['R_email'] . "')\">" . $row['R_email'] . "</td>";
        $tb .= "</tr>";
    }
    $tb .= "</table>";

    echo $tb;
}


if ($_GET["Command"] == "edit") {
    try {
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->beginTransaction();

        $sql2 = "update user_mast set user_type = '" . $_GET['user_type'] . "',user_depart = '" . $_GET['user_depart'] . "',U_email = '" . $_GET['U_email'] . "',R_email = '" . $_GET['R_email'] . "' where user_name = '" . $_GET['user_name'] . "'";

        $result = $conn->query($sql2);

        $conn->commit();
        echo "EDIT";
    } catch (Exception $e) {
        $conn->rollBack();
        echo $e;
    }
}

if ($_GET["Command"] == "delete") {

    $sql = "delete from user_mast where user_name = '" . $_GET['user_name'] . "'";
    $result = $conn->query($sql);

//    $conn->commit();
    echo "Delete";
}

?>