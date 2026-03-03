<?php
include("../config/database.php");

$id = $_POST['id'];
$razao = $_POST['razao_social'];
$fantasia = $_POST['nome_fantasia'];
$cnpj = $_POST['cnpj'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];

$stmt = $conn->prepare("UPDATE fornecedores 
SET razao_social=?, nome_fantasia=?, cnpj=?, email=?, telefone=?, endereco=? 
WHERE id=?");

$stmt->bind_param("ssssssi", $razao, $fantasia, $cnpj, $email, $telefone, $endereco, $id);

$stmt->execute();

header("Location: ../views/listar_fornecedores.php");
?>