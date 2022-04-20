<?php
    session_start();
    include "connectDB.php";
    if (isset($_POST["submit"]) && $_POST["username"] !='' && $_POST["password"] !=''){
        $user=$_POST["username"];
        $pass=$_POST["password"];
        $pass= md5($pass);
        $sql = "SELECT * FROM dangnhap WHERE name='$user' AND password='$pass' ";
        $use = mysqli_query($con,$sql);
        if(mysqli_num_rows($use) >0){
            $_SESSION["username"]=$user;
            header("location:index.php");
        }
        else {
            header("location:dntb.php");
        }
    }
    else {
        header("location: dangnhap.php");
    }
?>