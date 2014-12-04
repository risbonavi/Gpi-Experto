<?php
session_start();
?>

<!DOCTYPE HTML>
<html>
  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <title>Sistema Experto:GPI</title>
     
   <!--para el menu-->
   <!--<link rel='stylesheet' type='text/css' href='styles_menu.css' />-->
   <link rel='stylesheet' type='text/css' href='css/styles_menu.css' />
   <!--otros estilos-->
   <link rel='stylesheet' type='text/css' href='css/style_propios.css' />
   <script type='text/javascript' src='js/script.js'></script>
   <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
  
</head>
<body>
<?php
	//if(isset($_SESSION["userx"])){
?>
	<div class="bienvenida"><h3>Sistema Experto<?php echo @$_SESSION['userx'];?></h3></div>
	</br>
	
	<div id='cssmenu'>
<ul>

    <li><a href='index.php'>Inicio</a></li>
   <li><a href='php/ingreso.php'>Cliente</a></li>
   <li><a href='php/gerente.php'>Gerente</a></li>
   
</ul>
</div>
<br>
	
	<div class="bienvenida">
		
		<p><div class="formulario"><b>Bienvenido</b></div></p>
		
        <img src="images/inteligencia-artificial.png" >
		

		
		<?php 
		if(@$_REQUEST['cliente']=="Cliente"){
			
			//$origenCarga = $_POST['origenCarga'];			
			//$destinoCarga = $_POST['destinoCarga'];
			//include ("cliente.php");
			//echo"hola clinte";
			echo"<script language='JavaScript'>location='php/cliente.php'</script>";
		}
		
		if(@$_REQUEST['gerente']=="Gerente"){
			
			//$origenCarga = $_POST['origenCarga'];			
			//$destinoCarga = $_POST['destinoCarga'];
			
			echo"hola gerente";
			echo"<script language='JavaScript'>location='php/gerente.php'</script>";
		}
		?>
	</div>
	

	 
</body>
</html>