function navbar() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}

/*
//Academico Adminisrativo
$("select#typeMain").change(function () {
    if(this.value == "facultad"){
        $("#addHijito").show();
    }else{
        $("#addHijito").hide();
        $("#childBox").remove();
    }
});





$("select#element").change(function () {
    var text = "";
    if(this.value == "programa"||this.value == "departamento"){
        text = '<center>'+
        '<input type="text" name="code_'+this.value+'" placeholder="Código del '+this.value+'">'+
        '<label>Nombre</label><input type="text" name="name_'+this.value+'" placeholder="nombre del '+this.value+'">'+
        '<label>Sigla</label><input type="text" name="sigla_'+this.value+'" placeholder="sigla del '+this.value+'">'+
        '<label>Activo: </label><input type="checkbox" name="active_'+this.value+'" value="1" checked=""></center>';
    }else{
        $("#childBox").remove();
    }
    $("#childBox").html(text);
});




//Consulta
$('#seeHistorial').on('click',function(e){
    $("#Historial").show();
});


$('#vencimientoProcesos').on('click',function(e){
    $("#procesos").show();
});

$("select#elements").change(function () {
    if(this.value == "Academico"||this.value == "Administrativo"){
        $('#seeHistorial').show();
        $('#procesos').show();
    }else{
        $('#seeHistorial').hide();
        $('#procesos').hide();
    }
});

$("select#calidadSelected").change(function () {
    if(this.value == "Auto_Evaluacion"||this.value == "Registro_Calificado" || this.value == "Acreditacion"){
        $("#result").show();
    }else{
        $("#result").hide();
    }
});

$("select#calidadSelectProcesos").change(function () {
    if(this.value == "Auto_Evaluacion"||this.value == "Registro_Calificado" || this.value == "Acreditacion"){
        $("#resultTwo").show();
    }else{
        $("#resultTwo").hide();
    }
});*/

//Academico Adminisrativo
$("select#main").change(function () {
    console.log(this.value);
    if(this.value == "Academico"){
        $("#Academico").show();
        $("#administrativa").hide();
    }else{
        $("#administrativa").show();
        $("#Academico").hide();
    }
    
});

$("select#element-academica").change(function () {
    console.log(this.value);
    if(this.value != "Seleccione"){
        $("#dependencia").show();
    }else{
        $("#dependencia").hide();
    }
});

$("select#element-administrativa").change(function () {
    console.log(this.value);
    if(this.value != "Seleccione"){
        $("#dependencia").show();
    }else{
        $("#dependencia").show();
    }
    console.log(this.value);
});

$('#addCalidadAdmin').on('click', function (e) {
    $("#calidadAuto").val("calidadAuto");
    $("#addCalidadAdmin").attr("disabled", true);
    $("#calidad").show();
});

$('#addHijito').on('click', function (e) {
    $("#hijito").show();
});


$('#addCalidad').on('click', function (e) {
    $("#calidad").show();
});

$("select#calidadSelect").change(function () {
    if (this.value == "Auto_Evaluacion") {
        $("#optionOne").hide();
        $("#optionTwo").show();
    } else if (this.value == "Registro_Calificado" || this.value == "Acreditacion") {
        var text = '';
        text = '<label>Numero de Resolución (MEN):<label> <input type="number" name="numberMEN_' + this.value + '" placeholder="Número del ' + this.value + '" />' +
            '<label>Tiempo de Vigencia del ' + this.value + ':</label> <input type="number" name="vigencia_' + this.value + '" value="2018" min="2018" >';
        $("#optionOne").html(text);
        $("#optionOne").show();
        $("#optionTwo").hide();
    } else {
        $("#optionOne").hide();
        $("#optionTwo").hide();
    }
});