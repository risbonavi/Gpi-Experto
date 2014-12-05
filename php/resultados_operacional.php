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
		
            <h2>Resultados</h2>
            <div>
                <?php
                
                        $ana = $_GET['arm'];
                        $comp = $_GET['dis'];
                        $emp = $_GET['emp'];
                        $res = $_GET['res'];
                        $cargo = 'Sin perfil para la empresa';
                        
                   /*if($ana >= 3 && $comp >= 3 && $emp>=2 && $com >= 1 && $fut >= 2 && $flex >= 2 &&$res>=2 &&$man>=2)
                                $cargo = 'Gerente General';
                        if($ana >= 3 &&  $com >= 2 &&  $man >=2 && $res >= 2)
                                $cargo = 'Gerente Administrativo';
                        if($ana >= 3 && $comp >= 3 && $man >= 2 && $res >= 2)
                                $cargo = 'Gerente Comercial';
                        if($ana >= 3 && $comp >= 3 && $emp>=2 && $man >= 2 && $res >=2)
                                $cargo = 'Gerente Produccion';
                        if($ana >= 3 &&  $man >= 2 && $res >= 2)
                                $cargo = 'Gerente Finanzas';
                        if($ana >= 3 &&  $com >= 2  && $flex >= 2 && $man >= 2 && $res >= 2)
                                $cargo = 'Gerente RR.HH'; ARREGLAR SEGUN LOS NUMEROS PARA OPERACIONAL*/
                        
                                
                        
                            echo "Su cargo mas óptimo en la empresa sería : ". $cargo; 
                ?>
                <div>
                    
                 <input type=submit name="btnContinuar" value="Salir" required=""><br>
    </div>
            <br>
	</div>
	
        
        
        
        <?php 
		if(@$_REQUEST['btnContinuar']=="Salir"){
			
                        echo "<script language='JavaScript'>location = '../index.php'</script>";
                }
		
		?>
                
        
            
        </form>
	
        
        
       
	

	 
</body>
</html>