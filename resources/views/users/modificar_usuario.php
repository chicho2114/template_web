<?php 
session_start();
    include("BD_controller.php");
   $_SESSION["id_usuario"];
   $_SESSION["tipo_usuario"];
   $_SESSION["nombre_usuario"];

 ?>

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
    <link href="admcss/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="admcss/css/sb-admin.css" rel="stylesheet">



    <!-- Custom Fonts -->
    <link href="admcss/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
                <a class="navbar-brand" href="index.php">Perfil de Administrador</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">


                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo  $_SESSION["nombre_usuario"]; ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Perfil</a>
                        </li>
                        <li class="divider"></li>
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
                        <a href="index.php"><i class="fa fa-fw fa-file-text-o"></i> Pagina Principal</a>
                    </li>
                    <li class="active">
                        <a href="javascript:;" data-toggle="collapse" data-target="#users"><i class="fa fa-fw fa-list"></i> Gestionar Usuarios <i class="fa fa-fw fa-caret-down"></i></a>
                                                <ul id="users" class="collapse">
                                                    <li>
                                                        <a href="crear_usuario.php"><i class="fa fa-fw fa-users"></i> Crear Usuario</a>
                                                    </li>
                                                    <li>
                                                        <a href="modificar_usuario.php"><i class="fa fa-fw fa-edit"></i> Modificar Usuario</a>
                                                    </li>
                                                    <li>
                                                        <a href="modificar_usuario.php"><i class="fa fa-fw fa-times"></i> Eliminar Usuario</a>
                                                    </li>
                                                </ul>

                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#materias"><i class="fa fa-fw fa-list"></i> Gestionar Materias <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="materias" class="collapse">
                            <li>
                                <a href="crear_materia.php"><i class="fa fa-fw fa-plus-square-o"></i> Crear Materia</a>
                            </li>
                            <li>
                                <a href="ver_materias.php"><i class="fa fa-fw fa-edit"></i> Modificar Materia</a>
                            </li>
                            <li>
                                <a href="modificar_materia.php"><i class="fa fa-fw fa-times"></i> Eliminar Materia</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="modificar_grupo.php"><i class="fa fa-fw fa-comments-o"></i> Gestionar Grupos</a>
                    </li>
                    <li>
                        <a href="gestionar_publicacion.php"><i class="fa fa-fw fa-eye"></i> Gestionar Publicaciones</a>
                    </li>
                    <li>
                        <a href="gestionar_puntaje.php"><i class="fa fa-fw fa-gears"></i> Gestionar Puntaje</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">
                <!-- <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< COMIENZO CONTENIDO DE LA CABECERA >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> -->
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Modificar Usuario
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                 <a href="index.php"><i class="fa fa-fw fa-file-text-o"></i>  Inicio </a>
                            </li>
                            <li class="active">
                                <i class="fa fa-fw fa-file-text-o"></i>  Modificar Usuario
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
                    <h3>Buscar usuario:</h3>  
                       <form method="POST" action="modificar_usuario.php">
                            
                            <div class="form-group">
                                
                                <label for="cedula" class="col-lg-2 control-label">Cedula:</label>
                                <input type="number" class="form-control" name="cedula" id="cedula" />
                                <input type="hidden" name="buscar" value="true">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success preview-edit-button">
                                    <span class="fa fa-fw fa-search"></span> Buscar
                                </button>
                            </div>
                        </form>               
	                  <?php



                        if ((isset($_POST["buscar"])) && ($_POST["buscar"] == 'true')) {
                            
                                //extract($_POST);

                        $sql = "SELECT * FROM usuario WHERE cedula = '" . $_POST['cedula'] . "'";
                        $consulta = $con->query($sql);
                        $resultado = $con->get_fila($consulta);
                        if ($con->n_filas($consulta) > 0) {
                            
                        
                            ?>
                        <form method="POST" action="gestionar_usuario.php">
                            <h2>Datos del usuario:</h2>
                            <input type="hidden" name="opcion" id="opcion" value="modificar" />
                            <input type="hidden" name="id_usuario" id="id_usuario" value="<?php echo $resultado["id_usuario"]; ?>" />
                            
                            <div class="form-group">
                              <label for="nombre" class="col-lg-2 control-label">Nombre:</label>
                              <input class="form-control" type="text" name="nombre" id="nombre" required value="<?php echo $resultado["nombre"]; ?>"/>
                            </div>

                            <div class="form-group">
                              <label for="apellido" class="col-lg-2 control-label">Apellido:</label>
                              <input class="form-control" type="text" name="apellido" id="apellido" required value="<?php echo $resultado["apellido"]; ?>"/>
                            </div>
                            
                            <div class="form-group">
                              <label for="cedula" class="col-lg-2 control-label">Cedula:</label>
                              <input class="form-control" type="text" name="cedula" id="cedula" required value="<?php echo $resultado["cedula"]; ?>"/>
                            </div>
                            <div class="form-group">
                              <label for="departamento" class="col-lg-2 control-label">Departamento:</label>
                              <select class="form-control" id="departamento" name="departamento" required>
                                <option value="-----"<?php if($resultado["departamento"]== '-----') echo "selected"; ?>>-----</option>
                                <option value="Computacion"<?php if($resultado["departamento"]== 'Computacion') echo "selected"; ?>>Computación</option>
                                <option value="Fisica"<?php if($resultado["departamento"]== 'Fisica') echo "selected"; ?>>Fisica</option>
                                <option value="Biologia"<?php if($resultado["departamento"]== 'Biologia') echo "selected"; ?>>Biologia</option>
                                <option value="Matematica"<?php if($resultado["departamento"]== 'Matematica') echo "selected"; ?>>Matematica</option>
                                <option value="Quimica"<?php if($resultado["departamento"]== 'Quimica') echo "selected"; ?>>Quimica</option>
                              </select>
                            </div>
                            
                            <div class="form-group">
                              <label for="tipo" class="col-lg-2 control-label">Tipo:</label>
                              <select class="form-control" id="tipo" name="tipo" required>
                                <option value="1" <?php if($resultado["id_tipousuario"]== 1) echo "selected"; ?>>Administrador</option>
                                <option value="2" <?php if($resultado["id_tipousuario"]== 2) echo "selected"; ?>>Estudiante</option>
                                <option value="3" <?php if($resultado["id_tipousuario"]== 3) echo "selected"; ?>>Profesor</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label for="email" class="col-lg-2 control-label">E-Mail:</label>
                              <input class="form-control" type="email" name="email" id="email" required value="<?php echo $resultado["email"]; ?>"/>
                            </div>

                            <div class="form-group">
                              <label for="telefono" class="col-lg-2 control-label">Telefono:</label>
                              <input class="form-control" type="numeric" name="telefono" id="telefono" required value="<?php echo $resultado["tlf"]; ?>"/>
                            </div>
                            
                            <div class="form-group">
                              <label for="login" class="col-lg-2 control-label">Login:</label>
                              <input class="form-control" type="text" name="login" id="login" required value="<?php echo $resultado["login"]; ?>"/>
                            </div>

                            <div class="form-group">
                              <label for="pass" class="col-lg-2 control-label">Contraseña:</label>
                              <input class="form-control" type="password" name="pass" id="pass" required value="<?php echo $resultado["password"]; ?>"/>
                            </div>
                            <div class="form-group">
                              <label for="repass" class="col-lg-4 control-label">Repetir contraseña:</label>
                              <input class="form-control" type="password" name="repass" id="repass" required />
                            </div>

                            <div class="form-group">
                        
                                <div class="col-sm-12 text-right">
                                    <button type="submit" class="btn btn-info preview-edit-button">
                                        <span class="fa fa-fw fa-refresh"></span> Limpiar
                                    </button>
                                    <button type="submit" class="btn btn-success preview-edit-button">
                                        <span class="fa fa-fw fa-pencil-square-o"></span> Modificar
                                    </button>


                                    
                                    
                                </div>                        
                            </div>

                        </form>

                        <form method="POST" action="gestionar_usuario.php">
                        <div class="form-group">
                            <div class="col-sm-12 text-right">
                                <input type="hidden" name="opcion" id="opcion" value="eliminar" />
                                <input type="hidden" name="id_usuario" id="id_usuario" value="<?php echo $resultado["id_usuario"]; ?>" />   
                                <button type="submit" class="btn  btn-danger preview-edit-button">
                                    <span class="fa fa-fw fa-times"></span> Eliminar
                                </button>
                            </div>
                        </form>


                        <?php }else {
                            echo '<div class="alert alert-danger"> Este usuario no existe</div>';
                        } } ?>
                    </div>
                    </div>
                    </div>
                    
                    </div>
                </div>
                <!-- <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< TERMINA DONDE VA EL CONTENIDO >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="admcss/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="admcss/js/bootstrap.min.js"></script>

</body>

</html>
