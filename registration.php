<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration</title>
    <!-- <link rel="stylesheet" href="css/style.css" /> -->
    <script>
      document.querySelector('form').addEventListener('submit', function(e) {
        var pass = document.getElementById('pass').value;
        var con = document.getElementById('con').value;

        if (pass !== con) {
          alert('Passwords do not match!');
          e.preventDefault(); // Prevent form submission if passwords do not match
        }
      });
    </script>
    <style>
body {
  font-family: Arial, sans-serif;
  background-color: #f4f4f4;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  margin: 0;
  width: 100%;
}

form {
  background-color: white;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  /* width: 100%; */
  width: 500px;
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
  background-color: #218838;
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
    <div class="blur_image"></div>
    <div class="regi">
      <div class="container">
        <center>
          <form method="post">
            <h1><b>Registration Form</b></h1>
            <br />
            <label for="uname">User Name</label>
            <input type="text" name="uname" id="uname" required /><br />
            <label for="email">E-mail ID</label>
            <input type="email" name="email" id="email" required /><br />
            <label for="pass">Password</label>
            <input type="password" name="pass" id="pass" required /><br />
            <label for="con">Confirm Password</label>
            <input type="password" name="con" id="con" required /><br />
            <label for="mob">Mobile No</label>
            <input type="text" name="mob" id="mob" required /><br />
            <!-- <select name="au" id="au">
              <option value="User">User</option>
              <option value="Admin">Admin</option>
            </select><br /><br /> -->
            <button name="submit">SUBMIT</button>
            <a href="login.php">login</a>
          </form>
        </center>
      </div>
    </div>
  </body>
</html>

<?php

include('config.php');
    if (isset($_POST['submit'])) {
        // Sanitize inputs to prevent SQL injection
        $uname = mysqli_real_escape_string($conn, $_POST["uname"]);
        $email = mysqli_real_escape_string($conn, $_POST["email"]);
        $pass = mysqli_real_escape_string($conn, $_POST["pass"]);
        $mob = mysqli_real_escape_string($conn, $_POST["mob"]);
        $type=mysqli_real_escape_string($conn,$_POST["au"]);


        // Insert into database with prepared statements
        $stmt = $conn->prepare("INSERT INTO cons1 (name, email, pass, mobile,type) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $uname, $email, $pass, $mob,$type);

        if ($stmt->execute())
        {
            // echo "Record inserted successfully";
            header("Location:login.php");
        }
        else
        {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    }
?>
