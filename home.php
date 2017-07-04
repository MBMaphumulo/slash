<?php 
include("inc/overall/mainHeader.php");
if(!isset($_SESSION['user_id'])){
	         echo '
            <div class="container">
<center><div style="font-weight:bold;font-size:50px;color:red;">404</div>
<hr style="border-bottom: 1px solid grey;"/>
<p><h2 style="color:black;">Sorry but were expriencing technical problems. Please try again </h2></p>
</center>
</div>
   
    ';

    exit();
}
?>

<div class="container">
 	<div class="row">
	 	<div class="col-md-2">
	 		<h1>Home</h1>
	 		<div class="imagee">
	 			<img id="avatarr" width="200" height="200" src="assets/avatar.png" alt="image" style="margin-left: -50px;"/>
	 		</div>
	 		<div class="UserDetails">
	 			<div><h3><?php echo @$_SESSION['firstname'];?> <?php echo @$_SESSION['lastname'];?></h3></div><button id="btnCallPost" class="btn btn-primary">POST</button>
	 		</div>
	 		
	 	</div>	
	 	<div class="col-md-10 homeContent">
	 		<div class="row">
	 			<div class="col-md-8 homeContentCenter">
				
	 			<?php 
			
				$pH = "";
				$pB = "";
				$req = 1;
				$sql = "SELECT * FROM posts P,users S  WHERE post_request = '$req' AND P.added_by = S.user_id ORDER BY post_id DESC ";
				
				
				$results = $conn->query($sql);
				
				if($results){
						
						while($row = $results->fetch_assoc()){
							$pH = $row['post_header'];
							$pB = $row['post_body'];
							$pp = $row['post_pic'];
							$userPost = $row['first_name'];
							$time = $row['timme'];
						    $statuss = $row['statuss'];
						    $approved_byy = $row['approved_byy'];
						
						
							if($pp != ""){
									echo '
							 <form action="postView.php" method="POST">
							 <div class="post_commentbox"> <a href="#"><i class="fa fa-user"></i>'.$userPost.'</a> <span><i class="fa fa-calendar"></i>'.$time.'</span> <a href="#" style="color:green;font-weight:bold;"><i class="fa fa-tags"></i>'.$statuss.' by '.$approved_byy.'</a> </div>
							 <div class="row">
								<div class="row">
									<div class="col-md-offset-1 col-md-11 col-sm-11 col-xs-11">
										<center><h3><div class="viewPost"><input type="submit" name="postHeader" value="'.$pH.'" /></div></h3></center>
									</div> 
								</div>
								<div class="row">
									<div class="col-md-offset-1 col-md-5 col-sm-5 col-xs-5">
										<p>'.$pB.'</p>
									</div>
									<div class="col-md-offset-1  col-md-3 col-sm-3 col-xs-3">
										<img width="170" height="85" src="'.$pp.'" alt="postImage" />
									</div>
								</div>
							 </div>	
							 </form>
							';
							}else{
							echo ' 
							 <form action="postView.php" method="POST">
							 <div class="post_commentbox"> <a href="#"><i class="fa fa-user"></i>'.$userPost.'</a> <span><i class="fa fa-calendar"></i>'.$time.'</span> <a href="#" style="color:green;font-weight:bold;"><i class="fa fa-tags"></i>'.$statuss.'</a></div>
							 <div class="row">
								<div class="row">
									<div class="col-md-offset-1 col-md-11 col-sm-11 col-xs-11">
										<center><h3><div class="viewPost"><input type="submit" name="postHeader" value="'.$pH.'" /></div</h3></center>
									</div> 
								</div>
								<div class="row">
									<div class="col-md-offset-1 col-md-11 col-sm-11 col-xs-11">
										<p>'.$pB.'</p><input type="button" name="read" value="Read More" class="btn btn-primary" style="visibility:hidden">
									</div>
								</div>
							 </div>
							 <form action="postView.php" method="POST">
							';
							
							}
						
						}
				}else{
						echo '
							   <div class="single_page_content"> 
									<h1>0 posts</h1>
							   </div>
						';
				}
			
			?>
	 		<!--	
	 			<div class="row">
					<div class="row">
					<div class="col-md-offset-1 col-md-11 col-sm-11 col-xs-11">
					<center><h3>Agriculture</h3></center>
					</div> 
					</div>
					<div class="row">
					<div class="col-md-offset-1 col-md-7 col-sm-7 col-xs-7">
					<p>Agriculture (management and extension) ,farmingmnsbm mahbsjgab majuin hggsa hjgany bah</p><input type="button" name="read" value="Read More" class="btn btn-primary">
					</div>
					<div class="col-md-offset-1  col-md-3 col-sm-3 col-xs-3">
					<img width="170" height="85" src="assets/postImage1.jpg" alt="postImage" />
					</div>
					</div>
                 </div>		
				-->	
	 			</div>
				
	 			<div class="col-md-4">
	 				<div class="row">
	 					<div class="col-md-12">
	 						
	 						<center><h2>Weather</h2>
	 					<a href="https://www.accuweather.com/en/us/new-york-ny/10007/weather-forecast/349727" class="aw-widget-legal">
<!--
By accessing and/or using this code snippet, you agree to AccuWeather’s terms and conditions (in English) which can be found at https://www.accuweather.com/en/free-weather-widgets/terms and AccuWeather’s Privacy Statement (in English) which can be found at https://www.accuweather.com/en/privacy.
-->
</a><div id="awcc1498515729612" class="aw-widget-current"  data-locationkey="" data-unit="f" data-language="en-us" data-useip="true" data-uid="awcc1498515729612"></div><script type="text/javascript" src="https://oap.accuweather.com/launch.js"></script></center>

	 					</div>
	 				</div>
	 				<div class="row">
	 					<div class="col-md-12">
	 						<center><h2>Location</h2></center>
	 				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4131.35711401597!2d30.913939213618274!3d-29.970842800267164!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5fff50d20ffe53f0!2sMangosuthu+University+of+Technology!5e1!3m2!1sen!2sza!4v1498516504555" width="400" height="300" frameborder="0" style="border:0;width:290px;height:750px;" allowfullscreen></iframe>
	 			</div>
	 					</div>
	 				</div>
	 					
	 			
	 					
	 		</div>
	 		
	 	</div>
 	</div>
</div>
<?php include("inc/overall/footer.php");?>