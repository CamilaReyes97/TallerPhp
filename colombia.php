<?php
include('config/config.php');
include('equipos/data.php'); 

$mundial= new mundial(); 
$todosRegistros= $mundial->colombia(); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COLOMBIA</title>
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


<div class="container">
<div class="row mt-5">
<div class="col-lg-6 col-sm-12">
    <small> Play it Right!</small>
    <h2>Selección Colombia 2022™ </h2>

   <p>
   La selección colombiana ha participado en seis Copas Mundiales de Fútbol (1962, 1990, 1994, 1998, 2014 y 2018). En Brasil 2014 cosechó su mejor participación llegando a cuartos de final, quedando en la quinta posición del torneo.
   <br>
   <br>
   ​Su mayor logro internacional es la Copa América obtenida en 2001, siendo local en este certamen; también lograría alcanzar un subcampeonato en 1975 y llegado a instancias semifinales en varias oportunidades. 
   <br>
</p>
<br>
<a href="https://fcf.com.co/" target="_blank" class="btn boton">Mas información aquí </a>
</div>

<div class="col-lg-6 col-sm-12">
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="imagenes/col.jpg" class="d-block w-100" height="350px" alt="...">
    </div>
    <div class="carousel-item">
      <img src="imagenes/colom.jpg" class="d-block w-100" height="350px" alt="...">
    </div>
    <div class="carousel-item">
      <img src="imagenes/colombia.jpg" class="d-block w-100" height="350px" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>


</div>
</div>

<div class="titulo container">
    <div>
    <h2>Calendario Copa Mundial de la FIFA CATAR™ 2022</h2>
    </div>
    <div><h3>Selección Colombia</h3></div>
    <div> <img src="imagenes/icono.png" width="150px" alt=""> </div>
</div>


<div class="container">
<table class="table table-striped">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id partido</th>
      <th scope="col">Equipo</th>
      <th scope="col">Marcador</th>
      <th scope="col">Equipo</th>
    </tr>
  </thead>
  <tbody>

            <?php
            while ($equipo= mysqli_fetch_object($todosRegistros)){
                          

echo '<tr>
<th scope="row">' .$equipo->id_partido. '</th>';
echo '<td>'.$equipo->teamLocal.'</td>
<td>'.$equipo->scoreLocal.'-'. $equipo->scoreVisitor.'</td>';
echo '<td>'.$equipo->teamVisitor.'</td>
</tr>';
}
?>


   
   
  </tbody>
</table>


  
  
</div>

        <?php include('footer.php') ?>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>