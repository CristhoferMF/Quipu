<html>
<head>
	<title>Seguimiento | Agregar Alumno </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../assets/css/udpate.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta charset="utf-8">
	<script>
    $(document).on("submit","#id-form",function(e){
        var url="../../ajax/add_alumno.php";
        e.preventDefault();
        $.ajax({
            type:'post',
            url:url,
            data:$('#id-form').serialize(),
            success:function(data){
                alert(data);
                $('#id-form')[0].reset();
                $('#semestre-id').val("2018-01");
            }   
        });
    });
    </script>
</head>
<body>
  <div class="container" style="margin-top:40px;max-width:850px;border-left:1px solid #d3d3d3;border-right:1px solid #d3d3d3;">
     <!-- Static navbar -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="../app">Area de Seguimiento</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class=""><a href="../app/">Ir atras</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
      <div class="panel panel-primary">
       <div class="panel-heading" style="background:#2b58cf;">AGREGAR ALUMNO</div>
  <div class="panel-body text-center" style="overflow-x:auto;">
        <table class="table table_bordered table-hover" style="max-width:850px;margin:auto;">
        <form action="" method="post" id="id-form">
        <tbody class="text-center">
            <tr>
                <td class="" style="font-weight:bold;">ID</td>
                <td><input type="text" placeholder="Numero de ID" value="" required name="txt-id"></input></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">APELLIDOS</td>
                <td><input type="text" placeholder="Apellidos Completos" value="" name="txt-apellidos"></input></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;"> NOMBRES</td>
                <td><input type="text" placeholder="Nombres Completos" value="" name="txt-nombres"></input></td>
            </tr>
            
            <tr>
                <td class="" style="font-weight:bold;">CFP</td>
                <td><input type="text" placeholder="CFP" value="" name="txt-cfp"></input></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">SEMESTRE</td>
                <td><input type="text" placeholder="Semestre Actual" id="semestre-id"value="2018-01" name="txt-semestre" readonly ></input></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">CICLO</td>
                <td><input type="text" placeholder="Ciclo Actual" value="" name="txt-ciclo"></input></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">BLOQUE</td>
                <td><input type="text" placeholder="Bloque Actual" value="" name="txt-bloque"></input></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">CARRERA</td>
                <td><input type="text" placeholder="Carrera Actual" value="" name="txt-carrera"></input></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">DIA DE CLASE</td>
                <td><input type="text" placeholder="Dia de Clase" value="" name="txt-diaclase"></input></td>
            </tr>
               <tr>
                <td class="" style="font-weight:bold;">TELEFONO</td>
                <td><input type="text" placeholder="Telefono Actual" value="" name="txt-telefono"></input></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">CELULAR</td>
                <td><input type="text" placeholder="Numero de celular" value="" name="txt-celular"></input></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">EMAIL</td>
                <td><input type="email" placeholder="Correo Electronico" value="" name="txt-email"></input></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">DOMICILIO</td>
                <td><input type="text" placeholder="Domicilio" value="" name="txt-domicilio"></input></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">HORARIO DE PRACTICAS</td>
                <td><input type="text" placeholder="Horario de Practicas" value="" name="txt-horario"></input></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">PUESTO</td>
                <td><input type="text" placeholder="Puesto Actual" value="" name="txt-puesto"></input></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">EMPRESA_PATROCINIO</td>
                <td><input type="text" placeholder="¿Patrocinado? SI o NO" value="" name="txt-empresa"></input></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">INICIO DE SEMINARIO</td>
                <td><input type="text" placeholder="(YYY-mm-dd)" name="txt-iniciosem"></input></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">FIN DE SEMINARIO</td>
                <td><input type="text" placeholder="(YYY-mm-dd)" value="" name="txt-finsem"></input></td>
            </tr>
            <tr>
                <td colspan="2" class="text-center">
                    <input type="submit" class="btn btn-primary" value="Agregar Alumno">
                </td>
            </tr>
        </tbody>
        </table>
        </form>
   </div>
  </div>
</div>
    </body>
</html>