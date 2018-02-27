<?php 
require_once '../../controller/info_estudiantes_controller.php';
//echo $_GET['alumno'];
if(!$info_estudiante or mysqli_num_rows($info_estudiante)==0){
    header("location:../app");
}else{
    //echo "bien";
    $result=mysqli_fetch_array($info_estudiante);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Seguimiento | Alumno <?php echo $result[14]?></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta charset="utf-8">
</head>
<body>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">¿Esta Seguro?</h4>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-primary" style="background:#2b58cf;">Aceptar</button>
        </div>
      </div>
    </div>
  </div>
</div>

  <div class="container" style="margin-top:40px;max-width:850px;">
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
              <!--li class=""><a href="../app">Home</a></li-->
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Acciones <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="<?php echo $result[14]?>/edit">Editar Información</a></li>
                  <li><a href="<?php echo $result[14]?>/historial">Ver Historial</a></li>
                  <li><a href="" data-toggle="modal" data-target="#myModal">Dar de baja</a></li>
                  <li role="separator" class="divider"></li>
                  <li class="dropdown-header">Empresa</li>
                  <li><a href="<?php echo $result[14]?>/nueva_empresa">Cambiar de empresa</a></li>
                  <li><a href="#">Cambiar monitor</a></li>
                  <li><a href="#">Asignar especialista</a></li>
                </ul>
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
      <div class="panel panel-primary">
       <div class="panel-heading" style="background:#2b58cf;">INFORMACION DE ALUMNO</div>
  <div class="panel-body text-center" style="overflow-y:auto;">
        <h1>ID: <?php echo $result[14]?></h1>
        <table class="table table_bordered table-hover" style="max-width:850px;margin:auto;font-size: 12px;">
        <tbody>
            <tr>
                <td class="" style="font-weight:bold;">APELLIDOS Y NOMBRES</td>
                <td><?php echo $result[16]." ".$result[17]?></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">CFP</td>
                <td><?php echo $result[18]?></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">SEMESTRE - CICLO - BLOQUE</td>
                <td><?php echo $result[20]." - ".$result[22]." - ".$result[21]?></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">CARRERA</td>
                <td><?php echo $result[19]?></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">DIA DE CLASE</td>
                <td><?php echo $result[23]?></td>
            </tr>
               <tr>
                <td class="" style="font-weight:bold;">TELEFONO</td>
                <td><?php echo $result[24]?></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">CELULAR</td>
                <td><?php echo $result[25]?></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">EMAIL</td>
                <td><?php echo $result[26]?></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">DOMICILIO</td>
                <td><?php echo $result[27]?></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">HORARIO DE PRACTICAS</td>
                <td><?php echo $result[28]?></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">PUESTO</td>
                <td><?php echo $result[29]?></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">EMPRESA_PATROCINIO</td>
                <td><?php echo $result[30]?></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">INICIO DE SEMINARIO</td>
                <td><?php echo $result[31]?></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">FIN DE SEMINARIO</td>
                <td><?php echo $result[32]?></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">ESTADO</td>
                <td><?php echo $result[33]?></td>
            </tr>
        </tbody>
        </table>
   </div>
  </div>
   <div class="panel panel-primary">
       <div class="panel-heading" style="background:#2b58cf;">INFORMACION DE EMPRESA</div>
  <div class="panel-body text-center" style="overflow-y:auto;">
     <?php 
    if($result[44]=='00000'){
       echo "<h3>Sin Empresa</h3>";
    }else{
    ?>
      <table class="table table_bordered table-hover" style="max-width:850px;margin:auto;font-size: 12px;">
        <tbody>
            <tr>
                <td class="" style="font-weight:bold;">RUC EMPRESA</td>
                <td><?php echo $result[44]?></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">RAZON SOCIAL</td>
                <td><?php echo $result[45]?></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">REPRESENTANTE LEGAL</td>
                <td><?php echo $result[46]?></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">DNI REPRESENTANTE</td>
                <td><?php echo $result[47]?></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">CANTIDAD DE TRABAJADORES</td>
                <td><?php echo $result[48]?></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">ACTIVIDAD PRINCIPAL</td>
                <td><?php echo $result[49]?></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">ESTADO DE EMPRESA</td>
                <td><?php echo $result[50]?></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">NUMERO DE SEDE</td>
                <td><?php echo $result[34]?></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">DIRECCION FISCAL</td>
                <td><?php echo $result[36]?></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">DEPARTAMENTO</td>
                <td><?php echo $result[37]?></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">PROVINCIA</td>
                <td><?php echo $result[38]?></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">DISTRITO</td>
                <td><?php echo $result[39]?></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">REFERENCIAN DE DIRECCION</td>
                <td><?php echo $result[40]?></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">TELEFONO</td>
                <td><?php echo $result[41]?></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">EMAIL EMPRESA</td>
                <td><?php echo $result[42]?></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">ESTADO DE SEDE DE EMPRESA</td>
                <td><?php echo $result[43]?></td>
            </tr>

        </tbody>
        </table> 
        <?php }?>
       </div></div>
           <?php 
    if($result[51]!='00000-0'){
    ?>
       <div class="panel panel-primary">
       <div class="panel-heading" style="background:#2b58cf;">INFORMACION DE MONITOR</div>
  <div class="panel-body text-center" style="overflow-y:auto;"> 
      <table class="table table_bordered table-hover" style="max-width:850px;margin:auto;font-size: 12px;">
        <tbody>
            <tr>
                <td class="" style="font-weight:bold;">DNI MONITOR</td>
                <td><?php echo $result[51]?></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">APELLIDOS Y NOMBRES</td>
                <td><?php echo $result[53]." ".$result[54]?></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">CARGO</td>
                <td><?php echo $result[55]?></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">TELEFONO O CELULAR</td>
                <td><?php echo $result[56]?></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">CORREO</td>
                <td><?php echo $result[57]?></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">EGRESO DE SENATI</td>
                <td><?php echo $result[58]?></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">ESTADO</td>
                <td><?php echo $result[59]?></td>
            </tr>
            
        </tbody>
        </table> 
        <?php }?>
       </div>
       </div>
    </body>
</html>