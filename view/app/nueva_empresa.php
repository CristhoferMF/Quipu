<?php 
require_once '../../controller/update_empresa_estudiantes.php';
//echo $_GET['alumno'];
if(!$info_estudiante or mysqli_num_rows($info_estudiante)==0){
    header("location:index.php");
}else{
    //echo "bien";
    $result=mysqli_fetch_array($info_estudiante);
    //echo $empresa_antigua[0];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Seguimiento | Alumno <?php echo $result[14]?></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../../assets/css/udpate.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta charset="utf-8">
	<script>

    $(document).on("input","#txt_empresa",function(){
            var nombre=$("#txt_empresa").val();
        if(nombre==""){
                $("#respuesta_empresa").html("");
                $("#respuesta_sede").html("");
                $("#respuesta_monitor").html("");
            $('#btn-id-enviar').attr("disabled", true);
            }else{
                $.ajax({
                data:{nombre:nombre},
                url:   '../../../ajax/combo_empresa.php',
                type:  'post',
                success:  function (response) {
                        $("#respuesta_empresa").html(response);
                }
        });
            }
            
        });
        
    $(document).on("click","#id-btn-empresa",function(){
            var ruc=$("#combo_empresa").val();
            $.ajax({
                data:{ruc:ruc},
                url:   '../../../ajax/combo_sede.php',
                type:  'post',
                success:  function (response) {
                        $("#respuesta_sede").html(response);
                }
        });
        });
        
        $(document).on("change","#combo_empresa",function(){
                $("#respuesta_sede").html("");
                $("#respuesta_monitor").html("");
            $('#btn-id-enviar').attr("disabled", true);
        });
        
        $(document).on("change","#combo_sede",function(){
                $("#respuesta_monitor").html("");
            $('#btn-id-enviar').attr("disabled", true);
        });
        
        $(document).on("click","#id-btn-sede",function(){
            var id_sede=$("#combo_sede").val();
            $.ajax({
                data:{id_sede:id_sede},
                url:   '../../../ajax/combo_monitor.php',
                type:  'post',
                success:  function (response) {
                    $("#respuesta_monitor").html(response);
                    var respuesta= $("#respuesta_monitor").html();
                    if(respuesta!="<h4>No existe monitor</h4>"){
                        $('#btn-id-enviar').attr("disabled", false);
                    }else{
                        $('#btn-id-enviar').attr("disabled", true);
                    }     
                }
        });
        });
        $(document).on("submit","#form-id",function(e){
        var url="../../../ajax/nueva_empresa.php";
        var id=$("#id-alumno").val();
        e.preventDefault();
        $.ajax({
            type:'post',
            url:url,
            data:$('#form-id').serialize(),
            success:function(data){
                alert(data);
                location.assign('../../app/'+id);
                //$('#respuesta').html(data);
            }   
        });
    });
    </script>
</head>
<body>
  <div class="container" style="margin-top:40px;max-width:850px;border-left:1px solid #d3d3d3;border-right:1px solid #d3d3d3;">
     <!-- Static navbar -->
      <nav class="navbar navbar-default" onk>
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="../../app">Area de Seguimiento</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class=""><a href="../<?php echo $result[14]?>">Ir atras</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
      <div class="panel panel-primary">
       <div class="panel-heading" style="background:#2b58cf;">DATOS DE EMPRESA ANTIGUA</div>
  <div class="panel-body text-center" style="overflow-y:auto;">
        <h1>ID: <?php echo $result[14]?></h1>
        <input type="text" hidden id="id-alumno" name="txt-id" value="<?php echo $result[14];?>"></input>
        <table class="table table_bordered table-hover" style="max-width:850px;margin:auto;">
        <tbody>
           <?php if($empresa_antigua[2]!="SIN EMPRESA"){?>
            <tr>
                <td class="" style="font-weight:bold;">RAZON SOCIAL</td>
                <td><?php echo $empresa_antigua[2]?></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">RUC</td>
                <td><?php echo $empresa_antigua[3]?></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">SEDE EMPRESA</td>
                <td><?php echo $empresa_antigua[4]?></td>
            </tr>
            <?php }else{
    ?>
    <tr>
                <td class="" style="font-weight:bold;" colspan="2">SIN EMPRESA</td>
            </tr>
    <?php
}?>
        </tbody>
        </table>
   </div>
  </div>
     <div class="panel panel-primary">
       <div class="panel-heading" style="background:#2b58cf;">DATOS DE EMPRESA ANTIGUA</div>
       <div id="respuesta"></div>
  <div class="panel-body text-center" style="overflow-y:auto;">
        <table class="table table_bordered table-hover" style="max-width:850px;margin:auto;">
        <tbody>
        <form id="form-id" method="post">
            <input type="text" hidden  name="txt-id" value="<?php echo $result[14] ?>">
            <input type="text" hidden name="txt-cfp" value="<?php echo $result[18] ?>">
            <input type="text" hidden name="txt-carrera" value="<?php echo $result[19] ?>">
            <input type="text" hidden  name="txt-bloque" value="<?php echo $result[21] ?>">
            <input type="text" hidden  name="txt-ciclo" value="<?php echo $result[22] ?>">
            <input type="text"  hidden name="txt-semestre" value="<?php echo $result[20] ?>">
            <input type="text" hidden name="txt-id-historia" value="<?php echo $empresa_antigua[5] ?>">
            <input type="text" hidden name="txt-n-historia" value="<?php echo $empresa_antigua[0]?>">
            <tr>
                <td class="" style="font-weight:bold;">FECHA INICIO</td>
                <td><input type="date" name="txt-fecha-inicio"></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">FECHA FIN</td>
                <td><input type="date" name="txt-fecha-fin"></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">TIPO DE CONTRATO</td>
                <td><input type="text" name="txt-tipo-contrato"></td>
            </tr>
            <tr>
                <td class="" ><i>BUSCAR EMPRESA</i></td>
                <td><input type="text" id="txt_empresa"></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">EMPRESA</td>
                <td id="respuesta_empresa"></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">SEDE EMPRESA</td>
                <td id="respuesta_sede"></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">MONITOR SEDE</td>
                <td id="respuesta_monitor"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" disabled value="Cambiar Empresa" class="btn btn-primary" id="btn-id-enviar"></td>
            </tr>
           </form> 
        </tbody>
        </table>
   </div>
  </div>
      
  </div>
</div>
    </body>
</html>