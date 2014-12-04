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
                        <!--Armonico 4 ok -->
			<b>En el caso que en su empresa, le solicite a el personal retirarse temprano por fallas del sistema, pero con descuento de las horas no trabajadas, usted:</b>
			<br> <br>
			<input type=radio name="pregunta5" value="1" checked="checked">Acepta sin problemas, prefiere retirase antes.<br>
			<input type=radio name="pregunta5" value="0">No esta deacuerdo con el descuento, no es su cilpa que el sistema no funcione.<br>
			<input type=radio name="pregunta5" value="0">Esta deacuerdo, siempre que sus compañeros asi lo quieran.<br>
			</div>
			<br>
			
			<div class="preguntas">
			<b>Ya sea en el ámbito laboral o social, si encuentra que algo es injusto para alguna persona que no es usted, ¿Qué hace?:</b>
			<br> <br>
			<input type=radio name="pregunta6" value="0" checked="checked">a)	Apoya a la persona y la ayuda para que reciba un trato adecuado<br>
			<input type=radio name="pregunta6" value="1">b)	La apoya, pero prefiere mantenerse al margen de la situación.<br>
			<input type=radio name="pregunta6" value="0">c)	Se mantiene completamente al margen de la situación, prefiere evitar futuros problemas.<br>
			</div>
			<br>
			
			<div class="preguntas">
			<b>En un accidente automovilistico, en cual usted no tuvo la culpa:</b>
			<br> <br>
			<input type=radio name="pregunta7" value="0" checked="checked">a)	Se enfurece, pero trata de ver como quedo el otro conductor para poder insultarlo<br>
			<input type=radio name="pregunta7" value="0">b)	Se enfurece, y discute con el otro conductor<br>
			<input type=radio name="pregunta7" value="1">c)	Se enfurece, pero mentiene la calma y llama a la policia y al servicio de urgencias..<br>
			</div>
			<br>
			
			<div class="preguntas">
			<b>En un debate sobre algun tema de contingencia:</b>
			<br> <br>
			<input type=radio name="pregunta8" value="0" checked="checked">a)	Da a conocer su idea<br>
			<input type=radio name="pregunta8" value="1">b)	espera que todos den su opinion sobre el tema para el dar su parecer.<br>
			<input type=radio name="pregunta8" value="0">c)	no le interesan los temas de contingencia.<br>
			</div>
			<br>
                        
                        <!--Disciplinado 4 ok -->
			<div class="preguntas">

			<b>Cuando realizas una fiesta en tu casa, la mejor forma de hacerla es:</b>
			<br> <br>
			<input type=radio name="pregunta25" value="0" checked="checked">a) Siempre es mejor improvisar las fiestas, si se planean no resulta como quiero.<br>
			<input type=radio name="pregunta25" value="0">b)	La organizo unos días antes, no requiero de mucho tiempo para tener todo en orden.<br>
			<input type=radio name="pregunta25" value="1">c)	Me gusta saber quién viene y quien no, para saber qué cosas comprar. No me gusta dejar todo a última hora, me gusta organizarla bien.<br>
			</div>
			<br>
			
			<div class="preguntas">
			<b>¿Cómo es tu estación de trabajo?</b>
			<br> <br>
			<input type=radio name="pregunta26" value="1" checked="checked">a)	Me gusta tener un lugar amplio, tranquilo y ordenado, todo se me hace más fácil así. <br>
			<input type=radio name="pregunta26" value="0">b)	Amplio, no muy ordenado, me gusta probar nuevas cosas, lo que me dificulta tener orden.<br>
			<input type=radio name="pregunta26" value="0">c)	No muy amplio, pero tampoco pequeño, no necesito tener mucho espacio, me gusta tener todo cerca.<br>
			</div>
			<br>
                        
            <div class="preguntas">
			<b>Cuando te vas de vacaciones, y llegas a una casa en la playa que te presto un familiar , y la encuentras sucia y desordenada, usted:</b>
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
			
                        
                        $p1 = $_POST['pregunta5'];
			$p2 = $_POST['pregunta6'];
			$p3 = $_POST['pregunta7'];
			$p4 = $_POST['pregunta8'];
                        
                        $armonico = $p1+$p2+$p3+$p4;
                        if($armonico>=3)
                            $armonico = true;
                 
                        
                        $p1 = $_POST['pregunta25'];
			$p2 = $_POST['pregunta26'];
			$p3 = $_POST['pregunta27'];
                        
                        $disciplinado = $p1+$p2+$p3;
                        if($disciplinado>=3)
                            $disciplinado = true;


         echo "<script language='JavaScript'>location = 'cliente_operacional_2.php'</script>";
                        
		}
                
                
                if($analitico = true && $emprendedor = true && $desarrollador = true)
                        $cargo ='Gerente';
		
		?>
	</div>
	

	 
</body>
</html>


