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
			<b>1) Una empresa está tomando decisiones de si continuar con el rubro en el que se encuentra, y usted puede ayudar con la decisión, cual elegiría:</b><br> <br>
			<input type=radio name="pregunta1" value="20" checked="checked">a)	Se cambia de rubro a pesar de los riesgos, despidiendo a todo el personal y contratando a gente nueva para su nuevo rubro.<br>
			<input type=radio name="pregunta1" value="10">b)	Se cambia y conserva el personal en el nuevo rubro.<br>
			<input type=radio name="pregunta1" value="5">c)	Prefiere no tomar la decisión, la delega.<br>
			</div>
			
			<br>
			<div class="preguntas">
			<b>2) Usted va caminando por la calle y esta en presencia de un accidente, ¿Usted que haría?</b><br><br>
			<input type=radio name="pregunta2" value="10" checked="checked">a)	Pide ayuda rápidamente y espera instrucciones de la autoridad.<br>
			<input type=radio name="pregunta2" value="5">b)	Llama a un amigo que sabe qué hacer en estas situaciones, para que realice las gestiones.<br>
			<input type=radio name="pregunta2" value="20">c)	Pide ayuda y coordina que la gente no se acerque y moleste a los lesionados.<br>
			</div>
			
			<br>
			<div class="preguntas">
			<b>3) En la situación cuando algo no le parece correcto o va en contra de sus creencias o principios:</b>
			<br><br>
			<input type=radio name="pregunta3" value="20" checked="checked">a)	Sueles hablarlo y discutirlo con las personas responsables.<br>
			<input type=radio name="pregunta3" value="10">b)	Prefieres no hacer nada para ahorrarte problemas.<br>
			<input type=radio name="pregunta3" value="5">c)	Lo discutes con tus compañeros y de esa forma decidir que opción elegir.<br>
			</div>
			
			<br>
			<div class="preguntas">
			<b>4) Si se le presenta a usted un proyecto, que le fuera beneficioso, ¿Qué decisión tomaría?</b><br><br>
			
			<input type=radio name="pregunta4" value="10" checked="checked">a) Se asesoraría con personas expertas en el tema antes de tomar un decisión.<br>
			<input type=radio name="pregunta4" value="20">b) Tomaría el riesgo de tomar el proyecto sólo de acuerdo a sus experiencias previas.<br>
			<input type=radio name="pregunta4" value="5">c)	Descartaria tomar la decisión, para que otros con mayores conocimientos la tomen.<br>
			</div>
			<br>
			<div class="preguntas">
			<b>5) Si su empresa está entrando en una crisis y tiene opciones para definir el futuro de ésta, ¿Cuál de las siguientes opciones tomaría usted?</b><br><br>
			
			<input type=radio name="pregunta5"  value="5" checked="checked">a)	Vender la empresa.<br>
			<input type=radio name="pregunta5" value="10">b)	Reducir personal para reducir costos de la empresa, para salvarla.<br>
			<input type=radio name="pregunta5" value="20">c)	Estudiar nuevas opciones de proyectos para salvar la empresa.<br>
			</div>
			
			<br>
			<div class="preguntas">
			<b>6) ¿Usted cree que las empresas funcionen mejor mediante métodos y protocolos pre establecidos, de carácter autoritario?</b>
			<br><br>
			<input type=radio name="pregunta6"  value="5" checked="checked">a)	Funcionan mejor pero reduce el ambiente laboral.<br>
			<input type=radio name="pregunta6" value="10">b)	Funcionan pero muchas veces causan problemas de comunicación.<br>
			<input type=radio name="pregunta6" value="20">c)	Funcionan mejor mantienen a las personas más centradas en sus objetivos.<br>
			</div>
			<br>
			                       
			<p><input type="submit" value="Continuar" name="btnContinuar"></p>		
		

		    </form>
		
		<?php 
		if(@$_REQUEST['btnContinuar']=="Continuar"){
			
			$rut= $_GET['rut'];
			
			$p1 = $_POST['pregunta1'];
			$p2 = $_POST['pregunta2'];
			$p3 = $_POST['pregunta3'];
			$p4 = $_POST['pregunta4'];
			$p5 = $_POST['pregunta5'];
			$p6 = $_POST['pregunta6'];
			
			$suma = $p1+$p2+$p3+$p4+$p5+$p6;
			echo "puntos obtenidos: ".$suma."<br>";
			//echo "detalles: $suma = $p1+$p2+$p3+$p4+$p5+$p6"."<br>" ;
			
			$tipo=0;
			if($suma>0 && $suma<=59)
			{
                           
				echo "<script language='JavaScript'>location = 'cliente_operacional.php?rut=$rut'</script>";
				$tipo=1;
			}
			else if($suma>60 && $suma<=99)
			{
				echo "<script language='JavaScript'>location = 'cliente_tactico.php?rut=$rut'</script>";
				$tipo=2;
			}
			else if($suma>100 && $suma<=120)
			{
				echo "<script language='JavaScript'>location = 'cliente_estrategico.php?rut=$rut'</script>";
				$tipo=3;
			}
			else{echo "fuera del rango";}
			
		}
		
		?>
	</div>
	

	 
</body>
</html>