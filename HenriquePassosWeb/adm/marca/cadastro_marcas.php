<?PHP

require_once('../conexao.php');

$marca = $_POST['txt_marca'];
				   
	                // Cria uma query MySQL
	               $sql = "insert into tb_marca (
							   descricaomarca						 
							   ) 	   
							   values(
									   '$marca'
									 )";
	                // Executa a consulta
	               $query = mysql_query($sql);			  
				 
	                if ($query == true) {
	                    echo 'Marca inserido com sucesso!';
						//header("Location:form_prod.php"); 
	    } else {
	        echo 'Ocorreu algum erro com o upload, por favor tente novamente!';
	    }
	 
?>