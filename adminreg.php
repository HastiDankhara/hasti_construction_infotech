<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>admin registration</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
      }

      form {
        background-color: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 400px;
      }

      h1 {
        text-align: center;
        color: #333;
        margin-bottom: 20px;
      }

      label {
        display: block;
        margin: 10px 0 5px;
        font-size: 14px;
        color: #333;
      }

      input {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border-radius: 5px;
        border: 1px solid #ccc;
        box-sizing: border-box;
      }

      input:focus {
        border-color: #28a745;
        outline: none;
        box-shadow: 0 0 5px rgba(40, 167, 69, 0.3);
      }

      button {
        width: 100%;
        padding: 10px;
        background-color: #28a745;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s ease;
      }

      button:hover {
        /* background-color: #218838; */
        background-color:#feb900;
      }

      select {
        height: 30px;
        width: 100%;
      }

      a{
            text-decoration:none;
            font-weight:700;
            /* font-weight: 500; */
            color:#28a745;

        }

        a:hover{
            color:#feb900;
        }

      @media (max-width: 500px) {
        form {
          padding: 15px;
        }

        h1 {
          font-size: 18px;
        }

        label {
          font-size: 12px;
        }

        button {
          font-size: 14px;
        }
      }
    </style>
  </head>
  <body>
    <form method="post">
      <h1><b>Registration Form</b></h1>
      <br />
      <label for="uname">User Name</label>
      <input type="text" name="uname" id="uname" placeholder="Enter Your Name" required /><br /><br />
      <label for="pass">Password</label>
      <input type="password" name="pass" id="pass" placeholder="Enter Your Password" required /><br /><br />
      <label for="type">Type</label>
      <input type="type" name="type" id="type" placeholder="Enter Your Type" required /><br /><br />
      <button name="submit">REGISTER</button><br /><br />
      <center>
      <p>Account Already Exists..? <a href="adminlog.php">Log in</a></p>
      </center>
    </form>
  </body>
</html>

<?php
    include('config.php');
    if (isset($_POST['submit'])) {
        // Sanitize inputs to prevent SQL injection
        $uname = $_POST["uname"];
        // $email = $_POST["email"];
        $pass = $_POST["pass"];
        $type = $_POST["type"];
        // $mob = mysqli_real_escape_string($conn, $_POST["mob"]);
        // $type=mysqli_real_escape_string($conn,$_POST["au"]);

        $sql="insert into user(name,pass,type) values ('$uname','$pass','$type')";
        $result=mysqli_query($conn,$sql);
        // Insert into database with prepared statements

        if ($result)
        {
            // echo "Record inserted successfully";
            header("Location:adminlog.php");
        } 
        else
        {
            die(mysqli_error($conn));
        }
    }
?>