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
			
			<!--Comunicador-->
			<div class="preguntas">
			En su etapa escolar, ¿alguna vez  perteneció a algún centro de alumnos o cargo dentro de su curso? ¿Cuál?
			<br> <br>
			<input type=radio name="pregunta13" value="1" checked="checked">a) Presidente del curso /centro de alumnos o delegado. <br>
			<input type=radio name="pregunta13" value="0">b)	Secretario o tesorero.<br>
			<input type=radio name="pregunta13" value="0">c)	No me interese nunca en esas actividades.<br>
			</div>
			<br>
			
			<div class="preguntas">
			Cuando alguien que te rodea tiene alguna duda con alguna tarea o concepto:
			<br> <br>
			<input type=radio name="pregunta14" value="0" checked="checked">a) Esperas que te pregunte para ver si es que le ayudas.<br>
			<input type=radio name="pregunta14" value="0">b)	No eres bueno explicando, por eso prefieres que alguien más le ayude.<br>
			<input type=radio name="pregunta14" value="1">c)	Le ofreces tu ayuda en intentas aclararle las dudas.<br>
			</div>
			<br>
			
			<div class="preguntas">
			En una reunion con amigos:
			<br> <br>
			<input type=radio name="pregunta15" value="0" checked="checked">a)	escuchas las opiniones que sus amigos tiene sobre usted<br>
			<input type=radio name="pregunta15" value="0">b)	no le gusta compartir con amistades<br>
			<input type=radio name="pregunta15" value="1">c) te gusta ser escuchado en todo momento<br>
			</div>
			<br>
		
			<div class="preguntas">
			Es el matrimonio de un amigo  y me pide que haga un  pequeño discurso delante de los asistente . ¿Cuales es su respuesta?
			<br> <br>
			<input type=radio name="pregunta16" value="1" checked="checked">a)a)   No, por que me da verguenza<br>
			<input type=radio name="pregunta16" value="0">b) Lo piensas  pero le dijo que no . Porque no tengo nada preparado.<br>
			<input type=radio name="pregunta16" value="0">c) Aceptas inmediatamente.<br>
			</div>
			<br>
		
		
			
			
			<!--Emprendedor-->
			<div class="preguntas">
			Cuando logras cumplir un objetivo:
			<br> <br>
			<input type=radio name="pregunta33" value="0" checked="checked">a)	Te sientes feliz por tu logro<br>
			<input type=radio name="pregunta33" value="1">b)	Te sientes conforme, pero crees que necesitas seguir avanzando.<br>
			<input type=radio name="pregunta33" value="0">c)	No te conformas, piensas que fue muy fácil.<br>
			</div>
			<br>
                        
            <div class="preguntas">
			Si quisiera adquirir un  producto que le sea de utilidad, pero se encuentra con poco dinero para comprarlo porque aun no es fin de mes.  ¿Qué haría para obtenerlo?.
			<br> <br>
			<input type=radio name="pregunta34" value="0" checked="checked">a) Esperaría el pago, no tengo apuro por conseguirlo.<br>
			<input type=radio name="pregunta34" value="1">b) Busco la forma de tenerlo en mi poder rápidamente. <br>
			<input type=radio name="pregunta34" value="0">c) No soy una persona que la empuje el consumismo.<br>
			</div>
			<br>
                        
            <div class="preguntas">
			Caminando un dia por la ciudad encuentras unos trozo de madera en muy buen estado. ¿Cual sería tu actitud?

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
			                        
                        $analitico = $p1+$p2+$p3;
                        if($analitico>=2)
                            $analitico = true;
                        
                        
			$p1 = $_POST['pregunta33'];
			$p2 = $_POST['pregunta34'];
			$p3 = $_POST['pregunta35'];
                        
                        $armonico = $p1+$p2+$p3;
                        if($armonico>=2)
                            $armonico = true;
                        
       
							
				echo "<script language='JavaScript'>location = 'cliente_Estrategico3.php?ana=$analitico&comp=$competitivo'</script>";
				
		}
                
                
                if($analitico = true && $emprendedor = true && $desarrollador = true)
                        $cargo ='Gerente';
		
		?>
	</div>
	

	 
</body>
</html>

