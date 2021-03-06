@extends('layouts.admin')
                

@section('content')

<!-- <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< COMIENZO CONTENIDO DE LA CABECERA >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> -->
    <!-- Page Heading -->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Crear Usuario
            </h1>
            <ol class="breadcrumb">
                <li >
                     <a href={{URL::to('/admin/')}}><i class="fa fa-fw fa-file-text-o"></i>  Inicio </a>
                </li>
               <li class="active">
                     <i class="fa  "></i>Crear Usuario
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
            <!--<form method="POST" action={{URL::to('admin.store')}}>
			    <h2>Datos del usuario:</h2>
			    <input type="hidden" name="opcion" id="opcion" value="crear" />
			    <div class="form-group">
			      <label for="nombre" class="col-lg-2 control-label">Nombre:</label>
			      <input class="form-control" type="text" name="nombre" id="nombre" required/>
			    </div>

			    <div class="form-group">
			      <label for="apellido" class="col-lg-2 control-label">Apellido:</label>
			      <input class="form-control" type="text" name="apellido" id="apellido" required/>
			    </div>
			    
			    <div class="form-group">
			      <label for="email" class="col-lg-2 control-label">E-Mail:</label>
			      <input class="form-control" type="email" name="email" id="email" required />
			    </div>

			    <div class="form-group">
			      <label for="pass" class="col-lg-2 control-label">Contraseña:</label>
			      <input class="form-control" type="password" name="pass" id="pass" required/>
			    </div>
			    <div class="form-group">
			      <label for="repass" class="col-lg-4 control-label">Repetir contraseña:</label>
			      <input class="form-control" type="password" name="repass" id="repass" required/>
			    </div>

			    <div class="form-group">
            
                    <div class="col-sm-12 text-right">
                        <button type="reset" class="btn btn-info preview-edit-button">
                            <span class="fa fa-fw fa-refresh"></span> Limpiar
                        </button>
                        <button type="submit" class="btn btn-success preview-edit-button">
                            <span class="fa fa-fw fa-check"></span> Crear
                        </button>
                    </div>
            
            	</div>

			</form>-->

{!! Form::open(['route'=>'admin.users.store', 'method'=>'POST']) !!}

@include('users.forms.user')
<!--<div class="form-group">
    <div class="col-sm-12 text-right">
        {!!Form::reset('Limpiar campos', ['class' => 'btn btn-info preview-edit-button'])!!}
        {!!Form::submit('Crear usuario', ['class' => 'btn btn-success preview-edit-button'])!!}
    </div>
</div>-->

<div class="form-group">
            
                    <div class="col-sm-12 text-right">
                        <button type="reset" class="btn btn-info preview-edit-button">
                            <span class="fa fa-fw fa-refresh"></span> Limpiar
                        </button>
                        <button type="submit" class="btn btn-success preview-edit-button">
                            <span class="fa fa-fw fa-check"></span> Crear
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