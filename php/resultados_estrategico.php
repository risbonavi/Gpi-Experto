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
                
                        $ana = $_GET['ana'];//1
                        $comp = $_GET['comp'];//3
                        $emp = $_GET['emp'];//8
                        $com = $_GET['com'];//4
                        $fut = $_GET['fut'];//11
                        $flex = $_GET['flex'];//10
                        $res = $_GET['res'];//13
                        $man = $_GET['man'];//12
                        $cargo = 'Sin perfil para la empresa';
						$cargo2 = 'sin_perfil';
                        
                   if($ana >= 3 && $comp >= 3 && $emp>=2 && $com >= 1 && $fut >= 2 && $flex >= 2 &&$res>=2 &&$man>=2){
                                $cargo = 'Gerente General';
								$cargo2 = 'gerente_general';}
                        if($ana >= 3 &&  $com >= 2 &&  $man >=2 && $res >= 2){
                                $cargo = 'Gerente Administrativo';
								$cargo2 = 'gerente_administrativo';}
                        if($ana >= 3 && $comp >= 3 && $man >= 2 && $res >= 2){
                                $cargo = 'Gerente Comercial';
								$cargo2 = 'gerente_comercial';}
                        if($ana >= 3 && $comp >= 3 && $emp>=2 && $man >= 2 && $res >=2){
                                $cargo = 'Gerente Produccion';
								$cargo2 = 'gerente_produccion';}
                        if($ana >= 3 &&  $man >= 2 && $res >= 2){
                                $cargo = 'Gerente Finanzas';
								$cargo2 = 'gerente_finanzas';}
                        if($ana >= 3 &&  $com >= 2  && $flex >= 2 && $man >= 2 && $res >= 2){
                                $cargo = 'Gerente RR.HH';
								$cargo2 = 'gerente_RRHH';}
                        
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
						
						$sql1 = "INSERT INTO transacciones VALUES ('','".$rut."','".$cargo2."','Estrategico')"; 
						$verifica = mysql_query($sql1);
						
						if($verifica){echo "OK";}
						else{echo "ERROR";}
						
                        echo "<script language='JavaScript'>location = '../index.php'</script>";
                }
		
		?>
                
        
            
        </form>
	
        
        
       
	

	 
</body>
</html>