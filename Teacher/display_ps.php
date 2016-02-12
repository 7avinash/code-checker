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
    
       <?php  
        
        include('../includes/nav_teacher.php'); 
        include('../includes/conn.inc'); 
        
        $id = $_GET['ques_id'];
        
        
        $result = mysqli_query($conn, "SELECT * FROM ques_info WHERE ques_id='$id'");




    if($result){
        
        while ($row = mysqli_fetch_array($result)) {
            
            $ps = $row['problem_statement'];
            
        }
        
    }

        
        ?>
        
        <h3> <?php echo $ps; ?></h3>
        
        
  
       
    </body>

</html>