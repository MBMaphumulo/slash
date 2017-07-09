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
<center>
    <h1>Jobs</h1>
	<section id="contentSection">
	<center>
	<section id="sliderSection">
    <div class="row">
      <div class="col-lg-12  col-md-12 col-sm-12">
            <div class="fashion">
              <div class="single_post_content">
                <h2><span>MUNICIPALITY JOBS</span></h2>
                <ul class="business_catgnav wow fadeInDown">
                  <li>
                    <figure class="bsbig_fig"> <a href="pages/single_page.html" class="featured_img"> <img alt="" src="images/EThekwiniLogo.png" style="height: 370px;"> <span class="overlay"></span> </a>
                      <figcaption> <a href="pages/single_page.html">Proin rhoncus consequat nisl eu ornare mauris</a> </figcaption>
                      <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a phare...</p>
                    </figure>
                  </li>
                </ul>
                <ul class="spost_nav">
                  <li>
                    <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                      <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 1</a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/events (2).jpeg"> </a>
                      <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/events (7).jpg"> </a>
                      <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 3</a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/events (2).jpg"> </a>
                      <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 4</a> </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="technology">
              <div class="single_post_content">
                <h2><span>GENERAL JOBS</span></h2>
                <ul class="business_catgnav">
                  <li>
                    <figure class="bsbig_fig wow fadeInDown"> <a href="pages/single_page.html" class="featured_img"> <img alt="" style="height: 370px;" src="images/GeneralJob.jpg"> <span class="overlay"></span> </a>
                      <figcaption> <a href="pages/single_page.html">Proin rhoncus consequat nisl eu ornare mauris</a> </figcaption>
                      <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a phare...</p>
                    </figure>
                  </li>
                </ul>
                <ul class="spost_nav">
                  <li>
                    <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/GeneralJob.jpg"> </a>
                      <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 1</a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img2.jpg"> </a>
                      <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                      <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 3</a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img2.jpg"> </a>
                      <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 4</a> </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
</center>
<?php include("inc/overall/footer.php");?>