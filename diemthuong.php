<?php 
    session_start();
    if( !isset($_SESSION["username"])){
        header("location:dangnhap.php");
    }
    else {
        $dangnhap=$_SESSION["username"];
        $dangxuat='Đăng xuất';
    }
?> 
<?php 
    include "connectDB.php";
    $sql="select * from hs";
    $result=$con->query($sql);
    $hs=$result->num_rows;
    $sql1="select * from lop";
    $result1=$con->query($sql1);
    $lop=$result1->num_rows;
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Trang chủ</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="./CSS/style.css">
        <script language="javascript">
            setTimeout("simpleTest()",1);
            function simpleTest() {

                var x=document.getElementById("select-box-1");
                var y=document.getElementById("select-box-2");
                var str1=x.options[x.selectedIndex].value;
                var str2=y.options[y.selectedIndex].value;
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("F1").innerHTML = this.responseText;
                        }
                    };
                var a= "<?php echo($dangnhap)?>";
                if(a=='admin'){
                    xmlhttp.open("GET","upddt.php?lop="+str1+"&dt="+str2,true);
                }
                else{
                    xmlhttp.open("GET","nguoidung_getdt.php?lop="+str1+"&dt="+str2,true);
                }
                xmlhttp.send();    
                }  
        </script>
    </head>
    <body>
        <div class="A">
            <div class="B">
                <div class="C"><b>HỆ THỐNG QUẢN LÝ THI ĐUA</b></div>
                <div class="C"><a href="./dangnhap.php"><?php echo($dangnhap); ?></a> <a href="./dangxuat.php">(<?php echo($dangxuat); ?>)</a></div>
            </div>
            <div class="aa"><marquee scrollamount="5"; scrolldelay="120";>Website hỗ trợ quản lý học sinh|Niên luận cơ sở ngành khoa học máy tính</marquee></div>
            <div><br></div>
            <div class="D">
                <div class="menu">
                    <ul>
                        <li><a href="./index.php">TRANG CHỦ</a></li>
                    </ul>
                </div>
                <div class="center">
                    <div class="left">
                        <div class="left1">
                            <div class="left_1">
                                DANH MỤC QUẢN LÝ
                            </div>
                            <div class="left_2">
                                <ul>
                                    <li><img src="./css/anh/course.gif" /><a href="ds.php">Quản lý học sinh</a></li>
                                    <li><img src="./css/anh/course.gif" /><a href="diemthuong.php">Quản lý điểm tốt</a></li>
                                    <li><img src="./css/anh/course.gif" /><a href="vipham.php">Quản lý điểm xấu</a></li>
                                    <li><img src="./css/anh/course.gif" /><a href="danhmuc.php">Danh mục điểm</a></li>
                                    <li><img src="./css/anh/course.gif" /><a href="thongke.php">Thống kê</a></li>
                                </ul>
                            </div>
                        </div>
                        <?php 
                            if($dangnhap=='admin'){
                                echo ("<div class='left1'>
                                    <div class='left_1'>
                                        DANH MỤC NHẬP LIỆU
                                    </div>
                                    <div class='left_2'>
                                        <ul>
                                            <li><img src='./css/anh/course.gif' /><a href='nhaplieu.php'>Nhập liệu học sinh</a></li>
                                            <li><img src='./css/anh/course.gif' /><a href='nhapdt.php'>Nhập liệu điểm cộng</a></li>
                                            <li><img src='./css/anh/course.gif' /><a href='nhapvp.php'>Nhập liệu điểm trừ</a></li>
                                        </ul>
                                    </div>
                                </div>");
                            }
                            ?>
                        <div class="left1">
                            <div class="left_1">
                                THỐNG KÊ
                            </div>
                            <div class="left_2">
                                <ul>
                                    <li><img src="./css/anh/course.gif" />Số lớp :<?php echo ($lop);?></li>
                                    <li><img src="./css/anh/course.gif" />Tổng số học sinh :<?php echo ($hs);?></li>
                                    <li><img src="./css/anh/course.gif" />Tổng số giáo viên: --</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="cent">
                        <div class="ds">
                        THỐNG KÊ ĐIỂM THƯỞNG 
                        <select id="select-box-1" name='lop' onchange="simpleTest()">
                            <option value="all">Tất cả</option>
                            <option value="10A1">10A1</option>
                            <option value="10A2">10A2</option>
                            <option value="11A1">11A1</option>
                            <option value="11A2">11A2</option>
                            <option value="12A1">12A1</option>
                            <option value="12A2">12A2</option>
                        </select>
                        <select id="select-box-2" name='dt' onchange="simpleTest()">
                            <option value="all">Tất cả</option>
                            <option value="NTVT">NTVT</option>
                            <option value="Vệ Sinh">Vệ Sinh</option>
                            <option value="KT Miệng 7-8đ">KT Miệng 7-8đ</option>
                            <option value="	KT Miệng 9-10đ">KT Miệng 9-10đ</option>
                        </select>
                    </div>
                    <div id="F1" class="F"> 
                            <!-- dl -->
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>