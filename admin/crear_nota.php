<?php
session_start();
$datezone=date_default_timezone_get();
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

	<link rel="canonical" href="https://demo.adminkit.io/ui-general.html"/>
	<title>Repcel</title>

	<link href="css/app.css?v=1.3" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a38c16a07e.js"></script>
	

	<script src="test/test_helpers.js" type="text/javascript"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="js/jquery.timeago.js"></script>

	<script>
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
                url: 'print_email.php',
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
                url: 'admin/shipping_email.php',
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
                url: 'php/upload_file_drop.php',
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
                url: '../php/sendproof.php',
                contentType: false,
                processData: false,
                data: form_data,
                success:function(response) {
                    document.getElementById("button"+id).innerHTML="Sent";
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
    </script>
	<script type="text/javascript">
	
        function Delete(id)
        {
            var form_data = new FormData();
            form_data.append('id',id);
            $.ajax({
                type: 'POST',
                url: 'priv/delete_usr.php',
                contentType: false,
                processData: false,
                data: form_data,
                success:function(response) {
                       $("#usr").load(location.href + " #usr>*", "");
					   document.getElementById('info').style.visibility = "hidden";
                },
                onFailure: function(response){
                    alert("fail");
                }
            });
        }
        function Pause(id,num)
        {
            var form_data = new FormData(); 
            form_data.append('num',num);
            form_data.append('id_user',id);
            $.ajax({
                type: 'POST',
                url: 'priv/pause.php',
                contentType: false,
                processData: false,
                data: form_data,
                success:function(response) {
                       $("#usr").load(location.href + " #usr>*", "");
					   
                },
                onFailure: function(response){
                    alert("fail");
                }
            });
        }
        function imprimir()
        {
            
            var id_nombre_cliente = document.getElementById("id_nombre_cliente").value;
            var id_ap_paterno = document.getElementById("id_ap_paterno").value;
            var id_ap_materno = document.getElementById("id_ap_materno").value;
            var id_email = document.getElementById("id_email").value;
            var id_tel_1 = document.getElementById("id_tel_1").value;
            var id_tel_2 = document.getElementById("id_tel_2").value;
            var id_tipo_dispositivo = document.getElementById("id_tipo_dispositivo").value;
            var id_marca = document.getElementById("id_marca").value;
            
            var id_modelo = document.getElementById("id_modelo").value;
            var id_imei = document.getElementById("id_imei").value;
            var id_pass = document.getElementById("id_pass").value;
            var id_condiciones = document.getElementById("id_condiciones").value;

            var id_op_1 = document.getElementById("id_op_1").value;
            var id_op_2 = document.getElementById("id_op_2").value;
            var id_op_3 = document.getElementById("id_op_3").value;
            var id_op_4 = document.getElementById("id_op_4").value;
            var id_op_5 = document.getElementById("id_op_5").value;
            var id_op_6 = document.getElementById("id_op_6").value;
            var id_op_7 = document.getElementById("id_op_7").value;
            var id_op_8 = document.getElementById("id_op_8").value;
            var id_op_9 = document.getElementById("id_op_9").value;
            var id_op_10 = document.getElementById("id_op_10").value;
            var id_op_11 = document.getElementById("id_op_11").value;
            var id_op_12 = document.getElementById("id_op_12").value;
            var id_op_13 = document.getElementById("id_op_13").value;
            var id_op_14 = document.getElementById("id_op_14").value;
            var id_op_15 = document.getElementById("id_op_15").value;
            var id_op_16 = document.getElementById("id_op_16").value;

            var id_cotizacion = document.getElementById("id_cotizacion").value;
            var id_anticipo = document.getElementById("id_anticipo").value;
            var id_pago = document.getElementById("id_pago").value;
            var id_notas = document.getElementById("id_notas").value;


            var form_data = new FormData(); 
            form_data.append('id_nombre_cliente',id_nombre_cliente);
            form_data.append('id_ap_paterno',id_ap_paterno);
            form_data.append('id_ap_materno',id_ap_materno);
            form_data.append('id_email',id_email);
            form_data.append('id_tel_1',id_tel_1);
            form_data.append('id_tel_2',id_tel_2);
            form_data.append('id_tipo_dispositivo',id_tipo_dispositivo);
            form_data.append('id_marca',id_marca);

            form_data.append('id_modelo',id_modelo);
            form_data.append('id_imei',id_imei);
            form_data.append('id_pass',id_pass);
            form_data.append('id_condiciones',id_condiciones);

            form_data.append('id_op_1',id_op_1);
            form_data.append('id_op_2',id_op_2);
            form_data.append('id_op_3',id_op_3);
            form_data.append('id_op_4',id_op_4);
            form_data.append('id_op_5',id_op_5);
            form_data.append('id_op_6',id_op_6);
            form_data.append('id_op_7',id_op_7);
            form_data.append('id_op_8',id_op_8);
            form_data.append('id_op_9',id_op_9);
            form_data.append('id_op_10',id_op_10);
            form_data.append('id_op_11',id_op_11);
            form_data.append('id_op_12',id_op_12);
            form_data.append('id_op_13',id_op_13);
            form_data.append('id_op_14',id_op_14);
            form_data.append('id_op_15',id_op_15);
            form_data.append('id_op_16',id_op_16);

            form_data.append('id_cotizacion',id_cotizacion);
            form_data.append('id_anticipo',id_anticipo);
            form_data.append('id_pago',id_pago);
            form_data.append('id_notas',id_notas);
            $.ajax({
                type: 'POST',
                url: 'nota.php',
                contentType: false,
                processData: false,
                data: form_data,
                success:function(response) {
                       $("#usr").load(location.href + " #usr>*", "");
                },
                onFailure: function(response){
                    alert("fail");
                }
            });
        }
		function close_info(){
			document.getElementById('info').style.visibility = "hidden";
		} 
		function display_info(id_usr)
		{
			document.getElementById('info').style.visibility = "visible";
			/*document.getElementById('loading').style.visibility = "visible";
            document.getElementById('loading').style.display = "block";
			document.getElementById('bodyinfo').style.visibility = "hidden";
            document.getElementById('bodyinfo').style.display = "none";*/
			var form_data = new FormData(); 
            form_data.append('id_user',id_usr);
            $.ajax({
                type: 'POST',
                url: 'priv/data_usr.php',
                contentType: false,
                processData: false,
                data: form_data,
                success:function(response) {
					//document.getElementById('bodyinfo').style.visibility = "visible";
					//document.getElementById('bodyinfo').style.display = "block";
					//document.getElementById('loading').style.visibility = "hidden";
					//document.getElementById('loading').style.display = "none";
					$("#bodyinfo").load(location.href + " #bodyinfo>*", function(){
						$(".timeago").timeago();
						//setTimeout(function(){$(".timeago").timeago();}, 1500);
					});
					
                },
                onFailure: function(response){
                    alert("fail");
                }
            });
		}
		function refresh_info()
		{
			$("#info").load(location.href + " #info>*", "");
		}
		function Reset_pswd(id_usr)
		{
			var form_data = new FormData(); 
            form_data.append('id_user',id_usr);
            $.ajax({
                type: 'POST',
                url: 'priv/reset_usr_pswd_manual.php',
                contentType: false,
                processData: false,
                data: form_data,
                success:function(response) {
					document.getElementById("txt_reset").textContent="Done!";
					//$("#txt_reset").val.("Done!");
                },
                onFailure: function(response){
                    alert("fail");
                }
            });
		}
    </script>
    <style>
        input[type=number] { 
            -moz-appearance:textfield; 
        }
    </style>
</head>

<body>

	<div class="wrapper">
		<nav id="sidebar" class="sidebar">
			<div class="sidebar-content js-simplebar">
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
						<a class="sidebar-link" href="cotizaciones">
							<i class="align-middle" data-feather="shopping-bag"></i> <span class="align-middle">Cotizaciones</span>
						</a>
					</li>
					<?php
					if($_SESSION['tipe_admi']  == 10)
					{
					?> 
					<li class="sidebar-item">
						<a class="sidebar-link " href="customers">
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

				<!--
				<form class="d-none d-sm-inline-block">
					<div class="input-group input-group-navbar">
						<input type="text" class="form-control" placeholder="Search…" aria-label="Search">
						<button class="btn" type="button">
							<i class="align-middle" data-feather="search"></i>
						</button>
					</div>
				</form>-->

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
								<div class="position-relative">
									<i class="align-middle" data-feather="bell"></i>
									<!--<span class="indicator">4</span>-->
								</div>
							</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
								<i class="align-middle" data-feather="settings"></i>
							</a>
							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
								<!--<img src="img/avatars/avatar.jpg" class="avatar img-fluid rounded me-1" alt="<?php echo $_SESSION['e_admi'];?>" /> -->
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
								<a class="dropdown-item" href="settings"><i class="align-middle me-1" data-feather="user"></i> Settings</a>
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
							<h3>Clientes</h3>
						</div>
					</div>
					<?php
						if(isset($_SESSION['email_admi']))
						{
						?>
                        <div class="col-md-12">
							<div class="card">
								<div class="card-header" style="text-align: center;">
									<h5 class="card-title">Nota</h5>
								</div>
								<div class="card-body">
									<h6 class="card-subtitle text-muted" style="padding-bottom: 1.25rem;">Datos del cliente</h6>
									<form action="nota.php" method="get" target="_blank">
                                        <div class="row">
											<div class="col-md-4">
                                                <label for="validationDefault01" class="form-label">Nombre</label>
                                                <input type="text" class="form-control" id="id_nombre_cliente" name="id_nombre_cliente" required>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="validationDefault02" class="form-label">Apellido Paterno</label>
                                                <input type="text" class="form-control" id="id_ap_paterno" name="id_ap_paterno" required>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="validationDefault02" class="form-label">Apellido Materno</label>
                                                <input type="text" class="form-control" id="id_ap_materno" name="id_ap_materno" placeholder="(Opcional)">
                                            </div>
										</div>
										<div class="row">
											<div class="mb-3 col-md-4">
												<label class="form-label" for="inputEmail4">Email</label>
												<input type="email" class="form-control" id="id_email" name="id_email">
											</div>
                                            <div class="mb-3 col-md-4">
												<label class="form-label" for="inputEmail4">Telefono 1</label>
												<input type="number" class="form-control" id="id_tel_1" name="id_tel_1">
											</div>
                                            <div class="mb-3 col-md-4">
												<label class="form-label" for="inputEmail4">Telefono 2</label>
												<input type="number" class="form-control" id="id_tel_2" name="id_tel_2">
											</div>
										</div>
                                        <h6 class="card-subtitle text-muted" style="padding: 1.25rem 0rem;text-align: center;">Información del Equipo</h6>
                                        <div class="row">
                                            <div class="row">
                                                <div class="mb-3 col-md-4">
                                                    <label class="form-label" for="inputState">Tipo de Equipo</label>
                                                    <select id="id_tipo_dispositivo" class="form-control" name="id_tipo_dispositivo">
                                                        <option></option>
                                                        <option>Accesorio de consola</option>
                                                        <option>Celular</option>
                                                        <option>Computadora</option>
                                                        <option>Consola</option>
                                                        <option>Laptop</option>
                                                        <option>Tablet/iPad</option>                                                       
                                                    </select>
                                                </div>
                                                <div class="mb-3 col-md-3">
                                                    <label class="form-label" for="inputCity">Marca</label>
                                                    <input type="text" class="form-control" id="id_marca" name="id_marca" onkeyup="this.value = this.value.toUpperCase();">
                                                </div>
                                                <div class="mb-3 col-md-2">
                                                    <label class="form-label" for="inputZip">Modelo</label>
                                                    <input type="text" class="form-control" id="id_modelo" name="id_modelo" onkeyup="this.value = this.value.toUpperCase();">
                                                </div>
                                                <div class="mb-3 col-md-3">
                                                    <label class="form-label" for="inputCity">N/S o IMEI</label>
                                                    <input type="text" class="form-control" id="id_imei" name="id_imei">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="mb-3 col-md-6">
                                                    <label class="form-label" for="inputPassword4">Contraseña</label>
                                                    <input type="text" class="form-control" id="id_pass" name="id_pass">
                                                </div>
                                            </div>
                                            <h6 class="card-subtitle text-muted" style="padding: 1.25rem 0rem;text-align: center;">Condiciones del Equipo</h6>
                                            <div class="row">
                                                <div class="mb-3 col-md-4">
                                                    <label class="form-label" for="inputState">Condiciones de ingreso del Equipo</label>
                                                    <select id="id_condiciones" class="form-control" name="id_condiciones">
                                                        <option></option>
                                                        <option>Apagado</option>
                                                        <option>Encendido</option>
                                                        <option>Estrellado</option>
                                                        <option>Mojado (No aplica garantía)</option>                                                  
                                                    </select>
                                                </div>
                                                <div class="mb-3 col-md-8">
                                                    <label class="form-label" for="inputState">Detalles de recepción del equipo (Marca las opciones de los componentes funcionales)</label>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label class="form-check form-check-inline" style="width: 100%;">
                                                                <input class="form-check-input" type="checkbox" id="id_op_1" name="id_op_1">
                                                                <span class="form-check-label">
                                                                    Display
                                                                </span>
                                                            </label>
                                                            <label class="form-check form-check-inline" style="width: 100%;">
                                                                <input class="form-check-input" type="checkbox" id="id_op_2" name="id_op_2">
                                                                <span class="form-check-label">
                                                                    Touch
                                                                </span>
                                                            </label>
                                                            <label class="form-check form-check-inline" style="width: 100%;">
                                                                <input class="form-check-input" type="checkbox" id="id_op_3" name="id_op_3">
                                                                <span class="form-check-label">
                                                                    Face ID/ Touch ID
                                                                </span>
                                                            </label>
                                                            <label class="form-check form-check-inline" style="width: 100%;">
                                                                <input class="form-check-input" type="checkbox" id="id_op_4" name="id_op_4">
                                                                <span class="form-check-label">
                                                                    Carga
                                                                </span>
                                                            </label>
                                                            <label class="form-check form-check-inline" style="width: 100%;">
                                                                <input class="form-check-input" type="checkbox" id="id_op_5" name="id_op_5">
                                                                <span class="form-check-label">
                                                                    Bocina auricular
                                                                </span>
                                                            </label>
                                                            <label class="form-check form-check-inline" style="width: 100%;">
                                                                <input class="form-check-input" type="checkbox" id="id_op_6" name="id_op_6">
                                                                <span class="form-check-label">
                                                                    Bocina altavoz
                                                                </span>
                                                            </label>
                                                            <label class="form-check form-check-inline" style="width: 100%;">
                                                                <input class="form-check-input" type="checkbox" id="id_op_7" name="id_op_7">
                                                                <span class="form-check-label">
                                                                    Wifi
                                                                </span>
                                                            </label>
                                                            <label class="form-check form-check-inline" style="width: 100%;">
                                                                <input class="form-check-input" type="checkbox" id="id_op_8" name="id_op_8">
                                                                <span class="form-check-label">
                                                                    Bluetooth
                                                                </span>
                                                            </label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="form-check form-check-inline" style="width: 100%;">
                                                                <input class="form-check-input" type="checkbox" id="id_op_9" name="id_op_9">
                                                                <span class="form-check-label">
                                                                    Cámara frontal
                                                                </span>
                                                            </label>
                                                            <label class="form-check form-check-inline" style="width: 100%;">
                                                                <input class="form-check-input" type="checkbox" id="id_op_10" name="id_op_10">
                                                                <span class="form-check-label">
                                                                    Camara trasera
                                                                </span>
                                                            </label>
                                                            <label class="form-check form-check-inline" style="width: 100%;">
                                                                <input class="form-check-input" type="checkbox" id="id_op_11" name="id_op_11">
                                                                <span class="form-check-label">
                                                                    Señal
                                                                </span>
                                                            </label>
                                                            <label class="form-check form-check-inline" style="width: 100%;">
                                                                <input class="form-check-input" type="checkbox" id="id_op_12" name="id_op_12">
                                                                <span class="form-check-label">
                                                                    Botón de bloqueo
                                                                </span>
                                                            </label>
                                                            <label class="form-check form-check-inline" style="width: 100%;">
                                                                <input class="form-check-input" type="checkbox" id="id_op_13" name="id_op_13">
                                                                <span class="form-check-label">
                                                                    Botones de volumen
                                                                </span>
                                                            </label>
                                                            <label class="form-check form-check-inline" style="width: 100%;">
                                                                <input class="form-check-input" type="checkbox" id="id_op_14" name="id_op_14">
                                                                <span class="form-check-label">
                                                                    Tornillos
                                                                </span>
                                                            </label>
                                                            <label class="form-check form-check-inline" style="width: 100%;">
                                                                <input class="form-check-input" type="checkbox" id="id_op_15" name="id_op_15">
                                                                <span class="form-check-label">
                                                                    Flash
                                                                </span>
                                                            </label>
                                                            <label class="form-check form-check-inline" style="width: 100%;">
                                                                <input class="form-check-input" type="checkbox" id="id_op_16" name="id_op_16">
                                                                <span class="form-check-label">
                                                                    Sensor de proximidad
                                                                </span>
                                                            </label>
                                                        </div>
                                                    </div>                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <h6 class="card-subtitle text-muted" style="padding: 1.25rem 0rem;text-align: center;">Cotización previa</h6>
                                        <div class="row">
                                            <div class="row">
                                                <div class="mb-3 col-md-2"  style="margin: auto;">
                                                    <div class="input-group">
                                                        <label class="form-label" for="inputCity">Cotización</label>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text">$</span>
                                                            <input type="number" class="form-control" id="id_cotizacion" name="id_cotizacion" value="0">
                                                            <span class="input-group-text">.00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3 col-md-2"  style="margin: auto;">
                                                    <div class="input-group">
                                                        <label class="form-label" for="inputCity">Anticipo</label>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text">$</span>
                                                            <input type="number" class="form-control" id="id_anticipo" name="id_anticipo" value="0">
                                                            <span class="input-group-text">.00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3 col-md-2" style="margin-left: auto;margin-right: auto;">
                                                    <label class="form-label" for="inputState">Tipo de pago</label>
                                                    <select id="id_pago" class="form-control" name="id_pago">
                                                        <option></option>
                                                        <option>Efectivo</option>
                                                        <option>Tarjeta crédito / débito</option>
                                                        <option>Transferecia /depósito</option>                                                     
                                                    </select>
                                                </div>
                                            </div>
                                            <h6 class="card-subtitle text-muted" style="padding: 1.25rem 0rem;text-align: center;">Diagnóstico</h6>
                                        <div class="row">
                                            <div class="row">
                                                <div class="card-header">
                                                    <h5 class="card-title mb-0">Notas</h5>
                                                </div>
                                                <div class="card-body">
                                                    <textarea class="form-control" rows="2" placeholder="Notas" id="id_notas" name="id_notas"></textarea>
                                                </div>
                                            </div>
                                        </div>
										<button type="submit" class="btn btn-primary" >Imprimir</button>
									</form>
								</div>
							</div>
						</div>
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

	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Pie chart
			new Chart(document.getElementById("chartjs-dashboard-pie"), {
				type: "pie",
				data: {
					labels: ["Chrome", "Firefox", "IE"],
					datasets: [{
						data: [4306, 3801, 1689],
						backgroundColor: [
							window.theme.primary,
							window.theme.warning,
							window.theme.danger
						],
						borderWidth: 5
					}]
				},
				options: {
					responsive: !window.MSInputMethodContext,
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					cutoutPercentage: 75
				}
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			document.getElementById("datetimepicker-dashboard").flatpickr({
				inline: true,
				prevArrow: "<span title=\"Previous month\">&laquo;</span>",
				nextArrow: "<span title=\"Next month\">&raquo;</span>",
			});
		});
	</script>
	<script>
	$(document).ready(function(){
			$(".timeago").timeago();
	});
	</script>
</body>

</html>