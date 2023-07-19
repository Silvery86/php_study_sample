<?php
require("DungChung.php");
$conn = KetnoiCSDL();
$sql = "SELECT id,hoten,dienthoai FROM tbnhanvien";
$pdo_stm = $conn->query($sql);//thực hiện lệnh sql trả về PDOStatement
if($pdo_stm==NULL)
	die("LỖI SQL");
//lấy mảng chứa các dòng và cột từ kết quả SELECT
$rows  = $pdo_stm->fetchAll(PDO::FETCH_ASSOC);

$JSonString = json_encode($rows,JSON_UNESCAPED_UNICODE);
echo $JSonString;
?>