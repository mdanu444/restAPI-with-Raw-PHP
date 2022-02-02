<?php 
include("header.php");
$request = json_decode(file_get_contents("php://input"), true);
$requestedID = $request["ssearch"];
$selectQuery = "SELECT * from students where name like '%$requestedID%'";
$selection = $db->select($selectQuery);

if($selection->num_rows > 0){
    $allData = $selection->fetch_all(MYSQLI_ASSOC);
    echo json_encode($allData , JSON_PRETTY_PRINT);
}else{
    echo json_encode(array("Messege"=> "Data can not select", "Status"=> false), JSON_PRETTY_PRINT);
}
?>