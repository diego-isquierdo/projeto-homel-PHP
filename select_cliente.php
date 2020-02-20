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
	
		echo "<table><tr><td>CPF</td><td>Nome</td><td>Endereco</td><td>Data de Nascimento</td><td colspan=\"2\">Modificações</td></tr> ";
		
		$sql = "select * from clientes where clientes.cpf like '%$request%';";
		$resultado = mysqli_query($conexao,$sql);
		while($dados_formatados = mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
			$cpf = $dados_formatados['cpf'];
			$t = "<tr>";
			$t .= "<td>".$cpf."</td>";
			$t .= "<td>".$dados_formatados['nome']."</td>";
			$t .= "<td>".$dados_formatados['endereco']."</td>";
			$t .= "<td>".$dados_formatados['data_nascimento']."</td>";
			$t .= "<td><a class='link-consulta' href=altera_cliente.php?cpf=".$dados_formatados['cpf']." alt='Editar'><img src=\"img/edit.png\" alt=\"Editar Informações\" title=\"Editar Informações\"></a></td>";
			$t .= "<td><a href=# onclick=\"deletar('deleta_cliente.php', '$cpf')\" class='link-consulta'><img src=\"img/del.png\" alt=\"Excluir Informações\" title=\"Excluir Informações\"></a></td>";
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




