<?php
include '../config/config.php';

$user_id = 1;   

$sql = "SELECT * FROM gastos WHERE user_id = $user_id ORDER BY data DESC";
$result = $conn->query($sql);

$gastos = [];

while ($row = $result->fetch_assoc()){
    $gastos[] = $row;
}

echo json_encode($gastos);