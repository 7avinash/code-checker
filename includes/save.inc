<form class="form-horizontal" role="form" method="post" action="add_test_cases.php">
        <div class="form-group">
            <div class="form-group hidden">
                        <textarea class="form-control" id="problem_statement" name="problem_statement"><?php echo $_POST['problem_statement'] ;?></textarea>
                    </div>
                    <div class="form-group hidden">
                        <textarea class="form-control" id="teacher_code" name="teacher_code"><?php echo $_POST['teacher_code'] ;?></textarea>
                    </div>
            <div class="col-sm-offset-0 col-sm-10">
                <button type="submit" class="btn btn-default">Save Code And Add Test Cases</button>
            </div>
        </div>
</form> 