<?php
include('DB.php');
$imagPoster="";
$linkerYt= "";
$movNam= "";
$dirMov= "";
$movRes= "";
$preDa ="";
$depAct= "";

if (isset($_GET['id'])) {
    $ID = $_GET['id'];

    $query= "SELECT * FROM `trailerdato` WHERE `trailerdato`.`ID` = $ID";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
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

    if (isset($_POST['update'])) {
        $id = $_GET['id'];
        $imagPoster= $_POST['imagPoster'];
        $linkerYt= $_POST['linkerYt'];
        $movNam= $_POST['movNam'];
        $dirMov= $_POST['dirMov'];
        $movRes= $_POST['movRes'];
        $preDa = $_POST['preDa'];
        $depAct= $_POST['depAct'];

        $query= "UPDATE `trailerdato` SET 
        `CARTELERA` = '$imagPoster',
        `VIDEOLINK` = '$linkerYt', 
        `TITULO` = '$movNam', 
        `DIRECTOR` = '$dirMov', 
        `RESUMEN` = '$movRes', 
        `ESTRENO` = '$preDa',
        `ACTORES` = '$depAct' 
        WHERE `trailerdato`.`ID`= $id";
      
        mysqli_query($conn, $query);
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
        <input type="submit" value="Actualizar" name="update" class="btn btn-success">
        </form>
        </div>
        <hr>
<?php include("includer/footerInA.php")?>