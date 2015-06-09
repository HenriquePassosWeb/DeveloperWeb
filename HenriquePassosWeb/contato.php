<!doctype html>
<html>
<head>
<meta charset="utf-8">

	<link rel="stylesheet" href="css/style_contato.css" type="text/css"/>

</head>
<body>

<div id="mapa"></div>

<div id="localizacao">
	<h1 style="font-size:22px;">LOCALIZAÇÃO </h1>
	<br>
	<p>Rua 7 de Setembro, 225 – Centro</p>
	<p>CEP: 13465-320 – Americana/SP.</p>
	<p>Email: contato@esctecxbrasil.com.br</p>
	<p>Fone: (19) 3407-1303 / (19) 3405-4000</p>
	<p>-</p>
	<p>Av. Franscisco Alfredo Jr., 533 Swiss Park</p>
	<p>CEP: 13050-028 – Campinas SP | 19 3326 5013</p>
	<p>Email: contato@esctecxbrasil.com.br</p>
	<p>Fone: (19) 3326 5013</p>
</div>

<div id="formcontato">

	<h1 style="font-size:22px;">FALE CONOSCO</h1>
	<P style="font-size:11px;">Campos com * são obrigatórios!<p>

   <form onsubmit="return verifica_formulario(this)" action="#" method="POST" name="contato" id="contato">
 
		<input name="nome" type="text" value="NOME*" onclick="this.value='';" onblur="javascript:if (this.value=='') {this.value='NOME*'};"style="width:95%;"/>
	<br>
	<br>
		<input name="email" type="text" value="E-MAIL*" onclick="this.value='';" onblur="javascript:if (this.value=='') {this.value='E-MAIL*'};"style="width:95%;"/>
	<br>
	<br>
		<input name="telefone" type="text" value="TELEFONE*" onclick="this.value='';" onblur="javascript:if (this.value=='') {this.value='TELEFONE*'};"style="width:95%;"/>
	<br>
	<br>
		<input name="cidade" type="text" value="CIDADE*" onclick="this.value='';" onblur="javascript:if (this.value=='') {this.value='CIDADE*'};"style="width:95%;"/>
	<br>
	<br>
		<select name="conheceu" style="width:100%; height:30px; margin-top:5px;">
			<option value="CONHECEU">ONDE NOS CONHECEU?</option>        
			<option value="Internet">INTERNET</option>
			<option value="amigos">AMIGOS</option>	
			<option value="propagandas">PROPAGANDAS</option>
			<option value="outros">OUTROS</option>
		</select>
	<br>
	<br>
		<select name="assunto" style="width:100%; height:30px; margin-top:5px;">
			<option value="ASSUNTO">ASSUNTO</option>        
				<option value="ORÇAMENTO">ORÇAMENTO</option>
				<option value="DUVIDAS">DÚVIDAS</option>
				<option value="OUTROS">OUTROS</option>

		</select>
	<br>
	<br>
		<textarea rows=30 cols=60 style="width:95%; name="mensagem" value="ENVIE SUA MENSAGEM AQUI*" onclick="this.value='';" onblur="javascript:if (this.value=='') {this.value='ENVIE SUA MENSAGEM AQUI*'};" >ENVIE SUA MENSAGEM AQUI*</textarea>
	<br>
	<br>
		<input name="enviar" type="submit" value="Enviar" style="margin-top:5px;"/>
   </form>
</div>

</body>
</html>