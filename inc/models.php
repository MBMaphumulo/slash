
<div id="overlay"></div>
<div id="frameLogIn">
    <button type="button">&times;</button>
    <form action="" method="POST">
      <div class="row">
          <div class="col-md-12 col-sm-12">
            <center>
               <h1>Login</h1>
               <?php echo "<div class='error'".$error_msg."</div>";?>
               <div class="form-group text-center">
                
                  <input type="text" name="user_id" placeholder="Username" required=""/> <br/>
                  <input type="password" name="pass" placeholder="Password" required=""/> <br/>
                  <a href=""><input type="submit" class="btn btn-primary" name="btnLogin" value="Login" /></a>
               </div>
              <hr/>
              <p>Don't have an account ? <input style="margin-left:170px;" id="regLink1" type="button" class="btn btn-primary" name="submit" value="Sign Up" /></p> 
            </center>
          </div>
      </div>    
    </form>
</div>
<div id="frameImg">
    <button id="btnCloss" type="button" style="margin-left:640px;margin-top:-20px;outline:none;background-color: white;border: 0px solid white;font-size:30px;">&times;</button>
    <form>
      <img src="" alt="" width="650px" height="500px;" style="border:4px solid wheat"/>
    </form>
    
</div>
<div id="frameReg">
    <button type="button">&times;</button>
    <form action="" method="POST">
        <div class="row">
            <div class="col-md-12 col-sm-12">
              <center>
                <h1>Registration</h1>
                <?php echo "<div class='error'".$error_msg."</div>";?>
                <div class="form-group text-center">
                    <input type="text" name="user_id" placeholder="Username" required="" /><br/>
                    <input type="text" name="firstname" placeholder="First name" required=""/><br/>
                    <input type="text" name="lastname" placeholder="Last name" required="" /><br/>
                    <input type="email" name="email" placeholder="Email address" required=""/><br/>
                    <input type="text" name="phoneNumber" placeholder="Phone number" required="" /><br/>
                    <input type="text" name="city" placeholder="City" required=""/><br/>
                    <input type="text" name="surbub" placeholder="Surbub" required=""/><br/>
                    <input type="password" name="passw" placeholder="Password" required=""/> <br/>
                    <input type="password" name="c_passw" placeholder="Confirm Password" required=""/><br/>
                    <input type="submit" class="btn btn-primary" name="btnSignUp" value="Sign Up" />
                 </div>
                <hr/>
                <p>Already have an account ? <input style="margin-left:170px;" id="loginLink1" type="button" class="btn btn-primary" name="login" value="Login" /></p> 
              </center>
            </div>
        </div>    
    </form>
</div>
<div id="myPost">
    <form action="send_post.php" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-12 col-sm-12">
              <center>
                <h1>POST</h1>
                <div id="status"></div>
                <div class="form-group text-center">
                    <input class="form-control" style="margin-left:50px;" id="post_header" type="text" name="post_header" placeholder="Story Header" required="" />
                    <br/>
                    <textarea class="form-control" style="margin-left:50px;max-width:400px" id="post_body" type="text" name="post_body" placeholder="Write your story" required=""></textarea>
                    <br/>   
                    <input style="border:0;margin-left:50px;" type="file" name="profile"/>
                    <hr/>     
                    <input id="btnCancel" type="reset" class="btn btn-danger" name="  login" value="Cancel" />
                    <input id="btnPost" type="submit" class="btn btn-primary" name="btnPost" value="POST"/>
                  </div>
              </center>
            </div>
        </div> 
    </form>
</div>