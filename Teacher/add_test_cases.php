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
    
        <?php include('../includes/nav_teacher.php');?>
        
        
        
            <div class="container">
                <h2>Add Test Cases</h2>
                <form class="form-horizontal" role="form" method="post" action="../save_all.php">
                   <div class="form-group hidden">
                        <textarea class="form-control" id="problem_statement" name="problem_statement"><?php echo $_POST['problem_statement'] ;?></textarea>
                    </div>
                    <div class="form-group hidden">
                        <textarea class="form-control" id="teacher_code" name="teacher_code"><?php echo $_POST['teacher_code'] ;?></textarea>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="2" id="test_case_1" name="test_case_1"></textarea>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="2" id="test_case_2" name="test_case_2"></textarea>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="2" id="test_case_3" name="test_case_3"></textarea>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="2" id="test_case_4" name="test_case_4"></textarea>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="2" id="test_case_5" name="test_case_5"></textarea>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="2" id="test_case_6" name="test_case_6"></textarea>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="2" id="test_case_7" name="test_case_7"></textarea>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="2" id="test_case_8" name="test_case_8"></textarea>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="2" id="test_case_9" name="test_case_9"></textarea>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="2" id="test_case_10" name="test_case_10"></textarea>
                    </div>
                    
                    <div class="form-group">        
                        <div class="col-sm-offset-0 col-sm-10">
                            <button type="submit" class="btn btn-default">Submit</button>
                        </div>
                    </div>
                </form>
            </div>    
    
    </body>    
    
</html> 