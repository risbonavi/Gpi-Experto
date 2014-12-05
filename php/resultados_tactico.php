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


	<?php
	include ("../menu2.php");
	include( "../conexion_db/conexion_db.php");
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
						$cargo2 = 'sin_perfil';
                        
                        if($ana >= 3  && $comp>=2 && $con>=2 && $flex >= 2 && $man >= 2 ){
                                $cargo = 'Jefe RRHH';
								$cargo2 = 'jefe_rrhh';}
                        if($con >= 3 &&  $flex >= 2 &&  $man >=2){
                                $cargo = 'Jefe de Atención al cliente';
								$cargo2 = 'jefe_clientes';}
                        if($ana >= 3 && $comp >= 2 && $dis >= 2 ){
                                $cargo = 'Representante de Ventas';
								$cargo2 = 'representante_ventas';}
                        if($ana >= 3 &&  $comp >= 2 && $com>=2 && $dis >= 2 && $man >= 2){
                                $cargo = 'Supervisor de Planta';
								$cargo2 = 'supervisor_planta';}
                        if($ana >= 3 &&  $dis >= 2){
                                $cargo = 'Contador';
								$cargo2 = 'contador';}
                        
                                
                        
            echo "Su cargo mas óptimo en la empresa sería : ". $cargo; 
							
			
                ?>
                <div>
                    
                 <input type=submit name="btnContinuar" value="Salir"><br>
    </div>
            <br>
	</div>
	
        
        
        
        <?php 
		if(@$_REQUEST['btnContinuar']=="Salir"){
			$rut=$_GET['rut'];        
			
			
			$sql1 = "INSERT INTO transacciones VALUES ('','".$rut."','".$cargo2."','Tactico')"; 
			$verifica = mysql_query($sql1);
			
			if($verifica){echo "OK";}
			else{echo "ERROR".mysql_error();}
			
                        echo "<script language='JavaScript'>location = '../index.php'</script>";
                }
		
		?>
                
        
            
        </form>
	
        
        
       
	

	 
</body>
</html>