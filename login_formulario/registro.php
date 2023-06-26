<?php 
 ini_set('display_errors',1);
 error_reporting(E_ALL);
include('db.php');

$satisfaccion=$_POST['satisfaccion'];/*1*/
$escala=$_POST['escala'];/*2*/
$expectativas=$_POST['expectativas'];/*3*/
$caracteristica=$_POST['caracteristica'];/*4*/
$receptivos=$_POST['receptivos'];/*5*/

$consulta="INSERT INTO formulario_r/*nombre tabla de mysql*/
(satisfaccion,escala,expectativas,caracteristica,receptivos) /*campos que hay en mi tabla*/ 
VALUES ('$satisfaccion','$escala','$expectativas','$caracteristica','$receptivos');";/*van los azules que son las variables de visual*/
$resultado=mysqli_query($conexion,$consulta) or die("error de registro");

echo"<script>alert('formulario enviado')</script>";
echo"<script>window.location.href='indets.html'</script>";
mysqli_close($conexion);
?>;
