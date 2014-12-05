<?php
session_start();
?>

<!DOCTYPE HTML>
<html>
  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <title>Test de Postulacion</title>

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
	?>
	
	<div class="bienvenida">
		
		<p><div class="formulario"><b>Test</b></div></p>
		
         	<form method="POST" action="">
			
			<!--Flexible-->
			<div class="preguntas">
                        <b>¿Alguna vez ha viajado ”mochileando”?<br> <br></b>
			<input type=radio name="pregunta37" value="0" checked="checked">a)	No me atrevo a hacerlo, me gusta organizar bien mis viajes.	<br>
			<input type=radio name="pregunta37" value="1">b)	Si lo he hecho, me gusta la idea de no saber cómo llegare a mi destino.<br>
			<input type=radio name="pregunta37" value="0">c)	Aun no lo hago, pero tengo intenciones de hacerlo pronto.	<br>
			</div>
			<br>

                        <div class="preguntas">
                        <b>¿Cuánto tardas en prepararte (ducharte, vestirte, etc.) para ir a algun evento?<br> <br></b>
			<input type=radio name="pregunta38" value="0" checked="checked"> a)	15 o 20 minutos.<br>
			<input type=radio name="pregunta38" value="0"> b)	20 a 30 minutos.<br>
			<input type=radio name="pregunta38" value="1">c)	Más de 30 minutos. <br>
			</div>
			<br>
                        
                        <div class="preguntas">
                        <b>En una cita con una persona que sea de su interés:</b>
			<br> <br>
			<input type=radio name="pregunta39" value="0" checked="checked">a) Prefiere que sea planificada.<br>
			<input type=radio name="pregunta39" value="1">b) Que sea espontanea.<br>
			<input type=radio name="pregunta39" value="0">c) No le agradan las citas.<br>
			</div>
			<br>
                        

			
			<!--Futurista-->
			<div class="preguntas">
                        <b>Acaba de recibir una herencia inesperadamente ¿Que harìa usted ante esta situación?</b>
			<br> <br>
			<input type=radio name="pregunta41" value="0" checked="checked">a) Regalo todo mi dinero a obras beneficas.<br>
			<input type=radio name="pregunta41" value="0">b) Me gasto el dinero en lo que siempre soñe tener.<br>
			<input type=radio name="pregunta41" value="1">c) Invierto el dinero en una actividad que me genere ingresos en el futuro.<br>
			</div>
			<br>
                        
                        <div class="preguntas">
                        <b>Usted a pensado en el futuro, divagando</b>
			<br> <br>
			<input type=radio name="pregunta42" value="0" checked="checked"> No, prefiero centranme en vivir dia a dia.<br>
			<input type=radio name="pregunta42" value="1"> Si, siempre creo imagenes de lo podria llegar a realizar.<br>
			<input type=radio name="pregunta42" value="0"> A veces, pero prefiero centrarme en el dia a dia.<br>
			</div>
			<br>
                        
                        <div class="preguntas">
                        <b>Antes de salir de su hogar, usted:</b>
			<br> <br>
			<input type=radio name="pregunta43" value="0" checked="checked"> Planifica detalladamente.<br>
			<input type=radio name="pregunta43" value="1"> Se imagina como sera su dia.<br>
			<input type=radio name="pregunta43" value="0"> Prefiere no planificar.<br>
			</div>
			<br>
                      
			
			<input type=submit name="btnContinuar" value="Continuar"><br>

		    </form>


		
		<?php 
		if(@$_REQUEST['btnContinuar']=="Continuar"){
			
			$rut=$_GET['rut'];        
			//&rut=$rut 
			
			$p1 = $_POST['pregunta37'];
			$p2 = $_POST['pregunta38'];
			$p3 = $_POST['pregunta39'];
                        
                        $flexible = $p1+$p2+$p3;
                        
                        
                        $p1 = $_POST['pregunta41'];
			$p2 = $_POST['pregunta42'];
			$p3 = $_POST['pregunta43'];
                        
                        $futurista = $p1+$p2+$p3;
                        $ana = $_GET['ana'];
                        $comp = $_GET['comp'];
                        $emp = $_GET['emp'];
                        $com = $_GET['com'];
                        
            echo "<script language='JavaScript'>location = 'cliente_estrategico_4.php?ana=$ana&comp=$comp&emp=$emp&com=$com&fut=$futurista&flex=$flexible&rut=$rut'</script>";
		}
                
		
		?>
	</div>
	

	 
</body>
</html>


