function navbar() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}


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



$('#addHijito').on('click',function(e){
    $("#hijito").show();
});


$('#addCalidad').on('click',function(e){
    $("#calidad").show();
});

