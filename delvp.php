<?php 
    include "connectDB.php";
    $id=$_GET["id"];
    $sql="delete from vipham where id='$id'";
    $result=$con->query($sql);
    $con->close();
    include_once "vipham.php";
?>