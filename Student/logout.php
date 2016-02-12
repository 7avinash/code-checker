<?php

    session_start();

    if(isset($_SESSION['logged_user'])){

        session_unset();
        session_destroy();

        header('Location: http://localhost/code/');
    }

    else { 
        echo "You are already logged out</br></br>";
    }


    echo "<a href='../login_form.php'>Click here to Log in </a>";

?>