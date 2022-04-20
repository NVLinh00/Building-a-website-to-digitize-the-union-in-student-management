<?php
    include "connectDB.php";
    if(isset($_POST["submit"]) && $_POST["username"] !='' && $_POST["password"] !='' && $_POST["repassword"]){
        $username =$_POST["username"];
        $password =$_POST["password"];
        $repassword =$_POST["repassword"];
        if( $password != $repassword){
            header("location:dangky.php");
        }
        $password=md5($password);
        $sql = "SELECT * from dangnhap where name='$username' ";
        $old =mysqli_query($con,$sql);
        if (mysqli_num_rows($old) > 0 ){
            header("location:dangky.php");
        }
        $sql="INSERT INTO dangnhap(name,password) VALUES ('$username','$password') ";
        mysqli_query($con,$sql);
        header("location:dangky.php");
        echo "Đăng ký thành công";
    }
    else {
        header("location:dangky.php");
    }
?>