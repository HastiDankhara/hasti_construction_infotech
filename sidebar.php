<?php
// Start session at the very beginning before any HTML output
session_start(); 
require("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            margin: 0;
            /* font-family: Arial, sans-serif; */
        }

        /* Sidebar */
        .sidebar {
            height: 100%;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #eab72d;
            padding-top: 20px;
            transition: 0.3s;
        }

        .sidebar a {
            padding: 15px;
            text-decoration: none;
            font-size: 18px;
            color: white;
            display: block;
            transition: 0.2s;
        }

        .sidebar a:hover {
            background-color: #feb900;
            /* width:250px; */
            margin-left:1px;
        }

        /* Main content */
        .main-content {
            margin-left: 260px; /* Same width as the sidebar + extra padding */
            padding: 20px;
        }

        .main-content h2 {
            color: #333;
        }
        .imguser{
            margin-top:50px;
            margin-left:45px;
        }
        .welcome-message {
        margin-left: 50px;
        /* font-family: cursive; */
        font-weight: 600;
        font-size: 20px;
        color:#649173;
        margin-top:20px;
 }
   .sidebar a{
         margin-left: 30px;
        /* font-family: cursive; */
        font-weight: 600;
        font-size: 20px;
        color:white;
   } 
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- <img src="img/user.png" width="150px" height="150px" class="imguser" alt=""> -->
        <?php
            if(isset($_SESSION['uname'])){
                echo "<div class='welcome-message'>Welcome, " . $_SESSION['uname'] . "!</div>";
            } else {
                echo "<div class='welcome-message'>Please log in first.</div>";
            }
        ?>
        <a href="admin.php" style=margin-top:30px;>Dashboard</a>
        <a href="userdata.php">Users</a>
        <a href="adminshow.php">Admin</a>
        <a href="showmsg.php">Message</a>
        <a href="showser.php">Servies</a>
        <a href="logout.php">Logout</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
