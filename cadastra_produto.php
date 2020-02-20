<?php
	require_once "path.php";	
	cabecalho('Cadastra Produto');
?>

<legend class="legenda-principal">Formulário de Inclusão de Produtos</legend>
	<form  class='formulario' method=post action="functions/insere_produto.php">
			
		<div class="dadosEnvio">
			<legend class="legenda">Informe os dados do produto:</legend>

			<p>Descrição do Produto:<br><input type=text name=descricao placeholder="Informe o Produto" required><br><br>
			<p>Valor do Produto:<br><input type=number min="0" max="10000" step="0.01" name=preco placeholder="Informe o Valor" required><br><br>		
			<p>Percentual de Lucro<br><input type=number min="0" max="100" step="0.01" name=lucro placeholder="Informe margem de Lucro | Ex.: 40% => 1,4" required><br><br>
		</div>

		<div class='botoes'>
			<input class='botao' type=reset value=Limpar><br>
			<input class='botao' type=submit value=Enviar><br>
		</div>
	</form>	

<?php
	rodape('');
?>