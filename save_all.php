<?php

    require('includes/conn.inc');
    include('includes/check2.php');

    $code =$_POST['teacher_code'];
    $problem_statement = $_POST['problem_statement'];


    $test_case_1 = $_POST['test_case_1'];
    $test_case_2 = $_POST['test_case_2'];
    $test_case_3 = $_POST['test_case_3'];
    $test_case_4 = $_POST['test_case_4'];
    $test_case_5 = $_POST['test_case_5'];
    $test_case_6 = $_POST['test_case_6'];
    $test_case_7 = $_POST['test_case_7'];
    $test_case_8 = $_POST['test_case_8'];
    $test_case_9 = $_POST['test_case_9'];
    $test_case_10 = $_POST['test_case_10'];


$sql="INSERT INTO test_cases(test_case_1,test_case_2,test_case_3,test_case_4,test_case_5,test_case_6,test_case_7,test_case_8,test_case_9,test_case_10)
        VALUES('$test_case_1', '$test_case_2','$test_case_3','$test_case_4','$test_case_5','$test_case_6','$test_case_7','$test_case_8','$test_case_9','$test_case_10')";

    $result=mysqli_query($conn, $sql);



     $sql2="INSERT INTO ques_info(problem_statement, teacher_code)
        VALUES('$problem_statement','$code')";

    $result2=mysqli_query($conn, $sql2);


$output_1 = run($code, $test_case_1  );
$output_2 = run($code, $test_case_2  );
$output_3 = run($code, $test_case_3  );
$output_4 = run($code, $test_case_4  );
$output_5 = run($code, $test_case_5  );
$output_6 = run($code, $test_case_6  );
$output_7 = run($code, $test_case_7  );
$output_8 = run($code, $test_case_8  );
$output_9 = run($code, $test_case_9  );
$output_10 = run($code, $test_case_10  );

    $sql4="INSERT INTO teacher_outputs(output_1,output_2,output_3,output_4,output_5,output_6,output_7,output_8,output_9,output_10)
        VALUES('$output_1','$output_2','$output_3','$output_4','$output_5','$output_6','$output_7','$output_8','$output_9','$output_10')";

    $result4=mysqli_query($conn, $sql4);

    header('Location: http://localhost/code/Teacher/saved.php');            





?>