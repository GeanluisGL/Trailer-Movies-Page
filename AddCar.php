<?php

// include, agrega la conexion a la base de datos
include("DB.php");
        // mysqli_insert_id($conn)
        $imagPoster= $_POST['sele'];
        $query= "INSERT INTO `cartalante` (`ID`, `CARTELERA`) VALUES (NULL, '$imagPoster')";
        // VARIABLE RESULT, TOMARA LA CONEXION  COMO PARAMETRO Y LA EJECUTA COMO UN QUERY DE BASE DE DATOS
        $result = mysqli_query($conn, $query);


    // Manda un mensaje por medio de un SESSION, que guarda la información 
    $_SESSION['message'] = 'New Entry added ';
    $_SESSION['message_type'] =  'secondary';
    
    // Recarga en la pagina del location
    header("location: indexA.php");
?>