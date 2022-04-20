 <?php 
    session_start();
    if( !isset($_SESSION["username"])){
        $dangnhap='Đăng nhập';
        $dangxuat='Bạn chưa đăng nhập';
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
        <link rel="stylesheet" href="./CSS/index.css">
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
            </div>
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
                <img src="./css/anh/khu2-khoa.jpg" alt="" width="1000px" height="600px">
            </div>
        </div>
    </div>
    </body>
</html>