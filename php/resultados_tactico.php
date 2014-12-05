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
                
                        $ana = $_GET['anali'];//1
                        $comp = $_GET['competi'];//3
                        $con = $_GET['conect'];//5
                        $com = $_GET['des'];//6
                        $dis = $_GET['disci'];//7
                        $flex = $_GET['flex'];//10
                        $man = $_GET['manda'];//12
                        $cargo = 'Sin perfil para la empresa';
                        
                        if($ana >= 3  && $comp>=2 && $con>=2 && $flex >= 2 && $man >= 2 )
                                $cargo = 'Jefe RRHH';
                        if($con >= 3 &&  $flex >= 2 &&  $man >=2)
                                $cargo = 'Jefe de Atención al cliente';
                        if($ana >= 3 && $comp >= 2 && $dis >= 2 )
                                $cargo = 'Representante de Ventas';
                        if($ana >= 3 &&  $comp >= 2 && $com>=2 && $dis >= 2 && $man >= 2)
                                $cargo = 'Supervisor de Planta';
                        if($ana >= 3 &&  $dis >= 2)
                                $cargo = 'Contador';
                        
                                
                        
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