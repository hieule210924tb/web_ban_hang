<?php
session_start(); // Bắt đầu session để kiểm tra trạng thái đăng nhập

// Kiểm tra session đăng nhập
$ten_dang_nhap = isset($_SESSION['ten_dang_nhap']) ? $_SESSION['ten_dang_nhap'] : null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
</head>
<body>
<header>
    <div class="logo">Logo</div>
    <div class="search">
        <input type="text" placeholder="Tìm kiếm ...">
        <i class="fa-solid fa-magnifying-glass"></i>
    </div>
    <div class="form-login">
        <i class="fa-regular fa-user"></i>
        <div class="login">
            <?php
               if($ten_dang_nhap){
                 echo "Xin chào " .$ten_dang_nhap . "<a href='./dang_xuat.php'>Đăng xuất</a>" ;
               }else{
                echo "<a href='./dang_ki_tai_khoan.php'>Đăng kí</a>" . "/". "<a href='dang_nhap.php'>Đăng nhập</a>";
               }
            
            ?>
        </div>
    </div>
</header>
<div class="container">
    <div class="container_left">
        <h3>DANH MỤC SẢN PHẨM</h3>
        <ul class="left-list">
            <li class="left-item"><a href="#">Điện thoại</a></li>
            <li class="left-item"><a href="#">Laptop</a></li>
            <li class="left-item"><a href="#">Phụ kiện</a></li>
        </ul>
    </div>
    <div class="container_right">
         <ul class="right-list">
            <li class="right-item"><a href="#">GIỚI THIỆU</a></li>
            <li class="right-item"><a href="#">TRANG CHỦ</a></li>
            <li class="right-item"><a href="#">TIN TỨC</a></li>
         </ul>
    </div>
</div>
</body>
</html>
