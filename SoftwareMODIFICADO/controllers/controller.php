<?php

class MvcController{

	#LLAMADA A LA PLANTILLA
	#-------------------------------------

	public function pagina(){	
		
		include "views/template.php";
	
	}

	#ENLACES
	#-------------------------------------

	public function enlacesPaginasController(){
		if(isset( $_GET['action'])){
			$enlaces = $_GET['action'];
		}
		else{
			$enlaces = "index";
		}
		$respuesta = Paginas::enlacesPaginasModel($enlaces);
		include $respuesta;
	}

	#REGISTRO DE USUARIOS
	#------------------------------------
	public function registroUsuarioController(){

		if(isset($_POST["usuarioRegistro"])){
			$datosController = array( "usuario"=>$_POST["usuarioRegistro"], 
								      "password"=>$_POST["passwordRegistro"],
								      "email"=>$_POST["emailRegistro"]);
			$respuesta = Datos::registroUsuarioModel($datosController, "usuarios");

			if($respuesta == "success"){

				header("location:index.php?action=ok");

			}

			else{

				header("location:index.php");
			}

		}

	}

	#INGRESO DE USUARIOS
	#------------------------------------
	public function ingresoUsuarioController(){

		if(isset($_POST["usuarioIngreso"])){

			$datosController = array( "usuario"=>$_POST["usuarioIngreso"], 
								      "password"=>$_POST["passwordIngreso"]);

			$respuesta = Datos::ingresoUsuarioModel($datosController, "usuarios");

			if($respuesta["usuario"] == $_POST["usuarioIngreso"] && $respuesta["password"] == $_POST["passwordIngreso"]){

				session_start();

				$_SESSION["validar"] = true;

				header("location:index.php?action=usuarios");

			}

			else{

				header("location:index.php?action=fallo");

			}

		}	

	}

	#VISTA DE USUARIOS
	#------------------------------------

	public function vistaUsuariosController(){

		$respuesta = Datos::vistaUsuariosModel("usuarios");

		#El constructor foreach proporciona un modo sencillo de iterar sobre arrays. foreach funciona sólo sobre arrays y objetos, y emitirá un error al intentar usarlo con una variable de un tipo diferente de datos o una variable no inicializada.

		foreach($respuesta as $row => $item){
		echo'<tr>
				<td>'.$item["usuario"].'</td>
				<td>'.$item["password"].'</td>
				<td>'.$item["email"].'</td>
				<td><a href="index.php?action=editar&id='.$item["id"].'"><button>Editar</button></a></td>
				<td><a href="index.php?action=usuarios&idBorrar='.$item["id"].'"><button>Borrar</button></a></td>
			</tr>';

		}

	}

	#EDITAR USUARIO
	#------------------------------------

	public function editarUsuarioController(){

		$datosController = $_GET["id"];
		$respuesta = Datos::editarUsuarioModel($datosController, "usuarios");

		echo'<input type="hidden" value="'.$respuesta["id"].'" name="idEditar">

			 <input type="text" value="'.$respuesta["usuario"].'" name="usuarioEditar" required>

			 <input type="text" value="'.$respuesta["password"].'" name="passwordEditar" required>

			 <input type="email" value="'.$respuesta["email"].'" name="emailEditar" required>

			 <input type="submit" value="Actualizar">';

	}

	#ACTUALIZAR USUARIO
	#------------------------------------
	public function actualizarUsuarioController(){

		if(isset($_POST["usuarioEditar"])){

			$datosController = array( "id"=>$_POST["idEditar"],
							          "usuario"=>$_POST["usuarioEditar"],
				                      "password"=>$_POST["passwordEditar"],
				                      "email"=>$_POST["emailEditar"]);
			
			$respuesta = Datos::actualizarUsuarioModel($datosController, "usuarios");

			if($respuesta == "success"){

				header("location:index.php?action=cambio");

			}

			else{

				echo "error";

			}

		}
	
	}

	#BORRAR USUARIO
	#------------------------------------
	public function borrarUsuarioController(){

		if(isset($_GET["idBorrar"])){

			$datosController = $_GET["idBorrar"];
			
			$respuesta = Datos::borrarUsuarioModel($datosController, "usuarios");

			if($respuesta == "success"){

				header("location:index.php?action=usuarios");
			
			}

		}

	}

	#Dependencias
	public function dependencias(){
		
	}


	#Process Academic
	#------------------------------------
	public function academic(){
		
		$respuesta = null;

		if(isset($_POST)){
			$respuesta = $this::functionsPostAcademic();
		}
		if(isset($_GET)){
			$respuesta = $this::functionsGetAcademic();
		}
		//Imprime los resultados obtenidos
		$this::print_answere($respuesta);
	}

	public function print_answere($txt){
		if($txt!=null){
			if (is_array($txt)) {
				echo "<pre>".highlight_string("<?php\n\$data =\n" . var_export($txt, true) . ";\n?>")."</pre>";
			} else {
				echo $txt;
			}
		}
	}

	private function functionsPostAcademic(){
		if(isset($_POST["main"])){
			//Si esta iniciado Main (Academico o Administrativo), obtiene los datos ingresados
			$datosController = array();

			if($_POST["main"]=="academica"){
			$datosController = array( 
				"main"=>$_POST["main"],
				"code"=>$_POST["code"],
				"name"=>$_POST["name"],	
				"sigla"=>$_POST["sigla"],
				"active"=>$_POST["active"],
				"type"=>$_POST["element-academica"]
			);
			}else{
							$datosController = array( 
				"main"=>$_POST["main"],
				"code"=>$_POST["code"],
				"name"=>$_POST["name"],	
				"sigla"=>$_POST["sigla"],
				"active"=>$_POST["active"],
				"type"=>$_POST["element-administrativa"]
				);
			}

			//Presiono el boton de Añadir
			if(isset($_POST["add"])){
				//Regresa un valor "Succesfull" si todo salio correcto de lo contrario regresa "Error"
				Academico::Adicionar($datosController);
				echo self::vistaAcademic();
			}//Presiono el boton de modificar
			else if(isset($_POST["mod"])){

			}else if(isset($_POST["list"])){
				//Imprime una lista de resultados de Academia
				echo self::vistaAcademic();
			}
		}
	}

	private function functionsGetAcademic(){
			//Proceso de Inactivación de Dependencia
			if(isset($_GET['off'])&&$_GET['off']=="true"){
				return Academico::inactivar($_GET['codigo']);
			}//Proceso de Modificacion (Visualización de Datos) de Dependencia
			else if(isset($_GET['mod'])&&$_GET['mod']=="true"){
				return Academico::seeDataModify($_GET['codigo'],true);
			}else if(isset($_GET['mod'])&&$_GET['mod']=="false"){
				return Academico::seeDataModify($_GET['codigo'],false);
			}
		}



		public function vistaAcademic(){
		$respuesta = Academico::datos();
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
		}

	#Process Administrador
	#------------------------------------
	public function administradores(){
		
		$respuesta = null;

		if(isset($_POST)){

		}else if(isset($_GET)){

		}
		//Imprime los resultados obtenidos
		$this::print_answere($respuesta);
	}
}
?>