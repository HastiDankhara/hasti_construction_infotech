
<?php
              require("config.php");

              if(isset($_POST['logout'])){
                

session_destroy();
header("Location: adminlog.php");
exit();
              }

              ?>


<!DOCTYPE html>
<html lang="en">
<link>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/style.css" />
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
<title>Home</title>
    <!-- <script>
      window.location.href="login.php";
    </script> -->
</head>

<body>
  <header>
    <div class="header_logo" >
      HCI
    </div>
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
  <section id="hero_banner" class="hero_banner">
    <div class="blur_image"></div>
    <div class="hero_text">
      <h1>Welcome to <br> Hasti Construction Infotech</h1>
      <div class="border"></div>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae unde provident vel et libero atque, recusandae
        omnis dolor magni incidunt! Lorem ipsum dolor sit amet consectetur adipisicing elitLorem ipsum dolor sit amet
        consectetur adipisicing elit</p>
      <button>Get Started</button>
    </div>   
  </section>
  <div class="container">
        <div class="main">
          <div class="content">
            <h1>Minus hic non reiciendis ea possimus at quia.</h1>
            <div class="border"></div>
            <p>Rem id rerum. Debitis deserunt quidem delectus expedita ducimus dolor. Aut iusto ipsa. Eos ipsum nobis ipsa soluta itaque perspiciatis fuga ipsum perspiciatis. Eum amet fugiat totam nisi possimus ut delectus dicta.</p><br>
            <p>Aliquam velit deserunt autem. Inventore et saepe. Tenetur suscipit eligendi labore culpa eos. Deserunt porro magni qui necessitatibus dolorem at animi cupiditate.</p>
          </div>
          <div class="msgform">
            <form method="post">
                <input type="text" name="name" id="name" placeholder="Your Name" required /><br><br>
                <input type="text" name="email" id="email" placeholder="Your Email" required /><br><br>
                <input type="text" name="subject" id="subject" placeholder="Subject" required /><br><br>
                <textarea name="mess" id="mess" placeholder="Your Message" required /></textarea><br><br>
                <input type="submit" name="send" id="send" value="Send Message">
            </form>
        </div>
        </div>
        <div class="const">
          <div class="cons_info">
            <h1>Constructions</h1>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
          </div>
          <div class="home_info">
            <div class="h_info">
              <img src="img/constructions-1.jpg" alt="" />
              <div class="hin">
                <h2>Eligendi omnis sunt veritatis.</h2>
                <p>Fuga in dolorum et iste et culpa. Commodi possimus nesciunt modi voluptatem placeat deleniti adipisci. Cum delectus doloribus non veritatis. Officia temporibus illo magnam. Dolor eos et.</p>
              </div>
            </div>
            <div class="h_info">
              <img src="img/constructions-2.jpg" alt="" />
              <div class="hin">
                <h2>Possimus ut sed velit assumenda</h2>
                <p>Sunt deserunt maiores voluptatem autem est rerum perferendis rerum blanditiis. Est laboriosam qui iste numquam laboriosam voluptatem architecto. Est laudantium sunt at quas aut hic. Eum dignissimos.</p>
              </div>
            </div>
            <div class="h_info">
              <img src="img/constructions-3.jpg" alt="" />
              <div class="hin">
                <h2>Error beatae dolor inventore aut</h2>
                <p>Dicta porro nobis. Velit cum in. Nesciunt dignissimos enim molestiae facilis numquam quae quaerat ipsam omnis. Neque debitis ipsum at architecto officia laboriosam odit. Ut sunt temporibus nulla culpa.</p>
              </div>
            </div>
            <div class="h_info">
              <img src="img/constructions-4.jpg" alt="" />
              <div class="hin">
                <h2>Expedita voluptas ut ut nesciunt</h2>
                <p>Aut est quidem doloremque voluptatem magnam quis excepturi vero quia. Eum eos doloremque architecto illo at beatae dolore. Fugiat suscipit et sint ratione dolores. Aut aliquid ea dolores libero nobis.</p>
              </div>
            </div>
            <div class="h_info">
              <img src="img/features-2.jpg" alt="" />
              <div class="hin">
                <h2>Possimus ut sed velit assumenda</h2>
                <p>Sunt deserunt maiores voluptatem autem est rerum perferendis rerum blanditiis. Est laboriosam qui iste numquam laboriosam voluptatem architecto. Est laudantium sunt at quas aut hic. Eum dignissimos.</p>
              </div>
            </div>
            <div class="h_info">
              <img src="img/features-4.jpg" alt="" />
              <div class="hin">
                <h2>Possimus ut sed velit assumenda</h2>
                <p>Sunt deserunt maiores voluptatem autem est rerum perferendis rerum blanditiis. Est laboriosam qui iste numquam laboriosam voluptatem architecto. Est laudantium sunt at quas aut hic. Eum dignissimos.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
  <footer id="footer" class="footer_dark_background">
    <div class="blur_bg"></div>
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
        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm297.1 84L257.3 234.6 379.4 396H283.8L209 298.1 123.3 396H75.8l111-126.9L69.7 116h98l67.7 89.5L313.6 116h47.5zM323.3 367.6L153.4 142.9H125.1L296.9 367.6h26.3z"></path></svg>
        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64h98.2V334.2H109.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H255V480H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64z"></path></svg>
        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M194.4 211.7a53.3 53.3 0 1 0 59.3 88.7 53.3 53.3 0 1 0 -59.3-88.7zm142.3-68.4c-5.2-5.2-11.5-9.3-18.4-12c-18.1-7.1-57.6-6.8-83.1-6.5c-4.1 0-7.9 .1-11.2 .1c-3.3 0-7.2 0-11.4-.1c-25.5-.3-64.8-.7-82.9 6.5c-6.9 2.7-13.1 6.8-18.4 12s-9.3 11.5-12 18.4c-7.1 18.1-6.7 57.7-6.5 83.2c0 4.1 .1 7.9 .1 11.1s0 7-.1 11.1c-.2 25.5-.6 65.1 6.5 83.2c2.7 6.9 6.8 13.1 12 18.4s11.5 9.3 18.4 12c18.1 7.1 57.6 6.8 83.1 6.5c4.1 0 7.9-.1 11.2-.1c3.3 0 7.2 0 11.4 .1c25.5 .3 64.8 .7 82.9-6.5c6.9-2.7 13.1-6.8 18.4-12s9.3-11.5 12-18.4c7.2-18 6.8-57.4 6.5-83c0-4.2-.1-8.1-.1-11.4s0-7.1 .1-11.4c.3-25.5 .7-64.9-6.5-83l0 0c-2.7-6.9-6.8-13.1-12-18.4zm-67.1 44.5A82 82 0 1 1 178.4 324.2a82 82 0 1 1 91.1-136.4zm29.2-1.3c-3.1-2.1-5.6-5.1-7.1-8.6s-1.8-7.3-1.1-11.1s2.6-7.1 5.2-9.8s6.1-4.5 9.8-5.2s7.6-.4 11.1 1.1s6.5 3.9 8.6 7s3.2 6.8 3.2 10.6c0 2.5-.5 5-1.4 7.3s-2.4 4.4-4.1 6.2s-3.9 3.2-6.2 4.2s-4.8 1.5-7.3 1.5l0 0c-3.8 0-7.5-1.1-10.6-3.2zM448 96c0-35.3-28.7-64-64-64H64C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96zM357 389c-18.7 18.7-41.4 24.6-67 25.9c-26.4 1.5-105.6 1.5-132 0c-25.6-1.3-48.3-7.2-67-25.9s-24.6-41.4-25.8-67c-1.5-26.4-1.5-105.6 0-132c1.3-25.6 7.1-48.3 25.8-67s41.5-24.6 67-25.8c26.4-1.5 105.6-1.5 132 0c25.6 1.3 48.3 7.1 67 25.8s24.6 41.4 25.8 67c1.5 26.3 1.5 105.4 0 131.9c-1.3 25.6-7.1 48.3-25.8 67z"></path></svg>
        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"></path></svg>
      </div>
      <div class="sub_flex">
        <div class="sub_flex_item">
          <h4>Useful Links</h4>
          <p>Home</p>
          <p>About Us </p>
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
  </footer>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script></body> -->
<!-- <script src="./js/main.js"></script> -->
</html>
<?php
  include("config.php");
  if(isset($_POST['send']))
  {
    $name=$_POST["name"];
    $email=$_POST["email"];
    $sub=$_POST["subject"];
    $msg=$_POST["mess"];
    $sql="insert into msg(name,email,subject,msg) values('$name','$email','$sub','$msg')";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
      echo "<script>alert('you query send successfully!!!');</script>";
    }
    else
    {
      die(mysqli_error($conn));
    }
  }
?>