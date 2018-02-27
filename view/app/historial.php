<?php 
require_once '../../controller/historial_estudiantes.php';
//echo $_GET['alumno'];
if(!$info_estudiante or mysqli_num_rows($info_estudiante)==0){
    header("location:../index.php");
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
  <div class="center-block col-lg-11" style="overflow-x:auto;float:none;margin-top:40px;">
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
       <div class="panel-heading" style="background:#2b58cf;">HISTORIAL DE PRACTICAS</div>
  <div class="panel-body text-center" style="overflow-x:auto;">
        <table class="table table_bordered table-hover" style="max-width:850px;margin:auto;">
        <thead>
            <tr>
                <tH nowrap>RAZON SOCIAL</tH>
                <tH nowrap>RUC EMPRESA</tH>
                <tH nowrap>SEDE EMPRESA</tH>
                <tH nowrap>DNI MONITOR</tH>
                <tH nowrap >APELLIDOS Y NOMBRES MONITOR</tH>
                <tH nowrap>CFP</tH>
                <tH nowrap>SEMESTRE</tH>
                <tH nowrap>CARRERA</tH>
                <tH nowrap>BLOQUE</tH>
                <tH nowrap>CICLO</tH>
                <tH nowrap>TIPO DE CONTRATO</tH>
                <tH nowrap>FECHA INICIO</tH>
                <tH nowrap>FECHA FIN</tH>
                <tH nowrap>ESTADO</tH>
            </tr>
        </thead>
        <tbody>
          <?php 
            while($result1=mysqli_fetch_array($historial)){
                echo "<tr>
                <td>$result1[0]</td>
                <td nowrap>$result1[1]</td>
                <td nowrap>$result1[2]</td>
                <td nowrap>$result1[3]</td>
                <td nowrap>$result1[4]"." "."$result1[5]</td>
                <td nowrap>$result1[6]</td>
                <td nowrap>$result1[7]</td>
                <td nowrap>$result1[8]</td>
                <td nowrap>$result1[9]</td>
                <td nowrap>$result1[10]</td>
                <td nowrap>$result1[11]</td>
                <td nowrap>$result1[12]</td>
                <td nowrap>$result1[13]</td>
                <td nowrap>$result1[14]</td>
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