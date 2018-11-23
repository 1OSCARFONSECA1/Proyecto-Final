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
	
public function AdicionarHijo($datosModel,$moreData){	
		$stmt = null;
		//Sql Adicion de dependencia 
		if(isset($datosModel["calidadSelect"])&&$datosModel["calidadSelect"]=="Auto_Evaluacion"){
		$stmt = Conexion::conectar()->prepare("INSERT INTO `autoevaluacion` (`idAutoevaluacion`, `fecha_auto`, `fecha_reno`, `Dependencia_idDependencia`) VALUES (NULL, ':dateOne', ':dateTwo', ':code')");	
		//Cambio de variables
		$stmt->bindParam(":dateOne",$datosModel["only-autoevaluacion"], PDO::PARAM_STR);
		$stmt->bindParam(":dateTwo",$datosModel["only-renovacion"], PDO::PARAM_STR);
		}else{
		$stmt = Conexion::conectar()->prepare("INSERT INTO `vigencia_programa` (`idVigencia_Programa`, `tiempoVigencia`, `numeroResolucion`, `fechaResolucion`, `numeroMEN`, `type`, `Dependencia_idDependencia`) VALUES (NULL, '2018-11-14', '123', '2018-11-14', '123', ':calidadSelect', '2')");	
		
			//Cambio de variables
			$stmt->bindParam(":calidadSelect",$datosModel["calidadSelect"], PDO::PARAM_STR);
		}
		$stmt->bindParam(":code", $datosModel["code"], PDO::PARAM_STR);
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
		$stmt = Conexion::conectar()->prepare("SELECT * FROM `dependencia` WHERE `main` = 'Academico' AND codigo = :code  DES");
		$stmt->bindParam(":code", $code, PDO::PARAM_STR);
		if($stmt->execute()){
			return $stmt->fetchAll();
		}else{
			return "error".var_dump($datosModel);
		}
		$stmt->close();

	}

	public function seeDataModifySpecial($code){
		//Prepara la SQL de Datos a Modificar
		$stmt = Conexion::conectar()->prepare("SELECT `codigo`, `nombre`, `sigla`  FROM `dependencia` WHERE `main` = '$code' AND active = '1'");
		if($stmt->execute()){
			return $stmt->fetchAll();
		}else{
			return "error".var_dump($datosModel);
		}
		$stmt->close();

	}

	public function datos($main){
		$stmt = Conexion::conectar()->prepare("SELECT `codigo`, `nombre`, `sigla`  FROM `dependencia` WHERE `main`='$main'");	
		$stmt->execute();
		return $stmt->fetchAll();
		$stmt->close();
	}

}

?>