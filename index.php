<?php
include('config/config.php');


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


<div class="container">
<div class="row mt-5">


<div class="col-lg-6 col-sm-12">
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="imagenes/fantasma.jpg" class="d-block w-100" height="350px" alt="...">
    </div>
    <div class="carousel-item">
      <img src="imagenes/mundial.webp" class="d-block w-100" height="350px" alt="...">
    </div>
    <div class="carousel-item">
      <img src="imagenes/jk.webp" class="d-block w-100" height="350px" alt="...">
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
<div class="col-lg-6 col-sm-12">
    <small> Play it Right!</small>
    <h2>Inauguración Qatar 2022™ </h2>

   <p>
   9:06 horas | La'ebb ya está en el Estadio. La mascota oficial de Qatar 2022 se une al resto de las Mascotas del Mundial...
<br>
<br>
9:05 horas | Ahora salen las mascotas de ediciones mundialistas pasadas. Apareció 'Juanito', la icónica máscota de México 1970.
<br>
<br>
9:05 horas | ¡JUSTO EN LA INFANCIA! Comienzan a sonar las canciones de los mundiales anteriores. Retumba 'La copa de la vida' de Francia 1998 y el 'Waka Waka' de Sudáfrica 2010.
</p>

<a href="https://www.marca.com/claro-mx/futbol/mundial/2022/11/20/637a1bacca4741675c8b45b4.html" target="_blank" class="btn boton">Blog completo aquí </a>
</div>

</div>
</div>

<div class="titulo container">
    <div>
    <h2>Presentación Copa Mundial de la FIFA CATAR™ 2022</h2>
    </div>
    <div><h3>Jeon Jung-kook- BTS</h3></div>
    <div><h3>'Dreamers'</h3></div>
    
</div>
<div class="container">
<div class="row mt-5">

<div class="col-lg-5 col-sm-12"> 
<iframe width="90%" height="300" src="https://www.youtube.com/embed/jEdfjuG0Fx4" title="정국 (Jung Kook) 'Dreamers' @ FIFA World Cup Qatar 2022 Opening Ceremony" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
<div class="col-lg-4 col-sm-12">
    <small> BTS!</small>
    <h2>Presentación Dreamers 2022™ </h2>

    BTS star Jungkook is once again making history as the first Korean artist to perform at the FIFA World Cup thanks to his solo track, Dreamers.
<br>
<br>
Grammy-nominated group BTS has become synonymous with making and breaking records. Now K-Pop and global icon Jungkook has added another feat to the books with his FIFA performance. 

</p>
<br>

</div>

<div class="col-lg-3 col-sm-12 ">
<img class="imagen" src="imagenes/presentacion.jpg" alt="" width="100%">
</div>


</div>
</div>

        <?php include('footer.php') ?>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>