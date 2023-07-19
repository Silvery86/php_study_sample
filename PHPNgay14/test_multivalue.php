<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test multi-value</title>
</head>
<body>
    <form action="">
        Chọn:
        <br>Mục 1 <input type="checkbox" name="check[]" value="value1">
        <br>Mục 2 <input type="checkbox" name="check[]" value="value2">
        <br>Mục 3 <input type="checkbox" name="check[]" value="value3">
        <br><input type="submit" name="b1" value="Gửi đi">
    </form>
    <?php
    if(isset($_REQUEST["b1"]))
    {
        echo "REQUEST:<BR>";
        var_dump($_REQUEST);
        if(isset($_REQUEST["check"])==false)
            echo "<p>chưa chọn mục nào";
        else{
            $values = $_REQUEST["check"];//check sẽ là dạng array
            echo "<br>VALUES:<BR>";
            var_dump($values);
            $list = implode("," , $values);
            echo "<p>list: $list </p>";
            $sql = "SELECT * FROM tbSanpham WHERE catID IN ($list)";
            echo "<p>$sql</p>";
        }
       
    }
    ?>
</body>
</html>