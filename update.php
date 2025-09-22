<?php
include 'conexao.php';

$id = $_GET['id'] ?? 0;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'] ?? '';
    $nivel = $_POST['nivel'] ?? 0;
    $tipo = $_POST['tipo'] ?? '';
    $data_poder = $_POST['data_poder'] ?? '';
    $local = $_POST['local'] ?? '';
    $aceitou_termos = isset($_POST['aceitou_termos']) ? 1 : 0;

    $sql = "UPDATE herois SET nome=?, nivel=?, tipo=?, data_poder=?, local=?, aceitou_termos=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sisssii", $nome, $nivel, $tipo, $data_poder, $local, $aceitou_termos, $id);
    $stmt->execute();

    header('Location: read.php');
    exit;
}

$sql = "SELECT * FROM herois WHERE id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$res = $stmt->get_result();
$row = $res->fetch_assoc();
?>

<form method="POST">
    Nome: <input name="nome" value="<?php echo $row['nome']; ?>"><br>
    Nível: <input name="nivel" type="range" min="1" max="100" value="<?php echo $row['nivel']; ?>"><br>
    Tipo:
    <select name="tipo">
        <option value="Velocidade" <?php if($row['tipo']=='Velocidade') echo 'selected'; ?>>Velocidade</option>
        <option value="Fogo" <?php if($row['tipo']=='Fogo') echo 'selected'; ?>>Fogo</option>
    </select><br>
    Data do poder: <input type="date" name="data_poder" value="<?php echo $row['data_poder']; ?>"><br>
    Local: <input name="local" value="<?php echo $row['local']; ?>"><br>
    <input type="checkbox" name="aceitou_termos" value="1" <?php if($row['aceitou_termos']) echo 'checked'; ?>> Aceitou termos<br>
    <button type="submit">Salvar</button>
</form>