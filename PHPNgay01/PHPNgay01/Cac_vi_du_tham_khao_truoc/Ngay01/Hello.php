<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ví dụ PHP</title>
    <style type="text/css">
        p {color:blue; text-align: center;}
    </style>
</head>
<body>
    <script>
        window.alert("Hello javascript");
    </script>
    <h1>Làm quen PHP</h1>
    <?php
    echo "<h2 style=\"color:red\">Hello from PHP</h2>\n";
    for($i=1; $i<=5; $i++)
    {
        echo "<p>Dòng thứ " . $i . "</p>\n";
    }
    ?>
</body>
</html>