<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Fornecedores</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/validacao.js"></script>
</head>
<body>

<h2>Cadastro de Fornecedor</h2>

<form id="formFornecedor" action="controllers/salvar_fornecedor.php" method="POST">

    <input type="text" name="razao_social" placeholder="Razão Social" required>
    <input type="text" name="nome_fantasia" placeholder="Nome Fantasia">
    <input type="text" name="cnpj" id="cnpj" placeholder="CNPJ" required>
    <input type="email" name="email" placeholder="Email">
    <input type="text" name="telefone" placeholder="Telefone">
    <input type="text" name="endereco" placeholder="Endereço">

    <button type="submit">Cadastrar</button>

</form>

<br>
<a href="views/listar_fornecedores.php">Ver Fornecedores</a>

</body>
</html>