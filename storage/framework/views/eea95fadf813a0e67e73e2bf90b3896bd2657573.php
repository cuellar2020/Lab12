<!DOCTYPE html>


<html lang="es">


<head>


 <meta charset="utf-8">


 <meta name="viewport"


 content="width=device-width, initial-scale=1, user-scalable=yes">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">



 
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

 
</head>


<body>
  <nav class="navbar navbar-expand-lg   bg-dark text-white "  >
  <div class="container-fluid">
    <a class="navbar-brand" href="#" >                </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse text-white" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-white">
        <li class="nav-item text-white">
          <a class="nav-link active" aria-current="page" href="<?php echo e(url('/')); ?>">ZELAN SPORTS</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link"  href="<?php echo e(url('calzado')); ?>">Zapatos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo e(url('venta')); ?>">Ventas</a>
        </li>
        
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>





      
       <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/ultra.png"  width="1500" alt="Zapatos">
    </div>
    
  </div>
</div>
          </div>
           
          
          
        </div>
         
       </div>
        <div class="container">
        <div class="row">
          <div class="col-sm-12">
            
<img src="img/ofertas.png" width="1200">
          </div>
           
          
          
        </div>
         
       </div>
       <div class="container-fluid">
        <div class="row">
      

  
  <!-- <div class="container-fluid"> -->
  
  <!-- </div> -->

  <!-- Scripts -->
  <script src="<?php echo e(URL::asset('assets/js/jquery.js')); ?>"></script>
  <script src="<?php echo e(URL::asset('assets/js/bootstrap.min.js')); ?>"></script>



</body>


</html>