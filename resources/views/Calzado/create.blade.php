

@extends('layouts.layout')


@section('content')


<div class="row">


 <section class="content">


  <div class="col-md-8 col-md-offset-2">


   @if (count($errors) > 0)


   <div class="alert alert-danger">


    <strong>Error!</strong> Revise los campos obligatorios.<br><br>


    <ul>


     @foreach ($errors->all() as $error)


     <li>{{ $error }}</li>


     @endforeach


    </ul>


   </div>


   @endif


   @if(Session::has('success'))


   <div class="alert alert-info">


    {{Session::get('success')}}


   </div>


   @endif




   <div class="panel panel-default">


    <div class="panel-heading">


     <h3 class="panel-title">Nuevo Calzado</h3>


    </div>


    <div class="panel-body">     


     <div class="table-container">


      <form method="POST" action="{{ route('calzado.store') }}"  role="form">


       {{ csrf_field() }}


       <div class="row">


        <div class="col-xs-6 col-sm-6 col-md-6">


         <div class="form-group">


          <input type="text" name="calzado" id="calzado" class="form-control input-sm" placeholder="Calzado">


         </div>


        </div>


        <div class="col-xs-6 col-sm-6 col-md-6">


         <div class="form-group">


          <input type="text" name="tipo" id="tipo" class="form-control input-sm" placeholder="Tipo">


         </div>


        </div>


       </div>




       <div class="form-group">


        <textarea name="color" class="form-control input-sm" placeholder="color"></textarea>


       </div>


       <div class="row">


        <div class="col-xs-6 col-sm-6 col-md-6">


         <div class="form-group">


          <input type="text" name="talla" id="talla" class="form-control input-sm" placeholder="Talla del zapato">


         </div>


        </div>


        <div class="col-xs-6 col-sm-6 col-md-6">


         <div class="form-group">


          <input type="text" name="marca" id="marca" class="form-control input-sm" placeholder="Marca">


         </div>


        </div>


       </div>


       <div class="form-group">


        <textarea name="genero" class="form-control input-sm" placeholder="Genero"></textarea>


       </div>
        <div class="form-group">


        <textarea name="edades" class="form-control input-sm" placeholder="Edades"></textarea>


       </div>


       <div class="row">




        <div class="col-xs-12 col-sm-12 col-md-12">


         <input type="submit"  value="Guardar" class="btn btn-success btn-block">


         <a href="{{ route('calzado.index') }}" class="btn btn-info btn-block" >Atr??s</a>


        </div> 




       </div>


      </form>


     </div>


    </div>




   </div>


  </div>


 </section>


 @endsection