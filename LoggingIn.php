<?php include("inc/overall/mainHeader.php");
?>

<?php
//user_login
if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if(isset($_POST['btnLogin'])){
        $first_name = $last_name = $active = $passCheck = "";

        $user_login = @$_POST['user_id'];
        $user_password = @$_POST['pass'];

        $user_password_md5 = md5($user_password);


        $sql = "SELECT * FROM users WHERE user_id = '".$user_login."'";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            
            while($row = $result->fetch_assoc()){

                $first_name = $row['first_name'];
                $last_name = $row['last_name'];
                $active = $row['active'];
                $passCheck = $row['passwordd'];
                $councillor = $row['councillor'];
                $userPP = $row['profile_picc'];

            }
           
            if($passCheck == $user_password_md5)
            {
                $_SESSION['user_id'] = $user_login;
                $_SESSION['firstname'] = $first_name;
                $_SESSION['lastname'] = $last_name;
                $_SESSION['active'] = $active;
                $_SESSION['councillor'] = $councillor;
                $_SESSION['userPP'] = $userPP;
                
                echo "<script>window.location.href = 'http://localhost/GitHub/DDN/home.php';</script>";
            }
            else{
               $error_msg = 'Sorry, but the password '.@$user_password.' doesnt match with the one you registered with. Please try again';
            }
        } else {
            $error_msg = 'Sorry, but the user '.@$user_login.' doesnt exits';
        }

        $conn->close();
    }
}


?>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div id="">
    <form action="" method="POST">
      <div class="row">
          <div class="col-md-12 col-sm-12">
            <center>
               <h1>Login</h1>
               <?php echo "<div class='error' style='color:Red;font-weight:bolder;'>".@$error_msg."</div>";?>
               <div class="form-group text-center">
                
                  <input type="text" name="user_id" placeholder="Username" value="<?php echo @$user_login;?>" required=""/> <br/>

                  <input type="password" name="pass" placeholder="Password" value="" required=""/> <br/>
                  <a href="">
                   <input type="submit" class="btn btn-primary" name="btnLogin" value="Login" />
                  </a>
               </div>
              <hr/>
              <p>Don't have an account ?<a href="registerr.php"> <input style="margin-left:170px;" id="" type="button" class="btn btn-primary" name="submit" value="Sign Up" /></a></p> 
            </center>
          </div>
      </div>    
    </form>
</div>
    </div>
  </div>
</div>

<?php include("inc/overall/footer.php");?>