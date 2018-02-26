<?php 
require_once '../../controller/estudiantes_controller.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Seguimiento | Login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../assets/css/udpate.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta charset="utf-8">
</head>
<body>
   <div class="center-block col-lg-11" style="float:none;margin-top:40px;">
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
             <!-- Buscador ID -->
             <form class="navbar-form navbar-left" role="search">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Buscar ID de alumno">
      </div>
      <button type="submit" class="btn btn-default">Enviar</button>
    </form>
             
             <!-- Fin buscador-->
              <li class=""><a href="empresa">Ir a Empresas</a></li>
              <li class=""><a href="especialista">Ir a Especialistas</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Acciones <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li class="dropdown-header">Alumno</li>
                  <li><a href="add-alumno">Agregar Alumno</a></li>
                </ul>
              </li>
              
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
   </div>
   <div class="center-block col-lg-11" style="float:none;">
   <h2 style="color:#2b58cf;padding-bottom: 12px;">Listado de Alumnos</h2></div>
    <div class="center-block col-lg-11" style="overflow-x:scroll;float:none;">
        <table class="table table_bordered table-hover">
		<thead>
			<tr>
				<th nowrap style="background:#2b58cf;color: white;padding: 12px;">SEMESTRE</th>
				<th nowrap style="background:#2b58cf;color: white;padding: 12px;">CICLO</th>
				<th nowrap style="background:#2b58cf;color: white;padding: 12px;">CFP</th>
				<th nowrap style="background:#2b58cf;color: white;padding: 12px;">CARRERA</th>
				<th nowrap style="background:#2b58cf;color: white;padding: 12px;">ID ALUMNO</th>
				<th nowrap style="background:#2b58cf;color: white;padding: 12px;">DIA DE CLASE</th>
				<th nowrap style="background:#2b58cf;color: white;padding: 12px;">BLOQUE</th>
				<th nowrap style="background:#2b58cf;color: white;padding: 12px;">APELLIDOS Y NOMBRES ALUMNO</th>
				<th nowrap style="background:#2b58cf;color: white;padding: 12px;">CELULAR ALUMNO</th>
				<th nowrap style="background:#2b58cf;color: white;padding: 12px;">EMAIL ALUMNO</th>
				<th nowrap style="background:#2b58cf;color: white;padding: 12px;">RUC EMPRESA</th>
				<th nowrap style="background:#2b58cf;color: white;padding: 12px;">RAZON SOCIAL</th>
				<th nowrap style="background:#2b58cf;color: white;padding: 12px;">SEDE</th>
				<th nowrap style="background:#2b58cf;color: white;padding: 12px;">DEPARTAMENTO</th>
				<th nowrap style="background:#2b58cf;color: white;padding: 12px;">PROVINCIA</th>
				<th nowrap style="background:#2b58cf;color: white;padding: 12px;">DISTRITO</th>
				<th nowrap style="background:#2b58cf;color: white;padding: 12px;">DIRECCION SEDE</th>
				<th nowrap style="background:#2b58cf;color: white;padding: 12px;">TELEFONO SEDE</th>
				<th nowrap style="background:#2b58cf;color: white;padding: 12px;">EMAIL SEDE</th>
				<th nowrap style="background:#2b58cf;color: white;padding: 12px;">DNI MONITOR</th>
				<th nowrap style="background:#2b58cf;color: white;padding: 12px;">APELLIDOS Y NOMBRES MONITOR</th>
				<th nowrap style="background:#2b58cf;color: white;padding: 12px;">TELEFONO MONITOR</th>
				<th nowrap style="background:#2b58cf;color: white;padding: 12px;">ID ESPECIALISTA</th>
				<th nowrap style="background:#2b58cf;color: white;padding: 12px;">APELLIDOS Y NOMBRES ESPECIALISTA</th>
			</tr>
		</thead>
		<tbody>
		    <?php while($result=mysqli_fetch_array($all_estudiantes)){
                echo "<tr>
                <td>$result[0]</td>
                <td>$result[1]</td>
                <td>$result[2]</td>
                <td>$result[3]</td>
                <td><a href='$result[4]' title='$result[7] $result[8]'>$result[4]</a></td>
                <td>$result[5]</td>
                <td>$result[6]</td>
                <td>$result[7] $result[8]</td>
                <td>$result[9]</td>
                <td>$result[10]</td>
                <td>$result[11]</td>
                <td>$result[12]</td>
                <td>$result[13]</td>
                <td>$result[14]</td>
                <td>$result[15]</td>
                <td>$result[16]</td>
                <td>$result[17]</td>
                <td>$result[18]</td>
                <td>$result[19]</td>
                <td>$result[20]</td>
                <td>$result[21] $result[22]</td>
                <td>$result[23]</td>
                <td>$result[24]</td>
                <td>$result[25] $result[26]</td>
                </tr>";
            }?>
		</tbody>
	</table>
    </div>
		
</body>	
</html>