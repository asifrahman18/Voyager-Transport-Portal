<?php
session_start();
include('conncet.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <title>

    </title>

    <style>
    @import url("https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&family=Poppins:wght@400;500;600&display=swap");

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
    }

    body {
        background-image: url("images/background.jpg");
        background-color: linear-gradient(120deg, #feffff, #70d6ff);
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
        margin: 0;
        padding: 0;
        /* background: linear-gradient(120deg, #2980b9, #8e44ad); */
        height: 100vh;
        overflow: hidden;
    }

    .center {


        display: block;

        transition: transform 0.2s;
        width: 400px;

        margin: auto;
        margin-left: auto;
        margin-right: auto;
        margin-top: 150px;

        background: linear-gradient(120deg, #feffff, #70d6ff);
        opacity: 0.85;
        border-radius: 10px;
        box-shadow: 10px 10px 15px rgba(0, 0, 0, 0.05);


        background: rgba(67, 149, 243, 0.3);
        border-radius: 16px;
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(10.2px);
        -webkit-backdrop-filter: blur(10.2px);
        border: 1px solid rgb(0, 0, 0);
    }

    .center h1 {
        text-align: center;
        padding: 20px 0;
        border-bottom: 1px solid silver;
    }

    .center form {
        padding: 0 40px;
        box-sizing: border-box;
    }

    .center:hover {
        opacity: 1;
    }

    form .txt_field {
        position: relative;
        border-bottom: 2px solid #adadad;
        margin: 30px 0;
    }

    .txt_field input {
        width: 100%;
        padding: 0 5px;
        height: 40px;
        font-size: 16px;
        border: none;
        background: none;
        outline: none;
    }

    .txt_field label {
        position: absolute;
        top: 50%;
        left: 5px;
        color: #adadad;
        transform: translateY(-50%);
        font-size: 16px;
        pointer-events: none;
        transition: 0.5s;
    }

    .txt_field span::before {
        content: "";
        position: absolute;
        top: 40px;
        left: 0;
        width: 0%;
        height: 2px;
        background: #2691d9;
        transition: 0.5s;
    }

    .txt_field input:focus~label,
    .txt_field input:valid~label {
        top: -5px;
        color: #2691d9;
    }

    .txt_field input:focus~span::before,
    .txt_field input:valid~span::before {
        width: 100%;
    }

    .pass {
        margin: -5px 0 20px 5px;
        color: #a6a6a6;
        cursor: pointer;
    }

    .pass:hover {
        text-decoration: underline;
    }


    .signup_link {
        margin: 30px 0;
        text-align: center;
        font-size: 16px;
        color: #ffffff;
    }

    .signup_link a {
        color: #2691d9;
        text-decoration: none;
    }

    .signup_link a:hover {
        text-decoration: underline;
    }



    input[type="submit"] {
        width: 100%;
        height: 50px;
        border: 1px solid;
        background: #2691d9;
        border-radius: 25px;
        font-size: 18px;
        color: #e9f4fb;
        font-weight: 700;
        cursor: pointer;
        outline: none;
    }

    input[type="submit"]:hover {
        border-color: #000000;
        background: #1b7cbd;
        transition: 0.5s;
    }
    </style>
</head>

<body>


    <div class="center">
        <h1>Register</h1>
        <form name="f2" action="registration.php" method="POST">
            <div class="txt_field">
                <input type="text" name="user" required />
                <span></span>
                <label>Enter UserID (Must be a number)</label>
            </div>
            <div class="txt_field">
                <input type="password" name="pass" required />
                <span></span>
                <label>Enter PIN (Must be a number)</label>
            </div>
            <div class="txt_field">
                <input type="email" name="mail" required />
                <span></span>
                <label>Enter Email</label>
            </div>
            <input type="submit" name="submit" value="Register" />
            <div class="signup_link">
                Already have an Account? <a href="index.php">Log In</a>
            </div>
        </form>
    </div>
    </form>


    <?php

        if(isset($_POST['submit']))
        {
            
            $username = $_POST['user'];  
            $password = $_POST['pass'];
            $email = $_POST['mail'];
         


        
            $sql = "select *from user where User_ID = '$username' and pin = '$password'";
            $result = mysqli_query($conn, $sql);  
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
            $count = mysqli_num_rows($result);  
            
            if($count == 1){  
                echo "<h1><center> User Already Exist </center></h1>";  

            }  
            else{  
                $sql = "INSERT INTO user(User_ID, pin, Email) VALUES('$username', '$password', '$email')";
                $result = mysqli_query($conn, $sql);  

            
                $sql = "select *from user where User_ID = '$username' and pin = '$password'"; 
                $result = mysqli_query($conn, $sql);  
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                $count = mysqli_num_rows($result);  
                
                if($count == 1){  
                    echo "<h1><center> Registration successful </center></h1>";  
                        $_SESSION['userID'] = $row['user_ID'];
                        $_SESSION['password'] = $row['password'];
                        $_SESSION['mail'] = $row['Email'];
                        $_SESSION['name'] = $row['Name'];
        
                        header("Location: search.php?registration=success");
                        exit();
                }  
                else{  
                    echo "<h1><center></center> Login failed. Invalid username or password.</h1>";  
                }     
                $conn->close();
        }
        } 

        
    ?>




</body>

</html>