<?php
	require_once "path.php";	
	cabecalho('Altera dados');

	if ($conexao){
		$codigo=(int)$_REQUEST['codigo'];
		$sql="select * from produtos where codigo=$codigo";

		$resultado = mysqli_query($conexao, $sql);
		$dados_formatados = mysqli_fetch_array($resultado, MYSQLI_ASSOC);

		$codigo = $dados_formatados['codigo'];
		$descricao = $dados_formatados['descricao'];
		$preco = $dados_formatados['preco'];
		$lucro = $dados_formatados['lucro'];

		mysqli_close($conexao);
	}
?>

<legend class="legenda">Formulário de Alteração de Dados</legend>

<?php
	formulario_alteracao('functions/update_produto.php', 'codigo', $codigo, 'descricao', $descricao, 'preco', $preco, 'lucro', $lucro);
	rodape('');

?>