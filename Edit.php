<?php
// include, agrega la conexion a la base de datos
include('DB.php');
//DECLARA VARIABLE
$imagPoster="";
$linkerYt= "";
$movNam= "";
$dirMov= "";
$movRes= "";
$preDa ="";
$depAct= "";

//Si existe un metodo get, tomara la variable Id
if (isset($_GET['id'])) {
    // Tomara una variable para guardar el Id seleccionado
    $ID = $_GET['id'];

    //COMO ES UN UPDATE SE REALIZA LA SELECCION EN LA BASE DE DATOS EN POR MEDIO DEL ID QUE SE GUARDO EN LA VARIABLE ANTERIOR
    $query= "SELECT * FROM `trailerdato` WHERE `trailerdato`.`ID` = $ID";
    // NUEVAMENTE GUARDA LA SENTENCIA EN UNA VARIABLE DE PHP Y LA EJECUTA EN POR MEDIO DE LA CONEXION.
    $result = mysqli_query($conn, $query);
    // SI EXISTE UN RESULTADO MUESTRA EL USUARIO LOS DATOS A Actualizar
    if (mysqli_num_rows($result) == 1) {
        // SI EL NUMERO ES VALIDO ALMENOS 1 VEZ ENSEÑA EL SELECCIONADO
        $row = mysqli_fetch_array($result);
        // Recupera una fila de resultados como un array
        // RECOGE RESULTADO 
        $imagPoster= $row['CARTELERA'];
        $linkerYt= $row['VIDEOLINK'];
        $movNam= $row['TITULO'];
        $dirMov= $row['DIRECTOR'];
        $movRes= $row['RESUMEN'];
        $preDa =$row['ESTRENO'];
        $depAct= $row['ACTORES'];

        // echo $imagPoster;
        // echo $linkerYt;
        // echo $movNam;
        // echo $dirMov;
        // echo $movRes;
        // echo $preDa;
        // echo $depAct;

    };
}

    // Si existe un metodo post que se llame 'update', recoge el Id modificado 
    if (isset($_POST['update'])) {
        $id = $_GET['id'];
        // Sube los cambios por medio del post
        $imagPoster= $_POST['imagPoster'];
        $linkerYt= $_POST['linkerYt'];
        $movNam= $_POST['movNam'];
        $dirMov= $_POST['dirMov'];
        $movRes= $_POST['movRes'];
        $preDa = $_POST['preDa'];
        $depAct= $_POST['depAct'];

        // SENTENCIA SQL QUE SUBE LOS DATOS QUE FUE SUBIDO POR EL POST
        $query= "UPDATE `trailerdato` SET 
        `CARTELERA` = '$imagPoster',
        `VIDEOLINK` = '$linkerYt', 
        `TITULO` = '$movNam', 
        `DIRECTOR` = '$dirMov', 
        `RESUMEN` = '$movRes', 
        `ESTRENO` = '$preDa',
        `ACTORES` = '$depAct' 
        WHERE `trailerdato`.`ID`= $id";
      
    //   EJECUTA
        mysqli_query($conn, $query);
        
        // MANDA MENSAJE Y REDIRECCIONA
        $_SESSION['message'] = 'Movie Updated';
        header('Location: indexA.php');

};



?>



<?php include("includer/headerInA.php")?>


        <div class="inpp">
        <form action="edit.php?id=<?php echo $_GET['id'];?>" method="POST">
        <h1 class="hh" >Actualizar</h1><br>
        <label class="labb" for="">Cartelera</label>
        <img src="" alt="">
        <!-- En cada ECO muestra lo que extrajo de la base de datos por medio de las variables -->
        <input autocomplete="off" value="<?php echo $imagPoster?>" type="url" placeholder="Url image" class="imagPoster" name="imagPoster" required/>
        <hr>
        <label class="labb" for="">Link Video</label>
        <input autocomplete="off" value="<?php echo $linkerYt?>" type="url" placeholder="Link Trailer (Embend)" class="linkerYt" name="linkerYt" required/>
        <hr>
        <label class="labb" for="">Título</label>
        <input autocomplete="off" value="<?php echo $movNam?>" type="text" placeholder="Título" class="movNam" name="movNam" required/>
        <hr>
        <label class="labb" for="">Director</label>
        <input autocomplete="off" value="<?php echo $dirMov?>" type="text" placeholder="Director" class="dirMov" name="dirMov" required/>
        <hr>
        <label class="labb" for="">Reseña</label>
        <input autocomplete="off" value="<?php echo $movRes?>" type="text" placeholder="Reseña" class="movRes" name="movRes" required/>
        <hr>
        <label class="labb" for="">Estreno</label>
        <input autocomplete="off" value="<?php echo $preDa?>" type="date" placeholder="Fecha de Estreno" class="preDa" name="preDa" required/>
        <hr>
        <label class="labb" for="">Actores</label>
        <input autocomplete="off" value="<?php echo $depAct?>" type="text" placeholder="Actores" class="depAct" name="depAct" required/>
        <hr>
        <!-- Al boton submit se le da un name que permite ser llamado si es apretado -->
        <input type="submit" value="Actualizar" name="update" class="btn btn-success">
        </form>
        </div>
        <hr>
<?php include("includer/footerInA.php")?>