<?php 
require_once '../../controller/historial_estudiantes.php';
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
       <div class="panel-heading">HISTORIAL DE PRACTICAS</div>
  <div class="panel-body text-center" style="overflow-x:auto;">
        <table class="table table_bordered table-hover" style="max-width:850px;margin:auto;">
        <thead>
            <tr>
                <tH>RAZON SOCIAL</tH>
                <tH>RUC EMPRESA</tH>
                <tH>SEDE EMPRESA</tH>
                <tH>DNI MONITOR</tH>
                <tH nowrap>APELLIDOS Y NOMBRES MONITOR</tH>
                <tH>CFP</tH>
                <tH>SEMESTRE</tH>
                <tH>CARRERA</tH>
                <tH>BLOQUE</tH>
                <tH>CICLO</tH>
                <tH>TIPO DE CONTRATO</tH>
                <tH>FECHA INICIO</tH>
                <tH>FECHA FIN</tH>
                <tH>ESTADO</tH>
            </tr>
        </thead>
        <tbody>
          <?php 
            while($result1=mysqli_fetch_array($historial)){
                echo "<tr>
                <td>$result1[0]</td>
                <td>$result1[1]</td>
                <td>$result1[2]</td>
                <td>$result1[3]</td>
                <td>$result1[4]"." "."$result1[5]</td>
                <td>$result1[6]</td>
                <td>$result1[7]</td>
                <td>$result1[8]</td>
                <td>$result1[9]</td>
                <td>$result1[10]</td>
                <td>$result1[11]</td>
                <td>$result1[12]</td>
                <td>$result1[13]</td>
                <td>$result1[14]</td>
                </tr>";
            }
            ?>
        </tbody>
        </table>
   </div>
  </div>
  </div>
</div>
    </body>
</html>