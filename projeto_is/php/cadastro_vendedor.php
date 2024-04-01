<?php
	@$nome = $_GET["nome_vendedor"];
	@$cpf= $_GET["cpf_vendedor"];
	@$telefone = $_GET["telefone_vendedor"];
	@$salario = $_GET["salario_vendedor"];
    @$perfil = $_GET["id_perfil_vendedor"];
	
	if(empty($nome) OR empty($cpf) OR empty($telefone) OR
		empty($salario) OR empty($perfil) {
		$msg = "Todos os campos devem ser preenchidos!";
	}
	else {
		$link = mysqli_connect("127.0.0.1","root","","banco_fateb");
		$sql = "INSERT INTO tb_vendedor(nome_vendedor, cpf_vendedor,
         telefone_vendedor, salario_vendedor, id_perfil_vendedor)
		VALUES('$nome','$cpf','$telefone','$salario','$perfil')";
		$status = mysqli_query($link,$sql);
		mysqli_close($link);
		$msg = ($status==1) ?"Sucesso ao inserir!" :"Erro ao inserir!";
	}
	echo $msg;
?>