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
                
                        $arm = $_GET['arm'];//2
                        $dis = $_GET['dis'];//7
                        $emp = $_GET['emp'];//8
                        $res = $_GET['res'];//13
                        $cargo = 'Sin perfil para la empresa';
						$cargo2 = 'sin_perfil';
                        
                   if($arm >= 3 && $dis >= 2 && $emp>=2 &&$res>=2){
                                $cargo = 'Asistente RR.HH';
								$cargo2 = 'asistente_rrhh';}
                        if($arm >= 3 && $dis >= 2  &&$res>=2){
                                $cargo = 'Diseñador de Moda';
								$cargo2 = 'diseñador_moda';}
                       if( $dis >= 2  &&$res>=2){
                                $cargo = 'Asistente Contador';
								$cargo2 = 'asistente_contador';}
                        if($arm >= 3  && $emp>=2 &&$res>=2){
                                $cargo = 'Operario Control de Calidad';
								$cargo2 = 'operario_control';}
                        if($dis >= 2 && $emp>=2 &&$res>=2){
                                $cargo = 'Ejecutivo atencion al cliente';
								$cargo2 = 'ejecutivos_clientes';}
						
						echo "Su cargo mas óptimo en la empresa sería : ". $cargo; 
						
						
			
                ?>
                <div>
                    
                 <input type=submit name="btnContinuar" value="Salir" required=""><br>
    </div>
            <br>
	</div>
	
        
        
        
        <?php 
		if(@$_REQUEST['btnContinuar']=="Salir"){
			$rut=$_GET['rut'];        
						
			$sql1 = "INSERT INTO transacciones VALUES ('','".$rut."','".$cargo."','Operacional')"; 
			$verifica = mysql_query($sql1);
			
			if($verifica){echo "OK";}
			else{echo "ERROR";}
			
                        echo "<script language='JavaScript'>location = '../index.php'</script>";
                }
		
		?>
                
        
            
        </form>
	
        
        
       
	

	 
</body>
</html>