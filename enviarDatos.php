<?php

    require 'conexion.php';
    date_default_timezone_set('America/Mexico_City');    
    $DateAndTime = date('Y-m-d', time());
    extract($_POST);

    $consulta = $conexion2->query("SELECT curp, rfc from datospersonales where curp = '$curp' and fechainicio BETWEEN '2023-01-01' and '2023-12-01'");
    $row = mysqli_fetch_assoc($consulta);
    $validacurp = $row['curp'];

    if($validacurp != $curp ){
        
    $sql1 = $conexion->prepare("INSERT INTO datospersonales(puesto, profesion, curp, nombre, appaterno, apmaterno, estado, delegacion, localidad, colonia, calle, numexterior, numinterior, codigopostal,
    fechanacimiento, entidadnacimiento, rfc, sexo, cartanaturalizacion, telefonocasa, telefonocelular, otrotelefono, correoelectronico, etapaseleccion, eliminado, fechainicio, fechafinal) VALUES(:puesto, :profesion, :curp,
    :nombre, :appaterno, :apmaterno, :estado, :delegacion, :localidad, :colonia, :calle, :numexterior, :numinterior, :codigopostal, :fechanacimiento, :entidadnacimiento, :rfc, :sexo, :cartanaturalizacion, :telefonocasa, :telefonocelular, :otrotelefono, :correoelectronico, 0 , 0, :fechainicio, '-')");
        $sql1->execute(array(
                ':puesto'=>$select_puesto,
                ':profesion'=>$profesion,
                ':curp'=>$curp,
                ':nombre'=>$nombre,
                ':appaterno'=>$appaterno, 
                ':apmaterno'=>$apmaterno,
                ':estado'=>$cbx_estado,
                ':delegacion'=>$cbx_municipio,
                ':localidad'=>$cbx_localidad,
                ':colonia'=>$colonia,
                ':calle'=>$calle,
                ':numexterior'=>$numexterior,
                ':numinterior'=>$numinterior,
                ':codigopostal'=>$codigopostal,
                ':fechanacimiento'=>$fechanacimiento,
                ':entidadnacimiento'=>$entidadnacimiento,
                ':rfc'=>$rfc,
                ':sexo'=>$sexo,
                ':cartanaturalizacion'=>$naturalizacion,
                ':telefonocasa'=>$telefonocasa,
                ':telefonocelular'=>$telefonocelular,
                ':otrotelefono'=>$otrotelefono,
                ':correoelectronico'=>$correo,
                ':fechainicio'=>$DateAndTime
        ));
    $validarid = $conexion->prepare("SELECT id_datopersonal from datospersonales where curp = :curp");
    $validarid->execute(array(
        ':curp'=>$curp
    ));
    $rowid = $validarid->fetch();

    $id_user = $rowid['id_datopersonal'];
    if(empty($nombreformacionmedia)){
        $sql = $conexion2->query("INSERT INTO estudiosmediosup(nombreformacionmedia, nombremediasuperior, fechainicio, fechatermino, tiempocursado, documentomediosuperior, id_postulado) 
        VALUES('-', '-', '-', '-', '-', '-',$id_user)");
    }else{
            $sql2 = $conexion->prepare("INSERT INTO estudiosmediosup(nombreformacionmedia, nombremediasuperior, fechainicio, fechatermino, tiempocursado, documentomediosuperior, id_postulado) 
            VALUES(:nombreformacionmedia, :nombremediasuperior, :fechainicio, :fechatermino, :tiempocursado, :documentomediosuperior, :id_postulado)");
            $sql2->execute(array(
                ':nombreformacionmedia'=>$nombreformacionmedia,
                ':nombremediasuperior'=>$nombremediasuperior,
                ':fechainicio'=>$fechainicio,
                ':fechatermino'=>$fechatermino,
                ':tiempocursado'=>$tiempocursado,
                ':documentomediosuperior'=>$documentomediosuperior,
                ':id_postulado'=>$id_user
            ));
    
    }
    
    if(empty($nombreformacionsuperior)){
        $sql = $conexion2->query("UPDATE estudiosmediosup SET  nombreformacionsuperior = '-', nombresuperior='-', fechasuperiorinicio='-', fechasuperiortermino='-', tiempocursadosuperior='-', documentosuperior='-', numerocedulasuperior='-' 
        WHERE id_postulado = $id_user");
    }else{
        $sql3 = $conexion->prepare("UPDATE estudiosmediosup SET  nombreformacionsuperior = :nombreformacionsuperior, nombresuperior= :nombresuperior, fechasuperiorinicio=:fechasuperiorinicio, fechasuperiortermino=:fechasuperiortermino, 
        tiempocursadosuperior=:tiempocursadosuperior, documentosuperior=:documentosuperior, numerocedulasuperior=:numerocedulasuperior 
        WHERE id_postulado = :id_postulado");
            $sql3->execute(array(
                ':nombreformacionsuperior'=>$nombreformacionsuperior,
                ':nombresuperior'=>$nombresuperior,
                ':fechasuperiorinicio'=>$fechasuperiorinicio,
                ':fechasuperiortermino'=>$fechasuperiortermino,
                ':tiempocursadosuperior'=>$tiempocursadosuperior,
                ':documentosuperior'=>$documentosuperior,
                ':numerocedulasuperior'=>$numerocedulasuperior,
                ':id_postulado'=>$id_user
            ));
    }
    if(empty($nombreformacionmaestria)){
        $sql = $conexion2->query("UPDATE estudiosmediosup SET nombreformacionmaestria = '-', nombremaestria = '-', fechainiciomaestria = '-', fechaterminomaestria = '-', tiempocursadomaestria = '-', documentomaestria = '-',
        cedulamaestria = '-' where id_postulado = $id_user");
    }else{
        $sql4 = $conexion->prepare("UPDATE estudiosmediosup SET nombreformacionmaestria = :nombreformacionmaestria, nombremaestria = :nombremaestria, fechainiciomaestria = :fechainiciomaestria, fechaterminomaestria = :fechaterminomaestria, 
        tiempocursadomaestria = :tiempocursadomaestria, documentomaestria = :documentomaestria, cedulamaestria = :cedulamaestria where id_postulado = :id_postulado");
            $sql4->execute(array(
                ':nombreformacionmaestria'=>$nombreformacionmaestria,
                ':nombremaestria'=>$nombremaestria,
                ':fechainiciomaestria'=>$fechainiciomaestria,
                ':fechaterminomaestria'=>$fechaterminomaestria,
                ':tiempocursadomaestria'=>$tiempocursadomaestria,
                ':documentomaestria'=>$documentomaestria,
                ':cedulamaestria'=>$cedulamaestria,
                ':id_postulado'=>$id_user
            ));

    }
    if(empty($nombreformacionmaestriados)){
        $sql = $conexion2->query("UPDATE estudiosmediosup SET nombreformacionmaestriados = '-', nombremaestriados = '-', fechainiciomaestriados = '-', fechaterminomaestriados = '-', tiempocursadomaestriados = '-',
        documentomaestriados = '-', cedulamaestriados = '-' WHERE id_postulado = $id_user");
    }else{
        $sql5 = $conexion->prepare("UPDATE estudiosmediosup SET nombreformacionmaestriados = :nombreformacionmaestriados, nombremaestriados = :nombremaestriados, fechainiciomaestriados = :fechainiciomaestriados, fechaterminomaestriados = :fechaterminomaestriados,
            tiempocursadomaestriados = :tiempocursadomaestriados, documentomaestriados = :documentomaestriados, cedulamaestriados = :cedulamaestriados WHERE id_postulado = :id_postulado");
            $sql5->execute(array(
                ':nombreformacionmaestriados'=>$nombreformacionmaestriados,
                ':nombremaestriados'=>$nombremaestriados,
                ':fechainiciomaestriados'=>$fechainiciomaestriados,
                ':fechaterminomaestriados'=>$fechaterminomaestriados,
                ':tiempocursadomaestriados'=>$tiempocursadomaestriados,
                ':documentomaestriados'=>$documentomaestriados,
                ':cedulamaestriados'=>$cedulamaestriados,
                ':id_postulado'=>$id_user
            ));
    }
    if(empty($nombreformacionposgrado)){
        $sql = $conexion2->query("INSERT INTO posgespecilidad(nombreformacionposgrado, nombreposgrado, unidadhospitalaria, fechaposgradoinicio, fechaposgradotermino, tiempocursadoposgrado, documentorecibeposgrado, numerocedulaposgrado, id_postulado) 
        VALUES ('-', '-', '-', '-', '-', '-', '-', '-',$id_user)");
    }else{
        $sql6 = $conexion->prepare("INSERT INTO posgespecilidad(nombreformacionposgrado, nombreposgrado, unidadhospitalaria, fechaposgradoinicio, fechaposgradotermino, tiempocursadoposgrado, documentorecibeposgrado, numerocedulaposgrado, id_postulado) 
        VALUES (:nombreformacionposgrado,:nombreposgrado,:unidadhospitalaria,:fechaposgradoinicio,:fechaposgradotermino,:tiempocursadoposgrado,:documentorecibeposgrado,:numerocedulaposgrado,:id_postulado)");
        $sql6->execute(array(
            ':nombreformacionposgrado'=>$nombreformacionposgrado,
            ':nombreposgrado'=>$nombreposgrado,
            ':unidadhospitalaria'=>$unidadhospitalaria,
            ':fechaposgradoinicio'=>$fechaposgradoinicio,
            ':fechaposgradotermino'=>$fechaposgradotermino,
            ':tiempocursadoposgrado'=>$tiempocursadoposgrado,
            ':documentorecibeposgrado'=>$documentorecibeposgrado,
            ':numerocedulaposgrado'=>$numerocedulaposgrado,  
            ':id_postulado'=>$id_user                               
        ));
    }

    if(empty($nombreformaciondoctorado)){
        $sql = $conexion2->query("UPDATE posgespecilidad SET nombreformaciondoctorado = '-', nombredoctorado= '-', unidadhospitalariadoctorado= '-', fechainiciodoctorado= '-', fechaterminodoctorado= '-', tiempocursadodoctorado= '-', documentorecibedoctorado= '-', numeroceduladoctorado= '-'
            WHERE id_postulado = $id_user");
    }else{
        $sql7 = $conexion->prepare("UPDATE posgespecilidad SET nombreformaciondoctorado =:nombreformaciondoctorado, nombredoctorado= :nombredoctorado, unidadhospitalariadoctorado= :unidadhospitalariadoctorado, fechainiciodoctorado= :fechainiciodoctorado, fechaterminodoctorado= :fechaterminodoctorado,
        tiempocursadodoctorado= :tiempocursadodoctorado, documentorecibedoctorado= :documentorecibedoctorado ,numeroceduladoctorado= :numeroceduladoctorado WHERE id_postulado =:id_postulado");
                $sql7->execute(array(
                    ':nombreformaciondoctorado'=>$nombreformaciondoctorado,
                    ':nombredoctorado'=>$nombredoctorado,
                    ':unidadhospitalariadoctorado'=>$unidadhospitalariadoctorado,
                    ':fechainiciodoctorado'=>$fechainiciodoctorado,
                    ':fechaterminodoctorado'=>$fechaterminodoctorado,
                    ':tiempocursadodoctorado'=>$tiempocursadodoctorado,
                    ':documentorecibedoctorado'=>$documentorecibedoctorado,
                    ':numeroceduladoctorado'=>$numeroceduladoctorado,
                    ':id_postulado'=>$id_user
                ));
    }
    if(empty($nombreformacionaltaesp)){
        $sql = $conexion2->query("INSERT INTO otrosestudiosaltaesp(nombreformacionaltaesp, nombrealtaespecialidad, unidadhospaltaesp, fechainicioaltaesp, fechaterminoaltaesp, tiempocursadoaltaesp, documentorecibealtaesp, id_postulado)
        VALUES ('-','-','-','-','-','-','-',$id_user)");
    }else{
        $sql8 = $conexion->prepare("INSERT INTO otrosestudiosaltaesp(nombreformacionaltaesp, nombrealtaespecialidad, unidadhospaltaesp, fechainicioaltaesp, fechaterminoaltaesp, tiempocursadoaltaesp, documentorecibealtaesp, id_postulado)
        VALUES (:nombreformacionaltaesp,:nombrealtaespecialidad,:unidadhospaltaesp,:fechainicioaltaesp,:fechaterminoaltaesp,:tiempocursadoaltaesp,:documentorecibealtaesp, :id_postulado)");
            $sql8->execute(array(
                ':nombreformacionaltaesp'=>$nombreformacionaltaesp,
                ':nombrealtaespecialidad'=>$nombrealtaespecialidad,
                ':unidadhospaltaesp'=>$unidadhospaltaesp,
                ':fechainicioaltaesp',$fechainicioaltaesp,
                ':fechaterminoaltaesp',$fechaterminoaltaesp, 
                ':tiempocursadoaltaesp',$tiempocursadoaltaesp, 
                ':documentorecibealtaesp',$documentorecibealtaesp,
                ':id_postulado'=>$id_user
            ));
    }
    if(empty($nombreformacionotros)){
        $sql = $conexion2->query("UPDATE otrosestudiosaltaesp SET nombreformacionotros ='-', nombreotrosestudiosuno = '-', fechainiciootrosestudiosuno = '-', fechaterminootrosestudiosuno = '-', documentorecibeestudiosuno = '-'
        WHERE id_postulado = $id_user");
    }else{
        $sql9 = $conexion->prepare("UPDATE otrosestudiosaltaesp SET nombreformacionotros =:nombreformacionotros, nombreotrosestudiosuno = :nombreotrosestudiosuno, fechainiciootrosestudiosuno = :fechainiciootrosestudiosuno, 
        fechaterminootrosestudiosuno = :fechaterminootrosestudiosuno, documentorecibeestudiosuno = :documentorecibeestudiosuno  WHERE id_postulado = :id_postulado");
            $sql9->execute(array(
                ':nombreformacionotros'=>$nombreformacionotros,
                ':nombreotrosestudiosuno'=>$nombreotrosestudiosuno,
                ':fechainiciootrosestudiosuno'=>$fechainiciootrosestudiosuno,
                ':fechaterminootrosestudiosuno'=>$fechaterminootrosestudiosuno,
                ':documentorecibeestudiosuno'=>$documentorecibeestudiosuno,
                ':id_postulado'=>$id_user
    ));
    }
    if(empty($nombreformacionotrosdos)){
        $sql = $conexion2->query("UPDATE otrosestudiosaltaesp SET nombreformacionotrosdos ='-', nombreotrosestudiosdos = '-', fechainiciootrosestudiosdos = '-', fechaterminootrosestudiosdos = '-', documentorecibeestudiosdos = '-'
        WHERE id_postulado = $id_user");
    }else{
        $sql10 = $conexion->prepare("UPDATE otrosestudiosaltaesp SET nombreformacionotrosdos =:nombreformacionotrosdos , nombreotrosestudiosdos =:nombreotrosestudiosdos , fechainiciootrosestudiosdos =:fechainiciootrosestudiosdos , fechaterminootrosestudiosdos =:fechaterminootrosestudiosdos,
        documentorecibeestudiosdos =:documentorecibeestudiosdos  WHERE id_postulado =:id_postulado");
        $sql10->execute(array(
            ':nombreformacionotrosdos'=>$nombreformacionotrosdos,
            ':nombreotrosestudiosdos'=>$nombreotrosestudiosdos,
            ':fechainiciootrosestudiosdos'=>$fechainiciootrosestudiosdos,
            ':fechaterminootrosestudiosdos'=>$fechaterminootrosestudiosdos,
            ':documentorecibeestudiosdos'=>$documentorecibeestudiosdos,
            ':id_postulado'=>$id_user
        ));
    }
    if(empty($nombreserviciosocial)){
        $sql = $conexion2->query("INSERT INTO socialpracticas(nombreserviciosocial, fechainicioservicio, fechaterminoservicio, laboresservicio, documentorecibeservicio, id_postulado) 
        VALUES('-','-','-','-','-',$id_user)");
    }else{
        $sql11 = $conexion->prepare("INSERT INTO socialpracticas(nombreserviciosocial, fechainicioservicio, fechaterminoservicio, laboresservicio, documentorecibeservicio,id_postulado) 
        VALUES(:nombreserviciosocial,:fechainicioservicio,:fechaterminoservicio,:laboresservicio,:documentorecibeservicio,:id_postulado)"); 
            $sql11->execute(array(
                ':nombreserviciosocial'=>$nombreserviciosocial,
                ':fechainicioservicio'=>$fechainicioservicio,
                ':fechaterminoservicio'=>$fechaterminoservicio,
                ':laboresservicio'=>$laboresservicio,
                ':documentorecibeservicio'=>$documentorecibeservicio,
                ':id_postulado'=>$id_user
            ));
    }
    if(empty($nombrepracticas)){
        $sql = $conexion2->query("UPDATE socialpracticas SET nombrepracticas = '-', fechainiciopracticas = '-', fechaterminopracticas = '-', laborespracticas = '-', documentorecibepracticas = '-'
        WHERE id_postulado = $id_user");
    }else{
        $sql12 = $conexion->prepare("UPDATE socialpracticas SET nombrepracticas = :nombrepracticas, fechainiciopracticas =:fechainiciopracticas , fechaterminopracticas =:fechaterminopracticas , laborespracticas =:laborespracticas , documentorecibepracticas =:documentorecibepracticas
        WHERE id_postulado = :id_postulado");
                    $sql12->execute(array(
                        ':nombrepracticas'=>$nombrepracticas,
                        ':fechainiciopracticas'=>$fechainiciopracticas,
                        ':fechaterminopracticas'=>$fechaterminopracticas,
                        ':laborespracticas'=>$laborespracticas,
                        ':documentorecibepracticas'=>$documentorecibepracticas,
                        ':id_postulado'=>$id_user
                    ));
    }
    if(empty($nombreformacioncertificauno)){
        $sql = $conexion2->query("INSERT INTO cerficacion(nombreformacioncertificauno, nombrecertificacionuno, fechainiciocertificacionuno, fechaterminocertificacionuno, documentocertificacionuno,id_postulado)
        VALUES('-','-','-','-','-',$id_user)");
    }else{
        $sql = $conexion2->query("INSERT INTO cerficacion(nombreformacioncertificauno, nombrecertificacionuno, fechainiciocertificacionuno, fechaterminocertificacionuno, documentocertificacionuno,id_postulado)
        VALUES('$nombreformacioncertificauno','$nombrecertificacionuno','$fechainiciocertificacionuno','$fechaterminocertificacionuno','$documentocertificacionuno',$id_user)");
    }
    if(empty($nombreformacioncertificaciondos)){
        $sql = $conexion2->query("UPDATE cerficacion SET nombreformacioncertificaciondos = '-', nombrecertificaciondos = '-', fechainiciocertificaciondos = '-', fechaterminocertificaciondos = '-', documentocertificaciondos = '-'
        WHERE id_postulado = $id_user");
    }else{
        $sql = $conexion2->query("UPDATE cerficacion SET nombreformacioncertificaciondos = '$nombreformacioncertificaciondos', nombrecertificaciondos = '$nombrecertificaciondos', fechainiciocertificaciondos = '$fechainiciocertificaciondos', 
        fechaterminocertificaciondos = '$fechaterminocertificaciondos', documentocertificaciondos = '$documentocertificaciondos' WHERE id_postulado = $id_user");
    }
    if(empty($nombrecursouno)){
        $sql = $conexion2->query("INSERT INTO actualizacionacademica(nombrecursouno, institucioncursouno, fechainiciocursouno, fechaterminocursouno, documentorecibecursouno, nacionalprimero,id_postulado)
        VALUES('-', '-', '-', '-', '-', '-',$id_user)");
    }else{
        $sql = $conexion2->query("INSERT INTO actualizacionacademica(nombrecursouno, institucioncursouno, fechainiciocursouno, fechaterminocursouno, documentorecibecursouno, nacionalprimero,id_postulado)
        VALUES('$nombrecursouno', '$institucioncursouno', '$fechainiciocursouno', '$fechaterminocursouno', '$documentorecibecursouno', '$nacionalprimero',$id_user)");
    }
    if(empty($nombrecursodos)){
        $sql = $conexion2->query("UPDATE actualizacionacademica SET nombrecursodos = '-', institucioncursodos = '-', fechainiciocursodos = '-', fechaterminocursodos = '-', documentorecibecursodos = '-', nacionalsegundo = '-'
        where id_postulado = $id_user");
    }else{
        $sql = $conexion2->query("UPDATE actualizacionacademica SET nombrecursodos = '$nombrecursodos', institucioncursodos = '$institucioncursodos', fechainiciocursodos = '$fechainiciocursodos', fechaterminocursodos = '$fechaterminocursodos', documentorecibecursodos = '$documentorecibecursodos', nacionalsegundo = '$nacionalsegundo'
        where id_postulado = $id_user");
    }
    if(empty($nombrecursotres)){
        $sql = $conexion2->query("UPDATE actualizacionacademica SET nombrecursotres = '-', institucioncursotres = '-', fechainiciocursotres = '-', fechaterminocursotres = '-', documentorecibecursotres = '-', nacionaltercero = '-'
        WHERE id_postulado = $id_user");
    }else{
        $sql = $conexion2->query("UPDATE actualizacionacademica SET nombrecursotres = '$nombrecursotres', institucioncursotres = '$institucioncursotres', fechainiciocursotres = '$fechainiciocursotres', fechaterminocursotres = '$fechaterminocursotres', documentorecibecursotres = '$documentorecibecursotres', nacionaltercero = '$nacionaltercero'
        WHERE id_postulado = $id_user");
    }
    if(empty($empresauno)){
        $sql = $conexion2->query("INSERT INTO explaboralpublico(empresauno, cbx_dependenciauno, puestoempresauno, tipopuestouno, empresadirecionuno, telcontactouno, extencionuno, jefedirectouno, motivoseparacionuno, funcionespricipalesuno, fechainiciouno, fechaterminouno, id_postulado)
        VALUES(0,0,'-','-','-','-','-','-','-','-','-','-',$id_user)");
    }else{
        $sql = $conexion2->query("INSERT INTO explaboralpublico(empresauno, cbx_dependenciauno, puestoempresauno, tipopuestouno, empresadirecionuno, telcontactouno, extencionuno, jefedirectouno, motivoseparacionuno, funcionespricipalesuno, fechainiciouno, fechaterminouno, id_postulado)
        VALUES('$empresaone','$cbx_dependenciaone','$puestoempresauno','$empresa','$empresadirecionuno','$telcontactouno','$extencionuno','$jefedirectouno','$motivoseparacionuno','$funcionespricipalesuno','$fechainiciouno','$fechaterminouno',$id_user)");
    }
    if(empty($empresados)){
        $sql = $conexion2->query("UPDATE explaboralpublico SET empresados = 0, cbx_dependenciados = 0, puestoempresados = '-', tipopuestodos = '-', empresadirecdos = '-', telcontactodos = '-', extenciondos = '-', jefedirectodos = '-', motivoseparaciondos = '-', funcionespricipalesdos = '-', fechainicidos = '-', fechaterminodos = '-'
        WHERE id_postulado = $id_user");
    }else{
        $sql = $conexion2->query("UPDATE explaboralpublico SET empresados = '$cbx_empresados', cbx_dependenciados = '$cbx_dependenciados', puestoempresados = '$puestoempresados', tipopuestodos = '$tipopuestodos', empresadirecdos = '$empresadirecdos', 
        telcontactodos = '$telcontactodos', extenciondos = '$extenciondos', jefedirectodos = '$jefedirectodos', motivoseparaciondos = '$motivoseparaciondos', funcionespricipalesdos = '$funcionespricipalesdos', fechainicidos = '$fechainicidos', fechaterminodos = '$fechaterminodos'
        WHERE id_postulado = $id_user");
    }
    if(empty($empresatres)){
        $sql = $conexion2->query("UPDATE explaboralpublico SET empresatres = 0, cbx_dependenciatres = 0, puestoempresatres = '-', tipopuestotres = '-', empresadirectres = '-', telcontactotres = '-', extenciontres = '-', jefedirectotres = '-', motivoseparaciontres = '-', funcionespricipalestres = '-', fechainiciotres = '-', fechaterminotres = '-' 
        WHERE id_postulado = $id_user");
    }else{
        $sql = $conexion2->query("UPDATE explaboralpublico SET empresatres = '$cbx_empresatres', cbx_dependenciatres = '$cbx_dependenciatres', puestoempresatres = '$puestoempresatres', tipopuestotres = '$tipopuestotres', empresadirectres = '$empresadirectres', 
        telcontactotres = '$telcontactotres', extenciontres = '$extenciontres', jefedirectotres = '$jefedirectotres', motivoseparaciontres = '$motivoseparaciontres', funcionespricipalestres = '$funcionespricipalestres', fechainiciotres = '$fechainiciotres', fechaterminotres = '$fechaterminotres' 
        WHERE id_postulado = $id_user"); 
    }
    if(empty($nombrelaboralprivada)){
        $sql = $conexion2->query("INSERT INTO explaboralprivado(nombrelaboralprivada, tipopuestoprivada, direccionempresaprivada, telefonoempresaprivada, extencionempresaprivada, nombrejefeprivada, motivoseparacionprivada, funcionesprivada, fechainicioprivada, fechaterminoprivada,id_postulado)
        VALUES('-','-','-','-','-','-','-','-','-','-',$id_user)");
    }else{
        $sql = $conexion2->query("INSERT INTO explaboralprivado(nombrelaboralprivada, tipopuestoprivada, direccionempresaprivada, telefonoempresaprivada, extencionempresaprivada, nombrejefeprivada, motivoseparacionprivada, funcionesprivada, fechainicioprivada, fechaterminoprivada, id_postulado)
        VALUES('$nombrelaboralprivada','$tipopuestoprivada','$direccionempresaprivada','$telefonoempresaprivada','$extencionempresaprivada','$nombrejefeprivada','$motivoseparacionprivada','$funcionesprivada','$fechainicioprivada','$fechaterminoprivada',$id_user)");
    }
    if(empty($nombrelaboralprivadados)){
        $sql = $conexion2->query("UPDATE explaboralprivado SET nombrelaboralprivadados ='-', tipopuestoprivadados ='-', direccionempresaprivadados ='-', telefonoempresaprivadados ='-', extencionempresaprivadados ='-', nombrejefeprivadados ='-', 
        motivoseparacionprivadados ='-', funcionesprivadados ='-', fechainicioprivadados ='-', fechaterminoprivadados ='-'
        WHERE id_postulado=$id_user");
    }else{
        $sql = $conexion2->query("UPDATE explaboralprivado SET nombrelaboralprivadados ='$nombrelaboralprivadados', tipopuestoprivadados ='$tipopuestoprivadados', direccionempresaprivadados ='$direccionempresaprivadados', telefonoempresaprivadados ='$telefonoempresaprivadados', extencionempresaprivadados ='$extencionempresaprivadados', nombrejefeprivadados ='$nombrejefeprivadados', 
        motivoseparacionprivadados ='$motivoseparacionprivadados', funcionesprivadados ='$funcionesprivadados', fechainicioprivadados ='$fechainicioprivadados', fechaterminoprivadados ='$fechaterminoprivadados'
        WHERE id_postulado=$id_user");
    }
    if(empty($nombrelaboralprivadatres)){
        $sql = $conexion2->query("UPDATE explaboralprivado SET nombrelaboralprivadatres ='-', tipopuestoprivadatres ='-', direccionempresaprivadatres ='-', telefonoempresaprivadatres ='-', extencionempresaprivadatres ='-', nombrejefeprivadatres ='-', 
        motivoseparacionprivadatres ='-', funcionesprivadatres ='-', fechainicioprivadatres ='-', fechaterminoprivadatres ='-'
        WHERE id_postulado=$id_user");
    }else{
        $sql = $conexion2->query("UPDATE explaboralprivado SET nombrelaboralprivadatres ='$nombrelaboralprivadatres', tipopuestoprivadatres ='$tipopuestoprivadatres', direccionempresaprivadatres ='$direccionempresaprivadatres', telefonoempresaprivadatres ='$telefonoempresaprivadatres', extencionempresaprivadatres ='$extencionempresaprivadatres', nombrejefeprivadatres ='$nombrejefeprivadatres', 
        motivoseparacionprivadatres ='$motivoseparacionprivadatres', funcionesprivadatres ='$funcionesprivadatres', fechainicioprivadatres ='$fechainicioprivadatres', fechaterminoprivadatres ='$fechaterminoprivadatres'
        WHERE id_postulado=$id_user");
    }
    if(empty($nombrepublicacion)){
        $sql = $conexion2->query("INSERT INTO cientificaidioma(nombrepublicacion, tiempopublicacion, publicadoen, paisdepublicacion,id_postulado)
        VALUES('-','-','-','-',$id_user)");
    }else{
        $sql = $conexion2->query("INSERT INTO cientificaidioma(nombrepublicacion, tiempopublicacion, publicadoen, paisdepublicacion,id_postulado)
        VALUES('$nombrepublicacion','$tiempopublicacion','$publicadoen','$paisdepublicacion',$id_user)");
    }
    if(empty($nombreidioma)){
        $sql = $conexion2->query("UPDATE cientificaidioma SET nombreidioma = '-', nivel = '-', niveldedominio = '-', documentoacredita = '-'
        WHERE id_postulado = $id_user");
    }else{
        $sql = $conexion2->query("UPDATE cientificaidioma SET nombreidioma = '$nombreidioma', nivel = '$nivel', niveldedominio = '$niveldedominio', documentoacredita = '$documentoacredita'
        WHERE id_postulado = $id_user");
    }
    if(empty($otrashabilidades)){
        $sql = $conexion2->query("UPDATE cientificaidioma SET otrashabilidades = '-'
        WHERE id_postulado = $id_user");
    }else{
        $sql = $conexion2->query("UPDATE cientificaidioma SET otrashabilidades = '$otrashabilidades'
        WHERE id_postulado = $id_user");
    }
    if(empty($selCombo)){
        $sql = $conexion2->query("INSERT INTO manifiesto(familiaresenhraei, autorizodatoscorreo, autorizodatostelefono, autorizodatosgenerales,id_postulado)
        VALUES('-','-','-','-',$id_user)");
    }else{
        $sql = $conexion2->query("INSERT INTO manifiesto(familiaresenhraei, autorizodatoscorreo, autorizodatostelefono, autorizodatosgenerales,id_postulado)
        VALUES('$selCombo','$correo_elect','$telefono_enlace','$selCombo5',$id_user)"); 
    }
    if($sql1 != false){
        
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

