<!doctype html>
<html>
<head>
<meta charset="utf-8">    
 <link rel="stylesheet" href="css/style_pedido.css" type="text/css"/>
</head> 
<body>  
  <div id="slideprod">
	<marquee loop=1 behavior=slide direction="down">
		<img style="height:150px; width:19.6%;" src="img/propaganda/img1.jpg"/>
		<img style="height:150px; width:19.6%;" src="img/propaganda/img2.jpg"/>	
		<img style="height:150px; width:19.6%;" src="img/propaganda/img3.jpg"/>
		<img style="height:150px; width:19.6%;" src="img/propaganda/img4.jpg"/>
		<img style="height:150px; width:19.6%;" src="img/propaganda/img5.jpg"/>		
	</marquee>
  </div>               
<div id="formpedido">
  <div id="alignpedido">

	<h2 style="font-size:22px;">FAÇA SEU PEDIDO</h2>
	<P style="font-size:11px;">Campos com * são obrigatórios!<p>

    <form onsubmit="return verifica_formulario(this)" action="#" method="POST" name="pedido" id="pedido">
 
		<input name="nome" type="text" value="NOME*" onclick="this.value='';" onblur="javascript:if (this.value=='') {this.value='NOME*'};" style="width:95%;"/>
	<br>
	<br>
		<input name="email" type="text" value="E-MAIL*" onclick="this.value='';" onblur="javascript:if (this.value=='') {this.value='E-MAIL*'};" style="width:95%;"/>
	<br>
	<br>
		<input name="telefone" type="text" value="TELEFONE*" onclick="this.value='';" onblur="javascript:if (this.value=='') {this.value='TELEFONE*'};" style="width:95%;"/>
	<br>
	<br>
		<input name="cidade" type="text" value="CIDADE*" onclick="this.value='';" onblur="javascript:if (this.value=='') {this.value='CIDADE*'};" style="width:95%;"/>
	<br>
		<br>
		<input name="telefone" type="text" value="CEP*" onclick="this.value='';" onblur="javascript:if (this.value=='') {this.value='CEP*'};" style="width:95%;"/>
	<br>
	<br>
		<input name="cidade" type="text" value="ESTADO*" onclick="this.value='';" onblur="javascript:if (this.value=='') {this.value='ESTADO*'};" style="width:95%;"/>
	<br>
	<br>
		<select name="conheceu" style="width:95%; height:30px; margin-top:5px;">
			<option value="CONHECEU">ONDE NOS CONHECEU?</option>        
			<option value="Internet">INTERNET</option>
			<option value="amigos">AMIGOS</option>	
			<option value="propagandas">PROPAGANDAS</option>
			<option value="outros">OUTROS</option>
		</select>
	<br>
	<br>
		<textarea rows=30 cols=60 style="width:95%;" name="mensagem" value="ENVIE SEU PEDIDO AQUI*" onclick="this.value='';" onblur="javascript:if (this.value=='') {this.value='ENVIE SEU PEDIDO AQUI*'};" >ENVIE SEU PEDIDO AQUI*</textarea>
	<br>
	<br>
		<input name="enviar" type="submit" value="Enviar" style="margin-top:5px;"/>
   </form>
 </div>
</div>

</body>
</html>