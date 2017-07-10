<?php
    include ("inc/overall/mainHeader.php");

$fname = "";
$lname = ""; 
$email = "";
$boi = ""; 
$pp = "";
$error_msg = "";
$error_msg2 = "";
$errorPic = "";

    $sql = "SELECT * 
              FROM users
                 WHERE user_id = '".$_SESSION['user_id']."'";

     $result = $conn->query($sql);

        if ($result->num_rows > 0) {

        while($row =  $result->fetch_assoc()){
            $fname = $row["first_name"];
            $lname = $row["last_name"];
            $phoneNumber = $row["phoneNumber"];
            $city = $row['city'];
            $surbub = $row['surbub'];
            $pp = $row['profile_picc'];
        }
           
    }
?>

<?php
if(isset($_POST['oldpassword']) && isset($_POST['newpassword']) && isset($_POST['newpassword2'])){
    $oldpass = md5($_POST['oldpassword']);
    $pass_Checksql = "SELECT * 
                        FROM users
                            WHERE  user_id = '".$_SESSION['user_id']."' AND
                            passwordd = '$oldpass' LIMIT 1";
    $results = $conn->query($pass_Checksql);
    
    
    if($results->num_rows > 0){
        $newPass = $_POST['newpassword'];
        $newPass2 = $_POST['newpassword2'];
            
        if($newPass == $newPass2){
             $newPass =  md5($newPass);
            
               $updatePass = "UPDATE users
                        set passwordd = '$newPass' WHERE  user_id = '".$_SESSION['user_id']."'";
            
            $conn->query($updatePass) or die();
            $error_msg = "<b style='color:lime;'>password changed </b>";
            
        }
        else{
            $error_msg = "<b style='color:red;'> new password doesn't match </b>";
        }
    }
    else{
        $error_msg = "<b style='color:red;'> old password incorrect </b>";
    }
}


if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['city'])){
    
            $newFname = $_POST['fname'];
            $newLname = $_POST['lname'];
            $newPhoneNumber = $_POST['phoneNumber'];
            $newCity = $_POST['city'];
            $newSurbub = $_POST['surbub'];
           
    
            $updatePass = "UPDATE users
                        set first_name = '$newFname',last_name = '$newLname',phoneNumber = '$newPhoneNumber',city = '$newCity',surbub = '$newSurbub' WHERE  user_id = '".$_SESSION['user_id']."'";
            
           $conn->query($updatePass) or die();
            $error_msg2 = "<b style='color:lime;'>Information updated</b>";

        $result = $conn->query("SELECT * 
                              FROM users 
                                WHERE  user_id = '".$_SESSION['user_id']."'");
    



        if ($result->num_rows > 0) {

        while($row =  $result->fetch_assoc()){
            $fname = $row["first_name"];
            $lname = $row["last_name"];
            $phoneNumber = $row["phoneNumber"];
            $city = $row['city'];
            $surbub = $row['surbub'];
            $pp = $row['profile_picc'];
        }
            
    }
}


if(isset($_FILES['pp'])){
    if((@$_FILES['pp']["type"]=="image/jpeg") || (@$_FILES['pp']["type"]=="image/gif") || ($_FILES['pp']["type"]=="image/png") && $_FILES['pp']["size"] <= 10048576 ) {
        $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $g_rand_dir = substr(str_shuffle($chars), 0, 15);
        mkdir("userdata/profile_pics/$g_rand_dir");
        
        if(file_exists("userdata/profile_pics/$g_rand_dir/".@$_FILES['pp']["name"])){
            $errorPic = "<b style='color:red;'> picture already exists </b>";
        }
        else{
             move_uploaded_file(@$_FILES['pp']["tmp_name"], "userdata/profile_pics/$g_rand_dir/".@$_FILES['pp']["name"]);
             $dir = 'userdata/profile_pics/'.$g_rand_dir.'/'.@$_FILES["pp"]["name"];
            
             $updatePp = "UPDATE users
                                set profile_picc = '$dir'
                                    WHERE  user_id = '".$_SESSION['user_id']."'";
             $conn->query($updatePp);
             $errorPic = "<b style='color:lime;'> picture uploaded </b>";

               $result = $conn->query("SELECT * 
                            FROM users 
                            WHERE  user_id = '".$_SESSION['user_id']."'");
    
    
            
             if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()){
           
               $_SESSION['userPP'] = $row['profile_picc'];
            }}

             echo"<script>window/location.url='http://locahost/GitHub/DDN/updateProfile.php';</script>";
        }
    }
    else{
        
    }
}
?>
<link href="inc/style.css" rel="stylesheet" />
<div class="container">
<h2>EDIT YOUR ACCOUNT BELOW!</h2>
<center><p><h3>UPDATE PROFILE PICTURE</h3></p></center>
<?php  echo $errorPic;?>
<form action="" method="POST" enctype="multipart/form-data">
   <center>
    <img style="border-radius:50%;" width="300px;" height="300px" src="<?php echo $pp;?>" alt="" /><br/>
    <input style="border:0;" type="file" name="pp" required="" id="pp"/><br/>
    <input style="background-color: #00B9ED;font-weight:bolder;" type="submit" name="uploadPp" value="UPDATE" />
   </center> 
</form>

<center><p><h3>CHANGE PASSWORD</h3></p></center>
<?php  echo $error_msg;?>
<form action="updateProfile.php" method="post">
<table style="margin-left:180px;">
    <tr>    <td width="50%" class="tdd" > Old password   </td>       <td width="50%" ><input type="password" name="oldpassword" id="oldpassword" required=""/>       </td> </tr>
    <tr>    <td width="50%" class="tdd" > New password   </td>       <td width="50%" ><input type="password" name="newpassword" id="newpassword" required=""/>       </td> </tr>
    <tr>    <td width="50%" class="tdd"> Confirm password   </td>       <td width="50%" ><input type="password" name="newpassword2" id="newpassword2" required=""/>      </td> </tr>
</table>
<center><p><input style="background-color: #00B9ED;font-weight:bolder;" type="submit" name="updatePass" id="updatePass" value="CHANGE PASSWORD"/></p></center>
</form>
<center><p><h3>UPDATE YOUR INFO </h3></p></center>
<?php  echo $error_msg2;?>
<form action="updateProfile.php" method="post">
    <table style="margin-left:180px;">
    <tr>    
        <td width="50%" class="tdd"> First Name   </td>      
        <td width="50%" ><input type="text" name="fname" id="fname" value="<?php echo $fname;?>" required=""/>       </td>
    </tr>
    <tr>   
        <td width="50%" class="tdd"> Last Name  </td>    
        <td width="50%" ><input type="text" name="lname" id="lname" value="<?php echo $lname;?>" required=""/>       </td> 
    </tr>
    <tr>   
        <td width="50%" class="tdd"> Phone Number   </td>    
        <td width="50%" > <input type="text" name="phoneNumber" id="phoneNumber" value="<?php echo $phoneNumber;?>" required=""/>     </td> 
    </tr> 
    <tr>   
        <td width="50%" class="tdd"> City    </td>    
        <td width="50%" > <input type="text" name="city" id="city" value="<?php echo $city;?>" required=""/>     </td> 
    </tr>    <tr>   
        <td width="50%" class="tdd"> Surbub    </td>    
        <td width="50%" > <input type="text" name="surbub" id="surbub" value="<?php echo $surbub;?>" required=""/>     </td> 
    </tr>
</table>
<center><p><input style="background-color: #00B9ED;font-weight:bolder;" type="submit" name="updatePass" id="updatePass" value="UPDATE"/></p></center>
</form>
</div>
<?php include("inc/overall/footer.php");?>