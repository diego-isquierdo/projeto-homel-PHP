<?php
	require_once "path.php";	
	cabecalho('Cadastra Cliente');
?>
	<legend class="legenda-principal">Formulário de Inclusão de Clientes</legend>
	<form class='formulario' method=post action="functions/insere_cliente.php">
		
		<section class="dadosEnvio">
			<legend class="legenda">Informe os dados do cliente:</legend>
			
			
			<p>Informe o CPF:<br><input pattern="[0-9]*" inputmode="numeric" onkeypress="apenas_num()" type=text name=cpf maxlength="11" placeholder="Apenas Números" required></p><br>
			<p>Informe o Nome:<br><input type=text name=nome placeholder="Nome" required></p><br>
			<p>Informe o Endereço<br><input type=text name=endereco placeholder="Endereço" required></p><br>
			<p>Informe a Data de Nascimento<br><input type=date name=data placeholder="Data de Nascimento" required></p><br>
		</section>
		<div class='botoes'>
			<input class='botao' type=reset value=Limpar><br>
			<input class='botao' type=submit value=Enviar><br>
		</div>
	</form>	

<?php
	rodape('');
?>