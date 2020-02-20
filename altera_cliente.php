<?php
	require_once "path.php";	
	cabecalho('Altera dados');

	if ($conexao){
		$cpf=$_REQUEST['cpf'];
		$sql="select * from clientes where cpf='$cpf'";

		$resultado = mysqli_query($conexao, $sql);
		$dados_formatados = mysqli_fetch_array($resultado, MYSQLI_ASSOC);

		$cpf = $dados_formatados['cpf'];
		$nome = $dados_formatados['nome'];
		$endereco = $dados_formatados['endereco'];
		$data = $dados_formatados['data_nascimento'];

		mysqli_close($conexao);
	}
?>

<legend class="legenda-principal">Formulário de Alteração de Clientes</legend>

<?php
	
	formulario_alteracao('functions/update_cliente.php', 'cpf', $cpf, 'nome', $nome, 'endereco', $endereco, 'data', $data);
	rodape();

?>