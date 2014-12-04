<?php
session_start();
?>

<!DOCTYPE HTML>
<html>
  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <title>Test2</title>

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
			
			
			<!--Mandatario-->
			<div class="preguntas">
                        <b>Estas a cargo de un proyecto, ¿cuál es tu forma de decidir la manera en que lo harán?</b>
			<br> <br>
			<input type=radio name="pregunta45" value="0" checked="checked">a) Lo discutimos entre todos y elegimos cual es la mejor idea.<br>
			<input type=radio name="pregunta45" value="1">b) Sé cómo abordarlo, le informo a mi grupo de trabajo la forma en que lo haremos.<br>
			<input type=radio name="pregunta45" value="0">c) Sé cómo desarrollarlo, lo discuto con mi grupo y lo elegimos si es que estamos de acuerdo.<br>
			</div>
			<br>
                        
                        <div class="preguntas">
                            <b>En la asociación de fútbol en usted participa sus compañeros y demás socios lo postulan como el candidato ideal para que usted dirige el club. ¿Cual es la actitud que tomaría?</b>

			<br> <br>
			<input type=radio name="pregunta46" value="0" checked="checked">a) Usted rechazaria el puesto ya que tiene dudas de como poder ejercer su cargo.<br>
			<input type=radio name="pregunta46" value="0">b) Usted acepta el puesto pero siempre y cuando exista unanimidad total.<br>
			<input type=radio name="pregunta46" value="1">c) Usted toma las riendas del asunto y defiende su idea hasta todo.<br>
			</div>
			<br>
                        
                        <div class="preguntas">
                        <b>Si quisiera irse de paseo con sus amistades,  pero quiere ir a un lugar que le gusta demasiado, pero ellos no quieren ir al mismo lugar que Ud. ¿Qué haría?.</b>
			<br> <br>
			<input type=radio name="pregunta47" value="0" checked="checked">a) Iría al lugar donde vaya la mayoría.<br>
			<input type=radio name="pregunta47" value="1">b) Saldría por su cuenta.<br>
			<input type=radio name="pregunta47" value="0">c) Intentaría convencerlos de su opinión.<br>
			</div>
			<br>
                        

			<!--Responsable-->
			<div class="preguntas">
                        <b>Cuando te vas a juntar con tus amigos para salir un sábado por la noche, y quedan de acuerdo en que se juntaran en cierta estación del metro:</b>
			<br> <br>
			<input type=radio name="pregunta49" value="0" checked="checked">a) Eres el primero en llegar, llegas a la hora acordada.<br>
			<input type=radio name="pregunta49" value="1">b)	No llegaras a la hora, pero avisas que estas atrasado.<br>
			<input type=radio name="pregunta49" value="0">c)	Te atrasaste, pero sabes que tus amigos también se atrasaran, sabes que siempre es así.<br>
			</div>
			<br>
                        
			<div class="preguntas">                            
                        <b>Usted tiene planificado una junta con uno de sus amigos, pero ocurre un pequeño problema, usted se ha quedado dormido, por lo visto usted no llegaría a la hora y es probable también que no alcance a llegar.¿ Que haría usted en esta situación?</b>
			<br> <br>
			<input type=radio name="pregunta50" value="0" checked="checked"> No me preocupo por mi amigo y lo dejó plantado.<br>
			<input type=radio name="pregunta50" value="0">Pienso en llamarlo pero, sé que me esperara así que no lo hago.<br>
			<input type=radio name="pregunta50" value="1">LLamo a mi amigo y le cuento lo sucedido, le digo que llegaré lo más rápido posible, que si me puede esperar un poco y si es que no puede, que lo dejemos para otra ocasión y yo invito. <br>
			</div>
			<br>
                        
                        <div class="preguntas">
                        <b>Si tiene que realizar una tarea para su trabajo, pero se encuentra sumamente cansado. ¿Que decidiría?</b>
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
			
            
            $p1 = $_POST['pregunta45'];
			$p2 = $_POST['pregunta46'];
			$p3 = $_POST['pregunta47'];
			
                        
                        $mandatario = $p1+$p2+$p3;
                        if($mandatario>=3)
                            $mandatario = true;
                        
            $p1 = $_POST['pregunta49'];
			$p2 = $_POST['pregunta50'];
			$p3 = $_POST['pregunta51'];
			
                        
                        $responsable = $p1+$p2+$p3;
                        if($responsable>=3)
                            $responsable = true;
							
			echo "<script language='JavaScript'>location = '../index.php'</script>";
		}
                
                
                if($analitico = true && $emprendedor = true && $desarrollador = true)
                        $cargo ='Gerente';
		
		?>
	</div>
	

	 
</body>
</html>


