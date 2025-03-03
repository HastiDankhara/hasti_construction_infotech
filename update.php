<?php
include "config.php";

if (isset($_GET['id'])) {
    $id = intval($_GET['id']); 
    $sql = "SELECT * FROM cons1 WHERE id=$id";
    $result = $conn->query($sql);
    
    if ($result && $row = $result->fetch_assoc()) {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $mobile = $_POST['mobile'];

            $sql = "UPDATE cons1 SET name='$name', email='$email', pass='$password', mobile='$mobile' WHERE id=$id";

            if ($conn->query($sql) === TRUE) {
                header("Location: admin.php");
                exit();
            } else {
                echo "Error updating record: " . $conn->error;
            }
        }
    } else {
        echo "Record not found.";
        exit();
    }
} else {
    echo "ID not provided.";
    exit();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Record</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            overflow-x: hidden;
            background-color: #f9f9f9;
            font-family: 'Arial', sans-serif;
        }

        .formreg {
            height: auto; 
            max-width: 530px;
            margin: 50px auto; 
            padding: 30px; 
            border: 2px solid #ccc; 
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); 
            border-radius: 20px; 
            background-color: #ffffff; 
        }

        h2 {
            text-align: center; 
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            margin-bottom: 30px; 
            color: #333; 
        }

        .form-label {
            margin-top: 15px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 18px; 
            color: #555; 
        }

        .form-control {
            width: 100%;
            margin-top: 5px; 
            border-radius: 10px; 
            height: 45px; 
            border: 1px solid #ccc; 
            padding: 10px; 
            transition: border-color 0.3s; 
        }

        .form-control:focus {
            border-color: #4ca1af; 
            outline: none; 
        }

        .btnreg {
            display: block; 
            margin: 20px auto; 
            height: 45px;
            width: 130px;
            font-size: 18px; 
            color: #ffffff; 
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            border-radius: 8px;
            background-image: linear-gradient(#feb900, #feb900); 
            border: none; 
            cursor: pointer; 
            transition: background 0.3s; 
        }

        .btnreg:hover {
            background-color: #fda900; 
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form action="update.php?id=<?php echo $id; ?>" method="post" class="formreg">
                    <h2>Update Record</h2>
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="Enter Your Name" value="<?php echo htmlspecialchars($row['name']); ?>" required>

                    <label for="email" class="form-label">Email:</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Enter Your Email" value="<?php echo htmlspecialchars($row['email']); ?>" required>

                    <label for="password" class="form-label">Password:</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="Enter Your Password" value="<?php echo htmlspecialchars($row['pass']); ?>" required>

                    <label for="mobile" class="form-label">Mobile No:</label>
                    <input type="text" id="mobile" name="mobile" class="form-control" placeholder="Enter Your phone" value="<?php echo htmlspecialchars($row['mobile']); ?>" required>

                    <input type="submit" name="submit" value="Update" class="btnreg">
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
