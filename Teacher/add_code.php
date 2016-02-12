<?php
            include('../includes/check.php');  
            
           if(isset($_POST['teacher_code'])) {
                                    
        $out = run($_POST['teacher_code'], $_POST['teacher_inputs'] );
                    
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
    
        <?php include('../includes/nav_teacher.php');?>
        
            <div class="container">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="form-horizontal c" role="form" method="post" >
                    <h4>Code :</h4>
                    <div class="form-group">
                        <textarea class="form-control" rows="16" id="teacher_code" name="teacher_code"><?php
                            if(isset($_POST['teacher_code'])){
                                
                                echo $_POST['teacher_code'];
                            }
                            
                            ?></textarea>
                    </div>
                    <h4>Inputs :</h4>
                    <div class="form-group">
                        <textarea class="form-control" rows="2" id="teacher_inputs" name="teacher_inputs"></textarea>
                    </div>
                    <div class="form-group hidden">
                        <textarea class="form-control" id="problem_statement" name="problem_statement"><?php echo $_POST['problem_statement'] ;?></textarea>
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
                <?php if(isset($_POST['teacher_code'])){ 
                    
                        echo $out;
                            
                            


                } 
                
                ?>
            </div>
            
            <div id="save">
                <?php                
                if(!empty($_POST['teacher_code'])){ include('../includes/save.inc');}?>
            </div>    
        </div>
        
        
        
    
    </body>    
    
</html> 