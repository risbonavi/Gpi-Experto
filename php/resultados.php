<?php
session_start();
?>

<!DOCTYPE HTML>
<html>
  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <title>Test</title>

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
	
    


        <form method="POST" action="">
            
            <div class="bienvenida">
		
            <h2>Resultados</h2>
            <div>
                <?php
                $nivel=$_GET['nivel'];
				/*
				e=estrategico
				t=tecnico
				o=operacional
				*/
				
				/*
				1. Analítico; Desglosa los componentes del fenómeno en estudio, ve: estructuras, patrones y formatos.
				2. Armónico; Trabaja por acuerdos comunes, evita las confrontaciones, no impone sus opiniones.
				3. Competitivo; Está pendiente del desempeño de los demás, le gustan las mediciones.
				4. Comunicador; Le gusta: explicar, describir, ser anfitrión; busca palabras que generen mayor impacto.
				5. Conector; Supone que todo ocurre por alguna razón, cree que la conducta de unos afecta a otros, respeta la diversidad.
				6. Desarrollador; Ve potencial en los demás, estimula a los otros hacia nuevos desafíos.
				7. Disciplinado; Necesita un mundo: predecible, ordenado y planeado; es preciso y meticuloso en todas sus acciones; le disgustan las sorpresas.
				8. Empático; Siente las emociones de quienes lo rodean; ayuda a los otros a expresar sus sentimientos y emociones.
				9. Emprendedor; Necesita lograr algo tangible; tiene un hálito de descontento.
				10. Flexible; Vive el momento; descubre su futuro en cada opción que se le presenta a diario; gusta de las sorpresas.
				11. Futurista; Disfruta evocando visiones del futuro; declara: “no sería genial si ......”.
				12. Mandatario; Le gusta imponer sus opiniones; al fijar una meta no descansa hasta comprometer a todos; usa el enfrentamiento para llegar al acuerdo; se hace cargo de las cosas.
				13. Responsable; Asume sus compromisos; no cesa en cumplir su palabra; si no puede cumplir idea compensaciones; asocia compromiso con reputación.
				*/
				if($nivel == "e"){
                        $ana = $_GET['ana'];
                        $comp = $_GET['comp'];
                        $emp = $_GET['emp'];
                        $com = $_GET['com'];
                        $fut = $_GET['fut'];
                        $flex = $_GET['flex'];
                        $res = $_GET['res'];
                        $man = $_GET['man'];
                        $cargo = 'Sin perfil para la empresa';
                        
                   if($ana >= 3 && $comp >= 3 && $emp>=2 && $com >= 1 && $fut >= 2 && $flex >= 2 &&$res>=2 &&$man>=2)
                                $cargo = 'Gerente General';
                        if($ana >= 3 &&  $com >= 2 &&  $man >=2 && $res >= 2)
                                $cargo = 'Gerente Administrativo';
                        if($ana >= 3 && $comp >= 3 && $man >= 2 && $res >= 2)
                                $cargo = 'Gerente Comercial';
                        if($ana >= 3 && $comp >= 3 && $emp>=2 && $man >= 2 && $res >=2)
                                $cargo = 'Gerente Produccion';
                        if($ana >= 3 &&  $man >= 2 && $res >= 2)
                                $cargo = 'Gerente Finanzas';
                        if($ana >= 3 &&  $com >= 2  && $flex >= 2 && $man >= 2 && $res >= 2)
                                $cargo = 'Gerente RR.HH';
                        						
				echo "Su cargo mas óptimo en la empresa sería : ". $cargo; 
				}else if($nivel=="t"){
					
					$analitico = $_GET['anali'];
					$competitivo = $_GET['competi'];
					$conector = $_GET['conect'];
					$desarrollador = $_GET['des'];
					$Disiplinado = $_GET['disci'];
					$flexible = $_GET['flex'];
					$mandatario=$_GET['manda'];
					
					$responsable=$_GET['resp'];
					
					
					if($analitico >= 3 && $competitivo >= 3 && $desarrollador>= 3 && $flexible>= 3 && $mandatario>= 3 && $responsable>= 3)
                                $cargo = 'Jefe RR. HH.';
                    if($conector >= 3  && $flexible>= 3 && $mandatario>= 3 && $responsable>= 3)
                                $cargo = 'Jefe Atencion a Clientes';
                    if($analitico >= 3 && $competitivo >= 3 && $Disciplinado>= 3 && $responsable>= 3)
                                $cargo = 'Representante de Ventas';
                    
					if($analitico >= 3 && $competitivo >= 3 && $desarrollador>= 3 && $Disciplinado>= 3 && $mandatario>= 3 && $responsable>= 3)
                                $cargo = 'Supervisor de planta';
					
					if($analitico >= 3  && $Disciplinado>= 3  && $responsable>= 3)
                                $cargo = 'Contador';
                    
					
				}if($nivel=="o"){
				
				}
                ?>
                <div>
                    
                 <input type=submit name="btnContinuar" value="Salir" required=""><br>
    </div>
            <br>
	</div>
	
        
        
        
        <?php 
		if(@$_REQUEST['btnContinuar']=="Salir"){
			
                        echo "<script language='JavaScript'>location = '../index.php'</script>";
                }
		
		?>
                
        
            
        </form>
	
        
        
       
	

	 
</body>
</html>