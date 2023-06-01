<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ví dụ 3</title>
    <link rel="stylesheet" href="vidu3.css">
</head>
<body>
    <?php
    for($i=1; $i<=6; $i++)
    {
        if($i%2==1)//nếu i lẻ
        {
    ?>
          <div class="product bg1">
        <?php
        }else{   
        ?>
          <div class="product bg2">
        <?php
        }//đóng else
        ?>
            <h3>Tên sản phẩm <?=$i?></h3>
            <img src="product.png">
            <h3>Giá: 200.000 VNĐ</h3>
        </div>
    <?php
    }
    ?>
</body>
</html>