@extends('layouts.admin')          

@section('content')
<!-- <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< COMIENZO CONTENIDO DE LA CABECERA >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> -->
<!-- Page Heading -->

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Lista de usuarios
        </h1>
        <ol class="breadcrumb">
                <li >
                     <a href={{URL::to('/admin/')}}><i class="fa fa-fw fa-file-text-o"></i>  Inicio </a>
                </li>
               <li class="active">
                     <i class="fa  "></i>Lista de usuarios
                </li>
        </ol>
    </div>
</div>
<!-- /.row -->
<!-- <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< FINAL CONTENIDO DE LA CABECERA >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> -->

@if(Session::has('message'))
<center>
<div class="alert alert-success alert-dismissable">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  {{Session::get('message')}}
</div></center>

@endif

@include('alerts.request')

<!-- <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< COMIENZA DONDE VA EL CONTENIDO >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> -->
<div class="row">
    <div class="col-lg-12"> 
    <div class="panel-body form-horizontal payment-form"> 


<table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo</th>
                <th>Fecha de creación</th>
                <th>Operación</th>
            </tr>
        </thead>
        @foreach($users as $user)
        <tbody>
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->apellido}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->created_at}}</td>

        <td>
            
            {!!link_to_route('admin.users.edit', $title = 'Editar', $parameters = $user->id, $attributes = ['class'=>'btn btn-info preview-add-button'])!!}
            {!!link_to_action('UserController@destroy', $title = 'Eliminar', $parameters = $user->id, $attributes = ['class'=>'btn btn-danger preview-add-button', 'method'=>'DELETE'])!!}

               <!-- <button type="submit" class="btn btn-info preview-add-button">
                    <span class="glyphicon glyphicon-remove"></span> Editar
                </button>
                <button type="submit" class="btn btn-danger preview-add-button">
                    <span class="glyphicon glyphicon-remove"></span> Eliminar
                </button>-->
            
        </td>
        </tr>



        </tbody>
        @endforeach
</table>

       
        
         
    </div>
    </div>
</div>
<!-- <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< TERMINA DONDE VA EL CONTENIDO >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> -->
@stop