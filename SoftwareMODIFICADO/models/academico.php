<?php

#EXTENSIÓN DE CLASES: Los objetos pueden ser extendidos, y pueden heredar propiedades y métodos. Para definir una clase como extensión, debo definir una clase padre, y se utiliza dentro de una clase hija.

require_once "conexion.php";

class Academico extends Conexion{

	#REGISTRO DE USUARIOS
	#-------------------------------------
	public function Adicionar($datosModel,$normal = true){
		//Sql Adicion de dependencia 
		$stmt = Conexion::conectar()->prepare("INSERT INTO `dependencia`(`idDependencia`, `main`, `codigo`, `nombre`, `sigla`, `type`,`active`, `procesoCalidad`, `Dependencia_idDependencia`) VALUES (NULL,:main,:code,:name,:sigla,:typeMain,:active,null,null)");	
		//Cambio de variables
		$stmt->bindParam(":main", $datosModel["main"], PDO::PARAM_STR);
		$stmt->bindParam(":code", $datosModel["code"], PDO::PARAM_STR);
		$stmt->bindParam(":name", $datosModel["name"], PDO::PARAM_STR);
		$stmt->bindParam(":sigla", $datosModel["sigla"], PDO::PARAM_STR);
		$stmt->bindParam(":typeMain", $datosModel["type"], PDO::PARAM_STR);
		$stmt->bindParam(":active",$datosModel["active"], PDO::PARAM_STR);

		if($normal!=true){
		$stmt->bindParam(":calidad", $datosModel["calidad"], PDO::PARAM_STR);
		$stmt->bindParam(":recursividad",  $datosModel["recursividad"], PDO::PARAM_STR);
		}
		//Ejecuta la SQL
		if($stmt->execute()){
			return "success";
		}else{
			return "error".var_dump($datosModel);
		}
		//Cierra la conexión
		$stmt->close();
	}
	
	public function inactivar($code,$active=false){
		//Prepara la SQL de Inactivar
		$stmt = Conexion::conectar()->prepare("UPDATE dependencia SET active = '$active' WHERE codigo = :code");
		//Remplaza el Código en la SQL
		$stmt->bindParam(":code", $code, PDO::PARAM_STR);
		//Ejecuta la SQL
		if($stmt->execute()){
			return "success";
		}else{
			return "error".var_dump($datosModel);
		}
		//Cierra la conexión
		$stmt->close();
	}

	public function seeDataModify($code,$active=false){
		//Prepara la SQL de Datos a Modificar
		$stmt = Conexion::conectar()->prepare("SELECT `codigo`, `nombre`, `sigla`  FROM `dependencia` WHERE `main` = 'Academico' AND codigo = :code");
		$stmt->bindParam(":code", $code, PDO::PARAM_STR);
		if($stmt->execute()){
			return $stmt->fetchAll();
		}else{
			return "error".var_dump($datosModel);
		}
		$stmt->close();

	}

	public function seeDataModifySpecial($main,$active=false){
		//Prepara la SQL de Datos a Modificar
		$stmt = Conexion::conectar()->prepare("SELECT *  FROM `dependencia` WHERE `main` = '$main' AND :active = '$active'");
	
		if($stmt->execute()){
			$item = $stmt->fetchAll();
				$table = '<h2>Lista Academica</h2>
		<table border="1" class="ml-auto mr-auto">
			<thead>
				<tr>
					<th>Código</th>
					<th>Nombre</th>
					<th>Sigla</th>
					<th></th>
					<th></th>
					<th></th>
				</tr>
			</thead>
			<tbody>';
		foreach($respuesta as $row => $item){
		$table .= '<tr>
				<td>'.$item["codigo"].'</td>
				<td>'.$item["nombre"].'</td>
				<td>'.$item["sigla"].'</td>
				<td><a href="index.php?action=dependencia-academica&mod=true&codigo='.$item["codigo"].'"><button>Editar</button></a></td>
				<td><a href="index.php?action=dependencia-academica&off=false&codigo='.$item["codigo"].'"><button>Inactivar</button></a>
				<a href="index.php?action=dependencia-academica&off=true&codigo='.$item["codigo"].'"><button>Activar</button></a></td>
			</tr>';
		}
		$table .= '</tbody></table>';
		return $table;
		}else{
			return "error".var_dump($datosModel);
		}
		$stmt->close();

	}

	public function datos(){
		$stmt = Conexion::conectar()->prepare("SELECT `codigo`, `nombre`, `sigla`  FROM `dependencia` WHERE `main`='Academico'");	
		$stmt->execute();
		return $stmt->fetchAll();
		$stmt->close();
	}

}

?>