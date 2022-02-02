<?php 
include("header.php");

$selectQuery = "SELECT * from students";
$selection = $db->select($selectQuery);

if($selection->num_rows > 0){
    $allData = $selection->fetch_all(MYSQLI_ASSOC);
    echo json_encode($allData , JSON_PRETTY_PRINT);
}else{
    echo json_encode(array("Messege"=> "Data can not select", "Status"=> false), JSON_PRETTY_PRINT);
}

?>