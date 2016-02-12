<!DOCTYPE html>

<html>
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/register.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
            
    </head>
    
    <body>
    
        
        <div id="one">
            <div class="container">
                <h2>Register</h2>
                <form class="form-horizontal" role="form" method="post" action="register.php">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="first_name">First Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="first_name" placeholder="First Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="last_name">Last Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="last_name" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control"  name="email" placeholder="Enter email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="last_name">Register as</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="category">
                                    <option value="student">Student</option>
                                    <option value="faculty">Faculty</option>
                                    <option value="staff">Staff</option>
                                </select>
                            </div>
                        </div>     
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="pwd">Password</label>
                        <div class="col-sm-10">          
                            <input type="password" class="form-control" name="pass" placeholder="Enter password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="pwd">Confirm Password</label>
                        <div class="col-sm-10">          
                            <input type="password" class="form-control" name="confirm_pass" placeholder="Enter password">
                        </div>
                    </div>
                    <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-10">
                            <a href="login_form.php">Already a member? Login here.</a>
                        </div>
                    </div>
                    <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>            
      

    </body>

</html>