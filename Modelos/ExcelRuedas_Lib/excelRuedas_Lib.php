<?php 
$planillas = "planillas.xls";
header("content-Type: application/vnd.ms-excel");
header("content-Disposition: attachment; filename=".$planillas);
header("Pragma: no-cache");
header("Expires: 0");
?>

<table id="tabla_Ruedas" class="table table-striped table-bordered table-condensed" style="width:100%">
	<thead class="text-center">
		<tr>
			<th>Fecha</th>
			<th>Modelo</th>
			<th>Nro Vehiculo</th>
			<th>Color</th>                                
			<th>Pieza Averiada</th>  
			<th>Falla Detectada</th>    
			<th>Usuario</th>    
			<th>Sector</th>
			<th>Estado</th>
			<th>Fecha Fin</th>
		</tr>
	</thead>
	<tbody>
		<?php
		session_start();
		$objeto = new Conection();
		$conexion = $objeto->conexion();

		if(isset($_SESSION['consulta'])){
			if($_SESSION['consulta'] > 0){
				$id_ruedas = $_SESSION['consulta'];

				$sql = "SELECT r.id_ruedas,r.modelo,r.nro_vehiculo,r.color,r.pieza,r.falla_detectada,r.usuario,r.sector,r.estado,r.fecha_fin
				from ruedas r  where estatus = 0  AND id_ruedas = '$id_ruedas' ";
			}else{
				$sql = "SELECT r.id_ruedas,r.fecha_add,r.modelo,r.nro_vehiculo,r.color,r.pieza,r.falla_detectada,r.usuario,r.sector,r.estado,r.fecha_fin
				from ruedas r  where estatus = 0";
			}
		}else{

			$sql = "SELECT r.id_ruedas,r.fecha_add,r.modelo,r.nro_vehiculo,r.color,r.pieza,r.falla_detectada,r.usuario,r.sector,r.estado,r.fecha_fin
			from ruedas r  where estatus = 0";
		}
		$resultado = mysqli_query($conexion,$sql);

		while ($ver = mysqli_fetch_row($resultado)) {

			$datos = $ver[0]."||".
			$ver[1]."||".
			$ver[2]."||".
			$ver[3]."||".
			$ver[4]."||".
			$ver[5]."||".
			$ver[6]."||".
			$ver[7]."||".
			$ver[8]."||".
			$ver[9]."||".
			$ver[10];

			?>

			<tr>
				<td><?php echo $ver[1];?></td>
				<td><?php echo $ver[2];?></td>
				<td><?php echo $ver[3];?></td>
				<td><?php echo $ver[4];?></td>
				<td><?php echo $ver[5];?></td>
				<td class="text-center"><?php echo $ver[6];?></td>
				<td><?php echo $ver[7];?></td>
				<td><?php echo $ver[8];?></td>
				<td><?php echo $ver[9];?></td>
				<td><?php echo $ver[10];?></td>
			</tr>
		<?php } ?>                       
	</tbody>        
</table>                    
</div>