
          <div class="single_sidebar">
            <h2><span>TOP LOCAL STORIES</span></h2>
            <ul class="spost_nav">
             <?php $pH = "";
				$pB = "";
				
				$sql = "SELECT * FROM posts ORDER BY post_id DESC LIMIT 2";
				$results = $conn->query($sql);
				
				if(mysqli_num_rows($results) > 0){
						
						while($row = $results->fetch_assoc()){
							$pH = $row['post_header'];
							$pB = $row['post_body'];
							$pp = $row['post_pic'];
						
						
							if($pp != ""){
						   	 echo '<form action="postView.php" method="POST"><li>
								<div class="media wow fadeInDown"> <a href="#" > <img class="media-left"  alt="" src="'.$pp.'"> </a>
								  <div class="media-body"> <a href="single_page.html" class="catg_title"><input style="color:white;background-color:black;border:0px solid black;" type="submit" name="postHeader" value="'.$pH.'" /></a> </div>
								</div>
								</li>
								</form>'
								;
							  }
						}
						}
						else{
						echo '
								<div class="single_page_content"> 
									<h1>0 posts</h1>
							   </div>
						';
				}
								?>
              
            </ul>
          </div>