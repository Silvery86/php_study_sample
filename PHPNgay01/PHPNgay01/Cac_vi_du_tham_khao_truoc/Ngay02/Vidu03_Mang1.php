<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mảng theo chỉ số - indexed array</title>
</head>
<body>
    <h2>Ví dụ mảng truy cập theo chỉ số</h2>
    <?php
    //tạo mảng cách 1: sử dụng hàm array()
    $arr = array();//tạo mảng rỗng
    //tạo mảng 3 phần tử:"html", "css", "javascript"
    $a = array("html", "css", "javascript");
    $a[3] = "php";//thêm phần tử mới vào vị trí thứ 3
    //tạo mảng theo cú pháp sử dụng $bienmang = [danh sách các phần tử]
    $b = ["Hoa", "Tuấn", "Trang"]; 
    //số phần tử của mảng
    $n = count($a);//lấy số phần tử của mảng a
    echo "<h3>mảng a sử dụng biến chỉ số 0,1,2...:</h3>";
    //sử dụng vòng lặp thông thường
    for($i=0; $i<$n; $i++)
    {
        echo "<p> phần tử $i là: $a[$i]</p>";
    }
    //sử dụng foreach($bienmang as $giatri)
    echo "<h3>mảng b - sử dụng foreach:</h3>";
    foreach($b as $x)
    {
        echo "<p> $x </p>";
    }
    ?>
</body>
</html>