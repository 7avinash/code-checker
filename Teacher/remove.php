<?php

    include('../includes/conn.inc');

    $id = $_GET['ques_id'];

    $del_ques = mysqli_query($conn,"DELETE FROM ques_info WHERE ques_id='$id'");
  
    $del_out = mysqli_query($conn,"DELETE FROM teacher_outputs WHERE teacher_output_id='$id'");
 
    $del_cases = mysqli_query($conn,"DELETE FROM test_cases WHERE teacher_input_id='$id'");

?>

<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/index.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
            
    </head>
    
    <body>
    
        <h1>Question Deleted Secessfully!</h1>

    
    </body>

</html>