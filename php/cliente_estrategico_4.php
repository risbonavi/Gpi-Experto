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
			
			
			<!--Mandatario-->
			<div class="preguntas">
                        <b>Está a cargo de un proyecto, ¿Cuál es su forma de decidir la manera en que lo harán?</b>
			<br> <br>
			<input type=radio name="pregunta45" value="0" checked="checked">a) Lo discutimos entre todos y elegimos cual es la mejor idea.<br>
			<input type=radio name="pregunta45" value="1">b) Sé cómo abordarlo, le informo a mi grupo de trabajo la forma en que lo haremos.<br>
			<input type=radio name="pregunta45" value="0">c) Sé cómo desarrollarlo, lo discuto con mi grupo y lo elegimos si es que estamos de acuerdo.<br>
			</div>
			<br>
                        
                        <div class="preguntas">
                        <b>En la asociación de fútbol en usted participa sus compañeros y demás socios lo postulan como el candidato ideal para que usted dirige el club. ¿Cuál es la actitud que tomaría?</b>
			<br> <br>
			<input type=radio name="pregunta46" value="0" checked="checked">a) Usted rechazaria el puesto ya que tiene dudas de como poder ejercer su cargo.<br>
			<input type=radio name="pregunta46" value="0">b) Usted acepta el puesto pero siempre y cuando exista unanimidad total.<br>
			<input type=radio name="pregunta46" value="1">c) Usted toma las riendas del asunto y defiende su idea hasta todo.<br>
			</div>
			<br>
                        
                        <div class="preguntas">
                        <b>Si quisiera irse de paseo con sus amistades,  pero quiere ir a un lugar que le gusta demasiado, pero ellos no quieren ir al mismo lugar que Ud. ¿Qué haría?</b>
			<br> <br>
			<input type=radio name="pregunta47" value="0" checked="checked">a) Iría al lugar donde vaya la mayoría.<br>
			<input type=radio name="pregunta47" value="1">b) Saldría por su cuenta.<br>
			<input type=radio name="pregunta47" value="0">c) Intentaría convencerlos de su opinión.<br>
			</div>
			<br>
                        

			<!--Responsable-->
			<div class="preguntas">
                        <b>Cuándo se va a juntar con tus amigos para salir un sábado por la noche, y quedan de acuerdo en que se juntarán en cierta estación del metro:</b>
			<br> <br>
			<input type=radio name="pregunta49" value="0" checked="checked">a) Es el primero en llegar, llega a la hora acordada.<br>
			<input type=radio name="pregunta49" value="1">b)	No llegará a la hora, pero avisa que está atrasado.<br>
			<input type=radio name="pregunta49" value="0">c)	Se atrasa, pero sabe que sus amigos también se atrasaran, sabe que siempre es así.<br>
			</div>
			<br>
                        
			<div class="preguntas">                            
                        <b>Usted tiene planificado una junta con uno de sus amigos, pero ocurre un pequeño problema, usted se ha quedado dormido, por lo visto usted no llegaría a la hora y es probable también que no alcance a llegar.¿Qué haría usted en esta situación?</b>
			<br> <br>
			<input type=radio name="pregunta50" value="0" checked="checked"> No me preocupo por mi amigo y lo dejó plantado.<br>
			<input type=radio name="pregunta50" value="0">Pienso en llamarlo pero, sé que me esperara así que no lo hago.<br>
			<input type=radio name="pregunta50" value="1">LLamo a mi amigo y le cuento lo sucedido, le digo que llegaré lo más rápido posible, que si me puede esperar un poco y si es que no puede, que lo dejemos para otra ocasión y yo invito. <br>
			</div>
			<br>
                        
                        <div class="preguntas">
                        <b>Si tiene que realizar una tarea para su trabajo, pero se encuentra sumamente cansado. ¿Qué decidiría?</b>
			<br> <br>
			<input type=radio name="pregunta51" value="0" checked="checked">a) Dormiría porque sin cansancio rindo mejor. <br>
			<input type=radio name="pregunta51" value="1">b) Haría la tarea aunque no rinda lo suficiente. <br>
			<input type=radio name="pregunta51" value="0">c) Delegaría la tarea en otras personas para poder descansar <br>
			</div>
			<br>
                      
			
			<input type=submit name="btnFinalizar" value="Finalizar"><br>

		    </form>


		
		<?php 
		if(@$_REQUEST['btnFinalizar']=="Finalizar"){
			
            $rut=$_GET['rut'];        
			//&rut=$rut
			
                        $p1 = $_POST['pregunta45'];
			$p2 = $_POST['pregunta46'];
			$p3 = $_POST['pregunta47'];
			
                        
                        $mandatario = $p1+$p2+$p3;
                        
                        
                        $p1 = $_POST['pregunta49'];
			$p2 = $_POST['pregunta50'];
			$p3 = $_POST['pregunta51'];
			
                        
                        $responsable = $p1+$p2+$p3;
                        
                        
                        
                        $ana = $_GET['ana'];
                        $comp = $_GET['comp'];
                        $emp = $_GET['emp'];
                        $com = $_GET['com'];
                        $fut = $_GET['fut'];
                        $flex = $_GET['flex'];
                        
							
			            echo "<script language='JavaScript'>location = 'resultados_estrategico.php?ana=$ana&comp=$comp&emp=$emp&com=$com&fut=$fut&flex=$flex&man=$mandatario&res=$responsable&rut=$rut'</script>";

		}?>
               
	</div>
	

	 
</body>
</html>


