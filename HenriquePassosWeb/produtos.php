<?php
require_once('adm/conexao.php');

if (empty($_REQUEST['txt_categoria']))$_REQUEST['txt_categoria']= null;
$categoria = $_REQUEST['txt_categoria'];

$sql2 = "select * from tb_categoria";
$sql2 = mysqli_query($link,$sql2) or die ("ERRO AO CONSULTAR");
$total2 = mysqli_num_rows($sql2);

$sql = "select * from tb_produtos where codcategoria ='1'";
$sql = mysqli_query($link,$sql) or die ("ERRO AO CONSULTAR");
$total = mysqli_num_rows($sql);

echo "Numero de registros: ".$total;
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

<div id="Principal">+
 <div class="ConteudoProd">

    <form action="produtos.php" method="get" name="pesquisa">
      <div id="Alinhar" style="float:left; height:30px; width:390px;">    
        <label style="float:left;"> <p5>Produto:</p5> </label>
        <select name="txt_categoria" style="width:160px; float:left; margin-left:5px;" >
        
          <?php for ($i=0; $i < $total2; $i++) { ?> 
            <option value="<?php echo mysql_result($sql2, $i, 'codcategoria'); ?>"/> 
              <?php echo mysql_result($sql2, $i, 'descricaocategoria'); ?>
            </option>
          <?php } ?>
          
        </select>
       <input name="Procurar" type="submit" value="Buscar" style="height:30px; margin-left:25px; width:90px;">
      </div>
   </form>      
 
	<div class="Produto">     
  	 <?php for ($i=0; $i < $total; $i++) { ?> 
   	  <div class="Produtos lg">
  	   <div class="ImgProd">
       		
            <img style="height="210px" width="250px" src="adm/produtos/fotos/<?php echo mysql_result($sql, $i, 'foto');?>"></div>            
            <div class="DescriProd"><p><?php echo mysql_result($sql, $i, 'descricaoprod');?></p></div>       
            
            <div class="Preco"><?php echo mysql_result($sql, $i, 'preco');?> <p2> á Vista </p2> </div>            
       		
            <div class="btnDetalhe"><a href="pedidos.php?pro_parametro=<?php echo mysql_result($sql, $i, 'codprod');?> ">       		
            <p>Faça seu Pedido</p></a>       
       
       </div>                           
      </div>
     <?php }?>    
   </div>
     
 </div> 
</div><!--Principal-->

</body>
</html>