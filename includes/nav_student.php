<?php

    include('conn.inc');
    
    $result = mysqli_query($conn, "SELECT * FROM user_info WHERE user_id='$user_id'");
  
        while ($row = mysqli_fetch_array($result)) {
            $first_name = $row['first_name'];
        }



?>


<nav class="navbar navbar-default">
  <div class="container-fluid">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Code Checker</a>
      </div>

   
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
         <ul class="nav navbar-nav">
        <li class="active"><a href="#">Questions <span class="sr-only">(current)</span></a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><?php echo $first_name;?></a></li>
        <li><a href="logout.php">Logout</a></li>
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
