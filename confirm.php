<?php
session_start();
include('conncet.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Voyager - Confirmation</title>
</head>

<style>
@import url("https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&family=Poppins:wght@400;500;600&display=swap");

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
}

.box {
    position: absolute;
    width: 500px;
    left: 526px;
    top: 150px;

    text-align: center;
    padding: 20px;
    background-color: rgba(90, 166, 238, 0.281);
}

.bus-info {
    color: black;
    background-color: rgb(90, 166, 238);
    text-align: center;
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

h1 {
    color: #c00;
    font-family: sans-serif;
    font-size: 2em;
    margin-bottom: 0;
}


#nav_bar {
    float: right;
}

#nav_bar li {
    display: inline-block;
    padding: 8px;
    font-size: large;
}

#nav_bar #profile {
    background: #4887ef;
    margin-right: 25px;
    padding: 7px 15px;
    border-radius: 3px;
    font-weight: bold;
}

.header {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
}
</style>

<body>

    <?php

if(isset($_POST['bking']))
{
    $uid = $_SESSION['userID'];
    $bid = $_POST['bid'];


    $sql = "UPDATE bus SET Seat_lft = (Seat_lft - 1) WHERE Bus_ID = '$bid';";
    
    $result = mysqli_query($conn , $sql);
    
    if($result)
    {
        $sql2 = "INSERT INTO booking(User_ID, Bus_ID, Booking_ID) VALUES('$uid', '$bid', '')";
        $result2 = mysqli_query($conn , $sql2);
        
        if($result)
        {
        ?>
    <h1>
        <center> Booking Successfull </center>
    </h1>


    <h1>
        <center> Click <a href="search.php">here</a> to search again </center>
    </h1>

    <?php

        }

    }
}

    ?>

</body>

</html>