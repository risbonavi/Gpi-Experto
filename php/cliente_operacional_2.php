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

    <div class="bienvenida"><h3>Bienvenido<?php echo @$_SESSION['userx'];?></h3></div>
	</br>
	

	<?php
	include ("../menu2.php");
	?>
	<div class="bienvenida">
		
		<p><div class="formulario"><b>Test</b></div></p>
		
         	<form method="POST" action="">
                    <div class="preguntas">                                               
                        <!--Empatico 4 ok -->
			<div class="preguntas">
                         <b>Si ves a un amigo o amiga que no está bien o demuestra que algo le afecta, ¿Cómo te comportas?</b>
			<br> <br>
			<input type=radio name="pregunta29" value="1" checked="checked">a) Tiendes a acercarte y preguntarle que le ocurre, lo escuchas y le das algún consejo. <br>
			<input type=radio name="pregunta29" value="0">b) Te acercas e independiente de lo que le pase tratas de subirle el ánimo.<br>
			<input type=radio name="pregunta29" value="0">c) Te acercas y le preguntas que ocurre, pero no le das consejos, prefieres no entrometerte. <br>
			</div>
			<br>
                        
            <div class="preguntas">
                        <b>Una pareja de pololos, que además son amigos tuyos tienen una pelea y deciden terminar su relación amorosa, cada uno por su lado triste, se acerca a tí para hablar  de lo sucedido y te cuentan su respectiva versión de los hechos. ¿Que harás tú ante esta situación planteada?</b>  			
			<br> <br>
			<input type=radio name="pregunta30" value="0" checked="checked"> a) Decides marginarte del problema, ya que como dice el dicho: mejor no meterse en peleas de pareja.<br>
			<input type=radio name="pregunta30" value="0"> b) Piensas en ayudarlos, pero sabes que ellos siempre pelean, terminan y vuelven finalmente, así que dejas que se arreglen sus diferencias ellos.<br>
			<input type=radio name="pregunta30" value="1"> d) Eres objetivo y hablas con cada uno por separado y creas una instancia para que se junten y arreglen los problemas de manera tranquila y con autocr�tica por parte de cada uno.<br>
			</div>
			<br>
                        
            <div class="preguntas">
                <img src="../images/empatico.jpg" width="300px" height="300px"><br><b>Al ver esta imagen ¿Usted que siente?:</b>
			<br> <br>
			<input type=radio name="pregunta31" value="0" checked="checked">a) No siente nada. <br>
			<input type=radio name="pregunta31" value="1">b) Siente tristeza.<br>
			<input type=radio name="pregunta31" value="1">c) Siente felicidad.<br>
			</div>
			<br>
                        
                        <!--Responsable 4 ok -->
			<div class="preguntas">
                        <b>Cuando te vas a juntar con tus amigos para salir un sábado por la noche, y quedan de acuerdo en que se juntaran en cierta estación del metro:</b>
			<br> <br>
			<input type=radio name="pregunta49" value="0" checked="checked">a) Eres el primero en llegar, llegas a la hora acordada.<br>
			<input type=radio name="pregunta49" value="1">b)	No llegaras a la hora, pero avisas que estas atrasado.<br>
			<input type=radio name="pregunta49" value="0">c)	Te atrasaste, pero sabes que tus amigos también se atrasarán, sabes que siempre es así.<br>
			</div>
			<br>
                        
			<div class="preguntas">
                        <b>Usted tiene planificado una junta con uno de sus amigos, pero ocurre un pequeño problema, usted se ha quedado dormido, por lo visto usted no llegaría a la hora y es probable también que no alcance a llegar.¿Que haría usted en esta situación?</b>
			<br> <br>
			<input type=radio name="pregunta50" value="0" checked="checked"> No me preocupo por mi amigo y lo dejo plantado.<br>
			<input type=radio name="pregunta50" value="0">Pienso en llamarlo pero, sé que me esperara así que no lo hago.<br>
			<input type=radio name="pregunta50" value="1">Llamo a mi amigo y le cuento lo sucedido, le digo que llegaré lo más rápido posible, que si me puede esperar un poco y si es que no puede, que lo dejemos para otra ocasión y yo invito. <br>
			</div>
			<br>
                        
            <div class="preguntas">
                        <b>Si tiene que realizar una tarea para su trabajo, pero se encuentra sumamente cansado.¿Que decidiría?</b>
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
			                                               
                        $p1 = $_POST['pregunta29'];
			$p2 = $_POST['pregunta30'];
			$p3 = $_POST['pregunta31'];
			$p4 = $_POST['pregunta32'];
                        
                        $empatico = $p1+$p2+$p3+$p4;
                        if($empatico>=3)
                            $empatico = true;
                                                
                        $p1 = $_POST['pregunta49'];
			$p2 = $_POST['pregunta50'];
			$p3 = $_POST['pregunta51'];
			$p4 = $_POST['pregunta52'];
                        
                        $responsable = $p1+$p2+$p3+$p4;
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


