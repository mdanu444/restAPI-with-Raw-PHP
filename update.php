<?php 
include("header.php");
$request = json_decode(file_get_contents("php://input"), true);
$id = $request["sid"];
$name = $request["sname"];
$city = $request["scity"];
$age = $request["sage"];

$updateQuery = "UPDATE students set name = '$name', city = '$city', age = $age  where id = $id";

if($db->update($updateQuery)){
    echo json_encode(array("Messege"=> "Data Updated", "Status"=> true), JSON_PRETTY_PRINT);
}else{
    echo json_encode(array("Messege"=> "Data can not select", "Status"=> false), JSON_PRETTY_PRINT);
}
?>