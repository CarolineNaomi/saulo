<?php
	$cpf 	= $_POST["cpf_cliente"];
	$cnpj 	= $_POST["cnpj_cliente"];
	$telefone 	= $_POST["telefone"];
	$cidade 	= $_POST["id_cidade"];
	

	// Cria uma conecção
	$con = mysqli_connect("127.0.0.1", "root", "", "banco_fateb");
	
	// verifica a conecção
	if (!$con){
		die("Conexão com falha: " . mysqli_connect_error());
	}
	
	//insere os dados na tabela clientes
	$query = "INSERT INTO clientes (id_cliente, cpf_cliente, cnpj_cliente, telefone, id_cidadecidade) 
			VALUE(null, '$cpf_cliente', '$cnpj_cliente', '$telefone', '$id_cidadecidade')";
	
	mysqli_query($con, $query);
	//fecha a conexão com o banco de dados
	mysqli_close($con);
?>