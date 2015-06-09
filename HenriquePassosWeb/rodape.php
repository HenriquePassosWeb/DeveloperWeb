<!doctype html>
<html>
<head>
<body>
 <div id="ConteudoRodape">     
    <div id="NewsLetter"><p style="color:#FFF; text-align:left;"> RECEBA NOVIDADES </p>	
		 <form onsubmit="return verifica_formulario(this)" action="envia_contato.php" method="POST" name="contato" id="contato"> 
     
		 <input name="nome" type="text" value="NOME" onclick="this.value='';" onblur="javascript:if (this.value=='') {this.value='NOME'};"/>
         
	 	 <input name="email" type="text" value="E-MAIL" onclick="this.value='';" onblur="javascript:if(this.value==''){this.value='E-MAIL'};"/>
         <input type="button" value="ok" class="buttonnews">
      
   		 </form>
    </div>     
	<div id="ConteudoRedesSociais">
    		<div class="RedesSociais"><img src="img/orange_face.png"/></div>
    		<div class="RedesSociais"><img src="img/orange_twitter.png"/></div>  
                  
        </div>         
   	            
    </div>
    
</div>
        
    <div id="Rodape"> <p style="text-align:center; color:#FFF; font-size: 1.01em;"> ©Copyright 2015-2015 ESCTECX Brasil Móveis S.A.- All Rights Reserved</div>
	<input type="button" class="VoltarTopo" onclick="$j('html,body').animate({scrollTop: $j('#VoltarTopo').offset().top}, 2000);" 
    value"Voltar ao topo" />

</body>
</html>