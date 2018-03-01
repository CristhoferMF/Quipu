<?php 

require_once("cn.php");

class Estudiantes extends Conexion
{

	public function get_reporte_actual()
	{
		$query_tab="SELECT estudiante.semestre,estudiante.ciclo,estudiante.cfp,estudiante.carrera,estudiante.id,estudiante.dia_clase,estudiante.bloque,estudiante.apellidos,estudiante.nombres,estudiante.celular,estudiante.email,	empresa.ruc,empresa.razon_social,sede.id_sede,sede.departamento,sede.provincia,sede.distrito,sede.direccion_fiscal,sede.telefono,sede.email,
monitor.dni_monitor,monitor.apellidos,monitor.nombres,monitor.telefono,
		especialista.id_senati,especialista.apellidos,especialista.nombres
	FROM historico 
		join sede on sede.id_sede=historico.id_sede_historico
		join empresa on empresa.ruc=sede.ruc_empresa_sede
		join monitor on monitor.dni_monitor=historico.dni_monitor_historico
    		join estudiante on estudiante.id=historico.id_estudiante_historico
    		join especialista on especialista.id_senati=estudiante.id_especialista
			where historico.estado='ACTIVO'";
		$query=$this->mysqli->query($query_tab);
		return $query;
}
    public function get_info_alu($id){
        $query_tab="SELECT * FROM historico
inner join estudiante on estudiante.id=historico.id_estudiante_historico
inner join sede on sede.id_sede=historico.id_sede_historico
inner join empresa on empresa.ruc=sede.ruc_empresa_sede
inner join monitor on monitor.dni_monitor=historico.dni_monitor_historico
inner join especialista on especialista.id_senati=estudiante.id_especialista
WHERE historico.estado='ACTIVO' AND estudiante.id='".$id."'";
        $query=$this->mysqli->query($query_tab);
        return $query;
    }
    
    public function get_empresa_antigua($id_es){
        $query_tab="Select historico.n_historia,historico.id_estudiante_historico,empresa.razon_social,empresa.ruc,sede.id_sede,historico.id_historia from historico
INNER join sede on sede.id_sede=historico.id_sede_historico
INNER join empresa on empresa.ruc=sede.ruc_empresa_sede
where  historico.id_estudiante_historico='$id_es' AND historico.semestre='2018-01' and historico.n_historia=(select max(n_historia) from historico WHERE id_estudiante_historico='$id_es')";
        $query=$this->mysqli->query($query_tab);
        $result=$query->fetch_row();
        //echo $query_tab;
        return $result;
    }
    public function get_empresa_all($nombre){
        $query_tab="SELECT ruc,razon_social from empresa WHERE NOT razon_social='SIN EMPRESA' and razon_social like '%$nombre%'";
        $query=$this->mysqli->query($query_tab);
        $texto="<select class='combo' form='form-id' id='combo_empresa' name='cbo-empresa'>";
        while($result=$query->fetch_row()){
            $texto.="<option value='$result[0]'>$result[1]</option>";
        }
        $texto.="</select><button class='btn btn-primary' id='id-btn-empresa'>Buscar Sede</button>";
        $num=$query->num_rows;
        if($num==0){
            return "";
        }else{
            return $texto;
        }
        
    }
     public function get_sede_all($ruc){
        $query_tab="SELECT id_sede FROM empresa INNER join sede
on empresa.ruc=sede.ruc_empresa_sede where empresa.ruc like '$ruc%'";
        $query=$this->mysqli->query($query_tab);
        $texto="<select class='combo' id='combo_sede' name='cbo-sede' form='form-id'>";
        while($result=$query->fetch_row()){
            $texto.="<option value='$result[0]'>$result[0]</option>";
        }
        $texto.="</select><button class='btn btn-primary' id='id-btn-sede' style='background:#2b58cf;'>Buscar Monitor</button>";
        $num=$query->num_rows;
        if($num==0){
            return "No hay Sedes";
        }else{
            return $texto;
        }
    }
    
    public function get_monitor_all($ruc_sede){
        $query_tab="SELECT dni_monitor,apellidos,nombres from monitor where id_sede_monitor='$ruc_sede'";
        $query=$this->mysqli->query($query_tab);
        $texto="<select class='combo' form='form-id' name='cbo-monitor'>";
        while($result=$query->fetch_row()){
            $texto.="<option value='$result[0]'>$result[1]"." "."$result[2]</option>";
        }
        $texto.="</select>";
        $num=$query->num_rows;
        if($num==0){
            return "<h4>No existe monitor</h4>";
        }else{
            return $texto;
        }
    }
   
    public function set_empresa_nueva($id_historia,$n_historia,$fecha_fin,$id_sede,$id_estu,$dni_monitor,$cfp,$carrera,$bloque,$ciclo,$tipo_contrato,$fecha_inicio,$semestre){
        try {
            $query_tab="INSERT INTO historico values(NULL,$n_historia,'$id_sede',$id_estu,'$dni_monitor','$cfp','$carrera','$bloque','$ciclo','$tipo_contrato','$fecha_inicio',NULL,'$semestre','ACTIVO')";
            $query=$this->mysqli->query($query_tab);
        if($query){
            $query_tab2="update historico set estado='PASADO',fecha_fin='$fecha_fin' where id_historia=$id_historia";
            $query2=$this->mysqli->query($query_tab2);
            return "OK";
        }
        } catch (Exception $e) {
            return "ERROR ".$e->getMessage();
            
        }
    }
    public function get_historial($id_es){
        $query_tab="SELECT empresa.razon_social,empresa.ruc,sede.id_sede,monitor.dni_monitor, monitor.apellidos,monitor.nombres,historico.cfp,historico.semestre,historico.carrera, historico.bloque,historico.ciclo,historico.tipo_contrato,historico.fecha_inicio, historico.fecha_fin,historico.estado,historico.n_historia FROM `historico` INNER join sede on sede.id_sede=historico.id_sede_historico INNER join empresa on empresa.ruc=sede.ruc_empresa_sede inner join estudiante on estudiante.id=historico.id_estudiante_historico INNER join monitor on monitor.dni_monitor=historico.dni_monitor_historico WHERE id_estudiante_historico='$id_es' ORDER BY historico.n_historia DESC";
        return $query=$this->mysqli->query($query_tab);
  
    }
    public function create_empresa($ruc,$razon,$departamento,$provincia,$distrito,$direccion,$referencia,$estado,$nombre,$actividad,$dni,$cantidad,$telefono,$email){
        $query_tab="INSERT INTO empresa values('$ruc','$razon','$nombre','$dni',$cantidad,'$actividad','$estado')";
        $query_tab2="INSERT INTO sede values('$ruc"."-0"."','$ruc','$direccion','$departamento','$provincia','$distrito','$referencia','$telefono','$email','ACTIVO')";
        $query=$this->mysqli->query($query_tab);
        if($query){
            $query2=$this->mysqli->query($query_tab2);
            if(!$query2){
                return "ERROR 2 SENTENCIA SEDE";
            }else{
                return "Empresa agregada con éxito";
            }
        }else{
            return "ERROR 1 SENTENCIA EMPRESA";
        }
    }
    public function create_alumno($id,$apellidos,$nombres,$cfp,$carrera,$semestre,$bloque,$ciclo,$diaclase,$telefono,$celular,$email,$domicilio,$horario,$puesto,$empresa,$iniciosem,$finsemin){
        $query_tab="INSERT INTO estudiante values($id,0,'$apellidos','$nombres','$cfp','$carrera','$semestre','$bloque','$ciclo','$diaclase','$telefono','$celular','$email','$domicilio','$horario','$puesto','$empresa','$iniciosem','$finsemin','ACTIVO')";
        $query_tab2="INSERT INTO historico values(NULL,0,'00000-0',$id,'00000-0','$cfp','$carrera','$bloque','$ciclo',NULL,NULL,NULL,'$semestre','ACTIVO')";
        $query=$this->mysqli->query($query_tab);
        if($query){
            $query2=$this->mysqli->query($query_tab2);
        }else{
            return "Error";
        }
        //echo $query_tab;
        //echo $query_tab2;
    }
    public function update_alumno($apellidos,$nombres,$cfp,$semestre,$ciclo,$bloque,$carrera,$dia_clase,$telefono,$celular,$email,$domicilio,$horario,$puesto,$empresa,$inicio,$fin,$estado,$id){
        $query_tab="update estudiante set 
        apellidos='$apellidos',
        nombres='$nombres',
        cfp='$cfp',
        semestre='$semestre',
        ciclo='$ciclo',
        bloque='$bloque',
        carrera='$carrera',
        dia_clase='$dia_clase',
        telefono='$telefono',
        celular='$celular',
        email='$email',
        domicilio='$domicilio',
        horario_practicas='$horario',
        puesto='$puesto',
        empresa_patrocinio='$empresa',
        inicio_Seminario='$inicio',
        fin_seminario='$fin',
        estado='$estado' where id=$id";
        //echo $query_tab;
        try {
            $query=$this->mysqli->query($query_tab);
            if($query){
                echo "OK";
            }
        } catch (Exception $e) {
            return "ERROR: ".$e->getMessage();
        }
    }
    public function all_empresas()
    {
        $query_tab="SELECT * FROM empresa WHERE NOT ruc='00000'";
        $query=$this->mysqli->query($query_tab);
        if($query){
            return $query;
        }
    }
    public function info_empresa($ruc){
        $query_tab="SELECT * FROM empresa WHERE NOT ruc='00000' AND ruc='$ruc'";
        $query=$this->mysqli->query($query_tab);
        if($query){
            return $query;
        }
    }    
    public function info_sede($ruc){
        $query_tab="SELECT * FROM sede WHERE NOT ruc_empresa_sede='00000' AND ruc_empresa_sede='$ruc'";
        $query=$this->mysqli->query($query_tab);
        if($query){
            return $query;
        }
    }
    public function info_monitor($sede){
        $query_tab="SELECT * FROM monitor WHERE NOT id_sede_monitor='00000-0' AND id_sede_monitor='$sede'";
        $query=$this->mysqli->query($query_tab);
        if($query){
            return $query;
        }
    }
}
    
?>