<?PHP
require_once('../conexao.php');

$descricao = $_POST['txt_descricao'];
$preco = $_POST['txt_preco'];
$parcelamento = $_POST['txt_parcelamento'];
$marca = $_POST['txt_marca'];
$categoria = $_POST['txt_categoria'];

		
	    // Lista de tipos de arquivos permitidos
	    $tiposPermitidos= array('image/gif', 'image/jpeg', 'image/pjpeg', 'image/png');
		
	    // Tamanho máximo (em bytes)
	    $tamanhoPermitido = 1024 * 500; // 500 Kb
	 
	    // O nome original do arquivo no computador do usuário
	    $arqName = $_FILES['txt_arquivo']['name'];
		
	    // O tipo mime do arquivo. Um exemplo pode ser "image/gif"
	    $arqType = $_FILES['txt_arquivo']['type'];
		
	    // O tamanho, em bytes, do arquivo
	    $arqSize = $_FILES['txt_arquivo']['size'];
		
	    // O nome temporário do arquivo, como foi guardado no servidor
	    $arqTemp = $_FILES['txt_arquivo']['tmp_name'];
		
	    // O código de erro associado a este upload de arquivo
	    $arqError = $_FILES['txt_arquivo']['error'];
 
	    if ($arqError == 0) {
	        // Verifica o tipo de arquivo enviado
	        if (array_search($arqType, $tiposPermitidos) === false) {
	            echo 'O tipo de arquivo enviado é inválido!';
	        // Verifica o tamanho do arquivo enviado
	        } else if ($arqSize > $tamanhoPermitido) {
	            echo 'O tamanho do arquivo enviado é maior que o limite!';
	        // Não houveram erros, move o arquivo
	        } else {
	            $pasta = 'fotos/';
				
	            // Pega a extensão do arquivo enviado
	            // Este código foi substituido pelo de baixo 
				//$extensao = strtolower(end(explode('.', $arqName)));
				
				// Pega a extensão do arquivo enviado		
				$tmp = explode('.', $arqName);
   				 $extensao = end($tmp);
				 
	            // Define o novo nome do arquivo usando um UNIX TIMESTAMP
	            $nome = time() . '.' . $extensao;
				
				$destino = $pasta . $nome;
				
				
	 
	            // Escapa os caracteres protegidos do MySQL (para o nome do usuário)
	          //  $nomeMySQL = mysql_real_escape_string($_POST['txt_nome']);
	 
	            $upload = move_uploaded_file($arqTemp, $pasta . $nome);
	 
	            // Verifica se o arquivo foi movido com sucesso
	            if ($upload == true) {
	                // Cria uma query MySQL
	               $sql = "insert into tb_produtos (
							   descricaoprod,
							   foto,					
							   preco,
							   parcelamento,
							   codmarca,
							   codcategoria							 
							   ) 
							   
							   values(
							   		  '$descricao',
									   '$destino',																	  
									   '$preco',
									   '$parcelamento',
									   '$marca',
									   '$categoria'
									 )";
	                // Executa a consulta
	               $query = mysqli_query($link, $sql);
				 	 
	                if ($query == true) {
	                    echo 'Produto inserido com sucesso!';
						//header("Location:form_prod.php");
						
			
	                }
	            }
	        }
	    } else {
	        echo 'Ocorreu algum erro com o upload, por favor tente novamente!';
	    }
	 
?>