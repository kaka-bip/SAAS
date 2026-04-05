<?php
include '../config/config.php';

$data = json_decode(file_get_contents("php://input"), true);

$valor = $data['valor'];
$categoria = $data['categoria'];
$descricao = $data['descricao'] ?? '';
$user_id = 1;

$sql = "INSERT INTO gastos (valor, categoria, descricao, user_id)
VALUES ('$valor', '$categoria', '$descricao', '$user_id')";

if ($conn->query($sql)) {
    echo json_encode(["status" => "ok"]);
} else {
    echo json_encode(["status" => "erro", "msg" => $conn->error]);
}