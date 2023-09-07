          <?php
            require 'clasesConexion/conexion.php';
            date_default_timezone_set('America/Mexico_City');    
            $DateAndTime = date('Y-m-d', time());
             extract($_POST);
             try{
                $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $conexion->setAttribute(PDO::ATTR_AUTOCOMMIT,0);
                $conexion->beginTransaction();
             $sql = $conexion->prepare("INSERT INTO datospersonales(puesto, profesion, curp, nombre, appaterno, apmaterno, estado, delegacion, localidad, colonia, calle, numexterior, numinterior, codigopostal,
             fechanacimiento, entidadnacimiento, rfc, sexo, cartanaturalizacion, telefonocasa, telefonocelular, otrotelefono, correoelectronico, etapaseleccion, eliminado, fechainicio, fechafinal) 
             VALUES(:puesto, :profesion, :curp, :nombre, :appaterno, :apmaterno, :estado, :delegacion, :localidad, :colonia, :calle, :numexterior, :numinterior, :codigopostal, :fechanacimiento, :entidadnacimiento, :rfc, :sexo, :cartanaturalizacion, :telefonocasa, :telefonocelular, :otrotelefono, :correoelectronico, :fechainicio)");
             $sql->execute(array(
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
    
      
    
             $sql = $conexion->prepare("INSERT INTO estudiosmediosup(nombreformacionmedia, nombremediasuperior, fechainicio, fechatermino, tiempocursado, documentomediosuperior, 
             nombreformacionsuperior,nombresuperior ,fechasuperiorinicio,fechasuperiortermino ,tiempocursadosuperior ,documentosuperior, numerocedulasuperior, 
             nombreformacionmaestria,nombremaestria, fechainiciomaestria, fechaterminomaestria, tiempocursadomaestria, documentomaestria, cedulamaestria,
             nombreformacionmaestriados, nombremaestriados, fechainiciomaestriados, fechaterminomaestriados, tiempocursadomaestriados,documentomaestriados, cedulamaestriados,id_postulado) 
             VALUES(:nombreformacionmedia, :nombremediasuperior, :fechainicio, :fechatermino, :tiempocursado, :documentomediosuperior, 
             :nombreformacionsuperior, :nombresuperior, :fechasuperiorinicio, :fechasuperiortermino, :tiempocursadosuperior, :documentosuperior, :numerocedulasuperior,
             :nombreformacionmaestria, :nombremaestria, :fechainiciomaestria, :fechaterminomaestria,:tiempocursadomaestria, :documentomaestria, :cedulamaestria,
             :nombreformacionmaestriados, :nombremaestriados, :fechainiciomaestriados, :fechaterminomaestriados,:tiempocursadomaestriados, :documentomaestriados, :cedulamaestriados,:id_postulado)");
                $sql->execute(array(
                ':nombreformacionmedia'=>$nombreformacionmedia,
                ':nombremediasuperior'=>$nombremediasuperior,
                ':fechainicio'=>$fechainicio,
                ':fechatermino'=>$fechatermino,
                ':tiempocursado'=>$tiempocursado,
                ':documentomediosuperior'=>$documentomediosuperior,
                ':nombreformacionsuperior'=>$nombreformacionsuperior,
                ':nombresuperior'=>$nombresuperior,
                ':fechasuperiorinicio'=>$fechasuperiorinicio,
                ':fechasuperiortermino'=>$fechasuperiortermino,
                ':tiempocursadosuperior'=>$tiempocursadosuperior,
                ':documentosuperior'=>$documentosuperior,
                ':numerocedulasuperior'=>$numerocedulasuperior,
                ':nombreformacionmaestria'=>$nombreformacionmaestria,
                ':nombremaestria'=>$nombremaestria,
                ':fechainiciomaestria'=>$fechainiciomaestria,
                ':fechaterminomaestria'=>$fechaterminomaestria,
                ':tiempocursadomaestria'=>$tiempocursadomaestria,
                ':documentomaestria'=>$documentomaestria,
                ':cedulamaestria'=>$cedulamaestria,
                ':nombreformacionmaestriados'=>$nombreformacionmaestriados,
                ':nombremaestriados'=>$nombremaestriados,
                ':fechainiciomaestriados'=>$fechainiciomaestriados,
                ':fechaterminomaestriados'=>$fechaterminomaestriados,
                ':tiempocursadomaestriados'=>$tiempocursadomaestriados,
                ':documentomaestriados'=>$documentomaestriados,
                ':cedulamaestriados'=>$cedulamaestriados,
                ':id_postulado'=>$id_user
            ));
   
        $sql = $conexion->prepare("INSERT INTO posgespecilidad(nombreformacionposgrado, nombreposgrado, unidadhospitalaria, fechaposgradoinicio, fechaposgradotermino, tiempocursadoposgrado, documentorecibeposgrado, numerocedulaposgrado, 
        nombreformaciondoctorado, nombredoctorado, unidadhospitalariadoctorado,fechainiciodoctorado,fechaterminodoctorado,tiempocursadodoctorado,documentorecibedoctorado,numeroceduladoctorado,id_postulado) 
        VALUES (:nombreformacionposgrado,:nombreposgrado,:unidadhospitalaria,:fechaposgradoinicio,:fechaposgradotermino,:tiempocursadoposgrado,:documentorecibeposgrado,:numerocedulaposgrado,
        :nombreformaciondoctorado,:nombredoctorado,:unidadhospitalariadoctorado,:fechainiciodoctorado,:fechaterminodoctorado, :tiempocursadodoctorado,:documentorecibedoctorado,:numeroceduladoctorado,:id_postulado)");
        $sql->execute(array(
            ':nombreformacionposgrado'=>$nombreformacionposgrado,
            ':nombreposgrado'=>$nombreposgrado,
            ':unidadhospitalaria'=>$unidadhospitalaria,
            ':fechaposgradoinicio'=>$fechaposgradoinicio,
            ':fechaposgradotermino'=>$fechaposgradotermino,
            ':tiempocursadoposgrado'=>$tiempocursadoposgrado,
            ':documentorecibeposgrado'=>$documentorecibeposgrado,
            ':numerocedulaposgrado'=>$numerocedulaposgrado, 
            ' nombreformaciondoctorado'=>$nombreformaciondoctorado,
            ':nombredoctorado'=>$nombredoctorado,
            ':unidadhospitalariadoctorado'=>$unidadhospitalariadoctorado,
            ':fechainiciodoctorado'=>$fechainiciodoctorado,
            ':fechaterminodoctorado'=>$fechaterminodoctorado,
            ':tiempocursadodoctorado'=>$tiempocursadodoctorado,
            ':documentorecibedoctorado'=>$documentorecibedoctorado,
            ':numeroceduladoctorado'=>$numeroceduladoctorado,
            ':id_postulado'=>$id_user                               
        ));
    
    
    
        $sql = $conexion->prepare("INSERT INTO otrosestudiosaltaesp(nombreformacionaltaesp, nombrealtaespecialidad, unidadhospaltaesp, fechainicioaltaesp, fechaterminoaltaesp, tiempocursadoaltaesp, documentorecibealtaesp, 
         nombreformacionotros,nombreotrosestudiosuno,fechainiciootrosestudiosuno,  fechaterminootrosestudiosuno, documentorecibeestudiosuno,
         nombreformacionotrosdos, nombreotrosestudiosdos, fechainiciootrosestudiosdos, fechaterminootrosestudiosdos, documentorecibeestudiosdos,  id_postulado)
         VALUES(:nombreformacionaltaesp,:nombrealtaespecialidad,:unidadhospaltaesp,:fechainicioaltaesp,:fechaterminoaltaesp,:tiempocursadoaltaesp,:documentorecibealtaesp, 
         :nombreformacionotros,:nombreotrosestudiosuno, :fechainiciootrosestudiosuno, :fechaterminootrosestudiosuno, :documentorecibeestudiosuno, 
         :nombreformacionotrosdos,:nombreotrosestudiosdos, :fechainiciootrosestudiosdos, :fechaterminootrosestudiosdos, :documentorecibeestudiosdos, :id_postulado)");
            $sql->execute(array(
                ':nombreformacionaltaesp'=>$nombreformacionaltaesp,
                ':nombrealtaespecialidad'=>$nombrealtaespecialidad,
                ':unidadhospaltaesp'=>$unidadhospaltaesp,
                ':fechainicioaltaesp'=>$fechainicioaltaesp,
                ':fechaterminoaltaesp'=>$fechaterminoaltaesp, 
                ':tiempocursadoaltaesp'=>$tiempocursadoaltaesp, 
                ':documentorecibealtaesp'=>$documentorecibealtaesp,
                ':nombreformacionotros'=>$nombreformacionotros,
                ':nombreotrosestudiosuno'=>$nombreotrosestudiosuno,
                ':fechainiciootrosestudiosuno'=>$fechainiciootrosestudiosuno,
                ':fechaterminootrosestudiosuno'=>$fechaterminootrosestudiosuno,
                ':documentorecibeestudiosuno'=>$documentorecibeestudiosuno,
                ':nombreformacionotrosdos'=>$nombreformacionotrosdos,
                ':nombreotrosestudiosdos'=>$nombreotrosestudiosdos,
                ':fechainiciootrosestudiosdos'=>$fechainiciootrosestudiosdos,
                ':fechaterminootrosestudiosdos'=>$fechaterminootrosestudiosdos,
                ':documentorecibeestudiosdos'=>$documentorecibeestudiosdos,
                ':id_postulado'=>$id_user
            ));
    
   
        $sql = $conexion->prepare("INSERT INTO socialpracticas(nombreserviciosocial, fechainicioservicio, fechaterminoservicio, laboresservicio, documentorecibeservicio,
        nombrepracticas, fechainiciopracticas, fechaterminopracticas, laborespracticas, documentorecibepracticas, id_postulado) 
        VALUES(:nombreserviciosocial,:fechainicioservicio,:fechaterminoservicio,:laboresservicio,:documentorecibeservicio,
        nombrepracticas,:fechainiciopracticas,  :fechaterminopracticas,:laborespracticas, :documentorecibepracticas, :id_postulado)"); 
            $sql->execute(array(
                ':nombreserviciosocial'=>$nombreserviciosocial,
                ':fechainicioservicio'=>$fechainicioservicio,
                ':fechaterminoservicio'=>$fechaterminoservicio,
                ':laboresservicio'=>$laboresservicio,
                ':documentorecibeservicio'=>$documentorecibeservicio,
                ':nombrepracticas'=>$nombrepracticas,
                ':fechainiciopracticas'=>$fechainiciopracticas,
                ':fechaterminopracticas'=>$fechaterminopracticas,
                ':laborespracticas'=>$laborespracticas,
                ':documentorecibepracticas'=>$documentorecibepracticas,
                ':id_postulado'=>$id_user
            ));

    
        $sql = $conexion->prepare("INSERT INTO cerficacion(nombreformacioncertificauno, nombrecertificacionuno, fechainiciocertificacionuno, fechaterminocertificacionuno, documentocertificacionuno,
        nombreformacioncertificaciondos,nombrecertificaciondos ,fechainiciocertificaciondos, fechaterminocertificaciondos, documentocertificaciondos,id_postulado)
        VALUES(:nombreformacioncertificauno,:nombrecertificacionuno,:fechainiciocertificacionuno,:fechaterminocertificacionuno,:documentocertificacionuno,
        :nombreformacioncertificaciondos,:nombrecertificaciondos, :fechainiciocertificaciondos, :fechaterminocertificaciondos, :documentocertificaciondos,:id_postulado)");
            $sql->execute(array(
            ':nombreformacioncertificauno'=>$nombreformacioncertificauno,
            ':nombrecertificacionuno'=>$nombrecertificacionuno,
            ':fechainiciocertificacionuno'=>$fechainiciocertificacionuno,
            ':fechaterminocertificacionuno'=>$fechaterminocertificacionuno,
            ':documentocertificacionuno'=>$documentocertificacionuno,
            ':nombreformacioncertificaciondos' => $nombreformacioncertificaciondos,
            ':nombrecertificaciondos'=>$nombrecertificaciondos, 
            ':fechainiciocertificaciondos '=>$fechainiciocertificaciondos, 
            ':fechaterminocertificaciondos '=>$fechaterminocertificaciondos,
            ':documentocertificaciondos '=> $documentocertificaciondos,
            ':id_postulado'=>$id_user
        ));
    
        $sql = $conexion->prepare("INSERT INTO actualizacionacademica(nombrecursouno, institucioncursouno, fechainiciocursouno, fechaterminocursouno, documentorecibecursouno, nacionalprimero,
        nombrecursodos, institucioncursodos,fechainiciocursodos,fechaterminocursodos,documentorecibecursodos, nacionalsegundo, 
        nombrecursotres, institucioncursotres, fechainiciocursotres, fechaterminocursotres, documentorecibecursotres,nacionaltercero ,id_postulado)
        VALUES(:nombrecursouno,:institucioncursouno,:fechainiciocursouno,:fechaterminocursouno,:documentorecibecursouno,:nacionalprimero,
        :nombrecursodos,:institucioncursodos,:fechainiciocursodos,:fechaterminocursodos,:documentorecibecursodos, :nacionalsegundo,
        :nombrecursotres, :institucioncursotres,:fechainiciocursotres, :fechaterminocursotres, :documentorecibecursotres, :nacionaltercero, :id_postulado)");
            $sql->execute(array(
            ':nombrecursouno'=>$nombrecursouno, 
            ':institucioncursouno'=>$institucioncursouno, 
            ':fechainiciocursouno'=>$fechainiciocursouno, 
            ':fechaterminocursouno'=>$fechaterminocursouno, 
            ':documentorecibecursouno'=>$documentorecibecursouno, 
            ':nacionalprimero'=>$nacionalprimero,
            ':nombrecursodos'=>$nombrecursodos,
            ':institucioncursodos'=>$institucioncursodos,
            ':fechainiciocursodos'=>$fechainiciocursodos,
            ':fechaterminocursodos'=>$fechaterminocursodos,
            ':documentorecibecursodos'=>$documentorecibecursodos,
            ':nacionalsegundo'=>$nacionalsegundo,
            ':nombrecursodos'=>$nombrecursodos,
            ':institucioncursodos'=>$institucioncursodos,
            ':fechainiciocursodos'=>$fechainiciocursodos, 
            ':fechaterminocursodos'=>$fechaterminocursodos,
            ':documentorecibecursodos'=>$documentorecibecursodos, 
            ':nacionalsegundo'=>$nacionalsegundo,
            ':nombrecursotres'=>$nombrecursotres,
            ':institucioncursotres'=>$institucioncursotres,
            ':fechainiciocursotres'=>$fechainiciocursotres,
            ':fechaterminocursotres'=>$fechaterminocursotres,
            ':documentorecibecursotres'=>$documentorecibecursotres,
            ':nacionaltercero'=>$nacionaltercero,
            ':id_postulado'=>$id_user
        )); 
    
    
    
    
        $sql = $conexion->prepare("INSERT INTO explaboralpublico(empresauno, cbx_dependenciauno, puestoempresauno, tipopuestouno, empresadirecionuno, telcontactouno, extencionuno, jefedirectouno, motivoseparacionuno, funcionespricipalesuno, fechainiciouno, fechaterminouno, 
        empresados,cbx_dependenciados,puestoempresados,tipopuestodos,empresadirecdos, telcontactodos,extenciondos,jefedirectodos,motivoseparaciondos,funcionespricipalesdos,fechainicidos,fechaterminodos,
        empresatres, cbx_dependenciatres,puestoempresatres, tipopuestotres, empresadirectres,telcontactotres,extenciontres,jefedirectotres, motivoseparaciontres,funcionespricipalestres, fechainiciotres,fechaterminotres,id_postulado)
        VALUES(:empresauno,:cbx_dependenciauno,:puestoempresauno,:tipopuestouno,:empresadirecionuno,:telcontactouno,:extencionuno,:jefedirectouno,:motivoseparacionuno,:funcionespricipalesuno,:fechainiciouno,:fechaterminouno,
        :empresados,:cbx_dependenciados,:puestoempresados,:tipopuestodos, :empresadirecdos,:telcontactodos, :extenciondos,:jefedirectodos,:motivoseparaciondos, :funcionespricipalesdos,:fechainicidos,:fechaterminodos,
        :empresatres, :cbx_dependenciatres, :puestoempresatres, :tipopuestotres, :empresadirectres,:telcontactotres, :extenciontres, :jefedirectotres, :motivoseparaciontres, :funcionespricipalestres, :fechainiciotres,:fechaterminotres,:id_postulado)");
        $sql->execute(array(
            ':empresauno'=>$empresaone,
            ':cbx_dependenciauno'=>$cbx_dependenciaone,
            ':puestoempresauno'=>$puestoempresauno,
            ':tipopuestouno'=>$empresa,
            ':empresadirecionuno'=>$empresadirecionuno,
            ':telcontactouno'=>$telcontactouno,
            ':extencionuno'=>$extencionuno,
            ':jefedirectouno'=>$jefedirectouno,
            ':motivoseparacionuno'=>$motivoseparacionuno,
            ':funcionespricipalesuno'=>$funcionespricipalesuno,
            ':fechainiciouno'=>$fechainiciouno,
            ':fechaterminouno'=>$fechaterminouno,
            ':empresados'=>$cbx_empresados, 
            ':cbx_dependenciados'=>$cbx_dependenciados,
            ':puestoempresados'=>$puestoempresados, 
            ':tipopuestodos'=> $tipopuestodos, 
            ':empresadirecdos'=> $empresadirecdos, 
            ':telcontactodos'=>$telcontactodos, 
            ':extenciondos'=>$extenciondos, 
            ':jefedirectodos'=> $jefedirectodos, 
            ':motivoseparaciondos'=>$motivoseparaciondos, 
            ':funcionespricipalesdos'=>$funcionespricipalesdos, 
            ':fechainicidos'=> $fechainicidos, 
            ':fechaterminodos'=>$fechaterminodos,
            ':empresatres'=>$cbx_empresatres,
            ':cbx_dependenciatres'=>$cbx_dependenciatres, 
            ':puestoempresatres'=>$puestoempresatres,
            ':tipopuestotres'=>$tipopuestotres,
            ':empresadirectres'=>$empresadirectres, 
            ':telcontactotres'=>$telcontactotres,
            ':extenciontres'=>$extenciontres,
            ':jefedirectotres'=>$jefedirectotres,
            ':motivoseparaciontres'=>$motivoseparaciontres,
            ':funcionespricipalestres'=>$funcionespricipalestres,
            ':fechainiciotres'=>$fechainiciotres,
            ':fechaterminotres'=>$fechaterminotres, 
            ':id_postulado'=>$id_user
         ));
        
         $sql = $conexion->prepare("INSERT INTO explaboralprivado(nombrelaboralprivada, tipopuestoprivada, direccionempresaprivada, telefonoempresaprivada, extencionempresaprivada, nombrejefeprivada, motivoseparacionprivada, funcionesprivada, fechainicioprivada, fechaterminoprivada, 
          nombrelaboralprivadados, tipopuestoprivadados, direccionempresaprivadados, telefonoempresaprivadados, extencionempresaprivadados, nombrejefeprivadados, motivoseparacionprivadados, funcionesprivadados, fechainicioprivadados, fechaterminoprivadados,
         nombrelaboralprivadatres, tipopuestoprivadatres, direccionempresaprivadatres, telefonoempresaprivadatres, nombrejefeprivadatres, motivoseparacionprivadatres, funcionesprivadatres, fechainicioprivadatres, fechaterminoprivadatres, id_postulado)
         VALUES(:nombrelaboralprivada,:tipopuestoprivada,:direccionempresaprivada,:telefonoempresaprivada,:extencionempresaprivada,:nombrejefeprivada, :motivoseparacionprivada
         :nombrelaboralprivadados, :tipopuestoprivadados, :direccionempresaprivadados, :telefonoempresaprivadados, :extencionempresaprivadados, :nombrejefeprivadados, :motivoseparacionprivadados, :funcionesprivadados, :fechainicioprivadados ,:fechaterminoprivadados,
         :nombrelaboralprivadatres, :tipopuestoprivadatres,:direccionempresaprivadatres, :telefonoempresaprivadatres, :nombrejefeprivadatres, :motivoseparacionprivadatres, :funcionesprivadatres, :fechainicioprivadatres, :fechaterminoprivadatres, :id_postulado)");
         $sql->execute(array(
            ':nombrelaboralprivada'=>$nombrelaboralprivada,
            ':tipopuestoprivada'=>$tipopuestoprivada,
            ':direccionempresaprivada'=>$direccionempresaprivada,
            ':telefonoempresaprivada'=>$telefonoempresaprivada,
            ':extencionempresaprivada'=>$extencionempresaprivada,
            ':nombrejefeprivada'=>$nombrejefeprivada,
            ':motivoseparacionprivada'=>$motivoseparacionprivada,
            ':funcionesprivada'=>$funcionesprivada,
            ':fechainicioprivada'=>$fechainicioprivada,
            ':fechaterminoprivada'=>$fechaterminoprivada,
            ':nombrelaboralprivadados'=>$nombrelaboralprivadados,
            ':tipopuestoprivadados'=>$tipopuestoprivadados,
            ':direccionempresaprivadados'=>$direccionempresaprivadados,
            ':telefonoempresaprivadados'=>$telefonoempresaprivadados,
            ':extencionempresaprivadados'=>$extencionempresaprivadados,
            ':nombrejefeprivadados'=>$nombrejefeprivadados, 
            ':motivoseparacionprivadados'=>$motivoseparacionprivadados,
            ':funcionesprivadados'=>$funcionesprivadados,
            ':fechainicioprivadados'=>$fechainicioprivadados,
            ':fechaterminoprivadados'=>$fechaterminoprivadados,
            ':nombrelaboralprivadatres'=>$nombrelaboralprivadatres,
            ':tipopuestoprivadatres '=>$tipopuestoprivadatres, 
            ':direccionempresaprivadatres'=>$direccionempresaprivadatres,
            ':telefonoempresaprivadatres'=>$telefonoempresaprivadatres,
            ':extencionempresaprivadatres'=>$extencionempresaprivadatres,
            ':nombrejefeprivadatres'=>$nombrejefeprivadatres, 
            ':motivoseparacionprivadatres'=>$motivoseparacionprivadatres,
            ':funcionesprivadatres'=>$funcionesprivadatres,
            ':fechainicioprivadatres'=>$fechainicioprivadatres,
            ':fechaterminoprivadatres'=>$fechaterminoprivadatres,
             ':id_postulado'=>$id_user
            ));
            $sql = $conexion->prepare("INSERT INTO cientificaidioma(nombrepublicacion, tiempopublicacion, publicadoen, paisdepublicacion,
            nombreidioma, nivel, niveldedominio, documentoacredita, otrashabilidades, id_postulado)
            VALUES(:nombrepublicacion,:tiempopublicacion,:publicadoen,:paisdepublicacion,
            :nombreidioma, :nivel,:niveldedominio, :documentoacredita,:otrashabilidades, :id_postulado)");
            $sql->execute(array(
            ':nombrepublicacion'=>$nombrepublicacion,
            ':tiempopublicacion'=>$tiempopublicacion,
            ':publicadoen'=>$publicadoen,
            ':paisdepublicacion'=>$paisdepublicacion,
            ':nombreidioma'=>$nombreidioma,
            ':nivel'=>$nivel,
            ':niveldedominio'=>$niveldedominio,
            ':documentoacredita'=>$documentoacredita,
            ':otrashabilidades'=>$otrashabilidades,
            ':id_postulado'=>$id_user
            ));
          $sql = $conexion->prepare("INSERT INTO manifiesto(familiaresenhraei, autorizodatoscorreo, autorizodatostelefono, autorizodatosgenerales,
           id_postulado)
            VALUES(:familiaresenhraei,:autorizodatoscorreo,:autorizodatostelefono,:autorizodatosgenerales,:id_postulado)");
            $sql->execute(array(
            ':familiaresenhraei'=>$familiaresenhraei,
            ':autorizodatoscorreo'=>$autorizodatoscorreo,
            ':autorizodatostelefono'=>$autorizodatostelefono,
            ':autorizodatosgenerales'=>$autorizodatosgenerales,
            ':id_postulado'=>$id_user
            )); 
    
            $validatransac = $conexion->commit();

            if($validatransac != false) {
                echo "<script>alert('Tus datos han sido actualizados satisfactoriamente');
        </script>";
        header('location: ../misDatos');
        }
        }catch(Exception $e) {
        $conexion->rollBack();
        echo "<script>alert('Error al actualizar tus datos');
        </script>";
        header('location: ../misDatos');
        }
            
         ?>  

