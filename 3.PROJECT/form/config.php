<?php
    $host = 'localhost';
    $user = 'root';
    $pass=  '';
    $db=    'project_cuoi_ki';
    $conn = mysqli_connect($host,$user,$pass,$db);
    if(!$conn){
        die ("khong the connect");
    }


?>