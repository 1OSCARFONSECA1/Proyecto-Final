<?php

#EXTENSIÓN DE CLASES: Los objetos pueden ser extendidos, y pueden heredar propiedades y métodos. Para definir una clase como extensión, debo definir una clase padre, y se utiliza dentro de una clase hija.

require_once "conexion.php";

class Academico extends Conexion{

	#REGISTRO DE USUARIOS
	#-------------------------------------
	public function Adicionar($datosModel,$normal = true){
		$stmt = Conexion::conectar()->prepare("INSERT INTO `dependencia`(`idDependencia`, `main`, `codigo`, `nombre`, `sigla`, `type`, `procesoCalidad`, `Dependencia_idDependencia`) VALUES (NULL,:main,:code,:name,:sigla,:typeMain,null,null)");	

		$stmt->bindParam(":main", $datosModel["main"], PDO::PARAM_STR);
		$stmt->bindParam(":code", $datosModel["code"], PDO::PARAM_STR);
		$stmt->bindParam(":name", $datosModel["name"], PDO::PARAM_STR);
		$stmt->bindParam(":sigla", $datosModel["sigla"], PDO::PARAM_STR);
		$stmt->bindParam(":typeMain", $datosModel["type"], PDO::PARAM_STR);
		if($normal!=true){
		$stmt->bindParam(":calidad", $datosModel["calidad"], PDO::PARAM_STR);
		$stmt->bindParam(":recursividad",  $datosModel["recursividad"], PDO::PARAM_STR);
		}
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
		return $stmt->fetchAll();
		$stmt->close();
	}

}

?>