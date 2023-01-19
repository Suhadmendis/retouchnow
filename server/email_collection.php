<?php

session_start();
require "../phpmailertesting/PHPMailer/PHPMailerAutoload.php";


// require_once ("../DB_connector.php");


// date_default_timezone_set('Asia/Colombo');




//     function smtpmailer($to, $from, $from_name, $subject, $body)
//     {
//         $mail = new PHPMailer();
//         $mail->IsSMTP();
//         $mail->SMTPAuth = true; 
 
//         $mail->SMTPSecure = 'ssl'; 
//         $mail->Host = 'quotro.lk';
//         $mail->Port = 465;  
//         $mail->Username = 'support@megamarket.lk';
//         $mail->Password = 'G1%c2]Zn@am1';   
   
//    //   $path = 'reseller.pdf';
//    //   $mail->AddAttachment($path);
   
//         $mail->IsHTML(true);
//         $mail->From="support@megamarket.lk";
//         $mail->FromName=$from_name;
//         $mail->Sender=$from;
//         $mail->AddReplyTo($from, $from_name);
//         $mail->Subject = $subject;
//         $mail->Body = $body;
//         $mail->AddAddress($to);
//         if(!$mail->Send())
//         {
//             $error ="Please try Later, Error Occured while Processing...";
//             return $error; 
//         }
//         else 
//         {
//             $error = "Thanks You !! Your email is sent.";  
//             return $error;
//         }
//     }



if ($_GET["Command"] == "recover_pass") {
    
echo 'fsdf';

        // echo $_GET['email_to_revover'];
    $to   = 'suhad.a.mendis@gmail.com';
    $from = 'support@megamarket.lk';
    $name = 'Books and Beyond';
    $subj = 'Password Reset';



   
    
    // // $status = "";
    // if(true){
    //   $msg = '
    //   <div style="background-color: #ad1f23;">
    //   <h1 style="color: white;">Reset your password</h1>
    //   </div>
    //   <div>
    //   <h2>Hi fsdfs</h2>
    //   <p>We have received a request to reset the password for your <b>Books and Beyond</b> account. Use the link below to set a new password.</p>
    //   <br>
    //   <p>Please copy this link and paste it on your browser</p>
    //   <br>
      
    //   <br>
    //   <br>
    //   <p><b>If you no longer wish to make the above change, please disregard this email.</b></p>
    //   <p>Thanks,</p>

    //   </div>';

      
    //   $error = smtpmailer($to,$from, $name ,$subj, $msg);

    //   echo $error

    // }else{
    //   echo "No User";
    // }


   





    // try {
    //     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //     $conn->beginTransaction();

    //     // in the dev stage



    //     // in the dev stage

    //     $conn->commit();
    //     echo "Saved";
    // } catch (Exception $e) {
    //     $conn->rollBack();
    //     echo $e;
    // }
}