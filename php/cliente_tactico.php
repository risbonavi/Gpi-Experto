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
			
			//analitico 4 ok
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
			
			
			//Armonico 4 ok
			
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
			
			//Competitivo 4 ok
			
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
			
			//Comunicador 4 ok
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
		
		
			//conector 4 ok
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
			
			//Desarrollador 3 ok
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
			<input type=radio name="pregunta22" value="1" checked="checked">a)	Les recomiendas que sigan así, se enfoquen en un único objetivo para lograr desarrollarse mejor. <br>
			<input type=radio name="pregunta22" value="0">b)		Los orientas a que exploren distintas áreas.<br>
			<input type=radio name="pregunta22" value="0">c)		Los motivas para que enfrenten nuevo desafíos que los harán desarrollarse. <br>
			</div>
			<br>
                        
            <div class="preguntas">
			Un dia vas caminando por la calle y ves un anuncio que es saltar en paracaida de un avión en conjunto de tus amigos a un precio imperdible. ¿Que haces?

			<br> <br>
			<input type=radio name="pregunta23" value="1" checked="checked">a) Piensas en llamar a tus amigos pero lo conoces  y sabes que no le gustan este tipo de actividades <br>
			<input type=radio name="pregunta23" value="0"> b) Lo piensas y rápidamente lo ignoras.<br>
			<input type=radio name="pregunta23" value="0">c) Llamas a tus amigos y los motivas enseguida a para que aprovechen la oportunidad. <br>
			</div>
			<br>
                       
			

			
			//Disiplinado 3 ok
			<div class="preguntas">

			Cuando realizas una fiesta en tu casa, la mejor forma de hacerla es:
			<br> <br>
			<input type=radio name="pregunta25" value="0" checked="checked">a) Siempre es mejor improvisar las fiestas, si se planean no resulta como quiero.<br>
			<input type=radio name="pregunta25" value="0">b)	La organizo unos días antes, no requiero de mucho tiempo para tener todo en orden.<br>
			<input type=radio name="pregunta25" value="1">c)	Me gusta saber quién viene y quien no, para saber qué cosas comprar. No me gusta dejar todo a última hora, me gusta organizarla bien.<br>
			</div>
			<br>
			
			<div class="preguntas">
			¿Cómo es tu estación de trabajo?
			<br> <br>
			<input type=radio name="pregunta26" value="1" checked="checked">a)	Me gusta tener un lugar amplio, tranquilo y ordenado, todo se me hace más fácil así. <br>
			<input type=radio name="pregunta26" value="0">b)	Amplio, no muy ordenado, me gusta probar nuevas cosas, lo que me dificulta tener orden.<br>
			<input type=radio name="pregunta26" value="0">c)	No muy amplio, pero tampoco pequeño, no necesito tener mucho espacio, me gusta tener todo cerca.<br>
			</div>
			<br>
                        
            <div class="preguntas">
			Cuando te vas de vacaciones, y llegas a una casa en la playa que te presto un familiar , y la encuentras sucia y desordenada, usted:
			<br> <br>
			<input type=radio name="pregunta27" value="0" checked="checked">a) Te instalas y descansas antes de ordenar y limpiar.<br>
			<input type=radio name="pregunta27" value="1">b) Ordenas y limpias hasta que todo quede como querias y luego te acuestas.<br>
			<input type=radio name="pregunta27" value="0">c) Piensas en ordenar pero finalmente decides en descansar.<br>
			</div>
			<br>
                     	
			
			//Empatico 3 ok
			<div class="preguntas">
			Si ves a un amigo o amiga que no está bien o demuestra que algo la afecta, ¿cómo te comportas?
			<br> <br>
			<input type=radio name="pregunta29" value="1" checked="checked">a) Tiendes a acercarte y preguntarle que le ocurre, lo escuchas y le das algún consejo. <br>
			<input type=radio name="pregunta29" value="0">b) Te acercas e independiente de lo que le pase tratas de subirle el ánimo.<br>
			<input type=radio name="pregunta29" value="0">c) Te acercas y le preguntas que ocurre, pero no le das consejos, prefieres no entrometerte. <br>
			</div>
			<br>
                        
            <div class="preguntas">
			Una pareja de pololos, que además son amigos tuyos tienen una pelea y deciden terminar su relación amorosa, cada uno por su lado triste, se acerca a tí para hablar  de lo sucedido y te cuentan su respectiva versión de los hechos. ¿Que harías tú ante esta situación planteada?
			
			<br> <br>
			<input type=radio name="pregunta30" value="0" checked="checked"> a) Decides marginarte del problema, ya que como dice el dicho: mejor no meterse en peleas de pareja.<br>
			<input type=radio name="pregunta30" value="0">b) Piensas en ayudarlos, pero sabes que ellos siempre pelean, terminan y vuelven finalmente, así que dejas que se arreglen sus diferencias ellos.<br>
			<input type=radio name="pregunta30" value="1"> d) Eres objetivo y hablas con cada uno por separado y creas una instancia para que se junten y arreglen los problemas de manera tranquila y con autocrítica por parte de cada uno.<br>
			</div>
			<br>
                        
            <div class="preguntas">
			<img src="../images/empatico.jpg" width="300px" height="300px"><br>Al ver esta imagen usted que siente:
			<br> <br>
			<input type=radio name="pregunta31" value="0" checked="checked">a) No siente nada <br>
			<input type=radio name="pregunta31" value="1">b) Siente tristeza<br>
			<input type=radio name="pregunta31" value="1">c) Siente felicidad<br>
			</div>
			<br>
                
			
			//Emprendedor 3 ok
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
                        

			
			//Flexible 3 ok
			<div class="preguntas">
			¿Alguna vez haz  viajado ”mochileando”?<br> <br>
			<input type=radio name="pregunta37" value="0" checked="checked">a)	No me atrevo a hacerlo, me gusta organizar bien mis viajes.	<br>
			<input type=radio name="pregunta37" value="1">b)	Si lo he hecho, me gusta la idea de no saber cómo llegare a mi destino.<br>
			<input type=radio name="pregunta37" value="0">c)	Aun no lo hago, pero tengo intenciones de hacerlo pronto.	<br>
			</div>
			<br>

            <div class="preguntas">
			¿Cuánto tardas en prepararte (ducharte, vestirte, etc.) para ir a algun evento?<br> <br>
			<input type=radio name="pregunta38" value="0" checked="checked"> a)	15 o 20 minutos.<br>
			<input type=radio name="pregunta38" value="0"> b)	20 a 30 minutos.<br>
			<input type=radio name="pregunta38" value="1">c)	Más de 30 minutos. <br>
			</div>
			<br>
                        
            <div class="preguntas">
			En una cita con una persona que sea de su interés:
			<br> <br>
			<input type=radio name="pregunta39" value="0" checked="checked">a) Prefiere que sea planificada.<br>
			<input type=radio name="pregunta39" value="1">b) Que sea espontanea.<br>
			<input type=radio name="pregunta39" value="0">c) No le agradan las citas.<br>
			</div>
			<br>
                        

			
			//Futurista 3 ok
			<div class="preguntas">
			Acaba de recibir una herencia inesperadamente ¿Que harìa usted ante esta situación?
			<br> <br>
			<input type=radio name="pregunta41" value="0" checked="checked">a) Regalo todo mi dinero a obras beneficas.<br>
			<input type=radio name="pregunta41" value="0">b) Me gasto el dinero en lo que siempre soñe tener.<br>
			<input type=radio name="pregunta41" value="1">c) Invierto el dinero en una actividad que me genere ingresos en el futuro.<br>
			</div>
			<br>
                        
            <div class="preguntas">
			Usted a pensado en el futuro, divagando
			<br> <br>
			<input type=radio name="pregunta42" value="0" checked="checked"> No, prefiero centranme en vivir dia a dia.<br>
			<input type=radio name="pregunta42" value="1"> Si, siempre creo imagenes de lo podria llegar a realizar.<br>
			<input type=radio name="pregunta42" value="0"> A veces, pero prefiero centrarme en el dia a dia.<br>
			</div>
			<br>
                        
            <div class="preguntas">
			Antes de salir de su hogar, usted:
			<br> <br>
			<input type=radio name="pregunta43" value="0" checked="checked"> Planifica detalladamente.<br>
			<input type=radio name="pregunta43" value="1"> Se imagina como sera su dia.<br>
			<input type=radio name="pregunta43" value="0"> Prefiere no planificar.<br>
			</div>
			<br>
                   
                        
			
			//Mandatario 3 ok
			<div class="preguntas">
			Estas a cargo de un proyecto, ¿cuál es tu forma de decidir la manera en que lo harán?
			<br> <br>
			<input type=radio name="pregunta45" value="0" checked="checked">a) Lo discutimos entre todos y elegimos cual es la mejor idea.<br>
			<input type=radio name="pregunta45" value="1">b) Sé cómo abordarlo, le informo a mi grupo de trabajo la forma en que lo haremos.<br>
			<input type=radio name="pregunta45" value="0">c) Sé cómo desarrollarlo, lo discuto con mi grupo y lo elegimos si es que estamos de acuerdo.<br>
			</div>
			<br>
                        
            <div class="preguntas">
			En la asociación de fútbol en usted participa sus compañeros y demás socios lo postulan como el candidato ideal para que usted dirige el club. ¿Cual es la actitud que tomaría?

			<br> <br>
			<input type=radio name="pregunta46" value="0" checked="checked">a) Usted rechazaria el puesto ya que tiene dudas de como poder ejercer su cargo.<br>
			<input type=radio name="pregunta46" value="0">b) Usted acepta el puesto pero siempre y cuando exista unanimidad total.<br>
			<input type=radio name="pregunta46" value="1">c) Usted toma las riendas del asunto y defiende su idea hasta todo.<br>
			</div>
			<br>
                        
            <div class="preguntas">
			Si quisiera irse de paseo con sus amistades,  pero quiere ir a un lugar que le gusta demasiado, pero ellos no quieren ir al mismo lugar que Ud. ¿Qué haría?.
			<br> <br>
			<input type=radio name="pregunta47" value="0" checked="checked">a) Iría al lugar donde vaya la mayoría.<br>
			<input type=radio name="pregunta47" value="1">b) Saldría por su cuenta.<br>
			<input type=radio name="pregunta47" value="0">c) Intentaría convencerlos de su opinión.<br>
			</div>
			<br>
                        

			//Responsable 3 ok
			<div class="preguntas">
			Cuando te vas a juntar con tus amigos para salir un sábado por la noche, y quedan de acuerdo en que se juntaran en cierta estación del metro:
			<br> <br>
			<input type=radio name="pregunta49" value="0" checked="checked">a) Eres el primero en llegar, llegas a la hora acordada.<br>
			<input type=radio name="pregunta49" value="1">b)	No llegaras a la hora, pero avisas que estas atrasado.<br>
			<input type=radio name="pregunta49" value="0">c)	Te atrasaste, pero sabes que tus amigos también se atrasaran, sabes que siempre es así.<br>
			</div>
			<br>
                        
			<div class="preguntas">
			Usted tiene planificado una junta con uno de sus amigos, pero ocurre un pequeño problema, usted se ha quedado dormido, por lo visto usted no llegaría a la hora y es probable también que no alcance a llegar.¿ Que haría usted en esta situación?
			<br> <br>
			<input type=radio name="pregunta50" value="0" checked="checked"> No me preocupo por mi amigo y lo dejó plantado.<br>
			<input type=radio name="pregunta50" value="0">Pienso en llamarlo pero, sé que me esperara así que no lo hago.<br>
			<input type=radio name="pregunta50" value="1">LLamo a mi amigo y le cuento lo sucedido, le digo que llegaré lo más rápido posible, que si me puede esperar un poco y si es que no puede, que lo dejemos para otra ocasión y yo invito. <br>
			</div>
			<br>
                        
            <div class="preguntas">
			Si tiene que realizar una tarea para su trabajo, pero se encuentra sumamente cansado. ¿Que decidiría?
			<br> <br>
			<input type=radio name="pregunta51" value="0" checked="checked">a) Dormiría porque sin cansancio rindo mejor. <br>
			<input type=radio name="pregunta51" value="1">b) Haría la tarea aunque no rinda lo suficiente. <br>
			<input type=radio name="pregunta51" value="0">c) Delegaría la tarea en otras personas para poder descansar <br>
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
                        
                        $p1 = $_POST['pregunta5'];
			$p2 = $_POST['pregunta6'];
			$p3 = $_POST['pregunta7'];
			$p4 = $_POST['pregunta8'];
                        
                        $armonico = $p1+$p2+$p3+$p4;
                        if($armonico>=3)
                            $armonico = true;
                        
                        $p1 = $_POST['pregunta9'];
			$p2 = $_POST['pregunta10'];
			$p3 = $_POST['pregunta11'];
			$p4 = $_POST['pregunta12'];
                        
                        $competitivo = $p1+$p2+$p3+$p4;
                        if($competitivo>=3)
                            $competitivo = true;
                        
                        $p1 = $_POST['pregunta13'];
			$p2 = $_POST['pregunta14'];
			$p3 = $_POST['pregunta15'];
			$p4 = $_POST['pregunta16'];
                        
                        $comunicador = $p1+$p2+$p3+$p4;
                        if($comunicador>=3)
                            $comunicador = true;
                        
                        $p1 = $_POST['pregunta17'];
			$p2 = $_POST['pregunta18'];
			$p3 = $_POST['pregunta19'];
			$p4 = $_POST['pregunta20'];
                        
                        $conector = $p1+$p2+$p3+$p4;
                        if($conector>=3)
                            $conector = true;
                        
                        $p1 = $_POST['pregunta21'];
			$p2 = $_POST['pregunta22'];
			$p3 = $_POST['pregunta23'];
			$p4 = $_POST['pregunta24'];
                        
                        $desarrollador = $p1+$p2+$p3+$p4;
                        if($desarrollador>=3)
                            $desarrollador = true;
                        
                        $p1 = $_POST['pregunta25'];
			$p2 = $_POST['pregunta26'];
			$p3 = $_POST['pregunta27'];
			$p4 = $_POST['pregunta28'];
                        
                        $disciplinado = $p1+$p2+$p3+$p4;
                        if($disciplinado>=3)
                            $disciplinado = true;
                        
                        $p1 = $_POST['pregunta29'];
			$p2 = $_POST['pregunta30'];
			$p3 = $_POST['pregunta31'];
			$p4 = $_POST['pregunta32'];
                        
                        $empatico = $p1+$p2+$p3+$p4;
                        if($empatico>=3)
                            $empatico = true;
                        
                        $p1 = $_POST['pregunta33'];
			$p2 = $_POST['pregunta34'];
			$p3 = $_POST['pregunta35'];
			$p4 = $_POST['pregunta36'];
                        
                        $emprendedor = $p1+$p2+$p3+$p4;
                        if($emprendedor>=3)
                            $emprendedor = true;
                        
                        $p1 = $_POST['pregunta37'];
			$p2 = $_POST['pregunta38'];
			$p3 = $_POST['pregunta39'];
			$p4 = $_POST['pregunta40'];
                        
                        $flexible = $p1+$p2+$p3+$p4;
                        if($flexible>=3)
                            $flexible = true;
                        
                        $p1 = $_POST['pregunta41'];
			$p2 = $_POST['pregunta42'];
			$p3 = $_POST['pregunta43'];
			$p4 = $_POST['pregunta44'];
                        
                        $futurista = $p1+$p2+$p3+$p4;
                        if($futurista>=3)
                            $futurista = true;
                        
                        $p1 = $_POST['pregunta45'];
			$p2 = $_POST['pregunta46'];
			$p3 = $_POST['pregunta47'];
			$p4 = $_POST['pregunta48'];
                        
                        $mandatario = $p1+$p2+$p3+$p4;
                        if($mandatario>=3)
                            $mandatario = true;
                        
                        $p1 = $_POST['pregunta49'];
			$p2 = $_POST['pregunta50'];
			$p3 = $_POST['pregunta51'];
			$p4 = $_POST['pregunta52'];
                        
                        $responsable = $p1+$p2+$p3+$p4;
                        if($responsable>=3)
                            $responsable = true;
		}
                
                
                if($analitico = true && $emprendedor = true && $desarrollador = true)
                        $cargo ='Gerente';
		
		?>
	</div>
	

	 
</body>
</html>


