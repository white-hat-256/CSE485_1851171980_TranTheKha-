<?php 
	// define("db_host","localhost");
	// define("db_username","root");
	// define("db_password"," ");
	// define("db_name","user");
	// connect to database

	$host = 'localhost';
    $user = 'root';
    $pass = '';
    $db   = 'project04';
	$conn = mysqli_connect($host, $user,$pass,$db);
	if(!$conn){
        die('Khong the ket noi vi .s.');
        exit();
    }

	// define 	('ROOT_PATH', realpath(dirname(__FILE__)));
	// define('BASE_URL', 'http://localhost/youtube/complete-blog-php/');
?>