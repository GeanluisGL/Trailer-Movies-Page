<?php

// include, agrega la conexion a la base de datos
include("DB.php");

//El if confirma que si esta agregado en el formulario el metodo post
if (isset($_POST['add'])) {
//  Tomara las variables por medio de los names.
    $imagPoster= $_POST['imagPoster'];
    $linkerYt= $_POST['linkerYt'];
    $movNam= $_POST['movNam'];
    $dirMov= $_POST['dirMov'];
    $movRes= $_POST['movRes'];
    $preDa =$_POST['preDa'];
    $depAct= $_POST['depAct'];  

    // INSERTAR SENTENCIA SQL QUE PERMITE INSERTAR
    $query= "INSERT INTO `trailerdato` (`ID`, `CARTELERA`, `VIDEOLINK`, `TITULO`, `DIRECTOR`, `RESUMEN`, `ESTRENO`, `ACTORES`) VALUES (NULL, '$imagPoster', '$linkerYt', '$movNam','$dirMov', '$movRes', '$preDa', '$depAct')";
    // VARIABLE RESULT, TOMARA LA CONEXION  COMO PARAMETRO Y LA EJECUTA COMO UN QUERY DE BASE DE DATOS
    $result = mysqli_query($conn, $query);

  // if (!$result) {
    //     die("QUERRY OUT");
    // } echo 'saved';

    // Manda un mensaje por medio de un SESSION, que guarda la información 
    $_SESSION['message'] = 'SAVED AND ADDED';
    $_SESSION['message_type'] =  'secondary';
    
    // Recarga en la pagina del location
    header("location: indexA.php");

}



?>