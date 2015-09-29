<?php 
	class BD_con{
		private $usuario,$host,$pass, $bd,$link; // usuarios, host, clave, base de datos y conexion de mysql;

			//CONSTRUCTOR;
			function BD_con($h,$u,$p,$bd){
				$this->usuario= $u;
				$this->host= $h;
				$this->pass= $p;
				$this->bd= $bd;
			}
			//GETTERS AND SETTERS;
			public function get_usuario(){
					return $this->usuario;
			}
			public function get_host(){
					return $this->host;
			}
			public function get_pass(){
					return $this->pass;
			}
			public function get_bd(){
					return $this->bd;
			}
			public function set_usuario($param){
				 $this->usuario= $param;
			}
			public function set_host($param){
				 $this->host= $param;
			}
			public function set_pass($param){
				 $this->pass= $param;
			}
			public function set_bd($param){
					$this->bd= $param;
			}
			
			protected  function desconectar(){
				if($this->link!=null){

					mysql_close($this->link);
					$this->link=null;
				}
			}
			protected function conectar(){
				$link=null; $bool=true;
				if(!empty($this->usuario) && !empty($this->host )  ){
						$link= mysql_connect( $this->host,$this->usuario, $this->pass );
						$this->link= $link;
						if($link!=null){
							$this->link;
							mysql_select_db( $this->bd , $link);
							if(  mysql_error($link)!='' ){
								$bool=false;
							}
						}		
				}

				return $bool;
			}
			public function get_fila($rs){ // obtiene la siguiente fila de una consulta (rs);
				return mysql_fetch_assoc($rs);
			}
			public function query($query){ // devuelve el resultado de una consulta de Mysql;
				$rs_query=null;
				if( $this->link==null && $this->conectar() ){	
					
					$rs_query=mysql_query($query);	
					if(strpos($query, "select") ==FALSE){
						
						
					}else{
						$rs_query=true;
					}
					if(mysql_error($this->link)!=''){

						echo mysql_error($this->link);
						$rs_query=false;
					}
					$this->desconectar();
				}else{
					echo "No se pudo conectar a BD";
				}
				
				
				return $rs_query;
			}
			public function n_filas($rs){ // cantidad de filas de una consulta;

				return   mysql_num_rows($rs);
			}
			/* metodos generales para modificar,eliminar e insertar*/
				public function agregar($tabla,$condicion,$data){

					$query= "insert into ".$tabla. "( ";
					foreach ($data as $key => $value) {
						$query.= $key . ", ";
					}
					$query[strlen($query)-2]=')';
					$query.= " values( ";
					foreach ($data as $key => $value) {
						$query.= "'".$value."'". ", ";
					}
					$query[strlen($query)-2]=')';
					if(!empty($condicion)){
						$query.= "where ". $condicion;
					}
					
					//echo $query;
					
					return $this->query($query);
				}

				public function modificar($tabla,$condicion,$data){
					$query= "update ".$tabla. " set ";
					foreach ($data as $key => $value) {
						$query.= $key . "= '".$value."', ";
					}
					$query[strlen($query)-2]=' ';
					if(!empty($condicion)){
						$query.= " where ". $condicion;
					}
					//echo $query;
					return $this->query($query);
				}
				public function eliminar($tabla,$condicion){
					$query= "delete from ". $tabla;
					if(!empty($condicion)){
						$query.= " where ". $condicion;
					}
					//echo $query;
					return $this->query($query);

				}


	
	}
	$con = new BD_con("localhost","root","","principal");
	




		
 ?>