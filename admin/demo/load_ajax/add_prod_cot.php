<?php
session_start();
$session_id= session_id();
$id=$_POST['id'];
$cantidad=$_POST['cantidad'];
$precio_venta=$_POST['precio_venta'];
/* Connect To Database*/
	require_once ("../common/functionConect.php");
	conectar();
if (!empty($id) and !empty($cantidad) and !empty($precio_venta))
{
$insert_tmp=mysql_query("INSERT INTO tmp_cotizacion (id_producto,cantidad_tmp,precio_tmp,session_id) VALUES ('$id','$cantidad','$precio_venta','$session_id')");
}
if (isset($_GET['id']))//codigo elimina un elemento del array
{
$delete=mysql_query("DELETE FROM tmp_cotizacion WHERE id_tmp='".mysql_escape_string($_GET['id'])."'");
}

?>
<table class="table">
<tr>
	<th>CODIGO</th>
	<th>CANT.</th>
	<th>DESCRIPCION</th>
	<th><span class="pull-right">PRECIO UNIT.</span></th>
	<th><span class="pull-right">PRECIO TOTAL</span></th>
	<th></th>
</tr>
<?php
$sql=mysql_query("select * from productos_demo, tmp_cotizacion where productos_demo.id_producto=tmp_cotizacion.id_producto and tmp_cotizacion.session_id='".$session_id."'");
	while ($row=mysql_fetch_array($sql))
	{
	$id_tmp=$row["id_tmp"];
	$codigo_producto=$row['codigo_producto'];
	$cantidad=$row['cantidad_tmp'];
	$nombre_producto=$row['nombre_producto'];
	$id_marca_producto=$row['id_marca_producto'];
	if (!empty($id_marca_producto))
	{
	$sql_marca=mysql_query("select nombre_marca from marcas_demo where id_marca='$id_marca_producto'");
	$rw_marca=mysql_fetch_array($sql_marca);
	$nombre_marca=$rw_marca['nombre_marca'];
	$marca_producto=" ".strtoupper($nombre_marca);
	}
	else {$marca_producto='';}
	$precio_venta=$row['precio_tmp'];
	$precio_venta_f=number_format($precio_venta,2);//Formateo variables
	$precio_venta_r=str_replace(",","",$precio_venta_f);//Reemplazo las comas
	$precio_total=$precio_venta_r*$cantidad;
	$precio_total_f=number_format($precio_total,2);//Precio total formateado
	$precio_total_r=str_replace(",","",$precio_total_f);//Reemplazo las comas
	$sumador_total+=$precio_total_r;//Sumador
	
		?>
		<tr>
			<td><? echo $codigo_producto;?></td>
			<td><? echo $cantidad;?></td>
			<td><? echo $nombre_producto.$marca_producto;?></td>
			<td><span class="pull-right"><? echo $precio_venta_f;?></span></td>
			<td><span class="pull-right"><? echo $precio_total_f;?></span></td>
			<td ><span class="pull-right"><a href="#" onclick="eliminar('<? echo $id_tmp ?>')"><i class="icon-remove"></i></a></span></td>
		</tr>		
		<?php
	}

?>
<tr>
	<td colspan=4><span class="pull-right">TOTAL $</span></td>
	<td><span class="pull-right"><? echo number_format($sumador_total,2);?></span></td>
	<td></td>
</tr>
</table>
