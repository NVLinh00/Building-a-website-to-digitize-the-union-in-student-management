<?php
    include "connectDB.php";
    $id=$_GET["id"];                     
    $ten_hs=$_POST["ten_hs"];
    $ten_lop=$_POST["ten_lop"];
    $ten_dt=$_POST["ten_dt"];
    $ngay_dt=$_POST["ngay_dt"];
  
    $id_dt=array();
    $id_hs;

    $sql="select id_hs from hs where ten='$ten_hs'";
    $result=$con->query($sql);
    $row = $result -> fetch_row();
    $id_hs=$row[0];

    $tendt=array();
    if(isset($_POST['ten_dt'])){
        foreach($_POST['ten_dt'] as $key){
            array_push($tendt,$key);
        }
    }
    $id_dt=array();
    for($i=0;$i<count($tendt);$i++){
        $sql="select id_diem from diem where ten_diem='$tendt[$i]'";
        $result=$con->query($sql);
        $row1 = $result -> fetch_row();
        array_push($id_dt,$row1[0]);
    }
    for($i=0;$i<count($tendt);$i++){
       // $sql="insert into diemthuong set id_dt='$id_dt[$i]',id_hs='$id_hs',id_lop='$ten_lop',ngay='$ngay_dt' where id='$id' ";
        $sql="insert into diemthuong(id_dt,id_hs,id_lop,ngay) values ('$id_dt[$i]','$id_hs','$ten_lop','$ngay_dt')";
        $result=$con->query($sql);
    }
    ///
    $sql="delete from diemthuong where id='$id'";
    $result=$con->query($sql);
    ///
    $con->close();
    include_once "diemthuong.php";
?>