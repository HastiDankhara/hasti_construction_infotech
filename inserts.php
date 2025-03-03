<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $rs = isset($_POST['rs']) ? $_POST['rs'] : '';

    if (!empty($name) && !empty($rs) && isset($_FILES['img'])) {
        $upload = "uploads/";
        $file_name_array = explode('.', $_FILES['img']['name']);
        $file_name = time() . '.' . end($file_name_array);
        $upload_file = $upload . $file_name;

       
        if (!is_dir($upload)) {
            mkdir($upload, 0777, true);
        }

        if (move_uploaded_file($_FILES['img']['tmp_name'], $upload_file)) {
            $img = 'http://localhost/project/' . $upload_file; 

          
            $stmt = $conn->prepare("INSERT INTO addser (name, img, rs) VALUES (?, ?, ?)");
            $stmt->bind_param("ssi", $name, $img, $rs);

            if ($stmt->execute()) {
                echo "<script>alert('Service uploaded successfully!');</script>";
            } else {
                echo "Error: " . $stmt->error;
            }

           
            $stmt->close();
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    } else {
        echo "Please fill in all fields.";
    }
}

// Close the database connection
$conn->close();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Upload</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Upload Service</h2>
    <form action="inserts.php" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="productName" class="form-label">Service Name</label>
            <input type="text" class="form-control" id="productName" name="name" required>
        </div>
        <div class="mb-3">
            <label for="productPrice" class="form-label">Price (Rs)</label>
            <input type="number" class="form-control" id="productPrice" name="rs" required>
        </div>
        <div class="mb-3">
            <label for="productImage" class="form-label">Product Image</label>
            <input type="file" class="form-control" id="productImage" name="img" accept="image/*" required>
        </div>
        <button type="submit" class="btn btn-primary">Upload</button>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
