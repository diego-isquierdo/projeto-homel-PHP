<?php
	require_once "path.php";
	cabecalho('Principal');
?>
	<legend class="legenda-principal">Sistema de Controle de Estoque</legend>
		
	<form class='formulario' method=post action="select_produto.php">
		
		<section class="dadosEnvio">
			<legend class="legenda">Informe os dados do Produto para consulta:</legend>
			<p><input hidden name=verificador value='produto'></p>
			<p>Informe o codigo do Produto:<br><input type=number name=pesquisa  pattern="[0-9]*" inputmode="numeric" onkeypress="apenas_num()" required></p><br>
		</section>
		
		<div class='botoes'>
			<input class='botao' type=reset value=Limpar><br>
			<input class='botao' type=submit value=Enviar><br>
		</div>

	</form>	

<?php
	rodape('');
?>
