<?php
function KetnoiCSDL()
{
	$conn = NULL;
	try
	{
		$conn = new PDO("mysql:host=localhost;dbname=csdl_ketnoi2bang","root","");
		$conn->exec("SET NAMES UTF8");//Thiết lập làm việc với unicode
	}
	catch(PDOException $ex)
	{
		die("LỖI KẾT NỐI CSDL");
	}
	return $conn;
}
?>