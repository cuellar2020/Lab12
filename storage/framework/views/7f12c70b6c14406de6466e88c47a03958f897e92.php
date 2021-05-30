<?php $__env->startSection('content'); ?>


<div class="row">


 <section class="content">


  <div class="col-md-8 col-md-offset-2">


   <?php if(count($errors) > 0): ?>


   <div class="alert alert-danger">


    <strong>Error!</strong> Revise los campos obligatorios.<br><br>


    <ul>


     <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


     <li><?php echo e($error); ?></li>


     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


    </ul>


   </div>


   <?php endif; ?>


   <?php if(Session::has('success')): ?>


   <div class="alert alert-info">


    <?php echo e(Session::get('success')); ?>



   </div>


   <?php endif; ?>




   <div class="panel panel-default">


    <div class="panel-heading">


     <h3 class="panel-title">Nueva venta</h3>


    </div>


    <div class="panel-body">     


     <div class="table-container">


      <form method="POST" action="<?php echo e(route('venta.update',$venta->id)); ?>"  role="form">


       <?php echo e(csrf_field()); ?>



       <input name="_method" type="hidden" value="PATCH">


       <div class="row">


        <div class="col-xs-6 col-sm-6 col-md-6">


         <div class="form-group">


          <input type="text" name="calzado" id="calzado" class="form-control input-sm" value="<?php echo e($venta->calzado); ?>">


         </div>


        </div>


        <div class="col-xs-6 col-sm-6 col-md-6">


         <div class="form-group">


          <input type="text" name="fecha_de_compra" id="fecha_de_compra" class="form-control input-sm" value="<?php echo e($venta->fecha_de_compra); ?>">


         </div>


        </div>


       </div>




       <div class="form-group">


          <input type="text" name="tipo_de_pago" id="tipo_de_pago" class="form-control input-sm" value="<?php echo e($venta->tipo_de_pago); ?>">


         </div>


       <div class="row">


        <div class="col-xs-6 col-sm-6 col-md-6">


         <div class="form-group">


          <input type="text" name="monto" id="monto" class="form-control input-sm" value="<?php echo e($venta->monto); ?>">


         </div>


        </div>


        

       <div class="row">




        <div class="col-xs-12 col-sm-12 col-md-12">


         <input type="submit"  value="Actualizar" class="btn btn-success btn-block">


         <a href="<?php echo e(route('venta.index')); ?>" class="btn btn-info btn-block" >Atrás</a>


        </div> 




       </div>


      </form>


     </div>


    </div>




   </div>


  </div>


 </section>


 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>