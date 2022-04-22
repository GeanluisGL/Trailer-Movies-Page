<?php
include('DB.php');
$usuario=$_POST['username'];
$contraseña=$_POST['password'];
session_start();
$_SESSION['usuario']=$usuario;


$conexion=mysqli_connect("localhost","root","","trailers");

$consulta="SELECT*FROM users where username='$usuario' and password='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:indexA.php");

}else{
    ?>
    <?php

    header("location:index.php");
   
    
  }

  $_SESSION['message'] = 'MATRIX ERROR';
  mysqli_free_result($resultado);
  mysqli_close($conexion);
  ?>