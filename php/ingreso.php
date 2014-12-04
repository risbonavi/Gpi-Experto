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
	?>
	
    


        <form method="POST" action="">
            
            <div class="bienvenida">
		
            <h2>Ingrese sus Datos</h2>
            <div>
                <strong>Ingrese sus Nombres : </strong> 
            <input type="text" name=nombres" required=""><br>
                <strong>Ingrese sus Apellidos : </strong>
            <input type="text" name=apellidos" required=""><br>
                <strong>Ingrese su Rut : </strong>
            <input type="text" name=rut"><br>
                <strong>Ingrese su Email : </strong>
            <input type="text" name=email"><br>
            </div>
            
            <input type=submit name="btnContinuar" value="Continuar" required=""><br>
	</div>
            
        </form>
	
        
        
        
        <?php 
		if(@$_REQUEST['btnContinuar']=="Continuar"){
			
                        echo "<script language='JavaScript'>location = 'cliente.php'</script>";
                }
		
		?>
	

	 
</body>
</html>