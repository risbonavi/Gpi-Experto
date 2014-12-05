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

			<div class="preguntas">
			 <strong>Frente a un problema que lo afecte en su vida diaria ¿Cómo actúa?</strong>
			<br> <br>
			<input type=radio name="pregunta18" value="1" checked="checked">a) Trata de resolver el problema rápidamente.<br>
			<input type=radio name="pregunta18" value="0">b)	Entiende las causas antes de resolverlo.<br>
			<input type=radio name="pregunta18" value="0">c)	Evade los problemas.<br>
			</div>
			<br>
			
			<div class="preguntas">
			 <strong>¿Qué opina sobre el crecimiento de la comunidad Haitiana en Chile?</strong>
			<br> <br>
			<input type=radio name="pregunta19" value="1" checked="checked">a) Está bien, se les ayuda para que tengan una vida mejor.<br>
			<input type=radio name="pregunta19" value="0">b)	No me gusta, existe menos trabajo y opurtunidades para las personas chilenas.<br>
			<input type=radio name="pregunta19" value="0">c)	Me es indiferente<br>
			</div>
			<br>
			
			<div class="preguntas">
			 <strong>¿Cree en el destino?</strong>
			<br> <br>
			<input type=radio name="pregunta20" value="1" checked="checked">a)Sí, todo esta enlazado de algun modo <br>
			<input type=radio name="pregunta20" value="0">b)	Sí, Dios dirige todo<br>
			<input type=radio name="pregunta20" value="0">c)	No, cada uno crea su destino.<br>
			</div>
			<br>
			
			<!--Desarrollador 3 ok-->
			<div class="preguntas">
			 <strong>Si tuviera a cargo un  grupo de trabajo y observa que uno de los parcipantes no avanza al mismo ritmo siendo que se esfuerza igual que los demás, ¿Que haría ustéd?</strong>
			<br> <br>

			<input type=radio name="pregunta21" value="1" checked="checked">a) Lo despide.<br>
			<input type=radio name="pregunta21" value="0">b) Le brinda apoyo e incentiva a seguir.<br>
			<input type=radio name="pregunta21" value="0">c) Le da un ultimatum.<br>
			</div>
			<br>
			
                        
            <div class="preguntas">
			 <strong>Se le hace fácil reconocer el potencial de quiénes lo rodean, por eso:</strong>
			<br> <br>
			<input type=radio name="pregunta22" value="1" checked="checked">a)	Les recomienda que sigan así, se enfoquen en un único objetivo para lograr desarrollarse mejor. <br>
			<input type=radio name="pregunta22" value="0">b)		Los orientas a que exploren distintas áreas.<br>
			<input type=radio name="pregunta22" value="0">c)		Los motivas para que enfrenten nuevos desafíos que los harán desarrollarse. <br>
			</div>
			<br>
                        
            <div class="preguntas">
			 <strong>Un día vas caminando por la calle y ves un anuncio que es saltar en paracaida de un avión en conjunto con tus amigos a un precio imperdible. ¿Qué haces?</strong>

			<br> <br>
			<input type=radio name="pregunta23" value="1" checked="checked">a) Piensas en llamar a tus amigos pero lo conoces  y sabes que no le gustan este tipo de actividades <br>
			<input type=radio name="pregunta23" value="0"> b) Lo piensas y rápidamente lo ignoras.<br>
			<input type=radio name="pregunta23" value="0">c) Llamas a tus amigos y los motivas enseguida a para que aprovechen la oportunidad. <br>
			</div>
			<br>
                       
			

			
			<!--Disiplinado 3 ok-->
			<div class="preguntas">

			 <strong>Cuándo realizas una fiesta en tu casa, la mejor forma de hacerla es:</strong>
			<br> <br>
			<input type=radio name="pregunta25" value="0" checked="checked">a) Siempre es mejor improvisar las fiestas, si se planean no resulta como quiero.<br>
			<input type=radio name="pregunta25" value="0">b)	La organizo unos días antes, no requiero de mucho tiempo para tener todo en orden.<br>
			<input type=radio name="pregunta25" value="1">c)	Me gusta saber quién viene y quien no, para saber qué cosas comprar. No me gusta dejar todo a última hora, me gusta organizarla bien.<br>
			</div>
			<br>
			
			<div class="preguntas">
			 <strong>¿Cómo es tu estación de trabajo?</strong>
			<br> <br>
			<input type=radio name="pregunta26" value="1" checked="checked">a)	Me gusta tener un lugar amplio, tranquilo y ordenado, todo se me hace más fácil así. <br>
			<input type=radio name="pregunta26" value="0">b)	Amplio, no muy ordenado, me gusta probar nuevas cosas, lo que me dificulta tener orden.<br>
			<input type=radio name="pregunta26" value="0">c)	No muy amplio, pero tampoco pequeño, no necesito tener mucho espacio, me gusta tener todo cerca.<br>
			</div>
			<br>
                        
            <div class="preguntas">
			 <strong>Cuándo se vá de vacaciones, llegas a una casa en la playa que te prestó un familiar, y la encuentra sucia y desordenada, usted:</strong>
			<br> <br>
			<input type=radio name="pregunta27" value="0" checked="checked">a) Te instalas y descansas antes de ordenar y limpiar.<br>
			<input type=radio name="pregunta27" value="1">b) Ordenas y limpias hasta que todo quede como querias y luego te acuestas.<br>
			<input type=radio name="pregunta27" value="0">c) Piensas en ordenar pero finalmente decides en descansar.<br>
			</div>
			<br>
			
			
			<input type=submit name="btnContinuar" value="Continuar"><br>

		    </form>


		
		<?php 
		if(@$_REQUEST['btnContinuar']=="Continuar"){
			//echo "<script language='JavaScript'>location = 'cliente_estrategico_2.php?anali=$analitico&competi=$competitivo&conect=$conector'</script>";
			
			$rut=$_GET['rut'];        
			//&rut=$rut 
			
			$analitico = $_GET['anali'];
			$competitivo = $_GET['competi'];
					
			
			$p1 = $_GET['conect'];
			$p2 = $_POST['pregunta18'];
			$p3 = $_POST['pregunta19'];
			$p4 = $_POST['pregunta20'];
                        
                        $conector = $p1+$p2+$p3+$p4;
						
			$p1 = $_POST['pregunta21'];
			$p2 = $_POST['pregunta22'];
			$p3 = $_POST['pregunta23'];
			
                        $desarrollador = $p1+$p2+$p3;
						
			$p1 = $_POST['pregunta25'];
			$p2 = $_POST['pregunta26'];
			$p3 = $_POST['pregunta27'];
						
						$Disiplinado = $p1+$p2+$p3;
						
			echo "<script language='JavaScript'>location = 'cliente_tactico_2.php?anali=$analitico&competi=$competitivo&conect=$conector&des=$desarrollador&disci=$Disiplinado&rut=$rut'</script>";
			
		}
               
		
		?>
	</div>
	

	 
</body>
</html>


