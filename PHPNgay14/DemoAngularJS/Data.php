<?php
//header("Content-Type: application/json; charset=UTF-8");    
//header ('Content-type: text/html; charset=utf-8');
/*$arr = array(array("name"=>"Tuấn", "age"=>20),
            array("name"=>"Hoạt", "age"=>21),
            array("name"=>"Tuấn", "age"=>18));*/
$arr = [["Name"=>"Tuấn", "RollNo"=>100,"Percentage"=>"80%"],
        ["Name"=>"Hoạt", "RollNo"=>101,"Percentage"=>"90%"] ,
        ["Name"=>"Vân", "RollNo"=>102,"Percentage"=>"100%"]
        ];
$json = json_encode($arr,JSON_UNESCAPED_UNICODE);
echo $json;
?>