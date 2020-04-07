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

		<form method="post" action="resultados_estabelecimento.php">

				<input type="text" name="nome" maxlength="60" size="60" placeholder="Digite sua cidade e bairro..."/>
			<table>
				<tr>
					<td> <img src="mercearia.png" /> </td>
					<td> <img src="padaria.png" /> </td>
					<td> <img src="restaurante.png" /> </td>
					<td> <img src="sorvete.png" /> </td>
				</tr>
				<tr>
					<td> Mercearia </td>
					<td> Padaria </td>
					<td> Restaurantes </td>
					<td> Sorvete </td>
				</tr>
				<tr>
					<td> <img src="marmitas.png" /> </td>
					<td> <img src="bebidas.png" /> </td>
					<td> <img src="outros.png" /> </td>
				</tr>
				<tr>
					<td> Marmitas</td>
					<td> Bebidas</td>
					<td> Outros</td>
					<td> </td>
				</tr>
			</table>
<input type="submit" name="botao" value="Buscar Estabelecimentos" /><br>
<input type="checkbox" /> Apenas estabelecimentos com delivery

		</form>
	</body>
</html>
