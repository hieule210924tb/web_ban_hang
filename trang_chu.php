<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php  require "./connect.php"; ?>
    <div class="navbar">
        <ul class="menu">
            <li><a href="#">Danh mục sản phẩm</a>
                <?php
                $sql = "SELECT * FROM `danhmuc_sp` " ;
                $result= $conn->query($sql);
                if($result-> num_rows>0){
                for($i=0;$i<$result ->num_rows;$i++){
                $row = $result->fetch_assoc();
                echo "<p class='name_sp'>"
                        .$row['name'].
                    "</p>" ;
                }
                }
            ?>
            </li>
            <li><a href="#">Sản phẩm</a>
            <?php
                $sql = "SELECT name, price, image FROM `san_pham` ";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                 for($i=0;$i<$result ->num_rows;$i++) {
                    $row = $result->fetch_assoc();
                    echo "<div class='container'>";
                    echo "<div class='product'>";
                    echo "<div class='product-name'>"  .$row['name']. "</div>";
                    echo "<div class='produce-img'><img src='./img/". $row['image'] . "'></div>";
                    echo "<div class='product-price'>" .'Giá: ' .$row['price'] . "</div>";
                    echo "</div>";
                    echo "</div";
                }
                }
                ?>

        </li>
            <li><a href="#">Quản lý sản phẩm</a></li>
    </div>
</body>
</html>