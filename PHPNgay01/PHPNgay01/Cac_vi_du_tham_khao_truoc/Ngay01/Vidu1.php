<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ví dụ 1</title>
</head>
<body>
    <?php
    $hoten = "Nguyễn Văn Nam";
    $tuoi = 20;
    //sử dụng dấu . để cộng chuỗi
    echo "<h3>Họ tên: " . $hoten . ", Tuổi:  " . $tuoi . "</h3>";
    //php cho phép đặt thẳng biến vào trong chuỗi
    echo "<h3>Họ tên: $hoten , Tuổi: $tuoi </h3>";
    //để hiển thị dấu $ lên màn hình thì sử dụng \$
    echo "<p>\$abc</p>";
    ?>
</body>
</html>