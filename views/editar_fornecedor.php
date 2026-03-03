<?php
include("../config/database.php");

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM fornecedores WHERE id=$id");
$row = $result->fetch_assoc();
?>

<h2>Editar Fornecedor</h2>

<form action="../controllers/atualizar_fornecedor.php" method="POST">
<input type="hidden" name="id" value="<?= $row['id'] ?>">

<input type="text" name="razao_social" value="<?= $row['razao_social'] ?>" required>
<input type="text" name="nome_fantasia" value="<?= $row['nome_fantasia'] ?>">
<input type="text" name="cnpj" value="<?= $row['cnpj'] ?>" required>
<input type="email" name="email" value="<?= $row['email'] ?>">
<input type="text" name="telefone" value="<?= $row['telefone'] ?>">
<input type="text" name="endereco" value="<?= $row['endereco'] ?>">

<button type="submit">Atualizar</button>
</form>