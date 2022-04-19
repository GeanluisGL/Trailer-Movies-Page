<?php
// include, agrega la conexion a la base de datos
include("DB.php");

//El if confirma que si esta agregado en el formulario el metodo get por medio del name "id"
        if (isset($_GET['id'])) {
        //Aqui tomara el id seleccionado y lo guardara en la variable ID
                $ID = $_GET['id'];     
        // INSERTAR SENTENCIA SQL QUE PERMITE ELIMINAR EL ID SELECCIONADO DESDE LA PANTALLA A LA BASE DE DATOS
            $query= "DELETE FROM `trailerdato` WHERE `trailerdato`.`ID` = $ID";
        // NUEVAMENTE GUARDA LA SENTENCIA EN UNA VARIABLE DE PHP Y LA EJECUTA EN POR MEDIO DE LA CONEXION.
            $result = mysqli_query($conn, $query);
            if (!$result) {
             //   die("QUERRY OUT");
            } 
            // Manda un mensaje por medio de un SESSION, que guarda la información 
                $_SESSION['message'] = 'DELETED';
            // Recarga en la pagina del location
                header("location: indexA.php");
            

        }
?>