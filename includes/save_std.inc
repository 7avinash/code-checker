<form class="form-horizontal" role="form" method="post" action="result.php">
        <div class="form-group">
                    <div class="form-group hidden">
                        <textarea class="form-control" id="student_code" name="student_code"><?php echo $_POST['student_code'] ;?></textarea>
                    </div>
                    <div class="form-group hidden">
                        <textarea class="form-control" name="ques_"><?php echo $ques_id ;?></textarea>
                    </div>
            <div class="col-sm-offset-0 col-sm-10">
                <button type="submit" class="btn btn-default">Check The Code</button>
            </div>
            <div class="form-group hidden">
                        <textarea class="form-control" name="ques_id"><?php echo $ques_id ;?></textarea>
                    </div>
        </div>
</form> 