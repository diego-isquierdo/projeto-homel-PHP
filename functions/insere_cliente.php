<?php
	require_once '../path.php';

	if($conexao){

		$cpf = $_POST['cpf'];
		$nome = $_POST['nome'];
		$endereco = $_POST['endereco'];
		$data = $_POST['data'];

		$sql = "INSERT clientes VALUES ('$cpf',  '$nome',  '$endereco', '$data')";
		
		$link = 'cadastra_cliente.php';

		acessa_banco($conexao, $sql, $link);
		
	}else{
		$erro = mysqli_error($conexao);
		echo "<script>alert('Erro: $erro')</script>";
		mysqli_close();
	}
?>