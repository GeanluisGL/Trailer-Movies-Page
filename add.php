<?php

include("DB.php");

if (isset($_POST['add'])) {
    $imagPoster= $_POST['imagPoster'];
    $linkerYt= $_POST['linkerYt'];
    $movNam= $_POST['movNam'];
    $dirMov= $_POST['dirMov'];
    $movRes= $_POST['movRes'];
    $preDa =$_POST['preDa'];
    $depAct= $_POST['depAct'];  

    // INSERTAR
    $query= "INSERT INTO `trailerdato` (`ID`, `CARTELERA`, `VIDEOLINK`, `TITULO`, `DIRECTOR`, `RESUMEN`, `ESTRENO`, `ACTORES`) VALUES (NULL, '$imagPoster', '$linkerYt', '$movNam','$dirMov', '$movRes', '$preDa', '$depAct')";
    $result = mysqli_query($conn, $query);

  // if (!$result) {
    //     die("QUERRY OUT");
    // } echo 'saved';

    $_SESSION['message'] = 'SAVED AND ADDED';
    $_SESSION['message_type'] =  'secondary';
    
    header("location: indexA.php");

}



?>