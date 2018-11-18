<?php 

class Paginas{
	
	public function enlacesPaginasModel($enlaces){

		if($enlaces == "ingresar" || $enlaces == "usuarios" || $enlaces == "editar" || $enlaces == "salir"){
			$module =  "views/modules/".$enlaces.".php";
		}


		switch ($enlaces) {
			case 'dependencia-administrativa':
			$module .= "administrador";
				break;
				case 'dependencia-academica':
				$module .= "academico";
				break;
				case "cambio":
				$module =  "views/modules/usuarios.php";
				break;
				case "fallo":
				$module =  "views/modules/index.php";
				break;
				case "ok":
				$module =  "views/modules/index-options.php";
				break;
				default:
				$module =  "views/modules/index.php";
				break;
		}
		return $module;
		}
}
?>