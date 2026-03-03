<?php
include("../config/database.php");

$result = $conn->query("SELECT * FROM fornecedores");
?>

<h2>Lista de Fornecedores</h2>

<a href="../index.php">Novo Cadastro</a>

<table>
<tr>
<th>ID</th>
<th>Razão Social</th>
<th>CNPJ</th>
<th>Email</th>
<th>Ações</th>
</tr>

<?php while($row = $result->fetch_assoc()): ?>

<tr>
<td><?= $row['id'] ?></td>
<td><?= $row['razao_social'] ?></td>
<td><?= $row['cnpj'] ?></td>
<td><?= $row['email'] ?></td>
<td>
<a href="editar_fornecedor.php?id=<?= $row['id'] ?>">Editar</a>
<a href="../controllers/deletar_fornecedor.php?id=<?= $row['id'] ?>">Excluir</a>
</td>
</tr>

<?php endwhile; ?>

</table>