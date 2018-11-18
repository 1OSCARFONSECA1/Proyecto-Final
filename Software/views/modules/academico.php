    <h1>Herramientas de La Dependencia Academica</h1>
    <p>Información: La aplicación debe permitir que se gestionen (adicionen, modifiquen e inactiven) las dependencias académicas para lo cual se requieren los siguientes datos: código de la dependencia, nombre y sigla.</p>
<br/>
  <form method="post">
<input type="hidden" name="main" value="Academico" />
  <center>
  <label>Código de </label>
  <select name="type">
  <option value="Seleccione" selected>Seleccione</option>
  <option value="facultad">facultad</option>
  <option value="programa">programa</option>
  <option value="departamento">departamento</option>
</select>
  <input type="text" name="code" placeholder="Código" />
  <label>Nombre</label>
  <input type="text" name="name" placeholder="nombre" />
  <label>Sigla</label>
  <input type="text" name="sigla" placeholder="sigla" />
  <label>Activo (sí)</label><input type="checkbox" name="active" value="true" checked>
  <br/><br/><hr/>
  <label>Adicionar</label>
  <select id="element">
  <option value="Seleccione" selected>Seleccione</option>
  <option value="programa">programa</option>
  <option value="departamento">departamento</option>
</select>
<br/><hr/><br/>
  <button name="add" type="submit">Adicionar</button>
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
			?>
		</tbody>
	</table>
<?php
}else{
	$controller->academic();
}
?>