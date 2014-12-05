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
        
	<div class="bienvenida">
		
		<p><div class="formulario"><b>Seleccione un Cargo</b></div></p>
        <b>Nivel Estratégico</b>
        <br><br>
	<form method="POST" action="">
        <div class="centrar">
                <table style="width:100%;">
					<select name="cbo1">
						<option selected value="">Elegir Cargo</option>
						<option value="gerente_general">Gerente General</option>
						<option value="gerente_administrativo">Gerente Administrativo</option>
						<option value="gerente_comercial">Gerente Comercial</option>
						<option value="gerente_produccion">Gerente de Produccion</option>
						<option value="gerente_finanzas">Gerente de Finanzas</option>
						<option value="gerente_RRHH">Gerente RR.HH</option>
						
					</select>
                </table>
				
			
         </div>
				<br><br>
				<b>Nivel Táctico</b>
				<br><br>
        <div class="centrar">
                <table style="width:100%;">
         	 <select name="cbo2">
					<option selected value="">Elegir Cargo</option>
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
         	 <select name="cbo3">
					<option selected value="">Elegir Cargo</option>
                    <option value="asistente_rrhh">Asistente de RRHH</option>
                    <option value="diseñador_moda">Diseñadores de Moda</option>
                    <option value="asistente_contador">Asistente de Contador</option>
                    <option value="operario_control">Operarios de Control de Calidad</option>
                    <option value="ejecutivos_clientes">Ejecutivos de Atención al Cliente</option>
                </select>
                </table>
        </div>        
		<p><input type="submit" value="Consultar" name="btnConsultar"></p>
        <br><br>
		
	
	
	
	<?php if(@$_REQUEST['btnConsultar']=="Consultar"){
			
			$rut="";
			$nombres="";
			$apellidos="";
			$nivel="";
			$cargo="";
			$correo="";
			
			$cbo1 = $_POST['cbo1'];
			$cbo2 = $_POST['cbo2'];
			$cbo3 = $_POST['cbo3'];			
			
			$cargo=trim($cbo1.$cbo2.$cbo3);
			//echo "este es el cargo:---->".$cargo;
			$buscar = mysql_query("SELECT * FROM transacciones WHERE cargo_final='$cargo'");
			if(mysql_num_rows($buscar)>0)
			{ ?>
			<b>Listado de Clientes con el Perfil Seleccionado</b>
			<div class="centrar2">
				<div class="CSSTableGenerator" >
				<table>
				<tr>
					  <td><strong>Rut</strong></td>
					  <td><strong>Nombre</strong></td>
					  <td><strong>Apellido</strong></td>
					  <td><strong>Nivel</strong></td>
					  <td><strong>Cargo Propuesto</strong></td>
					  <td><strong>Correo</strong></td>
					</tr>
				<?php
					while($datos = mysql_fetch_array($buscar))
					{
						 $rut=trim($datos['rut']);
						 $nivel=trim($datos['Nivel']);
						 
						 $sql_encuestados = mysql_query("SELECT * FROM encuestados WHERE rut='$rut'");
							if(mysql_num_rows($sql_encuestados)>0){ 
								while($d_encuentados = mysql_fetch_array($sql_encuestados)){
																		
									$nombres=trim($d_encuentados['nombres']);
									$apellidos=trim($d_encuentados['apellidos']);
									$correo=trim($d_encuentados['correo']);
								}
							}
					 ?>
					 <tr>
					  <td><?php echo $rut;?></td>
					  <td><?php echo $nombres;?></td>
					  <td><?php echo $apellidos?></td>
					  <td><?php echo $nivel?></td>
					  <td><?php echo $cargo;?></td>
					  <td><a href="mailto:<?php echo $correo;?>?body=Estimado <?php echo $nombres." ".$apellidos;?>: a sido seleccionado para el cargo <?php echo $cargo;?>"><?php echo $correo;?></a></td>
					 
					  </tr>
					 <?php
					} ?>
				</table>				
				<?php
				}else{
					echo "No Existen Clientes Asociados a ese Cargo";
				}
				
			}
			?>
				</div>
			</div>
		</div> 
	</form>
	
</body>
</html>
   
   