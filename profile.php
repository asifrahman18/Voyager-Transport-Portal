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
    <title>Profile</title>

    <style>
    body {
        font-family: Montserrat, sans-serif;
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

    .container {
        user-select: none;
        margin: 100px auto;
        background: #231e39;
        color: #b3b8cd;
        border-radius: 5px;
        width: 350px;
        text-align: center;
        box-shadow: 0 10px 20px -10px rgba(0, 0, 0, .75);
    }

    .container:hover {
        opacity: 1;
        transform: scale(1.1);
        border: 3px solid rgb(0, 0, 0);
        transition: transform 0.2s;
    }

    .cover-photo {
        background: url(https://images.unsplash.com/photo-1540228232483-1b64a7024923?ixlib=rb-1.2.1&auto=format&fit=crop&w=967&q=80);
        height: 160px;
        width: 100%;
        border-radius: 5px 5px 0 0;
    }

    .profile {
        height: 120px;
        width: 120px;
        border-radius: 50%;
        margin: 93px 0 0 -175px;
        border: 1px solid #1f1a32;
        padding: 7px;
        background: #292343;
    }

    .profile-name {
        font-size: 25px;
        font-weight: bold;
        margin: 27px 0 0 120px;
    }

    .about {
        margin-top: 35px;
        line-height: 21px;
    }

    button {
        margin: 10px 0 40px 0;
    }

    .msg-btn,
    .follow-btn {
        background: #03bfbc;
        border: 1px solid #03bfbc;
        color: #231e39;
        border-radius: 3px;
        font-family: Montserrat, sans-serif;
        cursor: pointer;
    }

    .follow-btn {
        margin-left: 5px;
        background: transparent;
        color: #02899c;
    }

    .follow-btn:hover {
        color: #231e39;
        background: red;
        transition: .5s;
        border: black;
        transform: scale(1.1);
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

    table,
    td {
        text-align: left;
        font-size: medium;
    }

    th {
        text-decoration: underline;
    }
    </style>
</head>

<body>

    <div class="title">
        <ul id="nav_bar">
            <li id="profile"><a href="search.php">Retun Home</a></li>
        </ul>
    </div>
    <div class="container">
        <div class="cover-photo">
            <img src="https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/28520142419075.57cc3f77e3891.png"
                class="profile">
        </div>

        <div class="profile-name">
            <table class="zigzag">
                <thead>
                    <tr>
                        <br>
                        <th class="header"><b>Profile</b></th>

                    </tr>
                </thead>
                <tbody>


                    <?php
            
            if(isset($_POST['submit'])){
            
            $id = $_SESSION['userID'];
            $name = $_SESSION['name'];
            $email = $_SESSION['mail'];

            // for debug
            //echo $_SESSION['userID'];


                ?>

                    <tr>
                        <td><?php echo "UserID: $id"; ?></td>

                    </tr>
                    <tr>
                        <td><?php echo "Name:  $name"; ?></td>
                    </tr>
                    <tr>
                        <td><?php echo "Email: $email"; ?></td>
                    </tr>



                </tbody>
            </table>
        </div>


        <br>
        <form action="edit.php" method="POST">
            <input type="submit" name="edt" class="msg-btn" value="Edit Account"></input>
        </form>
        <br>
        <form action="profile.php" method="POST">
            <input type="submit" name="dlt" class="follow-btn" value="Delete Account"></input>
        </form>
        <br>
    </div>


    <?php
        }
        if(isset($_POST['dlt'])){
        
            $id = $_SESSION['userID'];
        
        //for debuging
        //echo $id;
        $sql = "DELETE FROM user WHERE User_ID = $id";

        $result = mysqli_query($conn , $sql);
            if($result)
                {
                    header("Location: index.php?deletion=success");
                ?>
    <!-- <p>Click <a href="index.php">Here </a> to Login</p> -->
    <?php
    } else {
    echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
    }
    ?>

</body>

</html>

</body>

</html>