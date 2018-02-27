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
     <!-- Static navbar -->
  <nav class="navbar navbar-default">
        <div class="container-fluid col-lg-11 center-block" style="float: none;">
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
        <select class="form-control">
          <option selected="true">Criterio</option>
          <option value="">Semestre</option>
          <option value="">Carrera</option>
          <option value="">Bloque</option>
        </select>
        <input type="text" class="form-control" placeholder="...">
      </div>
      <button type="submit" class="btn btn-default">Buscar</button>
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
   <div class="center-block col-lg-11" style="float:none;">
   <h2 style="color:#2b58cf;padding-bottom: 12px;">Listado de Alumnos</h2></div>
    <div class="center-block col-lg-11" style="overflow-x:scroll;float:none;">
        <table class="table table_bordered table-hover">
		<thead>
			<tr>
				<th nowrap style="background:#2b58cf;color: white;padding: 12px;">Semetre</th>
				<th nowrap style="background:#2b58cf;color: white;padding: 12px;">Ciclo</th>
				<th nowrap style="background:#2b58cf;color: white;padding: 12px;">CFP</th>
				<th nowrap style="background:#2b58cf;color: white;padding: 12px;">Carrera</th>
				<th nowrap style="background:#2b58cf;color: white;padding: 12px;">Id alumno</th>
				<th nowrap style="background:#2b58cf;color: white;padding: 12px;">Dia de clase</th>
				<th nowrap style="background:#2b58cf;color: white;padding: 12px;">Bloque</th>
				<th nowrap style="background:#2b58cf;color: white;padding: 12px;">Apellidos y nombres de alumno</th>
				<th nowrap style="background:#2b58cf;color: white;padding: 12px;">Celular Alumno</th>
				<th nowrap style="background:#2b58cf;color: white;padding: 12px;">Email Alumno</th>
				<th nowrap style="background:#2b58cf;color: white;padding: 12px;">Ruc empresa</th>
				<th nowrap style="background:#2b58cf;color: white;padding: 12px;">Razon Social</th>
				<th nowrap style="background:#2b58cf;color: white;padding: 12px;">Sede</th>
				<th nowrap style="background:#2b58cf;color: white;padding: 12px;">Departamento</th>
				<th nowrap style="background:#2b58cf;color: white;padding: 12px;">Provincia</th>
				<th nowrap style="background:#2b58cf;color: white;padding: 12px;">Distrito</th>
				<th nowrap style="background:#2b58cf;color: white;padding: 12px;">Direccion sede</th>
				<th nowrap style="background:#2b58cf;color: white;padding: 12px;">Telefono sede</th>
				<th nowrap style="background:#2b58cf;color: white;padding: 12px;">Email sede</th>
				<th nowrap style="background:#2b58cf;color: white;padding: 12px;">Dni monitor</th>
				<th nowrap style="background:#2b58cf;color: white;padding: 12px;">Apellidos y nombres monitor</th>
				<th nowrap style="background:#2b58cf;color: white;padding: 12px;">Telefono monitor</th>
				<th nowrap style="background:#2b58cf;color: white;padding: 12px;">Id especialista</th>
				<th nowrap style="background:#2b58cf;color: white;padding: 12px;">Apellidos y nombres especialista</th>
			</tr>
		</thead>
		<tbody>
		    <?php while($result=mysqli_fetch_array($all_estudiantes)){
                echo "<tr style='font-size:12px;'>
                <td nowrap>$result[0]</td>
                <td nowrap>$result[1]</td>
                <td nowrap>$result[2]</td>
                <td nowrap>$result[3]</td>
                <td nowrap><a href='$result[4]' title='$result[7] $result[8]'>$result[4]</a></td>
                <td nowrap>$result[5]</td>
                <td nowrap>$result[6]</td>
                <td nowrap>$result[7] $result[8]</td>
                <td nowrap>$result[9]</td>
                <td nowrap>$result[10]</td>
                <td nowrap>$result[11]</td>
                <td nowrap>$result[12]</td>
                <td nowrap>$result[13]</td>
                <td nowrap>$result[14]</td>
                <td nowrap>$result[15]</td>
                <td nowrap>$result[16]</td>
                <td nowrap>$result[17]</td>
                <td nowrap>$result[18]</td>
                <td nowrap>$result[19]</td>
                <td nowrap>$result[20]</td>
                <td nowrap>$result[21] $result[22]</td>
                <td nowrap>$result[23]</td>
                <td nowrap>$result[24]</td>
                <td nowrap>$result[25] $result[26]</td>
                </tr>";
            }?>
		</tbody>
	</table>
    </div>
		
</body>	
</html>