<?php

include("../config/database.php");

$razao = $_POST['razao_social'];
$fantasia = $_POST['nome_fantasia'];
$cnpj = $_POST['cnpj'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];

$sql = "INSERT INTO fornecedores 
(razao_social, nome_fantasia, cnpj, email, telefone, endereco)
VALUES
('$razao','$fantasia','$cnpj','$email','$telefone','$endereco')";

if($conn->query($sql) === TRUE){
    echo "Fornecedor cadastrado com sucesso!";
}else{
    echo "Erro: " . $conn->error;
}

?>