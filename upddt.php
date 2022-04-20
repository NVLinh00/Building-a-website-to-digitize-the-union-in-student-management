<?php
    include "connectDB.php";
    $lop=$_GET["lop"];
    $dt=$_GET["dt"];
    if($lop=="all" && $dt=="all"){
        $sql="select * from diemthuong";
    }
    if($lop=="all" && $dt!="all"){
        $sql="select * from diemthuong where id_dt=(select id_diem from diem where ten_diem='$dt')";
    }
    if($lop!="all" && $dt=="all"){
        $sql="select * from diemthuong where id_lop='$lop'";
    }
    if($lop!="all" && $dt!="all"){
        $sql="select * from diemthuong where id_lop='$lop' and id_dt=(select id_diem from diem where ten_diem='$dt')";
    }
    $result=$con->query($sql);
    $arr=array();
    while($row=mysqli_fetch_assoc($result)){
        $id= $row['id'];
        $dt= $row['id_dt'];
        $hs= $row['id_hs'];
        $lop= $row['id_lop'];
        $so_dt= $row['id_dt'];

        $sql_dt="select ten_diem from diem where id_diem='$dt'";
        $result_dt=$con->query($sql_dt);
        $row_dt= $result_dt->fetch_row();
        $dt=$row_dt[0];

        $sql_so="select so_diem from diem where id_diem='$so_dt'";
        $result_so=$con->query($sql_so);
        $row_so= $result_so->fetch_row();
        $so_dt=$row_so[0];
        
        $sql_hs="select ten from hs where id_hs='$hs'";
        $result_hs=$con->query($sql_hs);
        $row_hs= $result_hs->fetch_row();
        $hs=$row_hs[0];

        $temp=array("id"=>$id,"hs"=>$hs,"lop"=>$lop,"dt"=>$dt,"ngay"=>$row["ngay"],"diem"=>$so_dt);
        array_push($arr,$temp);
    }
 
?>

                        <table id="table">
                            <tr>
                                <th>Tên</th>
                                <th>Lớp</th>
                                <th>Tên Điểm Thưởng</th>
                                <th>Ngày Nhận Điểm</th>
                                <th>Điểm</th>
                                <th>Thao tác <button type="submit" name="s_submit"><a href='nhapdt.php'>Thêm</a></button></th>
                            </tr>
                            <?php
                                for($i=0;$i<count($arr);$i++){
                                    $line="<tr>
                                            <td>".$arr[$i]["hs"]."</td>
                                            <td>".$arr[$i]["lop"]."</td>
                                            <td>".$arr[$i]["dt"]."</td>
                                            <td>".$arr[$i]["ngay"]."</td>
                                            <td> +".$arr[$i]["diem"]."</td>
                                            <td><button type='submit' name='ss_submit'><a href='sua_dt.php?id=".$arr[$i]["id"]."'>Sửa</a></button>
                                                <button type='submit' name='s_submit'><a href='deldt.php?id=".$arr[$i]["id"]."'>Xóa</a></button></td>
                                             </tr>";
                                    echo($line);
                                }
                            ?>
                        </table>