<?php include("inc/db_querys/connection.php");
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Dairy Distributed News</title>
    <link href="boot/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="boot/css/DDN.css" rel="stylesheet" type="text/css" />
    <script src="boot/js/jquery-3.2.1.min.js" type="text/javascript"></script>   
    <script src="boot/js/bootstrap.js" type="text/javascript"></script>
    <script src="send.js" type="text/javascript"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font.css">
    <link rel="stylesheet" type="text/css" href="assets/css/li-scroller.css">
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.fancybox.css">
    <link rel="stylesheet" type="text/css" href="assets/css/theme.css">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <style type="text/css">
    </style>
</head>
<body>
<?php include("inc/models.php");?>
<nav class="navbar navbar-inverse navbar-fixed-top">
<div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Darly Distributed News</a>
    </div>
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <?php 
            if(isset($_SESSION["user_id"])){
                 echo ' 
                        <li class=""><a href="home.php">Home</a></li>
                     ';
            }else{
                echo ' 
                        <li class=""><a href="index.php">Home</a></li>
                     ';
            }
        ?>
        
        <li><a href="about.php">About Us</a></li>
          <?php 
            if(isset($_SESSION["user_id"])){
                 echo '          
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Options <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="events.php">Events</a></li>
                    <li><a href="jobs.php">Jobs</a></li>
                    <li><a href="news.php">News</a></li>
                  </ul>

                </li>
                <li><a href="myPosts.php">My Posts</a></li>';
            }
          ?>

      </ul>
    <ul class="nav navbar-nav navbar-right">
        <?php
             if(isset($_SESSION["user_id"])){
                echo '
				<li id=""><a href="#">Wednesday 21 2017</a></li>
				<li id=""><a href="inc/db_querys/logOut.php"><span class="glyphicon glyphicon-user"></span> SignOut</a></li>
				      ';
             }else{
                echo ' <li id=""><a href="#">Wednesday 21 2017</a></li>
                <li id=""><a href="registerr.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li id=""><a href="LoggingIn.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
				
                ';
             }
        ?>
     
    </ul>
  </div>
</div>
</nav>
    <div style="margin-top:60px;"></div>