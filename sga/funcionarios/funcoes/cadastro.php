<?php 
$conexao = new mysqli ('localhost','root','12345','sga');

 $sql = "INSERT INTO `funcionarios` (`nome`) VALUES ('{$_POST['nome']}')";

$conexao -> query($sql);

 echo ("Cargo adicionado com sucesso!");

$conexao -> close();

header("Refresh:3;/sga/funcionarios/index.php");
?>
