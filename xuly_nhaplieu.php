<?php
    include "connectDB.php";                    
    $_id_hs=$_POST["_id_hs"];
    $_ten=$_POST["_ten"];
    $_ngaysinh=$_POST["_ngaysinh"];
    $_gioitinh=$_POST["_gioitinh"];
    $_malop=$_POST["_malop"];
    $sql="insert into hs values ('$_id_hs','$_ten','$_ngaysinh','$_gioitinh','$_malop')";
    $result=$con->query($sql);
    $con->close();
    include_once "nhaplieu.php";
?>
