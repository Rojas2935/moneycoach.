<?php
 $conexion=mysqli_connect("localhost","root","root","estacionamiento")or die("error conexion");
  if(!$conexion){
      echo("Conexion Fallida:".mysqli_connect_error());
  }
 
 /*estacionamiento = nombre de la bd*/ 
?>
