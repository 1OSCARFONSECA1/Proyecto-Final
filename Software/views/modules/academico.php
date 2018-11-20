<h1>Herramientas de La Dependencia Academica</h1>
<p>Información: La aplicación debe permitir que se gestionen (adicionen, modifiquen e inactiven) las dependencias académicas para lo cual se requieren los siguientes datos: código de la dependencia, nombre y sigla.</p>
<br/>
<form method="post">
    <input type="hidden" name="main" value="Academico" />
    <center>
        <label>Código de </label>
        <select name="type" id="typeMain">
            <option value="Seleccione" selected>Seleccione</option>
            <option value="facultad">facultad</option>
            <option value="programa">programa</option>
            <option value="departamento">departamento</option>
        </select>
        <input type="number" name="code" placeholder="Código" min="0" />
        <label>Nombre</label>
        <input type="text" name="name" placeholder="nombre" />
        <label>Sigla</label>
        <input type="text" name="sigla" placeholder="sigla" />
        <label>Activo: </label><input type="checkbox" name="active" value="1" checked>
        <br/>
        <hr/><br/>
        <button id="addHijito" style="display:none" type="button">Adicionar Facultad (Hijo)</button>
        <button id="addCalidad" type="button">Adicionar Proceso de Calidad</button>
        <br/><br/>
        <div id="hijito">
            <hr/> Adicionar hijo:
            <label>Adicionar</label>
            <select id="element">
              <option value="Seleccione" selected>Seleccione</option>
              <option value="programa">programa</option>
              <option value="departamento">departamento</option>
            </select>
            <div id="childBox"></div>
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
        <br/>
        <button name="add" type="submit">Adicionar</button>
        <button name="list" type="submit">Lista</button>
    </center>
</form>
<br/>
<p><strong>Las dependencias académicas son:</strong> Las facultades, los programas y los departamentos. <i>Una facultad puede tener uno o más programas y uno o más
departamentos.</i></p>
<?php
//Inicia el Controlador
$controller = new MvcController();
//Realiza todo el proceso de Academia (Resultados o Acciones)
$controller->academic();
?>