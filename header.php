<?php 
header("Content-Type: application/json");
header("Access-Allow-Control-Origin: *");
header("Access-Allow-Control-Methods: POST, GET, PUT, DELETE");
header("X-Requested-With: XMLHttpRequest");
header("Access-Allow-Control-Headers: Content-Type, Access-Allow-Control-Methods");
require("Database.php");
$db = new Database();
?>