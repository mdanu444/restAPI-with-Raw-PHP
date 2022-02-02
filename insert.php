<?php 
include("header.php");
$requestedJson = file_get_contents("php://input");
$requestedArray = json_decode($requestedJson, true);

$name = $requestedArray["sname"];
$age = $requestedArray["sage"];
$city = $requestedArray["scity"];

$insertQuery = "INSERT INTO students (name, city, age)values ('$name', '$city', $age)";

if($insert = $db->insert($insertQuery)){
    echo json_encode(array("Messege"=> "Data Successfully Inserted", "Status"=> true), JSON_PRETTY_PRINT);
}else{
    echo json_encode(array("Messege"=> "Data can not insert", "Status"=> false), JSON_PRETTY_PRINT);
}
?>