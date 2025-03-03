<?php
include 'config.php';


$sql = "SELECT * FROM addser";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Uploaded Services</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Image</th>
                <th>Price (Rs)</th>
                <th colspan="2">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>{$row['name']}</td>";
                    echo "<td><img src='" . $row['img'] . "' alt='Image' style='width: 100px;'></td>";
                    echo "<td>{$row['rs']}</td>";
                    echo "<td><a href='update_service.php?id={$row['id']}' class='btn btn-warning'>Update</a></td>";
                    echo "<td><a href='delete_service.php?id={$row['id']}' class='btn btn-danger'>Delete</a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5' class='text-center'>No services found</td></tr>";
            }
            ?>
        </tbody>
    </table>
    <a href="inserts.php" class="btn btn-primary">Add Service</a>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
$conn->close();
?>
