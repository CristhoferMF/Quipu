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

    $(document).on("click","#btn-buscar",function(){
        var url="../../../ajax/busca_empresa_agrega.php";
        var txt_ruc=$("#buscar-ruc").val();
        if(txt_ruc!=""){
        	$.ajax({
            type:'post',
            url:url,
            data:{txt_ruc:txt_ruc},
            success:function(data){
            	var hola=data.split("##");
            	$("input[name*='txt-result-ruc']").val(hola[0]);
            	$("input[name*='txt-result-razon']").val(hola[1]);
            	$("input[name*='txt-result-estado']").val(hola[2]);
            	$("#respuesta-id").html('');
            	if($("input[name*='txt-result-estado']").val()=="Error"){
            		$("#respuesta-id").html('No se encuentra:<br> verifique <a href="http://e-consultaruc.sunat.gob.pe/cl-ti-itmrconsruc/jcrS00Alias" target="_blank">aquí</a>');	
            	}
            	
                //alert(hola[1]);
            }   
        });
        }else{
        	$("input[name*='txt-result-ruc']").val("");
            	$("input[name*='txt-result-razon']").val("");
            	$("input[name*='txt-result-estado']").val("");
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
              <li class=""><a href="../app/">Ir atras</a></li>
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

                <td><input type="text" placeholder="Buscar por número de Ruc"  id="buscar-ruc" maxlength="11"></input><button class="btn bg-azul" id="btn-buscar">Buscar Empresa</button></td>
            </tr>
            <form action="" method="post" id="id-form">
            	<tr>
                <td class="" style="font-weight:bold;">RUC</td>
                <td><input type="text" placeholder="Se mostrará RUC" readonly name="txt-result-ruc"></input></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">Razon Social</td>
                <td><input type="text" placeholder="Se mostrará razon social" readonly name="txt-result-razon"></input></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">Estado del contribuyente</td>
                <td><input type="text" placeholder="Se mostrará estado" readonly name="txt-result-estado"></input></td>
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
                <td class="" style="font-weight:bold;">Representante legal</td>
                <td><input type="text" placeholder="Representante legal" readonly name="txt-representante"></input></td>
            </tr>
            <tr>
                <td colspan="2" class="text-center">
                    <input type="submit" class="btn btn-primary" style="background:#2b58cf;" value="Agregar Empresa">
                </td>
            </tr>
        </tbody>
        </table>
        </form>
        </form>
   </div>
  </div>
    </body>
</html>