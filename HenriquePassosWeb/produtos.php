<?php
require_once('adm/conexao.php');

if (empty($_REQUEST['txt_marca']))$_REQUEST['txt_marca']= null;
 $marca = $_REQUEST['txt_marca'];
 
 if (empty($_REQUEST['txt_categoria']))$_REQUEST['txt_categoria']= null;
 $categoria = $_REQUEST['txt_categoria'];
 
$categoria = $_REQUEST['txt_categoria'];

$sql2= "select * from tb_marca";
$sql2= mysql_query($sql2) or die ("Erro na sql_2");
$total2= mysql_num_rows($sql2);

$sql = "select * from tb_produtos where codmarca = '$marca' and codcategoria = '$categoria'";

$sql = mysql_query($sql) or die ("ERRO AO CONSULTAR");

$total = mysql_num_rows ($sql);


$sql3= "select * from tb_categoria";
$sql3= mysql_query($sql3) or die ("Erro na sql_3");
$total3= mysql_num_rows($sql3);

$sql = "select * from tb_produtos where codcategoria = '$categoria' and codmarca = '$marca'";

$sql = mysql_query($sql) or die ("ERRO AO CONSULTAR");

$total = mysql_num_rows ($sql);
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Refrigeração Perola</title>
<link rel="stylesheet" type="text/css" media="screen" href="CSS/stilo.css">
<link rel="stylesheet" type="text/css" media="screen" href="CSS/LogoExpande.css">
<link rel="stylesheet" type="text/css" media="screen" href="CSS/style.css">
</head>
    <script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
    <script type="text/javascript" src="js/Function_Menu.js"></script> 
   <script> 
    function limpar()  
{  
   document.pesquisa.txt_categoria.value = '';  
   document.pesquisa.txt_marca.value = '';  
} 
</script>
    <script>
	jQuery(document).ready(
	function() {
	jQuery("#botaoExibirFade").toggle(
	function() {	
	jQuery("div#form-ocultoFade").fadeIn(); // fadeIn()
	jQuery("#botaoExibirFade").find('div').addClass('activeFade'); // adiciona a classe active
	},
	function() {
	jQuery("div#form-ocultoFade").fadeOut(); // fadeOut()
	jQuery("#botaoExibirFade").find('div').removeClass('activeFade'); //remove a classe active
}
);
}); 
</script>  
<style type="text/css">

#botaoExibir, #botaoExibirFade  {
	width:500px;
	height:25px;
	background:url(BarraLoguin.jpg);
	cursor:pointer;	
}
#form-oculto, #form-ocultoFade {
    float: left;
    padding: 10px;
    width: 930px;
}
div.active, div.activeFade {
	cursor:pointer; 
	text-align:center; 
	width:500px; 
	height:25px;  
}

</style>
    
        
<body>

<div id="Principal">
<div id="topo">
<ul class="logoExpande"> 
						<div id="logo" style="margin-top:-30px;"> <li> <a href="index.php"> <img comAnimacao src="img/Logo.png"></a> </li> </div>
</ul>	

 <div id="botaoExibirFade" style="margin-left:760px;"><p style="font-family:Century; text-align:center;font-size:14px; font-weight:bold; color:#FFF;">ACESSO RESTRITO</p> <img src="cadeado.png" style="margin-left:470px;"/></div>
    
  <div id="form-ocultoFade" style="display: none;">
     
	<div id="Login">

	<form action="validacao.php" method="POST" name="frm_login" id="frm_login">
    
	<div id="usuario">
		<label style="font-family:Century;"> Login </label>
		<input name="txt_login" type="text" maxlength="10" style="height:25px; width:200px;background:#F3F3F3;"/>
	</div>
    
	<div id="senha">
		<label style="font-family:Century;"> Senha </label>
		<input name="txt_senha" type="password" maxlength="10" style="height:25px; width:200px;background:#F3F3F3;"/>
	</div>
    
	<input name="Enviar" type="submit" value="Enviar" style="margin-top:5px; margin-left:25px; font-family:Century; float:left;"/>
	</form>
    
    </div><!--Login-->
    </div>
    
</div><!--Topo-->

<div id="Menu" style="background-color:#03F;">

	 <div id="wrap" style="width:100%; height:40px; margin-top:-11px;">
		<ul id="ddmenu" style="margin-left:390px;">
       	 <li><a href="index.php">Home</a></li>
         <li><a href="empresa.php">Empresa</a></li>
			<li><a href="#">Serviços</a>
				<ul>
					<li><a href="instalacao.php">Instalação</a></li>
					<li><a href="assistenciatecnica.php">Assistência Técnica</a></li>
					<li><a href="manutencaopreventiva.php">Manutenção Preventiva</a></li>
					<li><a href="manutencaocorretiva.php">Manutenção Corretiva</a></li>
					<li><a href="higienizacao.php">Higienização</a></li>
				</ul>
			</li> 
			<li><a href="produtos.php">Produtos</a></li>
			<li><a href="contato.php">CONTATO</a></li>
            <li><a href="orcamento.php">ORÇAMENTO</a></li>
		</ul>		
	</div>
</div>
</div>

<div class="ConteudoProd">
	<div class="MarcaProd">
    <form action="produtos.php" method="get" name="pesquisa">
    <div id="Texto_info"><p> Busque por Marca e Produto</p></div>
     <div id="Alinhar" style="float:left; height:30px; width:230px; margin-left:200px;">   
      <label style="float:left;"> <p5>Marca:</p5> </label>
        <select name="txt_marca" style="width:160px; float:left; margin-left:5px;">
          <?php for ($i=0; $i < $total2; $i++) { ?> 
            <option value="<?php echo mysql_result($sql2, $i, 'codmarca'); ?>"/> 
              <?php echo mysql_result($sql2, $i, 'descricaomarca'); ?>
            </option>
          <?php } ?>
        </select>
       </div>
      <div id="Alinhar" style="float:left; height:30px; width:390px;">    
        <label style="float:left;"> <p5>Produto:</p5> </label>
        <select name="txt_categoria" style="width:160px; float:left; margin-left:5px;" >
          <?php for ($i=0; $i < $total3; $i++) { ?> 
            <option value="<?php echo mysql_result($sql3, $i, 'codcategoria'); ?>"/> 
              <?php echo mysql_result($sql3, $i, 'descricaocategoria'); ?>
            </option>
          <?php } ?>
        </select>
       <input name="Procurar" type="submit" value="Buscar" style="height:30px; margin-left:25px; width:90px;">
      </div>
   </form>

       
     </div>
     <div class="Produto">
     
   <?php for ($i=0; $i < $total; $i++) { ?> 
   	  <div class="Produtos lg">
  	   <div class="ImgProd">  <img style="display: block; margin-left: auto; margin-right: auto" height="210px" width="250px" src="adm/produtos/<?php echo mysql_result($sql, $i, 'foto');?>">  </div>
       <div class="DescriProd"><p style= "font:'Century Gothic';font-size:15px;color:#000;"><?php echo mysql_result($sql, $i, 'descricaoprod');?></p> </div>
       <div class="Preco"> <?php echo mysql_result($sql, $i, 'preco');?> <p2> á Vista </p2> </div>
       
     
       <div class="btnDetalhe"> <a href="pedidos.php?pro_parametro=<?php echo mysql_result($sql, $i, 'codprod');?> ">  
       		<p>Faça seu Pedido </p> 
       </a>
       </div>
          
                  
      </div>
      <?php }?>
  </div>
  <div class="nPagina"> <div class="p1" style="text-decoration:underline;"><a href="#"> 1 </a></div> 
  					    <div class="p2" style="text-decoration:underline;"><a href="#"> 2 </a></div>
  </div>   
</div>

<div id="VisitaTecnica">
	<a href="contato.php"> <h1 style="color:#333;text-align:left;font-family:Arial, Helvetica, sans-serif;font-size:24px;"> Quer agendar uma Visita Técnica?</h1></a>
    
    <p style="color:#333; text-align:left; font-size:12px;">Nós vamos até sua casa, empresa ou local de trabalho e fazemos um orçamento 
						  sem compromisso de acordo com a sua necessidade.Nós indicamos o melhor produto adequado ao seu ambiente. </p>
</div>

<div id="RodaPe"><h1 style="font-size: 24px; color: #CCC; text-align:center;"> Contato </h1> <p style="text-align:center"> Endereço: Rua Rayon, 486 - Jd.Pérola - Santa Bárbara d'Oeste<br>
                     Email: comercial@refrigeracaoperola.com.br<br>
                          Telefone: (19) 3307-2446 </p>
</div><!--RodaPe-->
<div id="Copyright"> <p style="margin:auto; color:#CCC; margin-top:15px; "> Copyright © 2014 Refrigeração Pérola. Todos os direitos reservados. </p> </div>


</div><!--Principal-->
</body>
</html>