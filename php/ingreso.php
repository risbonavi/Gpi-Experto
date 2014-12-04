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
            <div class="centrar">
				<table style="width:100%;">
				  <tr>
					<th><strong>Ingrese sus Nombres : </strong> </th>
					<th><input type="text" name=nombres" required=""><br></th>
				  </tr>
				  <tr>
					<td><strong>Ingrese sus Apellidos : </strong></td>
					<td><input type="text" name=apellidos" required=""><br></td>
				  </tr>
				  
				  <tr>
					<td><strong>Ingrese su Rut : </strong></td>
					<td><input type="text" name=rut"><br></td>
				  </tr>
				  
				  <tr>
					<td><strong>Ingrese su Email : </strong></td>
					<td><input type="text" name=email"><br></td>
				  </tr>
				  
				</table>
                <br>
            
            
				<input type=submit name="btnContinuar" value="Continuar" required=""><br>
			</div>
	</div>
            
        </form>
	
        
        
        
        <?php 
		if(@$_REQUEST['btnContinuar']=="Continuar"){
			
                        echo "<script language='JavaScript'>location = 'comenzar.php'</script>";
                }
		
		?>
	

	 
</body>
</html>