<?php 
$conexao = new mysqli ('localhost','root','12345','sga');

$sql = "UPDATE `funcionarios` SET `nome` = '{$_POST['nome']}' WHERE `id` = '{$_POST['id']}'";

$conexao->query($sql);

  echo("Cargo atualizado com sucesso!");

$conexao -> close();

header("Refresh:3;/sga/funcionarios/index.php");
?>