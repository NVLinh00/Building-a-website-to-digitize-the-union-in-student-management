<?php 
    include "connectDB.php";
    $_id_hs=$_GET["id"];
    $sql="delete from hs where id_hs='$_id_hs'";
    $result=$con->query($sql);
    $sql="delete from diemthuong where id_hs='$_id_hs'";
    $result=$con->query($sql);
    $sql="delete from vipham where id_hs='$_id_hs'";
    $result=$con->query($sql);
    $con->close();
    include_once "ds.php";
?>