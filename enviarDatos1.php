<?php

    require 'conexion.php';
    date_default_timezone_set('America/Mexico_City');    
    $DateAndTime = date('Y-m-d', time());
    extract($_POST);
   
    $consulta = $conexion2->query("SELECT curp, rfc from datospersonales where curp = '$curp'");
    $row = mysqli_fetch_assoc($consulta);

    $validacurp = $row['curp'];
    $rfcvalida = $row['rfc'];

    if($validacurp != $curp || $rfc != $rfcvalida ){
        
    $sql = $conexion2->query("INSERT INTO datospersonales(id_datopersonal, puesto, profesion, curp, nombre, appaterno, apmaterno, estado, delegacion, localidad, colonia, calle, numexterior, numinterior, codigopostal,
    fechanacimiento, entidadnacimiento, rfc, sexo, cartanaturalizacion, telefonocasa, telefonocelular, otrotelefono, correoelectronico, etapaseleccion, eliminado, fechainicio, fechafinal) VALUES(NULL, '$select_puesto', '$profesion', '$curp',
    '$nombre', '$appaterno', '$apmaterno', '$cbx_estado', '$cbx_municipio', '$cbx_localidad', '$colonia', '$calle', '$numexterior', '$numinterior', '$codigopostal', '$fechanacimiento', '$entidadnacimiento', '$rfc', '$sexo',
    '$naturalizacion', '$telefonocasa', '$telefonocelular', '$otrotelefono', '$correo', 0 , 0, '$DateAndTime', '-')");

    if(empty($nombreformacionmedia)){
        $sql = $conexion2->query("INSERT INTO estudiosmediosup(id_datopersonal, rfc, nombreformacionmedia, nombremediasuperior, fechainicio, fechatermino, tiempocursado, documentomediosuperior) VALUES(NULL, '$curp',
        '-', '-', '-', '-', '-', '-')");
        }else{
            $sql = $conexion2->query("INSERT INTO estudiosmediosup(id_datopersonal, rfc, nombreformacionmedia, nombremediasuperior, fechainicio, fechatermino, tiempocursado, documentomediosuperior) VALUES(NULL, '$curp',
            '$nombreformacionmedia', '$nombremediasuperior', '$fechainicio', '$fechatermino', '$tiempocursado', '$documentomediosuperior')");
    }
    
    if(empty($nombreformacionsuperior)){
        $sql = $conexion2->query("UPDATE estudiosmediosup SET  nombreformacionsuperior = '-', nombresuperior='-', fechasuperiorinicio='-', fechasuperiortermino='-', tiempocursadosuperior='-', documentosuperior='-', numerocedulasuperior='-' 
        WHERE rfc = '$curp'");
    
    }else{
        $sql = $conexion2->query("UPDATE estudiosmediosup SET  nombreformacionsuperior = '$nombreformacionsuperior', nombresuperior='$nombresuperior', fechasuperiorinicio='$fechasuperiorinicio', fechasuperiortermino='$fechasuperiortermino', 
        tiempocursadosuperior='$tiempocursadosuperior', documentosuperior='$documentosuperior', numerocedulasuperior='$numerocedulasuperior' 
        WHERE rfc = '$curp'");
    
    }
    if(empty($nombreformacionmaestria)){
        $sql = $conexion2->query("UPDATE estudiosmediosup SET nombreformacionmaestria = '-', nombremaestria = '-', fechainiciomaestria = '-', fechaterminomaestria = '-', tiempocursadomaestria = '-', documentomaestria = '-',
        cedulamaestria = '-' where rfc = '$curp'");


    }else{
        $sql = $conexion2->query("UPDATE estudiosmediosup SET nombreformacionmaestria = '$nombreformacionmaestria', nombremaestria = '$nombremaestria', fechainiciomaestria = '$fechainiciomaestria', fechaterminomaestria = '$fechaterminomaestria', 
        tiempocursadomaestria = '$tiempocursadomaestria', documentomaestria = '$documentomaestria', cedulamaestria = '$cedulamaestria' where rfc = '$curp'");

    }
    if(empty($nombreformacionmaestriados)){
        $sql = $conexion2->query("UPDATE estudiosmediosup SET nombreformacionmaestriados = '-', nombremaestriados = '-', fechainiciomaestriados = '-', fechaterminomaestriados = '-', tiempocursadomaestriados = '-',
        documentomaestriados = '-', cedulamaestriados = '-' WHERE rfc = '$curp'");
    }else{
        $sql = $conexion2->query("UPDATE estudiosmediosup SET nombreformacionmaestriados = '$nombreformacionmaestriados', nombremaestriados = '$nombremaestriados', fechainiciomaestriados = '$fechainiciomaestriados', fechaterminomaestriados = '$fechaterminomaestriados',
         tiempocursadomaestriados = '$tiempocursadomaestriados', documentomaestriados = '$documentomaestriados', cedulamaestriados = '$cedulamaestriados' WHERE rfc = '$curp'");
    }

    if(empty($nombreformacionposgrado)){
        $sql = $conexion2->query("INSERT INTO posgespecilidad(id_datopersonal, rfc, nombreformacionposgrado, nombreposgrado, unidadhospitalaria, fechaposgradoinicio, fechaposgradotermino, tiempocursadoposgrado, documentorecibeposgrado, numerocedulaposgrado) 
        VALUES (NULL, '$curp', '-', '-', '-', '-', '-', '-', '-', '-' )");
    }else{
        $sql = $conexion2->query("INSERT INTO posgespecilidad(id_datopersonal, rfc, nombreformacionposgrado, nombreposgrado, unidadhospitalaria, fechaposgradoinicio, fechaposgradotermino, tiempocursadoposgrado, documentorecibeposgrado, numerocedulaposgrado) 
        VALUES (NULL, '$curp', '$nombreformacionposgrado', '$nombreposgrado', '$unidadhospitalaria', '$fechaposgradoinicio', '$fechaposgradotermino', '$tiempocursadoposgrado', '$documentorecibeposgrado', '$numerocedulaposgrado' )");
    }

    if(empty($nombreformaciondoctorado)){
        $sql = $conexion2->query("UPDATE posgespecilidad SET nombreformaciondoctorado = '-', nombredoctorado= '-', unidadhospitalariadoctorado= '-', fechainiciodoctorado= '-', fechaterminodoctorado= '-', tiempocursadodoctorado= '-', documentorecibedoctorado= '-', numeroceduladoctorado= '-'
         WHERE rfc = '$curp'");
    }else{
        $sql = $conexion2->query("UPDATE posgespecilidad SET nombreformaciondoctorado = '$nombreformaciondoctorado', nombredoctorado= '$nombredoctorado', unidadhospitalariadoctorado= '$unidadhospitalariadoctorado', fechainiciodoctorado= '$fechainiciodoctorado', fechaterminodoctorado= '$fechaterminodoctorado', 
        tiempocursadodoctorado= '$tiempocursadodoctorado', documentorecibedoctorado= '$documentorecibedoctorado', numeroceduladoctorado= '$numeroceduladoctorado'
        WHERE rfc = '$curp'");
    }
    if(empty($nombreformacionaltaesp)){
        $sql = $conexion2->query("INSERT INTO otrosestudiosaltaesp(id_datopersonal, rfc, nombreformacionaltaesp, nombrealtaespecialidad, unidadhospaltaesp, fechainicioaltaesp, fechaterminoaltaesp, tiempocursadoaltaesp, documentorecibealtaesp)
        VALUES (NULL, '$curp','-','-','-','-','-','-','-')");
    }else{
        $sql = $conexion2->query("INSERT INTO otrosestudiosaltaesp(id_datopersonal, rfc, nombreformacionaltaesp, nombrealtaespecialidad, unidadhospaltaesp, fechainicioaltaesp, fechaterminoaltaesp, tiempocursadoaltaesp, documentorecibealtaesp)
        VALUES (NULL, '$curp','$nombreformacionaltaesp','$nombrealtaespecialidad','$unidadhospaltaesp','$fechainicioaltaesp','$fechaterminoaltaesp','$tiempocursadoaltaesp','$documentorecibealtaesp')");
    }
    if(empty($nombreformacionotros)){
        $sql = $conexion2->query("UPDATE otrosestudiosaltaesp SET nombreformacionotros ='-', nombreotrosestudiosuno = '-', fechainiciootrosestudiosuno = '-', fechaterminootrosestudiosuno = '-', documentorecibeestudiosuno = '-'
        WHERE rfc = '$curp'");
    }else{
        $sql = $conexion2->query("UPDATE otrosestudiosaltaesp SET nombreformacionotros ='$nombreformacionotros', nombreotrosestudiosuno = '$nombreotrosestudiosuno', fechainiciootrosestudiosuno = '$fechainiciootrosestudiosuno', 
        fechaterminootrosestudiosuno = '$fechaterminootrosestudiosuno', documentorecibeestudiosuno = '$documentorecibeestudiosuno' WHERE rfc = '$curp'");
    }
    if(empty($nombreformacionotrosdos)){
        $sql = $conexion2->query("UPDATE otrosestudiosaltaesp SET nombreformacionotrosdos ='-', nombreotrosestudiosdos = '-', fechainiciootrosestudiosdos = '-', fechaterminootrosestudiosdos = '-', documentorecibeestudiosdos = '-'
        WHERE rfc = '$curp'");
    }else{
        $sql = $conexion2->query("UPDATE otrosestudiosaltaesp SET nombreformacionotrosdos = '$nombreformacionotrosdos', nombreotrosestudiosdos = '$nombreotrosestudiosdos', fechainiciootrosestudiosdos = '$fechainiciootrosestudiosdos', fechaterminootrosestudiosdos = '$fechaterminootrosestudiosdos',
        documentorecibeestudiosdos = '$documentorecibeestudiosdos' WHERE rfc = '$curp'");
    }
    if(empty($nombreserviciosocial)){
        $sql = $conexion2->query("INSERT INTO socialpracticas(id_datopersonal, rfc, nombreserviciosocial, fechainicioservicio, fechaterminoservicio, laboresservicio, documentorecibeservicio) VALUES(NULL, '$curp',
        '-','-','-','-','-')");
    }else{
        $sql = $conexion2->query("INSERT INTO socialpracticas(id_datopersonal, rfc, nombreserviciosocial, fechainicioservicio, fechaterminoservicio, laboresservicio, documentorecibeservicio) VALUES(NULL, '$curp',
        '$nombreserviciosocial','$fechainicioservicio','$fechaterminoservicio','$laboresservicio','$documentorecibeservicio')"); 
    }
    if(empty($nombrepracticas)){
        $sql = $conexion2->query("UPDATE socialpracticas SET nombrepracticas = '-', fechainiciopracticas = '-', fechaterminopracticas = '-', laborespracticas = '-', documentorecibepracticas = '-'
        WHERE rfc = '$curp'");
    }else{
        $sql = $conexion2->query("UPDATE socialpracticas SET nombrepracticas = '$nombrepracticas', fechainiciopracticas = '$fechainiciopracticas', fechaterminopracticas = '$fechaterminopracticas', laborespracticas = '$laborespracticas', documentorecibepracticas = '$documentorecibepracticas'
        WHERE rfc = '$curp'");
    }
    if(empty($nombreformacioncertificauno)){
        $sql = $conexion2->query("INSERT INTO cerficacion(id_datopersonal, rfc, nombreformacioncertificauno, nombrecertificacionuno, fechainiciocertificacionuno, fechaterminocertificacionuno, documentocertificacionuno)
        VALUES(NULL, '$curp','-','-','-','-','-')");
    }else{
        $sql = $conexion2->query("INSERT INTO cerficacion(id_datopersonal, rfc, nombreformacioncertificauno, nombrecertificacionuno, fechainiciocertificacionuno, fechaterminocertificacionuno, documentocertificacionuno)
        VALUES(NULL, '$curp','$nombreformacioncertificauno','$nombrecertificacionuno','$fechainiciocertificacionuno','$fechaterminocertificacionuno','$documentocertificacionuno')");
    }
    if(empty($nombreformacioncertificaciondos)){
        $sql = $conexion2->query("UPDATE cerficacion SET nombreformacioncertificaciondos = '-', nombrecertificaciondos = '-', fechainiciocertificaciondos = '-', fechaterminocertificaciondos = '-', documentocertificaciondos = '-'
        WHERE rfc = '$curp'");
    }else{
        $sql = $conexion2->query("UPDATE cerficacion SET nombreformacioncertificaciondos = '$nombreformacioncertificaciondos', nombrecertificaciondos = '$nombrecertificaciondos', fechainiciocertificaciondos = '$fechainiciocertificaciondos', 
        fechaterminocertificaciondos = '$fechaterminocertificaciondos', documentocertificaciondos = '$documentocertificaciondos' WHERE rfc = '$curp'");
    }
    if(empty($nombrecursouno)){
        $sql = $conexion2->query("INSERT INTO actualizacionacademica(id_datopersonal, rfc, nombrecursouno, institucioncursouno, fechainiciocursouno, fechaterminocursouno, documentorecibecursouno, nacionalprimero)
        VALUES(NULL, '$curp', '-', '-', '-', '-', '-', '-')");
    }else{
        $sql = $conexion2->query("INSERT INTO actualizacionacademica(id_datopersonal, rfc, nombrecursouno, institucioncursouno, fechainiciocursouno, fechaterminocursouno, documentorecibecursouno, nacionalprimero)
        VALUES(NULL, '$curp', '$nombrecursouno', '$institucioncursouno', '$fechainiciocursouno', '$fechaterminocursouno', '$documentorecibecursouno', '$nacionalprimero')");
    }
    if(empty($nombrecursodos)){
        $sql = $conexion2->query("UPDATE actualizacionacademica SET nombrecursodos = '-', institucioncursodos = '-', fechainiciocursodos = '-', fechaterminocursodos = '-', documentorecibecursodos = '-', nacionalsegundo = '-'
        where rfc = '$curp'");
    }else{
        $sql = $conexion2->query("UPDATE actualizacionacademica SET nombrecursodos = '$nombrecursodos', institucioncursodos = '$institucioncursodos', fechainiciocursodos = '$fechainiciocursodos', fechaterminocursodos = '$fechaterminocursodos', documentorecibecursodos = '$documentorecibecursodos', nacionalsegundo = '$nacionalsegundo'
        where rfc = '$curp'");
    }
    if(empty($nombrecursotres)){
        $sql = $conexion2->query("UPDATE actualizacionacademica SET nombrecursotres = '-', institucioncursotres = '-', fechainiciocursotres = '-', fechaterminocursotres = '-', documentorecibecursotres = '-', nacionaltercero = '-'
        WHERE rfc = '$curp'");
    }else{
        $sql = $conexion2->query("UPDATE actualizacionacademica SET nombrecursotres = '$nombrecursotres', institucioncursotres = '$institucioncursotres', fechainiciocursotres = '$fechainiciocursotres', fechaterminocursotres = '$fechaterminocursotres', documentorecibecursotres = '$documentorecibecursotres', nacionaltercero = '$nacionaltercero'
        WHERE rfc = '$curp'");
    }
    if(empty($empresauno)){
        $sql = $conexion2->query("INSERT INTO explaboralpublico(id_datopersonal, rfc, empresauno, cbx_dependenciauno, puestoempresauno, tipopuestouno, empresadirecionuno, telcontactouno, extencionuno, jefedirectouno, motivoseparacionuno, funcionespricipalesuno, fechainiciouno, fechaterminouno)
        VALUES(NULL, '$curp',0,0,'-','-','-','-','-','-','-','-','-','-')");
    }else{
        $sql = $conexion2->query("INSERT INTO explaboralpublico(id_datopersonal, rfc, empresauno, cbx_dependenciauno, puestoempresauno, tipopuestouno, empresadirecionuno, telcontactouno, extencionuno, jefedirectouno, motivoseparacionuno, funcionespricipalesuno, fechainiciouno, fechaterminouno)
        VALUES(NULL, '$curp','$empresaone','$cbx_dependenciaone','$puestoempresauno','$empresa','$empresadirecionuno','$telcontactouno','$extencionuno','$jefedirectouno','$motivoseparacionuno','$funcionespricipalesuno','$fechainiciouno','$fechaterminouno')");
    }
    if(empty($empresados)){
        $sql = $conexion2->query("UPDATE explaboralpublico SET empresados = 0, cbx_dependenciados = 0, puestoempresados = '-', tipopuestodos = '-', empresadirecdos = '-', telcontactodos = '-', extenciondos = '-', jefedirectodos = '-', motivoseparaciondos = '-', funcionespricipalesdos = '-', fechainicidos = '-', fechaterminodos = '-'
        WHERE rfc = '$curp'");
    }else{
        $sql = $conexion2->query("UPDATE explaboralpublico SET empresados = '$cbx_empresados', cbx_dependenciados = '$cbx_dependenciados', puestoempresados = '$puestoempresados', tipopuestodos = '$tipopuestodos', empresadirecdos = '$empresadirecdos', 
        telcontactodos = '$telcontactodos', extenciondos = '$extenciondos', jefedirectodos = '$jefedirectodos', motivoseparaciondos = '$motivoseparaciondos', funcionespricipalesdos = '$funcionespricipalesdos', fechainicidos = '$fechainicidos', fechaterminodos = '$fechaterminodos'
        WHERE rfc = '$curp'");
    }
    if(empty($empresatres)){
        $sql = $conexion2->query("UPDATE explaboralpublico SET empresatres = 0, cbx_dependenciatres = 0, puestoempresatres = '-', tipopuestotres = '-', empresadirectres = '-', telcontactotres = '-', extenciontres = '-', jefedirectotres = '-', motivoseparaciontres = '-', funcionespricipalestres = '-', fechainiciotres = '-', fechaterminotres = '-' 
        WHERE rfc = '$curp'");
    }else{
        $sql = $conexion2->query("UPDATE explaboralpublico SET empresatres = '$cbx_empresatres', cbx_dependenciatres = '$cbx_dependenciatres', puestoempresatres = '$puestoempresatres', tipopuestotres = '$tipopuestotres', empresadirectres = '$empresadirectres', 
        telcontactotres = '$telcontactotres', extenciontres = '$extenciontres', jefedirectotres = '$jefedirectotres', motivoseparaciontres = '$motivoseparaciontres', funcionespricipalestres = '$funcionespricipalestres', fechainiciotres = '$fechainiciotres', fechaterminotres = '$fechaterminotres' 
        WHERE rfc = '$curp'"); 
    }
    if(empty($nombrelaboralprivada)){
        $sql = $conexion2->query("INSERT INTO explaboralprivado(id_privada, rfc, nombrelaboralprivada, tipopuestoprivada, direccionempresaprivada, telefonoempresaprivada, extencionempresaprivada, nombrejefeprivada, motivoseparacionprivada, funcionesprivada, fechainicioprivada, fechaterminoprivada)
        VALUES(NULL, '$curp','-','-','-','-','-','-','-','-','-','-')");
    }else{
        $sql = $conexion2->query("INSERT INTO explaboralprivado(id_privada, rfc, nombrelaboralprivada, tipopuestoprivada, direccionempresaprivada, telefonoempresaprivada, extencionempresaprivada, nombrejefeprivada, motivoseparacionprivada, funcionesprivada, fechainicioprivada, fechaterminoprivada)
        VALUES(NULL, '$curp','$nombrelaboralprivada','$tipopuestoprivada','$direccionempresaprivada','$telefonoempresaprivada','$extencionempresaprivada','$nombrejefeprivada','$motivoseparacionprivada','$funcionesprivada','$fechainicioprivada','$fechaterminoprivada')");
    }
    if(empty($nombrelaboralprivadados)){
        $sql = $conexion2->query("UPDATE explaboralprivado SET nombrelaboralprivadados ='-', tipopuestoprivadados ='-', direccionempresaprivadados ='-', telefonoempresaprivadados ='-', extencionempresaprivadados ='-', nombrejefeprivadados ='-', 
        motivoseparacionprivadados ='-', funcionesprivadados ='-', fechainicioprivadados ='-', fechaterminoprivadados ='-'
        WHERE rfc='$curp'");
    }else{
        $sql = $conexion2->query("UPDATE explaboralprivado SET nombrelaboralprivadados ='$nombrelaboralprivadados', tipopuestoprivadados ='$tipopuestoprivadados', direccionempresaprivadados ='$direccionempresaprivadados', telefonoempresaprivadados ='$telefonoempresaprivadados', extencionempresaprivadados ='$extencionempresaprivadados', nombrejefeprivadados ='$nombrejefeprivadados', 
        motivoseparacionprivadados ='$motivoseparacionprivadados', funcionesprivadados ='$funcionesprivadados', fechainicioprivadados ='$fechainicioprivadados', fechaterminoprivadados ='$fechaterminoprivadados'
        WHERE rfc='$curp'");
    }
    if(empty($nombrelaboralprivadatres)){
        $sql = $conexion2->query("UPDATE explaboralprivado SET nombrelaboralprivadatres ='-', tipopuestoprivadatres ='-', direccionempresaprivadatres ='-', telefonoempresaprivadatres ='-', extencionempresaprivadatres ='-', nombrejefeprivadatres ='-', 
        motivoseparacionprivadatres ='-', funcionesprivadatres ='-', fechainicioprivadatres ='-', fechaterminoprivadatres ='-'
        WHERE rfc='$curp'");
    }else{
        $sql = $conexion2->query("UPDATE explaboralprivado SET nombrelaboralprivadatres ='$nombrelaboralprivadatres', tipopuestoprivadatres ='$tipopuestoprivadatres', direccionempresaprivadatres ='$direccionempresaprivadatres', telefonoempresaprivadatres ='$telefonoempresaprivadatres', extencionempresaprivadatres ='$extencionempresaprivadatres', nombrejefeprivadatres ='$nombrejefeprivadatres', 
        motivoseparacionprivadatres ='$motivoseparacionprivadatres', funcionesprivadatres ='$funcionesprivadatres', fechainicioprivadatres ='$fechainicioprivadatres', fechaterminoprivadatres ='$fechaterminoprivadatres'
        WHERE rfc='$curp'");
    }
    if(empty($nombrepublicacion)){
        $sql = $conexion2->query("INSERT INTO cientificaidioma(id_datopersonal, rfc, nombrepublicacion, tiempopublicacion, publicadoen, paisdepublicacion)
        VALUES(NULL, '$curp','-','-','-','-')");
    }else{
        $sql = $conexion2->query("INSERT INTO cientificaidioma(id_datopersonal, rfc, nombrepublicacion, tiempopublicacion, publicadoen, paisdepublicacion)
        VALUES(NULL, '$curp','$nombrepublicacion','$tiempopublicacion','$publicadoen','$paisdepublicacion')");
    }
    if(empty($nombreidioma)){
        $sql = $conexion2->query("UPDATE cientificaidioma SET nombreidioma = '-', nivel = '-', niveldedominio = '-', documentoacredita = '-'
        WHERE rfc = '$curp'");
    }else{
        $sql = $conexion2->query("UPDATE cientificaidioma SET nombreidioma = '$nombreidioma', nivel = '$nivel', niveldedominio = '$niveldedominio', documentoacredita = '$documentoacredita'
        WHERE rfc = '$curp'");
    }
    if(empty($otrashabilidades)){
        $sql = $conexion2->query("UPDATE cientificaidioma SET otrashabilidades = '-'
        WHERE rfc = '$curp'");
    }else{
        $sql = $conexion2->query("UPDATE cientificaidioma SET otrashabilidades = '$otrashabilidades'
        WHERE rfc = '$curp'");
    }
    if(empty($selCombo)){
        $sql = $conexion2->query("INSERT INTO manifiesto(id_manifiesto, rfc, familiaresenhraei, autorizodatoscorreo, autorizodatostelefono, autorizodatosgenerales)
        VALUES(NULL, '$curp','-','-','-','-')");
    }else{
        $sql = $conexion2->query("INSERT INTO manifiesto(id_manifiesto, rfc, familiaresenhraei, autorizodatoscorreo, autorizodatostelefono, autorizodatosgenerales)
        VALUES(NULL, '$curp','$selCombo','$correo_elect','$telefono_enlace','$selCombo5')"); 
    }
    if($sql != false){
          
        echo "<script>swal({
            title: 'Good job!',
            text: 'Tus datos han sido enviados y registrados exitosamente, Gracias por postularte a la bolsa de trabajo del HRAEI!',
            icon: 'success',
    });</script>";     

    }else{
        echo "<script>swal({
            title: 'Fatal!',
            text: 'Error al guardar informacion!',
            icon: 'error',
            });</script>"; 
    }

}else{
    echo "<script>swal({
        title: 'Fatal!',
        text: 'Lo sentimos ya te has postulado recientemente a una vacante, no te puedes volver a postular.!',
        icon: 'error',
        });</script>"; 
 
}
?> 

