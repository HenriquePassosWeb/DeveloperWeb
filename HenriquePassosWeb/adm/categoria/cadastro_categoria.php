<?PHP

require_once('../conexao.php');

$categoria = $_POST['txt_categoria'];


	                // Cria uma query MySQL
	               $sql = "insert into tb_categoria (
							   descricaocategoria						 
							   ) 
							   
							   values(
									   '$categoria'
									 )";
	                // Executa a consulta
	               $query = mysqli_query($link, $sql);
				 
	                if ($query == true) {
	                    echo 'Categoria inserido com sucesso!';
						//header("Location:form_prod.php"); 
	    } else {
	        echo 'Ocorreu algum erro com o upload, por favor tente novamente!';
	    }
	 
?>