<?php 
require_once("../model/Estudiantes.php");
$estudiantes=new Estudiantes;
$sede=$_POST['id_sede'];
$total=$estudiantes->info_monitor($sede);
echo "<table class='table table_bordered table-hover'>
<tr>
<th nowrap style='background:#2b58cf;color: white;padding: 12px;'>DNI MONITOR</th>
<th nowrap style='background:#2b58cf;color: white;padding: 12px;'>RUC SEDE</th>
<th nowrap style='background:#2b58cf;color: white;padding: 12px;'>APELLIDOS Y NOMBRES</th>
<th nowrap style='background:#2b58cf;color: white;padding: 12px;'>CARGO</th>
<th nowrap style='background:#2b58cf;color: white;padding: 12px;'>TELEFONO</th>
<th nowrap style='background:#2b58cf;color: white;padding: 12px;'>GMAIL</th>
<th nowrap style='background:#2b58cf;color: white;padding: 12px;'>¿EGRESADO DE SENATI?</th>
<th nowrap style='background:#2b58cf;color: white;padding: 12px;'>CONDICION</th>
</tr>";
while($total1=mysqli_fetch_array($total)){
	echo "<tr>
	<td>$total1[0]</td>
	<td>$total1[1]</td>
	<td>$total1[2] $total1[3]</td>
	<td>$total1[4]</td>
	<td>$total1[5]</td>
	<td>$total1[6]</td>
	<td>$total1[7]</td>
	<td>$total1[8]</td>";
}
echo "</table>";
?>