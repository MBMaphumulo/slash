<?php 
include("inc/overall/mainHeader.php");
if(!isset($_SESSION['user_id'])){
             echo '
            <div class="container">
<center><div style="font-weight:bold;font-size:50px;color:red;">404</div>
<hr style="border-bottom: 1px solid grey;"/>
<p><h2 style="color:White;">Sorry but were expriencing technical problems. Please try again </h2></p>
</center>
</div>
   
    ';
    exit();
}

?>

<center>
    <h1>Events</h1>
	<div class="col-md-offset-3 col-md-5">
			<div role="tabpanel" class="tab-pane" id="video">
                <div class="vide_area">
                  <iframe width="100%" height="250" src="http://www.youtube.com/embed/h5QWbURNEpA?feature=player_detailpage" frameborder="0" allowfullscreen></iframe>
                </div>
              </div>
    </div>
</center>
<?php include("inc/overall/footer.php");?>