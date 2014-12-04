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
			
			<!--analitico-->
			<div class="preguntas">
                        <b>Si un amigo de usted se encuentra gravemente enfermo, y recure a usted para pedir consejo:</b>			
			<br> <br>
			<input type=radio name="pregunta1" value="0" checked="checked">a)	Usted lo lleva a distintos especialistas, hasta dar con el indicado y así tratar su problema.<br>
			<input type=radio name="pregunta1" value="1">b)	Lo lleva hacia un médico general, para que identifique el origen de la enfermedad y así lo derive a un especialista.<br>
			<input type=radio name="pregunta1" value="0">c)	Lo lleva hacia un especialista, ya que los síntomas que padece su amigo ya los ha tenido alguien cercano y por ende conoce la solución.<br>
			</div>
			<br>
			
			<div class="preguntas">
                        <b>¿Cuántos meses tienen 28 días?</b>
			<br> <br>
			<input type=radio name="pregunta2" value="0" checked="checked">a) Ningún mes.<br>
			<input type=radio name="pregunta2" value="0">b)	Un mes.<br>
			<input type=radio name="pregunta2" value="1">c)	Es otra la respuesta.<br>
			</div>
			<br>
			
			<div class="preguntas">
                        <b>Cuando estas esperando en un semaforo</b>
			<br> <br>
			<input type=radio name="pregunta3" value="0" checked="checked">a) Esperas a que cambie para seguir.<br>
			<input type=radio name="pregunta3" value="1">b)	Te fijas mientras esperas en cuanto tiempo y de que forma salir mas rapidamente.<br>
			<input type=radio name="pregunta3" value="0">c)	Usted espera relajadamete escuchando musica.<br>
			</div>
			<br>
			
			<div class="preguntas">
                        <b>¿Que numero sigue en la serie? 36,12,42,14... </b>
			<br> <br>
			<input type=radio name="pregunta4" value="0" checked="checked">56.<br>
			<input type=radio name="pregunta4" value="0">28.<br>
			<input type=radio name="pregunta4" value="1">54.<br>
			</div>
			<br>
			<!--Competitivo-->
			
			<div class="preguntas">
                        <b>En una competencia fisica, usted:</b>
			<br> <br>
			<input type=radio name="pregunta9" value="1" checked="checked">a)	Busca ser siempre el primero.<br>
			<input type=radio name="pregunta9" value="0">b)	Prefiere dejar ganar a los demás.<br>
			<input type=radio name="pregunta9" value="0">c)	Prefiere dejar ganar a su amigo que le cuesta mas.<br>
			</div>
			<br>
			
			<div class="preguntas">
                        <b>En cuanto al trabajo, siempre busca:</b>
			<br> <br>
			<input type=radio name="pregunta10" value="0" checked="checked">a)	Cumplir con las tareas que se le entregan.<br>
			<input type=radio name="pregunta10" value="1">b)	Ascender de cargo rapidamente.<br>
			<input type=radio name="pregunta10" value="0">c)	Aprender nuevas tecnicas de desarrollo personal.<br>
			</div>
			<br>
			
			<div class="preguntas">
			<b>Cuando usted pierde en alguna competencia:</b>
			<br> <br>
			<input type=radio name="pregunta11" value="0" checked="checked">a)	Se deprime.<br>
			<input type=radio name="pregunta11" value="0">b)	Le da igual.<br>
			<input type=radio name="pregunta11" value="1">c)	Me motiva a esforzarme mas.<br>
			</div>
			<br>
			
			<div class="preguntas">
			<b>¿Usted busca demostrar sus logros a los demas?</b>
			<br> <br>
			<input type=radio name="pregunta12" value="1" checked="checked">a)	Si, porque me agrada ser el mejor.<br>
			<input type=radio name="pregunta12" value="0">b)	Me da igual.<br>
			<input type=radio name="pregunta12" value="0">c)	No, perfiero que mi grupo se destaque.<br>
			</div>
			<br>
			
			<input type=submit name="btnContinuar" value="Continuar"><br>

		    </form>


		
		<?php 
		if(@$_REQUEST['btnContinuar']=="Continuar"){
			
			$p1 = $_POST['pregunta1'];
			$p2 = $_POST['pregunta2'];
			$p3 = $_POST['pregunta3'];
			$p4 = $_POST['pregunta4'];
                        
                        $analitico = $p1+$p2+$p3+$p4;
                        if($analitico>=3)
                            $analitico = true;
            
			$p1 = $_POST['pregunta9'];
			$p2 = $_POST['pregunta10'];
			$p3 = $_POST['pregunta11'];
			$p4 = $_POST['pregunta12'];
                        
                        $competitivo = $p1+$p2+$p3+$p4;
                        if($competitivo>=3)
                        $competitivo = true;
						
			echo "<script language='JavaScript'>location = 'cliente_estrategico_2.php?ana=$analitico&comp=$competitivo'</script>";
      
		}
                
		
		?>
	</div>
	

	 
</body>
</html>


