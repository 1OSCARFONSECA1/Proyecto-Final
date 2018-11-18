    <h1>Herramientas de La Dependencia Academica</h1>
    <p>Información: La aplicación debe permitir que se gestionen (adicionen, modifiquen e inactiven) las dependencias académicas para lo cual se requieren los siguientes datos: código de la dependencia, nombre y sigla.</p>
<br/>
<form method="post">
<input type="hidden" name="option" value="Academico" />
  <center>
        <input type="text" name="code" placeholder="código de la dependencia">
        <input type="text" name="name" placeholder="nombre" />
        <input type="text" name="sigla" placeholder="sigla" />
        <br/>
  <button name="add" type="submit">Adicionar</button>
  <button name="mod" type="submit">Modificar</button>
  <button name="off" type="submit">Inactivar</button>
  <button name="list" type="submit">Lista</button>
  </center>
</form>
<br/>
<p><strong>Las dependencias académicas son:</strong> Las facultades, los programas y los departamentos. <i>Una facultad puede tener uno o más programas y uno o más
departamentos.</i></p>
<?php
$controller = new MvcController();
if(isset($_POST["list"])){
?>
<h2>Lista Academica</h2>
<table border="1" class="ml-auto mr-auto">
		<thead>
			<tr>
				<th>Código</th>
				<th>Nombre</th>
				<th>Sigla</th>
				<th></th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<?php
			$controller -> vistaAcademic();
			$controller -> borrarUsuarioController();
			?>
		</tbody>
	</table>
<?php
}else{
	$controller->academic();
}
?>