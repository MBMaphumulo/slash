<?php
include("connection.php");

//check_connection
if($conn->connect_error){
    echo "Sorry but we're experiencing some technical problems<br/>";
}

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

            }
           
            if($passCheck == $user_password_md5)
            {
                $_SESSION['user_id'] = $user_login;
                $_SESSION['firstname'] = $first_name;
                $_SESSION['lastname'] = $last_name;
                $_SESSION['active'] = $active;
                header("location:home.php");
            }
        } else {
            echo "<script>alert('Sorry, but the user doesnt exits');</script>";
        }

        $conn->close();
    }
}

//Register_user
if($_SERVER['REQUEST_METHOD'] === 'POST'){

  if(isset($_POST['btnSignUp'])){

        echo "<script>alert('innn')</script>";

        $user_id = $_POST['user_id'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $phoneNumber = $_POST['phoneNumber'];
        $city = $_POST['city'];
        $surbub = $_POST['surbub'];
        $pass = $_POST['passw'];
        $c_pass = $_POST['c_passw'];

        $pass_md5 = md5($pass);

        $sql = "INSERT INTO users VALUES('$user_id','$firstname','$lastname','1','$pass_md5','0$phoneNumber','$city','$surbub')";

        if($pass === $c_pass){
            $result = $conn->query($sql);
             if($result){
                echo "<script>alert('User created successful. Please login to continue')</script>";
             }
        }else{
             
            echo "<script>alert('Password doesnt match')</script>";
        }
    }



}


?>