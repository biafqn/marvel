<?php
include 'conexao.php';

$id = $_GET['id'] ?? 0;

$conn->query("DELETE FROM herois WHERE id=$id");

header("Location: read.php");
exit();
?>