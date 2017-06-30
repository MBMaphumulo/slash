<?php 
include("inc/overall/mainHeader.php");

if(isset($_SESSION["user_id"])){
	   echo '
      <div class="container">
<center><div style="font-weight:bold;font-size:50px;color:red;">404</div>
<hr style="border-bottom: 1px solid grey;"/>
<p><h2 style="color:black;">Already loged in...<br/><br/> <a href="http://localhost/GitHub/DDN/home.php">Click here</a></h2></p>
</center>
</div>

    ';
	exit();
}
else{

if(!(isset($_SESSION["user_id"]))){

	include("inc/welcome.php");
}

 include("inc/slider.php");
 include("inc/toFind.php");
 include("inc/cards.php");
 include("inc/overall/footer.php");
}

?>
