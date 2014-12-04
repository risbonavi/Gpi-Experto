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
			
			<!analitico 4 ok>
			<div class="preguntas">
                            <strong>Si un amigo de usted se encuentra gravemente enfermo, y recurre a usted para pedir consejo:	</strong>		
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
			<input type=radio name="pregunta2" value="0">b)	Un mes<br>
			<input type=radio name="pregunta2" value="1">c)	Es otra la respuesta<br>
			</div>
			<br>
			
			<div class="preguntas">
                          <strong> Cuando estas esperando en un semaforo</strong>  
			<br> <br>
			<input type=radio name="pregunta3" value="0" checked="checked">a) Esperas a que cambie para seguir<br>
			<input type=radio name="pregunta3" value="1">b)	Te fijas mientras esperas en cuanto tiempo y de que forma salir mas rapidamente<br>
			<input type=radio name="pregunta3" value="0">c)	Usted espera relajadamete escuchando musica<br>
			</div>
			<br>
			
			<div class="preguntas">
			 <strong>¿Que numero sigue en la serie? 36,12,42,14...</strong> 
			<br> <br>
			<input type=radio name="pregunta4" value="0" checked="checked">56<br>
			<input type=radio name="pregunta4" value="0">28<br>
			<input type=radio name="pregunta4" value="1">54<br>
			</div>
			<br>
			
			
			
			
			<!Competitivo 4 ok>
			
			<div class="preguntas">
			 <strong>En una competencia fisica, usted: </strong>
			<br> <br>
			<input type=radio name="pregunta9" value="1" checked="checked">a)	busca ser siempre el primero<br>
			<input type=radio name="pregunta9" value="0">b)	prefiere dejar ganar a los demás<br>
			<input type=radio name="pregunta9" value="0">c)	prefiere dejar ganar a su amigo que le cuesta mas.<br>
			</div>
			<br>
			
			<div class="preguntas">
			 <strong>En cuanto al trabajo, siempre busca:</strong>
			<br> <br>
			<input type=radio name="pregunta10" value="0" checked="checked">a)	cumplir con las tareas que se le entregan<br>
			<input type=radio name="pregunta10" value="1">b)	asender de cargo rapidamente<br>
			<input type=radio name="pregunta10" value="0">c)	aprender nuevas tecnicas de desarrollo personal<br>
			</div>
			<br>
			
			<div class="preguntas">
			 <strong>Cuando usted pierde en alguna competencia:</strong>
			<br> <br>
			<input type=radio name="pregunta11" value="0" checked="checked">a)	Se deprime<br>
			<input type=radio name="pregunta11" value="0">b)	Le da igual<br>
			<input type=radio name="pregunta11" value="1">c)	Me motiva a esformame mas<br>
			</div>
			<br>
			
			<div class="preguntas">
			 <strong>Usted busca demostrar sus logros a los demas</strong>
			<br> <br>
			<input type=radio name="pregunta12" value="1" checked="checked">a)	Si, porque me agrada ser el mejor <br>
			<input type=radio name="pregunta12" value="0">b)	Le da igual<br>
			<input type=radio name="pregunta12" value="0">c)	No, perfiero que mi grupo se destaque<br>
			</div>
			<br>
			
		
			<!conector 4 ok>
			<div class="preguntas">
			 <strong>Cuando dos de tus amigos están "peleados" por algún motivo o razón, ¿cuál es tu postura?</strong>
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
			
                        echo "<script language='JavaScript'>location = 'cliente_tactico_1.php'</script>";
                }
                
                
                if($analitico = true && $emprendedor = true && $desarrollador = true)
                        $cargo ='Gerente';
		
		?>
	</div>
	

	 
</body>
</html>


