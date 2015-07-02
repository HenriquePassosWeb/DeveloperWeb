<?PHP

	require_once('adm/conexao.php');
	
	session_start();
	$usuario = $_SESSION['logado'];
	
	$sql = "select * from tb_usu where login = '$usuario'";
	$sql = mysql_query($sql) or die ('Erro ao Logar');
	
	$registro = mysql_num_rows($sql);
	
	if ($registro <> 1) {
		header('Location: index.php');}
		
?>