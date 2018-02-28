<html>
<head>
	<title>Seguimiento | Agregar empresa </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../../assets/css/udpate.css">
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

    $(document).on("submit","#form-buscar",function(e){
    	e.preventDefault();
        var url="../../../ajax/busca_empresa_agrega.php";
        var txt_ruc=$("#buscar-ruc").val();
        var result_ruc=$("input[name*='txt-result-ruc']");
        var result_razon=$("input[name*='txt-result-razon']");
        var result_estado= $("input[name*='txt-result-estado']");
        var result_departamento= $("input[name*='txt-result-departamento']");
        var result_direccion= $("input[name*='txt-result-direccion']");
        var result_provincia= $("input[name*='txt-result-provincia']");
        var result_distrito= $("input[name*='txt-result-distrito']");  
        if(txt_ruc!=""){
        	$.ajax({
            type:'post',
            url:url,
            data:{txt_ruc:txt_ruc},
            beforeSend:function(){
            	$("#respuesta-id").css({
            		color:'green'
            	});
            	$("#respuesta-id").html('Buscando...');
            },
            success:function(data){
            	var hola=data.split("##");
            	result_ruc.val(hola[0]);
            	result_razon.val(hola[1]);
            	result_estado.val(hola[2]);
            	result_direccion.val(hola[3]);
            	result_departamento.val(hola[4]);
            	result_provincia.val(hola[5]);
            	result_distrito.val(hola[6]);
            	$("#respuesta-id").html('');
            	$("#respuesta-id").css({
            		color:'red'
            	});
            	if(result_estado.val()=="Error"){
            		$("#respuesta-id").html('No se encuentra: '+ txt_ruc+ '<br> verifique <a href="http://e-consultaruc.sunat.gob.pe/cl-ti-itmrconsruc/jcrS00Alias" target="_blank">aquí</a>');	
            	}
            }   
        });
        }else{
      		result_ruc.val("");
            	result_razon.val("");
            	result_estado.val("");
            	result_direccion.val("");
            	result_departamento.val("");
            	result_provincia.val("");
            	result_distrito.val("");
            $("#respuesta-id").html('Ingrese algun numero  de RUC<br> para buscar');	
        }
    });
    </script>
</head>
<body>
     <!-- Static navbar -->
      <nav class="navbar navbar-default">
        <div class="container-fluid center-block" style="float: none;max-width:850px;">
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
              <li class=""><a href="../empresa">Ir atras</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
        <div class="container" style="margin-top:40px;max-width:850px;">
      <div class="panel panel-primary">
       <div class="panel-heading" style="background:#2b58cf;">Agregar empresa</div>
  <div class="panel-body text-center" style="overflow-x:auto;">
        <table class="table table_bordered table-hover" style="max-width:850px;margin:auto;">
        <tbody class="text-center">
            <tr>
                <td class="" id="respuesta-id" style="font-weight:bold;color: red;"></td>
			<form action="" method="post" id="form-buscar">
                <td><input type="text" placeholder="Buscar por número de Ruc"  id="buscar-ruc" maxlength="11"></input><br><br><input type="submit" class="btn bg-azul" id="btn-buscar" value="Buscar Empresa"></td>
                </form>
            </tr>
            <form action="" method="post" id="id-form">
            	<tr>
                <td class="" style="font-weight:bold;">RUC</td>
                <td><input type="text" placeholder="Se mostrará RUC" readonly class="readonly" name="txt-result-ruc"></input></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">Razon Social</td>
                <td><input type="text" placeholder="Se mostrará razon social" readonly class="readonly" name="txt-result-razon"></input></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">Departamento</td>
                <td><input type="text" placeholder="Se mostrará departamento" readonly class="readonly" name="txt-result-departamento"></input></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">Provincia</td>
                <td><input type="text" placeholder="Se mostrará provincia" readonly class="readonly" name="txt-result-provincia"></input></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">Distrito</td>
                <td><input type="text" placeholder="Se mostrará distrito" readonly class="readonly" name="txt-result-distrito"></input></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">Direccion Fiscal</td>
                <td><input type="text" placeholder="Se mostrará direccion fiscal" readonly class="readonly" name="txt-result-direccion"></input></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">Referencia de direccion</td>
                <td><input type="text"  placeholder="Ingrese referencia de  direccion" name="txt-referencia-direccion"></input></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">Estado del contribuyente</td>
                <td><input type="text" placeholder="Se mostrará estado" readonly class="readonly" name="txt-result-estado"></input></td>
            </tr>
        </tbody>
        </table>
   </div>
</div>
      <div class="panel panel-primary">
       <div class="panel-heading" style="background:#2b58cf;">Informacion complementaria</div>
  <div class="panel-body text-center" style="overflow-x:auto;">
  	<a href="http://e-consultaruc.sunat.gob.pe/cl-ti-itmrconsruc/jcrS00Alias" target="_blank">Ir a consulta sunat</a>
        <table class="table table_bordered table-hover" style="max-width:850px;margin:auto;">
        <tbody class="text-center">
            <tr>
                <td class="" style="font-weight:bold;" colspan="2">Representante legal</td>
                <td colspan="2"><input  type="text" placeholder="Apellidos y nombres" name="txt-nombre-repre"></input></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;" colspan="2">Actividad principal</td>
                <td colspan="2"><input  type="text" placeholder="Actividad princpial" name="txt-actividad-principal"></input></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">DNI representante legal</td>
                <td><input type="text" style="min-width: 150px;" placeholder="XXXXXXXX" name="txt-dni-repre"></input></td>
                <td class="" style="font-weight:bold;">Cantidad de Trabajadores</td>
                <td><input type="text" style="min-width: 70px;" placeholder="Cant. Trabajadores" name="txt-cant-trabajadores"></input></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">Telefono empresa</td>
                <td><input type="text" style="min-width: 150px;" placeholder="XXXXXXXXX" name="txt-telefono-empresa"></input></td>
                <td class="" style="font-weight:bold;">Email empresa</td>
                <td><input type="text" style="min-width: 70px;" placeholder="empresa@ejemplo.com" name="txt-empresa-email"></input></td>
            </tr>
            <tr>
                <td colspan="4" class="text-center">
                    <input type="submit" class="btn btn-primary" style="background:#2b58cf;" value="Agregar Empresa">
                </td>
            </tr>
            
        </tbody>
        </table>
        </form>
   </div>
  </div>
    </body>
</html>