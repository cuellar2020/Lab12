<?php $__env->startSection('content'); ?>


<div class="row">


  <section class="content">


    <div class="col-md-8 col-md-offset-2">


      <div class="panel panel-default">


        <div class="panel-body">


          <div class="pull-left"><h3>Lista de Ventas</h3></div>


          <div class="pull-right">


            <div class="btn-group ">


              <a href="<?php echo e(route('venta.create')); ?>" class="btn btn-danger" >Añadir Venta</a>


            </div>


          </div>


          <div class="table-container">


            <table id="mytable" class="table table-bordred table-striped">


             <thead>


               <th>Descripcion del calzado</th>


               <th>Fecha de compra</th>


               <th>Tipo de pago</th>


               <th>Monto</th>

               <th>Editar</th>


               <th>Eliminar</th>


             </thead>


             <tbody>


              <?php if($ventas->count()): ?>  


              <?php $__currentLoopData = $ventas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $venta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  


              <tr>


                <td><?php echo e($venta->calzado); ?></td>


                <td><?php echo e($venta->fecha_de_compra); ?></td>


                <td><?php echo e($venta->tipo_de_pago); ?></td>


                <td><?php echo e($venta->monto); ?></td>


                <td><a class="btn btn-primary btn-xs" href="<?php echo e(action('VentaController@edit', $venta->id)); ?>" ><span class="glyphicon glyphicon-pencil"></span></a></td>


                <td>


                  <form action="<?php echo e(action('VentaController@destroy', $venta->id)); ?>" method="post">


                   <?php echo e(csrf_field()); ?>



                   <input name="_method" type="hidden" value="DELETE">




                   <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span></button>


                 </td>


               </tr>


               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 


               <?php else: ?>


               <tr>


                <td colspan="8">No hay ventas para registrar</td>


              </tr>


              <?php endif; ?>


            </tbody>




          </table>


        </div>


      </div>


      <?php echo e($ventas->links()); ?>



    </div>


  </div>


</section>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>