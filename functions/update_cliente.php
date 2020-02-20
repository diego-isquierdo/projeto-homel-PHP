<?php
//UPDATE BANCO
require_once '../path.php';


if($conexao){
	$cpf = $_POST['cpf'];
	$nome = $_POST['nome'];
	$endereco = $_POST['endereco'];
	$data = $_POST['data'];

	$sql = "update clientes SET nome='$nome', endereco='$endereco', data_nascimento='$data' where cpf='$cpf'";

	$link = 'consulta_cliente.php';
	
	acessa_banco($conexao, $sql, $link);

}else{
	$erro = mysqli_error($conexao); 
	echo "<script>alert('Erro: $erro')</script>";
	header('Location: ../Conulta_cliente.php');
}

?>