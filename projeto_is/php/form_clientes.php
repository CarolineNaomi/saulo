<!doctype	html>
<html	lang="pt-BR">
	<head>
		<meta	charset="utf-8">
		<title>
			Clientes
		</title>
	</head>
	<body>
		<h1><center>Cadastro de Clientes</center></h1>
		<form action="gravar_clientes.php" method="GET">
			
			<div>
				<label for="cpf">CPF:</label>
				<input type="text" id="cpf" name="cpf" />
			</div>
			<div>
                <label for="telefone">Telefone</label>
                <input type="text" id="telefone" name="telefone"/>                
            </div>
			<div>
				<label for="cidade"> Cidade</label>
				<input type="text" id="cidade" name="cidade"/>
			</div>
			
			<div class="button">
				<button type="submit">Salvar</button>
			</div>

		</form>
	
	</body>
</html>