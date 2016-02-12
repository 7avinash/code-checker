<?php

require('conn.inc');

session_start();

if(!isset($_SESSION['logged_user'])){

echo 'You must be logged in to see this page.</br></br>';
    

echo "<a href='../login_form.php'>Click here to Log in </a>";    
  
  
exit();    
    
}

?>