<?php 

class Paginas{
	
	public function enlacesPaginasModel($enlaces){

	$module = "views/modules/";
		if($enlaces == "ingresar" || $enlaces == "usuarios" || $enlaces == "editar" || $enlaces == "salir"){
			$module .= $enlaces;
		}

		
		switch ($enlaces) {
				case 'dependencia-administrativa':
				$module .= "administrador";
				break;
				case 'dependencia-academica':
				$module .= "academico";
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
		$module.=".php";
		return $module;
		}
}
?>