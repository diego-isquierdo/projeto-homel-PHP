<?php
	require_once "path.php";
	cabecalho('Consulta Cliente');
?>


<?php
if($conexao){

	$verificador = $_POST['verificador'];
	$request = $_POST['pesquisa'];

	echo "<legend class=\"legenda-principal\">Resultado da Pesquisa</legend>";
	echo "<div  class='tabela'>";

	echo "<table><tr><td>Código</td><td>Descrição</td><td>Preço</td><td>Lucro</td><td colspan=\"2\">Modificações</td></tr> ";
	
	$sql = "select * from produtos where codigo like '%$request%';";
	$resultado = mysqli_query($conexao,$sql);
	while($dados_formatados = mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
		$t = "<tr>";
		$t .= "<td>".$dados_formatados['codigo']."</td>";
		$t .= "<td>".$dados_formatados['descricao']."</td>";
		$t .= "<td>".$dados_formatados['preco']."</td>";
		$t .= "<td>".$dados_formatados['lucro']."</td>";
		$t .= "<td><a class='link-consulta' href=altera_produto.php?codigo=".$dados_formatados['codigo']."><img src=\"img/edit.png\" alt=\"Editar Informações\" title=\"Editar Informações\"></a></td>";
		$t .= "<td><a href=# onclick=\"deletar('deleta_produto.php',".$dados_formatados['codigo'].")\" class='link-consulta'><img src=\"img/del.png\" alt=\"Excluir Informações\" title=\"Excluir Informações\"></a></td>";
		$t .= "</tr>";

		echo $t;
	} 
				
	botao_voltar();
	echo "</div>";
}else{
	$erro = mysqli_error($conexao); 
	echo "<script>alert('Erro: $erro')</script>";
}

rodape_select()
?>




