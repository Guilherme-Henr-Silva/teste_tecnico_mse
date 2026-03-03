<?php
include("../config/database.php");

$id = $_GET['id'];

$stmt = $conn->prepare("DELETE FROM fornecedores WHERE id=?");
$stmt->bind_param("i", $id);
$stmt->execute();

header("Location: ../views/listar_fornecedores.php");
?>