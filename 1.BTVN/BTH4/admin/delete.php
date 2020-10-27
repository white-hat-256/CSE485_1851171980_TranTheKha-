<?php
    $emp_id = $_GET['id'];
    require("include/config.php");
    include("include/function.php");
    if(deleteEmp($emp_id)){
        header("Location:index.php");
        exit();
    }else{
        echo "something wrong!";
    }
    mysqli_close($conn);
?>
