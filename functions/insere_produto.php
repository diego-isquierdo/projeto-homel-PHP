<?php
	require_once '../path.php';

	if($conexao){

		$descricao = $_POST['descricao'];
		$preco = $_POST['preco'];
		$lucro = $_POST['lucro'];

		$sql = "INSERT produtos VALUES (null, '$descricao',  $preco, $lucro)";

		$link = 'cadastra_produto.php';

		acessa_banco($conexao, $sql, $link);

	}else{
		$erro = mysqli_error($conexao);
		echo "<script>alert('Erro: $erro')</script>";
		mysqli_close();
	}

?>