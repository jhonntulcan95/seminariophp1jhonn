<!DOCTYPE html>
<html>
<head>
  <title>FORMULARIO DE INSCRIPCION</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/materialize.min.css">
  <link rel="stylesheet" type="text/css" href="css/sweetalert.css">
  <link rel="stylesheet" type="text/css" href="css/jquery-ui.structure.css">
  <link rel="stylesheet" type="text/css" href="css/jquery-ui.theme.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
  <script type="text/javascript" src="js/jquery-ui.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript" src="js/sweetalert.min.js"></script>
  <script type="text/javascript" src="js/funciones.js"></script>
</head>
<body>
<nav class="nav-extended">
    <div class="nav-content">
      <div class="container"><span class="nav-title">FORMULARIO DE INSCRIPCIÓN UNIVERSIDAD DE NARIÑO</span></div>
    </div>
    <div class="progress">
      <div class="determinate" style="width: 100%"></div>
  </div>
  </nav>
  <hr>
<form class="col s12" action="procesa.php" method="POST">
<div class="container">
    <div class="row">
      <div class="col s12">
            <div class="col s6">
          <label>Programa al que Aspira</label>
          <select class="browser-default">
            <option value="" disabled selected>Seleccion una Opcion</option>
            <option value="1">Administracion de Empresas</option>
            <option value="2">Contaduria Publica</option>
            <option value="3">Comercio Internacional</option>
            <option value="4">Derecho</option>
            <option value="5">Geografia</option>
            <option value="6">Ingenieria de Sistemas</option>
            <option value="7">Ingenieria Civi</option>
            <option value="8">Ingneieria Electronica</option>
            <option value="9">Medicina</option>
            <option value="10">Zootecnia</option>
          </select>
        </div>
          <div class="col s12 m6 l3">
          <label>Jornada</label>
          <select class="browser-default">
            <option value="" disabled selected>Seleccion una Opción</option>
            <option value="1">Diurna</option>
            <option value="2">Nocturna</option>
          </select>
        </div>
      </div>
</div>

  <div class="row">
        <div class="col s12">
          <fieldset>
          <legend><i class="material-icons prefix">account_circle</i></legend>
          <div class="col s12">
          <div class="input-field col s6">
            <input placeholder="Ingrese sus Nombres" id="first_name" name="first_name" type="text" class="validate">
            <label for="first_name">Nombres</label>
          </div>
        <div class="input-field col s6">
          <input placeholder="Ingrese sus Apellidos" id="last_name" name="last_name" type="text" class="validate">
          <label for="last_name">Apellidos</label>
        </div>
        </div>
        <div class="col s12">
            <div class="col s6">
              <label>Tipo de Documento</label>
              <select class="browser-default">
                <option value="" disabled selected>Seleccion una Opcion</option>
                <option value="1">Cedula de Ciudadania</option>
                <option value="2">Tarjeta de Identidad</option>
                <option value="3">Cedula de Extranjeria</option>
              </select>
          </div>
          <div class="input-field col s6">
            <input id="last_name" type="text" class="validate">
            <label for="last_name">Numero de Documento</label>
          </div>
        </div>
        <div class="col s12">
            <div class="col s6">
              <label>Lugar y Fecha de Expedicion</label>
              <select class="browser-default">
                <option value="" disabled selected>Seleccion una Opcion</option>
                <option value="1">Pasto</option>
                <option value="2">Cali</option>
                <option value="3">Popayan</option>
              </select>
          </div>
          <div class="input-field col s6">
            <input type="date" class="datepicker" placeholder="Fecha de Expedicion">
          </div>
        </div>
        <div class="col s12">
            <div class="col s6">
              <label>Lugar y Fecha de Nacimiento</label>
              <select class="browser-default">
                <option value="" disabled selected>Seleccion una Opcion</option>
                <option value="1">Pasto</option>
                <option value="2">Cali</option>
                <option value="3">Popayan</option>
              </select>
          </div>
          <div class="input-field col s6">
            <input type="date" class="datepicker" placeholder="Fecha de Nacimiento" name="fecha_nac">
          </div>
        </div>
        <div class="col s12">
          <div class="col s6">
            <label>Genero</label>
              <select class="browser-default">
                <option value="" disabled selected>Seleccion una Opcion</option>
                <option value="1">Masculino</option>
                <option value="2">Femenino</option>
              </select>
          </div>
          <div class="col s6">
            <label>Estado Civil</label>
              <select class="browser-default">
                <option value="" disabled selected>Seleccion una Opcion</option>
                <option value="1">Soltero</option>
                <option value="2">Casado</option>
                <option value="3">Union Libre</option>
                <option value="4">Viudo</option>
                <option value="5">Separado</option>
              </select>
          </div>
        </div>
        </fieldset>

        </div>
        <div class="col s12">
          <br>
          <hr>
        </div>

        <div class="col s12">
          <fieldset>
            <legend><i class="material-icons prefix">home</i></legend>
            <div class="col s6">
              <label>Direccion de Residencia</label>
              <input placeholder="Ingrese la Direccion" id="direccion_residencia" type="text" class="validate">
            </div>
            <div class="col s6">
              <label>Barrio</label>
              <input placeholder="Ingrese el nombre del Barrio" id="barrio_residencia" type="text" class="validate">
            </div>
            <div class="col s6">
              <label>Ciudad</label>
              <select class="browser-default">
                <option value="" disabled selected>Seleccion una Ciudad</option>
                <option value="1">Cali</option>
                <option value="2">Popayan</option>
                <option value="3">Manizales</option>
                <option value="5">Medellin</option>
              </select>
            </div>
            <div class="input-field col s6">
              <i class="material-icons prefix">stay_current_portrait</i>
              <input id="icon_telephone" type="tel" class="validate">
              <label for="icon_telephone">Celular</label>
            </div>
            <div class="input-field col s6">
              <i class="material-icons prefix">email</i>
              <input id="email" type="email" class="validate">
              <label for="email" data-error="wrong" data-success="right">Email</label>
            </div>
          </fieldset>
        </div>

        <div class="col s12">
          <br>
          <hr>
        </div>

        <div class="col s12">
            <fieldset>
              <legend><i class="material-icons prefix">library_books</i></legend>
              <div class="col s12">
                <label>Titulo Bachiller</label>
                <p></p>
                <input name="group1" type="radio" id="test1"/>
                <label for="test1">Bachiller Academico</label>
                <input name="group1" type="radio" id="test2"/>
                <label for="test2">Tecnico Comercial</label>
                <input name="group1" type="radio" id="test3"/>
                <label for="test3">Tecnico Industrial</label>
                <input name="group1" type="radio" id="test4"/>
                <label for="test4">Tecnico Agricola</label>
                <input name="group1" type="radio" id="test5"/>
                <label for="test5">Tecnico en Artes</label>
              </div>

            </fieldset>
        </div>

        <div class="col s12">
          <br>
          <hr>
        </div>

        <div class="col s12">
            <fieldset>
              <legend><i class="material-icons prefix">picture_in_picture</i></legend>
              <div class="col s12">
                <label>Cargue una Foto de Identificacion</label>
                <div class="file-field input-field">
                  <div class="btn">
                    <span>CARGAR</span>
                    <input type="file">
                  </div>
                  <div class="file-path-wrapper">
                    <input class="file-path validate" type="text">
                  </div>
                </div>
              </div>

            </fieldset>
        </div> 
    <div class="col s12" align="center">
      <br>
      <button class="btn waves-effect waves-light" type="submit" name="registrar"><i class="material-icons left">file_upload</i>REGISTRAR</button>
    </div>

  </div>
</div>
</form>
</body>
</html>