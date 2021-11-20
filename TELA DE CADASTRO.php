<?php
include_once "conexao.php";
?>


<!doctype HTML>
<html>

<head>
	<meta charset="UTF-8">
	<title>TELA DE CADASTRO</title>
	<style>
		form1 {

			COLOR: BLACK;
		}

		label {
			COLOR: BLACK;
		}

		h3 {
			COLOR: BLACK;
		}

		form {
			COLOR: WHITE;
		}

		body {
		background-color: gray;

		}
	</style>


</head>

<body>


	<h3 style="background-color: RED;"><i>CADASTRO DE FUNCIONARIO</i></h3>


	<br>


<?php
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
?>

<form action="" method="post">


	<label>E-MAIL:</label>
	<input type="email" name="email_usuario" placeholder="Inserir e-mail..">

	<br>
	<br>


	<label>SENHA:</label>
	<input type="password" name="senha_usuario" placeholder="Inserir senha">


	<br>
	<br>

	<input type="submit" name="pesqUsuario" id="pesqUsuario">

</form>


 <?php
 if(!empty($dados['pesqUsuario'])){
$email = $dados['email_usuario'];
$senha =$dados['senha_usuario'];


$query_usuarios = "SELECT idLogin, email, senha FROM login WHERE email LIKE :email";
$result_usuarios = $conn->prepare($query_usuarios);
$result_usuarios->bindParam(':email', $email, PDO::PARAM_STR);
$result_usuarios->execute();

$emailInput = $_POST['email_usuario'];


while($row_usuario = $result_usuarios->fetch(PDO::FETCH_ASSOC)){

echo "<br>";	
extract($row_usuario);
echo "ID do usuario: $idLogin <br>";
echo "Email do usuario: $email <br>";
echo "Senha do usuario: $senha <br>";
echo "<hr>";

 }

}
 
 ?>

	


</body>

</html>