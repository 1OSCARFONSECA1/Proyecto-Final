<?php

#EXTENSIÓN DE CLASES: Los objetos pueden ser extendidos, y pueden heredar propiedades y métodos. Para definir una clase como extensión, debo definir una clase padre, y se utiliza dentro de una clase hija.

require_once "conexion.php";

class Academico extends Conexion{

	#REGISTRO DE USUARIOS
	#-------------------------------------
	public function Adicionar($datosModel,$normal = true){
		$stmt = Conexion::conectar()->prepare("INSERT INTO `dependencia`(`idDependencia`, `main`, `codigo`, `nombre`, `sigla`, `type`, `procesoCalidad`, `Dependencia_idDependencia`) VALUES ".
		"(NULL,'".$datosModel["main"]."','".$datosModel["code"]."','".$datosModel["name"]."','".$datosModel["sigla"]."','".$datosModel["type"]."',".$datosModel["calidad"].",".$datosModel["recursividad"].")");
		if($stmt->execute()){
			return "success";
		}else{
			return "error".var_dump($datosModel);
		}
		$stmt->close();

	}
	
	public function datos(){
		$stmt = Conexion::conectar()->prepare("SELECT `codigo`, `nombre`, `sigla`  FROM `dependencia` WHERE `main`='Academico'");	
		$stmt->execute();

		#fetchAll(): Obtiene todas las filas de un conjunto de resultados asociado al objeto PDOStatement. 
		return $stmt->fetchAll();

		$stmt->close();

	}

}

?>