<?php 
include("header.php");
$request = json_decode(file_get_contents("php://input"), true);
$requestedID = $request["sid"];
$selectQuery = "DELETE from students where id = $requestedID";

if($db->delete($selectQuery)){
    echo json_encode(array("Messege"=> "Data Deleted.", "Status"=> true), JSON_PRETTY_PRINT);
}else{
    echo json_encode(array("Messege"=> "Data can not select", "Status"=> false), JSON_PRETTY_PRINT);
}
?>