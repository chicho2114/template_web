@extends('layouts.admin')
                

@section('content')
<!-- <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< COMIENZO CONTENIDO DE LA CABECERA >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> -->
<!-- Page Heading -->

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Bienvenido 
            <small>Administrador</small>
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                 <i class="fa fa-fw fa-file-text-o"></i>  Inicio
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->
<!-- <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< FINAL CONTENIDO DE LA CABECERA >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> -->

<!-- <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< COMIENZA DONDE VA EL CONTENIDO >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> -->
<div class="row">
    <div class="col-lg-12">

        <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-user-plus fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">1</div>
                            <div>Crear nuevo usuario</div>
                        </div>
                    </div>
                </div>
                <a href={{URL::to('/admin/users/create')}}>
                    <div class="panel-footer">
                        <span class="pull-left">Ver en detalle</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-edit fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">2</div>
                            <div>Modificar Usuario</div>
                        </div>
                    </div>
                </div>
                <a href={{URL::to('/admin/users/edit')}}>
                    <div class="panel-footer">
                        <span class="pull-left">Ver en detalle</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-users fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">3</div>
                            <div>Listar Usuarios</div>
                        </div>
                    </div>
                </div>
                <a href={{URL::to('/admin/users/')}}>
                    <div class="panel-footer">
                        <span class="pull-left">Ver en detalle</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="panel panel-red">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-trash-o fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">4</div>
                            <div>Eliminar Usuario</div>
                        </div>
                    </div>
                </div>
                <a href="modificar_usuario.php">
                    <div class="panel-footer">
                        <span class="pull-left">Ver en detalle</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-cart-plus fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">5</div>
                            <div>Crear Producto</div>
                        </div>
                    </div>
                </div>
                <a href="modificar_materia.php">
                    <div class="panel-footer">
                        <span class="pull-left">Ver en detalle</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-edit fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">6</div>
                            <div>Modificar Producto</div>
                        </div>
                    </div>
                </div>
                <a href="modificar_materia.php">
                    <div class="panel-footer">
                        <span class="pull-left">Ver en detalle</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-tags fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">7</div>
                            <div>Listar Productos</div>
                        </div>
                    </div>
                </div>
                <a href="modificar_grupo.php">
                    <div class="panel-footer">
                        <span class="pull-left">Ver en detalle</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="panel panel-red">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-trash-o fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">8</div>
                            <div>Eliminar Producto</div>
                        </div>
                    </div>
                </div>
                <a href="modificar_materia.php">
                    <div class="panel-footer">
                        <span class="pull-left">Ver en detalle</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="panel panel-green">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-eye fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">8</div>
                            <div>Visualizar Pagina</div>
                        </div>
                    </div>
                </div>
                <a href={{URL::to('/')}}>
                    <div class="panel-footer">
                        <span class="pull-left">Ver en detalle</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>    
    </div>
</div>
<!-- <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< TERMINA DONDE VA EL CONTENIDO >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> -->
@stop