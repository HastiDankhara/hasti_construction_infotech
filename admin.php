<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- <script>
      window.location.href="adminlog.php";
    </script> -->

    <style>
        /* Main content */
        .main-content {
            margin-left: 250px; /* Sidebar width */
            padding: 20px;
        }

        /* Header */
        .header {
            padding: 10px;
            background: #feb900;
            color: white;
            text-align: center;
            font-size: 24px;
        }

        /* Cards in the content */
        .card {
            border-radius: 10px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            margin-bottom: 20px;
        }

        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        }

        .card-header {
            background-color: #feb900 !important; /* Updated background color */
            color: white;
            padding: 10px;
            font-size: 20px;
            text-align: center;
        }

        .card-body {
            padding: 20px;
            text-align: center;
        }
        
        /* Text inside the cards */
        .card-body h3 {
            font-size: 32px;
            margin-bottom: 10px;
        }

        .card-body p {
            font-size: 18px;
            color: #777;
        }
    </style>
</head>
<body>

    <?php require("sidebar.php") ?>

    <!-- Main content -->
    <div class="main-content">
        <div class="header">
            Admin Panel Dashboard
        </div>

        <div class="container mt-4">
            <div class="row">
                <!-- Card 1: Users -->
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            Users
                        </div>
                        <div class="card-body">
                        <?php
                            require("config.php");
                            $qry = "SELECT * FROM user WHERE type='User'";
                            $r = mysqli_query($conn, $qry) or die("Not Responded");
                            $number_of_users = mysqli_num_rows($r);
                        ?>
                            <h3><?php echo $number_of_users; ?></h3>
                            <p>Users</p>
                        </div>
                    </div>
                </div>

                <!-- Card 2: Admins -->
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            Admins
                        </div>
                        <div class="card-body">
                        <?php
                            require("config.php");
                            $qry = "SELECT * FROM user WHERE type='admin'";
                            $r = mysqli_query($conn, $qry) or die("Not Responded");
                            $number_of_admins = mysqli_num_rows($r);
                        ?>
                            <h3><?php echo $number_of_admins; ?></h3>
                            <p>Admins</p>
                        </div>
                    </div>
                </div>

                <!-- Card 3: Total Users -->
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            Total Users
                        </div>
                        <div class="card-body">
                        <?php
                            require("config.php");
                            $qry = "SELECT * FROM cons1";
                            $r = mysqli_query($conn, $qry) or die("Not Responded");
                            $total_users = mysqli_num_rows($r);
                        ?>
                            <h3><?php echo $total_users; ?></h3>
                            <p>Total Users</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- New Row for Additional Cards -->
            <div class="row">
                <!-- Card 4: Total Posts -->
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            Total Message
                        </div>
                        <div class="card-body">
                        <?php
                            require("config.php");
                            $qry = "SELECT * FROM msg"; 
                            $r = mysqli_query($conn, $qry) or die("Not Responded");
                            $total_posts = mysqli_num_rows($r);
                        ?>
                            <h3><?php echo $total_posts; ?></h3>
                            <p>Total Message</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
