<?php
include("connection.php");

//check_connection
if($conn->connect_error){
    echo "Sorry but we're experiencing some technical problems<br/>";
}
?>