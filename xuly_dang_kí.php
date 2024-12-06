<?php 
      require './connect.php';
      $ten_tai_khoan = $_POST['name_login'];
      $password = $_POST['password'];
      $sql = "INSERT INTO `users`(`name`, `password`) VALUES ('$ten_tai_khoan ','$password')";
      $result = $conn->query($sql);
      if($result == true){
        header("location:dang_nhap.php");
      }else{
        echo 'Thêm tài khoản thất bại';
      }
    ?>