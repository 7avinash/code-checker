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
        <h2>Problem Statement</h2>
            <form class="form-horizontal" role="form" method="post" action="add_code.php">
                <div class="form-group">
                    <textarea class="form-control" rows="5" id="problem_statement" name="problem_statement"></textarea>
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