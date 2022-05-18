<?php
require __DIR__.'../../vendor/autoload.php';
use Spipu\Html2Pdf\Html2Pdf;

$id_nombre_cliente  = $_GET["id_nombre_cliente"];
$id_ap_paterno      = $_GET["id_ap_paterno"];
$id_ap_materno      = $_GET["id_ap_materno"];
$id_email           = $_GET["id_email"];
$id_tel_1           = $_GET["id_tel_1"];
$id_tel_2           = $_GET["id_tel_2"];
$id_tipo_dispositivo= $_GET["id_tipo_dispositivo"];
$id_marca           = $_GET["id_marca"];
$id_modelo          = $_GET["id_modelo"];
$id_imei            = $_GET["id_imei"];
$id_pass            = $_GET["id_pass"];
$id_condiciones     = $_GET["id_condiciones"];
$id_op_1            = $_GET["id_op_1"];
$id_op_2            = $_GET["id_op_2"];
$id_op_3            = $_GET["id_op_3"];
$id_op_4            = $_GET["id_op_4"];
$id_op_5            = $_GET["id_op_5"];
$id_op_6            = $_GET["id_op_6"];
$id_op_7            = $_GET["id_op_7"];
$id_op_8            = $_GET["id_op_8"];
$id_op_9            = $_GET["id_op_9"];
$id_op_10           = $_GET["id_op_10"];
$id_op_11           = $_GET["id_op_11"];
$id_op_12           = $_GET["id_op_12"];
$id_op_13           = $_GET["id_op_13"];
$id_op_14           = $_GET["id_op_14"];
$id_op_15           = $_GET["id_op_15"];
$id_op_16           = $_GET["id_op_16"];
$id_cotizacion      = $_GET["id_cotizacion"];
$id_anticipo        = $_GET["id_anticipo"];
$id_pago            = $_GET["id_pago"];
$id_notas           = $_GET["id_notas"];

//https://repcelslp.com/admin/nota.php?id_nombre_cliente=Angel&id_ap_paterno=Hernandez&id_ap_materno=Mendez&id_email=angel_0_6%40live.com.mx&
//id_tel_1=4443154529&id_tel_2=&id_tipo_dispositivo=Celular&id_marca=LG&id_modelo=G7&id_imei=&id_pass=&id_condiciones=Encendido&id_op_1=on&id_cotizacion=1800&id_anticipo=300&id_pago=Efectivo&id_notas=Estrellado

//https://repcelslp.com/admin/nota.php?id_nombre_cliente=Angel&id_ap_paterno=Hernandez&id_ap_materno=Mendez&id_email=angel_0_6%40live.com.mx&
//id_tel_1=4443154529&id_tel_2=&id_tipo_dispositivo=Celular&id_marca=LG&id_modelo=G7&id_imei=&id_pass=&id_condiciones=Encendido&id_op_1=on&id_op_3=on&id_cotizacion=1800&id_anticipo=300&id_pago=Efectivo&id_notas=Estrellado
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
/*********************************/
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
if($id_condiciones == "Apagado")
{
    $id_op_1            = '<img src="img/repcel/cruz.png" alt="" style="width: 10px;">';
    $id_op_2            = '<img src="img/repcel/cruz.png" alt="" style="width: 10px;">';
    $id_op_3            = '<img src="img/repcel/cruz.png" alt="" style="width: 10px;">';
    $id_op_4            = '<img src="img/repcel/cruz.png" alt="" style="width: 10px;">';
    $id_op_5            = '<img src="img/repcel/cruz.png" alt="" style="width: 10px;">';
    $id_op_6            = '<img src="img/repcel/cruz.png" alt="" style="width: 10px;">';
    $id_op_7            = '<img src="img/repcel/cruz.png" alt="" style="width: 10px;">';
    $id_op_8            = '<img src="img/repcel/cruz.png" alt="" style="width: 10px;">';
    $id_op_9            = '<img src="img/repcel/cruz.png" alt="" style="width: 10px;">';
    $id_op_10           = '<img src="img/repcel/cruz.png" alt="" style="width: 10px;">';
    $id_op_11           = '<img src="img/repcel/cruz.png" alt="" style="width: 10px;">';
    $id_op_12           = '<img src="img/repcel/cruz.png" alt="" style="width: 10px;">';
    $id_op_13           = '<img src="img/repcel/cruz.png" alt="" style="width: 10px;">';
    $id_op_14           = '<img src="img/repcel/cruz.png" alt="" style="width: 10px;">';
    $id_op_15           = '<img src="img/repcel/cruz.png" alt="" style="width: 10px;">';
    $id_op_16           = '<img src="img/repcel/cruz.png" alt="" style="width: 10px;">';
}
$nombre_recepcion = $_SESSION["Nombre"];
date_default_timezone_set('America/Mexico_City');
setlocale(LC_TIME, 'es_MX.UTF-8','es_MX');
$fecha = strftime("%d de %B de %Y %H:%M");//date("D j F Y  g:i a");  
$date = date('Y-m-d H:i');
//user
//	id 	date_create 	nombre 	ap_paterno 	ap_materno 	email 	code 	phone 	code2 	phone2 	token 	date_token 	avatar 

//equipo
//	id 	tipo 	marca 	modelo 	ns_imei 	pass 

//condiciones
//id  condiciones	display 	touch 	ftid 	carga 	auricular 	altavoz 	wifi 	bluetooth 	frontal 	trasera 	senal 	bloqueo 	volumen 	tornillos 	flash 	proximidad 

//notas
//id 	id_user 	id_equipo 	id_condiciones 	cotizacion 	anticipo 	tipo_pago 	txt_details 	dates 	delivery_date 	statusp 
include "../php/conexion.php";
$query_user = "INSERT INTO users (date_create,nombre,   ap_paterno, ap_materno  ,email  ,code ,phone    ,code2,phone2     )
                            VALUES('$date','$id_nombre_cliente','$id_ap_paterno','$id_ap_materno','$id_email','+52','$id_tel_1','+52','$id_tel_2')";
$result_user = mysqli_query($conexion, $query_user);
$id_user = mysqli_insert_id ($conexion);


$query_equipo = "INSERT INTO equipo (	tipo    ,marca       , modelo    ,ns_imei   ,pass)
                            VALUES('$id_tipo_dispositivo'   ,'$id_marca','$id_modelo','$id_imei','$id_pass')";
$result_equipo = mysqli_query($conexion, $query_equipo);
$id_equipo = mysqli_insert_id ($conexion);


$query_condiciones = "INSERT INTO condiciones (condiciones,	display, 	touch, 	ftid, 	carga, 	auricular, 	altavoz, 	wifi, 	bluetooth, 	frontal, 	trasera, 	senal, 	bloqueo, 	volumen, 	tornillos, 	flash, 	proximidad)
                            VALUES('$id_condiciones'   ,'$op_1','$op_2','$op_3','$op_4','$op_5','$op_6','$op_7','$op_8','$op_9','$op_10','$op_11','$op_12','$op_13','$op_14','$op_15','$op_16')";
$result_condiciones = mysqli_query($conexion, $query_condiciones);
$id_condi_result = mysqli_insert_id ($conexion);


$query_notas = "INSERT INTO notas (id_user, 	id_equipo, 	id_condiciones, recepcion	,cotizacion, 	anticipo, 	tipo_pago, 	txt_details, 	dates, statusp)
                            VALUES('$id_user','$id_equipo','$id_condi_result','$nombre_recepcion','$id_cotizacion','$id_anticipo','$id_pago','$id_notas','$date','2')";
$diagnostico_txt = $id_notas;
$result_notas = mysqli_query($conexion, $query_notas);
$id_notas = mysqli_insert_id ($conexion);


$id_orden = $id_notas;
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
                    <span style="font-size:12px;font-weight: normal;text-transform: capitalize;color:#000000;">'.$diagnostico_txt. '</span>
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