<?php
include "config.php";


$query = "SELECT * FROM msg";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Messages</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .card {
            margin: 20px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color:#feb900 ;
            color: white;
            font-weight: bold;
            text-align: center;
            border-radius: 15px 15px 0 0;
        }

        .card-body {
            padding: 20px;
        }

        .card-title {
            font-size: 1.5rem;
            color: #333;
        }

        .card-text {
            color: #555;
            font-size: 1rem;
        }

        .btn-primary {
            background-color:#feb900 ;
            border: none;
        }
        .btn-primary:hover {
            background-color:#feb900 ;
            border: none;
        }

      
    </style>
</head>
<body>

<div class="container mt-5">
    <div class="row">
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                ?>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            Message from: <?php echo $row['name']; ?>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Subject: <?php echo $row['subject']; ?></h5>
                            <p class="card-text"><strong>Email:</strong> <?php echo $row['email']; ?></p>
                            <p class="card-text"><strong>Message:</strong> <?php echo $row['msg']; ?></p>
                            <a href="#" class="btn btn-primary">View More</a>
                        </div>
                    </div>
                </div>
                <?php
            }
        } else {
            echo "<p>No messages found.</p>";
        }
        ?>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
