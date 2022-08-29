<?php
session_start();
include('conncet.php');
?>

<!DOCTYPE html>

<html>

<head>
    <title>Voyager - Login</title>
    <link rel="stylesheet" href="style.css" />
</head>


<body>

    <div class="center">
        <h1>Login</h1>
        <form name="f1" action="index.php" method="POST">
            <div class="txt_field">
                <input type="text" name="user" required />
                <span></span>
                <label>User ID</label>
            </div>
            <div class="txt_field">
                <input type="password" name="pass" required />
                <span></span>
                <label>PIN</label>
            </div>
            <input type="submit" name="submit" value="Login" />
            <div class="signup_link">
                Cannot Find Your Account? <a href="registration.php">Register</a>
            </div>
            <div><br /></div>
        </form>
    </div>



    <?php

        if(isset($_POST['submit']))
        {
            $username= $_POST['user'];  
            $password= $_POST['pass'];

            $sql = "select *from user where User_ID = '$username' and pin = '$password'";
            
            $result = mysqli_query($conn , $sql);
            $count = mysqli_num_rows($result);
            $row = $result->fetch_assoc();
            if($count==1)
            {
                $_SESSION['userID'] = $row['User_ID'];
                $_SESSION['password'] = $row['pin'];
                $_SESSION['mail'] = $row['Email'];
                $_SESSION['name'] = $row['Name'];


                // for Debug
                
                // echo $_SESSION['userID'];
                // echo $_SESSION['password'];
                // echo $_SESSION['mail'];
                // echo $_SESSION['name'];

                header("Location: search.php?login=success");
            }
            else
            {
                echo "<h1><center></center> Login failed. Invalid username or password.</h1>"; 
            }
        }
    
        
    ?>


</body>

</html>