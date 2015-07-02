
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Refrigeração Pérola</title>

<style type="text/css">
@font-face {
	font-family:Century;
	src:url(../../fontes/GOTHIC.TTF);
}

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
    background-image:url(../produtos/LogoADM.png);
    background-repeat: no-repeat;
}
#conteudo{
	height:400px;
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
<div class="Campos2"><a href="../produtos/form_prod.php">
<h2 align="center" style="color:#FFF;font-family:Century; font-size:15px;"> Produtos  </h2></a></div>

<div class="Campos2"><a href="../categoria/form_categoria.php">
<h2 align="center" style="color:#FFF;font-family:Century;font-size:15px;"> Categoria </h2></a></div>

<div class="Campos2"><a href="../marca/form_marcas.php">
<h2 align="center" style="color:#FFF;font-family:Century; font-size:15px;"> Marca     </h2></a></div>

<div class="Campos2"><a href="../../index.php">
<h2 align="center" style="color:#FFF; font-family:Century; font-size:15px;"> Sair      </h2></a></div>
</div>

</div>


<div id="conteudo">
<form action="../categoria/cadastro_categoria.php" method="post" name="adm" enctype="multipart/form-data">

<div class="Campos">
<label  style="font-family:Century;"> Categoria </label> <br>
<input name="txt_categoria" type="text" size="30"/>
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