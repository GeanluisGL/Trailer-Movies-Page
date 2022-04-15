<?php
include("DB.php");

        if (isset($_GET['id'])) {
            $ID = $_GET['id'];     
      
            $query= "DELETE FROM `trailerdato` WHERE `trailerdato`.`ID` = $ID";
            $result = mysqli_query($conn, $query);
            if (!$result) {
             //   die("QUERRY OUT");
            } 
                $_SESSION['message'] = 'DELETED';
                header("location: indexA.php");
            

        }
?>