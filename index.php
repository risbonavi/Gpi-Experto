<?php
session_start();
?>

<!DOCTYPE HTML>
<html>
  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <title>Sistema Experto</title>
     
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
	<div class="bienvenida"><h3>Bienvenido <?php echo @$_SESSION['userx'];?></h3></div>
	</br>
	
	<div id='cssmenu'>
<ul>
   <li><a href='index.php'>Inicio</a></li>
   <li><a href='php/cliente.php'>Cliente</a></li>
   <li><a href='php/gerente.php'>Gerente</a></li>
   
</ul>
</div>
<br>
	
	<div class="bienvenida">
		
		<p><div class="formulario"><b>Eliga Opción</b></div></p>
		

		<form method="POST" action="">
			<p><input type="submit" value="Cliente" name="cliente"></p>
			<p><input type="submit" value="Gerente" name="gerente"></p>
		</form>

		
		<?php 
		if(@$_REQUEST['cliente']=="Cliente"){
			
			//$origenCarga = $_POST['origenCarga'];			
			//$destinoCarga = $_POST['destinoCarga'];
			//include ("cliente.php");
			//echo"hola clinte";
			echo"<script language='JavaScript'>location='Clientes/cliente.php'</script>";
		}
		
		if(@$_REQUEST['gerente']=="Gerente"){
			
			//$origenCarga = $_POST['origenCarga'];			
			//$destinoCarga = $_POST['destinoCarga'];
			
			echo"hola gerente";
		}
		?>
	</div>
	

	 
</body>
</html>