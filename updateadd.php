<?php
    require("config.php");

    if(isset($_POST['update'])){
        $id = $_POST['id']; // Get the hidden id field
        $name = $_POST['name'];
        $password = $_POST['password'];
        $type = $_POST['type'];


        // Update query
        $update = mysqli_query($conn, "UPDATE user SET name='$name', pass='$password', type='$type' WHERE id=$id");
        
        if($update){
            header("Location: admin.php"); 
            exit();
        } else {
            echo "Error updating record";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
   body {
    overflow-x: hidden;
    background-color: #f4f4f4; 
    font-family: 'Arial', sans-serif; 
   }
.formreg {
    height: 550px;
    width: 530px;
    border: 2px solid #ccc; 
    margin: 50px auto; 
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); 
    border-radius: 20px;
    background-color: #ffffff; 
    padding: 20px; 
}

.form-label {
    margin-left: 20px;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    font-size: 18px; 
    color: #333; 
}

.form-control {
    width: calc(100% - 40px); 
    margin: 10px 20px;
    border-radius: 15px;
    height: 45px;
    border: 2px solid #ccc; 
    padding: 10px; 
    transition: border-color 0.3s; 
}

.form-control:focus {
    border-color: #4ca1af; 
    outline: none; 
}

.btnreg {
    margin: 20px auto;
    height: 45px;
    width: 130px;
    font-size: 20px;
    color: #ffffff; 
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    border-radius: 8px;
    background-color: #feb900;
    border: none; 
    cursor: pointer; 
    margin-left:160px;
  
}



</style>

</head>
<body>

<div class="w3-container">
       <div class="row">
     
        <div class="col">
        <?php
            if(isset($_GET['id'])){
                $update_id = $_GET['id'];  // Get the id from URL
                $update_qry = mysqli_query($conn, "SELECT * FROM user WHERE id=$update_id");

                if(mysqli_num_rows($update_qry) > 0){
                    $fetch_qry = mysqli_fetch_assoc($update_qry);
        ?>

            <form  method="post" class="formreg">
                <h2 style="text-align: center;margin-top: 30px;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;"><b>Update Record</b></h2>
               
                <input type="hidden" name="id" value="<?php echo $fetch_qry['id']; ?>"> <!-- Hidden input for ID -->
                
                <label for="name"  class="form-label">Name:</label>
                <input type="text" id="name" name="name" class="form-control" value="<?php echo $fetch_qry['name']; ?>" placeholder="Enter Your Name" required><br>
        
                <label for="password"  class="form-label">Password:</label>
                <input type="password" id="password" name="password" class="form-control" value="<?php echo $fetch_qry['pass']; ?>" placeholder="Enter Your Password" required><br>
        
                <label for="type"  class="form-label">Type:</label>
                <input type="text" name="type" class="form-control" value="<?php echo $fetch_qry['type']; ?>" placeholder="Enter Your Type" required><br>

                <input type="submit" name="update" value="Update" class="btnreg">
            </form>
            
        <?php
                }
            }
        ?>
        </div>
       </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
   