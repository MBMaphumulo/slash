<?php 

$host = "localhost";
$username = "root";
$password = "";
$db_name = "DDN";

$conn = new mysqli($host,$username,$password,$db_name);
$error_msg = "";
session_start();
?>