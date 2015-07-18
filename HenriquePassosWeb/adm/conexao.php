 <?php 
	$link = mysqli_connect("mysql.hostinger.com.br","u185870019_henri","henri120","u185870019_dev01"); 
	
	if (!$link) {
		
		echo ("ERRO" . mysqli_error($link)); 
		
		} else {
			
			echo ("Sucess conexão!");
			
			}
?>
