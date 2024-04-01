<?php
	@$cpf = $_GET["cpf_cliente"];
	@$cnpj = $_GET["cnpj_cliente"];
	@$fone = $_GET["telefone"];
	@$cidade = $_GET["id_cidade"];
	
	if(empty($cpf_cliente) OR empty($cnpj_cliente) OR empty($telefone) OR
		empty($id_cidade){
		$msg = "Todos os campos devem ser preenchidos!";
	}
	else {
		$link = mysqli_connect("127.0.0.1","root","","banco_fateb");
		$sql = "INSERT INTO tb_cliente(cpf_cliente,cnpj_cliente,telefone,id_cidade)
		VALUES('$cpf_cliente','$cnpj_cliente','$telefone','$id_cidade')";
		$status = mysqli_query($link,$sql);
		mysqli_close($link);
		$msg = ($status==1) ?"Sucesso ao inserir!" :"Erro ao inserir!";
	}
	echo $msg;
?>