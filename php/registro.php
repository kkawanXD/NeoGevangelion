<!DOCTYPE html>
<html lang="pt-br">

	<head>
		<title> Login </title>
		<meta charset="utf-8">

	</head>

	<body>
	
		<header class="cabecalho">
		

			
		</header>
	
		<?php
			include_once("conexao.php");
	
			$email=$_POST['email'];
			
			$sqlselect= "SELECT * FROM login WHERE email = '$email'";
			$resultadoselect = @mysqli_query($conect,$sqlselect);
		
			if (@mysqli_num_rows($resultadoselect)==0){
				$sql = "insert into login (email) values ('$email')";
				$resultado = @mysqli_query($conect,$sql);
				if (!$resultado){
					die ('Query Inválida: ' . @mysqli_error($conect));
					exit;
				}else{
					mysqli_close($conect);
				}
			}
			else{
                echo "esse e-mail já existe";
			}
		?>
		
		esse e-mail foi cadastrado com sucesso
		
		
		
	</body>
	
</html>