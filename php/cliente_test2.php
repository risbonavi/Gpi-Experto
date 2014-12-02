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
			
			//analitico
			<div class="preguntas">
			Si un amigo de usted se encuentra gravemente enfermo, y recure a usted para pedir consejo:			
			<br> <br>
			<input type=radio name="pregunta1" value="0" checked="checked">a)	Usted lo lleva a distintos especialistas, hasta dar con el indicado y así tratar su problema.<br>
			<input type=radio name="pregunta1" value="1">b)	Lo lleva hacia un médico general, para que identifique el origen de la enfermedad y así lo derive a un especialista.<br>
			<input type=radio name="pregunta1" value="0">c)	Lo lleva hacia un especialista, ya que los síntomas que padece su amigo ya los ha tenido alguien cercano y por ende conoce la solución.<br>
			</div>
			<br>
			
			<div class="preguntas">
			¿Cuántos meses tienen 28 días?
			<br> <br>
			<input type=radio name="pregunta2" value="0" checked="checked">a) Ningún mes.<br>
			<input type=radio name="pregunta2" value="0">b)	Un mes<br>
			<input type=radio name="pregunta2" value="1">c)	Es otra la respuesta<br>
			</div>
			<br>
			
			<div class="preguntas">
			Cuando estas esperando en un semaforo
			<br> <br>
			<input type=radio name="pregunta3" value="0" checked="checked">a) Esperas a que cambie para seguir<br>
			<input type=radio name="pregunta3" value="1">b)	Te fijas mientras esperas en cuanto tiempo y de que forma salir mas rapidamente<br>
			<input type=radio name="pregunta3" value="0">c)	Usted espera relajadamete escuchando musica<br>
			</div>
			<br>
			
			<div class="preguntas">
			¿Que numero sigue en la serie? 36,12,42,14... 
			<br> <br>
			<input type=radio name="pregunta4" value="0" checked="checked">56<br>
			<input type=radio name="pregunta4" value="0">28<br>
			<input type=radio name="pregunta4" value="1">54<br>
			</div>
			<br>
			
			
			//Armonico
			
			<div class="preguntas">
			En el caso que en su empresa, le solicite a el personal retirarse temprano por fallas del sistema, pero con descuento de las horas no trabajadas, usted:
			<br> <br>
			<input type=radio name="pregunta5" value="1" checked="checked">Acepta sin problemas, prefiere retirase antes.<br>
			<input type=radio name="pregunta5" value="0">No esta deacuerdo con el descuento, no es su cilpa que el sistema no funcione.<br>
			<input type=radio name="pregunta5" value="0">Esta deacuerdo, siempre que sus compañeros asi lo quieran.<br>
			</div>
			<br>
			
			<div class="preguntas">
			Ya sea en el ámbito laboral o social, si encuentra que algo es injusto para alguna persona que no es usted, ¿qué hace?:
			<br> <br>
			<input type=radio name="pregunta6" value="0" checked="checked">a)	Apoya a la persona y la ayuda para que reciba un trato adecuado<br>
			<input type=radio name="pregunta6" value="1">b)	La apoya, pero prefiere mantenerse al margen de la situación.<br>
			<input type=radio name="pregunta6" value="0">c)	Se mantiene completamente al margen de la situación, prefiere evitar futuros problemas.<br>
			</div>
			<br>
			
			<div class="preguntas">
			En un accidente automovilistico, en cual usted no tuvo la cualpa:
			<br> <br>
			<input type=radio name="pregunta7" value="0" checked="checked">a)	Se enfurece, pero trata de ver como quedo el otro conductor para poder insultarlo<br>
			<input type=radio name="pregunta7" value="0">b)	Se enfurece, y discute con el otro conductor<br>
			<input type=radio name="pregunta7" value="1">c)	Se enfurece, pero mentiene la calma y llama a la policia y al servicio de urgencias..<br>
			</div>
			<br>
			
			<div class="preguntas">
			En un debate sobre algun tema de contingencia
			<br> <br>
			<input type=radio name="pregunta8" value="0" checked="checked">a)	Da a conocer su idea<br>
			<input type=radio name="pregunta8" value="1">b)	espera que todos den su opinion sobre el tema para el dar su parecer.<br>
			<input type=radio name="pregunta8" value="0">c)	no le interesan los temas de contingencia.<br>
			</div>
			<br>
			
			//Competitivo
			
			<div class="preguntas">
			En una competencia fisica, usted 
			<br> <br>
			<input type=radio name="pregunta9" value="1" checked="checked">a)	busca ser siempre el primero<br>
			<input type=radio name="pregunta9" value="0">b)	prefiere dejar ganar a los demás<br>
			<input type=radio name="pregunta9" value="0">c)	prefiere dejar ganar a su amigo que le cuesta mas.<br>
			</div>
			<br>
			
			<div class="preguntas">
			En cuanto al trabajo, siempre busca:
			<br> <br>
			<input type=radio name="pregunta10" value="0" checked="checked">a)	cumplir con las tareas que se le entregan<br>
			<input type=radio name="pregunta10" value="1">b)	asender de cargo rapidamente<br>
			<input type=radio name="pregunta10" value="0">c)	aprender nuevas tecnicas de desarrollo personal<br>
			</div>
			<br>
			
			<div class="preguntas">
			Cuando usted pierde en alguna competencia:
			<br> <br>
			<input type=radio name="pregunta11" value="0" checked="checked">a)	Se deprime<br>
			<input type=radio name="pregunta11" value="0">b)	Le da igual<br>
			<input type=radio name="pregunta11" value="1">c)	Me motiva a esformame mas<br>
			</div>
			<br>
			
			<div class="preguntas">
			Usted busca demostrar sus logros a los demas
			<br> <br>
			<input type=radio name="pregunta12" value="1" checked="checked">a)	Si, porque me agrada ser el mejor <br>
			<input type=radio name="pregunta12" value="0">b)	Le da igual<br>
			<input type=radio name="pregunta12" value="0">c)	No, perfiero que mi grupo se destaque<br>
			</div>
			<br>
			
			//Comunicador
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
			
			<br> <br>
			<input type=radio name="pregunta16" value="1" checked="checked">a) <br>
			<input type=radio name="pregunta16" value="0">b)	<br>
			<input type=radio name="pregunta16" value="0">c)	<br>
			</div>
			<br>
		
		
			//conector
			<div class="preguntas">
			Cuando dos de tus amigos están “peleados” por algún motivo o razón, ¿cuál es tu postura?
			<br> <br>
			<input type=radio name="pregunta17" value="1" checked="checked">a) Sabes realmente lo que paso, por eso apoyas al que encuentras tiene la razón.<br>
			<input type=radio name="pregunta17" value="0">b)	Mantienes cierta distancia del conflicto, es mejor que ellos solucionen sus diferencias.<br>
			<input type=radio name="pregunta17" value="0">c)	Intentas de alguna forma que se vuelvan a llevar bien, crees que no hay razón para que estén distanciados.<br>
			</div>
			<br>

			<div class="preguntas">
			Frente a un problema que lo afecte en su vida diaria como actua
			<br> <br>
			<input type=radio name="pregunta18" value="1" checked="checked">a) Trata de resolver el problema rapidamente.<br>
			<input type=radio name="pregunta18" value="0">b)	Entinede las causas antes de resolverlo.<br>
			<input type=radio name="pregunta18" value="0">c)	Evade los problemas.<br>
			</div>
			<br>
			
			<div class="preguntas">
			Que opina sobre el crecimiento de la comunidad Haitiana en Chile
			<br> <br>
			<input type=radio name="pregunta19" value="1" checked="checked">a) Esta bien se les ayuda para que tengan una vida mejor.<br>
			<input type=radio name="pregunta19" value="0">b)	No me gusta, existe menos trabajo y opurtunidades para las personas cchilenas.<br>
			<input type=radio name="pregunta19" value="0">c)	Me es indiferente<br>
			</div>
			<br>
			
			<div class="preguntas">
			¿Cree en el destino?
			<br> <br>
			<input type=radio name="pregunta20" value="1" checked="checked">a)Si, todo esta enlazado de algun modo <br>
			<input type=radio name="pregunta20" value="0">b)	Si, Dios dirige todo<br>
			<input type=radio name="pregunta20" value="0">c)	No, cada uno crea su destino.<br>
			</div>
			<br>
			
			//Desarrollador 21-24
			<div class="preguntas">
			Si tubiera a cargo un  grupo de trabajo y observa que uno de los parcipantes no avansa al mismo ritmo siendo que se esfuerza igual que los demas, que haria usted:
			<br> <br>
			<input type=radio name="pregunta21" value="1" checked="checked">a) Lo despide<br>
			<input type=radio name="pregunta21" value="0">b) Le brinda apoyo e incentiva a seguir<br>
			<input type=radio name="pregunta21" value="0">c) Le da un utimatum<br>
			</div>
			<br>
			
			<div class="preguntas">
			Se te hace fácil reconocer el potencial de quienes te rodean, por eso: 
			<br> <br>
			<input type=radio name="pregunta22" value="1" checked="checked">a) Les recomiendas que sigan así, se enfoquen en un único objetivo para lograr desarrollarse mejor.<br>
			<input type=radio name="pregunta22" value="0">b) Los orientas a que exploren distintas áreas.<br>
			<input type=radio name="pregunta22" value="0">c)	Los motivas para que enfrenten nuevo desafíos que los harán desarrollarse.<br>
			</div>
			<br>
			

			
			//Disiplinado 25-28
			<div class="preguntas">
			
			<br> <br>
			<input type=radio name="pregunta16" value="1" checked="checked">a) <br>
			<input type=radio name="pregunta16" value="0">b)	<br>
			<input type=radio name="pregunta16" value="0">c)	<br>
			</div>
			<br>
			
			//Empatico 29-32
			<div class="preguntas">
			Si ves a un amigo o amiga que no está bien o demuestra que algo la afecta, ¿cómo te comportas?
			<br> <br>
			<input type=radio name="pregunta16" value="1" checked="checked">a)Tiendes a acercarte y preguntarle que le ocurre, lo escuchas y le das algún consejo. <br>
			<input type=radio name="pregunta16" value="0">b)	Te acercas e independiente de lo que le pase tratas de subirle el ánimo.<br>
			<input type=radio name="pregunta16" value="0">c)	Te acercas y le preguntas que ocurre, pero no le das consejos, prefieres no entrometerte. <br>
			</div>
			<br>
			
			//Emprendedor 33-36
			<div class="preguntas">
			Cuando logras cumplir un objetivo:
			<br> <br>
			<input type=radio name="pregunta16" value="1" checked="checked">a)	Te sientes feliz por tu logro<br>
			<input type=radio name="pregunta16" value="0">b)	Te sientes conforme, pero crees que necesitas seguir avanzando.<br>
			<input type=radio name="pregunta16" value="0">c)	No te conformas, piensas que fue muy  fácil.<br>
			</div>
			<br>
			
			//Flexible 37-40
			<div class="preguntas">
			
			<br> <br>
			<input type=radio name="pregunta37" value="1" checked="checked">a)	<br>
			<input type=radio name="pregunta37" value="0">b)	<br>
			<input type=radio name="pregunta37" value="0">c)	<br>
			</div>
			<br>
			
			//Futurista 41-44
			<div class="preguntas">
			
			<br> <br>
			<input type=radio name="pregunta41" value="1" checked="checked">a) <br>
			<input type=radio name="pregunta41" value="0">b)<br>
			<input type=radio name="pregunta41" value="0">c)<br>
			</div>
			<br>
			
			//Mandatario 45-48
			<div class="preguntas">
			
			<br> <br>
			<input type=radio name="pregunta45" value="1" checked="checked">a) <br>
			<input type=radio name="pregunta45" value="0">b)<br>
			<input type=radio name="pregunta45" value="0">c)<br>
			</div>
			<br>
			
			Responsable 49-52
			<div class="preguntas">
			Cuando te vas a juntar con tus amigos para salir un sábado por la noche, y quedan de acuerdo en que se juntaran en cierta estación del metro:
			
			<br> <br>
			<input type=radio name="pregunta49" value="0" checked="checked">a) Eres el primero en llegar, llegas a la hora acordada.<br>
			<input type=radio name="pregunta49" value="1">b)	No llegaras a la hora, pero avisas que estas atrasado.<br>
			<input type=radio name="pregunta49" value="0">c)	Te atrasaste, pero sabes que tus amigos también se atrasaran, sabes que siempre es así.<br>
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
			$p5 = $_POST['pregunta5'];
			$p6 = $_POST['pregunta6'];
			
			$suma = $p1+$p2+$p3+$p4+$p5+$p6;
			echo "puntos obtenidos: ".$suma."<br>";
			//echo "detalles: $suma = $p1+$p2+$p3+$p4+$p5+$p6"."<br>" ;
			
			if($suma>0 && $suma<=59){echo "operacional";}
			else if($suma>60 && $suma<=99){echo "tactico";}
			else if($suma>100 && $suma<=120){echo "estrategico";}
			else{echo "fuera del rango";}
		}
		
		?>
	</div>
	

	 
</body>
</html>


