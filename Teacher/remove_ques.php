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
        
        $result = mysqli_query($conn, "SELECT * FROM ques_info"); 
        
        if($result){
        
        $row_cnt = mysqli_num_rows($result);
            
  
        }
        
        
        
        
        ?>
        
        <ul class="list-group">
            
            <?php
            
            for($ques_no = 1 ; $ques_no <= $row_cnt ; $ques_no++  ) {
                
                $link  = 'display_ps.php?ques_id='.$ques_no;
            

                include('../includes/ques_rm.php');
                
            }
                
            ?>    
            
    

        </ul>
    
    </body>

</html>