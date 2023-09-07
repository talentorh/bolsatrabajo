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