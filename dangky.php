<!DOCTYPE html>
<html>
    <head>
        <title>Trang chủ</title>
        <link rel="stylesheet" href="./CSS/dangnhap-dangky.css">
    </head>
    <body>
        <div class="A">
            <div class="B">
                <div class="C"></div>
                <div class="C"><b>HỆ THỐNG QUẢN LÝ HỌC SINH</b></div>
            </div>
            <div class="aa"><marquee scrollamount="5"; scrolldelay="120";>Website hỗ trợ quản lý học sinh|Niên luận cơ sở ngành khoa học máy tính</marquee></div>
            <div class="B">
                <div class="fom">
                    <h1>ĐĂNG KÝ</h1>
                        <form action="xuly_dangky.php" method="POST">
                                <table>
                                    <tr>
                                        <td><h4>Tài khoản:</h4></td>
                                        <td><input type="text" name="username" style='height:30px'></td>
                                    </tr>
                                    <tr>
                                        <td><h4>Mật khẩu:<h4></td>
                                        <td><input type="password" name="password" style='height:30px'></td>
                                    </tr>
                                    <tr>
                                        <td><h4>Mật khẩu lập lại:<h4></td>
                                        <td><input type="password" name="repassword" style='height:30px'></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <button type="submit" name="submit">Đăng ký</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan=2>
                                            <a href="dangnhap.php">Quay lại đăng nhập</a>
                                        </td>
                                    </tr>
                                </table>
                        </form>
                </div>
            </div>
        </div>
        

    </body>
</html>