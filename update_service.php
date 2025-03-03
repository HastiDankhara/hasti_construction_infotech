<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $rs = $_POST['rs'];

    // Start with the existing image path
    $img = null;
    
    // Fetch the existing record to keep the old image if not updated
    $result = $conn->query("SELECT img FROM addser WHERE id = $id");
    $row = $result->fetch_assoc();
    $current_img = $row['img'];

    // Check if a new image has been uploaded
    if (isset($_FILES['img']) && $_FILES['img']['error'] == 0) {
        $upload = "uploads/";
        $file_name_array = explode('.', $_FILES['img']['name']);
        $file_name = time() . '.' . end($file_name_array);
        $upload_file = $upload . $file_name;

        // Ensure the uploads directory exists
        if (!is_dir($upload)) {
            mkdir($upload, 0777, true);
        }

        // Move the uploaded file
        if (move_uploaded_file($_FILES['img']['tmp_name'], $upload_file)) {
            $img = 'http://localhost/project/' . $upload_file; // New image path
        } else {
            echo "Error uploading the new image.";
            exit; // Stop further execution if upload fails
        }
    } else {
        // If no new image, use the current one
        $img = $current_img;
    }

    // Prepare the SQL statement
    $stmt = $conn->prepare("UPDATE addser SET name = ?, rs = ?, img = ? WHERE id = ?");
    $stmt->bind_param("sssi", $name, $rs, $img, $id);
    
    if ($stmt->execute()) {
        header("Location: showser.php");
        exit; // Stop script execution after redirection
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
} else {
    $id = $_GET['id'];
    $result = $conn->query("SELECT * FROM addser WHERE id = $id");
    $row = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Service</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Update Service</h2>
    <form action="update_service.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <div class="mb-3">
            <label for="productName" class="form-label">Service Name</label>
            <input type="text" class="form-control" id="productName" name="name" value="<?php echo $row['name']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="productPrice" class="form-label">Price (Rs)</label>
            <input type="number" class="form-control" id="productPrice" name="rs" value="<?php echo $row['rs']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="productImage" class="form-label">Product Image</label>
            <input type="file" class="form-control" id="productImage" name="img" accept="image/*">
            <img src="<?php echo $row['img']; ?>" alt="Current Image" style="width: 100px; margin-top: 10px;">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
$conn->close();
?>
