
<?php include("inc/overall/mainHeader.php");

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
}?>

<center><h1>News</h1></center>

<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container">

 
<?php include("tic.php");?>
  <section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
            <ol class="breadcrumb">
              <li><a href="index.html">Home</a></li>
              <li><a href="#">Community</a></li>
              <li class="active">About Company</li>
            </ol>
            <h1>Daily Distributed News("Push button Publish")</h1>
           		<?php 
			
				$pH = "";
				$pB = "";
				$userPost = "";
				$req = 1;
				$sql = "SELECT * FROM posts P,users S  WHERE post_request = '$req' AND P.added_by = S.user_id ORDER BY post_id DESC ";
				
				
				$results = $conn->query($sql);
				
				if($results){
						
						while($row = $results->fetch_assoc()){
							$pH = $row['post_header'];
							$pB = $row['post_body'];
							$pp = $row['post_pic'];
							$userPost = $row['first_name'];
						
						
							if($pp != ""){
									echo '
							
							 <div class="post_commentbox"> <a href="#"><i class="fa fa-user"></i>'.$userPost.'</a> <span><i class="fa fa-calendar"></i>6:49 AM</span> <a href="#"><i class="fa fa-tags"></i>DDN</a> </div>
							 
								 <div class="single_page_content"> <img class="img-center" src="'.$pp.'" alt=""> 
								 <h1>'.$pH.'</h1>
								 <p>'.$pB.'<p/>
								 <blockquote>The Paradise of the rich is Made out of the hell of the Poor</blockquote>
								
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
							';
							}else{
							echo '
							
							 <div class="post_commentbox"> <a href="#"><i class="fa fa-user"></i>'.$userPost.'</a> <span><i class="fa fa-calendar"></i>6:49 AM</span> <a href="#"><i class="fa fa-tags"></i>DDN</a> </div>
							
							 <h1>'.$pH.'</h1>
							 <p>'.$pB.'<p/>
							 <blockquote>The Paradise of the rich is Made out of the hell of the Poor</blockquote>
								
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
			  
		
				<div class="social_link">
				  <ul class="sociallink_nav">
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
					<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
					<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
				  </ul>
				</div>
	</div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        
<?php include("latestNews.php")?>
          <div class="single_sidebar">
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#category" aria-controls="home" role="tab" data-toggle="tab">News</a></li>
              <li role="presentation"><a href="#video" aria-controls="profile" role="tab" data-toggle="tab">Video</a></li>
              <li role="presentation"><a href="#comments" aria-controls="messages" role="tab" data-toggle="tab">Comments</a></li>
            </ul>
            <div class="tab-content">
             
              <div role="tabpanel" class="tab-pane" id="video">
                <div class="vide_area">
                  
                </div>
              </div>
            
            </div>
          </div>
          
          
   
      </div>
    </div>
  </section>
</div>
<?php include("inc/overall/footer.php");?>