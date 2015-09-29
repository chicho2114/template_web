<?php 
include ("BD_controller.php");

//extract($_POST);
$opcion="Modificar";
$tabla= "usuarios";
	switch ($opcion) {
		case 'Agregar':
			// LEER arrays en PHP lo que esta antes de la fecha es el indice, y lo que apunta la flecha es el valor
			// el indice es el nombre del CAMPO en la BD;
			$data = array('nombre' => "LOL" , 'pass' => "24571581", 'email' => "fff@gmail.com" );
			if( $con->agregar($tabla,"",$data) ){
				echo "****AGREGADO CON EXITO******";
			}else{
				echo "****ERROR AL INSERTAR******";
			}
		break;
		case 'Modificar':
			$data = array('nombre' => "LOCOEMETRA" , 'pass' => "22222", 'email' => "g@gmailcom" );
			$con->modificar($tabla,'id= 60', $data);
		break;
		case 'Eliminar':
			$con->eliminar($tabla, "id= 60");
		break;
		
	}
	//EJEMPLO LISTAR USUARIOS
	$rs= $con->query("select * from usuarios");
	
	while($row= $con->get_fila($rs)){
		echo $row["nombre"]. "<br>";
	}
 ?>