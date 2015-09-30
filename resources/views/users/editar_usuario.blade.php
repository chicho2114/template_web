@extends('layouts.admin')
                

@section('content')

<!-- <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< COMIENZO CONTENIDO DE LA CABECERA >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> -->
    <!-- Page Heading -->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Editar Usuario
            </h1>
            <ol class="breadcrumb">
                <li >
                     <a href={{URL::to('/admin/')}}><i class="fa fa-fw fa-file-text-o"></i>  Inicio </a>
                </li>
               <li class="active">
                     <i class="fa  "></i>Editar Usuario
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->
    <!-- <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< FINAL CONTENIDO DE LA CABECERA >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> -->
   

    <!-- <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< COMIENZA DONDE VA EL CONTENIDO >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> -->
    <div class="row">
        <div class="col-lg-12">
        <div class="col-lg-4"></div>
        <div class="col-lg-6">  
        <div class="panel-body form-horizontal payment-form">  
        @include('alerts.request')                 


		{!! Form::model($user, ['route'=> ['admin.users.update', $user->id], 'method'=>'PUT']) !!}
			@include('users.forms.user')
			<!--<div class="form-group">
			    <div class="col-sm-12 text-right">
			        {!!Form::reset('Limpiar campos', ['class' => 'btn btn-info preview-edit-button'])!!}
			        {!!Form::submit('Crear usuario', ['class' => 'btn btn-success preview-edit-button'])!!}
			    </div>
			</div>-->

			<div class="form-group">
			            
	            <div class="col-sm-12 text-right">
		            <a href={{URL::to('/admin/users')}}>
		                <button type="submit" class="btn btn-info preview-edit-button">
		                    <span class="fa fa-fw fa-check"></span> Cancelar
		                </button>
	                </a>
	                <button type="submit" class="btn btn-success preview-edit-button">
	                    <span class="fa fa-fw fa-check"></span> Actualizar
	                </button>
	            </div>
	        </div>
	         
		{!! Form::close() !!}
		{!! Form::open(['route'=> ['admin.users.destroy', $user->id], 'method'=>'DELETE']) !!}
		<div class="form-group">
	            <div class="col-sm-12 text-right">
        	        <button type="submit" class="btn btn-danger preview-edit-button">
	                    <span class="glyphicon glyphicon-remove"></span> Eliminar
	                </button>
    	        </div>
        </div>
		{!! Form::close() !!}
		   
	    
	        


        </div>
        </div>
        </div>
        
        </div>

    <!-- <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< TERMINA DONDE VA EL CONTENIDO >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> -->
@stop