<?php 
	session_start();
    include("BD_controller.php");
   $_SESSION["id_usuario"];
   $_SESSION["tipo_usuario"];
   $_SESSION["nombre_usuario"];


extract($_POST);

	if ($opcion == 'crear') {

			//Verificamos que el usuario a insertar ya no este en la base de datos
			$sql = "SELECT * FROM materia WHERE nombre =  '".$nombre."';";
			if(!$con->n_filas($con->query($sql))) {
				
				$data = array('id_materia' => NULL, 'nombre' => $nombre, 'codigo' => $codigo, 'departamento' => $departamento);
				if($con->agregar('materia',"",$data)){
					echo "Materia agregada con exito";
					//Direccionamos a nuestra página principal del sistema.
		  			echo"<script>alert('Materia agregada con exito');</script>";
		  			header ("Location: modificar_materia.php");
				}
			}
			else{
				echo "Esta materia ya se encuentra en la BD";
			}


	}
	else{
		if ($opcion == 'modificar') {

			$data = array('id_materia' => $id_materia, 'nombre' => $nombre, 'codigo' => $codigo, 'departamento' => $departamento);
			$con->modificar('materia',"id_materia= '". $id_materia . "';" , $data);
					//Direccionamos a nuestra página principal del sistema.
		  			echo"<script>alert('Materia modificada con exito');</script>";
		  			header ("Location: modificar_materia.php");
		}
		else{
			if ($opcion == 'eliminar') {

				$con->eliminar('materia', "id_materia= " . $id_materia);
				echo"<script>alert('Materia eliminada con exito');</script>";
				header ("Location: modificar_materia.php");
			}
		}
	}

 ?>