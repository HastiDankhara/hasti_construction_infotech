<?php
require("config.php");


if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: adminlog.php");
    exit();
}

$sql = "SELECT * FROM addser";
$result = $conn->query($sql);
?>
<?php
              require("config.php");

              if(isset($_POST['logout'])){
                

session_destroy();
header("Location: adminlog.php");
exit();
              }

              ?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
      integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
 
    <style>
        

.container-w3 {
    max-width: 1200px;
    margin: auto;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

.row {
    /* display: flex;
    flex-wrap: wrap;
    justify-content: space-between; */
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    padding: 20px;
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
    /* background: #007BFF; */
    background:#feb900;
    color: white;
    border: none;
    padding: 10px 15px;
    cursor: pointer;
    transition: background 0.3s;
    border-radius:5px;
}

.btn-primary:hover {
    background: #0056b3;
    /* background: #feb900; */
}

    </style>
    <title>Services</title>
    <!-- <script>
      window.location.href="login.php";
    </script> -->
  </head>
  <body>
    <header>
      <div class="header_logo">HCI</div>
      <div class="header_menu">
        <ul>
        <li><a href="./index.php" data-target="hero_banner">Home</a></li>
        <li><a href="./about.php" data-target="about">About Us</a></li>
        <li><a href="./services.php" data-target="services">Services</a></li>
        <li><a href="./project.php" data-target="projects">Projects</a></li>
        <li><a href="./contact.php" data-target="contact">Contact Us</a></li>
        </ul>
      </div>
      <div class="Registration_btn">
    <form method="post">
        <button type="submit" name="logout" class="btnout" >Logout</button>
        <button><a href="registration.php">Registration</a></button>
      <button><a href="login.php">Login</a></button>
    </form>
    </div>
    </header>
    <section id="services" class="service_sec">
      <div class="hero_text2">
        <div class="blur_image"></div>
        <div class="hero_t container">
          <h2>Services</h2>
          <div class="border"></div>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae unde
            provident vel et libero atque, recusandae omnis dolor magni
            incidunt! Lorem ipsum dolor sit amet consectetur adipisicing
            elitLorem ipsum dolor sit amet consectetur adipisicing elit
          </p>
        </div>
      </div>
      <div class="container">
        <div class="info">
          <div class="info1">
            <h4>Quasi eaque omnis</h4>
            <p>
              Eius non minus autem soluta ut ui labore omnis quisquam corrupti
              autem odit voluptas quos commodi magnam occaecati.
            </p>
            <ul>
              <li>
                <svg
                  stroke="#feb900"
                  fill="#feb900"
                  stroke-width="2 "
                  viewBox="0 0 512 512"
                  height="1em"
                  width="1em"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="32"
                    d="M416 128 192 384l-96-96"
                  ></path>
                </svg>
                Ullamco laboris nisi ut aliquip
              </li>
              <li>
                <svg
                  stroke="#feb900"
                  fill="#feb900"
                  stroke-width="0"
                  viewBox="0 0 512 512"
                  height="1em"
                  width="1em"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="32"
                    d="M416 128 192 384l-96-96"
                  ></path>
                </svg>
                Duis aute irure dolor in reprehenderit
              </li>
              <li>
                <svg
                  stroke="#feb900"
                  fill="#feb900"
                  stroke-width="0"
                  viewBox="0 0 512 512"
                  height="1em"
                  width="1em"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="32"
                    d="M416 128 192 384l-96-96"
                  ></path>
                </svg>
                Ullamco laboris nisi ut aliquip ex ea
              </li>
            </ul>
          </div>
          <div class="info1">
            <h4>Et nemo dolores consectetur</h4>
            <p>
              Ducimus ea quam et occaecati est. Temporibus in soluta labore
              voluptates aut. Et sit soluta non repellat sed quia dire plovers
              tradoria
            </p>
            <ul>
              <li>
                <svg
                  stroke="#feb900"
                  fill="#feb900"
                  stroke-width="0"
                  viewBox="0 0 512 512"
                  height="1em"
                  width="1em"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="32"
                    d="M416 128 192 384l-96-96"
                  ></path>
                </svg>
                Enim temporibus maiores eligendi
              </li>
              <li>
                <svg
                  stroke="#feb900"
                  fill="#feb900"
                  stroke-width="0"
                  viewBox="0 0 512 512"
                  height="1em"
                  width="1em"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="32"
                    d="M416 128 192 384l-96-96"
                  ></path>
                </svg>
                Ut maxime ut quibusdam quam qui
              </li>
              <li>
                <svg
                  stroke="#feb900"
                  fill="#feb900"
                  stroke-width="0"
                  viewBox="0 0 512 512"
                  height="1em"
                  width="1em"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="32"
                    d="M416 128 192 384l-96-96"
                  ></path>
                </svg>
                Officiis aspernatur in officiis
              </li>
            </ul>
          </div>
          <div class="info1">
            <h4>Staque laboriosam modi</h4>
            <p>
              Velit eos error et dolor omnis voluptates nobis tenetur sed enim
              nihil vero qui suscipit ipsum at magni. Ipsa architecto
              consequatur aliquam
            </p>
            <ul>
              <li>
                <svg
                  stroke="#feb900"
                  fill="#feb900"
                  stroke-width="0"
                  viewBox="0 0 512 512"
                  height="1em"
                  width="1em"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="32"
                    d="M416 128 192 384l-96-96"
                  ></path>
                </svg>
                Quis voluptates laboriosam numquam
              </li>
              <li>
                <svg
                  stroke="#feb900"
                  fill="#feb900"
                  stroke-width="0"
                  viewBox="0 0 512 512"
                  height="1em"
                  width="1em"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="32"
                    d="M416 128 192 384l-96-96"
                  ></path>
                </svg>
                Debitis eos est est corrupti
              </li>
              <li>
                <svg
                  stroke="#feb900"
                  fill="#feb900"
                  stroke-width="0"
                  viewBox="0 0 512 512"
                  height="1em"
                  width="1em"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="32"
                    d="M416 128 192 384l-96-96"
                  ></path>
                </svg>
                Ullamco laboris nisi ut aliquip ex ea
              </li>
            </ul>
          </div>         
        </div>
        <div class="mys">
            <h1>The Best Services</h1>
            <h3>We Provide</h3> 
            <div class="border"></div>
      </div>
    </section>


    <section id="services" class="service_sec">
        
        <div class="container-w3">
            <div class="row">
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<div class="col-md-4">';
                        echo '<div class="card">';
                        echo '<img src="' . $row['img'] . '" class="card-img-top" alt="Service Image">';
                        echo '<div class="card-body">';
                        echo '<h5 class="card-title">' . $row['name'] . '</h5>';
                        echo '<p class="card-text">Price: Rs ' . $row['rs'] . '</p>';
                        echo '<button class="btn btn-primary">PAYMENT</button>';
                        echo '</div></div></div>';
                    }
                } else {
                    echo '<p>No services found.</p>';
                }
                ?>
            </div>
        </div>
    </section>

    <footer id="footer" class="footer_dark_background">
      <div class="blur_bg"></div>
      <div class="container">
        <div class="footer_flex_main">
          <div class="flex_item">
            <h3>Hasti Construction Infotech</h3>
            <p class="add">B1/1306, Lock Everest, Jatashankar Rd,</p>
            <p class="add">Near Cement Company, Mulund (east)</p>
            <p class="phone_number">
              <b>Phone:</b>
              <span>+1 5589 55488 55</span>
            </p>
            <p class="email">
              <b>Email:</b>
              <span>info@example.com</span>
            </p>
            <svg
              stroke="currentColor"
              fill="currentColor"
              stroke-width="0"
              viewBox="0 0 448 512"
              height="1em"
              width="1em"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm297.1 84L257.3 234.6 379.4 396H283.8L209 298.1 123.3 396H75.8l111-126.9L69.7 116h98l67.7 89.5L313.6 116h47.5zM323.3 367.6L153.4 142.9H125.1L296.9 367.6h26.3z"
              ></path>
            </svg>
            <svg
              stroke="currentColor"
              fill="currentColor"
              stroke-width="0"
              viewBox="0 0 448 512"
              height="1em"
              width="1em"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64h98.2V334.2H109.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H255V480H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64z"
              ></path>
            </svg>
            <svg
              stroke="currentColor"
              fill="currentColor"
              stroke-width="0"
              viewBox="0 0 448 512"
              height="1em"
              width="1em"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M194.4 211.7a53.3 53.3 0 1 0 59.3 88.7 53.3 53.3 0 1 0 -59.3-88.7zm142.3-68.4c-5.2-5.2-11.5-9.3-18.4-12c-18.1-7.1-57.6-6.8-83.1-6.5c-4.1 0-7.9 .1-11.2 .1c-3.3 0-7.2 0-11.4-.1c-25.5-.3-64.8-.7-82.9 6.5c-6.9 2.7-13.1 6.8-18.4 12s-9.3 11.5-12 18.4c-7.1 18.1-6.7 57.7-6.5 83.2c0 4.1 .1 7.9 .1 11.1s0 7-.1 11.1c-.2 25.5-.6 65.1 6.5 83.2c2.7 6.9 6.8 13.1 12 18.4s11.5 9.3 18.4 12c18.1 7.1 57.6 6.8 83.1 6.5c4.1 0 7.9-.1 11.2-.1c3.3 0 7.2 0 11.4 .1c25.5 .3 64.8 .7 82.9-6.5c6.9-2.7 13.1-6.8 18.4-12s9.3-11.5 12-18.4c7.2-18 6.8-57.4 6.5-83c0-4.2-.1-8.1-.1-11.4s0-7.1 .1-11.4c.3-25.5 .7-64.9-6.5-83l0 0c-2.7-6.9-6.8-13.1-12-18.4zm-67.1 44.5A82 82 0 1 1 178.4 324.2a82 82 0 1 1 91.1-136.4zm29.2-1.3c-3.1-2.1-5.6-5.1-7.1-8.6s-1.8-7.3-1.1-11.1s2.6-7.1 5.2-9.8s6.1-4.5 9.8-5.2s7.6-.4 11.1 1.1s6.5 3.9 8.6 7s3.2 6.8 3.2 10.6c0 2.5-.5 5-1.4 7.3s-2.4 4.4-4.1 6.2s-3.9 3.2-6.2 4.2s-4.8 1.5-7.3 1.5l0 0c-3.8 0-7.5-1.1-10.6-3.2zM448 96c0-35.3-28.7-64-64-64H64C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96zM357 389c-18.7 18.7-41.4 24.6-67 25.9c-26.4 1.5-105.6 1.5-132 0c-25.6-1.3-48.3-7.2-67-25.9s-24.6-41.4-25.8-67c-1.5-26.4-1.5-105.6 0-132c1.3-25.6 7.1-48.3 25.8-67s41.5-24.6 67-25.8c26.4-1.5 105.6-1.5 132 0c25.6 1.3 48.3 7.1 67 25.8s24.6 41.4 25.8 67c1.5 26.3 1.5 105.4 0 131.9c-1.3 25.6-7.1 48.3-25.8 67z"
              ></path>
            </svg>
            <svg
              stroke="currentColor"
              fill="currentColor"
              stroke-width="0"
              viewBox="0 0 448 512"
              height="1em"
              width="1em"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"
              ></path>
            </svg>
          </div>
          <div class="sub_flex">
            <div class="sub_flex_item">
              <h4>Useful Links</h4>
              <p>Home</p>
              <p>About Us</p>
              <p>Services</p>
              <p>Terms of Services</p>
              <p>Privacy Policy</p>
            </div>
            <div class="sub_flex_item">
              <h4>Our Services</h4>
              <p>Web Design</p>
              <p>Web Development</p>
              <p>Product Management</p>
              <p>Marketing</p>
              <p>Graphic Design</p>
            </div>
            <div class="sub_flex_item">
              <h4>Hic solutasetp</h4>
              <p>Molestiae accusamus iure</p>
              <p>Excepturi dignissimos</p>
              <p>Suscipit distinctio</p>
              <p>Dilecta</p>
              <p>Sit quas consectetur</p>
            </div>
            <div class="sub_flex_item">
              <h4>Nobis illum</h4>
              <p>Ipsam</p>
              <p>Laudantium dolorum</p>
              <p>Dinera</p>
              <p>Trodelas</p>
              <p>Flexo</p>
            </div>
          </div>
        </div>
        <div class="footer_bottom">
          <p>© Copyright UpConstruction All Rights Reserved</p>
        </div>
      </div>
    </footer>
  </body>
</html>
