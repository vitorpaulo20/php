<!--**
 * @author Cesar Szpak - Celke -   cesar@celke.com.br
 * @pagina desenvolvida usando framework bootstrap,
 * o código é aberto e o uso é free,
 * porém lembre -se de conceder os créditos ao desenvolvedor.
 *-->
 <?php
    session_start();
    include_once('config.php');
    // print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['email'];
    $sql = "SELECT * FROM usuarios ORDER BY id ASC";
    $result = $conexao->query($sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Contato</title>
	<head>
	<body>
		<?php
		// Definimos o nome do arquivo que será exportado
		$arquivo = 'relatorio.xls';
		
		// Criamos uma tabela HTML com o formato da planilha
		$html = '';
		$html .= '<table border="1">';
	
		
		$html .= '<tr>';
		$html .= '<td><b>ID</b></td>';
		$html .= '<td><b>Nome</b></td>';
		$html .= '<td><b>Senha</b></td>';
		$html .= '<td><b>Email</b></td>';
		$html .= '<td><b>Telefone</b></td>';
		$html .= '<td><b>Sexo</b></td>';
		$html .= '<td><b>Data Nascimento</b></td>';
		$html .= '<td><b>Cidade</b></td>';
		$html .= '<td><b>Estado</b></td>';
		$html .= '<td><b>Endereço</b></td>';
		$html .= '</tr>';
		
	
		echo "$html";

		while($user_data = mysqli_fetch_assoc($result)) {
			
			
			echo "<tr>";
			echo "<td>".$user_data['id']."</td>";
			echo "<td>".$user_data['nome']."</td>";
			echo "<td>".$user_data['senha']."</td>";
			echo "<td>".$user_data['email']."</td>";
			echo "<td>".$user_data['telefone']."</td>";
			echo "<td>".$user_data['sexo']."</td>";
			echo "<td>".$user_data['data_nasc']."</td>";
			echo "<td>".$user_data['cidade']."</td>";
			echo "<td>".$user_data['estado']."</td>";
			echo "<td>".$user_data['endereco']."</td>";
			echo "</tr>";

		}

				// Configurações header para forçar o download
		header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
		header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
		header ("Cache-Control: no-cache, must-revalidate");
		header ("Pragma: no-cache");
		header ("Content-type: application/x-msexcel");
		header ("Content-Disposition: attachment; filename=\"{$arquivo}\"" );
		header ("Content-Description: PHP Generated Data" );
		// Envia o conteúdo do arquivo
		

		exit;?>
	</body>
</html>