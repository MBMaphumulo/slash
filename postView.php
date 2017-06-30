
<?php
include("inc/overall/mainHeader.php");

if(isset($_SESSION['user_id']) && !isset($_POST["postHeader"])){
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


<?php

	if($_SERVER["REQUEST_METHOD"] === "POST" ){

		if(isset($_POST["postHeader"])){
			@$postHead = @$_POST["postHeader"];

			$sql = "SELECT * FROM posts P,users S  WHERE P.added_by = S.user_id AND post_header = '$postHead'";

			$results = $conn->query($sql);

			while($row = $results->fetch_assoc()){
				$pH = $row['post_header'];
				$pB = $row['post_body'];
				$pp = $row['post_pic'];
				$userPost = $row['first_name'];
			}

		}
	}




?>


<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container">

  <section id="contentSection">
    <div class="row">
	<div class="col-md-3 col-lg-3 col-xs-3 text-center" >
			<h1 style="margin-left:-50px;">Post</h1>
	 		<div class="imagee">
	 			<img id="avatarr" width="200" height="200" src="assets/avatar.png" alt="image" style="margin-left: -50px;"/>
	 		</div>
	 		<div class="UserDetails">
	 			<div><h3><?php echo @$_SESSION['firstname'];?> <?php echo @$_SESSION['lastname'];?></h3></div><button id="btnCallPost" class="btn btn-primary">POST</button>
	 		</div>
	 		
	</div>
      <div class="col-lg-8 col-md-8 col-sm-8 homeContentCenter">
            <center><h1>News Feeds</h1></center>
			
				 <div class="post_commentbox"> <a href="#"><i class="fa fa-user"></i><?php echo @$userPost;?></a> <span><i class="fa fa-calendar"></i>6:49 AM</span> <a href="#"><i class="fa fa-tags"></i>DDN</a> </div>
				 		
				 	<?php

				 		if(@$pp != ""){

				 			echo '<div class="single_page_content"> <img class="img-center" src="'.$pp.'" alt=""> ';
				 		}

				 	?>
					 
					 <h1><?php echo @$pH;?></h1>
					 <p><p/>
					 <blockquote><?php echo @$pB;?></blockquote>
					
					<div class="row">
						<div class="col-md-1 rate">
							<div class="btn btn-success"></div><div class="btn btn-danger"></div>
						</div>
						<div class="col-md-10">
							<form class="">
								  <textarea type="text" class="form-control commentt" id="exampleInputAmount" placeholder="Comment..."></textarea> 
							</form>
						</div>
						<div class="col-md-1">
						   <input type="submit" class="input-group btn btn-primary btnComment" name="btnComment" value="Send"/>
						</div>
					</div>
				</div>
		
				<div class="social_link">
				  <ul class="sociallink_nav">
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
				  </ul>
				</div>
	</div>
     
    </div>
  </section>
</div>
<?php include("inc/overall/footer.php");?>