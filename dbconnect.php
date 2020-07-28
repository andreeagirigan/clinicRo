<?php

//set connection variables
$host='localhost';
$username='d3eea';
$password='12345';
$database_name= 'registerlogin';

//connection to server & database
$connection = mysqli_connect($host, $username, $password,$database_name) ;
 
//check connection 
if (mysqli_connect_errno()):
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
endif;

?>
