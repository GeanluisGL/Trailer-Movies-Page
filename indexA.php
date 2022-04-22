<?php    include("DB.php");?>
 <!-- include("index.php"); -->

 <?php include("includer\headerInA.php")?>
        
 <nav class="navbar navbar-expand-lg navbar-light bg-secundary">
    <div class="container-fluid">
      <a class="button is-danger" style="text-decoration: none;" href="index.php" ><i class="fa-solid fa-arrow-right-from-bracket"></i> </a>
    <div class="collapse navbar-collapse" id="navbarNav">
 
        <a class="btn" id="liveToastBtn">
            <img src="Img/boton-circular-plus.png" class="iconI" id="adjs">
        </a>

  
        <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
          <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                  <div class="toast-header">
                  <strong class="me-auto">All</strong>
                  <small>Now</small>
                  <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                  </div>
                  <div class="toast-body">
                  <form class="formAd" action="add.php" method="POST">

                  <h1>Agregar Pelicula</h1><br>
                  <label for="">Cartelera</label>
                  <img src="" alt="">
                  <input autocomplete="off"  type="url" placeholder="Url image" class="imagPoster" name="imagPoster" required/>

                  <label for="">Link Video</label>
                  <input autocomplete="off" type="url" placeholder="Link Trailer (Embend)" class="linkerYt" name="linkerYt" required/>

                  <label for="">Título</label>
                  <input autocomplete="off" type="text" placeholder="Título" class="movNam" name="movNam" required/>

                  <label for="">Director</label>
                  <input autocomplete="off" type="text" placeholder="Director" class="dirMov" name="dirMov" required/>

                  <label for="">Reseña</label>
                  <input autocomplete="off" type="text" placeholder="Reseña" class="movRes" name="movRes" required/>

                  <label for="">Estreno</label>
                  <input autocomplete="off" type="date" placeholder="Fecha de Estreno" class="preDa" name="preDa" required/>

                  <label for="">Actores</label>
                  <input autocomplete="off" type="text" placeholder="Actores" class="depAct" name="depAct" required/>

                  <input type="submit" value="Add" name="add" onclick=".save()" class="btn btn-success">
                  <input type="reset" value="Cancel" onclick="removePop()" class="btn btn-danger">

              </form>
          </div>
        </div>
</nav>
<br>

<!-- MENSAJE DESDE PHP -->
       <?php if (isset($_SESSION['message'])) { ?>   
        <div class="alert alert-secondary alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
         <?php session_unset();};?>         
<div class="tablelist">
   <hr>
    <center>
    
    <h1 class="hh">TRAILERS</h1>
    </center>
    <hr>
    <table class="table table-striped table-hover">
     <thead>
        <tr>
            <td></td>
            <th></th>
            <th>Cartelera</th>
            <th>Link Video</th>
            <th>Título</th>
            <th>Director</th>
            <th>Reseña</th>
            <th>Estreno</th>
            <th>Actores</th>
            <th>Acciones</th>
          </tr>
     </thead>
    
      <tbody>

        <?php
            $query = "SELECT * FROM `trailerdato` ORDER BY `trailerdato`.`Time_Published` DESC";
            $result_trailer=mysqli_query($conn, $query);

            while ($row = mysqli_fetch_array($result_trailer)) { ?>
            <tr>
            <th></th><td></td>
            <td> <img src="<?php echo $row['CARTELERA']?>" class="cartb"></td>
            <td><?php echo $row['VIDEOLINK']; ?></td>   
            <td><?php echo $row['TITULO']; ?></td>   
            <td><?php echo $row['DIRECTOR']; ?></td>   
            <td><?php echo $row['RESUMEN']; ?></td>   
            <td><?php echo $row['ESTRENO']; ?></td>   
            <td><?php echo $row['ACTORES']; ?></td>   
            <td>
              <a href="edit.php?id=<?php echo $row['ID']?>">  
              <img src="Img/edit.png" class="iconI" alt=""> 
              </a>
              
              <a href="DELETEBIT.php?id=<?php echo $row['ID']?>">
              <img src="Img/remove.png" class="iconI" alt=""> 
              </a>
                
            
            </td>
            </tr>
        <?php    }
        ?>

      </tbody>
    </table>
</div>


  <!-- <div class="Ca">

    <form action="AddCar.php" method="POST">
      <select name="sele" id="" require>

        <option value="NULL">CARTELERA 1</option>
        <?php
        $query = "SELECT * FROM `trailerdato` ORDER BY `trailerdato`.`Time_Published` DESC";
        $result_trailer=mysqli_query($conn, $query);

        while ($row = mysqli_fetch_row($result_trailer)) { ?>
    
          <option value="<?php echo $row['1']?>"> 
          <?php echo $row['3']?>
          </option>                   
                    
        <?php } ?>
      </select> 
      <input type="submit" value="REGISTER  ">
    </form>

  </div>-->

<!-- CONTAINER POP OUT ADDER -->


<!-- <div class="popet" id="popep">
    
    <h1>Busca        dor</h1>
    <br>
    <center><input type="search" id="buscar-pal" onkeyup="autocompletado()"></center>
    <br>
    <button onclick="clos()" class="btn btn-danger">X</button>
    <button onclick="Search()" class="btn btn-success">Buscar</button>
    <button onclick="edit()" class="btn btn-danger">Editar</button>
</div> -->


<?php include("includer/footerInA.php")?>
