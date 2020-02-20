<?php
require_once '../path.php';

	

if($conexao){
	$request= $_REQUEST['request'];
	 
	$sql = "delete from clientes where cpf='$request'";
	$link='consulta_cliente.php';

	acessa_banco($conexao, $sql, $link);

}else{
	$erro = mysqli_error($conexao); 
	echo "<script>alert('Erro: $erro')</script>";
}

?>