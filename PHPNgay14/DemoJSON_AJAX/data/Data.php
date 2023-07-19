<?php
$arr = ["isbn"=>112233,
"title"=>"Lập trình Java",
"category"=>"Công nghệ thông tin",
"author"=>"Aptech",
"page"=>320,
"price"=>9.56];   
    
$json = json_encode($arr,JSON_UNESCAPED_UNICODE);
echo $json;
?>