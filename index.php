<?php 
    include("DB.php");
?>
<?php include("includer\headerIn.php");?>
        <!--Nav Bar-->
        <center>
        <nav class="navbar" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
                <a class="navbar-item" href="index.php">
                    <img src="Img/logo.png" class="imLogo">
            </div>

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
        
         <!--Carrousel-->
        <div class="colu">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="Img/las1.jfif" class="img-fluid" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="Img/las2.jfif" class="img-fluid" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="Img/las3.jfif" class="img-fluid" alt="">
                    </div>
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
                $query = "SELECT * FROM `trailerdato` ORDER BY `trailerdato`.`Time_Published` DESC";
                $result_trailer=mysqli_query($conn, $query);

                while ($row = mysqli_fetch_array($result_trailer)) { ?>
                
                <a href="movI.php?id=<?php echo $row['ID']?>">
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

    <div class="poput" id="popup">
    
        <p>Login</p>
        
            <form class="formC" id="formC" action="indexA.php">
        
            <label for="User"> <b> Username </b> </label> 
            <input type="text" placeholder="Enter Username" class="username" name="username" required/>
                 
            <label for="psw"> <b> Password</b></label>
            <input type="password" placeholder="Enter Password" class="password" id="password" value="" name="password" required/>
             
            
            <button onclick="login()" type="submit"  class="btn btn-success">Login</button>
            <button onclick="removePop()"  type="button" class="btn btn-danger">Cancel</button>
    
        </form>
     </div>

<?php
        $query = "SELECT * FROM `trailerdato` ORDER BY `trailerdato`.`Time_Published` DESC";
        $result_trailer=mysqli_query($conn, $query);?>

<?php include("includer/footerIn.php") ?>

    
