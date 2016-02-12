<?php

    include('../includes/conn.inc');
    include('../includes/check2.php');


    $code = $_POST['student_code'];
    $id = $_POST['ques_id'];

    $result7 = mysqli_query($conn, "SELECT * FROM test_cases WHERE teacher_input_id= $id ");

     if($result7){
        
        while ($row = mysqli_fetch_array($result7)) {
            $test_case_1 = $row['test_case_1'];
            $test_case_2 = $row['test_case_2'];
            $test_case_3 = $row['test_case_3'];
            $test_case_4 = $row['test_case_4'];
            $test_case_5 = $row['test_case_5'];
            $test_case_6 = $row['test_case_6'];
            $test_case_7 = $row['test_case_7'];
            $test_case_8 = $row['test_case_8'];
            $test_case_9 = $row['test_case_9'];
            $test_case_10 = $row['test_case_10'];
    
        }
   
         
     }  

    $output_1 = run($code, $test_case_1);
    $output_2 = run($code, $test_case_2);
    $output_3 = run($code, $test_case_3);
    $output_4 = run($code, $test_case_4);
    $output_5 = run($code, $test_case_5);
    $output_6 = run($code, $test_case_6);
    $output_7 = run($code, $test_case_7);
    $output_8 = run($code, $test_case_8);
    $output_9 = run($code, $test_case_9);
    $output_10 = run($code, $test_case_10); 

     $result8 = mysqli_query($conn, "SELECT * FROM teacher_outputs WHERE teacher_output_id=$id");

     if($result8){
        
        while ($row = mysqli_fetch_array($result8)) {
            $out_1 = $row['output_1'];
            $out_2 = $row['output_2'];
            $out_3 = $row['output_3'];
            $out_4 = $row['output_4'];
            $out_5 = $row['output_5'];
            $out_6 = $row['output_6'];
            $out_7 = $row['output_7'];
            $out_8 = $row['output_8'];
            $out_9 = $row['output_9'];
            $out_10 = $row['output_10'];
        }
         
         
         
     }



if ($out_1 == $output_1){
        
    echo "correct<br />";
}

else {

    echo "Wrong<br />";
    
}

if ($out_2 == $output_2){
        
    echo "correct<br />";
}

else {

    echo "Wrong<br />";
    
}
if ($out_3 == $output_3){
        
    echo "correct<br />";
}

else {

    echo "Wrong<br />";
    
}if ($out_4 == $output_4){
        
    echo "correct<br />";
}

else {

    echo "Wrong<br />";
    
}if ($out_5 == $output_5){
        
    echo "correct<br />";
}

else {

    echo "Wrong<br />";
    
}if ($out_6 == $output_6){
        
    echo "correct<br />";
}

else {

    echo "Wrong<br />";
    
}if ($out_7 == $output_7){
        
    echo "correct<br />";
}

else {

    echo "Wrong<br />";
    
}if ($out_8 == $output_8){
        
    echo "correct<br />";
}

else {

    echo "Wrong<br />";
    
}if ($out_9 == $output_9){
        
    echo "correct<br />";
}

else {

    echo "Wrong<br />";
    
}if ($out_10 == $output_10){
        
    echo "correct<br />";
}

else {

    echo "Wrong<br />";
    
}




?>