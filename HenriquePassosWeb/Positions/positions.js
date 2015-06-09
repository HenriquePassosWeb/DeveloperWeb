// JavaScript Document
	// Use jQuery com a variavel $j(..Posiciona a tela no topo.)
	var $j = jQuery.noConflict();
		$j(document).ready(function() {
		$j(".VoltarTopo").hide();
		$j(function () {
		$j(window).scroll(function () {
		if ($j(this).scrollTop() > 672) {
		$j('.VoltarTopo').fadeIn();
	} else {
		$j('.VoltarTopo').fadeOut();
			}
	});
		$j('.VoltarTopo').click(function() {
		$j('body,html').animate({scrollTop:0},700);
		}); 
 	});});
	
	// Use jQuery com a variavel $j(..Posiciona a tela nas imagens dos serviços.)
	var $P = jQuery.noConflict();
		$P(document).ready(function() {
		$P(".BtnPosition").hide();
		$P(function () {
		$P(window).scroll(function () {
		if ($P(this).scrollTop() < 600) {
		$P('.BtnPosition').fadeIn();
	} else {
		$P('.BtnPosition').fadeOut();
			}
	});
	 
 	});});