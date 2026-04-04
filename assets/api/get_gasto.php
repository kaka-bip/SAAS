<?php
header('Content-Type: application/json; charset=utf-8');
require_once __DIR__ . '/../config/config.php';

$user_id = 1; // substituir por $_SESSION['user_id'] quando houver login

$gastos = [];
$sql = 'SELECT id, user_id, data, descricao, categoria, valor FROM gastos WHERE user_id = ? ORDER BY data DESC, id DESC LIMIT 200';
$stmt = $con->prepare($sql);

if (!$stmt) {
    http_response_code(500);
    echo json_encode(['error' => 'Erro ao preparar consulta']);
    exit;
}

$stmt->bind_param('i', $user_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result) {
    while ($row = $result->fetch_assoc()) {
        $gastos[] = $row;
    }
}

$stmt->close();
echo json_encode($gastos);
