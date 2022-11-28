<?php
include('config/config.php');
include('equipos/data.php'); 

$mundial= new mundial(); 
$todosRegistros2= $mundial->getA(); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
<link rel="shortcut icon" href="imagenes/icono.jpg" type="image/x-icon">
<link rel="stylesheet" href="css/estilos.css">
</head>
<body style="background-image: url('imagenes/fondo.jpg')">

<?php include('menu.php') ?>
<div class="titulo container">
    <div>
    <h2>Calendario Copa Mundial de la FIFA CATAR™ 2022</h2>
    </div>
    <div><h3>PARTIDOS GRUPO A</h3></div>
    <div> <img src="imagenes/icono.png" width="150px" alt=""> </div>
</div>
      
            <?php
                 
           
           while ($equipo2= mysqli_fetch_object($todosRegistros2)){
                
                /* echo "<div class='col-12'>";
                echo "<div class='border border-info p-2'> GRUPO A";
                echo "<h5>  VS $equipo2->team2  </h5>";
                echo "</div>";
                echo "</div> <br> <br>"; */


               echo ' <div class="container mt-5">
                <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-3">
                <div class="card text-center" style="width: 18rem;">
                  <div class="card-body">
                    <h5 class="card-title">Grupo A</h5>';
                  echo ' <h5 class="card-text">'. $equipo2->team1.' </h5> ';
                   echo ' <a href="https://www.fifa.com/fifaplus/es/tournaments/mens/worldcup/qatar2022" target="_blank" class="btn boton">Conoce los horarios aquí </a>
                  </div>
                </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-3 d-flex justify-content-center ">
                <img src="imagenes/vs.png" alt="" width="130px"  >
                </div>
                <div class="col-lg-4 col-md-4 col-sm-3">
                <div class="card text-center" style="width: 18rem;">
                  <div class="card-body">
                    <h5 class="card-title">Grupo A</h5>';
                 echo  ' <h5 class="card-text">'. $equipo2->team2.' </h5>
                    <a href="https://www.fifa.com/fifaplus/es/tournaments/mens/worldcup/qatar2022" target="_blank" class="btn boton">Conoce los horarios aquí </a>
                  </div>
                </div>
                </div>
                </div>  
                </div>';

            } 
         

      
            ?>

        </div>

        <?php include('footer.php') ?>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>