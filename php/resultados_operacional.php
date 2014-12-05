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
                
                        $arm = $_GET['arm'];//2
                        $dis = $_GET['dis'];//7
                        $emp = $_GET['emp'];//8
                        $res = $_GET['res'];//13
                        $cargo = 'Sin perfil para la empresa';
                        
                   if($arm >= 3 && $dis >= 2 && $emp>=2 &&$res>=2)
                                $cargo = 'Asistente RR.HH';
                        if($arm >= 3 && $dis >= 2  &&$res>=2)
                                $cargo = 'Diseñador de Moda';
                       if( $dis >= 2  &&$res>=2)
                                $cargo = 'Asistente Contador';
                        if($arm >= 3  && $emp>=2 &&$res>=2)
                                $cargo = 'Operario Control de Calidad';
                        if($dis >= 2 && $emp>=2 &&$res>=2)
                                $cargo = 'Ejecutivo atencion al cliente';

                        
                                
                        
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