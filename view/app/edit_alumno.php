<?php 
require_once '../../controller/update_info_estudiantes.php';
//echo $_GET['alumno'];
if(!$info_estudiante or mysqli_num_rows($info_estudiante)==0){
    header("location:index.php");
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
	<link rel="stylesheet" href="../../../assets/css/udpate.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta charset="utf-8">
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
       <div class="panel-heading">EDITAR DE ALUMNO</div>
  <div class="panel-body text-center" style="overflow-x:auto;">
        <h1>ID: <?php echo $result[14]?></h1>
        <table class="table table_bordered table-hover" style="max-width:850px;margin:auto;">
        <tbody>
            <tr>
                <td class="" style="font-weight:bold;">APELLIDOS Y NOMBRES</td>
                <td><input type="text" value="<?php echo $result[16]." ".$result[17]?>"></input></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">CFP</td>
                <td><input type="text" value="<?php echo $result[18]?>"></input></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">SEMESTRE</td>
                <td><input type="text" disabled value="<?php echo $result[20]?>"></input></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">CICLO</td>
                <td><input type="text" value="<?php echo $result[22]?>"></input></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">BLOQUE</td>
                <td><input type="text" value="<?php echo $result[21]?>"></input></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">CARRERA</td>
                <td><input type="text" value="<?php echo $result[19]?>"></input></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">DIA DE CLASE</td>
                <td><input type="text" value="<?php echo $result[23]?>"></input></td>
            </tr>
               <tr>
                <td class="" style="font-weight:bold;">TELEFONO</td>
                <td><input type="text" value="<?php echo $result[24]?>"></input></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">CELULAR</td>
                <td><input type="text" value="<?php echo $result[25]?>"></input></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">EMAIL</td>
                <td><input type="text" value="<?php echo $result[26]?>"></input></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">DOMICILIO</td>
                <td><input type="text" value="<?php echo $result[27]?>"></input></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">HORARIO DE PRACTICAS</td>
                <td><input type="text" value="<?php echo $result[28]?>"></input></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">PUESTO</td>
                <td><input type="text" value="<?php echo $result[29]?>"></input></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">EMPRESA_PATROCINIO</td>
                <td><input type="text" value="<?php echo $result[30]?>"></input></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">INICIO DE SEMINARIO</td>
                <td><input type="text" value="<?php echo $result[31]?>"></input></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">FIN DE SEMINARIO</td>
                <td><input type="text" value="<?php echo $result[32]?>"></input></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">ESTADO</td>
                <td><input type="text" value="<?php echo $result[33]?>"></input></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" class="btn btn-primary" value="Actualizar datos">
                </td>
            </tr>
        </tbody>
        </table>
   </div>
  </div>
</div>
    </body>
</html>