<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $_POST['nome'] ?? '';
    $nivel = $_POST['nivel'] ?? 0;
    $tipo = $_POST['tipo'] ?? '';
    $data_poder = $_POST['data_poder'] ?? '';
    $local = $_POST['local'] ?? '';
    $aceitou_termos = isset($_POST['aceitou_termos']) ? 1 : 0;

    $sql = "INSERT INTO herois (nome, nivel, tipo, data_poder, local, aceitou_termos)
            VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sisssi", $nome, $nivel, $tipo, $data_poder, $local, $aceitou_termos);

    if ($stmt->execute()) {
        header('Location: read.php');
        exit;
    } else {
        echo "Erro ao cadastrar: " . $conn->error;
    }
}
?>