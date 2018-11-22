<?php 

class Paginas{
	
	public function enlacesPaginasModel($enlaces){
	//Define la ruta de los modulos a usar
	$module = "views/modules/";
	//Verifica si el enlace es para el ingreso, registro o alguna involucación con el usuario
		if($enlaces == "ingresar" || $enlaces == "usuarios" || $enlaces == "editar" || $enlaces == "salir"){
			$module .= $enlaces;
		}else{
			//Si no es algun usuario, busca que enlace es el correcto
		switch ($enlaces) {
				case 'dependencia-administrativa':
				$module .= "administrador";
				break;
				case 'dependencia-academica':
				$module .= "academico";
				break;
				case 'consulta':
				$module .= "consulta";
				break;
				case "cambio":
				$module .= "usuarios";
				break;
				case "fallo":
				$module .= "index";
				break;
				case "ok":
				$module .= "index-options";
				break;
				default:
				$module .= "index";
				break;
		}
	}
	//Adiciona la extension PHP
		$module.=".php";
		//Regresa la URL Completa
		return $module;
		}
}
?>