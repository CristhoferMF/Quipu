<?php 
require_once '../../controller/empresa_controller.php';
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
    <script type="text/javascript">
    $(document).on("click","#chk",function(){
      if( $(this).is(':checked') ){
      alert($(this).val()+" encendido");
    }else{
        alert($(this).val()+" apagado");
      }
    });
  </script>
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
              <li class=""><a href="alumnos">Alumnos</a></li>
              <li class="active"><a href="">Empresas</a></li>
              <li class=""><a href="especialista">Especialistas</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Acciones <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li class="dropdown-header">Empresa</li>
                  <li><a href="empresa/-add">Agregar Empresa</a></li>
                </ul>
              </li>
              
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
   <div class="center-block col-lg-11" style="float:none;">
   <h2 style="color:#2b58cf;padding-bottom: 12px;">Listado de empresas</h2></div>
    <div class="center-block col-lg-11" style="overflow-x:scroll;float:none;">
        <table class="table table_bordered table-hover">
    <thead>
      <tr>
        <th nowrap style="background:#2b58cf;color: white;padding: 12px;">Ruc</th>
        <th nowrap style="background:#2b58cf;color: white;padding: 12px;">Razon social</th>
        <th nowrap style="background:#2b58cf;color: white;padding: 12px;">Representante legal</th>
        <th nowrap style="background:#2b58cf;color: white;padding: 12px;">Dni representante</th>
        <th nowrap style="background:#2b58cf;color: white;padding: 12px;">Cant. trabajadores</th>
        <th nowrap style="background:#2b58cf;color: white;padding: 12px;">Actividad principal</th>
        <th nowrap style="background:#2b58cf;color: white;padding: 12px;">Estado</th>
      </tr>
    </thead>
    <tbody>
        <?php while($result=mysqli_fetch_array($all_empresas)){
                echo "<tr style='font-size:12px;'>
                <td nowrap><input type='checkbox' id='chk' value='$result[0]'></td>
                <td nowrap id='ruc'><a href='empresa/-$result[0]' title='$result[1]'>$result[0]</a></td>
                <td nowrap id='semestre'>$result[1]</td>
                <td nowrap>$result[2]</td>
                <td nowrap>$result[3]</td>
                <td nowrap>$result[4]</td>
                <td nowrap>$result[5]</td>
                <td nowrap>$result[6]</td>
                </tr>";
            }?>
    </tbody>
  </table>
    </div>
    
</body> 
</html>