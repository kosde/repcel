
<?php
	$id_orden = $_GET['order'];
	//echo $id_orden;
	include "../php/conexion.php";
	$query    = "SELECT * FROM notas WHERE id = $id_orden";
	$validar  = mysqli_query($conexion,$query);
	if(mysqli_num_rows($validar)>0)
	{
		$extraido		= mysqli_fetch_array($validar);
							
		$id_nota		= $extraido['id'];
		$id_user		= $extraido['id_user']; 	
		$id_equipo		= $extraido['id_equipo']; 	
		$id_condiciones	= $extraido['id_condiciones']; 	
		$cotizacion		= $extraido['cotizacion']; 	
		$anticipo		= $extraido['anticipo']; 	
		$tipo_pago		= $extraido['tipo_pago']; 	
		$txt_details	= $extraido['txt_details']; 	
		$date			= $extraido['dates'];
		$dates			= date_create($date);
		$hora 			= date_format($dates,'H:i');
		//$datetime 		= DateTime::createFromFormat('Y-m-d H:i:s',$date);
		$delivery_date	= $extraido['delivery_date']; 	
		$statusp		= $extraido['statusp']; 	

		$query_2    	= "SELECT * FROM equipo WHERE id = $id_equipo";
		$validar_2  	= mysqli_query($conexion,$query_2);
		$extraido_2		= mysqli_fetch_array($validar_2);
		$tipo_equipo 	= $extraido_2['tipo']; 	
		$marca			= $extraido_2['marca']; 	
		$modelo			= $extraido_2['modelo']; 	
		$ns_imei		= $extraido_2['ns_imei']; 
		$pass			= $extraido_2['pass']; 

		$query_3    	= "SELECT * FROM users WHERE id = $id_user";
		$validar_3  	= mysqli_query($conexion,$query_3);
		$extraido_3		= mysqli_fetch_array($validar_3);
		$tipo			= $extraido_3['date_create']; 	
		$nombre			= $extraido_3['nombre']; 	
		$ap_paterno		= $extraido_3['ap_paterno']; 	
		$ap_materno		= $extraido_3['ap_materno']; 
		$email			= $extraido_3['email']; 
		$code			= $extraido_3['code']; 	
		$phone			= $extraido_3['phone']; 	
		$code2			= $extraido_3['code2']; 	
		$phone2			= $extraido_3['phone2']; 
		$token			= $extraido_3['token'];
		$date_token		= $extraido_3['date_token']; 	
		$avatar			= $extraido_3['avatar']; 

		$query_4    	= "SELECT * FROM condiciones WHERE id = $id_condiciones";
		$validar_4  	= mysqli_query($conexion,$query_4);
		$extraido_4		= mysqli_fetch_array($validar_4);
		$condiciones	= $extraido_4['condiciones']; 	
		$display		= $extraido_4['display']; 	
		$touch			= $extraido_4['touch']; 	
		$ftid			= $extraido_4['ftid']; 
		$carga			= $extraido_4['carga']; 
		$auricular		= $extraido_4['auricular']; 	
		$altavoz		= $extraido_4['altavoz']; 	
		$wifi			= $extraido_4['wifi']; 	
		$bluetooth		= $extraido_4['bluetooth']; 
		$frontal		= $extraido_4['frontal'];
		$trasera		= $extraido_4['trasera']; 	
		$senal			= $extraido_4['senal']; 	
		$bloqueo		= $extraido_4['bloqueo']; 	
		$volumen		= $extraido_4['volumen']; 
		$tornillos		= $extraido_4['tornillos'];
		$flash			= $extraido_4['flash']; 	
		$proximidad		= $extraido_4['proximidad']; 
	}
	$nombre_recepcion = $recepcion;
	date_default_timezone_set('America/Mexico_City');
	setlocale(LC_TIME, 'es_MX.UTF-8','es_MX');
	//$fecha_p = date_format($dates,"Y/m/d");
	//$date = new DateTime("1899-12-31");
	$fecha = strftime("%d de %B de %Y ",$dates->getTimestamp())." ".$hora;
	//$fecha = $dates;
	
	$id_orden = $id_nota;
	require __DIR__.'../../vendor/autoload.php';
	use Spipu\Html2Pdf\Html2Pdf;
	
	$id_nombre_cliente  = $nombre;
	$id_ap_paterno      = $ap_paterno;
	$id_ap_materno      = $ap_materno;
	$id_email           = $email;
	$id_tel_1           = $phone;
	$id_tel_2           = $phone2;
	
	$id_tipo_dispositivo= $tipo_equipo;
	$id_marca           = $marca;
	$id_modelo          = $modelo;
	$id_imei            = $ns_imei;
	$id_pass            = $pass;

	$id_condiciones     = $condiciones;
	$id_op_1            = $display;
	$id_op_2            = $touch;
	$id_op_3            = $ftid;
	$id_op_4            = $carga;
	$id_op_5            = $auricular;
	$id_op_6            = $altavoz;
	$id_op_7            = $wifi;
	$id_op_8            = $bluetooth;
	$id_op_9            = $frontal;
	$id_op_10           = $trasera;
	$id_op_11           = $senal;
	$id_op_12           = $bloqueo;
	$id_op_13           = $volumen;
	$id_op_14           = $tornillos;
	$id_op_15           = $flash;
	$id_op_16           = $proximidad;
	$id_cotizacion      = $cotizacion;
	$id_anticipo        = $anticipo;
	$id_pago            = $tipo_pago;
	$id_notas           = $txt_details;
/*********************************/
	if(!isset($_GET["id_op_1"]))
	{
		$id_op_1 = '<img src="img/repcel/cruz.png" alt="" style="width: 10px;">';
		$op_1 = 1;
	}
	else
	{
		$id_op_1 = '<img src="img/repcel/palomita.png" alt="" style="width: 10px;">';
		$op_1 = 0;
	}

	if(!isset($_GET["id_op_2"]))
	{
		$id_op_2 = '<img src="img/repcel/cruz.png" alt="" style="width: 10px;">';
		$op_2 = 1;
	}
	else{
		$id_op_2 = '<img src="img/repcel/palomita.png" alt="" style="width: 10px;">';
		$op_2 = 0;
	}
	/*********************************/
	if(!isset($_GET["id_op_3"]))
	{
		$id_op_3 = '<img src="img/repcel/cruz.png" alt="" style="width: 10px;">';
		$op_3 = 1;
	}
	else
	{
		$id_op_3 = '<img src="img/repcel/palomita.png" alt="" style="width: 10px;">';
		$op_3 = 0;
	}
	/*********************************/
	if(!isset($_GET["id_op_4"]))
	{
		$id_op_4 = '<img src="img/repcel/cruz.png" alt="" style="width: 10px;">';
		$op_4 = 1;
	}
	else
	{
		$id_op_4 = '<img src="img/repcel/palomita.png" alt="" style="width: 10px;">';
		$op_4 = 0;
	}
	/*********************************/
	if(!isset($_GET["id_op_5"]))
	{
		$id_op_5 = '<img src="img/repcel/cruz.png" alt="" style="width: 10px;">';
		$op_5 = 1;
	}
	else
	{
		$id_op_5 = '<img src="img/repcel/palomita.png" alt="" style="width: 10px;">';
		$op_5 = 0;
	}
	/*********************************/
	if(!isset($_GET["id_op_6"]))
	{
		$id_op_6 = '<img src="img/repcel/cruz.png" alt="" style="width: 10px;">';
		$op_6 = 1;
	}
	else
	{
		$id_op_6 = '<img src="img/repcel/palomita.png" alt="" style="width: 10px;">';
		$op_6 = 0;
	}
	/*********************************/
	if(!isset($_GET["id_op_7"]))
	{
		$id_op_7 = '<img src="img/repcel/cruz.png" alt="" style="width: 10px;">';
		$op_7 = 1;
	}
	else
	{
		$id_op_7 = '<img src="img/repcel/palomita.png" alt="" style="width: 10px;">';
		$op_7 = 0;
	}
	/*********************************/
	if(!isset($_GET["id_op_8"]))
	{
		$id_op_8 = '<img src="img/repcel/cruz.png" alt="" style="width: 10px;">';
		$op_8 = 1;
	}
	else
	{
		$id_op_8 = '<img src="img/repcel/palomita.png" alt="" style="width: 10px;">';
		$op_8 = 0;
	}
	/*********************************/
	if(!isset($_GET["id_op_9"]))
	{
		$id_op_9 = '<img src="img/repcel/cruz.png" alt="" style="width: 10px;">';
		$op_9 = 1;
	}
	else
	{
		$id_op_9 = '<img src="img/repcel/palomita.png" alt="" style="width: 10px;">';
		$op_9 = 0;
	}
	/*********************************/
	if(!isset($_GET["id_op_10"]))
	{
		$id_op_10 = '<img src="img/repcel/cruz.png" alt="" style="width: 10px;">';
		$op_10 = 1;
	}
	else
	{
		$id_op_10 = '<img src="img/repcel/palomita.png" alt="" style="width: 10px;">';
		$op_10 = 0;
	}
	/*********************************/
	if(!isset($_GET["id_op_11"]))
	{
		$id_op_11 = '<img src="img/repcel/cruz.png" alt="" style="width: 10px;">';
		$op_11 = 1;
	}
	else
	{
		$id_op_11 = '<img src="img/repcel/palomita.png" alt="" style="width: 10px;">';
		$op_11 = 0;
	}
	/*********************************/
	if(!isset($_GET["id_op_12"]))
	{
		$id_op_12 = '<img src="img/repcel/cruz.png" alt="" style="width: 10px;">';
		$op_12 = 1;
	}
	else
	{
		$id_op_12 = '<img src="img/repcel/palomita.png" alt="" style="width: 10px;">';
		$op_12 = 0;
	}
	/*********************************/
	if(!isset($_GET["id_op_13"]))
	{
		$id_op_13 = '<img src="img/repcel/cruz.png" alt="" style="width: 10px;">';
		$op_13 = 1;
	}
	else
	{
		$id_op_13 = '<img src="img/repcel/palomita.png" alt="" style="width: 10px;">';
		$op_13 = 0;
	}
	/*********************************/
	if(!isset($_GET["id_op_14"]))
	{
		$id_op_14 = '<img src="img/repcel/cruz.png" alt="" style="width: 10px;">';
		$op_14 = 1;
	}
	else
	{
		$id_op_14 = '<img src="img/repcel/palomita.png" alt="" style="width: 10px;">';
		$op_14 = 0;
	}
	/*********************************/
	if(!isset($_GET["id_op_15"]))
	{
		$id_op_15 = '<img src="img/repcel/cruz.png" alt="" style="width: 10px;">';
		$op_15 = 1;
	}
	else
	{
		$id_op_15 = '<img src="img/repcel/palomita.png" alt="" style="width: 10px;">';
		$op_15 = 0;
	}
	/*********************************/
	if(!isset($_GET["id_op_16"]))
	{
		$id_op_16 = '<img src="img/repcel/cruz.png" alt="" style="width: 10px;">';
		$op_16 = 1;
	}
	else
	{
		$id_op_16 = '<img src="img/repcel/palomita.png" alt="" style="width: 10px;">';
		$op_16 = 0;
	}
/*********************************/	
	$mpdf = new \Mpdf\Mpdf();
	$stylesheet = file_get_contents('css/app.css');
	$mpdf->WriteHTML($stylesheet,\Mpdf\HTMLParserMode::HEADER_CSS);
	//<h1 style="font-size: 40px;">REPCEL</h1>
	$mpdf->WriteHTML(
		'
		<div>
			<table style="width:100%;">
				<tr style="width:100%;">
					<th style="width:35%;">  
						<img src="img/repcel/logochico.png" style="width:300px;">
					</th>
					<th style="width:80%;text-align:center;">  
						
						<h3 style="font-size: 30px;">Orden de reparación</h3>
						<p style="font-size: 15px;">Cordillera de los Alpes 713-1B, Loma Verde, CP. 78215 <br> San Luis Potosí, S.L.P. Telefono (444) 2 82 94 22</p>
					</th>
					<th style="width:40%;">  
					</th>
				</tr>
			
			</table>
			<br>
			<h4 style="text-align: center;">Datos del Cliente</h4>
			<table>
				<tr>
					<th style="width:50%;">  
						<span style="font-size:12px; color:#000000;">Nombre cliente: </span><span style="font-size:12px;width: min-content;font-weight: normal;color:#000000;">'.$id_nombre_cliente.' '.$id_ap_paterno.' '.$id_ap_materno.'</span>
						<br>
						<span style="font-size:12px; color:#000000;">Telefono 1: </span><span style="font-size:12px;width: min-content;font-weight: normal;color:#000000;">'.$id_tel_1.'</span>
						<br>
						<span style="font-size:12px; color:#000000;">Telefono 2: </span><span style="font-size:12px;width: min-content;font-weight: normal;color:#000000;">'.$id_tel_2.'</span>
						<br>
						<span style="font-size:12px; color:#000000;">Correo electronico: </span> <span style="font-size:12px;width: min-content;font-weight: normal;color:#000000;">'.$id_email.'</span>
					</th>
					<th style="width:40%;"> 
						<span style="font-size:12px; color:#000000;">Fecha de ingreso:</span> 
						<span style="font-size:12px;font-weight: normal;text-transform: capitalize;color:#000000;">'.$fecha. '</span>
						<br>
						<span style="font-size:12px; color:#000000;">Recepcionado por: </span> 
						<span style="font-size:12px;width: min-content;font-weight: normal;color:#000000;">'.$nombre_recepcion.'</span>
						<br>
						<span  style="font-size:12px; color:#000000;display: inline-block;">No. de Orden</span>
						<span style="font-size:12px;width: min-content;font-weight: normal;color:#000000;">'.$id_orden.'</span>
					</th>
				</tr>
			</table> 
			<br>
			<h4 style="text-align: center;">Información del equipo</h4>
			<table>
				<tr>
					<th style="width:50%;">  
						<span style="font-size:12px; color:#000000;">Tipo de equipo: </span><span style="font-size:12px;width: min-content;font-weight: normal;color:#000000;">'.$id_tipo_dispositivo.'</span>
						<br>
						<span style="font-size:12px; color:#000000;">Marca: </span><span style="font-size:12px;width: min-content;font-weight: normal;color:#000000;">'.$id_marca.'</span>
						<br>
						<span style="font-size:12px; color:#000000;">Modelo: </span><span style="font-size:12px;width: min-content;font-weight: normal;color:#000000;">'.$id_modelo.'</span>
						<br>
						<span style="font-size:12px; color:#000000;">N/S o IMEI: </span><span style="font-size:12px;width: min-content;font-weight: normal;color:#000000;">'.$id_imei.'</span>
						<br>
						<span style="font-size:12px; color:#000000;">Condiciones de ingreso del Equipo: </span><span style="font-size:12px;width: min-content;font-weight: normal;color:#000000;">'.$id_condiciones.'</span>
						<br>
						<span style="font-size:12px; color:#000000;">Contraseña: </span><span style="font-size:12px;width: min-content;font-weight: normal;color:#000000;">'.$id_pass.'</span>
					</th>
					<th style="width:50%;">                          
						<p style="font-size:12px;">Detalles de recepción del equipo</p>
						<table style="margin    -top: 60px !important;">
							<tr>
								<th style="width:5%;">  
								</th>
								<th style="width:40%;">  
									<span style="font-size:12px; color:#000000;">'.$id_op_1.' Display </span><br>
									<span style="font-size:12px; color:#000000;">'.$id_op_2.' Touch </span><br>
									<span style="font-size:12px; color:#000000;">'.$id_op_3.' Face ID/ Touch ID </span><br>
									<span style="font-size:12px; color:#000000;">'.$id_op_4.' Carga </span><br>
									<span style="font-size:12px; color:#000000;">'.$id_op_5.' Bocina auricular </span><br>
									<span style="font-size:12px; color:#000000;">'.$id_op_6.' Bocina altavoz </span><br>
									<span style="font-size:12px; color:#000000;">'.$id_op_7.' Wifi </span><br>
									<span style="font-size:12px; color:#000000;">'.$id_op_8.' Bluetooth </span><br>
								</th>
								<th style="width:40%;">  
									<span style="font-size:12px; color:#000000;">'.$id_op_9.' Cámara frontal </span><br>
									<span style="font-size:12px; color:#000000;">'.$id_op_10.' Camara trasera </span><br>
									<span style="font-size:12px; color:#000000;">'.$id_op_11.' Señal </span><br>
									<span style="font-size:12px; color:#000000;">'.$id_op_12.' Botón de bloqueo </span><br>
									<span style="font-size:12px; color:#000000;">'.$id_op_13.' Botones de volumen </span><br>
									<span style="font-size:12px; color:#000000;">'.$id_op_14.' Tornillos </span><br>
									<span style="font-size:12px; color:#000000;">'.$id_op_15.' Flash </span><br>
									<span style="font-size:12px; color:#000000;">'.$id_op_16.' Sensor de proximidad </span><br>
								</th>
							</tr>
						</table> 
					</th>
				</tr>
			</table>
			<br>
			<table>
				<tr>
					<th style="width:10%;">  
					</th>
					<th style="width:25%;">  
						<img src="img/repcel/purospuntos.png" alt="" style="width: 350px;">
					</th>
					<th style="width:10%;">  
					</th>
					<th style="width:20%;">  
						<img src="img/repcel/cel.png" alt="" style="width: 500px;">
					</th>
				</tr>
			</table> 
			<br> 
			<br>
			<table style="width:100%;">
				<tr style="width:100%;">
					<th  style="width:33%;">  
						<span style="font-size:12px; color:#000000;">Cotizacion:</span> 
						<span style="font-size:12px;font-weight: normal;color:#000000;"> $'.$id_cotizacion.'.00 MXN</span>
					</th>
					<th  style="width:33%;">  
						<span style="font-size:12px; color:#000000;">Anticipo:</span> 
						<span style="font-size:12px;font-weight: normal;color:#000000;"> $'.$id_anticipo.'.00 MXN</span>
					</th>
					<th  style="width:33%;">  
						<span style="font-size:12px; color:#000000;">Tipo de pago:</span> 
						<span style="font-size:12px;font-weight: normal;color:#000000;">'.$id_pago. '</span>
					</th>
				</tr>
			</table> 
			<br>
			<table style="width:100%;">
				<tr style="width:100%;">
					<th style="width:100%;">  
						<span style="font-size:12px; color:#000000;">Notas:</span> 
						<br>
						<span style="font-size:12px;font-weight: normal;text-transform: capitalize;color:#000000;">'.$id_notas. '</span>
					</th>
				</tr>
			</table>  
			<br>    
			<h4 style="text-align: center;">Políticas de recepción y garantía de equipos</h4>
			<ul style="font-size: 8px;color:#000000;">
				<li>
					No nos hacemos responsables por fundas,memorias, accesorios, micas o chips.
				</li>
				<li>
					Toda revisión que implique la apertura del equipo tendra un costo de $200
				</li>
				<li>
					En caso de reparar el equipo esa cantidad se tomara a cuenta dentro de costo de reparación
				</li>
				<li>
					Todos los servicios tienen garantia de 30 días exceptuando servicios de Software.
				</li>
				<li>
					La garantía no aplica para equipos con rastros de humedad.
				</li>
				<li>
					No se garantiza el funcionamiento ni la información y/o recuperacion de la misma en equipos que lleguen mojados o apagados debido a que se desconoce en que condiciones internas se encuentre.
				</li>
				<li>
					En equipos mojados o previamente manipulados no hay garantía.
				</li>
				<li>
					El daño por líquidos es progresivo, posterior a la reparación puede mostrar otras fallas y estas no van cubiertas por la garantía.
				</li>
				<li>
					En equipos muy dañados o previamente manipulados por terceros pueden emerger distintas fallas tras la reparación y manipulación de nuestros tecnicos las cuales no cubre nuestra garantía.
				</li>
				<li>
					Despues de 15 días de ser notificado que el servicio de su equipo finalizo y no recogerlo se le cobrará almacenamiento de $20 pesos por día.
				</li>
				<li>
					Despues de 90 días la empresa no se hace responsable del equipo.
				</li>
				<li>
					Si no proporciona la contraseña del equipo automaticamente se anula la garantía.
				</li>
				<li>
					No hay devoluciones de efectivo.
				</li>
				<li>
					Al firmar estas politicas se aceptan tambien las condiciones de politica de garantía.
				</li>
				<li>
					No hay garantía en equipos mojados.
				</li>
				<li>
					La garantía queda anulada en caso de que el equipo muestre señales de golpes o humedad.
				</li>
				<li>
					La garantía es únicamente para piezas previamente reparadas o reemplazadas. (Reparaciones adicionales podrían generar un costo adicional)
				</li>
				<li>
					La garantía queda anulada en caso de que el equipo sea manipuado fuera de nuestras instalaciones.
				</li>
				<li>
					Repcel SLP es una empresa que brinda servicio técnico a dispositivos móviles. Repcel SLP no se responsabiliza por la procedencia del equipo, esto queda a responsabilidad del cliente. En caso de que la empresa o alguna autoridad detecte que el equipo no es propiedad del cliente, se pondrá a disposición de las autoridades competentes junto con la respectiva información proporcionada en terminos de la legislacion estatal.
				</li>
			</ul>
			<br>
			<table>
				<tr>
					<th style="width:40% !important;"> 
						<p style="font-size: 10px;border-top: 2px solid black;text-align: center; color:#000000;">Firma de conformidad de recepción de equipo</p>
					</th>
					<th style="width:31% !important;"> 
					</th>
					<th style="width:40% !important;">  
						<p style="font-size: 10px;border-top: 2px solid black;text-align: right; color:#000000;">Firma de conformidad de entrega de equipo</p>
					</th>
				</tr>
			</table>   
		</div>          
		');
	$mpdf->Output();
?>