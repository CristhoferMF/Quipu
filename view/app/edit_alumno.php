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
    <script>
    $(document).on("submit","#id-form",function(e){
        var url="../../../ajax/update_alumno.php";
        var id=$("#id-alumno").val();
        e.preventDefault();
        $.ajax({
            type:'post',
            url:url,
            data:$('#id-form').serialize(),
            success:function(data){
                if(data="OK"){
                    location.assign('../../app/'+id);
                }else{
                    alert(data);
                }
                //$("#id-respuesta").html(data);
            }   
        });
    });
    </script>
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
      <div id="id-respuesta"></div>
       <div class="panel-heading" style="background:#2b58cf;">EDITAR DE ALUMNO</div>
  <div class="panel-body text-center" style="overflow-x:auto;">
        <h1>ID: <?php echo $result[14]?></h1>
        <table class="table table_bordered table-hover" style="max-width:850px;margin:auto;">
            <form action="" method="post" id="id-form">
                <input type="text" hidden id="id-alumno" name="txt-id" value="<?php echo $result[14];?>"></input>
        <tbody>
            <tr>
                <td class="" style="font-weight:bold;">APELLIDOS</td>
                <td><input type="text" name="txt-apellidos" placeholder="Apellidos Completos" value="<?php echo $result[16];?>"></input></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">NOMBRES</td>
                <td><input type="text" name="txt-nombres" placeholder="Nombres Completos" value="<?php echo $result[17];?>"></input></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">CFP</td>
                <td><input type="text" name="txt-cfp" placeholder="CFP" value="<?php echo $result[18]?>"></input></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">SEMESTRE</td>
                <td><input type="text" readonly name="txt-semestre" placeholder="Semestre" value="<?php echo $result[20]?>"></input></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">CICLO</td>
                <td><input type="text" name="txt-ciclo" placeholder="Ciclo Actual" value="<?php echo $result[22]?>"></input></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">BLOQUE</td>
                <td><input type="text" name="txt-bloque" placeholder="Bloque Actual" value="<?php echo $result[21]?>"></input></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">CARRERA</td>
                <td><input type="text" name="txt-carrera" placeholder="Carrera Actual" value="<?php echo $result[19]?>"></input></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">DIA DE CLASE</td>
                <td><input type="text" name="txt-diaclase" placeholder="Dia de Clase" value="<?php echo $result[23]?>"></input></td>
            </tr>
               <tr>
                <td class="" style="font-weight:bold;">TELEFONO</td>
                <td><input type="text" name="txt-telefono" placeholder="Telefono Actual" value="<?php echo $result[24]?>"></input></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">CELULAR</td>
                <td><input type="text" name="txt-celular" placeholder="Numero de Celular" value="<?php echo $result[25]?>"></input></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">EMAIL</td>
                <td><input type="text" name="txt-email" placeholder="Correo Electronico" value="<?php echo $result[26]?>"></input></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">DOMICILIO</td>
                <td><input type="text" name="txt-domicilio" placeholder="Domicilio" value="<?php echo $result[27]?>"></input></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">HORARIO DE PRACTICAS</td>
                <td><input type="text" name="txt-horario" placeholder="Horario de Practicas" value="<?php echo $result[28]?>"></input></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">PUESTO</td>
                <td><input type="text" name="txt-puesto" placeholder="Puesto" value="<?php echo $result[29]?>"></input></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">EMPRESA_PATROCINIO</td>
                <td><input type="text" name="txt-empresa" placeholder="¿Patrocinado? SI o NO" value="<?php echo $result[30]?>"></input></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">INICIO DE SEMINARIO</td>
                <td><input type="text" name="txt-iniciosem" placeholder="(YYYY-mm-dd)" value="<?php echo $result[31]?>"></input></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">FIN DE SEMINARIO</td>
                <td><input type="text" name="txt-finsem" placeholder="(YYYY-mm-dd)" value="<?php echo $result[32]?>"></input></td>
            </tr>
            <tr>
                <td class="" style="font-weight:bold;">ESTADO</td>
                <td><input type="text" name="txt-estado" placeholder="(YYYY-mm-dd)" value="<?php echo $result[33]?>"></input></td>
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