<?php

	function cabecalho($titulo) 
	{
		$html = "<!DOCTYPE html>\n";
		$html .= "<html lang=pt_br>\n";
		$html .= "<head>\n";
		$html .= "<title>$titulo</title>\n";
		$html .= "<link href=\"https://fonts.googleapis.com/css?family=Solway&display=swap\" rel=\"stylesheet\">\n";
		$html .= "<link href=\"https://fonts.googleapis.com/css?family=Solway&display=swap\" rel=\"stylesheet\">\n";
		$html .= "<link href=\"https://fonts.googleapis.com/css?family=EB+Garamond&display=swap\" rel=\"stylesheet\">\n";
		$html .= "<link href=\"https://fonts.googleapis.com/css?family=Indie+Flower&display=swap\" rel=\"stylesheet\">\n";
		$html .= "<link href=\"https://fonts.googleapis.com/css?family=Solway&display=swap\" rel=\"stylesheet\">\n";
		$html .= "<link rel=stylesheet type=text/css href='css/bootstrap.css'>\n";
		$html .= "<link rel=stylesheet type=text/css href='css/style.css'>\n";		
		$html .= "<link rel=\"stylesheet\" href=\"css/reset.css\">\n";
		$html .= "<script type=text/javascript src='js/bootstrap.js'></script>\n";
		$html .= "<script src=\"js/script.js\"></script>\n";
		$html .= "</head>\n";
		$html .= "<body>\n";	
		$html .= "<div class='principal'>\n";
		$html .= "<section class='principal-conteudo'>\n";
		$html .= "<div class='menu'>\n";
		$html .= "<nav>\n";
		$html .= "<a href=\"index.php\">Home<br></a>\n";
		$html .= "<a href=\"cadastra_cliente.php\">Cadastro de Clientes</a>\n";
		$html .= "<a href=\"cadastra_produto.php\">Cadastro de Produtos</a>\n";
		$html .= "<a href=\"consulta_cliente.php\">Consulta / Alteração Clientes<br></a>\n";
		$html .= "<a href=\"consulta_produto.php\">Consulta / Alteração Produtos<br></a>\n";
		$html .= "</nav>\n";
		$html .= "</div>\n";
		
		echo $html;
	}

	function rodape() 
	{
		
		$html = "</section>\n";
		$html .= "</div>\n";
		$html .= "<footer>\n";
		$html .= "<div class='rodape'>\n";
		$html .= "<p class=\"copyright\">&copy; LeftBR</p>\n";
		$html .= "</div>\n";
		$html .= "</footer>\n";
		$html .= "</body>\n";
		$html .= "</html>\n";

		echo $html;
	}

	function rodape_select()
	{
		$html = "</section>\n";
		$html .= "</div>\n";
		$html .= "<footer>\n";
		$html .= "<div class='rodape-consulta'>\n";
		$html .= "<p class=\"copyright\">&copy; LeftBR</p>\n";
		$html .= "</div>\n";
		$html .= "</footer>\n";
		$html .= "</body>\n";
		$html .= "</html>\n";

		echo $html;
	}

	
	function formulario_alteracao($action, $name0, $value0, $name1, $value1, $name2, $value2, $name3, $value3)
	{
		$html = "<form class='formulario' method=post action='$action'>\n";	
		$html .= "<legend class=\"legenda\">Faça a alteração dos dados:</legend>\n";
		$html .= "<nav><a class='link-consulta' href=# onClick=history.go(-1); \"return false;\"><nav><a class='link-consulta' href=# onClick=history.go(-1); \"return false;\"><img src=\"img/voltar.png\" alt=\"Voltar para Página Anterior\" title=\"Voltar para Página Anterior\"></a></nav></a></nav>\n";
		$html .= "<section class=\"dadosEnvio\">\n";
		$html .= "<p><input type=text name='$name0' value='$value0' readonly=\"readonly\"></p><br>\n";
		$html .= "<p><input type=text name='$name1' value='$value1'></p><br>\n";
		$html .= "<p><input type=text name='$name2' value='$value2'></p><br>\n";
		if($name0 == 'cpf'){
			$html .= "<p><input type=date name='$name3' value='$value3'></p><br>\n";
		}else{
			$html .= "<p><input type=text name='$name3' value='$value3'></p><br>\n";
		}
		$html .= "</section>\n";
		$html .= "<div class='botoes'>\n";
		$html .= "<input class='botao' type=reset value=Limpar><br>\n";
		$html .= "<input class='botao' type=submit value=Enviar><br>\n";
		$html .= "</div>\n";
		$html .= "</form>\n";

		echo $html;
	}

	
	function acessa_banco($conexao, $sql, $link)
	{	
		if(mysqli_query($conexao, $sql)){
			echo "<script>    if (confirm('Realizado com Sucesso! Deseja Continuar?')) {  
				location.href = '../$link';
			}else{location.href = '../index.php';}</script>";
			mysqli_close($conexao);
		}else{
		$erro = mysqli_error($conexao); 
		echo "<script>alert('Erro: $erro')</script>";
		mysqli_close($conexao);
		}
	}

	function botao_voltar(){
		echo "<nav><a class='link-consulta' href=# onClick=history.go(-1); \"return false;\"><img src=\"img/voltar.png\" alt=\"Voltar para Página Anterior\" title=\"Voltar para Página Anterior\"></a></nav>";
	}

?>