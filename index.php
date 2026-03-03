<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Fornecedores</title>

    <link rel="stylesheet" href="css/style.css">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="js/validacao.js"></script>

</head>

<body>

<h2>Cadastro de Fornecedor</h2>

<form id="formFornecedor" action="controllers/salvar_fornecedor.php" method="POST">

    <label>Razão Social</label>
    <input type="text" name="razao_social" required>

    <label>Nome Fantasia</label>
    <input type="text" name="nome_fantasia">

    <label>CNPJ</label>
    <input type="text" name="cnpj" id="cnpj" required>

    <label>Email</label>
    <input type="email" name="email">

    <label>Telefone</label>
    <input type="text" name="telefone">

    <label>Endereço</label>
    <input type="text" name="endereco">

    <button type="submit">Cadastrar</button>

</form>

</body>
</html>