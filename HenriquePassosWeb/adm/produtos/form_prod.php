<?php
	//configura conexao com bando de dados
	$link = mysqli_connect("mysql.hostinger.com.br","u185870019_henri","henri120","u185870019_dev01"); 

	//Query do database para traser o resultado que queremos
	$query = $link->query("select * from tb_categoria");

	//Cria vetor para retornar objetos de cada linha
	while($array[] = $query->fetch_object());
	
	//Remova a entrada vazia/branca no final do vetor
	array_pop($array);

?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Refrigeração Pérola</title>

<style type="text/css">

Body {
	background-color:#FFF;
	}
#principal {
	width:100%;
	height:100%;
	float:left;
	}
#topo {
	width:100%;
	height:90px;
	float:left;
    background-color:#006;
}
#logo {	
	width:150px;
	height:90px;
	margin-left:50px;
	margin-top:5px;
    background-repeat: no-repeat;
}
#conteudo{
	height: 450px;
	width: 290px;
	margin: 0 auto; 
	z-index:3 ; 		
	}
#Pesquerdo{
	height:400px;
	width: 250px;
	float:left;
	border-bottom-left-radius: 20px;
	border-bottom-right-radius: 20px;
    background-color:#006;
	margin-top:2px;
}
.Campos2 {
	height: 50px;
	width: 248px;
	margin-top: 5px;
	border:1px #666 solid;

}
Campos2.hover {
	height: 50px;
	width: 248px;
	margin-top: 5px;
	border:1px #666 solid;

}
.Campos {
	height: 50px;
	width: 250px;
	float:left;
	margin-left: 20px;
	margin-top: 10px;
}
#painel {	
	width: 250px;
	height:60px;
	margin-top:5px;
    background-color:#CCC;
}
#padm{
	width: 100%;
	height:20px;
	border-top-left-radius: 5px;
	border-top-right-radius: 5px;
	background:#666;	
}
#text_painel {
  width: 50px;
  margin: 5px auto;
  padding: 20px;
  border-width: 10px;
	font-family:Century; 
  font-size:15px;
  font-weight:bold;
	}
@font-face {
	font-family:Century;
	src:url(../../fontes/GOTHIC.TTF);
}

a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
	color: #D6D6D6;
}
body,td,th {
	color: #000;
}

</style>

</head>
<body>
<div id="principal">
<div id="topo">
<div id="logo"></div>
</div>

<div id="Pesquerdo"> 
<div id="painel"> <div id="text_painel" style="font-family:Century;"> PAINEL </div> </div>

<div id="opcoes">
<div class="Campos2"><a href="form_prod.php">
<h2 align="center" style="color:#FFF; font-family:Century; font-size:15px;"> Produtos  </h2></a></div>

<div class="Campos2"><a href="../categoria/form_categoria.php">
<h2 align="center" style="color:#FFF; font-family:Century; font-size:15px;"> Categoria </h2></a></div>

<div class="Campos2"><a href="../marca/form_marcas.php">
<h2 align="center" style="color:#FFF; font-family:Century; font-size:15px;"> Marca     </h2></a></div>

<div class="Campos2"><a href="../../index.php">
<h2 align="center" style="color:#FFF; font-family:Century; font-size:15px;"> Sair      </h2></a></div>

</div>

</div>


<div id="conteudo">
<form action="adm/produtos/cadastro_prod.php" method="post" name="adm" enctype="multipart/form-data">

<div class="Campos">
<label style="font-family:Century;;"> Descrição do Produto </label>
<input name="txt_descricao" type="text" size="30"/>
</div>

<div class="Campos">
<label style="font-family:Century;"> Foto do Produto </label>
<input name="txt_arquivo" type="File" size="30"/>
</div>

<div class="Campos">
<label style="font-family:Century;"> Preço do Produto </label>
<input name="txt_preco" type="text" size="30"/>
</div>

<div class="Campos">
<label style="font-family:Century;"> Parcelamento </label>
<input name="txt_parcelamento" type="text" value="10x de R$ xxx,xx sem juros"/>
</div>

<div class="Campos">
<label style="font-family:Century;"> Categoria </label>
<br>
<select name="txt_categoria">

<?php foreach($array as $option) : ?>
	<option value="<?php echo $option->codcategoria; ?>">
	<?php echo $option->descricaocategoria; ?></option>
    
    <?php endforeach;?>    
</select>

</div>

<div class="Campos">
<label style="font-family:Century;"> Marca </label> <br>
<select name="txt_marca">

  <?php for ($i=0; $i < $total2; $i++) { ?> 
    <option value="<?php echo mysqli_fetch_field_direct($link, $sql2, $i, 'codmarca'); ?>"> 
	  <?php echo mysqli_fetch_field_direct($link, $sql2, $i, 'descricaomarca'); ?>
    </option>
  <?php } ?>
  
  
</select>
</div>

<div class="Campos">
<label style="font-family:Century;"> Enviar </label>
<br>
<input name="Enviar" type="submit" value="Enviar"/>
</div>
</form>
</div>


</div>
</body>
</html>