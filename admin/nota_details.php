<?php
session_start();
$id_orden = $_GET['order'];
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
						<a class="sidebar-link" href="orders">
							<i class="align-middle" data-feather="check-circle"></i> <span class="align-middle">Ordenes</span>
						</a>
					</li>
					
					<li class="sidebar-item">
						<a class="sidebar-link" href="customers">
							<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Clientes</span>
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
						<a class="sidebar-link" href="sales">
							<i class="align-middle" data-feather="bar-chart-2"></i> <span class="align-middle">Ventas</span>
						</a>
					</li>
					<?php
					}
					?>
					<li class="sidebar-item">
						<a class="sidebar-link" href="settings">
							<i class="align-middle" data-feather="settings"></i> <span class="align-middle">Configuración</span>
						</a>
					</li>
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
								<a class="dropdown-item" href="settings" style="display: none;visibility: hidden;"><i class="align-middle me-1" data-feather="user"></i> Settings</a>
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
							<h3>Ordenes</h3>
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
	<!--
		<br>    
		<h4 style="text-align: center;">Políticas de recepción y garantia de equipos</h4>
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
	-->
	<script src="js/app.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

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