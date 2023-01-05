<?php
include '../class/Insert.class.php';
require '../Encryption.php';
$nonceValue = 'nonce_value';

$con_new_user = new Insert_class;

 //if(isset($_POST['submit'])){


    $fname=mysqli_real_escape_string($con_new_user->connection,$_POST['fname']);
    $lname=mysqli_real_escape_string($con_new_user->connection,$_POST['lname']);
    $email=mysqli_real_escape_string($con_new_user->connection,$_POST['email']);
    $phone=mysqli_real_escape_string($con_new_user->connection,$_POST['phone']);
    $service_type=mysqli_real_escape_string($con_new_user->connection,$_POST['service_type']);
    $appt_date=mysqli_real_escape_string($con_new_user->connection,$_POST['appt_date']);
    $appt_time=mysqli_real_escape_string($con_new_user->connection,$_POST['appt_time']);


// create object of encryption method
$Encryption = new Encryption();

// decrypt encrypted data before inserting to db
$fnameDecrypted = $Encryption->decrypt($fname, $nonceValue);
$lnameDecrypted = $Encryption->decrypt($lname, $nonceValue);
$emailDecrypted = $Encryption->decrypt($email, $nonceValue);
$phoneDecrypted = $Encryption->decrypt($phone, $nonceValue);
$service_typeDecrypted = $Encryption->decrypt($service_type, $nonceValue);
$appt_dateDecrypted = $Encryption->decrypt($appt_date, $nonceValue);
$appt_timeDecrypted = $Encryption->decrypt($appt_time, $nonceValue);

//$insert = $con_new_user->insert_user($fname,$lname,$email,$phone,$service_type,$appt_date,$appt_time);//old code 
$insert = $con_new_user->insert_user($fnameDecrypted,$lnameDecrypted,$emailDecrypted,$phoneDecrypted,$service_typeDecrypted,$appt_dateDecrypted,$appt_timeDecrypted);

if($insert){

   // header('location:../index.php');

  // echo '<script>alert("Success")</script>';
  echo "success";
  // echo "<script>window.location.href='../index.php';</script>";

}
else{

    echo "Error Insert!";
}
//}







// //   //send mail 
// $email = $_POST['email'];

//  $to=$email;
//  $body='<html>
//  <body>
//  <h4>Subject: testing only</h4>
//  <hr>

//  <p> Name : '.$fname.' '.$lname.' </p>
//  <br>

//  <p> Email :'.$email.'</p>
 
//  <p> Comment : this is just a test</p>

//  </body>

//  </html>';

//  $headers  ="From:alramile2@gmail.com>\r\n";
//  $headers .="reply-To:'.$email.'\r\n";
//  $headers .="NINE-Version: 1.0\r\n";
//  $headers .="Content-type: text/html; charset=utf-8";


// //confirmation mail
//  $user=$email;
//  $usersubject = "Admin";
//  $userheaders = "From: $email !!\n";
//  $usermessage = "Thank you.";


// //sending process
//  $send=mail($to, 'testing', $body, $headers);
//  $confirm=mail($user, $usersubject, $userheaders,$usermessage );

// //  if($send && $confirm){
// //   echo "Thank your for contacting me. I will be with you shortly.";
// //  }

// //  else{
// //   echo "Message sending failed.";
// //  }

//}
?>
