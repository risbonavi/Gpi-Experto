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
			
			<!--Comunicador-->
			<div class="preguntas">
                        <b>En su etapa escolar, ¿alguna vez  perteneció a algún centro de alumnos o cargo dentro de su curso? ¿Cuál?:</b>
			<br> <br>
			<input type=radio name="pregunta13" value="1" checked="checked">a) Presidente del curso /centro de alumnos o delegado. <br>
			<input type=radio name="pregunta13" value="0">b)	Secretario o tesorero.<br>
			<input type=radio name="pregunta13" value="0">c)	No me interesé nunca en esas actividades.<br>
			</div>
			<br>
			
			<div class="preguntas">
                        <b>Cuando alguien que te rodea tiene alguna duda con alguna tarea o concepto, tú:</b>
			<br> <br>
			<input type=radio name="pregunta14" value="0" checked="checked">a) Esperas que te pregunte para ver si es que le ayudas o  no.<br>
			<input type=radio name="pregunta14" value="0">b)	No eres bueno explicando, por eso prefieres que alguien más le ayude.<br>
			<input type=radio name="pregunta14" value="1">c)	Le ofreces tu ayuda en intentas aclararle las dudas.<br>
			</div>
			<br>
			
			<div class="preguntas">
                        <b>En una reunion con amigos:</b>
			<br> <br>
			<input type=radio name="pregunta15" value="0" checked="checked">a)	Escuchas las opiniones que sus amigos tiene sobre usted.<br>
			<input type=radio name="pregunta15" value="0">b)	No le gusta compartir con amistades.<br>
			<input type=radio name="pregunta15" value="1">c) Te gusta ser escuchado en todo momento.<br>
			</div>
			<br>
		
			<div class="preguntas">
                        <b>Es el matrimonio de un amigo  y me pide que haga un  pequeño discurso delante de los asistente . ¿Cuál es su respuesta?</b>
			<br> <br>
			<input type=radio name="pregunta16" value="1" checked="checked">a)   No, por que me da verguenza<br>
			<input type=radio name="pregunta16" value="0">b) Lo piensas  pero le dijo que no . Porque no tengo nada preparado.<br>
			<input type=radio name="pregunta16" value="0">c) Aceptas inmediatamente.<br>
			</div>
			<br>
			<!--Emprendedor-->
			<div class="preguntas">
                        <b>Cuando logras cumplir un objetivo, tú:</b>
			<br> <br>
			<input type=radio name="pregunta33" value="0" checked="checked">a)	Te sientes feliz por tu logro.<br>
			<input type=radio name="pregunta33" value="1">b)	Te sientes conforme, pero crees que necesitas seguir avanzando.<br>
			<input type=radio name="pregunta33" value="0">c)	No te conformas, piensas que fue muy fácil.<br>
			</div>
			<br>
                        
                        <div class="preguntas">
                        <b>Si quisiera adquirir un  producto que le sea de utilidad, pero se encuentra con poco dinero para comprarlo porque aun no es fin de mes.  ¿Qué haría para obtenerlo?.</b>
			<br> <br>
			<input type=radio name="pregunta34" value="0" checked="checked">a) Esperaría el pago, no tengo apuro por conseguirlo.<br>
			<input type=radio name="pregunta34" value="1">b) Busco la forma de tenerlo en mi poder rápidamente. <br>
			<input type=radio name="pregunta34" value="0">c) No soy una persona que la empuje el consumismo.<br>
			</div>
			<br>
                        
                        <div class="preguntas">
                        <b>Caminando un dia por la ciudad encuentras unos trozo de madera en muy buen estado. ¿Cual sería tu actitud?</b>
			<br> <br>
			<input type=radio name="pregunta35" value="1" checked="checked">a) La recoges y te las llevas definiendo en el momento las cosas que vas hacer con ella.<br>
			<input type=radio name="pregunta35" value="0">b) No le tomas importancia y sigues tu camino.<br>
			<input type=radio name="pregunta35" value="0">c)  La ves y la examinas pero sigues tu camino.<br>
			</div>
			<br>
                      
			
			<input type=submit name="btnContinuar" value="Continuar"><br>

		    </form>


		
		<?php 
		if(@$_REQUEST['btnContinuar']=="Continuar"){
			
			$p1 = $_POST['pregunta13'];
			$p2 = $_POST['pregunta14'];
			$p3 = $_POST['pregunta15'];
                        $p4 = $_POST['pregunta16'];
			                        
                        $analitico = $p1+$p2+$p3+$sp4;
                        if($analitico>=2)
                            $analitico = true;
                        
                        
			$p1 = $_POST['pregunta33'];
			$p2 = $_POST['pregunta34'];
			$p3 = $_POST['pregunta35'];
                        
                        $armonico = $p1+$p2+$p3;
                        if($armonico>=2)
                            $armonico = true;
                        
       
							
				echo "<script language='JavaScript'>location = 'cliente_estrategico_3.php?ana=$analitico&comp=$competitivo'</script>";
				
		}
                
                
                if($analitico = true && $emprendedor = true && $desarrollador = true)
                        $cargo ='Gerente';
		
		?>
	</div>
	

	 
</body>
</html>


