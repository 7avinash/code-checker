<?php

session_start();

require('includes/conn.inc');

$email =$_POST['email'];
$pass = $_POST['pass'];

$email_teacher = "teacher@iitgn.ac.in";
$pass_teacher = "pass";

if($email==$email_teacher and $pass==$pass_teacher) {

   $_SESSION['user']=$user;
    header('Location: http://localhost/code/Teacher/index.php');  
    
}

else {

$result = mysqli_query($conn, "SELECT * FROM user_info WHERE email_id='$email'");




    if($result){
        
        while ($row = mysqli_fetch_array($result)) {
            $hash = $row["user_password"];
            $user_id=$row["user_id"];
        }

        if (password_verify($pass,$hash)) {
            $_SESSION['logged_user']=$user_id;
            header('Location: http://localhost/code/Student/index.php?user_id='.$user_id);            
        }
        else {
            echo "Incorrect password</br></br>";
        } 
    }

    else {
        echo "Invalid email... Try again...</br></br>";
    } 
    
}

?>