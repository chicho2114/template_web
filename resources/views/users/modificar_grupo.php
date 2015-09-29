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
                    <li>
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
                                <a href="modificar_materia.php"><i class="fa fa-fw fa-edit"></i> Modificar Materia</a>
                            </li>
                            <li>
                                <a href="modificar_materia.php"><i class="fa fa-fw fa-times"></i> Eliminar Materia</a>
                            </li>
                        </ul>
                    </li>
                    <li class="active">
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
                           Gestionar Grupos
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                 <a href="index.php"><i class="fa fa-fw fa-file-text-o"></i>  Inicio </a>
                            </li>
                            <li class="active">
                                <i class="fa fa-fw fa-file-text-o"></i>  Gestionar Grupo
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <!-- <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< FINAL CONTENIDO DE LA CABECERA >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> -->
               
                <!-- <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< COMIENZA DONDE VA EL CONTENIDO >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> -->
                

                <?php
                    if (isset($_POST["opcion"])) {
                        //extract($_POST);

                        if ($_POST["opcion"] == 'eliminar') {

                            $con->eliminar('grupo', "id_grupo=" . $_POST["id_grupo"]);
                            echo"<script>alert('Materia eliminada con exito');</script>";
                        }
                    } 

                 ?>



                <div class="row">
                    <div class="col-lg-12">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-6">  
                    <div class="panel-body form-horizontal payment-form"> 
                    

                    <h3>Buscar grupo:</h3>  
                       <form method="POST" action="modificar_grupo.php">
                            
                            <div class="form-group">
                                <label for="nombre" class="col-lg-2 control-label">Nombre:</label>
                                <input class="form-control" name="grupo" id="grupo" />
                                <input type="hidden" name="buscar" value="true">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success preview-edit-button">
                                    <span class="fa fa-fw fa-search"></span> Buscar Grupo
                                </button>
                            </div>
                        </form> 

                        <form method="POST" action="modificar_grupo.php">
                            <div class="form-group">
                                <input type="hidden" name="todos" value="todos">
                                <button type="submit" class="btn btn-primary preview-edit-button">
                                    <span class="fa fa-fw fa-search"></span> Ver todos los grupos
                                </button>
                            </div>
                        </form> 

                    </div>
                    </div>
                    

                <?php 

                if ((isset($_POST["todos"])) && ($_POST["todos"] == 'todos')) {
                    
                
                    $sql = "SELECT * FROM grupo";
                    $resultado = $con->query($sql);
                    $num_rows = $con->n_filas($resultado);
                    if ($num_rows > 0){ 
                        while ($datos = $con->get_fila($resultado)){ ?>
                        <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Profesor</th>
                                <th>Materia</th>
                                <th>Cant. Estudiantes</th>
                            </tr>
                        </thead>
                         <tbody>

                        <tr>
                <td><?php echo $datos["nombre"]; ?></td>
                <td><?php $sql = "SELECT * FROM usuario WHERE id_usuario = " . $datos["id_profesor"]; $nombre = $con->get_fila($con->query($sql)); echo $nombre["nombre"] . " " .$nombre["apellido"];?></td>
                <td><?php $sql = "SELECT * FROM materia WHERE id_materia = " . $datos["id_materia"]; $nombre = $con->get_fila($con->query($sql)); echo $nombre["nombre"]; ?></td>
                <td><?php $sql = "SELECT * FROM grupo_estudiante WHERE id_grupo = " . $datos["id_grupo"]; echo $con->n_filas($con->query($sql)); ?></td>
 
                <td>
                    <form method="POST" action="modificar_grupo.php">
                        <input type="hidden" name="opcion" id="opcion" value="eliminar">
                        <input type="hidden" name="id_grupo" id="id_grupo" value="<?php  echo $datos["id_grupo"];?>">
                        <button type="submit" class="btn btn-danger preview-add-button">
                            <span class="glyphicon glyphicon-remove"></span> Eliminar
                        </button>
                    </form>
                </td>
            </tr>


        <?php } ?>
        </tbody>
</table>
</div>
            <?php   }
                else{
                    echo '<div class=" col-lg-4 "></div>';
                    echo '<div class=" col-lg-6 alert alert-danger"> No hay grupos disponibles</div>';
                }

}
else{
                if ((isset($_POST["buscar"])) && ($_POST["buscar"] == 'true')) {
                        $sql = "SELECT * FROM grupo WHERE nombre = '" . $_POST["grupo"] . "';";
                        $resultado = $con->query($sql);
                        $num_rows = $con->n_filas($resultado);
                        if ($num_rows > 0){ 
                            while ($datos = $con->get_fila($resultado)){ ?>
                            <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Profesor</th>
                                <th>Materia</th>
                                <th>Cant. Estudiantes</th>
                            </tr>
                        </thead>
                         <tbody>

                            <tr>
                    <td><?php echo $datos["nombre"]; ?></td>
                    <td><?php $sql = "SELECT * FROM usuario WHERE id_usuario = " . $datos["id_profesor"]; $nombre = $con->get_fila($con->query($sql)); echo $nombre["nombre"] . " " .$nombre["apellido"];?></td>
                    <td><?php $sql = "SELECT * FROM materia WHERE id_materia = " . $datos["id_materia"]; $nombre = $con->get_fila($con->query($sql)); echo $nombre["nombre"]; ?></td>
                    <td><?php $sql = "SELECT * FROM grupo_estudiante WHERE id_grupo = " . $datos["id_grupo"]; echo $con->n_filas($con->query($sql)); ?></td>

                                <td>
                                    <form method="POST" action="modificar_grupo.php">
                                        <input type="hidden" name="opcion" id="opcion" value="eliminar">
                                        <input type="hidden" name="id_grupo" id="id_grupo" value="<?php  echo $datos["id_grupo"];?>">
                                        <button type="submit" class="btn btn-danger preview-add-button">
                                            <span class="glyphicon glyphicon-remove"></span> Eliminar
                                        </button>
                                    </form>
                                </td>
                            </tr>

                        <?php } ?>
                        </tbody>
                </table>
                            <?php   }
                                else{
                                    echo '<div class=" col-lg-4 "></div>';
                                    echo '<div class=" col-lg-6 alert alert-danger"> No existe un grupo con ese nombre.</div>';
                                }
                } }
                 ?>
 


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
