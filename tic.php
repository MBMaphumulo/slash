
  <section id="newsSection">
    <div class="row">
      <div class="col-lg-12 col-md-12" style="height: 50px;">
        <div class="latest_newsarea " style="height: 50px;"> <span>Latest News</span>
          <ul id="ticker01" class="news_sticker " style="height: 50px;">	
		  <?php 
			
				$pH = "";
				$pB = "";
				
				$sql = "SELECT * FROM posts ORDER BY post_id DESC ";
				$results = $conn->query($sql);
				
				if($conn->query($sql)){
						
						while($row = $results->fetch_assoc()){
							$pH = $row['post_header'];
							$pB = $row['post_body'];
							$pp = $row['post_pic'];
						
						
							if($pp != ""){
									echo '<form action="postView.php" method="POST">
									<li style="height: 50px;"><a href="#"><img src="'.$pp.'" alt=""><input style="color:white;background-color:black;border:0px solid black;" type="submit" name="postHeader" value="'.$pH.'" /></a></li>
									</form>
										';
							}else{
								echo '<form action="postView.php" method="POST">
									<li style="height: 50px;"><a href="#"><input style="color:white;background-color:black;border:0px solid black;" type="submit" name="postHeader" value="'.$pH.'" /></a></li>
									</form>
										';
							}
						}
				}else{}
			?>
          
          </ul>
          <div class="social_area">
            <ul class="social_nav">
              <li class="facebook"><a href="#"></a></li>
              <li class="twitter"><a href="#"></a></li>
              <li class="mail"><a href="#"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>