<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/repcel/logo.png"> 
	<title>Repcel</title>
	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a38c16a07e.js"></script>
	<script>
		let inputs_check = [];
		
		function add_check(id)
		{
			inputs_check.push(id); 
		}
        function removefile(id)
        {
            document.getElementById("imgInp"+id).value = null;
            document.getElementById("img"+id).src="";
            var oculta ="removefile_id"+id;
            $('#'+oculta).hide();
        }
        function inputf(input,id) 
        {
            if (input.files && input.files[0]) 
            {
                var reader = new FileReader();
                reader.onload = function(e) {
                var imagen="img"+id;
                $('#'+imagen).attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]); // convert to base64 string
            }
            $('#removefile_id'+id).css("display", "");
        }
        function Printing_alert(id)
        {
            var email = document.getElementById('email'+id).value;
            var name = document.getElementById('name'+id).value;//printB_
            var form_data = new FormData();                  
            form_data.append('email', email);//
            form_data.append('name', name);//
            form_data.append('id_user', id);//
            $.ajax({
                type: 'POST',
                url: '../../print_email.php',
                contentType: false,
                processData: false,
                data: form_data,
                success:function(response) {
                       alert("success");
                       document.getElementById('printB_'+id).disabled=true;
                       document.getElementById('printB_'+id).style.backgroundColor="azure";
                       document.getElementById('printB_'+id).style.color="darkgray";
                       //var name = document.getElementById('printB_'+id).value;//printB_
                },
                onFailure: function(response){
                    alert("fail");
                }
            });
        }
        function Traking_number(id)
        {
            var email = document.getElementById('email'+id).value;
            var name = document.getElementById('name'+id).value;
            var traking_n = document.getElementById('traking_n'+id).value;
            var form_data2 = new FormData();                  
            form_data2.append('email', email);//
            form_data2.append('name', name);//
            form_data2.append('id_user', id);//
            form_data2.append('traking_n', traking_n);//
            $.ajax({
                type: 'POST',
                url: '../../admin/shipping_email.php',
                contentType: false,
                processData: false,
                data: form_data2,
                success:function(response) {
                       var traking_n = document.getElementById('traking_n'+id).value="";
                       document.getElementById('traking_b'+id).disabled=true;
                       document.getElementById('traking_b'+id).style.backgroundColor="azure";
                       document.getElementById('traking_b'+id).style.color="darkgray";
                },
                onFailure: function(response){
                }
            });

        }
        function ajax_file_upload(file_obj) 
        {

            var form_data = new FormData();                  
            form_data.append('file', file_obj);//
            form_data.append('image_text', texto);//
            $.ajax({
                xhr: function() {
                    var xhr = new window.XMLHttpRequest();
                    xhr.upload.addEventListener("progress", function(evt){
                        if (evt.lengthComputable) {
                            var percentComplete = evt.loaded / evt.total;
                            updateProgress(1,percentComplete*100*2);
                            console.log(percentComplete);
                        }
                }, false);                        
                return xhr;
                },
                type: 'POST',
                url: '../../php/upload_file_drop.php',
                contentType: false,
                processData: false,
                data: form_data,
                success:function(response) {
                       alert("success");
                },
                onFailure: function(response){
                    alert("fail");
                }
            });
        }
        function SendProof(id)
        {
            /*
				$link       = $_POST['link'];
				$coment     = $_POST['coment'];
				$id_order   = $_POST['id_order'];
				$email      = $_POST['email'];
				$name       =$_POST['name'];
				$code       =$_POST['phone'];
				$phone      =$_POST['code'];//id_user
            	$id_user      =$_POST['id_user'];link2
            */
            var link = document.getElementById("txt"+id).value;
            var coment = document.getElementById("coment"+id).value;
            var id_order = id;
            var email = document.getElementById("email"+id).value;
            var name = document.getElementById("nameU"+id).value;
            var code = document.getElementById("code"+id).value;
            var phone = document.getElementById("phone"+id).value;
            var id_user = document.getElementById("id_user"+id).value;
            var link2 = document.getElementById("link2"+id).value;


            var form_data = new FormData();
            form_data.append('link',link);
            form_data.append('coment',coment);
            form_data.append('id_order',id_order);
            form_data.append('email',email);
            form_data.append('name',name);
            form_data.append('code',code);
            form_data.append('phone',phone);
            form_data.append('id_user',id_user);
            form_data.append('link2',link2);
            

            $.ajax({
                type: 'POST',
                url: '../../php/sendproof.php',
                contentType: false,
                processData: false,
                data: form_data,
                success:function(response) {
                    document.getElementById("button"+id).innerHTML="Done!";
                },
                onFailure: function(response){
                    alert("fail");
                }
            });
        }
        function Download(name)
        {
            //var source = name.getAttribute('src');
            //alert(name);
            window.open(name, "Download");
            //      src="https://res.cloudinary.com/dgnrey9it/image/upload/co_white,e_outline:20:0/bomba.png"
        }
		function Send_emails()
		{
			$.ajax({
                type: 'POST',
                url: 'priv/send_emails.php',
                contentType: false,
                processData: false,
                success:function(response) {
                       //alert("success");
                },
                onFailure: function(response){
                    //alert("fail");
                }
            });
		}
		function reimprimir(id)
		{
			var win = window.open('https://repcelslp.com/admin/reimprimir.php?order='+id, '_blank');
			win.focus();
		}
		function Garantia()
        {
			inputs_check.forEach(function(elemento) {
				var id_order = document.getElementById("id_order_"+elemento).value;
				//var id		 = "";
				var email = document.getElementById("email_"+elemento).value;
				var name = document.getElementById("nombre_"+elemento).value;

				var form_data = new FormData();
				form_data.append('id_order', id_order);
				//form_data.append('id', id);
				form_data.append('email', email);
				form_data.append('name', name);
				$.ajax({
					type: 'POST',
					url: 'priv/4_impresion.php',
					contentType: false,
					processData: false,
					data: form_data,
					success:function(response) {
						window.location.href = window.location.href;
						//$("#"+reload).load(location.href + " #"+reload+">*", "");
					},
					onFailure: function(response){
						//alert("fail");
					}
				});
			})
        }
		function Cancelado()
        {
			inputs_check.forEach(function(elemento) {
				var id_order = document.getElementById("id_order_"+elemento).value;
				var form_data = new FormData();
				form_data.append('id_order', id_order);
				$.ajax({
					type: 'POST',
					url: 'priv/3_cancelado.php',
					contentType: false,
					processData: false,
					data: form_data,
					success:function(response) {
						window.location.href = window.location.href;
						//$("#"+reload).load(location.href + " #"+reload+">*", "");
					},
					onFailure: function(response){
						//alert("fail");
					}
				});
			})
        }
		function Entregado()
        {
			inputs_check.forEach(function(elemento) {
				console.log(elemento);
				var id_order = document.getElementById("id_order_"+elemento).value;
				console.log(id_order);
				var form_data = new FormData();
				form_data.append('id_order', id_order);
				$.ajax({
					type: 'POST',
					url: 'priv/5_entregado.php',
					contentType: false,
					processData: false,
					data: form_data,
					success:function(response) {
						window.location.href = window.location.href;
						//$("#"+reload).load(location.href + " #"+reload+">*", "");
					},
					onFailure: function(response){
						//alert("fail");
					}
				});
			})
        }
		function No_quedo()
        {
			inputs_check.forEach(function(elemento) {
				console.log(elemento);
				var id_order = document.getElementById("id_order_"+elemento).value;
				console.log(id_order);
				var form_data = new FormData();
				form_data.append('id_order', id_order);
				$.ajax({
					type: 'POST',
					url: 'priv/8_no_quedo.php',
					contentType: false,
					processData: false,
					data: form_data,
					success:function(response) {
						window.location.href = window.location.href;
						//$("#"+reload).load(location.href + " #"+reload+">*", "");
					},
					onFailure: function(response){
						//alert("fail");
					}
				});
			})
        }
		function En_proceso()
        {
			inputs_check.forEach(function(elemento) {
				console.log(elemento);
				var id_order = document.getElementById("id_order_"+elemento).value;
				console.log(id_order);
				var form_data = new FormData();
				form_data.append('id_order', id_order);
				$.ajax({
					type: 'POST',
					url: 'priv/3_en_proceso.php',
					contentType: false,
					processData: false,
					data: form_data,
					success:function(response) {
						window.location.href = window.location.href;
						//$("#"+reload).load(location.href + " #"+reload+">*", "");
					},
					onFailure: function(response){
						//alert("fail");
					}
				});
			})
        }
    </script>
</head>
<?php
if(isset($_SESSION['email_admi']))
{
?>
<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar">
			<div class="sidebar-content js-simplebar">
				<script>
					document.addEventListener("DOMContentLoaded", function(event) { 
						//Send_emails();
						});
				</script>
				<a class="sidebar-brand" href="dashboard">
					<span class="align-middle">Repcel</span>
				</a>
				<ul class="sidebar-nav">
					<li class="sidebar-item">
						<a class="sidebar-link" href="dashboard">
							<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
						</a>
					</li>
					<li class="sidebar-item active">
						<a class="sidebar-link" href="notas">
							<i class="align-middle" data-feather="check-circle"></i> <span class="align-middle">Notas</span>
						</a>
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="tienda">
							<i class="align-middle me-2" data-feather="shopping-bag"></i> <span class="align-middle">Tienda</span>
						</a>
					</li>
					<li class="sidebar-item ">
						<a class="sidebar-link" href="cotizaciones">
							<i class="align-middle" data-feather="shopping-bag"></i> <span class="align-middle">Cotizaciones</span>
						</a>
					</li>
					<?php
					if($_SESSION['tipe_admi']  == 10)
					{
					?>
					<li class="sidebar-item">
						<a class="sidebar-link" href="customers">
							<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Clientes</span>
						</a>
					</li>
					
					<li class="sidebar-item">
						<a class="sidebar-link" href="sales">
							<i class="align-middle" data-feather="bar-chart-2"></i> <span class="align-middle">Ventas</span>
						</a>
					</li>
					
					<li class="sidebar-item">
						<a class="sidebar-link" href="settings">
							<i class="align-middle" data-feather="settings"></i> <span class="align-middle">Configuración</span>
						</a>
					</li>
					<?php
					}
					?>
				</ul>
			</div>
		</nav>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle d-flex">
					<i class="hamburger align-self-center"></i>
				</a>
				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
								<div class="position-relative">
									<i class="align-middle" data-feather="bell"></i>
									<span class="indicator"></span>
								</div>
							</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
								<i class="align-middle" data-feather="settings"></i>
							</a>
							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
								<?php
									if(isset($_SESSION['email_admi']))
									{
										if($_SESSION['source_admi'] == "google")
										{
									?>
												<img src="<?php echo ($_SESSION['avatar_admi']);?>"  class="avatar img-fluid rounded me-1" alt="<?php echo $_SESSION['e_admi'];?>" >
									<?php
										}
										if(isset($_SESSION['avatar_admi']) && $_SESSION['avatar_admi'] != null && !isset($_SESSION['source_admi']))
										{
									?>
												<img src="data:image/png;base64,<?php echo base64_encode($_SESSION['avatar_admi']);?>"  class="avatar img-fluid rounded me-1" alt="<?php echo $_SESSION['e_admi'];?>">
									<?php
										}
										if(!isset($_SESSION['avatar_admi']) || $_SESSION['avatar_admi'] == null )
										{
									?>
												<img src="/assets/avatar.png"  class="avatar img-fluid rounded me-1" alt="<?php echo $_SESSION['e_admi'];?>">
									<?php
										}
										?>
									<?php
									}
								?>
							</a>
							<div class="dropdown-menu dropdown-menu-end">
								<a class="dropdown-item" href="#" style="display: none;visibility: hidden;"><i class="align-middle me-1" data-feather="pie-chart"></i> Analytics</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="priv/logout">Log out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>

			<main class="content">
				<div class="container-fluid p-0">

					<div class="row mb-2 mb-xl-3">
						<div class="col-auto d-none d-sm-block">
							<h3>Notas</h3>
						</div>
						<a href="crear_nota">
							<button class="btn btn-primary">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-plus align-middle me-2">
									<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
									<polyline points="14 2 14 8 20 8"></polyline>
									<line x1="12" y1="18" x2="12" y2="12"></line>
									<line x1="9" y1="15" x2="15" y2="15"></line>
								</svg>
								Crear nota
							</button>
						</a>
					</div>
					<div class="row justify-content-center mt-3 mb-2">
						<div class="col-auto">
							<nav class="nav btn-group">
								<?php
									include "../php/conexion.php";
									$query    = "SELECT * FROM notas";
									$validar  = mysqli_query($conexion,$query);
									$todos 	  = mysqli_num_rows($validar);
									
									$query    = "SELECT * FROM notas WHERE statusp = '1'"; // en proceso
									$validar  = mysqli_query($conexion,$query);
									$en_proceso= mysqli_num_rows($validar);

									$query    = "SELECT * FROM notas WHERE statusp = '2'"; //pendiente
									$validar  = mysqli_query($conexion,$query);
									$aprobado = mysqli_num_rows($validar);

									$query    = "SELECT * FROM notas WHERE statusp = '3'"; //cancelado
									$validar  = mysqli_query($conexion,$query);
									$pendiente= mysqli_num_rows($validar);

									$query    = "SELECT * FROM notas WHERE statusp = '4'"; //garantia
									$validar  = mysqli_query($conexion,$query);
									$garantia= mysqli_num_rows($validar);

									$query    = "SELECT * FROM notas WHERE statusp = '5'"; // entregado
									$validar  = mysqli_query($conexion,$query);
									$entregados= mysqli_num_rows($validar);

									$query    = "SELECT * FROM estatus WHERE estatus = '8'"; // entregado
									$validar  = mysqli_query($conexion,$query);
									$no_quedo = mysqli_num_rows($validar);

								?>
								<a href="#all" class="btn btn-outline-primary active" data-bs-toggle="tab">Todos (<?php echo $todos;?>)</a>
								<a href="#En_proceso" class="btn btn-outline-primary" data-bs-toggle="tab">En proceso (<?php echo $en_proceso;?>)</a>
								<a href="#entregado" class="btn btn-outline-primary" data-bs-toggle="tab">Entregados (<?php echo $entregados;?>)</a>
								<a href="#pendientes" class="btn btn-outline-primary" data-bs-toggle="tab">Cancelado (<?php echo $pendiente;?>)</a>
								<a href="#aprobados" class="btn btn-outline-primary" data-bs-toggle="tab">Pendientes (<?php echo $aprobado;?>)</a>
								<a href="#aprobados" class="btn btn-outline-primary" data-bs-toggle="tab">Garantia (<?php echo $garantia;?>)</a>
								<a href="#aprobados" class="btn btn-outline-primary" data-bs-toggle="tab">No quedo (<?php echo $no_quedo;?>)</a>
							</nav>
						</div>
						<div  class="col-md-2" style="text-align: center;">
							<i class="align-middle me-2 fas fa-fw fa-clock" style="cursor:pointer; cursor: hand;" title="En proceso" onclick="En_proceso()"></i>
							<i class="align-middle me-2 fas fa-fw fa-check" style="cursor:pointer; cursor: hand;" title="Entregado" onclick="Entregado()"></i>
							<i class="align-middle me-2 fas fa-fw fa-certificate" style="cursor:pointer; cursor: hand;" title="Garantia" onclick="Garantia()"></i>
							<i class="align-middle me-2 fas fa-fw fa-window-close" style="cursor:pointer; cursor: hand;" title="Cancelado" onclick="Cancelado()"></i>
							<i class="align-middle me-2 fas fa-fw fa-dizzy"  style="cursor:pointer; cursor: hand;" title="No quedo" onclick="No_quedo()"></i>
						</div>
					</div>
					<div class="tab-content">
						<div class="tab-pane fade show active" id="all">
							<div class="row">
								<div class="col-xl-12 col-xxl-12 d-flex">
									<div class="w-100">
										<div class="row">
											<div class="container-fluid p-0">
												<div class="row">
													<div class="col-xl-12">
														<div class="card">
															<div class="card-header pb-0">
																<h5 class="card-title mb-0">Notas</h5>
															</div>
															<div class="card-body" id="usr">
																<?php
																//include "../php/conexion";
																$query    = "SELECT * FROM notas";
																$validar  = mysqli_query($conexion,$query);
																if(mysqli_num_rows($validar)>0)
																{
																	?>
																	<table class="table table-striped" style="width:100%" id="responsivo_all">
																	<thead>
																		<tr>
																			<th class="col-md-2">Orden</th>
																			<th class="col-md-2">Cliente</th>
																			<th class="col-md-2">Producto</th>
																			<th class="col-md-2">Fecha de ingreso</th>
																			<th class="col-md-2">Notas</th>
																			<th class="col-md-2" style="text-align: center;">Estatus</th>

																		</tr>
																	</thead>
																	<tbody>
																	<?php
																	$count1 		   = 0;
																	while ($extraido= mysqli_fetch_array($validar))
																	{
																		$count1++;
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
																		$dates 			= date_format($dates,'Y-m-d H:i');//date_format($date, 'Y-m-d H:i:s');
																		$delivery_date	= $extraido['delivery_date']; 	
																		$statusp		= $extraido['statusp']; 	
																		
																		$query_2    	= "SELECT * FROM equipo WHERE id = $id_equipo";
																		$validar_2  	= mysqli_query($conexion,$query_2);
																		$extraido_2		= mysqli_fetch_array($validar_2);
																		$tipo			= $extraido_2['tipo']; 	
																		$marca			= $extraido_2['marca']; 	
																		$modelo			= $extraido_2['modelo']; 	
																		$ns_imei		= $extraido_2['ns_imei']; 
																		$pass			= $extraido_2['pass']; 

																		$query_user    = "SELECT * FROM users WHERE id='$id_user'";
																		$result_user   = mysqli_query($conexion,$query_user);
																		$extraido3     = mysqli_fetch_array($result_user);
																		$nombre        = $extraido3['nombre'];
																		$ap_paterno    = $extraido3['ap_paterno'];
																		$ap_materno    = $extraido3['ap_materno'];
																		$email         = $extraido3['email'];
																		$phone         = $extraido3['phone'];

																		/*$query_estatus = "SELECT * FROM estatus WHERE id='$id_user' ORDER BY id DESC";
																		$result_estatus= mysqli_query($conexion,$query_estatus);
																		$extraido4     = mysqli_fetch_array($result_estatus);
																		$id_estatus    = $extraido4['id'];
																		$nota_estatus  = $extraido4['id_nota'];
																		$estatus       = $extraido4['status'];
																		$fecha_estatus = $extraido4['fecha'];
																		$statusp 	   = $estatus;
																		//id 	date_create 	nombre 	ap_paterno 	ap_materno 	email 	code 	phone 	code2 	phone2 	token 	date_token 	avatar 	
																		
																			id 	tipo 	marca 	modelo 	ns_imei 	pass 	
																			$query_user = "INSERT INTO users (date_create,nombre,              ap_paterno,       ap_materno     ,email      ,code ,phone      ,code2,phone2     )
																										VALUES('$fecha'   ,'$id_nombre_cliente','$id_ap_paterno','$id_ap_materno','$id_email','+52','$id_tel_1','+52','$id_tel_2')";
																			$result_user = mysqli_query($conexion, $query_user);
																			$id_user = mysqli_insert_id ($conexion);


																			$query_equipo = "INSERT INTO equipo (	tipo                    ,marca       , modelo    ,ns_imei   ,pass)
																										VALUES('$id_tipo_dispositivo'   ,'$id_marca','$id_modelo','$id_imei','$id_pass')";
																			$result_equipo = mysqli_query($conexion, $query_equipo);
																			$id_equipo = mysqli_insert_id ($conexion);


																			$query_condiciones = "INSERT INTO condiciones (condiciones,	display, 	touch, 	ftid, 	carga, 	auricular, 	altavoz, 	wifi, 	bluetooth, 	frontal, 	trasera, 	senal, 	bloqueo, 	volumen, 	tornillos, 	flash, 	proximidad)
																										VALUES('$id_condiciones'   ,'$op_1','$op_2','$op_3','$op_4','$op_5','$op_6','$op_7','$op_8','$op_9','$op_10','$op_11','$op_12','$op_13','$op_14','$op_15','$op_16')";
																			$result_condiciones = mysqli_query($conexion, $query_condiciones);
																			$id_condi_result = mysqli_insert_id ($conexion);


																			$query_notas = "INSERT INTO notas (id_user, 	id_equipo, 	id_condiciones, 	cotizacion, 	anticipo, 	tipo_pago, 	txt_details, 	dates, statusp)
																										VALUES('$id_user','$id_equipo','$id_condi_result','$id_cotizacion','$id_anticipo','$id_pago','$id_notas','$fecha','2')";
																		*/
																		?>
																			<tr>
																				<td>
																					<div class="col-md-12" style="display: inline-block;">
																						<div  class="col-md-2"   style="cursor: pointer;display: inline-block;">
																							<input type="checkbox" name="" id="count_input_all_<?php echo $count1;?>" onclick="add_check(<?php echo $count1;?>)">
																							<input type="hidden" name="" id="id_order_<?php echo $count1; ?>" value="<?php echo $id_nota?>">
																						</div>
																						<div class="col-md-4"  style="cursor: pointer;display: inline-block;">
																							<a href="nota_details?order=<?php echo $id_nota;?>"><?php echo $id_nota;?></a>
																						</div>
																						<div class="col-md-2" style="display: inline-block;"></div>
																						<div class="col-md-2"  style="cursor: pointer;display: inline-block;" >
																							<a onclick="reimprimir(<?php echo $id_nota;?>)" target="_blank">
																								<i class="align-middle me-2" data-feather="printer" ></i>
																							</a>
																						</div>
																					</div>
																				</td>
																				<td><?php echo $nombre." ".$ap_paterno." ".$ap_materno;?><br><?php echo $phone;?><br></td>
																				<td><?php echo $tipo;?><br><?php echo $marca;?><br><?php echo $modelo;?></td>
																				
																				
																				<td><?php echo $dates ;?></td>
																				<td><?php echo $txt_details ;?></td>
																				<?php
																				if($statusp == 0)
																				{
																				?>
																				<td style="text-align: center;">
																					<span class="badge bg-warning">Pendiente de prueba</span>
																				</td>
																				<?php
																				}
																				?>
																				<?php
																				if($statusp == 1)
																				{
																				?>
																				<td style="text-align: center;">
																					<span class="badge bg-primary">En proceso</span>
																				</td>
																				<?php
																				}
																				?>
																				<?php
																				if($statusp == 2)
																				{
																				?>
																				<td style="text-align: center;">
																					<span class="badge bg-primary">Pendiente</span>
																				</td>
																				<?php
																				}
																				?>
																				<?php
																				if($statusp == 3)
																				{
																				?>
																				<td style="text-align: center;">
																					<span class="badge bg-danger">Cancelado</span>
																				</td>
																				<?php
																				}
																				?>
																				<?php
																				if($statusp == 4)
																				{
																				?>
																				<td style="text-align: center;">
																					<span class="badge bg-secondary">Garantía</span>
																				</td>
																				<?php
																				}
																				?>
																				<?php
																				if($statusp == 5)
																				{
																				?>
																				<td style="text-align: center;">
																					<span class="badge bg-success">Entregado</span>
																				</td>
																				<?php
																				}
																				?>
																				<?php
																				if($statusp == 7)
																				{
																				?>
																				<td style="text-align: center;">
																					<span class="badge bg-info">Entregado</span>
																				</td>
																				<?php
																				}
																				?>
																				<?php
																				if($statusp == 8)
																				{
																				?>
																				<td style="text-align: center;">
																					<span class="badge bg-info">No quedo</span>
																				</td>
																				<?php
																				}
																				?>
																				<?php
																				if($statusp == 9)
																				{
																				?>
																				<td style="text-align: center;">
																					<span class="badge bg-success">Recibido</span>
																				</td>
																				<?php
																				}
																				?>
																			</tr>
																		
																	<?php
																	}
																	?>
																		</tbody>
																	</table>
																	<?php
																}
																?>
															</div>
														</div>
													</div>
												</div>
											</div>								
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="En_proceso">
							<div class="row">
								<div class="col-xl-12 col-xxl-12 d-flex">
									<div class="w-100">
										<div class="row">
											<div class="container-fluid p-0">
												<div class="row">
													<div class="col-xl-12">
														<div class="card">
															<div class="card-header pb-0">
																<h5 class="card-title mb-0">Notas</h5>
															</div>
															<div class="card-body" id="usr">
																<?php
																//include "../php/conexion";
																$query    = "SELECT * FROM notas WHERE statusp = '1'";
																$validar  = mysqli_query($conexion,$query);
																if(mysqli_num_rows($validar)>0)
																{
																	?>
																	<table class="table table-striped" style="width:100%" id="responsivo_En_proceso">
																	<thead>
																		<tr>
																			<th class="col-md-2">Orden</th>
																			<th class="col-md-2">Cliente</th>
																			<th class="col-md-2">Producto</th>
																			<th class="col-md-2">Fecha de ingreso</th>
																			<th class="col-md-2">Notas</th>
																			<th class="col-md-2" style="text-align: center;">Estatus</th>

																		</tr>
																	</thead>
																	<tbody>
																	<?php
																	while ($extraido= mysqli_fetch_array($validar))
																	{
																		$count1++;
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
																		$dates 			= date_format($dates,'Y-m-d H:i');//date_format($date, 'Y-m-d H:i:s');
																		
																		$delivery_date	= $extraido['delivery_date']; 	
																		$statusp		= $extraido['statusp']; 	
																		
																		$query_2    	= "SELECT * FROM equipo WHERE id = $id_equipo";
																		$validar_2  	= mysqli_query($conexion,$query_2);
																		$extraido_2		= mysqli_fetch_array($validar_2);
																		$tipo			= $extraido_2['tipo']; 	
																		$marca			= $extraido_2['marca']; 	
																		$modelo			= $extraido_2['modelo']; 	
																		$ns_imei		= $extraido_2['ns_imei']; 
																		$pass			= $extraido_2['pass']; 

																		$query_user    = "SELECT * FROM users WHERE id='$id_user'";
																		$result_user   = mysqli_query($conexion,$query_user);
																		$extraido3     = mysqli_fetch_array($result_user);
																		$nombre        = $extraido3['nombre'];
																		$ap_paterno    = $extraido3['ap_paterno'];
																		$ap_materno    = $extraido3['ap_materno'];
																		$email         = $extraido3['email'];
																		$phone         = $extraido3['phone'];
																		//id 	date_create 	nombre 	ap_paterno 	ap_materno 	email 	code 	phone 	code2 	phone2 	token 	date_token 	avatar 	
																		/*
																			id 	tipo 	marca 	modelo 	ns_imei 	pass 	
																			$query_user = "INSERT INTO users (date_create,nombre,              ap_paterno,       ap_materno     ,email      ,code ,phone      ,code2,phone2     )
																										VALUES('$fecha'   ,'$id_nombre_cliente','$id_ap_paterno','$id_ap_materno','$id_email','+52','$id_tel_1','+52','$id_tel_2')";
																			$result_user = mysqli_query($conexion, $query_user);
																			$id_user = mysqli_insert_id ($conexion);


																			$query_equipo = "INSERT INTO equipo (	tipo                    ,marca       , modelo    ,ns_imei   ,pass)
																										VALUES('$id_tipo_dispositivo'   ,'$id_marca','$id_modelo','$id_imei','$id_pass')";
																			$result_equipo = mysqli_query($conexion, $query_equipo);
																			$id_equipo = mysqli_insert_id ($conexion);


																			$query_condiciones = "INSERT INTO condiciones (condiciones,	display, 	touch, 	ftid, 	carga, 	auricular, 	altavoz, 	wifi, 	bluetooth, 	frontal, 	trasera, 	senal, 	bloqueo, 	volumen, 	tornillos, 	flash, 	proximidad)
																										VALUES('$id_condiciones'   ,'$op_1','$op_2','$op_3','$op_4','$op_5','$op_6','$op_7','$op_8','$op_9','$op_10','$op_11','$op_12','$op_13','$op_14','$op_15','$op_16')";
																			$result_condiciones = mysqli_query($conexion, $query_condiciones);
																			$id_condi_result = mysqli_insert_id ($conexion);


																			$query_notas = "INSERT INTO notas (id_user, 	id_equipo, 	id_condiciones, 	cotizacion, 	anticipo, 	tipo_pago, 	txt_details, 	dates, statusp)
																										VALUES('$id_user','$id_equipo','$id_condi_result','$id_cotizacion','$id_anticipo','$id_pago','$id_notas','$fecha','2')";
																		*/
																		?>
																		
																			<tr>
																				<td>
																					<div class="col-md-12" style="display: inline-block;">
																						<div  class="col-md-2"   style="cursor: pointer;display: inline-block;">
																							<input type="checkbox" name="" id="count_input_all_<?php echo $count1;?>" onclick="add_check(<?php echo $count1;?>)">
																							<input type="hidden" name="" id="id_order_<?php echo $count1; ?>" value="<?php echo $id_nota?>">
																						</div>
																						<div class="col-md-4"  style="cursor: pointer;display: inline-block;">
																							<a href="nota_details?order=<?php echo $id_nota;?>"><?php echo $id_nota;?></a>
																						</div>
																						<div class="col-md-2" style="display: inline-block;"></div>
																						<div class="col-md-2"  style="cursor: pointer;display: inline-block;" >
																							<a onclick="reimprimir(<?php echo $id_nota;?>)" target="_blank">
																								<i class="align-middle me-2" data-feather="printer" ></i>
																							</a>
																						</div>
																					</div>
																				</td>
																				<td><?php echo $nombre." ".$ap_paterno." ".$ap_materno;?><br><?php echo $phone;?><br></td>
																				<td><?php echo $tipo;?><br><?php echo $marca;?><br><?php echo $modelo;?></td>
																				
																				
																				<td><?php echo $dates ;?></td>
																				<td><?php echo $txt_details ;?></td>
																				<?php
																				if($statusp == 0)
																				{
																				?>
																				<td style="text-align: center;">
																					<span class="badge bg-warning">Pendiente de prueba</span>
																				</td>
																				<?php
																				}
																				?>
																				<?php
																				if($statusp == 1)
																				{
																				?>
																				<td style="text-align: center;">
																					<span class="badge bg-primary">En proceso</span>
																				</td>
																				<?php
																				}
																				?>
																				<?php
																				if($statusp == 2)
																				{
																				?>
																				<td style="text-align: center;">
																					<span class="badge bg-primary">Pendiente</span>
																				</td>
																				<?php
																				}
																				?>
																				<?php
																				if($statusp == 3)
																				{
																				?>
																				<td style="text-align: center;">
																					<span class="badge bg-danger">Cancelado</span>
																				</td>
																				<?php
																				}
																				?>
																				<?php
																				if($statusp == 4)
																				{
																				?>
																				<td style="text-align: center;">
																					<span class="badge bg-secondary">Garantía</span>
																				</td>
																				<?php
																				}
																				?>
																				<?php
																				if($statusp == 5)
																				{
																				?>
																				<td style="text-align: center;">
																					<span class="badge bg-success">Entregado</span>
																				</td>
																				<?php
																				}
																				?>
																				<?php
																				if($statusp == 7)
																				{
																				?>
																				<td style="text-align: center;">
																					<span class="badge bg-info">Entregado</span>
																				</td>
																				<?php
																				}
																				?>
																				<?php
																				if($statusp == 8)
																				{
																				?>
																				<td style="text-align: center;">
																					<span class="badge bg-info">No quedo</span>
																				</td>
																				<?php
																				}
																				?>
																				<?php
																				if($statusp == 9)
																				{
																				?>
																				<td style="text-align: center;">
																					<span class="badge bg-success">Recibido</span>
																				</td>
																				<?php
																				}
																				?>
																			</tr>
																		
																	<?php
																	}
																	?>
																		</tbody>
																	</table>
																	<?php
																}
																?>
															</div>
														</div>
													</div>
												</div>
											</div>								
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="entregado">
							<div class="row">
								<div class="col-xl-12 col-xxl-12 d-flex">
									<div class="w-100">
										<div class="row">
											<div class="container-fluid p-0">
												<div class="row">
													<div class="col-xl-12">
														<div class="card">
															<div class="card-header pb-0">
																<h5 class="card-title mb-0">Notas</h5>
															</div>
															<div class="card-body" id="usr">
																<?php
																//include "../php/conexion";
																$query    = "SELECT * FROM notas WHERE statusp = '5' ORDER BY id DESC";
																$validar  = mysqli_query($conexion,$query);
																if(mysqli_num_rows($validar)>0)
																{
																	?>
																	<table class="table table-striped" style="width:100%" id="responsivo_entregado">
																	<thead>
																		<tr>
																			<th class="col-md-2">Orden</th>
																			<th class="col-md-2">Cliente</th>
																			<th class="col-md-2">Producto</th>
																			<th class="col-md-2">Fecha de ingreso</th>
																			<th class="col-md-2">Notas</th>
																			<th class="col-md-2" style="text-align: center;">Estatus</th>

																		</tr>
																	</thead>
																	<tbody>
																	<?php
																	while ($extraido= mysqli_fetch_array($validar))
																	{
																		$count1++;
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
																		$dates 			= date_format($dates,'Y-m-d H:i');//date_format($date, 'Y-m-d H:i:s');
																		
																		$delivery_date	= $extraido['delivery_date']; 	
																		$statusp		= $extraido['statusp']; 	
																		
																		$query_2    	= "SELECT * FROM equipo WHERE id = $id_equipo";
																		$validar_2  	= mysqli_query($conexion,$query_2);
																		$extraido_2		= mysqli_fetch_array($validar_2);
																		$tipo			= $extraido_2['tipo']; 	
																		$marca			= $extraido_2['marca']; 	
																		$modelo			= $extraido_2['modelo']; 	
																		$ns_imei		= $extraido_2['ns_imei']; 
																		$pass			= $extraido_2['pass']; 

																		$query_user    = "SELECT * FROM users WHERE id='$id_user'";
																		$result_user   = mysqli_query($conexion,$query_user);
																		$extraido3     = mysqli_fetch_array($result_user);
																		$nombre        = $extraido3['nombre'];
																		$ap_paterno    = $extraido3['ap_paterno'];
																		$ap_materno    = $extraido3['ap_materno'];
																		$email         = $extraido3['email'];
																		$phone         = $extraido3['phone'];
																		//id 	date_create 	nombre 	ap_paterno 	ap_materno 	email 	code 	phone 	code2 	phone2 	token 	date_token 	avatar 	
																		/*
																			id 	tipo 	marca 	modelo 	ns_imei 	pass 	
																			$query_user = "INSERT INTO users (date_create,nombre,              ap_paterno,       ap_materno     ,email      ,code ,phone      ,code2,phone2     )
																										VALUES('$fecha'   ,'$id_nombre_cliente','$id_ap_paterno','$id_ap_materno','$id_email','+52','$id_tel_1','+52','$id_tel_2')";
																			$result_user = mysqli_query($conexion, $query_user);
																			$id_user = mysqli_insert_id ($conexion);


																			$query_equipo = "INSERT INTO equipo (	tipo                    ,marca       , modelo    ,ns_imei   ,pass)
																										VALUES('$id_tipo_dispositivo'   ,'$id_marca','$id_modelo','$id_imei','$id_pass')";
																			$result_equipo = mysqli_query($conexion, $query_equipo);
																			$id_equipo = mysqli_insert_id ($conexion);


																			$query_condiciones = "INSERT INTO condiciones (condiciones,	display, 	touch, 	ftid, 	carga, 	auricular, 	altavoz, 	wifi, 	bluetooth, 	frontal, 	trasera, 	senal, 	bloqueo, 	volumen, 	tornillos, 	flash, 	proximidad)
																										VALUES('$id_condiciones'   ,'$op_1','$op_2','$op_3','$op_4','$op_5','$op_6','$op_7','$op_8','$op_9','$op_10','$op_11','$op_12','$op_13','$op_14','$op_15','$op_16')";
																			$result_condiciones = mysqli_query($conexion, $query_condiciones);
																			$id_condi_result = mysqli_insert_id ($conexion);


																			$query_notas = "INSERT INTO notas (id_user, 	id_equipo, 	id_condiciones, 	cotizacion, 	anticipo, 	tipo_pago, 	txt_details, 	dates, statusp)
																										VALUES('$id_user','$id_equipo','$id_condi_result','$id_cotizacion','$id_anticipo','$id_pago','$id_notas','$fecha','2')";
																		*/
																		?>
																		
																			<tr>
																				<td>
																					<div class="col-md-12" style="display: inline-block;">
																						<div  class="col-md-2"   style="cursor: pointer;display: inline-block;">
																							<input type="checkbox" name="" id="count_input_all_<?php echo $count1;?>" onclick="add_check(<?php echo $count1;?>)">
																							<input type="hidden" name="" id="id_order_<?php echo $count1; ?>" value="<?php echo $id_nota?>">
																						</div>
																						<div class="col-md-4"  style="cursor: pointer;display: inline-block;">
																							<a href="nota_details?order=<?php echo $id_nota;?>"><?php echo $id_nota;?></a>
																						</div>
																						<div class="col-md-2" style="display: inline-block;"></div>
																						<div class="col-md-2"  style="cursor: pointer;display: inline-block;" >
																							<a onclick="reimprimir(<?php echo $id_nota;?>)" target="_blank">
																								<i class="align-middle me-2" data-feather="printer" ></i>
																							</a>
																						</div>
																					</div>
																				</td>
																				<td><?php echo $nombre." ".$ap_paterno." ".$ap_materno;?><br><?php echo $phone;?><br></td>
																				<td><?php echo $tipo;?><br><?php echo $marca;?><br><?php echo $modelo;?></td>
																				
																				
																				<td><?php echo $dates ;?></td>
																				<td><?php echo $txt_details ;?></td>
																				<?php
																				if($statusp == 0)
																				{
																				?>
																				<td style="text-align: center;">
																					<span class="badge bg-warning">Pendiente de prueba</span>
																				</td>
																				<?php
																				}
																				?>
																				<?php
																				if($statusp == 1)
																				{
																				?>
																				<td style="text-align: center;">
																					<span class="badge bg-primary">En proceso</span>
																				</td>
																				<?php
																				}
																				?>
																				<?php
																				if($statusp == 2)
																				{
																				?>
																				<td style="text-align: center;">
																					<span class="badge bg-primary">Pendiente</span>
																				</td>
																				<?php
																				}
																				?>
																				<?php
																				if($statusp == 3)
																				{
																				?>
																				<td style="text-align: center;">
																					<span class="badge bg-danger">Cancelado</span>
																				</td>
																				<?php
																				}
																				?>
																				<?php
																				if($statusp == 4)
																				{
																				?>
																				<td style="text-align: center;">
																					<span class="badge bg-secondary">Garantía</span>
																				</td>
																				<?php
																				}
																				?>
																				<?php
																				if($statusp == 5)
																				{
																				?>
																				<td style="text-align: center;">
																					<span class="badge bg-success">Entregado</span>
																				</td>
																				<?php
																				}
																				?>
																				<?php
																				if($statusp == 7)
																				{
																				?>
																				<td style="text-align: center;">
																					<span class="badge bg-info">Entregado</span>
																				</td>
																				<?php
																				}
																				?>
																				<?php
																				if($statusp == 8)
																				{
																				?>
																				<td style="text-align: center;">
																					<span class="badge bg-info">No quedo</span>
																				</td>
																				<?php
																				}
																				?>
																				<?php
																				if($statusp == 9)
																				{
																				?>
																				<td style="text-align: center;">
																					<span class="badge bg-success">Recibido</span>
																				</td>
																				<?php
																				}
																				?>
																			</tr>
																		
																	<?php
																	}
																	?>
																		</tbody>
																	</table>
																	<?php
																}
																?>
															</div>
														</div>
													</div>
												</div>
											</div>								
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="pendientes">
							<div class="row">
								<div class="col-xl-12 col-xxl-12 d-flex">
									<div class="w-100">
										<div class="row">
											<div class="container-fluid p-0">
												<div class="row">
													<div class="col-xl-12">
														<div class="card">
															<div class="card-header pb-0">
																<h5 class="card-title mb-0">Notas</h5>
															</div>
															<div class="card-body" id="usr">
																<?php
																//include "../php/conexion";
																$query    = "SELECT * FROM notas WHERE statusp = '2' ORDER BY id DESC";
																$validar  = mysqli_query($conexion,$query);
																if(mysqli_num_rows($validar)>0)
																{
																	?>
																	<table class="table table-striped" style="width:100%" id="responsivo_pendientes">
																	<thead>
																		<tr>
																			<th class="col-md-2">Orden</th>
																			<th class="col-md-2">Cliente</th>
																			<th class="col-md-2">Producto</th>
																			<th class="col-md-2">Fecha de ingreso</th>
																			<th class="col-md-2">Notas</th>
																			<th class="col-md-2" style="text-align: center;">Estatus</th>

																		</tr>
																	</thead>
																	<tbody>
																	<?php
																	while ($extraido= mysqli_fetch_array($validar))
																	{
																		$count1++;
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
																		$dates 			= date_format($dates,'Y-m-d H:i');//date_format($date, 'Y-m-d H:i:s');
																		
																		$delivery_date	= $extraido['delivery_date']; 	
																		$statusp		= $extraido['statusp']; 	
																		
																		$query_2    	= "SELECT * FROM equipo WHERE id = $id_equipo";
																		$validar_2  	= mysqli_query($conexion,$query_2);
																		$extraido_2		= mysqli_fetch_array($validar_2);
																		$tipo			= $extraido_2['tipo']; 	
																		$marca			= $extraido_2['marca']; 	
																		$modelo			= $extraido_2['modelo']; 	
																		$ns_imei		= $extraido_2['ns_imei']; 
																		$pass			= $extraido_2['pass']; 

																		$query_user    = "SELECT * FROM users WHERE id='$id_user'";
																		$result_user   = mysqli_query($conexion,$query_user);
																		$extraido3     = mysqli_fetch_array($result_user);
																		$nombre        = $extraido3['nombre'];
																		$ap_paterno    = $extraido3['ap_paterno'];
																		$ap_materno    = $extraido3['ap_materno'];
																		$email         = $extraido3['email'];
																		$phone         = $extraido3['phone'];
																		?>
																		
																			<tr>
																				<td>
																					<div class="col-md-12" style="display: inline-block;">
																						<div  class="col-md-2"   style="cursor: pointer;display: inline-block;">
																							<input type="checkbox" name="" id="count_input_all_<?php echo $count1;?>" onclick="add_check(<?php echo $count1;?>)">
																							<input type="hidden" name="" id="id_order_<?php echo $count1; ?>" value="<?php echo $id_nota?>">
																						</div>
																						<div class="col-md-4"  style="cursor: pointer;display: inline-block;">
																							<a href="nota_details?order=<?php echo $id_nota;?>"><?php echo $id_nota;?></a>
																						</div>
																						<div class="col-md-2" style="display: inline-block;"></div>
																						<div class="col-md-2"  style="cursor: pointer;display: inline-block;" >
																							<a onclick="reimprimir(<?php echo $id_nota;?>)" target="_blank">
																								<i class="align-middle me-2" data-feather="printer" ></i>
																							</a>
																						</div>
																					</div>
																				</td>
																				<td><?php echo $nombre." ".$ap_paterno." ".$ap_materno;?><br><?php echo $phone;?><br></td>
																				<td><?php echo $tipo;?><br><?php echo $marca;?><br><?php echo $modelo;?></td>
																				
																				
																				<td><?php echo $dates ;?></td>
																				<td><?php echo $txt_details ;?></td>
																				<?php
																				if($statusp == 0)
																				{
																				?>
																				<td style="text-align: center;">
																					<span class="badge bg-warning">Pendiente de prueba</span>
																				</td>
																				<?php
																				}
																				?>
																				<?php
																				if($statusp == 1)
																				{
																				?>
																				<td style="text-align: center;">
																					<span class="badge bg-primary">En proceso</span>
																				</td>
																				<?php
																				}
																				?>
																				<?php
																				if($statusp == 2)
																				{
																				?>
																				<td style="text-align: center;">
																					<span class="badge bg-primary">Pendiente</span>
																				</td>
																				<?php
																				}
																				?>
																				<?php
																				if($statusp == 3)
																				{
																				?>
																				<td style="text-align: center;">
																					<span class="badge bg-danger">Cancelado</span>
																				</td>
																				<?php
																				}
																				?>
																				<?php
																				if($statusp == 4)
																				{
																				?>
																				<td style="text-align: center;">
																					<span class="badge bg-secondary">Garantía</span>
																				</td>
																				<?php
																				}
																				?>
																				<?php
																				if($statusp == 5)
																				{
																				?>
																				<td style="text-align: center;">
																					<span class="badge bg-success">Entregado</span>
																				</td>
																				<?php
																				}
																				?>
																				<?php
																				if($statusp == 7)
																				{
																				?>
																				<td style="text-align: center;">
																					<span class="badge bg-info">Entregado</span>
																				</td>
																				<?php
																				}
																				?>
																				<?php
																				if($statusp == 8)
																				{
																				?>
																				<td style="text-align: center;">
																					<span class="badge bg-info">No quedo</span>
																				</td>
																				<?php
																				}
																				?>
																				<?php
																				if($statusp == 9)
																				{
																				?>
																				<td style="text-align: center;">
																					<span class="badge bg-success">Recibido</span>
																				</td>
																				<?php
																				}
																				?>
																			</tr>
																		
																	<?php
																	}
																	?>
																		</tbody>
																	</table>
																	<?php
																}
																?>
															</div>
														</div>
													</div>
												</div>
											</div>								
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="aprobados">
							<div class="row">
								<div class="col-xl-12 col-xxl-12 d-flex">
									<div class="w-100">
										<div class="row">
											<div class="container-fluid p-0">
												<div class="row">
													<div class="col-xl-12">
														<div class="card">
															<div class="card-header pb-0">
																<h5 class="card-title mb-0">Notas</h5>
															</div>
															<div class="card-body" id="usr">
																<?php
																//include "../php/conexion";
																$query    = "SELECT * FROM notas WHERE statusp = '2' ORDER BY id DESC";
																$validar  = mysqli_query($conexion,$query);
																if(mysqli_num_rows($validar)>0)
																{
																	?>
																	<table class="table table-striped" style="width:100%" id="responsivo_aprobados">
																	<thead>
																		<tr>
																			<th class="col-md-2">Orden</th>
																			<th class="col-md-2">Cliente</th>
																			<th class="col-md-2">Producto</th>
																			<th class="col-md-2">Fecha de ingreso</th>
																			<th class="col-md-2">Notas</th>
																			<th class="col-md-2" style="text-align: center;">Estatus</th>

																		</tr>
																	</thead>
																	<tbody>
																	<?php
																	while ($extraido= mysqli_fetch_array($validar))
																	{
																		$count1++;
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
																		$dates 			= date_format($dates,'Y-m-d H:i');//date_format($date, 'Y-m-d H:i:s');
																		
																		$delivery_date	= $extraido['delivery_date']; 	
																		$statusp		= $extraido['statusp']; 	
																		
																		$query_2    	= "SELECT * FROM equipo WHERE id = $id_equipo";
																		$validar_2  	= mysqli_query($conexion,$query_2);
																		$extraido_2		= mysqli_fetch_array($validar_2);
																		$tipo			= $extraido_2['tipo']; 	
																		$marca			= $extraido_2['marca']; 	
																		$modelo			= $extraido_2['modelo']; 	
																		$ns_imei		= $extraido_2['ns_imei']; 
																		$pass			= $extraido_2['pass']; 

																		$query_user    = "SELECT * FROM users WHERE id='$id_user'";
																		$result_user   = mysqli_query($conexion,$query_user);
																		$extraido3     = mysqli_fetch_array($result_user);
																		$nombre        = $extraido3['nombre'];
																		$ap_paterno    = $extraido3['ap_paterno'];
																		$ap_materno    = $extraido3['ap_materno'];
																		$email         = $extraido3['email'];
																		$phone         = $extraido3['phone'];
																		//id 	date_create 	nombre 	ap_paterno 	ap_materno 	email 	code 	phone 	code2 	phone2 	token 	date_token 	avatar 	
																		/*
																			id 	tipo 	marca 	modelo 	ns_imei 	pass 	
																			$query_user = "INSERT INTO users (date_create,nombre,              ap_paterno,       ap_materno     ,email      ,code ,phone      ,code2,phone2     )
																										VALUES('$fecha'   ,'$id_nombre_cliente','$id_ap_paterno','$id_ap_materno','$id_email','+52','$id_tel_1','+52','$id_tel_2')";
																			$result_user = mysqli_query($conexion, $query_user);
																			$id_user = mysqli_insert_id ($conexion);


																			$query_equipo = "INSERT INTO equipo (	tipo                    ,marca       , modelo    ,ns_imei   ,pass)
																										VALUES('$id_tipo_dispositivo'   ,'$id_marca','$id_modelo','$id_imei','$id_pass')";
																			$result_equipo = mysqli_query($conexion, $query_equipo);
																			$id_equipo = mysqli_insert_id ($conexion);


																			$query_condiciones = "INSERT INTO condiciones (condiciones,	display, 	touch, 	ftid, 	carga, 	auricular, 	altavoz, 	wifi, 	bluetooth, 	frontal, 	trasera, 	senal, 	bloqueo, 	volumen, 	tornillos, 	flash, 	proximidad)
																										VALUES('$id_condiciones'   ,'$op_1','$op_2','$op_3','$op_4','$op_5','$op_6','$op_7','$op_8','$op_9','$op_10','$op_11','$op_12','$op_13','$op_14','$op_15','$op_16')";
																			$result_condiciones = mysqli_query($conexion, $query_condiciones);
																			$id_condi_result = mysqli_insert_id ($conexion);


																			$query_notas = "INSERT INTO notas (id_user, 	id_equipo, 	id_condiciones, 	cotizacion, 	anticipo, 	tipo_pago, 	txt_details, 	dates, statusp)
																										VALUES('$id_user','$id_equipo','$id_condi_result','$id_cotizacion','$id_anticipo','$id_pago','$id_notas','$fecha','2')";
																		*/
																		?>
																		
																			<tr>
																				<td>
																					<div class="col-md-12" style="display: inline-block;">
																						<div  class="col-md-2"   style="cursor: pointer;display: inline-block;">
																							<input type="checkbox" name="" id="count_input_all_<?php echo $count1;?>" onclick="add_check(<?php echo $count1;?>)">
																							<input type="hidden" name="" id="id_order_<?php echo $count1; ?>" value="<?php echo $id_nota?>">
																						</div>
																						<div class="col-md-4"  style="cursor: pointer;display: inline-block;">
																							<a href="nota_details?order=<?php echo $id_nota;?>"><?php echo $id_nota;?></a>
																						</div>
																						<div class="col-md-2" style="display: inline-block;"></div>
																						<div class="col-md-2"  style="cursor: pointer;display: inline-block;" >
																							<a onclick="reimprimir(<?php echo $id_nota;?>)" target="_blank">
																								<i class="align-middle me-2" data-feather="printer" ></i>
																							</a>
																						</div>
																					</div>
																				</td>
																				<td><?php echo $nombre." ".$ap_paterno." ".$ap_materno;?><br><?php echo $phone;?><br></td>
																				<td><?php echo $tipo;?><br><?php echo $marca;?><br><?php echo $modelo;?></td>
																				
																				
																				<td><?php echo $dates ;?></td>
																				<td><?php echo $txt_details ;?></td>
																				<?php
																				if($statusp == 0)
																				{
																				?>
																				<td style="text-align: center;">
																					<span class="badge bg-warning">Pendiente de prueba</span>
																				</td>
																				<?php
																				}
																				?>
																				<?php
																				if($statusp == 1)
																				{
																				?>
																				<td style="text-align: center;">
																					<span class="badge bg-primary">En proceso</span>
																				</td>
																				<?php
																				}
																				?>
																				<?php
																				if($statusp == 2)
																				{
																				?>
																				<td style="text-align: center;">
																					<span class="badge bg-primary">Pendiente</span>
																				</td>
																				<?php
																				}
																				?>
																				<?php
																				if($statusp == 3)
																				{
																				?>
																				<td style="text-align: center;">
																					<span class="badge bg-danger">Cancelado</span>
																				</td>
																				<?php
																				}
																				?>
																				<?php
																				if($statusp == 4)
																				{
																				?>
																				<td style="text-align: center;">
																					<span class="badge bg-secondary">Garantía</span>
																				</td>
																				<?php
																				}
																				?>
																				<?php
																				if($statusp == 5)
																				{
																				?>
																				<td style="text-align: center;">
																					<span class="badge bg-success">Entregado</span>
																				</td>
																				<?php
																				}
																				?>
																				<?php
																				if($statusp == 7)
																				{
																				?>
																				<td style="text-align: center;">
																					<span class="badge bg-info">Entregado</span>
																				</td>
																				<?php
																				}
																				?>
																				<?php
																				if($statusp == 8)
																				{
																				?>
																				<td style="text-align: center;">
																					<span class="badge bg-info">No quedo</span>
																				</td>
																				<?php
																				}
																				?>
																				<?php
																				if($statusp == 9)
																				{
																				?>
																				<td style="text-align: center;">
																					<span class="badge bg-success">Recibido</span>
																				</td>
																				<?php
																				}
																				?>
																			</tr>
																		
																	<?php
																	}
																	?>
																		</tbody>
																	</table>
																	<?php
																}
																?>
															</div>
														</div>
													</div>
												</div>
											</div>								
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</main>

			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-start">
							<p class="mb-0">
								<a href="index.html" class="text-muted"><strong>Repcel</strong></a> &copy;
							</p>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>

	<script src="js/app.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/datatables.js"></script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Datatables Responsive
			$("#responsivo_all").DataTable({
				responsive: true,
				order: [ 0, 'asc' ],
				stateSave: true,
				language: {
					url: '//cdn.datatables.net/plug-ins/1.11.4/i18n/es-mx.json'
				}
			});
			
		});
		
		document.addEventListener("DOMContentLoaded", function() {
			// Datatables Responsive
			$("#responsivo_En_proceso").DataTable({
				responsive: true,
				order: [ 0, 'asc' ],
				stateSave: true,
				language: {
					url: '//cdn.datatables.net/plug-ins/1.11.4/i18n/es-mx.json'
				}
			});
			
		});

		document.addEventListener("DOMContentLoaded", function() {
			// Datatables Responsive
			$("#responsivo_entregado").DataTable({
				responsive: true,
				order: [ 0, 'asc' ],
				stateSave: true,
				language: {
					url: '//cdn.datatables.net/plug-ins/1.11.4/i18n/es-mx.json'
				}
			});
		});
		document.addEventListener("DOMContentLoaded", function() {
			// Datatables Responsive
			$("#responsivo_pendientes").DataTable({
				responsive: true,
				order: [ 0, 'asc' ],
				stateSave: true,
				language: {
					url: '//cdn.datatables.net/plug-ins/1.11.4/i18n/es-mx.json'
				}
			});
		});
		document.addEventListener("DOMContentLoaded", function() {
			// Datatables Responsive
			$("#responsivo_aprobados").DataTable({
				responsive: true,
				order: [ 0, 'asc' ],
				stateSave: true,
				language: {
					url: '//cdn.datatables.net/plug-ins/1.11.4/i18n/es-mx.json'
				}
			});
		});
	</script>
    

</body>
<?php
}
else{
	echo'
		<script>
			window.location = "index";
		</script>
		';
}
?>
</html>