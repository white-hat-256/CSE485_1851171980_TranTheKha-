<?php 
     require('include/config.php');

    if (isset($_POST['add']) && $_POST['name'] != ""){

                                $name= $_POST['name'];
                                $description= $_POST['description'];
                                $salary= $_POST['salary'];
                                $birthday= $_POST['birthday'];
                              
                                if(isset($_POST['gender'])){
                                        $gender = $_POST['gender'];
                                    }  else {
                                        $gender = false;
                                    }
                                $sql= "INSERT INTO employees(name,description,gender,salary,birthday,created_at) VALUES ('$name','$description','$gender','$salary','$birthday',NOW())";
                                mysqli_query($conn,$sql);
                                echo "---------------------------Thêm thành công---------------------------";		
                           }                            
                        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .wrapper {
            width: 500px;
            margin: 0 auto;
        }
        .control-label:before{
            color: red;
            content: "*";
            position: absolute;
            margin-left: 50px;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                   <div class="page-header">
                        <h2>Create Record</h2>
                   </div>
                   <p>Please fill this form and submit to add employee to database</p> 
                    <form action="" method="post">
                        <div class="form-group required control-label">
                            <label for="name" style="font-weight:bold;">Name</label>
                            <input type="text" name="name" class="form-control" value="">
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label for="description" style="font-weight:bold;">Description</label>
                            <textarea type="text" name="description" class="form-control"></textarea>
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label for="salary" style="font-weight:bold;">Salary</label>
                            <input type="text" name="salary" class="form-control" value="">
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label for="salary" style="font-weight:bold;">Gender</label><br/>
                            <input type="radio" id="male" name="gender" value="1">
                            <label for="male">Male</label>
                            <input type="radio" id="female" name="gender" value="0">
                            <label for="female">Female</label>
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label for="birthday" style="font-weight:bold;">Birthday</label><br/>
                            <input type="date" id="birthday" name="birthday">
                            <span class="help-block"></span>
                        </div>
                       <input src="index.php" type="submit" name="add" class="btn btn-primary" value="Save">
                        <a href="index.php" class="btn btn-default">Cancel</a></br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>