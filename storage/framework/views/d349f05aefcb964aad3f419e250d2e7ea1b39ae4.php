<?php $__env->startSection('content'); ?>


<div class="row">


  <section class="content">


    <div class="col-md-8 col-md-offset-2">


      <div class="panel panel-default">


        <div class="panel-body">


          <div class="pull-left"><h3>Lista de calzados</h3></div>


          <div class="pull-right">


            <div class="btn-group ">


              <a href="<?php echo e(route('calzado.create')); ?>" class="btn btn-danger" >Añadir Calzado</a>


            </div>


          </div>


          <div class="table-container">


            <table id="mytable" class="table table-bordred table-striped">


             <thead>


               <th>Calzado</th>


               <th>Tipo</th>


               <th>Color</th>


               <th>Talla</th>


               <th>Marca</th>


               <th>Genero</th>
               <th>Edades</th>


               <th>Editar</th>


               <th>Eliminar</th>


             </thead>


             <tbody>


              <?php if($calzados->count()): ?>  


              <?php $__currentLoopData = $calzados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $calzado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  


              <tr>


                <td><?php echo e($calzado->calzado); ?></td>


                <td><?php echo e($calzado->tipo); ?></td>


                <td><?php echo e($calzado->color); ?></td>


                <td><?php echo e($calzado->talla); ?></td>


                <td><?php echo e($calzado->marca); ?></td>


                <td><?php echo e($calzado->genero); ?></td>

                <td><?php echo e($calzado->edades); ?></td>


                <td><a class="btn btn-primary btn-xs" href="<?php echo e(action('CalzadoController@edit', $calzado->id)); ?>" ><span class="glyphicon glyphicon-pencil"></span></a></td>


                <td>


                  <form action="<?php echo e(action('CalzadoController@destroy', $calzado->id)); ?>" method="post">


                   <?php echo e(csrf_field()); ?>



                   <input name="_method" type="hidden" value="DELETE">




                   <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span></button>


                 </td>


               </tr>


               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 


               <?php else: ?>


               <tr>


                <td colspan="8">No hay calzados para registrar</td>


              </tr>


              <?php endif; ?>


            </tbody>




          </table>


        </div>


      </div>


      <?php echo e($calzados->links()); ?>



    </div>


  </div>


</section>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>