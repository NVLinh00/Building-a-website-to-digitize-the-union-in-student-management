<?php
    include "connectDB.php";
    $id=$_GET["id"];                    
    $_id_hs=$_POST["_id_hs"];
    $_ten=$_POST["_ten"];
    $_ngaysinh=$_POST["_ngaysinh"];
    $_gioitinh=$_POST["_gioitinh"];
    $_malop=$_POST["_malop"];
    $sql="update hs set id_hs='$_id_hs',ten='$_ten',ngaysinh='$_ngaysinh',gioitinh='$_gioitinh',id_lop='$_malop' where id_hs='$id' ";
    $result=$con->query($sql);
    $con->close();
    include_once "ds.php";
?>
s