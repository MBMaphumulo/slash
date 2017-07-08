<?php include("inc/overall/mainHeader.php");
$user_id = $firstname = $lastname = $email = $phoneNumber = $city = $surbub = $selectCouncillor = "";
//Register_user
if($_SERVER['REQUEST_METHOD'] === 'POST'){

  if(isset($_POST['btnSignUp'])){


        $user_id = $_POST['user_id'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $phoneNumber = $_POST['phoneNumber'];
        $city = $_POST['city'];
        $surbub = $_POST['surbub'];
        $selectCouncillor = $_POST['selectedCouncillor'];
        $pass = $_POST['passw'];
        $c_pass = $_POST['c_passw'];
        $pass_md5 = md5($pass);

        $sql = "INSERT INTO users VALUES('$user_id','$firstname','$lastname','1','$pass_md5','$phoneNumber','$city','$surbub','$selectCouncillor')";



        $sqlSearchUser = "SELECT * FROM users WHERE user_id = '".$user_id."'";

        $result = $conn->query($sqlSearchUser);

        if ($result->num_rows > 0) {
            
  $error_msg = "<div class='error' style='color:Red;font-weight:bolder;'> Sorry, but the user_id ".$user_id." already exists</div>";            }else{

         if($pass === $c_pass){
            $result = $conn->query($sql);
             if($result){

                $error_msg = "<div class='error' style='color:green;font-weight:bolder;'> User created successful. Please login to continue</div>";
                 $user_id = $firstname = $lastname = $email = $phoneNumber = $city = $surbub = "";
             }
        }else{
             
           $error_msg = "<div class='error' style='color:Red;font-weight:bolder;'> Sorry, but the password doesnt match</div>";
        }
            }
    }
}

?>

<div id="">
    <form action="" method="POST">
        <div class="row">
            <div class="col-md-12 col-sm-12">
              <center>
                <h1>Registration</h1>
                  <?php echo @$error_msg ;?>
                <div class="form-group text-center">

                    <input type="text" name="user_id" placeholder="Username" required="" value="<?php echo@$user_id;?>"/><br/>
                    <input type="text" name="firstname" placeholder="First name" required="" value="<?php echo@$firstname;?>"/><br/>
                    <input type="text" name="lastname" placeholder="Last name" required=""  value="<?php echo@$lastname;?>"/><br/>
                    <input type="email" name="email" placeholder="Email address" required="" value="<?php echo@$email;?>"/><br/>
                    <input type="text" name="phoneNumber" placeholder="Phone number" required="" value="<?php echo@$phoneNumber;?>"/><br/>
                    <input type="text" name="city" placeholder="City" required=""   value="<?php echo@$city;?>"/><br/>
                    <input type="text" name="surbub" placeholder="Surbub" required=""    value="<?php echo@$surbub;?>"/><br/><br/>
                    <?php 

                        $query = "SELECT username FROM userss";

                        $res = $conn->query($query);
                        echo "<select name = 'selectedCouncillor'>";
                        echo "<option value = '--select councillor--'>--select councillor--</option>";
                        while (($row = $res->fetch_assoc()))
                        {
                            echo "<option value = '".$row['username']."'>".$row['username']."</option>";
                        }
                        echo "</select>";
                    ?><br/>
                    <input type="password" name="passw" placeholder="Password" required="" /><br/>
                    <input type="password" name="c_passw" placeholder="Confirm Password" required="" /><br/>
                    <input type="submit" class="btn btn-primary" name="btnSignUp" value="Sign Up" />
                 </div>
                <hr/>
                <p>Already have an account ? <a href="loggingIn.php" ><input style="margin-left:170px;" id="" type="button" class="btn btn-primary" name="login" value="Login" /></a></p> 
              </center>
            </div>
        </div>    
    </form>
</div>
<?php include("inc/overall/footer.php");?>