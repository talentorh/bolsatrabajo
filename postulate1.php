<!DOCTYPE html>
<html class="no-js" lang="es">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>HRAEI - Bolsa de Trabajo</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link href="https://framework-gb.cdn.gob.mx/favicon.ico" rel="shortcut icon">
    <link href="https://www.gob.mx/cms/application.css" rel="stylesheet">
    <link href="https://framework-gb.cdn.gob.mx/assets/styles/main.css" rel="stylesheet">
    <script type="text/javascript" src="https://framework-gb.cdn.gob.mx/gobmx.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="js/avisoPostulacion.js"></script>
    <script src="js/validacion.js"></script>
    <script src="js/most.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/getCatalogos.js"></script>

  </head>
  <style>
    /*
    body{
      width: 100%;
      height: auto;
      filter: blur(0);

      transition: all 0.5s linear;
    }
    body:hover{
      filter: blur(20px);
    }
    */
    body{
      background-color: #F7F7F7;
    }
  </style>
  
 <body>
 
 <div class="container">
  <div id="tabla_resultado"></div>
<header>
    <div class="nav" role="navigation">
        <nav class="navbar navbar-inverse sub-navbar navbar-fixed-top">
            <div class="navbar-header"> <button type="button" class="navbar-toggle collapsed"

                data-toggle="collapse" data-target="#subenlaces"> <span class="sr-only">Interruptor
                  de Navegación</span> <span class="icon-bar"></span> <span class="icon-bar"></span>
                <span class="icon-bar"></span> </button> <a class="navbar-brand"

                href="#">HRAEI</a> </div>
            <div class="collapse navbar-collapse" id="subenlaces">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="conocenos.html">Conócenos</a></li>
                <li><a href="pacientes.html">Pacientes</a></li>
                <li><a href="atencion_medica.html">Atención Médica</a></li>
                <li><a href="investigacion.html">Enseñanza e Investigación </a></li>
                <li><a href="marco_juridico.html">Marco Jurídico</a></li>
                <li><a href="transparencia.html">Transparencia</a></li>
                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"

                    role="button" aria-expanded="false">Buscador <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Acción</a></li>
                    <li><a href="#">Otra acción</a></li>
                    <li><a href="#">Algo más aquí</a></li>
                    <li class="divider"><br>
                    </li>
                    <li><a href="#">Enlace separado</a></li>
                  </ul>
                </li>
              </ul>
            </div>
        </nav>
      </div>
     </div>
</header>

  <div class="container2">
      <h1 style="text-align: center; font-size: 28px; margin-top: 30px;">Vacantes Disponibles</h1>
  <section id="miSlide" class="carousel slide" >
                <ol class="carousel-indicators">
                    <li data-target="#miSlide" data-slide-to="0" class="active"></li>
                    <li data-target="#miSlide" data-slide-to="1"></li>
                   
                </ol>

                <div class="carousel-inner">
                  
                    <div class="item active" >
                        <img src="imagenes/7.jpg" class="adaptar">
                    </div>
                    
                </div>

                <a href="#miSlide" class="left carousel-control" style="color: yellow;" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                <a href="#miSlide" class="right carousel-control" style="color: yellow;" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
            </section>
    
        <center> <div class="" style="background: white; ">
           <h1 style="font-size: 1.4em;">Registro de Banco de Talentos</h1>
             <p >Agradecemos su interés por registrar sus datos que conforman su currículum vitae, mediante los cuales, podrá ser seleccionado para participar en el proceso de evaluación, cuando se genere alguna vacante a fin a su perfil académico y/o de su elección. 
Con la finalidad de orientarlo adecuadamente en este proceso, se presenta a continuación, el profesiograma con los requisitos académicos y de experiencia, mínimos, que debe cumplir para estar en posibilidad de registrarse. En el formulario que se presenta al final de la página, en la primera casilla, encontrará: puesto al que se postula, el cual deberá elegir, de conformidad, a lo anteriormente señalado.  
</p>
           </div></center><br>
       <div class="ajuste-tabla">
       <?php
           require 'consultaPuestos.php';

       ?>
   </div>
          <center><div class="" style="background: white;">
           <h1 style="font-size: 1.4em;"> Aviso de Confidencialidad</h1>
                <p >La información contenida en tu currículum vitae institucional, contiene datos personales considerados
                    confidenciales en términos de los artículos 23 y 68, fracciones I, II, IV  y V, segundo párrafo, y 116
                    último parrafo de la Ley General de Transparencia y Acceso a la información Pública; 9, 16, 113, fracciones I y III
                    de la ley federal de Transparencia y Acceso a la Información Pública, en correlación con la Ley General de Protección de Datos
                    Personales en Posesión de Sujetos Obligados; Trigésimo Octavo y Trigésimo Noveno Lineamentos Generales en Materia de
                    Clasificación y Desclasificación de la Información, asi como para la elaboración de versiones Públicas, por lo que serán 
                    tratados por la Dirección de Administración y Finanzas a través de la Subdirección de Recursos Humanos, y solo serán utilizados
                    con fines de reclutamiento, selección y/o contratación según sea el caso. Datos que para que tengan un uso distinto al 
                    señalado, se deberá contar con su consentimiento.</p>
   
           
           </div></center>
          <div class="registro" >
              <h4>Registro de Currículum Vítae</h4>
              </div>
              <style>
                
                  .adaptar{
                 
                    margin-left: auto;
                    margin-right: auto;
                    display: block;
                  }
                  h3{
                      color: #06477B;
                      text-align: center;
                      
                  }
                  h4{
                      color: white;
                      text-align: center; 
                      font-size: 1.5em;
                  }
                  .registro{
                      width: 100%;
                      height: auto;
                      background: #10312B;
                     
                  }
                  label{
                    font-size: 13px;
                    color: black;
                  }
                  .container2{
                      margin-top: 1%; 
                      width: 98%;  
                      margin-left: auto; 
                      margin-right: auto;
                      z-index: 100;
                      background: white;
                      box-shadow: 0 0 20px #235B4E;
                  }
                  .form-control{
                    box-shadow: 0 0 1px #000;
                  }
                  p{
                    font-size: .9em; 
                    text-align: justify; 
                    color: black; 
                    font-style: normal;
                  }
                  @media screen and (max-width: 1920px) {
                    .container2{
                    width: 98%;
                    margin-top: 5%;
                    z-index: 100;
                    background: white;

                  }
                  h3{
                      color: #06477B;
                      text-align: center;
                      font-size: 16px;
                      
                  }
                  p{
                    font-size: .9em;
                    text-align: justify; 
                    color: black; 
                    font-style: normal;
                  }
                    }
                  @media screen and (max-width: 995px) {
                    .ajuste-tabla{
                    font-size: .4em;
                    
                  }
                  .container2{
                    width: 100%;
                    margin-top: 9%;
                  }
                  p{
                    font-size: .5em;
                    text-align: justify; 
                    color: black; 
                    font-style: normal;
                  }
			
                }
             

              </style>      
       
       
 <div class="data"></div>
 <div class="loader"></div>        
<form action="" method="POST" id="formulario" name="formulario" autocomplete="off">
   
       <h3>Información personal</h3>
  <div class="form-group col-md-6" autocomplete="off">
      <label>Puesto al que desea postularse</label>
      <select class="form-control" id="select_puesto" name="select_puesto" style="cursor: pointer;" required onchange="select_proveedor();">
      
            <option value="" >Seleccione el puesto</option>
                    <meta charset="UTF-8">
                    <?php
                        require 'conexion.php';
                        $sql_s = $conexion2->query ("SELECT codigopuesto, puesto FROM descripcionpuestos order by puesto asc");
                            while ($row_s = mysqli_fetch_array($sql_s)) {
                                $ID_usuario = $row_s['codigopuesto'];
                                $nombre = $row_s['puesto'];
                    ?>
                             <option value="<?php echo $ID_usuario; ?>" > <?php echo $nombre; ?></option>

                     <?php
                                }


                    ?>
            </select>
    </div>
    <div class="form-group col-md-6">
      <label>Profesión/Area profesional</label>
      <input type="text" id="profesion" name="profesion" required class="form-control"  autocomplete="off"  >
    </div>
    <div class="form-group col-md-6">
      <label>CURP</label>
      <input type="text" id="curp" name="curp" required class="form-control" autocomplete="off"  >
    </div>
    <div class="form-group col-md-6">
      <label>Nombre</label>
      <input type="text" id="nombre" name="nombre" required class="form-control" autocomplete="off"  >
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Apellido paterno</label>
      <input type="text" id="appaterno" name="appaterno" required class="form-control" autocomplete="off"  >
    </div>
 
    <div class="form-group col-md-6">
      <label for="inputCity">Apellido materno</label>
      <input type="text" id="apmaterno" name="apmaterno" required class="form-control" autocomplete="off">
    </div>
    		
		
     <div class="form-group col-md-6">
      <label for="inputState">Estado</label>
       <select name="cbx_estado" id="cbx_estado" required class="form-control">
				<option value="0">Seleccionar Estado</option>
				<?php 
				 
				  $query = "SELECT id_estado, estado FROM t_estado ";
	                $resultado=$mysqli->query($query);
				while($row = $resultado->fetch_assoc()) { ?>
					<option value="<?php echo $row['id_estado']; ?>"><?php echo $row['estado']; ?></option>
				<?php } ?>
			</select>
    </div>
     <div class="form-group col-md-6">
      <label for="inputState">Delegación o Municipio</label>
      <select name="cbx_municipio" id="cbx_municipio" required class="form-control">
       
      </select>
    </div>
     <div class="form-group col-md-6">
      <label for="inputState">Localidad</label>
      <select name="cbx_localidad" id="cbx_localidad" required class="form-control">
       
      </select>
    </div>
    	
    <div class="form-group col-md-6">
      <label for="inputCity">Colonia</label>
      <input type="text" id="colonia" name="colonia" required class="form-control" autocomplete="off">
    </div>
    <div class="form-group col-md-6">
      <label for="inputCity">Calle</label>
      <input type="text" id="calle" name="calle" required class="form-control" autocomplete="off">
    </div>
    <div class="form-group col-md-3">
      <label for="inputZip">N° exterior</label>
      <input type="text" id="numexterior" name="numexterior" required class="form-control" autocomplete="off">
    </div>
    <div class="form-group col-md-3">
      <label for="inputZip">N° interior</label>
      <input type="text" id="numinterior" name="numinterior" required class="form-control" autocomplete="off">
    </div>
    <div class="form-group col-md-3">
      <label for="inputZip">Código postal</label>
      <input type="text" class="form-control" id="codigopostal" required name="codigopostal" autocomplete="off" >
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Fecha de nacimiento</label>
      <input type="date" id="fechanacimiento" name="fechanacimiento" required class="form-control" autocomplete="off" >
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Entidad de nacimiento</label>
      <input type="text" id="entidadnacimiento" name="entidadnacimiento" required class="form-control" autocomplete="off" >
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">R.F.C con homoclave</label>
      <input type="text" id="rfc" name="rfc" required class="form-control" autocomplete="off" >
    </div>
    <div class="form-group col-md-2">
      <label for="inputState">Sexo</label>
      <select id="sexo" name="sexo" required class="form-control" >
        <option selected>Seleccione</option>
        <option value="Masculino">Masculino</option>
        <option value="Femenino">Femenino</option>
      </select>
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Carta naturalización</label>
      <input type="text" id="naturalizacion" required name="naturalizacion" autocomplete="off" class="form-control" >
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Teléfono de casa</label>
      <input type="text" id="telefonocasa" required name="telefonocasa" autocomplete="off" class="form-control" >
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Teléfono celular</label>
      <input type="text" id="telefonocelular" required name="telefonocelular" autocomplete="off" class="form-control" >
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Otro télefono</label>
      <input type="text" id="otrotelefono" required name="otrotelefono" autocomplete="off" class="form-control" >
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Correo electrónico</label>
      <input type="email" id="correo" required name="correo" autocomplete="off" class="form-control" >
    </div>

          <h3>Formación academica<br>
              Nivel medio superior</h3>
    
  <div class="form-group col-md-6">
      <label for="inputState">Nombre de la formación académica</label>
      <input type="text" id="nombreformacionmedia" name="nombreformacionmedia" autocomplete="off" class="form-control" >
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Nombre de la institución educativa</label>
      <input type="text" id="nombremediasuperior" name="nombremediasuperior" autocomplete="off" class="form-control" >
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Fecha de inicio</label>
      <input type="date" id="fechainicio" name="fechainicio" autocomplete="off" class="form-control" >
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Fecha término</label>
      <input type="date" id="fechatermino" name="fechatermino" autocomplete="off" class="form-control" >
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Años cursados</label>
      <input type="text" id="tiempocursado" name="tiempocursado" autocomplete="off" class="form-control" >
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Documento que recibe</label>
      <input type="text" id="documentomediosuperior" name="documentomediosuperior" autocomplete="off" class="form-control" >
    </div>
    
          <h3 style="text-align: center;">Nivel superior</h3>
        
  <div class="form-group col-md-6">
      <label for="inputState">Nombre de la formación académica</label>
      <input type="text" id="nombreformacionsuperior" name="nombreformacionsuperior" class="form-control" >
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Nombre de la institución educativa</label>
      <input type="text" id="nombresuperior" name="nombresuperior" class="form-control" >
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Fecha de inicio</label>
      <input type="date" id="fechasuperiorinicio" name="fechasuperiorinicio" class="form-control" >
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Fecha término</label>
      <input type="date" id="fechasuperiortermino" name="fechasuperiortermino" class="form-control" >
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Años cursados</label>
      <input type="text" id="tiempocursadosuperior" name="tiempocursadosuperior" class="form-control" >
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Documento que recibe</label>
      <input type="text" id="documentosuperior" name="documentosuperior" class="form-control" >
    </div>
    <div class="form-group col-md-12">
      <label for="inputState">N° de cédula profesional</label>
      <input type="text" id="numerocedulasuperior" name="numerocedulasuperior" class="form-control" >
    </div>
    
              <h3>Nivel Maestría</h3>
    
  <div class="form-group col-md-6">
      <label for="inputState">Nombre de la formación académica</label>
      <input type="text" id="nombreformacionmaestria" name="nombreformacionmaestria" class="form-control" >
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Nombre de la institución educativa</label>
      <input type="text" id="nombremaestria" name="nombremaestria" class="form-control" >
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Fecha de inicio</label>
      <input type="date" id="fechainiciomaestria" name="fechainiciomaestria" class="form-control" >
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Fecha término</label>
      <input type="date" id="fechaterminomaestria" name="fechaterminomaestria" class="form-control" >
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Años cursados</label>
      <input type="text" id="tiempocursadomaestria" name="tiempocursadomaestria" class="form-control" >
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Documento que recibe</label>
      <input type="text" id="documentomaestria" name="documentomaestria" class="form-control" >
    </div>
    <div class="form-group col-md-12">
      <label for="inputState">N° de cédula profesional</label>
      <input type="text" id="cedulamaestria" name="cedulamaestria" class="form-control" >
    </div>

              <h3>Segunda Maestría</h3>

  <div class="form-group col-md-6">
      <label for="inputState">Nombre de la formación académica</label>
      <input type="text" id="nombreformacionmaestriados" name="nombreformacionmaestriados" class="form-control" >
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Nombre de la institución educativa</label>
      <input type="text" id="nombremaestriados" name="nombremaestriados" class="form-control" >
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Fecha de inicio</label>
      <input type="date" id="fechainiciomaestriados" name="fechainiciomaestriados" class="form-control" >
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Fecha término</label>
      <input type="date" id="fechaterminomaestriados" name="fechaterminomaestriados" class="form-control" >
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Años cursados</label>
      <input type="text" id="tiempocursadomaestriados" name="tiempocursadomaestriados" class="form-control" >
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Documento que recibe</label>
      <input type="text" id="documentomaestriados" name="documentomaestriados" class="form-control" >
    </div>
    <div class="form-group col-md-12">
      <label for="inputState">N° de cédula profesional</label>
      <input type="text" id="cedulamaestriados" name="cedulamaestriados" class="form-control" >
    </div>
  
              <h3>Nivel Posgrado/Especialidad</h3>
    
 
  <div class="form-group col-md-4">
      <label for="inputState">Nombre de la formación académica</label>
      <input type="text" id="nombreformacionposgrado" name="nombreformacionposgrado" class="form-control" >
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Nombre de la institución educativa</label>
      <input type="text" id="nombreposgrado" name="nombreposgrado" class="form-control" >
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Unidad hospitalaria</label>
      <input type="text" id="unidadhospitalaria" name="unidadhospitalaria" class="form-control" >
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Fecha de inicio</label>
      <input type="date" id="fechaposgradoinicio" name="fechaposgradoinicio" class="form-control" >
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Fecha término</label>
      <input type="date" id="fechaposgradotermino" name="fechaposgradotermino" class="form-control" >
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Años cursados</label>
      <input type="text" id="tiempocursadoposgrado" name="tiempocursadoposgrado" class="form-control" >
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Documento que recibe</label>
      <input type="text" id="documentorecibeposgrado" name="documentorecibeposgrado" class="form-control" >
    </div>
    <div class="form-group col-md-12">
      <label for="inputState">N° de cédula profesional</label>
      <input type="text" id="numerocedulaposgrado" name="numerocedulaposgrado" class="form-control" >
    </div>

              <h3>Nivel Doctorado/Subespecialidad</h3>
              
  <div class="form-group col-md-4">
      <label for="inputState">Nombre de la formación académica</label>
      <input type="text" id="nombreformaciondoctorado" name="nombreformaciondoctorado" class="form-control" >
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Nombre de la institución educativa</label>
      <input type="text" id="nombredoctorado" name="nombredoctorado" class="form-control" >
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Unidad hospitalaria</label>
      <input type="text" id="unidadhospitalariadoctorado" name="unidadhospitalariadoctorado" class="form-control" >
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Fecha de inicio</label>
      <input type="date" id="fechainiciodoctorado" name="fechainiciodoctorado" class="form-control" >
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Fecha término</label>
      <input type="date" id="fechaterminodoctorado" name="fechaterminodoctorado" class="form-control" >
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Años cursados</label>
      <input type="text" id="tiempocursadodoctorado" name="tiempocursadodoctorado" class="form-control" >
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Documento que recibe</label>
      <input type="text" id="documentorecibedoctorado" name="documentorecibedoctorado" class="form-control" >
    </div>
    <div class="form-group col-md-12">
      <label for="inputState">N° de cédula profesional</label>
      <input type="text" id="numeroceduladoctorado" name="numeroceduladoctorado" class="form-control" >
    </div>
    

              <h3>Otros estudios/Alta especialidad</h3>
        
 
  <div class="form-group col-md-4">
      <label for="inputState">Nombre de la formación académica</label>
      <input type="text" id="nombreformacionaltaesp" name="nombreformacionaltaesp" class="form-control" >
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Nombre de la institución educativa</label>
      <input type="text" id="nombrealtaespecialidad" name="nombrealtaespecialidad" class="form-control" >
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Unidad hospitalaria</label>
      <input type="text" id="unidadhospaltaesp" name="unidadhospaltaesp"class="form-control" >
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Fecha de inicio</label>
      <input type="date" id="fechainicioaltaesp" name="fechainicioaltaesp" class="form-control" >
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Fecha término</label>
      <input type="date" id="fechaterminoaltaesp" name="fechaterminoaltaesp" class="form-control" >
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Años cursados</label>
      <input type="text" id="tiempocursadoaltaesp" name="tiempocursadoaltaesp" class="form-control" >
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Documento que recibe</label>
      <input type="text" id="documentorecibealtaesp" name="documentorecibealtaesp" class="form-control" >
    </div>
    
              <h3>Otros estudios 1</h3>
    
  <div class="form-group col-md-6">
      <label for="inputState">Nombre de la formación académica</label>
      <input type="text" id="nombreformacionotros" name="nombreformacionotros" class="form-control" >
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Nombre de la institución educativa</label>
      <input type="text" id="nombreotrosestudiosuno" name="nombreotrosestudiosuno" class="form-control" >
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Fecha de inico</label>
      <input type="date" id="fechainiciootrosestudiosuno" name="fechainiciootrosestudiosuno" class="form-control" >
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Fecha término</label>
      <input type="date" id="fechaterminootrosestudiosuno" name="fechaterminootrosestudiosuno" class="form-control" >
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Documento que recibe</label>
      <input type="text" id="documentorecibeestudiosuno" name="documentorecibeestudiosuno" class="form-control" >
    </div>

              <h3>Otros estudios 2</h3>
       
  <div class="form-group col-md-6">
      <label for="inputState">Nombre de la formación académica</label>
      <input type="text" id="nombreformacionotrosdos" name="nombreformacionotrosdos" class="form-control" >
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Nombre de la institución educativa</label>
      <input type="text" id="nombreotrosestudiosdos" name="nombreotrosestudiosdos" class="form-control" >
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Fecha de inico</label>
      <input type="date" id="fechainiciootrosestudiosdos" name="fechainiciootrosestudiosdos" class="form-control" >
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Fecha término</label>
      <input type="date" id="fechaterminootrosestudiosdos" name="fechaterminootrosestudiosdos" class="form-control" >
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Documento que recibe</label>
      <input type="text" id="documentorecibeestudiosdos" name="documentorecibeestudiosdos" class="form-control" >
    </div>
    
              <h3>Servicio social</h3>
        
  <div class="form-group col-md-6">
      <label for="inputState">Nombre de la dependencia donde se realizó</label>
      <input type="text" id="nombreserviciosocial" name="nombreserviciosocial" class="form-control" >
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Fecha de inico</label>
      <input type="date" id="fechainicioservicio" name="fechainicioservicio" class="form-control" >
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Fecha término</label>
      <input type="date" id="fechaterminoservicio" name="fechaterminoservicio" class="form-control" >
    </div>
    <div class="form-group col-md-12">
      <label for="inputState">Labores que desempeñó</label>
      <textarea  rows="4" id="laboresservicio" name="laboresservicio" class="form-control" ></textarea>
    </div>
    <div class="form-group col-md-12">
      <label for="inputState">Documento recibido</label>
      <input type="text" id="documentorecibeservicio" name="documentorecibeservicio" class="form-control" >
    </div>

              <h3>Practicas profesionales</h3>
        
  <div class="form-group col-md-6">
      <label for="inputState">Nombre de la dependencia donde se realizó</label>
      <input type="text" id="nombrepracticas" name="nombrepracticas" class="form-control" >
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Fecha de inico</label>
      <input type="date" id="fechainiciopracticas" name="fechainiciopracticas" class="form-control" >
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Fecha término</label>
      <input type="date" id="fechaterminopracticas" name="fechaterminopracticas" class="form-control" >
    </div>
    <div class="form-group col-md-12">
      <label for="inputState">Labores que desempeñó</label>
      <textarea rows="4" id="laborespracticas" name="laborespracticas" class="form-control" ></textarea>
    </div>
    <div class="form-group col-md-12">
      <label for="inputState">Documento recibido</label>
      <input type="text" id="documentorecibepracticas" name="documentorecibepracticas" class="form-control" >
    </div>

              <h3>Certificación</h3>
       
  <div class="form-group col-md-6">
      <label for="inputState">Nombre de la institución educativa</label>
      <input type="text" id="nombreformacioncertificauno" name="nombreformacioncertificauno" class="form-control" >
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Especialidad que certifica</label>
      <input type="text" id="nombrecertificacionuno" name="nombrecertificacionuno" class="form-control" >
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Fecha de inicio</label>
      <input type="date" id="fechainiciocertificacionuno" name="fechainiciocertificacionuno" class="form-control" >
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Fecha término</label>
      <input type="date" id="fechaterminocertificacionuno" name="fechaterminocertificacionuno" class="form-control" >
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Documento que acredita</label>
      <input type="text" id="documentocertificacionuno" name="documentocertificacionuno" class="form-control" >
    </div>
  
              <h3>Segunda Certificación</h3>
        
  <div class="form-group col-md-6">
      <label for="inputState">Nombre de la institución educativa</label>
      <input type="text" id="nombreformacioncertificaciondos" name="nombreformacioncertificaciondos" class="form-control" >
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Especialidad que certifica</label>
      <input type="text" id="nombrecertificaciondos" name="nombrecertificaciondos" class="form-control" >
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Fecha de inicio</label>
      <input type="date" id="fechainiciocertificaciondos" name="fechainiciocertificaciondos" class="form-control" >
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Fecha término</label>
      <input type="date" id="fechaterminocertificaciondos" name="fechaterminocertificaciondos" class="form-control" >
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Documento que acredita</label>
      <input type="text" id="documentocertificaciondos" name="documentocertificaciondos" class="form-control" >
    </div>
  
              <h3>Actualización academica<br>
              Primer curso.</h3>
              
  <div class="form-group col-md-6">
      <label for="inputState">Nombre del curso</label>
      <input type="text" id="nombrecursouno" name="nombrecursouno" class="form-control" >
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Institución sede</label>
      <input type="text" id="institucioncursouno" name="institucioncursouno" class="form-control" >
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Fecha de inicio</label>
      <input type="date" id="fechainiciocursouno" name="fechainiciocursouno" class="form-control" >
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Fecha término</label>
      <input type="date" id="fechaterminocursouno" name="fechaterminocursouno" class="form-control" >
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Documento que acredita</label>
      <input type="text" id="documentorecibecursouno" name="documentorecibecursouno" class="form-control" >
    </div>
    <div class="form-group col-md-12">
      <label for="inputState">Nacional/Internacional</label>
      <select id="nacionalprimero" name="nacionalprimero" class="form-control" >
        <option selected>Seleccione...</option>
        <option value="Nacional">Nacional</option>
        <option value="Internacional">Internacional</option>
      </select>
    </div>
  
              <h3>Segundo curso.</h3>
              
  <div class="form-group col-md-6">
      <label for="inputState">Nombre del curso</label>
      <input type="text" id="nombrecursodos" name="nombrecursodos" class="form-control" >
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Institución sede</label>
      <input type="text" id="institucioncursodos" name="institucioncursodos" class="form-control" >
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Fecha de inicio</label>
      <input type="date" id="fechainiciocursodos" name="fechainiciocursodos" class="form-control" >
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Fecha término</label>
      <input type="date" id="fechaterminocursodos" name="fechaterminocursodos" class="form-control" >
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Documento que acredita</label>
      <input type="text" id="documentorecibecursodos" name="documentorecibecursodos" class="form-control" >
    </div>
    <div class="form-group col-md-12">
      <label for="inputState">Nacional/Internacional</label>
      <select id="nacionalsegundo" name="nacionalsegundo" class="form-control" >
        <option selected>Seleccione...</option>
        <option value="Nacional">Nacional</option>
        <option value="Internacional">Internacional</option>
      </select>
    </div>
  
              <h3>Tercer curso.</h3>
              
  <div class="form-group col-md-6">
      <label for="inputState">Nombre del curso</label>
      <input type="text" id="nombrecursotres" name="nombrecursotres" class="form-control" >
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Institución sede</label>
      <input type="text" id="institucioncursotres" name="institucioncursotres" class="form-control" >
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Fecha de inicio</label>
      <input type="date" id="fechainiciocursotres" name="fechainiciocursotres" class="form-control" >
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Fecha término</label>
      <input type="date" id="fechaterminocursotres" name="fechaterminocursotres" class="form-control" >
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Documento que acredita</label>
      <input type="text" id="documentorecibecursotres" name="documentorecibecursotres" class="form-control" >
    </div>
    <div class="form-group col-md-12">
      <label for="inputState">Nacional/Internacional</label>
      <select id="nacionaltercero" name="nacionaltercero" class="form-control" >
        <option selected>Seleccione...</option>
        <option value="Nacional">Nacional</option>
        <option value="Internacional">Internacional</option>
      </select>
    </div>

              <h3>Experiencia laboral, sector público.</h3>
             
  <div class="form-group col-md-6">
      <label for="inputState">Secretaría de Estado</label>
       <select name="cbx_empresaone" id="cbx_empresaone" class="form-control" >
				<option value="0">Seleccione</option>
				 <?php 
				 $query = "SELECT id_catalogo, nombreramo FROM catalogoramos ";
	                $resultado=$mysqli->query($query);
				while($row = $resultado->fetch_assoc()) { ?>
					<option value="<?php echo $row['id_catalogo']; ?>"><?php echo $row['nombreramo']; ?></option>
				<?php } ?>
      </select>
    </div>
  <div class="form-group col-md-6">
      <label for="inputState">Unidad responsable</label>
      <select name="cbx_dependenciaone" id="cbx_dependenciaone" class="form-control" >
       
      </select>
      </div>
   <div class="form-group col-md-6">
      <label for="inputState">Nombre del puesto</label>
      <input type="text" class="form-control" id="puestoempresauno"  name="puestoempresauno" >
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Tipo de puesto</label>
       <select name="empresa" id="empresa" class="form-control" >
				<option value="0">Seleccione</option>
				 <?php  $resultado = $conexion2->query("SELECT * FROM tipopuesto");
				while($row = $resultado->fetch_assoc()) { ?>
					<option value="<?php echo $row['id_tipopuesto']; ?>"><?php echo $row['descripcionpuesto']; ?></option>
				<?php } ?>
      </select>
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Dirección de la institución</label>
      <input type="text" class="form-control" id="empresadirecionuno" name="empresadirecionuno" >
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Teléfono de contacto</label>
      <input type="text" class="form-control" id="telcontactouno" name="telcontactouno" >
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Extensión</label>
      <input type="text" class="form-control" id="extencionuno" name="extencionuno" >
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Nombre de su jefe directo</label>
      <input type="text" class="form-control" id="jefedirectouno" name="jefedirectouno" >
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Motivo de su sepación</label>
      <input type="text" class="form-control" id="motivoseparacionuno" name="motivoseparacionuno" >
    </div>
    <div class="form-group col-md-12">
      <label for="inputState">Funciones principales</label>
      <textarea rows="4" class="form-control" id="funcionespricipalesuno" name="funcionespricipalesuno" ></textarea>
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Fecha de inicio de labores</label>
      <input type="date" class="form-control" id="fechainiciouno" name="fechainiciouno" >
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Fecha término de labores</label>
      <input type="date" class="form-control" id="fechaterminouno" name="fechaterminouno" >
    </div>
    
    <h3>Experiencia laboral, sector público, segundo.</h3>
   
  <div class="form-group col-md-6">
      <label for="inputState">Secretaría de Estado</label>
       <select name="cbx_empresados" id="cbx_empresados" class="form-control" >
				<option value="0">Seleccione</option>
				 <?php 
				 $query = "SELECT id_catalogo, nombreramo FROM catalogoramos ";
	                $resultado=$mysqli->query($query);
				while($row = $resultado->fetch_assoc()) { ?>
					<option value="<?php echo $row['id_catalogo']; ?>"><?php echo $row['nombreramo']; ?></option>
				<?php } ?>
      </select>
    </div>
  
  <div class="form-group col-md-6">
      <label for="inputState">Unidad responsable</label>
      <select name="cbx_dependenciados" id="cbx_dependenciados" class="form-control">
       
      </select>
      </div>
    <div class="form-group col-md-6">
      <label for="inputState">Nombre del puesto</label>
      <input type="text" id="puestoempresados" name="puestoempresados" class="form-control" >
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Tipo de puesto</label>
       <select name="tipopuestodos" id="tipopuestodos" class="form-control" >
				<option value="0">Seleccione</option>
				 <?php  $resultado = $conexion2->query("SELECT * FROM tipopuesto");
				while($row = $resultado->fetch_assoc()) { ?>
					<option value="<?php echo $row['id_tipopuesto']; ?>"><?php echo $row['descripcionpuesto']; ?></option>
				<?php } ?>
      </select>
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Dirección de la institución</label>
      <input type="text" class="form-control" id="empresadirecdos" name="empresadirecdos" >
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Teléfono de contacto</label>
      <input type="text" class="form-control" id="telcontactodos" name="telcontactodos" >
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Extensión</label>
      <input type="text" class="form-control" id="extenciondos" name="extenciondos" >
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Nombre de su jefe directo</label>
      <input type="text" class="form-control" id="jefedirectodos" name="jefedirectodos" >
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Motivo de su sepación</label>
      <input type="text" class="form-control" id="motivoseparaciondos" name="motivoseparaciondos" >
    </div>
    <div class="form-group col-md-12">
      <label for="inputState">Funciones principales</label>
      <textarea rows="4" class="form-control" id="funcionespricipalesdos" name="funcionespricipalesdos" ></textarea>
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Fecha de inicio de labores</label>
      <input type="date" class="form-control" id="fechainicidos" name="fechainicidos" >
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Fecha término de labores</label>
      <input type="date" class="form-control" id="fechaterminodos" name="fechaterminodos" >
    </div>
    
<h3>Experiencia laboral, sector público, tercero.</h3>
       
  <div class="form-group col-md-6">
      <label for="inputState">Secretaría de Estado</label>
       <select name="cbx_empresatres" id="cbx_empresatres" class="form-control" >
				<option value="0">Seleccione</option>
				 <?php 
				   $query = "SELECT id_catalogo, nombreramo FROM catalogoramos ";
	                $resultado=$mysqli->query($query);
				while($row = $resultado->fetch_assoc()) { ?>
					<option value="<?php echo $row['id_catalogo']; ?>"><?php echo $row['nombreramo']; ?></option>
				<?php } ?>
      </select>
    </div>
  
  <div class="form-group col-md-6">
      <label for="inputState">Unidad responsable</label>
      <select name="cbx_dependenciatres" id="cbx_dependenciatres" class="form-control" >
       
      </select>
      </div>
    <div class="form-group col-md-6">
      <label for="inputState">Nombre del puesto</label>
      <input type="text" id="puestoempresatres" name="puestoempresatres" class="form-control" >
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Tipo de puesto</label>
       <select name="tipopuestotres" id="tipopuestotres" class="form-control" >
				<option value="0">Seleccione</option>
				 <?php  $resultado = $conexion2->query("SELECT * FROM tipopuesto");
				while($row = $resultado->fetch_assoc()) { ?>
					<option value="<?php echo $row['id_tipopuesto']; ?>"><?php echo $row['descripcionpuesto']; ?></option>
				<?php } ?>
      </select>
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Dirección de la institución</label>
      <input type="text" class="form-control" id="empresadirectres" name="empresadirectres" >
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Teléfono de contacto</label>
      <input type="text" class="form-control" id="telcontactotres" name="telcontactotres" >
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Extensión</label>
      <input type="text" class="form-control" id="extenciontres" name="extenciontres" >
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Nombre de su jefe directo</label>
      <input type="text" class="form-control" id="jefedirectotres" name="jefedirectotres" >
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Motivo de su sepación</label>
      <input type="text" class="form-control" id="motivoseparaciontres" name="motivoseparaciontres" >
    </div>
    <div class="form-group col-md-12">
      <label for="inputState">Funciones principales</label>
      <textarea rows="4" class="form-control" id="funcionespricipalestres" name="funcionespricipalestres" ></textarea>
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Fecha de inicio de labores</label>
      <input type="date" class="form-control" id="fechainiciotres" name="fechainiciotres" >
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Fecha término de labores</label>
      <input type="date" class="form-control" id="fechaterminotres" name="fechaterminotres" >
    </div>
              <h3>Experiencia laboral, sector privado.</h3>
              
  <div class="form-group col-md-6">
      <label for="inputState">Nombre de la empresa</label>
      <input type="text" class="form-control" autocomplete="off" id="nombrelaboralprivada" name="nombrelaboralprivada">
    </div>
     <div class="form-group col-md-6">
      <label for="inputState">Tipo de puesto</label>
      <input type="text" class="form-control" autocomplete="off" id="tipopuestoprivada" name="tipopuestoprivada">
    </div>
     <div class="form-group col-md-6">
      <label for="inputState">Dirección de la empresa</label>
      <input type="text" class="form-control" autocomplete="off" id="direccionempresaprivada" name="direccionempresaprivada">
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Teléfono de contacto</label>
      <input type="text" class="form-control" autocomplete="off" id="telefonoempresaprivada" name="telefonoempresaprivada">
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Extensión</label>
      <input type="text" class="form-control" autocomplete="off" id="extencionempresaprivada" name="extencionempresaprivada">
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Nombre de su jefe directo</label>
      <input type="text" class="form-control" autocomplete="off" id="nombrejefeprivada" name="nombrejefeprivada">
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Motivo de su sepación</label>
      <input type="text" class="form-control" autocomplete="off" id="motivoseparacionprivada" name="motivoseparacionprivada">
    </div>
    <div class="form-group col-md-12">
      <label for="inputState">Funciones principales</label>
      <textarea rows="4" class="form-control" autocomplete="off" id="funcionesprivada" name="funcionesprivada"></textarea>
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Fecha de inicio de labores</label>
      <input type="date" class="form-control" autocomplete="off" id="fechainicioprivada" name="fechainicioprivada">
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Fecha término de labores</label>
      <input type="date" class="form-control" autocomplete="off" id="fechaterminoprivada" name="fechaterminoprivada">
    </div>
    
    <h3>Experiencia laboral, sector privado, segundo.</h3>
              
   <div class="form-group col-md-6">
      <label for="inputState">Nombre de la empresa</label>
      <input type="text" class="form-control" autocomplete="off" id="nombrelaboralprivadados" name="nombrelaboralprivadados">
    </div>
     <div class="form-group col-md-6">
      <label for="inputState">Tipo de puesto</label>
      <input type="text" class="form-control" autocomplete="off" id="tipopuestoprivadados" name="tipopuestoprivadados">
    </div>
     <div class="form-group col-md-6">
      <label for="inputState">Dirección de la empresa</label>
      <input type="text" class="form-control" autocomplete="off" id="direccionempresaprivadados" name="direccionempresaprivadados">
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Teléfono de contacto</label>
      <input type="text" class="form-control" autocomplete="off" id="telefonoempresaprivadados" name="telefonoempresaprivadados">
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Extensión</label>
      <input type="text" class="form-control" autocomplete="off" id="extencionempresaprivadados" name="extencionempresaprivadados">
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Nombre de su jefe directo</label>
      <input type="text" class="form-control" autocomplete="off" id="nombrejefeprivadados" name="nombrejefeprivadados">
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Motivo de su sepación</label>
      <input type="text" class="form-control" autocomplete="off" id="motivoseparacionprivadados" name="motivoseparacionprivadados">
    </div>
    <div class="form-group col-md-12">
      <label for="inputState">Funciones principales</label>
      <textarea rows="4" class="form-control" autocomplete="off" id="funcionesprivadados" name="funcionesprivadados"></textarea>
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Fecha de inicio de labores</label>
      <input type="date" class="form-control" autocomplete="off" id="fechainicioprivadados" name="fechainicioprivadados">
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Fecha término de labores</label>
      <input type="date" class="form-control" autocomplete="off" id="fechaterminoprivadados" name="fechaterminoprivadados">
    </div>
    
    <h3>Experiencia laboral, sector privado, tercero.</h3>
              
   <div class="form-group col-md-6">
      <label for="inputState">Nombre de la empresa</label>
      <input type="text" class="form-control" autocomplete="off" id="nombrelaboralprivadatres" name="nombrelaboralprivadatres">
    </div>
     <div class="form-group col-md-6">
      <label for="inputState">Tipo de puesto</label>
      <input type="text" class="form-control" autocomplete="off" id="tipopuestoprivadatres" name="tipopuestoprivadatres">
    </div>
     <div class="form-group col-md-6">
      <label for="inputState">Dirección de la empresa</label>
      <input type="text" class="form-control" autocomplete="off" id="direccionempresaprivadatres" name="direccionempresaprivadatres">
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Telefono de contacto</label>
      <input type="text" class="form-control" autocomplete="off" id="telefonoempresaprivadatres" name="telefonoempresaprivadatres">
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Extensión</label>
      <input type="text" class="form-control" autocomplete="off" id="extencionempresaprivadatres" name="extencionempresaprivadatres">
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Nombre de su jefe directo</label>
      <input type="text" class="form-control" autocomplete="off" id="nombrejefeprivadatres" name="nombrejefeprivadatres">
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Motivo de su sepación</label>
      <input type="text" class="form-control" autocomplete="off" id="motivoseparacionprivadatres" name="motivoseparacionprivadatres">
    </div>
    <div class="form-group col-md-12">
      <label for="inputState">Funciones principales</label>
      <textarea rows="4" class="form-control" autocomplete="off" id="funcionesprivadatres" name="funcionesprivadatres"></textarea>
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Fecha de inicio de labores</label>
      <input type="date" class="form-control" autocomplete="off" id="fechainicioprivadatres" name="fechainicioprivadatres">
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Fecha término de labores</label>
      <input type="date" class="form-control" autocomplete="off" id="fechaterminoprivadatres" name="fechaterminoprivadatres">
    </div>

              <h3>Producción cientifica (Investigación, última publicación).</h3>
              
  <div class="form-group col-md-6">
      <label for="inputState">Nombre del artículo o publicación</label>
      <input type="text" id="nombrepublicacion" name="nombrepublicacion" class="form-control" >
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Año de publiación</label>
      <input type="date" id="tiempopublicacion" name="tiempopublicacion" class="form-control" >
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Publicado en...</label>
      <input type="text" id="publicadoen" name="publicadoen" class="form-control" >
    </div>
    <div class="form-group col-md-12">
      <label for="inputState">País de publicación</label>
      <input type="text" id="paisdepublicacion" name="paisdepublicacion" class="form-control" >
    </div>
  
              <h3>Idioma.</h3>

  <div class="form-group col-md-6">
      <label for="inputState">Idioma.</label>
      <input type="text" id="nombreidioma" name="nombreidioma" class="form-control" >
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Nivel</label>
      <input type="text" id="nivel" name="nivel" class="form-control" >
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Dominio</label>
      <input type="text" id="niveldedominio" name="niveldedominio" class="form-control" >
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Documento que acredita tu idioma.</label>
      <input type="text" id="documentoacredita" name="documentoacredita" class="form-control" >
    </div>
  
              <h3>Otras habilidades.</h3>
              
  <div class="form-group col-md-12">
      <textarea class="form-control" id="otrashabilidades" name="otrashabilidades" ></textarea>
    </div>
  

  <br><br><br><br>

            
                <p style="font-size: .9em; text-align: justify; color: black; font-style: normal;">Manifiesto que<SELECT name="selCombo"  id="selCombo" required class="selCombo" > 
                <option value="">Seleccione</option>
                    <OPTION VALUE ="SI">SI</OPTION>
                    <OPTION VALUE="NO">NO</OPTION>
 
                </SELECT>tengo familiar(es) laborando en esta institución.</p>
                <p style="font-size: .9em; text-align: justify; color: black; font-style: normal;">Autorizo al Hospital Regional de Alta Especialidad de Ixtapaluca, el envío de información referente a 
                    cuestiones institucionales, asi como información que compete a mis documentos personales, al siguiente correo
                    electronico <input type="email" style="width: 200px; height: 20px; border: 1px solid blue;" required placeholder="Correo electronico"  id="correo_elect" name="correo_elect">Proporciono el siguiente télefono
                    para los mismos fines<input type="text" style="width: 200px; height: 20px; border: 1px solid blue;" required placeholder="Número Telefonico"  id="telefono_enlace" name="telefono_enlace">.</p>
            <br>
            <p style="font-size: .9em; text-align: justify; color: black; font-style: normal;">Autorizo<SELECT id="selCombo5" name="selCombo5" required class="selCombo5"> 
                <option value="">Seleccione</option>
                    <OPTION VALUE ="SI">SI</OPTION>
                    <OPTION VALUE="NO">NO</OPTION>
 
                </SELECT>consiento y autorizo expresamente al Hospital Regional de Alta Especialidad de Ixtapaluca,  que mis datos personales sean tratados y transmitidos por medio impreso 
                a empresas e instituciones del mismo grupo de interés, para ser considerado como posible candidato en alguna oferta laboral distinta
                 a la solicitada en esta institución, conforme a los términos y condiciones señalados en los artículos 97, 98, Fracción II de la Ley Federal de Transparencia y Acceso a la 
                 Información Pública, no teniendo ni reservando ninguna acción o derecho en contra del Hospital Regional de Alta Especialidad de Ixtapaluca.
                </p><br>
           
           <center><input type="submit"  id="registrar" value="Registrar" class="btn btn-warning">   </center>
  
</form> 


    <script src="js/jquery1.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/script.js"></script>
    <!--fin formulario de relleno-->
              
              <div class="row top-buffer">
                <div class="col-md-8">
                  <div class="print"> </div>
                </div>
              </div>
              <div class="row top-buffer">
                <div class="col-md-8">
                    <p class="small" style="font-size: 14px; line-height: 1.6em;">
                      La legalidad, veracidad y la calidad de la información es
                      estricta responsabilidad de la dependencia, entidad o
                      empresa productiva del Estado que la proporcionó en virtud
                      de sus atribuciones y/o facultades normativas. </p>
                  </div>
                </div>
              </div>
          </div>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
    <script src="js/vendor/bootstrap.js"></script>
    <script src="js/main.js"></script>
<script>
        
$("#formulario").on("submit", function(e){
    
    e.preventDefault();
    
    var formData = new FormData(document.getElementById("formulario"));
    formData.append("dato", "valor");
  
    $.ajax({
  
      url: "enviarDatos.php",
      type: "post",
      dataType: "html",
      data: formData,
      cache: false,
          contentType: false,
          processData: false,
          beforeSend: function(objeto){
            $('#tabla_resultado').html('<div id="tabla_resultado" style="position: fixed;  top: 0px; left: 0px;  width: 100%; height: 100%; z-index: 9999;  opacity: .7; background: url(imagenes/loader2.gif) 50% 50% no-repeat rgb(249,249,249);"><br/></div>');
 
              },
          success: function(datos){
         
            $("#tabla_resultado").html(datos);
          }
   
    })
    
  })
 </script> 

  </body>
</html>
