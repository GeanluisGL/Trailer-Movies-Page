<?php 
    include("DB.php");
?>

<!-- NAVAR QUE TIENE EL LOGO Y EL BOTON DE LOGIN -->
<?php include("includer\headerIn.php");?>        

    

<!--Nav Bar-->

        <center>
        <nav class="navbar" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
                <a class="navbar-item" href="index.php">
                    <img src="Img/logo.png" class="imLogo">
            </div>

            <!-- LOGIN -->
            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="buttons">
                        <a class="button is-primary" onclick="logg()">
                            Log in   
                        </a>
                    </div>   
                </div>
            </div>
        </nav>
    </center>

    

    <div class="pag">
        
    <?php if (isset($_SESSION['message'])) { ?>   
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
         <?php session_unset();};?>

         <!--Carrousel-->
        <div class="colu">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="Img/logo.png">
                    </div>

                    <?php
            // EL QUERRY SELECCIONA TODAS FILAS Y LAS ORDENA SEGUN EL TIEMPO PUBLICADO
                $query = "SELECT * FROM `trailerdato` ORDER BY `trailerdato`.`Time_Published` DESC";
                $result_trailer=mysqli_query($conn, $query);
            // EL WHILE RECORRE LAS FILAS CONVIRTIENDOLAS EN UN ARRAY Y EJECUNTANDO
                while ($row = mysqli_fetch_array($result_trailer)) { ?>

                    <div class="carousel-item ">
                        <!-- PARA CADA UNA HARA UN IMAGEN QUE SERVIRA DE LINK A LA INFORMACION DE LA PELICULA     -->
                <a href="movI.php?id=<?php echo $row['ID']?>">
            <!-- EL LINK TRAIDO DESDE CARTELERA SE TRANSFORMA EN IMAGEN     -->
                <img  src="<?php echo $row['CARTELERA']?>" > 
            </a>                    
                    </div>
           
                    
            
            <?php    }
        ?>
                   
                  
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                    </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                    </button>
            </div>
        </div>
        
        <br>

        <div class="colu">
            <!--Movies-->
        <div class="Cartels">
            
            <?php
            // EL QUERRY SELECCIONA TODAS FILAS Y LAS ORDENA SEGUN EL TIEMPO PUBLICADO
                $query = "SELECT * FROM `trailerdato` ORDER BY `trailerdato`.`Time_Published` DESC";
                $result_trailer=mysqli_query($conn, $query);
            // EL WHILE RECORRE LAS FILAS CONVIRTIENDOLAS EN UN ARRAY Y EJECUNTANDO
                while ($row = mysqli_fetch_array($result_trailer)) { ?>
            <!-- PARA CADA UNA HARA UN IMAGEN QUE SERVIRA DE LINK A LA INFORMACION DE LA PELICULA     -->
                <a href="movI.php?id=<?php echo $row['ID']?>">
            <!-- EL LINK TRAIDO DESDE CARTELERA SE TRANSFORMA EN IMAGEN     -->
                <img  src="<?php echo $row['CARTELERA']?>" > 
            </a>                    
                    
            
            <?php    }
        ?>

        </div>
        </div>
        
    </div>
    <!--Footer-->
    <BR>
    <footer>
        <center>
            <span class="spanF"> ©Galapin Studios</span>
        </center>
    </footer>

        <!-- LOGIN POPOUT FORMULARIO -->
        <div class="poput" id="popup">
    
    <p>Login</p>

   <form class="formCa" id="formC" action="valida.php" method="POST">

   <label for="User"> <b> Username </b> </label> 
   <input type="text" placeholder="Enter Username" autocomplete="off" class="username" name="username" required/>
        
   <label for="psw"> <b>Password</b></label>
   <input type="password" placeholder="Enter Password" autocomplete="off" class="password" id="password" value="" name="password" required/>
    
   <input type="submit" value="Login" onclick="funLog()" class="btn btn-success" ></input>
   <button onclick="removePop()"  type="reset" class="btn btn-danger">Cancel</button>

   </form>
</div>

<?php
        $query = "SELECT * FROM `trailerdato` ORDER BY `trailerdato`.`Time_Published` DESC";
        $result_trailer=mysqli_query($conn, $query);?>

<?php include("includer/footerIn.php") ?>

    
