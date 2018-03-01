<?php 
require_once '../../controller/info_empresa_controller.php';
//echo $_GET['alumno'];
if(!$info_empresa or mysqli_num_rows($info_empresa)==0){
    header("location:../app");
}else{
    $result=mysqli_fetch_array($info_empresa);
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
	<script type="text/javascript">
		$(document).on("click","#id-btn-sede",function(){
            var id_sede=$("#combo_sede").val();
            $.ajax({
                data:{id_sede:id_sede},
                url:   '../../../ajax/monitor_sede.php',
                type:  'post',
                success:  function (response) {
                    $("#respuesta-monitor").html(response);
                }
        });
        });
	</script>
</head>
<body>
     <!-- Static navbar -->
      <nav class="navbar navbar-default" onk>
        <div class="container-fluid center-block" style="float: none;max-width:850px;">
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
              <li class=""><a href="../empresa">Ir atras</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Acciones <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li class="dropdown-header">Empresa</li>
                  <li><a href="empresa/-add">Editar Empresa</a></li>
                  <li class="dropdown-header">Sede</li>
                  <li><a href="empresa/-add">Agregar Sede</a></li>
                  <li class="dropdown-header">Monitor</li>
                  <li><a href="empresa/-add">Agregar Monitor</a></li>
                </ul>
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
<div class="container" style="margin-top:40px;max-width:850px;">
      <div class="panel panel-primary">
       <div class="panel-heading" style="background:#2b58cf;">DATOS DE EMPRESA </div>
  <div class="panel-body text-center" style="overflow-y:auto;">
        <h1>RUC: <?php echo $result[0]?></h1>
        <input type="text" hidden id="id-alumno" name="txt-id" value="<?php echo $result[14];?>"></input>
        <table class="table table_bordered table-hover" style="max-width:850px;margin:auto;">
        <tbody>
            <tr>
                <td class="" style="font-weight:bold;">RAZON SOCIAL</td>
                <td><?php echo $result[1]?></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">REPRESENTANTE LEGAL</td>
                <td><?php echo $result[2]?></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">DNI REPRESENTANTE</td>
                <td><?php echo $result[3]?></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">CANT. TRABAJADORES</td>
                <td><?php echo $result[4]?></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">ACTIVIDAD PRINCIPAL</td>
                <td><?php echo $result[5]?></td>
            </tr>
<tr>
                <td class="" style="font-weight:bold;">ESTADO</td>
                <td><?php echo $result[6]?></td>
            </tr>
        </tbody>
        </table>
   </div>
</div>
<div style="overflow-x: scroll; margin-bottom: 20PX;">
        <table class="table table_bordered table-hover" style="max-width:850px;margin:auto;">
        <thead>
        	<tr>
        <th nowrap style="background:#2b58cf;color: white;padding: 12px;">RUC EMPRESA</th>
        <th nowrap style="background:#2b58cf;color: white;padding: 12px;">RUC SEDE</th>
        <th nowrap style="background:#2b58cf;color: white;padding: 12px;">DIRECCION FISCAL</th>
        <th nowrap style="background:#2b58cf;color: white;padding: 12px;">DEPARTAMENTO</th>
        <th nowrap style="background:#2b58cf;color: white;padding: 12px;">PROVINCIA</th>
        <th nowrap style="background:#2b58cf;color: white;padding: 12px;">DISTRITO</th>
        <th nowrap style="background:#2b58cf;color: white;padding: 12px;">REFERENCIA</th>
        <th nowrap style="background:#2b58cf;color: white;padding: 12px;">TELEFONO</th>
        <th nowrap style="background:#2b58cf;color: white;padding: 12px;">EMAIL</th>
        <th nowrap style="background:#2b58cf;color: white;padding: 12px;">ESTADO</th>
      </tr>
      </thead>
      <tbody>
      <?php while($result1=mysqli_fetch_array($info_sede)){
      	echo "<tr>
      		<td>$result1[1]</td>
      		<td nowrap>
      		<b>$result1[0]</b>
      		</td>
      		<td>$result1[2]</td>
      		<td>$result1[3]</td>
      		<td>$result1[4]</td>
      		<td>$result1[5]</td>
      		<td>$result1[6]</td>
      		<td>$result1[7]</td>
      		<td>$result1[8]</td>
      		<td>$result1[9]</td>
      	</tr>";
      }?>
        </tbody>
        </table>
        </div>
	<div style="max-width: 300px;display: flex;justify-content: space-between;padding: 7px;">
  		<?php echo $cbo_sede;?>
  	</div>
	<div id="respuesta-monitor" style="overflow-x: scroll; margin-bottom: 40PX;"></div>

  </div> 
</div>
</body>