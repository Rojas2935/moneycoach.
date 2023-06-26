<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
include('conexion.php');


$nombre=$_POST["txtusuario"];
  $password=$_POST["txtpassword"];

  $query=mysqli_query($conexion,"SELECT*FROM formulario WHERE nombre='$nombre' and contraseña='$password'");
  $nr=mysqli_num_rows($query);
  if($nr==1){
    echo"<script>window.location.href='lomform.html'</script>";
  }else{
    echo"<script>alert('Nombre o contreseña incorrecta')</script>";
    echo"<script>window.location.href='login.php'</script>";
  }
?>

