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

			<div class="preguntas">
			 <strong>Frente a un problema que lo afecte en su vida diaria como actual</strong>
			<br> <br>
			<input type=radio name="pregunta18" value="1" checked="checked">a) Trata de resolver el problema rapidamente.<br>
			<input type=radio name="pregunta18" value="0">b)	Entinede las causas antes de resolverlo.<br>
			<input type=radio name="pregunta18" value="0">c)	Evade los problemas.<br>
			</div>
			<br>
			
			<div class="preguntas">
			 <strong>Que opina sobre el crecimiento de la comunidad Haitiana en Chile</strong>
			<br> <br>
			<input type=radio name="pregunta19" value="1" checked="checked">a) Esta bien se les ayuda para que tengan una vida mejor.<br>
			<input type=radio name="pregunta19" value="0">b)	No me gusta, existe menos trabajo y opurtunidades para las personas cchilenas.<br>
			<input type=radio name="pregunta19" value="0">c)	Me es indiferente<br>
			</div>
			<br>
			
			<div class="preguntas">
			 <strong>¿Cree en el destino?</strong>
			<br> <br>
			<input type=radio name="pregunta20" value="1" checked="checked">a)Si, todo esta enlazado de algun modo <br>
			<input type=radio name="pregunta20" value="0">b)	Si, Dios dirige todo<br>
			<input type=radio name="pregunta20" value="0">c)	No, cada uno crea su destino.<br>
			</div>
			<br>
			
			<!--Desarrollador 3 ok-->
			<div class="preguntas">
			 <strong>Si tuviera a cargo un  grupo de trabajo y observa que uno de los parcipantes no avansa al mismo ritmo siendo que se esfuerza igual que los demás, que haría usted:</strong>
			<br> <br>

			<input type=radio name="pregunta21" value="1" checked="checked">a) Lo despide<br>
			<input type=radio name="pregunta21" value="0">b) Le brinda apoyo e incentiva a seguir<br>
			<input type=radio name="pregunta21" value="0">c) Le da un utimatum<br>
			</div>
			<br>
			
                        
            <div class="preguntas">
			 <strong>Se te hace fácil reconocer el potencial de quienes te rodean, por eso:</strong>
			<br> <br>
			<input type=radio name="pregunta22" value="1" checked="checked">a)	Les recomiendas que sigan así, se enfoquen en un único objetivo para lograr desarrollarse mejor. <br>
			<input type=radio name="pregunta22" value="0">b)		Los orientas a que exploren distintas áreas.<br>
			<input type=radio name="pregunta22" value="0">c)		Los motivas para que enfrenten nuevos desafíos que los harán desarrollarse. <br>
			</div>
			<br>
                        
            <div class="preguntas">
			 <strong>Un dia vas caminando por la calle y ves un anuncio que es saltar en paracaida de un avión en conjunto de tus amigos a un precio imperdible. ¿Que haces?</strong>

			<br> <br>
			<input type=radio name="pregunta23" value="1" checked="checked">a) Piensas en llamar a tus amigos pero lo conoces  y sabes que no le gustan este tipo de actividades <br>
			<input type=radio name="pregunta23" value="0"> b) Lo piensas y rápidamente lo ignoras.<br>
			<input type=radio name="pregunta23" value="0">c) Llamas a tus amigos y los motivas enseguida a para que aprovechen la oportunidad. <br>
			</div>
			<br>
                       
			

			
			<!--Disiplinado 3 ok-->
			<div class="preguntas">

			 <strong>Cuando realizas una fiesta en tu casa, la mejor forma de hacerla es:</strong>
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
			 <strong>Cuando te vas de vacaciones, y llegas a una casa en la playa que te presto un familiar , y la encuentras sucia y desordenada, usted:</strong>
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


