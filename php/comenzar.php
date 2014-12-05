<?php
session_start();
?>

<!DOCTYPE HTML>
<html>
  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <title>Test</title>

   <!--para el menu-->
   <!--<link rel='stylesheet' type='text/css' href='styles_menu.css' />-->
   <link rel='stylesheet' type='text/css' href='../css/styles_menu.css' />
   <!--otros estilos-->
   <link rel='stylesheet' type='text/css' href='../css/style_propios.css' />
   <script type='text/javascript' src='../js/script.js'></script>
   <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>

   </head>

   <body>

    <div class="bienvenida"><h3>Bienvenido <?php echo @$_SESSION['userx'];?></h3></div>
	</br>

	<?php
	include ("../menu2.php");

	$usuarion=$_GET['usrn'];
	$usuarioa=$_GET['usra'];
	?>

        <form method="POST" action="">
            
            <div class="bienvenida">		
				<h2>Test</h2>
				<div>
					Bienvenido : <?php echo $usuarion." ".$usuarioa; ?> <br>
					<br>
					A continuación realizará un test, para analizar sus habilidades, aptitudes y competencias en base a sus respuestas, no tiene
					tiempo limite para responder.
					
					
				</div>
				<br>
				<input type=submit name="btnContinuar" value="Continuar" required=""><br><br>
			</div>
            
        </form>        
        
        
        <?php 
		if(@$_REQUEST['btnContinuar']=="Continuar"){
			$rut= $_GET['rut'];
                        echo "<script language='JavaScript'>location = 'cliente.php'</script>";
                }
		
		?>
	

	 
</body>
</html>