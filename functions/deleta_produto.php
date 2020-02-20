<?php
require_once '../path.php';

	

if($conexao){
	$request= $_REQUEST['request'];

	$sql = "delete from produtos where codigo=$request";
	$link='consulta_produto.php';

	acessa_banco($conexao, $sql, $link);

}else{
	$erro = mysqli_error($conexao); 
	echo "<script>alert('Erro: $erro')</script>";
}

?>