<?php
     include "connectDB.php";
     $lop=$_GET["lop"];
     if($lop=="all"){
         $sql ="select * from hs";
     }
     else{
        $sql ="select * from hs where id_lop='$lop'";
     }
    $arr=array();
    $result=$con->query($sql);
    while($row=mysqli_fetch_assoc($result)){
        $temp=array("id"=>$row["id_hs"],"ten"=>$row["ten"],"ngaysinh"=>$row["ngaysinh"],"gioitinh"=>$row["gioitinh"],"id_lop"=>$row["id_lop"]);
        array_push($arr,$temp);
    }
     $con->close();
?>
                        <table id="table">
                            <tr>
                                <th>MSHS</th>
                                <th>Tên</th>
                                <th>Ngày sinh</th>
                                <th>Giới tính</th>
                                <th>Lớp</th>
                                <th>Thao tác<button type="submit" name="s_submit"><a href='nhaplieu.php'>Thêm</a></button></th>
                            </tr>
                            <?php
                                for($i=0;$i<count($arr);$i++){
                                    $line="<tr>
                                            <td>".$arr[$i]["id"]."</td>
                                            <td>".$arr[$i]["ten"]."</td>
                                            <td>".$arr[$i]["ngaysinh"]."</td>
                                            <td>".$arr[$i]["gioitinh"]."</td>
                                            <td>".$arr[$i]["id_lop"]."</td>
                                            <td><button type='submit' name='ss_submit'><a href='sua_ds.php?id=".$arr[$i]["id"]."'>Sửa</a></button>
                                            <button type='submit' name='s_submit'><a href='del.php?id=".$arr[$i]["id"]."'>Xóa</a></button></td>
                                             </tr>";
                                    echo($line);
                                    } 
                            ?>
                        </table>