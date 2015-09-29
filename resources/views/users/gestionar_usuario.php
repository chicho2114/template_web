<?php 
session_start();
    include("BD_controller.php");
   $_SESSION["id_usuario"];
   $_SESSION["tipo_usuario"];
   $_SESSION["nombre_usuario"];
extract($_POST);


		


	if ($opcion == 'crear') {

		if($repass == $pass){
			//Verificamos que el usuario a insertar ya no este en la base de datos
			$sql = "SELECT id_usuario FROM usuario WHERE cedula =  '".$cedula."'";
			if(!$con->n_filas($con->query($sql))) {
				echo "el usuario no esta en la bd";
				$data = array('id_usuario' => NULL, 'nombre' => $nombre, 'apellido' => $apellido, 'cedula' => $cedula, 'login' => $login, 'password' => $pass, 'departamento' => $departamento, 'email' => $email, 'tlf' => $telefono, 'id_tipousuario' => $tipo);
				if($con->agregar('usuario',"",$data)){
					echo "Usuario agregado con exito";
					//Direccionamos a nuestra página principal del sistema.
		  			echo"<script>alert('Usuario agregado con exito');";
		  			header ("Location: index.php");
				}
			}
			else{
				echo "El usuario ya se encuentra en la BD";
			}
		}
		else{
			echo "Las contraseñas no coinciden.";
		}

	}
	else{
		if ($opcion == 'modificar') {

			$data = array('id_usuario' => $id_usuario, 'nombre' => $nombre, 'apellido' => $apellido, 'cedula' => $cedula, 'login' => $login, 'password' => $pass, 'email' => $email, 'tlf' => $telefono, 'departamento' => $departamento, 'id_tipousuario' => $tipo);
			$con->modificar('usuario','id_usuario='. $id_usuario , $data);
					echo "Usuario modificado con exito";
					//Direccionamos a nuestra página principal del sistema.
		  			echo"<script>alert('Usuario modificado con exito');</script>";
		  			header ("Location: index.php");

		  			/*if ($_POST["id_grupo"]) {
		  				echo "Aqui se envia la varible";
						/*echo "'<form method='"POST\" action=\"gestionar_grupo.php\" name=\"id_grupo\" id=\"id_grupo\" "
						  . " <input class=\"input\" value=\"  $_POST[\"id_grupo\"]\" type=\"hidden\" name=\"id_grupo\" />"
						  . "<input type=\"submit\" name=\"submit\" value=\"\" class=\"analiza\" />"
						  . "</form>"
						  . "<body onload=\"document.id_grupo.submit();\">";
		  			 }
		  			 else{
		  			 	echo "Aqui no se envia la variable";
		  			 }*/
		}
		else{
			if ($opcion == 'eliminar') {

				$con->eliminar('usuario', "id_usuario=" . $id_usuario);
				echo "Usuario eliminado";
				header ("Location: index.php");
			}
		}
	}

 ?>