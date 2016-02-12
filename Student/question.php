<?php
        include('../includes/conn.inc');
        include('../includes/check.php');
        include('../includes/auth.inc');

        if(isset($_GET['ques_id'])){
            
            $ques_id = $_GET['ques_id'];
            
        }

        else {
            
            $ques_id = $_POST['ques_id'];
 
            
        }

        $result = mysqli_query($conn, "SELECT * FROM ques_info WHERE ques_id='$ques_id'"); 

        

         if(isset($_POST['student_code'])) {
                                    
        $out = run($_POST['student_code'], $_POST['student_inputs'] );
                    
                 }


        if($result){
        
        while ($row = mysqli_fetch_array($result)) {
            $problem_statement = $row["problem_statement"];
        }
            
        }
?>
<html>
    
     <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/add_code.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
            
    </head>
    
    <body>
    
        <?php include('../includes/nav_std.php');?>
        
        
            <div class="container">
                <div id="ps">
                <h2>Problem statement</h2>
                <h4><?php echo $problem_statement."<br / ><br / ><br / >" ; ?></h4>
                </div>    
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="form-horizontal c" role="form" method="post" >
                    <h4>Code :</h4>
                    <div class="form-group">
                        <textarea class="form-control" rows="16" id="student_code" name="student_code"><?php
                            if(isset($_POST['student_code'])){
                                
                                echo $_POST['student_code'];
                            }
                            
                            ?></textarea>
                    </div>
                    <h4>Inputs :</h4>
                    <div class="form-group">
                        <textarea class="form-control" rows="2" id="student_inputs" name="student_inputs"></textarea>
                    </div>
                    <div class="form-group hidden">
                        <textarea class="form-control" id="problem_statement" name="problem_statement"><?php echo $_POST['problem_statement'] ;?></textarea>
                    </div>
                    <div class="form-group hidden">
                        <textarea class="form-control" name="ques_id"><?php echo $ques_id ;?></textarea>
                    </div>
                    <div class="form-group">        
                        <div class="col-sm-offset-10 col-sm-10">
                            <button type="submit" class="btn btn-default">Run</button>
                        </div>
                    </div>
                </form>
            </div>
        
        <div id="outputs">
            <h4>Output :</h4>
            <div id="out">
                <?php if(isset($_POST['student_code'])){ echo $out;} else {}?>
            </div>
            
            <div id="save">
                <?php                
                if(!empty($_POST['student_code'])){ include('../includes/save_std.inc');}?>
            </div>    
        </div>
        
        
        
    
    </body>    
    
</html> 