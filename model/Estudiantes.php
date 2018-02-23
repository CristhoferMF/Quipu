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
}
?>