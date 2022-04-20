<?php
     include "connectDB.php";  
    $id=$_GET["id"];                    
    $ten_hs=$_POST["ten_hs"];
    $ten_lop=$_POST["ten_lop"];
    $ten_vp=$_POST["_tenvp"];
    $ngay_vp=$_POST["ngay_vp"];
    $id_vp=array();
    $id_hs;

    $sql="select id_hs from hs where ten='$ten_hs'";
    $result=$con->query($sql);
    $row = $result -> fetch_row();
    $id_hs=$row[0];

    $tenvipham=array();
    if(isset($_POST['_tenvp'])){
        foreach($_POST['_tenvp'] as $key){
            array_push($tenvipham,$key);
        }
    }
    $id_vp=array();
    for($i=0;$i<count($tenvipham);$i++){
        $sql="select id_vp from vp where ten_vp='$tenvipham[$i]'";
        $result=$con->query($sql);
        $row1 = $result -> fetch_row();
        array_push($id_vp,$row1[0]);
    }
    for($i=0;$i<count($tenvipham);$i++){
        //$sql="update vipham set id_vp='$id_vp[$i]',id_hs='$id_hs',id_lop='$ten_lop',ngayvp='$ngay_vp' where id='$id' ";
        $sql="insert into vipham(id_vp,id_hs,id_lop,ngayvp) values ('$id_vp[$i]','$id_hs','$ten_lop','$ngay_vp')";
        $result=$con->query($sql);
    }
    $sql="delete from vipham where id='$id'";
    $result=$con->query($sql);
    $con->close();
    include_once "vipham.php";
?>