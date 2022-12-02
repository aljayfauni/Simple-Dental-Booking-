<?php
include '../class/Insert.class.php';

$con_new_user = new Insert_class;

 if(isset($_POST['submit'])){


    $fname=mysqli_real_escape_string($con_new_user->connection,$_POST['fname']);
    $lname=mysqli_real_escape_string($con_new_user->connection,$_POST['lname']);
    $email=mysqli_real_escape_string($con_new_user->connection,$_POST['email']);
    $phone=mysqli_real_escape_string($con_new_user->connection,$_POST['phone']);
    $service_type=mysqli_real_escape_string($con_new_user->connection,$_POST['service_type']);
    $appt_date=mysqli_real_escape_string($con_new_user->connection,$_POST['appt_date']);
    $appt_time=mysqli_real_escape_string($con_new_user->connection,$_POST['appt_time']);
    $Encrypt_password=password_hash($password,PASSWORD_DEFAULT);

$insert = $con_new_user->insert_user($fname,$lname,$email,$phone,$service_type,$appt_date,$appt_time);

if($insert){

   // header('location:../index.php');

   echo '<script>alert("Success")</script>';
   echo "<script>window.location.href='../index.php';</script>";

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

}
?>
