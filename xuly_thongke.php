<?php
    include "connectDB.php";
    $sql="select * from lop";
    $result=$con->query($sql);
    $arr=array();
    
    while($row=mysqli_fetch_assoc($result)){
        $lop=$row["id_lop"];
        
        $sql2="select * from vipham where id_lop='$lop'";
        $result2=$con->query($sql2);
        $sum_vp=$result2->num_rows;
        if($sum_vp==0){$tong_vp=0;}
        else {
            $sql3="select sum(diem) from ( (vp join vipham on vp.id_vp=vipham.id_vp)) where id_lop='$lop'";
            $result3=$con->query($sql3);
            $row_vp=$result3->fetch_row();
            $tong_vp=$row_vp[0];
        }
        $sql4="select * from diemthuong where id_lop='$lop'";
        $result4=$con->query($sql4);
        $sum_dt=$result4->num_rows;
        if($sum_dt==0){$tong_dt=0;}
        else{
            $sql5="select sum(so_diem) from ( (diem join diemthuong on diem.id_diem=diemthuong.id_dt)) where id_lop='$lop'";
            $result5=$con->query($sql5);
            $row_dt=$result5->fetch_row();
            $tong_dt=$row_dt[0];
        }
        $temp=array("lop"=>$lop,"sum_vp"=>$sum_vp,"tong_vp"=>$tong_vp,"sum_dt"=>$sum_dt,"tong_dt"=>$tong_dt,"tong_diem"=>($tong_dt+$tong_vp),"xep_hang"=>2);
       // print_r($temp);
        array_push($arr,$temp);

    }
    $a=array();
    for ($i=0;$i<count($arr);$i++){
        $a[$i]=$arr[$i]["tong_diem"];
    }
    sort($a);
    for ($i=0;$i<count($arr);$i++){
        for ($j=0;$j<count($arr);$j++){
            if($arr[$i]["tong_diem"]==$a[$j]) {
                $arr[$i]["xep_hang"]=count($arr)-$j;
            }
        }
    }
 //   print_r($a);
?>