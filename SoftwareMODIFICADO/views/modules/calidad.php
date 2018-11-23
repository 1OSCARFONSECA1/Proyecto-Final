<?php
//Inicia el Controlador
$controller = new MvcController();
//Realiza todo el proceso de Administradores (Resultados o Acciones)
$controller->dependencias();
?>
<h1>Bienvenid@ al sitio de gestion de las dependencias</h1>
<hr/>
<form method="post">
    <label>Seleccione Dependencia:</label>
    <select name="main" id="main">
        <option value="Seleccione" selected>Seleccione</option>
        <option value="academica">Academica</option>
        <option value="Administrativo">Administrativa</option>
    </select>
			<br/>
			<label>Activo: </label><input type="checkbox" name="active" value="1" checked>
			<br/>
    <div id="dependencia-academica" style="display:none">
    <label>Adicionar</label>
            <select id="element-calidad-academica" name="element-academica">
              <option value="Seleccione" selected>Seleccione</option>
              <option value="programa">programa</option>
              <option value="facultad">facultad</option>
              <option value="departamento">departamento</option>
            </select>
    </div>
    <div id="dependencia administrativa" style="display:none">
        <div id="content-admin">
            <label>Fecha AutoEvaluaciónn: </label> <input type="date" name="autoevaluacion">
            <label>Fecha Proxima Autoevaluación:</label> <input type="date" name="renovacion">
        </div>
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
            </div>
            <div id="optionTwo"  style="display:none">
            <label>Fecha AutoEvaluaciónn: </label> <input type="date" name="autoevaluacion">
            <label>Fecha Proxima Autoevaluación:</label> <input type="date" name="renovacion">
            </div>
            <hr/>
        </div>
    <button name="add" type="submit">Adicionar</button>
	<br/>
	
</form>
