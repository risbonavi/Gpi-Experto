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
			
			<!analitico 4 ok>
			<div class="preguntas">
                        <strong>Si un amigo se encuentra gravemente enfermo, y recurre a usted para que lo ayude:</strong>		
			<br> <br>
			<input type=radio name="pregunta1" value="0" checked="checked">a)	Usted lo lleva a distintos especialistas, hasta dar con el indicado y así tratar su problema.<br>
			<input type=radio name="pregunta1" value="1">b)	Lo lleva hacia un médico general, para que identifique el origen de la enfermedad y así lo derive a un especialista.<br>
			<input type=radio name="pregunta1" value="0">c)	Lo lleva hacia un especialista, ya que los síntomas que padece su amigo ya los ha tenido alguien cercano y por ende conoce la solución.<br>
			</div>
			<br>
			
			<div class="preguntas">
			 <strong>Cuántos meses tienen 28 días?</strong>
			<br> <br>
			<input type=radio name="pregunta2" value="0" checked="checked">a) Ningún mes.<br>
			<input type=radio name="pregunta2" value="0">b)	Un mes.<br>
			<input type=radio name="pregunta2" value="1">c)	Es otra la respuesta.<br>
			</div>
			<br>
			
			<div class="preguntas">
                          <strong>Cuándo estás esperando en un semáforo:</strong>  
			<br> <br>
			<input type=radio name="pregunta3" value="0" checked="checked">a) Esperas a que cambie para seguir.<br>
			<input type=radio name="pregunta3" value="1">b)	Te fijas mientras esperas en cuanto tiempo y de que forma salir mas rapidamente.<br>
			<input type=radio name="pregunta3" value="0">c)	Usted espera relajadamete escuchando música.<br>
			</div>
			<br>
			
			<div class="preguntas">
			 <strong>¿Qué número sigue en la serie? 36,12,42,14...</strong> 
			<br> <br>
			<input type=radio name="pregunta4" value="0" checked="checked">56<br>
			<input type=radio name="pregunta4" value="0">28<br>
			<input type=radio name="pregunta4" value="1">54<br>
			</div>
			<br>
			
			
			
			
			<!Competitivo 4 ok>
			
			<div class="preguntas">
			 <strong>En una competencia física, ustéd: </strong>
			<br> <br>
			<input type=radio name="pregunta9" value="1" checked="checked">a)	Busca ser siempre el primero<br>
			<input type=radio name="pregunta9" value="0">b)	Prefiere dejar ganar a los demás<br>
			<input type=radio name="pregunta9" value="0">c)	Prefiere dejar ganar a su amigo que le cuesta mas.<br>
			</div>
			<br>
			
			<div class="preguntas">
			 <strong>En cuánto al trabajo, ustéd siempre busca:</strong>
			<br> <br>
			<input type=radio name="pregunta10" value="0" checked="checked">a)	Cumplir con las tareas que se le entregan<br>
			<input type=radio name="pregunta10" value="1">b)	Ascender de cargo rapidamente<br>
			<input type=radio name="pregunta10" value="0">c)	Aprender nuevas tecnicas de desarrollo personal<br>
			</div>
			<br>
			
			<div class="preguntas">
			 <strong>Cuándo usted pierde en alguna competencia:</strong>
			<br> <br>
			<input type=radio name="pregunta11" value="0" checked="checked">a)	Se deprime.<br>
			<input type=radio name="pregunta11" value="0">b)	Le da igual.<br>
			<input type=radio name="pregunta11" value="1">c)	Me motiva a esformame mas.<br>
			</div>
			<br>
			
			<div class="preguntas">
			 <strong>Ustéd busca demostrar sus logros a los demás:</strong>
			<br> <br>
			<input type=radio name="pregunta12" value="1" checked="checked">a)	Sí, porque me agrada ser el mejor. <br>
			<input type=radio name="pregunta12" value="0">b)	Le da igual.<br>
			<input type=radio name="pregunta12" value="0">c)	No, perfiero que mi grupo se destaque.<br>
			</div>
			<br>
			
		
			<!conector 4 ok>
			<div class="preguntas">
			 <strong>Cuándo dos de tus amigos están "peleados" por algún motivo o razón, ¿Cuál es tu postura?</strong>
			<br> <br>
			<input type=radio name="pregunta17" value="1" checked="checked">a) Sabes realmente lo que paso, por eso apoyas al que encuentras tiene la razón.<br>
			<input type=radio name="pregunta17" value="0">b)	Mantienes cierta distancia del conflicto, es mejor que ellos solucionen sus diferencias.<br>
			<input type=radio name="pregunta17" value="0">c)	Intentas de alguna forma que se vuelvan a llevar bien, crees que no hay razón para que estén distanciados.<br>
			</div>
			<br>

			
                      
			
			<input href="cliente_tactico_1" type=submit name="btnContinuar" value="Continuar"><br>

		    </form>


		
		<?php 
		if(@$_REQUEST['btnContinuar']=="Continuar"){
			
			$rut=$_GET['rut'];        
			//&rut=$rut  
			
			$p1 = $_POST['pregunta1'];
			$p2 = $_POST['pregunta2'];
			$p3 = $_POST['pregunta3'];
			$p4 = $_POST['pregunta4'];
                        
            $analitico = $p1+$p2+$p3+$p4;
						
			$p1 = $_POST['pregunta9'];
			$p2 = $_POST['pregunta10'];
			$p3 = $_POST['pregunta11'];
			$p4 = $_POST['pregunta12'];
                        
            $competitivo = $p1+$p2+$p3+$p4;
						
			$p1 = $_POST['pregunta17'];
						
			$conector = $p1;
						
			echo "<script language='JavaScript'>location = 'cliente_tactico_1.php?anali=$analitico&competi=$competitivo&conect=$conector&rut=$rut'</script>";
		
            }
                
                
            
		?>
	</div>
	

	 
</body>
</html>


