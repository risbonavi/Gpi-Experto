<?php 
$host='localhost'; 
$user='root'; 
$pass=''; 
$bd='encuesta'; 
$link = mysql_connect($host, $user, $pass)or die('No Logeo BD : ' . mysql_error()); 
mysql_select_db($bd,$link) or die("No pudo seleccionar la BD"); 
?>