<?php
	// Cria uma conecção
	$con = mysqli_connect("localhost", "root", "", "banco_fateb");

	// verifica a conecção
	if (!$con) {
		die("Conexão com falha: " . mysqli_connect_error());
	}
		
	$query = "SELECT * FROM tb_cliente";
	
	$result = mysqli_query($con, $query);
	
	while($row = mysqli_fetch_array($result)){ 
        echo   '<tr> 
					<td>'.$row["cpf_cleinte"].'</td>                                      
					<td>'.$row["cnpj_cliente"].'</td>
					<td>'.$row["telefone"].'</td>
					<td>'.$row["id_cidade"].'</td><br>
                </tr>';
	}
	
	mysqli_close($con);
?>