<?php
include("../config/database.php");

$sql = "SELECT * FROM fornecedores";
$result = $conn->query($sql);
?>

<h2>Lista de Fornecedores</h2>

<table border="1">

<tr>
<th>ID</th>
<th>Razão Social</th>
<th>CNPJ</th>
<th>Email</th>
</tr>

<?php

while($row = $result->fetch_assoc()){

echo "<tr>
<td>".$row['id']."</td>
<td>".$row['razao_social']."</td>
<td>".$row['cnpj']."</td>
<td>".$row['email']."</td>
</tr>";

}

?>

</table>