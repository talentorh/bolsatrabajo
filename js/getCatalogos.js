$(document).ready(function(){
    $("#cbx_estado").change(function () {

        $('#cbx_localidad').find('option').remove().end().append('<option value="whatever"></option>').val('whatever');
        
        $("#cbx_estado option:selected").each(function () {
            id_estado = $(this).val();
            $.post("includes/getMunicipio.php", { id_estado: id_estado }, function(data){
                $("#cbx_municipio").html(data);
            });            
        });
    })
});

$(document).ready(function(){
    $("#cbx_municipio").change(function () {
        $("#cbx_municipio option:selected").each(function () {
            id_municipio = $(this).val();
            $.post("includes/getLocalidad.php", { id_municipio: id_municipio }, function(data){
                $("#cbx_localidad").html(data);
            });            
        });
    })
});

$(document).ready(function(){
    $("#cbx_empresaone").change(function () {
        $("#cbx_empresaone option:selected").each(function () {
            id_catalogo = $(this).val();
            $.post("includes/getDependencias.php", { id_catalogo: id_catalogo }, function(data){
                $("#cbx_dependenciaone").html(data);
            });            
        });
    })
});

$(document).ready(function(){
    $("#cbx_empresados").change(function () {
        $("#cbx_empresados option:selected").each(function () {
            id_catalogo = $(this).val();
            $.post("includes/getDependencias.php", { id_catalogo: id_catalogo }, function(data){
                $("#cbx_dependenciados").html(data);
            });            
        });
    })
});

$(document).ready(function(){
    $("#cbx_empresatres").change(function () {
        $("#cbx_empresatres option:selected").each(function () {
            id_catalogo = $(this).val();
            $.post("includes/getDependencias.php", { id_catalogo: id_catalogo }, function(data){
                $("#cbx_dependenciatres").html(data);
            });            
        });
    })
});