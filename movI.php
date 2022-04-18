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

    if (isset($GET['out'])) {
        
       header('Location: index.php');

};



?>



<?php include("includer/headerInA.php")?>

<a class="button is-danger" style="float:right; text-decoration: none;" href="index.php" ><strong>X</strong></a>


  
        <h1 class="hh" > <?php echo $movNam?></h1><br>
        <center>
            <iframe class="fram" src="<?php echo $linkerYt?>" 
            frameborder="0"  style=" width: 50%;"
            ></iframe>
        </center>
       
        
        <br>
        <div class="inff" style="background-color:rgb(177, 172, 154); border-radius: 10px;  text-align: justify; padding: 3%; margin-left:20%; margin-right:20%;">
   
        <h2 style=" color: antiquewhite;" >Director</h2>
        <p><?php echo $dirMov?></p>
        <br>
        <h2 style=" color: antiquewhite;" >Reseña</h2>
        <p><?php echo $movRes?></p>
        <br>
        <h2 style=" color: antiquewhite;" >Estreno</h2>
        <p><?php echo $preDa?></p>
        <br>
        <h2 style=" color: antiquewhite;" >Actores</h2>
        <p><?php echo $depAct?></p>
        <br>
        </div>
             <br>
<?php include("includer/footerInA.php")?>