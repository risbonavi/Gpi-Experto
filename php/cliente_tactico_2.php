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

    <div class="bienvenida"><h3>Bienvenido <?php echo @$_SESSION['userx'];?></h3></div>
	</br>

	<?php
	include ("../menu2.php");
	?>
	
	<div class="bienvenida">
		
		<p><div class="formulario"><b>Test</b></div></p>
		
         	<form method="POST" action="">
			
                        
			
			<!--Flexible 3 ok-->
			<div class="preguntas">
			 <strong>¿Alguna vez haz  viajado mochileando?</strong><br> <br>
			<input type=radio name="pregunta37" value="0" checked="checked">a)	No me atrevo a hacerlo, me gusta organizar bien mis viajes.	<br>
			<input type=radio name="pregunta37" value="1">b)	Si lo he hecho, me gusta la idea de no saber cómo llegare a mi destino.<br>
			<input type=radio name="pregunta37" value="0">c)	Aun no lo hago, pero tengo intenciones de hacerlo pronto.	<br>
			</div>
			<br>

            <div class="preguntas">
			 <strong>¿Cuánto tardas en prepararte (ducharte, vestirte, etc.) para ir a algún evento?</strong><br> <br>
			<input type=radio name="pregunta38" value="0" checked="checked"> a)	15 o 20 minutos.<br>
			<input type=radio name="pregunta38" value="0"> b)	20 a 30 minutos.<br>
			<input type=radio name="pregunta38" value="1">c)	Más de 30 minutos. <br>
			</div>
			<br>
                        
            <div class="preguntas">
			 <strong>En una cita con una persona que sea de su interés:</strong>
			<br> <br>
			<input type=radio name="pregunta39" value="0" checked="checked">a) Prefiere que sea planificada.<br>
			<input type=radio name="pregunta39" value="1">b) Que sea espontanea.<br>
			<input type=radio name="pregunta39" value="0">c) No le agradan las citas.<br>
			</div>
			<br>
                        
			
			<!--Mandatario 3 ok-->
			<div class="preguntas">
			 <strong>Estas a cargo de un proyecto, ¿cuál es tu forma de decidir la manera en que lo harán?</strong>
			<br> <br>
			<input type=radio name="pregunta45" value="0" checked="checked">a) Lo discutimos entre todos y elegimos cual es la mejor idea.<br>
			<input type=radio name="pregunta45" value="1">b) Sí cómo abordarlo, le informo a mi grupo de trabajo la forma en que lo haremos.<br>
			<input type=radio name="pregunta45" value="0">c) Sí cómo desarrollarlo, lo discuto con mi grupo y lo elegimos si es que estamos de acuerdo.<br>
			</div>
			<br>
                        
            <div class="preguntas">
			 <strong>En la asociación de fútbol en que usted participa sus compañeros y demás socios lo postulan como el candidato ideal para que usted dirige el club. ¿Cual es la actitud que tomaría?</strong>

			<br> <br>
			<input type=radio name="pregunta46" value="0" checked="checked">a) Usted rechazaria el puesto ya que tiene dudas de como poder ejercer su cargo.<br>
			<input type=radio name="pregunta46" value="0">b) Usted acepta el puesto pero siempre y cuando exista unanimidad total.<br>
			<input type=radio name="pregunta46" value="1">c) Usted toma las riendas del asunto y defiende su idea hasta todo.<br>
			</div>
			<br>
                        
            <div class="preguntas">
			 <strong>Si quisiera irse de paseo con sus amistades,  pero quiere ir a un lugar que le gusta demasiado, pero ellos no quieren ir al mismo lugar que Ud. ¿Qué haría?.</strong>
			<br> <br>
			<input type=radio name="pregunta47" value="0" checked="checked">a) Iría al lugar donde vaya la mayoría.<br>
			<input type=radio name="pregunta47" value="1">b) Saldría por su cuenta.<br>
			<input type=radio name="pregunta47" value="0">c) Intentaría convencerlos de su opinión.<br>
			</div>
			<br>
                        

			<!Responsable 3 ok>
			<div class="preguntas">
			 <strong>Cuando te vas a juntar con tus amigos para salir un sábado por la noche, y quedan de acuerdo en que se juntaran en cierta estación del metro:</strong>
			<br> <br>
			<input type=radio name="pregunta49" value="0" checked="checked">a) Eres el primero en llegar, llegas a la hora acordada.<br>
			<input type=radio name="pregunta49" value="1">b)	No llegaras a la hora, pero avisas que estas atrasado.<br>
			<input type=radio name="pregunta49" value="0">c)	Te atrasaste, pero sabes que tus amigos también se atrasaran, sabes que siempre es así.<br>
			</div>
			<br>
                        
			<div class="preguntas">
			 <strong>Usted tiene planificada una junta con uno de sus amigos, pero ocurre un pequeño problema, usted se ha quedado dormido, por lo visto usted no llegaría a la hora.¿ Que haría usted en esta situación?</strong>
			<br> <br>
			<input type=radio name="pregunta50" value="0" checked="checked"> No me preocupo por mi amigo y lo dejo plantado.<br>
			<input type=radio name="pregunta50" value="0">Pienso en llamarlo pero, sí que me esperara así que no lo hago.<br>
			<input type=radio name="pregunta50" value="1">LLamo a mi amigo y le cuento lo sucedido, le digo que llegaré lo más rápido posible, que si me puede esperar un poco y si es que no puede, que lo dejemos para otra ocasión y yo invito. <br>
			</div>
			<br>
                        
            <div class="preguntas">
			 <strong>Si tiene que realizar una tarea para su trabajo, pero se encuentra sumamente cansado. ¿Que decidiría?</strong>
			<br> <br>
			<input type=radio name="pregunta51" value="0" checked="checked">a) Dormiría porque sin cansancio rindo mejor. <br>
			<input type=radio name="pregunta51" value="1">b) Haría la tarea aunque no rinda lo suficiente. <br>
			<input type=radio name="pregunta51" value="0">c) Delegaría la tarea en otras personas para poder descansar <br>
			</div>
			<br>
                      
			
			<input type=submit name="btnContinuar" value="Finalizar"><br>

		    </form>


		
		<?php 
		if(@$_REQUEST['btnContinuar']=="Finalizar"){
			
			//echo "<script language='JavaScript'>location = 'cliente_tactico_2.php?anali=$analitico&competi=$competitivo&conect=$conector&des=$desarrollador&disci=$Disiplinado'</script>";
			
			$analitico = $_GET['anali'];
			$competitivo = $_GET['competi'];
			$conector = $_GET['conect'];
			$desarrollador = $_GET['des'];
			$Disiplinado = $_GET['disci'];
			
			$p1 = $_POST['pregunta1'];
			$p2 = $_POST['pregunta2'];
			$p3 = $_POST['pregunta3'];
			$p4 = $_POST['pregunta4'];
                        
            $flexible = $p1+$p2+$p3+$p4;
            
                        
            $p1 = $_POST['pregunta5'];
			$p2 = $_POST['pregunta6'];
			$p3 = $_POST['pregunta7'];
			$p4 = $_POST['pregunta8'];
                        
            $mandatario = $p1+$p2+$p3+$p4;
            
			echo "<script language='JavaScript'>location = 'resultados_tactico.php?anali=$analitico&competi=$competitivo&conect=$conector&des=$desarrollador&disci=$Disiplinado&flex=$flexible&manda=$mandatario'</script>";

             
		}
                
                        
		?>
	</div>
	

	 
</body>
</html>


