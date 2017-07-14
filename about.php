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
<style>
        input,button{
          color:black;
          font-weight: bolder;
          font-size: 10pt;
        }

    </style>
<center>
    <h1>About Dailry Distributed News</h1>
  

<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container">
  
<?php include("tic.php");?>
  <section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">
          <div class="contact_area">
            <h2>Contact Us</h2>
            <p>Daily Distributed new is one of the growing companies in S.A. DDN main focus is in developing the small business that are still striving to be at the top on business...</p>
            <form action="#" class="contact_form">
              <input class="form-control" type="text" placeholder="Name*">
              <input class="form-control" type="email" placeholder="Email*">
              <textarea class="form-control" cols="30" rows="10" placeholder="Message*"></textarea>
              <input type="submit" class="btn btn-primary" value="Send Message">
            </form>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <aside class="right_content">
<?php include("latestNews.php");?>
        </aside>
      </div>
    </div>
  </section>
</div>
<?php include("inc/overall/footer.php");?>