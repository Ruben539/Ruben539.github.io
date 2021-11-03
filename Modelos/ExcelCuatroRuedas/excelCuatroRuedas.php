<?php 
$planillas = "planillas.xls";
header("content-Type: application/vnd.ms-excel");
header("content-Disposition: attachment; filename=".$planillas);
header("Pragma: no-cache");
header("Expires: 0");
?>

<table id="tabla_CRuedas" class="table table-striped table-bordered table-condensed" style="width:100%">
	<thead class="text-center">
		<tr>
			<th>Fecha</th>
			<th>Modelo</th>
			<th>Nro Chasis</th>
			<th>Insumo 1</th>                                
			<th>Cantidad</th>  
			<th>Insumo 2</th>    
			<th>Cantidad</th> 
			<th>Insumo 3</th>                                
			<th>Cantidad</th>  
			<th>Insumo 4</th>    
			<th>Cantidad</th>   
			<th>Insumo 5</th>    
			<th>Cantidad</th>   
			<th>Observación</th>   
			<th>Usuario</th>   

		</tr>
	</thead>
	<tbody>
		<?php
		session_start();
		$objeto = new Conection();
		$conexion = $objeto->conexion();

		if(isset($_SESSION['consulta'])){
			if($_SESSION['consulta'] > 0){
				$id_camion = $_SESSION['consulta'];

				$sql = "SELECT r.id_camion,r.fecha_add,r.modelo,r.nro_chasis,r.insumo_1,r.cantidad_1,r.insumo_2,r.cantidad_2,r.insumo_3,r.cantidad_3,r.insumo_4,r.cantidad_4,r.insumo_5,r.cantidad_5,r.observacion,r.usuario
				from pintura_camiones r  where estatus = 1  AND id_camion = '$id_camion' ";
			}else{
				$sql = "SELECT r.id_camion,r.fecha_add,r.modelo,r.nro_chasis,r.insumo_1,r.cantidad_1,r.insumo_2,r.cantidad_2,r.insumo_3,r.cantidad_3,r.insumo_4,r.cantidad_4,r.insumo_5,r.cantidad_5,r.observacion,r.usuario
				from pintura_camiones r  where estatus = 1";
			}
		}else{

			$sql = "SELECT r.id_camion,r.fecha_add,r.modelo,r.nro_chasis,r.insumo_1,r.cantidad_1,r.insumo_2,r.cantidad_2,r.insumo_3,r.cantidad_3,r.insumo_4,r.cantidad_4,r.insumo_5,r.cantidad_5,r.observacion,r.usuario
			from pintura_camiones r  where estatus = 1";
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
			$ver[10]."||".
			$ver[11]."||".
			$ver[12]."||".
			$ver[13]."||".
			$ver[14]."||".
			$ver[15];

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
				<td><?php echo $ver[11];?></td>
				<td><?php echo $ver[12];?></td>
				<td><?php echo $ver[13];?></td>
				<td><?php echo $ver[14];?></td>
				<td><?php echo $ver[15];?></td>

			</tr>
		<?php } ?>                       
	</tbody>        
</table> 