<!DOCTYPE html>


<html lang="es">


<head>


 <meta charset="utf-8">


 <meta name="viewport"


 content="width=device-width, initial-scale=1, user-scalable=yes">


 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">


 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

 
</head>


<body>

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="<?php echo e(url('/')); ?>">ZELAN SPORTS</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="<?php echo e(url('calzado')); ?>">Zapatos</a></li>
                <li><a href="<?php echo e(url('venta')); ?>">Ventas</a></li>
                
                
              </ul>
               <form class="navbar-form navbar-right">
          <input type="text" class="form-control" placeholder="Search">
           <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
            </div>
          </div>
        </nav>

      
  <!-- <div class="container-fluid"> -->
  
 
 <?php echo $__env->yieldContent('content'); ?>
  <!-- Scripts -->
  <script src="<?php echo e(URL::asset('assets/js/jquery.js')); ?>"></script>
  <script src="<?php echo e(URL::asset('assets/js/bootstrap.min.js')); ?>"></script>



</body>


</html>