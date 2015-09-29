<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Perfil de administrador</title>

    <!-- Bootstrap Core CSS -->
    {!!Html::style('admincss/css/bootstrap.min.css')!!}
    <!--<link href="admincss/css/bootstrap.min.css" rel="stylesheet">-->

    

    <!-- Custom CSS -->
    {!!Html::style('admincss/css/sb-admin.css')!!}
    <!--<link href="admincss/css/sb-admin.css" rel="stylesheet">-->



    <!-- Custom Fonts -->
    {!!Html::style('admincss/font-awesome-4.1.0/css/font-awesome.min.css')!!}
    <!--<link href="admincss/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">-->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->



</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Barra de navegacion</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href={{URL::to('/admin')}}>Perfil de Administrador</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">


                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php /*echo  $_SESSION["nombre_usuario"]; */?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <!--<li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Perfil</a>
                        </li>
                        <li class="divider"></li>-->
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Salir</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href={{URL::to('/admin')}}><i class="fa fa-fw fa-file-text-o"></i> Pagina Principal</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#users"><i class="fa fa-fw fa-list"></i> Gestionar Usuarios <i class="fa fa-fw fa-caret-down"></i></a>
                                                <ul id="users" class="collapse">
                                                    <li>
                                                        <a href={{URL::to('/admin/users/create')}}><i class="fa fa-fw fa-user-plus"></i> Crear Usuario</a>
                                                    </li>
                                                    <li>
                                                        <a href={{URL::to('/admin/users/edit')}}><i class="fa fa-fw fa-edit"></i> Modificar Usuario</a>
                                                    </li>
                                                    <li>
                                                        <a href={{URL::to('/admin/users/')}}><i class="fa fa-fw fa-users"></i> Listar Usuarios</a>
                                                    </li>
                                                    <li>
                                                        <a href={{URL::to('/admin/users/edit')}}><i class="fa fa-fw fa-trash-o"></i> Eliminar Usuario</a>
                                                    </li>
                                                </ul>

                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#productos"><i class="fa fa-fw fa-list"></i> Gestionar Productos <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="productos" class="collapse">
                            <li>
                                <a href={{URL::to('/admin/product/create')}}><i class="fa fa-fw fa-cart-plus"></i> Crear Producto</a>
                            </li>
                            <li>
                                <a href={{URL::to('/admin/product/edit')}}><i class="fa fa-fw fa-edit"></i> Modificar Producto</a>
                            </li>
                            <li>
                                <a href={{URL::to('/admin/product/')}}><i class="fa fa-fw fa-search"></i> Buscar Producto</a>
                            </li>
                            <li>
                                <a href={{URL::to('/admin/product/')}}><i class="fa fa-fw fa-tags"></i> Listar Productos</a>
                            </li>
                            <li>
                                <a href={{URL::to('/admin/product/destroy')}}><i class="fa fa-fw fa-trash-o"></i> Eliminar Producto</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href={{URL::to('/')}}><i class="fa fa-fw fa-eye"></i> Visualizar Pagina</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

               
                <!-- <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< COMIENZA DONDE VA EL CONTENIDO >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> -->
                @yield('content')
                <!-- <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< TERMINA DONDE VA EL CONTENIDO >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->



    </div>
    <!-- /#wrapper -->
    <!-- FOOOTER        <div class="modal-footer">
      <div class="wrap">    
             <div class="copy_right">
                <p>Copy rights (c). All rights Reseverd | Template by  <a href="http://w3layouts.com" target="_blank">W3Layouts</a> </p>
           </div>   
           <div class="modal-footer">
            <ul>
                <li><a href="#">Terms of Use</a> : </li>
                <li><a href="#">Privacy Policy</a> : </li>
                <li><a href="contact.html">Contact Us</a> : </li>
                <li><a href="#">Sitemap</a></li>
            </ul>
           </div>       
        </div>
    </div> -->


    <!-- jQuery -->
    {!!Html::script('admincss/js/jquery.js')!!}
    <!-- <script src="admincss/js/jquery.js"></script>-->

    <!-- Bootstrap Core JavaScript -->
    {!!Html::script('admincss/js/bootstrap.min.js')!!}
    <!-- <script src="admincss/js/bootstrap.min.js"></script>-->

</body>

</html>
