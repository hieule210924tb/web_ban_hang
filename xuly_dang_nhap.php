<?php 
require './connect.php';
session_start();

$ten_dang_nhap = $_POST['ten_dang_nhap'];
$password = $_POST['password'];

// Kiểm tra thông tin người dùng trong database
$sql = "SELECT name FROM users WHERE name = ? AND password = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $ten_dang_nhap, $password);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Đăng nhập thành công, lưu thông tin vào session
    $_SESSION['ten_dang_nhap'] = $ten_dang_nhap;
    header('location: trang_chu.php'); // Quay lại trang chủ
    exit();
} else {
    echo 'Đăng nhập không thành công. Xin mời thử lại <a href="./dang_nhap.php">Đăng nhập</a>';
}
?>
