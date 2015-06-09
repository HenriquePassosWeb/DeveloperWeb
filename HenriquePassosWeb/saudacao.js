    function saudacao(){ 
    var d = new Date();
    var hour = d.getHours();
    if(hour < 5){
       var saudar = "Boa Noite";
    }else if(hour < 8){
       var saudar = "Bom Dia";
    }else if(hour < 12){
       var saudar = "Bom Dia!";
    }else if(hour < 18){
       var saudar = "Boa tarde";
    }else{
       var saudar = "Boa noite";
    }    
	//alert(saudar);	
	document.getElementById("saudacao").innerHTML = saudar;
}