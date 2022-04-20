<?php
    include "connectDB.php";
    $lop=$_GET["lop"];
    $vp=$_GET["vp"];
    if($lop=="all" && $vp=="all"){
        $sql="select * from vipham";
    }
    if($lop=="all" && $vp!="all"){
        $sql="select * from vipham where id_vp=(select id_vp from vp where ten_vp='$vp')";
    }
    if($lop!="all" && $vp=="all"){
        $sql="select * from vipham where id_lop='$lop'";
    }
    if($lop!="all" && $vp!="all"){
        $sql="select * from vipham where id_lop='$lop' and id_vp=(select id_vp from vp where ten_vp='$vp')";
    }
    $result=$con->query($sql);
    $arr=array();
    while($row=mysqli_fetch_assoc($result)){
        $id= $row['id'];
        $vp= $row['id_vp'];
        $hs= $row['id_hs'];
        $lop= $row['id_lop'];
        $so_vp=$row['id_vp'];

        $sql_vp="select ten_vp from vp where id_vp='$vp'";
        $result_vp=$con->query($sql_vp);
        $row_vp= $result_vp->fetch_row();
        $vp=$row_vp[0];

        $sql_vp1="select diem from vp where id_vp='$so_vp'";
        $result_vp1=$con->query($sql_vp1);
        $row_vp1= $result_vp1->fetch_row();
        $so_vp=$row_vp1[0];
        
        $sql_hs="select ten from hs where id_hs='$hs'";
        $result_hs=$con->query($sql_hs);
        $row_hs= $result_hs->fetch_row();
        $hs=$row_hs[0];

        $temp=array("id"=>$id,"hs"=>$hs,"lop"=>$lop,"vp"=>$vp,"ngay"=>$row["ngayvp"],"diem"=>$so_vp);
        array_push($arr,$temp);
    }
 
?>
                        <table id="table">
                            <tr>
                                <th>Tên</th>
                                <th>Lớp</th>
                                <th>Tên Vi Phạm</th>
                                <th>Ngày vi phạm</th>
                                <th>Điểm</th>
                            </tr>
                            <?php
                                for($i=0;$i<count($arr);$i++){
                                    $line="<tr>
                                            <td>".$arr[$i]["hs"]."</td>
                                            <td>".$arr[$i]["lop"]."</td>
                                            <td>".$arr[$i]["vp"]."</td>
                                            <td>".$arr[$i]["ngay"]."</td>
                                            <td>".$arr[$i]["diem"]."</td>
                                            </tr>";
                                    echo($line);
                                }   
                            ?>
                        </table>