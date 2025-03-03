<?php
require("config.php");

// Fetch data
$sql = "SELECT * FROM cons1";
$num = 1;
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        /* General body styling */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7f6;
            margin: 0;
            padding: 0;
        }

        /* Main content styling */
        .main-content {
            margin-left: 30px; /* Adjust this margin based on sidebar width */
            padding: 20px;
        }

        /* Container styling */
        .container {
            background-color: white;
            
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Table Styling */
table {
    width: 100%;
    border-collapse: collapse;
}

th, td {
    text-align: center; /* Center align text in both header and body */
    padding: 12px;
    border-bottom: 1px solid #ddd;
    font-size: 16px;
}

th {
    text-align: center !important;
    background-color: #feb900 !important; /* Force the background color */
    color: black !important;
    font-weight: bold;
}

td {
    color: #333;
}

/* Table hover effect */
table tbody tr:hover {
    background-color: #f1f1f1;
}


        /* Buttons */
        .btn {
            border-radius: 5px;
            font-size: 14px;
            padding: 6px 12px;
            transition: background-color 0.3s ease;
        }

        .btnup {
            border: none;
            color: black;
        }
        .btnup:hover{
            color: #e6b800;

        }
        .btndel {
            border: none;
            color: black;
        }
        .btndel:hover {
            color: #e60000;

        }


        /* Registration Button Styling */
        .btnreg {
            display: block;
            margin: 50px auto;
            height: 45px;
            width: 160px;
            font-size: 18px;
            color: white;
            font-family: 'Arial', sans-serif;
            border-radius: 8px;
            background-color:#feb900 ;
            border: none;
          
        }

     

    </style>
</head>
<body>
 
<?php require("sidebar.php") ?>
    <div class="main-content">
        <div class="container mt-5">
       
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Mobile</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td> $num </td>";
                            echo "<td>" . $row["name"] . "</td>";
                            echo "<td>" . $row["email"] . "</td>";
                            echo "<td>" . $row["pass"] . "</td>";
                            echo "<td>" . $row["mobile"] . "</td>";
                            echo "<td>";
                            echo "<a href='update.php?id=" . $row["id"] . "' class='btnup btn-sm'><i class='fa-solid fa-pen-to-square'></i></a> ";
                            echo "<a href='delete.php?id=" . $row["id"] . "' class='btndel btn-sm'><i class='fa-solid fa-trash'></i></a>";
                            echo "</td>";
                            echo "</tr>";
                            $num++;
                        }
                    } else {
                        echo "<tr><td colspan='5'>No records found</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
           
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
// Close connection
$conn->close();
?>
