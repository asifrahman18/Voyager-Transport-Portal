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
        height: 100vh;
        /* overflow: hidden; */
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

    .zigzag {
        border-collapse: collapse;
        margin: 25px 0;
        font-size: 0.9em;
        font-family: sans-serif;
        min-width: 400px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        margin-left: auto;
        margin-right: auto;

    }

    .zigzag tbody tr {
        border-bottom: 1px solid #dddddd;
    }

    .zigzag th,
    .zigzag td {
        padding: 12px 15px;
    }

    .zigzag td {
        background-color: rgba(9, 53, 232, 0.8);
        color: #ffffff;

    }

    .bid {
        color: red;
    }

    .boxx {
        position: absolute;
        width: 226px;
        height: 92px;
        left: 1000px;
        top: 200px;
    }

    .btn {
        margin-top: 10px;
    }

    .seat {
        font-weight: bold;
        font-size: large;
    }
    </style>
</head>

<body>

    <div class="title">
        <ul id="nav_bar">
            <li class="nav-link-right">Voyager Transport Portal</li>
            <form action="profile.php" method="POST">
                <input type="submit" name="submit" value="Profile"></input>
            </form>
        </ul>
    </div>


    <div class="boxx">
        <p class="seat">Want to book a seat?</p>
        <form name="f2" action="confirm.php" method="POST">
            <label class="seat">Enter BUS ID</label>
            <br>
            <input type="text" name="bid" required />
            <br>
            <input type="submit" name="bking" value="Book" class="btn" />
            <br>
        </form>
    </div>

    <table class="zigzag">
        <thead>
            <tr>
                <th class="header"><b>Bus Name</b></th>
                <th class="header"><b>Pickup Location</b></th>
                <th class="header"><b>Destination</b></th>
                <th class="header"><b>Bus Type</b></th>
                <th class="header"><b>Seats Left</b></th>
                <th class="header"><b>Bus ID</b></th>
            </tr>
        </thead>
        <tbody>
            <!-- <tr>
            <td>16</td>
            <td>14</td>
        </tr> -->


            <?php
            
            if(isset($_POST['submit'])){
                
       

            $_SESSION['from']= $_POST['loc_from'];
            $_SESSION['to']= $_POST['loc_to'];

            
            $loca_from = $_SESSION['from'];
            $loca_to = $_SESSION['to'];

                $query = "SELECT bus.Bus_Name, route.Staring, route.Destination, bus.Type, bus.Seat_lft, bus.Bus_ID FROM bus, route WHERE route.Staring = '$loca_from' AND route.Destination = '$loca_to' AND bus.Route_ID = route.R_ID";
                $data = mysqli_query($conn,$query);
                $row = mysqli_fetch_array($data, MYSQLI_ASSOC); 
                $total = mysqli_num_rows($data);


                $result = $conn->query($query);

                if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                ?>

            <tr>
                <td><?php echo  $row["Bus_Name"]; ?></td>
                <td><?php echo  $row["Staring"]; ?></td>
                <td><?php echo  $row["Destination"]; ?></td>
                <td><?php echo  $row["Type"]; ?></td>
                <td><?php echo  $row["Seat_lft"]; ?></td>
                <td class="bid"><?php echo  $row["Bus_ID"]; ?></td>
            </tr>

            <?php
                    
                }
                } else {
                echo "0 results";
                }

                exit();

            }


        ?>
        </tbody>
    </table>


</body>

</html>