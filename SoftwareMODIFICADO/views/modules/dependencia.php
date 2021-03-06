<?php
//Inicia el Controlador
$controller = new MvcController();
//Realiza todo el proceso de Administradores (Resultados o Acciones)
$controller->academic();
?>
<h1>Bienvenid@ al sitio de gestion de las dependencias</h1>
<hr/>
<form method="post">
    <label>Seleccione Dependencia:</label>
    <select name="main" id="main">
        <option value="Seleccione" selected>Seleccione</option>
        <option value="Academico">Academico</option>
        <option value="Administrativo">Administrativa</option>
    </select>
	<br/>
    <div id="Academico"  style="display:none">
    <label>Adicionar</label>
            <select id="element-academica" name="element-academica">
              <option value="Seleccione" selected>Seleccione</option>
              <option value="programa">programa</option>
              <option value="facultad">facultad</option>
              <option value="departamento">departamento</option>
            </select>
    </div>
    <div id="administrativa"  style="display:none">
    <label>Adicionar</label>
            <select id="element-administrativa" name="element-administrativa">
              <option value="Seleccione" selected>Seleccione</option>
              <option value="recotria">rectoria</option>
              <option value="vicerecotria">vicerecotria</option>
              <option value="departamento-financiamiento">Departamento de Financiamiento</option>
            </select>
    </div>
    <br/>
	<div id="dependencia">
        <label>Codigo<input type="number" name="code" placeholder="Digite por favor el código de la dependencia" min="0" /></label>
        <label>Nombre</label><input type="text" name="name" placeholder="Digite por favor el nombre de la dependencia" />
        <label>Sigla</label><input type="text" name="sigla" placeholder="Digite por favor la sigla de la dependencia" />
		<label>Activo: </label><input type="checkbox" name="active" value="1" checked>
    
		<button id="addCalidad" name="addCalidad" type="button">Adicionar Proceso de Calidad</button>
	<button name="add" type="submit">Adicionar</button>

	</div>
	<hr/>
	        <div id="calidad">
        <h3>Proceso de calidad</h3>
            <label>Añadir </label>
            <select id="calidadSelect" name="calidadSelect">
              <option value="Seleccione" selected>Seleccione</option>
              <option value="Registro_Calificado">Registro Calificado</option>
              <option value="Acreditacion">Acreditación</option>
              <option value="Auto_Evaluacion">Auto-Evaluacion</option>
            </select>
            <br/><br/>
            <div id="optionOne" style="display:none">
			        <h3>Proceso de calidad</h3>
            <label>Añadir Auto-Evaluacion</label>
            <label>Fecha AutoEvaluaciónn: </label> <input type="date" name="only-autoevaluacion">
            <label>Fecha Proxima Autoevaluación:</label> <input type="date" name="only-renovacion">
            <hr/>
            </div>
            <div id="optionTwo"  style="display:none">
            <label>Fecha AutoEvaluaciónn: </label> <input type="date" name="autoevaluacion">
            <label>Fecha Proxima Autoevaluación:</label> <input type="date" name="renovacion">
            </div>
            <hr/>
        </div>
	
	<button name="list" type="submit">Lista</button>
	
</form>