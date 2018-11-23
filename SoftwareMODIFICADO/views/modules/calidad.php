<?php
//Inicia el Controlador
$controller = new MvcController();
//Realiza todo el proceso de Administradores (Resultados o Acciones)
$controller->dependencias();
?>
<h1>Bienvenid@ al sitio de gestion de las dependencias</h1>
<hr/>
<form method="post">
    <label>Tipo dependencia </label>
    <select name="main" id="main">
        <option value="Seleccione" selected>Seleccione</option>
        <option value="academica">Academica</option>
        <option value="administrativa">Administrativa</option>
    </select>
    <div id="dependencia-academica">
    <label>Adicionar</label>
            <select id="element-calidad-academica" name="element-academica">
              <option value="Seleccione" selected>Seleccione</option>
              <option value="programa">programa</option>
              <option value="facultad">facultad</option>
              <option value="departamento">departamento</option>
            </select>
    </div>
    <div id="dependencia administrativa">
        <div id="content-admin">
            <label>Fecha AutoEvaluaciónn: </label> <input type="date" name="autoevaluacion">
            <label>Fecha Proxima Autoevaluación:</label> <input type="date" name="renovacion">
        </div>
    </div>
    <button name="add" type="submit">Adicionar</button>
</form>