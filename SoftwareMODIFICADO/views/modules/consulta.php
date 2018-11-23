<h1>Herramientas de Consulta</h1>
<br/>
<form method="post">
    <center>
<label>Seleccione Dependencia:</label>
<select id="main" name="main">
              <option value="Seleccione" selected>Seleccione</option>
              <option value="Academico">Academico</option>
              <option value="Administrativo">Administrativo</option>
            </select>
<br/>

<button id="seeHistorial" style="display:none" type="button">Ver el Historial</button>
<button id="vencimientoProcesos" style="display:none" type="button">Vencimiento de procesos</button>

<div id="Historial" style="display:none">
    <label>Historial de Dependencia:</label>
    <select id="calidadSelectHistorial" name="calidadSelectHistorial">
              <option value="Seleccione" selected>Seleccione</option>
              <option value="Registro_Calificado">Registro Calificado</option>
              <option value="Acreditacion">Acreditación</option>
              <option value="Auto_Evaluacion">Auto-Evaluacion</option>
            </select>
    
    <div id="result">
        <h2> Resultados (reciente al más antiguo)</h2>
        <p>
            Registro Calificado, Acreditaciónn: Fecha que la obtuvo, numero de men, vigencia, fecha de vigencia. Auto evaluacion: Fecha de la auto evaluación y la prox. auto
        </p>
    </div>
</div>
<hr/>
<div id="procesos" style="display:none">
    <label>Vencimiento de procesos en meses</label>
    <input type="number" name="filtroMes" placeholder="Número de mes..." min="1" max="12" />
    <label>Seleccione proceso de calidad </label>
    <select id="calidadSelectProcesos" name="calidadSelectProcesos">
              <option value="Seleccione" selected>Seleccione</option>
              <option value="Registro_Calificado">Registro Calificado</option>
              <option value="Acreditacion">Acreditación</option>
              <option value="Auto_Evaluacion">Auto-Evaluacion</option>
            </select>
    <div id="resultTwo">
        <h2> Resultados (reciente al más antiguo)</h2>
        <p>
            Ejemplo: - NOmbre de la dependecia, fecha del ultimo proceso, fecha del proximo proceso.</p>
    </div>
</div>
<button name="list-special" type="submit">Lista</button>
</center>
</form>