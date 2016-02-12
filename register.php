<?php

    require('includes/conn.inc');

    $confirm_code=md5(uniqid(rand())); 

    $first_name =$_POST['first_name'];
    $last_name =$_POST['last_name'];
    $email =$_POST['email_id'];
    $pass = $_POST['pass'];


    $hash = password_hash("$pass", PASSWORD_BCRYPT, ['cost' => 12,]);
 
    $sql="INSERT INTO temp_user_info(confirm_code, first_name, last_name, email_id, user_password)
        VALUES('$confirm_code', '$first_name', '$last_name', '$email', '$hash')";

    $result=mysqli_query($conn, $sql);

// Mailing the confirmation link

require 'mail/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 4;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = '***********';                 // SMTP username Add your Gmail id here
$mail->Password = '***********';                           // SMTP password Your password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->From = '********';		//Your Email
$mail->FromName = 'IIT-Gn Coding Club ';
$mail->addAddress($email);              


$mail->Subject = 'Verify your email';
$mail->Body    =  'http://localhost/code/confirm.php?passkey='."$confirm_code" ;

    

if(!$mail->send()) {
    echo 'There was some problem in registeration.';
    echo 'You are being redirected';
    header('Refresh : 5; index.php');
}
    
else {
    echo '<h3>Your account has been registered sucessfully!</h3>';
    header('Refresh : 3; index.php');
}

?>