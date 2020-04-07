<!DOCTYPE html>		
<html>		
	<head>	
		<title>
			Vizi
		</title>
		<meta charset="UTF-8">
		<meta name="description" content=" plataforma para ajudar os pequenos e micro da sua vizinhan&ccedil;a">
		<meta name="keywords" content="Vizi, Consumidor, Comerciante">
		<meta name="author" content="Bruno Seabra Carneiro">
		<link rel="icon" href="vizi.ico">
		<style>
			body {
				text-align: center;
			}
		</style>
	</head>	
	<body>
		<img src="vizi.png" />

		<h2>
		<a href="index.php">Pagina Inicial</a><br>
		<a href="buscar_estabelecimento.php">Buscar Estabelecimentos</a><br>
		<a href="cadastrar_estabelecimento.php">Cadastre Estabelecimentos</a><br>
		<a href="manifesto.php">Nosso Manifesto</a><br>
		<a href="embaixador.php">Seja um Embaixador</a>
		</h2>
		
		<form method="post" action="cadastro_sucesso.php">
		
		<h1>Voc&ecirc; tem ou conhece um pequeno<br>
		neg&oacute;cio que est&aacute; precisando de<br>
		ajuda? Preencha o formul&aacute;rio</h1>

			<h2>Nome do Estabelecimento</h2>
			<input type="text" name="nome" maxlength="60" size="60" placeholder=""/><br>
			<h2>Categoria do Estabelecimento</h2>
			<input type="combobox" name="categoria" />
			<h2>Whatsapp</h2>
			<input type="text" name="whatsapp" maxlength="60" size="60" placeholder=""/><br>
			<h2>Hor&aacute;rio de Funcionamento</h2>
			<input type="text" name="horainicial" maxlength="5" size="5" placeholder="00:00"/>
			<input type="text" name="horafimal" maxlength="5" size="5" placeholder="00:00"/><br>
			<h2>Endere&ccedilo do Estabelecimento</h2>
			<h2>Cep</h2>
			<input type="text" name="endereco" maxlength="60" size="60" placeholder=""/><br>
			<h2>Estado</h2>
			<input type="combobox" name="estado" />
			<h2>Cidade</h2>
			<input type="text" name="cidade" maxlength="60" size="60" placeholder=""/><br>
			<h2>Bairro</h2>
			<input type="text" name="bairro" maxlength="60" size="60" placeholder=""/><br>
			<h2>Rua</h2>
			<input type="text" name="rua" maxlength="60" size="60" placeholder=""/><br>
			<h2>N&uacute;mero</h2>
			<input type="text" name="numero" maxlength="60" size="60" placeholder=""/><br>
			<h2>Complemento</h2>
			<input type="text" name="complemento" maxlength="60" size="60" placeholder=""/><br>
			<input type="checkbox" name="delivery" /> O estabelecimento consegue realizar delivery<br><br>

			<input type="submit" name="botao" value="Cadastrar Estabelecimento" />
			
		</form>

	</body>
</html>
