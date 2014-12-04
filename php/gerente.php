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
        
	<div class="bienvenida">
		
		<p><div class="formulario"><b>Seleccione un Cargo</b></div></p>
        <b>Nivel Estrategico</b>
        <br><br>
        <div class="centrar">
                <table style="width:100%;">
         	 <select>
                    <option value="gerente_general">Gerente General</option>
                    <option value="gerente_administrativo">Gerente Administrativo</option>
                    <option value="gerente_comercial">Gerente Comercial</option>
                    <option value="gerente_produccion">Gerente de Produccion</option>
                    <option value="gerente_finanzas">Gerente de Finanzas</option>
                </select>
                </table>
                </div>
        <br><br>
        <b>Nivel Táctico</b>
        <br><br>
        <div class="centrar">
                <table style="width:100%;">
         	 <select>
                    <option value="jefe_rrhh">Jefe de Recursos Humanos</option>
                    <option value="jefe_clientes">Jefe Atencion a Clientes</option>
                    <option value="representante_ventas">Representante de Ventas</option>
                    <option value="supervisor_planta">Supervisor de Planta</option>
                    <option value="contador">Contador</option>
                </select>
                </table>
                </div>
        <br><br>
        <b>Nivel Operacional</b>
        <br><br>
        <div class="centrar">
                <table style="width:100%;">
         	 <select>
                    <option value="asistente_rrhh">Asistente de RRHH</option>
                    <option value="diseñadora_moda">Diseñadores de Moda</option>
                    <option value="asistente_contador">Asistente de Contador</option>
                    <option value="operario_control">Operarios de Control de Calidad</option>
                    <option value="operario_confeccion">Operarios de Confección</option
                    <option value="operarios_de_bodega">Operarios de Bodega</option>
                    <option value="ejecutivos_clientes">Ejecutivos de Atención al Cliente</option>
                </select>
                </table>
                </div>        
        <br><br>
	</div>
	
        
	 
</body>
</html>
   
   