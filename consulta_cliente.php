<?php
	require_once "path.php";
	cabecalho('Principal');
?>
	<legend class="legenda-principal">Sistema de Controle de Estoque</legend>
		
	<form class='formulario' method=post action="select_cliente.php">
		
		<section class="dadosEnvio">
			<legend class="legenda">Informe os dados do cliente para consulta:</legend>
			<p><input hidden name=verificador value='cliente'></p>
			<p>Informe o CPF:<br><input pattern="[0-9]*" inputmode="numeric" onkeypress="apenas_num()" type=text name=pesquisa maxlength="11" placeholder="Apenas Números" required></p><br>
		</section>
		
		<div class='botoes'>
			<input class='botao' type=reset value=Limpar><br>
			<input class='botao' type=submit value=Enviar><br>
		</div>

	</form>	

<?php
	rodape('');
?>
