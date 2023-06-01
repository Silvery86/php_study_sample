<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ví dụ 2</title>
</head>
<body>
    <h2> sử dụng echo trong các điều khiển</h2>
    <?php
        for($i=1;$i<=3;$i++)
        {
            echo "<h4>Demo vòng lặp</h4>";
            echo "<h3 style=\"color:red\">Dòng thứ $i</h3>";
        }
    ?>
    <h2>Trộn mã html,css,js với các thẻ điều khiển php</h2>
    <?php
        for($i=1; $i<=3;$i++)
        {
    ?>
        <h4 style="background: yellow;">Demo vòng lặp</h4>
        <h3 style="color:blue">Vòng lặp thứ <?=$i?> </h3>
    <?php
        }
    ?>
</body>
</html>