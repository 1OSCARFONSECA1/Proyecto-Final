<div>
    <h1>Herramientas de La Dependencia Academica</h1>
    <p>Información: La aplicación debe permitir que se gestionen (adicionen, modifiquen e inactiven) las dependencias académicas para lo cual se requieren los siguientes datos: código de la dependencia, nombre y sigla.</p>
<br/>
<br/>
<strong>Las dependencias académicas son:</strong>
<p>las facultades, los programas y los departamentos. <i>Una facultad puede tener uno o más programas y uno o más
departamentos.</i></p>
<hr/>
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
			$vistaUsuario = new MvcController();
			$vistaUsuario -> vistaUsuariosController();
			$vistaUsuario -> borrarUsuarioController();
			?>
		</tbody>
	</table>
<br/><br/>
<form>
  <div class="row">
    <div class="col-md-4">
      <div class="form-group">
        <input type="text" class="form-control" id="code" placeholder="código de la dependencia">
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-group">
        <input type="text" placeholder="Regular" id="name" class="form-control" placeholdedr="nombre" />
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-group">
        <input type="text" placeholder="Regular" id="sigla" class="form-control" placeholdedr="sigla" />
      </div>
    </div>
  </div>
  <div class="ml-auto">
  <button class="btn btn-1 btn-success" type="button">Adicionar</button>
  <button class="btn btn-1 btn-warning" type="button">Modificar</button>
  <button class="btn btn-1 btn-danger" type="button">Inactivar</button>
  
  </div>
</form>
</div>