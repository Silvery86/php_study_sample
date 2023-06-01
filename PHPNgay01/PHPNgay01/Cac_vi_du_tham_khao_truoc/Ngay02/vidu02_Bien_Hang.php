<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Biến và Hằng</title>
</head>

<body>
<h1>Biến và Hằng</h1>
<?php
define("Max",5);
define("Monhoc", "PHP");
define("host","http://localhost:81");
//sử dụng hằng
echo "<p> vòng lặp từ 1 đến " . Max . "</p>";
for($i=1; $i<=Max; $i++)
{
	echo "<p> lần lập thứ $i, môn học: " . Monhoc . "</p>";
}
?>
<h1> Giá trị của Hằng Max: <?=Max?> </h1>
<a href="<?=host?>/T2104E/Ngay02/Vidu01_Kiemtra_bien.php"> Ví dụ 01</a>
</body>
</html>