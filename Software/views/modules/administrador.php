<div class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 ct-content">
    <h1>Herramientas de La Dependencia Administrativa</h1>
    <p>Información: La aplicación debe permitir que se gestionen (adicionen, modifiquen e inactiven) la dependencia administrativas, para lo cual se requieren los siguientes datos: código de la dependencia, nombre y sigla.</p>
<br/>
<br/>
<strong>Las dependencias Administrativas son:</strong>
<p>Las dependencias administrativas pueden pertenecer a otra dependencia administrativa.</p>
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
  <br/>


<h4>Gestion de los procesos de autoevaluación.</h4>

<div class="input-daterange datepicker row align-items-center">
    <div class="col">
Fecha de AutoEvaluación
    <div class="form-group">
    <div class="input-group input-group-alternative">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
        </div>
        <input class="form-control datepicker" placeholder="Select date" type="text" value="06/20/2018">
    </div>
</div>
    </div>
    <div class="col">
      Proxima Auto Evaluación
      <div class="form-group">
    <div class="input-group input-group-alternative">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
        </div>
        <input class="form-control datepicker" placeholder="Select date" type="text" value="06/20/2018">
    </div>
</div>
    </div>
</div>

</div>
<div class="ml-auto">
  <button class="btn btn-1 btn-success" type="button">Adicionar</button>
  <button class="btn btn-1 btn-warning" type="button">Modificar</button>
  <button class="btn btn-1 btn-danger" type="button">Inactivar</button>
  
  </div>
</form>