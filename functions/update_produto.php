<?php
//UPDATE BANCO
require_once '../path.php';


if($conexao){
	$codigo = $_REQUEST['codigo'];
	$descricao = $_POST['descricao'];
	$preco = $_POST['preco'];
	$lucro = $_POST['lucro'];

	$sql = "update produtos SET descricao='$descricao', preco=$preco, lucro=$lucro where codigo=$codigo";

	$link = 'consulta_produto.php';

	acessa_banco($conexao, $sql, $link);

}else{
	$erro = mysqli_error($conexao); 
	echo "<script>alert('Erro: $erro')</script>";
	header('Location: ../lesta_usuarios');
}

?>