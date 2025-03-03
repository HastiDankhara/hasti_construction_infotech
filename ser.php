<?php
require("config.php");

// Handle logout
if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: adminlog.php");
    exit();
}

// Fetch services
$sql = "SELECT * FROM addser";
$result = $conn->query($sql);
if (!$result) {
    echo "Error fetching services: " . $conn->error;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Services</title>
    <style>
        /* General Resets */

.service_sec {
    padding: 40px 20px;
    text-align: center;
}

.hero_text2 {
    margin-bottom: 40px;
}

.hero_text2 h2 {
    font-size: 36px;
    margin-bottom: 10px;
}

.container {
    max-width: 1200px;
    margin: auto;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

.row {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

.col-md-4 {
    flex: 1 1 30%;
    margin: 10px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.2);
    background: white;
    border-radius: 5px;
    overflow: hidden;
    transition: transform 0.3s;
}

.col-md-4:hover {
    transform: translateY(-5px);
}

.card {
    padding: 15px;
}

.card-img-top {
    width: 100%;
    height: auto;
}

.card-body {
    padding: 10px 0;
}

.card-title {
    font-size: 18px;
    margin-bottom: 10px;
}

.card-text {
    font-size: 16px;
    margin-bottom: 15px;
}

.btn-primary {
    background: #007BFF;
    color: white;
    border: none;
    padding: 10px 15px;
    cursor: pointer;
    transition: background 0.3s;
}

.btn-primary:hover {
    background: #0056b3;
}

    </style>
</head>
<body>
<header>
    <div class="header_logo">HCI</div>
    <div class="header_menu">
        <ul>
            <li><a href="./index.php">Home</a></li>
            <li><a href="./services.php">Services</a></li>
            <li><a href="./project.php">Projects</a></li>
            <li><a href="./contact.php">Contact Us</a></li>
            <li><a href="./about.php">About Us</a></li>
        </ul>
    </div>
    <div class="Registration_btn">
        <form method="post">
            <button type="submit" name="logout" class="btnout">Logout</button>
            <a href="registration.php" class="btn">Registration</a>
            <a href="login.php" class="btn">Login</a>
        </form>
    </div>
</header>

<section id="services" class="service_sec">
    <div class="hero_text2">
        <h2>Services</h2>
        <p>Find the best services we offer.</p>
    </div>
    <div class="container">
        <div class="row">
            <?php if ($result->num_rows > 0): ?>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="<?= htmlspecialchars($row['img']) ?>" class="card-img-top" alt="Service Image">
                            <div class="card-body">
                                <h5 class="card-title"><?= htmlspecialchars($row['name']) ?></h5>
                                <p class="card-text">Price: Rs <?= htmlspecialchars($row['rs']) ?></p>
                                <button class="btn btn-primary">Read more</button>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <p>No services found.</p>
            <?php endif; ?>
        </div>
    </div>
</section>

<footer id="footer" class="footer_dark_background">
    <div class="container">
        <h3>Hasti Construction Infotech</h3>
        <p>Contact Information</p>
        <p>Phone: +1 5589 55488 55</p>
        <p>Email: info@example.com</p>
    </div>
</footer>
</body>
</html>
