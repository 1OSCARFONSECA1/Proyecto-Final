<h1>Herramientas de Consulta</h1>
<br/>
<label>Seleccione Dependencia:</label>
<select id="element">
              <option value="Seleccione" selected>Seleccione</option>
              <option value="Academico">Academico</option>
              <option value="Administrativo">Administrativo</option>
            </select>
<br/>

<button id="seeHistorial" style="display:none" type="button">Ver el Historial</button>
<button id="vencimientoProcesos" style="display:none" type="button">Vencimiento de procesos</button>

<div id="Historial">
    <label>Historial de Dependencia:</label>
    <select id="calidadSelect" name="calidadSelect">
              <option value="Seleccione" selected>Seleccione</option>
              <option value="Registro_Calificado">Registro Calificado</option>
              <option value="Acreditacion">Acreditación</option>
              <option value="Auto_Evaluacion">Auto-Evaluacion</option>
            </select>
    <div id="optionOne" style="display:none">
    </div>
    <div id="optionTwo" style="display:none">
    </div>
    <div id="result">
        <h2> Resultados (reciente al más antiguo)</h2>
        <p>
            Registro Calificado, Acreditaciónn: Fecha que la obtuvo, numero de men, vigencia, fecha de vigencia. Auto evaluacion: Fecha de la auto evaluación y la prox. auto
        </p>
    </div>
</div>
<hr/>
<div id="procesos">
    <label>Vencimiento de procesos en meses</label>
    <input type="number" name="filtroMes" placeholder="Número de mes..." min="1" max="12" />
    <label>Seleccione proceso de calidad </label>
    <select id="calidadSelect" name="calidadSelect">
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