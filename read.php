<?php
include 'conexao.php';

$result = $conn->query("SELECT * FROM herois");

echo "<a href='index.html'>Cadastrar novo herói</a><br><br>";
echo "<table border='1'>
<tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Nível</th>
    <th>Tipo</th>
    <th>Data Poder</th>
    <th>Local</th>
    <th>Termos</th>
    <th>Ações</th>
</tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['nome']}</td>
        <td>{$row['nivel']}</td>
        <td>{$row['tipo']}</td>
        <td>{$row['data_poder']}</td>
        <td>{$row['local']}</td>
        <td>" . ($row['aceitou_termos'] ? "Sim" : "Não") . "</td>
        <td>
            <a href='update.php?id={$row['id']}'>Editar</a> |
            <a href='delete.php?id={$row['id']}'>Excluir</a>
        </td>
    </tr>";
}
echo "</table>";
?>