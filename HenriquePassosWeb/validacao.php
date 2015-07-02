<?PHP

	require_once('adm/conexao.php');
	
	$usuario = $_REQUEST['txt_login'];
	$senha = $_REQUEST['txt_senha'];
	
	$sql = "select * from tb_usu where login = '$usuario' and senha = '$senha'";
	$sql = mysql_query($sql) or die ('Erro ao logar');
	
	$registro = mysql_num_rows($sql);
	
	if ($registro == 1)
		{
			session_start();
			$_SESSION['logado'] = $usuario;
			header('Location: adm/produtos/form_prod.php');
		}
			else {
					header('Location: index.php');
				 }
				 
?>
				 