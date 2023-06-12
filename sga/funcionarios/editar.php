<?php 
$conexao = new mysqli('localhost','root','12345','sga');

$sql = "SELECT * FROM `funcionarios` WHERE `id` = {$_GET['id']}";

$resultado =  $conexao->query($sql);

$funcionarios = $resultado-> fetch_object();
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Funcionários</title>
</head>
<body>
    <h3>Editar Funcionários</h3>
    <form action="funcoes/atualizar.php" method="post">
    <input type="hidden" name="id" value="<?= $funcionarios->id?>">
        <br>
        <label for="nome">Nome:</label>
        <br>
        <input value="<?= $funcionarios->nome ?>" type="text" id="nome" name="nome">
        <br>
        <br>
        <input type="submit" value="Salvar">
        <a href="index.php">Voltar</a>
    </form>
</body>
</html>