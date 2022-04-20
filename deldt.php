<?php 
    include "connectDB.php";
    $id=$_GET["id"];
    $sql="delete from diemthuong where id='$id'";
    $result=$con->query($sql);
    $con->close();
    include_once "diemthuong.php";
?>