<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> admin login</title>
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
      <h1><b>log in Form</b></h1>
      <br />
      <label for="uname">User Name</label>
      <input type="text" name="uname" id="uname" required /><br /><br />
      <label for="pass">Password</label>
      <input type="password" name="pass" id="pass" required /><br /><br />
      <button name="submit">LOGIN</button><br><br>
      <center>
      <p>Don't have an Account..? <a href="adminreg.php">Registration</a></p>
      </center>
    </form>
  </body>
</html>

<?php
    include('config.php');
  if(isset($_POST['submit']))
  {
    $uname = $_POST["uname"];
    $pass =  $_POST["pass"];
    $sql="select * from user where name='$uname' and pass='$pass'";
    $r=mysqli_query($conn,$sql);
    if(mysqli_num_rows($r)==1)
    {
      $record=mysqli_fetch_assoc(($r));
     
      session_start();

      $_SESSION['uname'] = $uname;
      if($record['type'] == 'admin'){
            header('location:admin.php');
      }else{
            header('location:index.php');
      }
}else{
      echo "Invalid username or password";
}

    }
     
?>