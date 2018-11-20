    <h1>Herramientas de La Dependencia Administrativa</h1>
    <p>Información: La aplicación debe permitir que se gestionen (adicionen, modifiquen e inactiven) la dependencia administrativas, para lo cual se requieren los siguientes datos: código de la dependencia, nombre y sigla.</p>
<br/>
<form method="post">
    <input type="hidden" name="main" value="Academico" />
    <center>
        <input type="text" name="code" placeholder="Código Dependencia Administrativa" />
        <label>Nombre</label>
        <input type="text" name="name" placeholder="Nombre de Dependencia Administrativa" />
        <label>Sigla</label>
        <input type="text" name="sigla" placeholder="Sigla de Dependencia Administrativa" />
        <label>Activo: </label><input type="checkbox" name="active" value="1" checked>
        <br/>
        <hr/><br/>
        <button id="addHijito"  type="button">Adicionar Dep. Administrativa (Hijo)</button>
        <button id="addCalidadAdmin" type="button">Adicionar Proceso de Calidad</button>
        <br/><br/>
        <div id="hijito">
            <hr/> Adicionar hijo:
            <label>Adicionar Dependencia Administrativa</label>
            <br/>
            <input type="text" name="code_hijo" placeholder="Código Dependencia Administrativa" />
        <label>Nombre</label>
        <input type="text" name="name_hijo" placeholder="Nombre de Dependencia Administrativa" />
        <label>Sigla</label>
        <input type="text" name="sigla_hijo" placeholder="Sigla de Dependencia Administrativa" />
        <label>Activo: </label><input type="checkbox" name="active_hijo" value="1" checked>
        </div>
        <hr/>
        <div id="calidad">
        <h3>Proceso de calidad</h3>
            <label>Añadir Auto-Evaluacion</label>
            <input id="calidadAuto" type="hidden" value="">
            <br/>
            <label>Fecha AutoEvaluaciónn: </label> <input type="date" name="autoevaluacion">
            <label>Fecha Proxima Autoevaluación:</label> <input type="date" name="renovacion">
            <hr/>
        </div>
        <br/>
        <button name="add" type="submit">Adicionar</button>
        <button name="list" type="submit">Lista</button>
    </center>
</form>
<br/>
<strong>Las dependencias Administrativas son:</strong>
<p>Las dependencias administrativas pueden pertenecer a otra dependencia administrativa.</p>
<?php
//Inicia el Controlador
$controller = new MvcController();
//Realiza todo el proceso de Administradores (Resultados o Acciones)
$controller->administradores();
?>