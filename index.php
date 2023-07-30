<?php
header("Access-Control-Allow-Origin: *");
$host = "db4free.net";
$username = "ashmit";
$password = "ASmit123";
$database = "dine_and_ash";

$conn = new mysqli($host,$username,$password,$database);

if($conn->connect_error){
    die("Connection Success");
}

$sql = "select * from menu";
$result = $conn->query($sql);

$data = array();
while ($row = $result->fetch_assoc()){
    $data[] = $row; 
}

$conn->close();

header('Content-Type: application/json');
echo json_encode($data);

?>