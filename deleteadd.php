<?php
    require("config.php");
    if(isset($_GET['id'])){
        $delete_id = $_GET['id'];
        $delete_qry=mysqli_query($conn,"Delete from user where id=$delete_id") or die("Query Failed");
        if($delete_qry){
            header("Location:admin.php");
        }else{
            echo "record not deleted";
          
        }
    }
?>