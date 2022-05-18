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
	<title>Repcel</title>
	<link href="css/app.css?v=1.0" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a38c16a07e.js"></script>
	
<!--
	<script src="test/test_helpers.js" type="text/javascript"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="js/jquery.timeago.js"></script>
-->
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
					<li class="sidebar-item">
						<a class="sidebar-link" href="notas">
							<i class="align-middle" data-feather="check-circle"></i> <span class="align-middle">Notas</span>
						</a>
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="tienda">
							<i class="align-middle" data-feather="shopping-bag"></i> <span class="align-middle">Tienda</span>
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
					<li class="sidebar-item active">
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
									<span class="indicator"></span>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="alertsDropdown" style="display: none;visibility: hidden;">
								<div class="dropdown-menu-header">
									4 New Notifications
								</div>
								<div class="list-group">
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-danger" data-feather="alert-circle"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Update completed</div>
												<div class="text-muted small mt-1">Restart server 12 to complete the update.</div>
												<div class="text-muted small mt-1">30m ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-warning" data-feather="bell"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Lorem ipsum</div>
												<div class="text-muted small mt-1">Aliquam ex eros, imperdiet vulputate hendrerit et.</div>
												<div class="text-muted small mt-1">2h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-primary" data-feather="home"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Login from 192.186.1.8</div>
												<div class="text-muted small mt-1">5h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-success" data-feather="user-plus"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">New connection</div>
												<div class="text-muted small mt-1">Christina accepted your request.</div>
												<div class="text-muted small mt-1">14h ago</div>
											</div>
										</div>
									</a>
								</div>
								<div class="dropdown-menu-footer">
									<a href="#" class="text-muted">Show all notifications</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown" style="display: none;visibility: hidden;">
							<a class="nav-icon dropdown-toggle" href="#" id="messagesDropdown" data-bs-toggle="dropdown">
								<div class="position-relative">
									<i class="align-middle" data-feather="message-square"></i>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="messagesDropdown">
								<div class="dropdown-menu-header">
									<div class="position-relative">
										4 New Messages
									</div>
								</div>
								<div class="list-group">
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-5.jpg" class="avatar img-fluid rounded-circle" alt="Vanessa Tucker">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">Vanessa Tucker</div>
												<div class="text-muted small mt-1">Nam pretium turpis et arcu. Duis arcu tortor.</div>
												<div class="text-muted small mt-1">15m ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-2.jpg" class="avatar img-fluid rounded-circle" alt="William Harris">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">William Harris</div>
												<div class="text-muted small mt-1">Curabitur ligula sapien euismod vitae.</div>
												<div class="text-muted small mt-1">2h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-4.jpg" class="avatar img-fluid rounded-circle" alt="Christina Mason">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">Christina Mason</div>
												<div class="text-muted small mt-1">Pellentesque auctor neque nec urna.</div>
												<div class="text-muted small mt-1">4h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-3.jpg" class="avatar img-fluid rounded-circle" alt="Sharon Lessman">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">Sharon Lessman</div>
												<div class="text-muted small mt-1">Aenean tellus metus, bibendum sed, posuere ac, mattis non.</div>
												<div class="text-muted small mt-1">5h ago</div>
											</div>
										</div>
									</a>
								</div>
								<div class="dropdown-menu-footer">
									<a href="#" class="text-muted">Show all messages</a>
								</div>
							</div>
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

						<!--<div class="col-auto ms-auto text-end mt-n1">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb bg-transparent p-0 mt-1 mb-0">
									<li class="breadcrumb-item"><a href="#">Admin</a></li>
									<li class="breadcrumb-item active" aria-current="page">Orders</li>
								</ol>
							</nav>
						</div>-->
					</div>
					<?php
						if(isset($_SESSION['email_admi']))
						{
						?>
					<div class="row">
						<div class="col-xl-12 col-xxl-12 d-flex">
							<div class="w-100">
								<div class="row">
								<div class="container-fluid p-0">
									<div class="row">
										
										<div class="modal fade show" id="sizedModalMd" tabindex="-1" style="padding-right: 19px;visibility: hidden;display: none;" aria-modal="true" role="dialog">
											<div class="modal-dialog modal-md" role="document">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title">Medium modal</h5>
														<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
													</div>
													<div class="modal-body m-3">
														<p class="mb-0">Use Bootstrap’s JavaScript modal plugin to add dialogs to your site for lightboxes, user
															notifications, or completely custom content.</p>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
														<button type="button" class="btn btn-primary">Save changes</button>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-8">
											<div class="card">
												<div class="card-header pb-0">
													<h5 class="card-title mb-0">Clientes</h5>
												</div>
												<div class="card-body" id="usr">
													<?php
													include "../php/conexion.php";
													$validar  = mysqli_query($conexion,"SELECT * FROM users");
                									if(mysqli_num_rows($validar)>0)
													{
														?>
														<table class="table table-striped" style="width:100%">
														<thead>
															<tr>
																<th class="col-md-2">Nombre</th>
																<!--<th class="col-md-2">Correo</th>-->
																<th class="col-md-2">Telefono</th>
																<th class="col-md-2" style="text-align: center;">Estatus</th>
															</tr>
														</thead>
														<tbody>
														<?php
														while ($extraido= mysqli_fetch_array($validar))
                    									{
															$id          	= $extraido['id'];
															$date_create 	= $extraido ['date_create'];
															$nombre     	= $extraido ['nombre'];
															$ap_paterno     = $extraido['ap_paterno'];
															$ap_materno     = $extraido['ap_materno'];
															$email       	= $extraido ['email'];
															$code      		= $extraido['code'];
															$phone  		= $extraido['phone'];
															$code2        	= $extraido['code2'];
															$phone2       	= $extraido ['phone2'];
															$token      	= $extraido['token'];
															$date_token  	= $extraido['date_token'];
															$avatar        	= $extraido['avatar'];
															?>
															
																<tr>
																	<?php if($_SESSION['e_admi'] || $_SESSION['d_admi'] || $_SESSION['tipe_admi']  == 10)
																	{
																		?>
																		<td onclick="display_info(<?php echo $id;?>)" style="cursor: pointer;"><?php
																		if($temporal==1){
																			echo "Guest";
																		} else
																		{
																			echo $nombre ;
																		}?></td>
																		<?php
																	}
																	else{
																		?>
																		<td><?php
																		if($usrname==""){
																			echo "Guest";
																		} else
																		{
																			echo $nombre ;
																		}?></td>
																		<?php
																	}
																?>
																		
																		<!--<td><?php // echo $email ;?></td> -->
																		<td><?php echo $code.$phone ;?></td>
																	<!--<td>
																		<a type="button" onclick="Pause(<?php // echo $id;?>,0)">
																			<span class="badge bg-success">Active</span>
																		</a>
																	</td>-->
																	<?php
																	/*
																		if( $_SESSION['d_admi'] == 1 || $_SESSION['tipe_admi'] == 10)
																		{
																		?>
																			<!--
																			<td style="text-align: center;"><a type="button" onclick="Delete(<?php echo $id;?>)"><i style="color: crimson;" class='fas fa-times-circle'></i></a> </td>
																			-->
																		<?php
																		}
																	*/
																	?>
																	<?php
																	if( $_SESSION['e_admi'] || $_SESSION['tipe_admi'] == 10)
																	{
																	?>
																	<td style="text-align: center;">
																		<?php
																		if($admi==1)
																		{
																		?>
																			<a type="button" onclick="Pause(<?php echo $id;?>,0)">
																				<span class="badge bg-success">Activo</span>
																			</a>
																		<?php
																		}else{
																		?>
																			<a type="button" onclick="Pause(<?php echo $id;?>,1)">
																				<span class="badge bg-warning">Inactivo</span>
																			</a>
																		<?php
																		}
																		?>
																	</td>
																	<?php
																	}
																	else{
																		?>
																		<td style="text-align: center;">
																		<?php
																		if($admi==1)
																		{
																		?>
																				<span class="badge bg-success">Activo</span>
																		<?php
																		}else{
																		?>
																				<span class="badge bg-warning">Inactivo</span>
																		<?php
																		}
																		?>
																	</td>
																		<?php
																	}
																	?>
																</tr>
															
													<?php
														}
														?>
															
															<!--
																<tr>
																	<td>Ashton Cox</td>
																	<td>Levitz Furniture</td>
																	<td>ashton@cox.com</td>
																	<td><span class="badge bg-success">Active</span></td>
																</tr>
																<tr>
																	<td>Sonya Frost</td>
																	<td>Child World</td>
																	<td>sonya@frost.com</td>
																	<td><span class="badge bg-danger">Deleted</span></td>
																</tr>
																<tr>
																	<td>Jena Gaines</td>
																	<td>Helping Hand</td>
																	<td>jena@gaines.com</td>
																	<td><span class="badge bg-warning">Inactive</span></td>
																</tr>
															-->
															</tbody>
														</table>
														<?php
													}
													?>
												</div>
											</div>
										</div>
										<div class="col-xl-4" style="visibility: hidden;" id="info">
											<div class="card">
												<div class="card-header">
													<div class="card-actions float-end">
														<div class="dropdown show">
															<a onclick="close_info()">
																<i class="align-middle me-2 fas fa-fw fa-window-close"></i>
															</a>

															<!--<div class="dropdown-menu dropdown-menu-end">
																<a class="dropdown-item" href="#">Action</a>
																<a class="dropdown-item" href="#">Another action</a>
																<a class="dropdown-item" href="#">Something else here</a>
															</div>-->
														</div>
													</div>
												</div>
												<div class="card-body" id="loading" style="visibility: hidden;display:none">
													<div class="mb-2 text-center">
														<div class="spinner-border text-dark me-2" role="status">
															<span class="visually-hidden">Loading...</span>
														</div>
													</div>
												</div>
												<div class="card-body" id="bodyinfo">
													<div class="row g-0"><!--
														<div>
															<h5 class="card-title mb-0" style="text-align: center;"><strong><?php // echo $_SESSION['data_name']; ?></strong></h5>
														</div>-->
														<?php
														if(isset($_SESSION['data_avatar']) && $_SESSION['data_avatar'] != null)
														{
														?>
															<img src="data:image/png;base64,<?php echo base64_encode($_SESSION['data_avatar']);?>" class="rounded-circle mt-2" alt="<?php echo $_SESSION['data_name'];?>" width="64" height="64" style="height: 100%;">
														<?php
														}else
														{
														?>
															<img src="usr.png" class="rounded-circle mt-2" alt="<?php echo $_SESSION['data_name'];?>" width="64" height="64" style="height: 100%;">
														<?php
														}
														?>
														
													</div>
													
													<span id="prog_string"></span>
													<table class="table table-sm mt-2 mb-4">
														<tbody>
															<tr>
																<th>Nombre</th>
																<td><?php echo $_SESSION['data_name'];?></td>
															</tr>
															
															<tr>
																<th>Correo</th>
																<td><?php echo $_SESSION['data_email'];?></td>
															</tr>
															<tr>
																<th>Telefono</th>
																<td><?php echo  $_SESSION['data_code'].$_SESSION['data_phone'];?></td>
															</tr>
															<tr>
																<th>Registrado desde</th>
																<td><?php echo $_SESSION['data_date_create'];?></td>
															</tr>
															<tr>
																<th>Direccion principal</th>
																<td> 
																	<?php 
																	$id=$_SESSION['data_id'];
																	$query_address  = "SELECT * FROM address_t WHERE id_user ='$id' AND default_address='1'";
																	$result_address = mysqli_query($conexion,$query_address);
																	if(mysqli_num_rows($result_address)>0)
																	{
																		$extraido3      = mysqli_fetch_array($result_address);
																		$country        = $extraido3['country'];
																		$full_name      = $extraido3['full_name'];
																		$company        = $extraido3['company'];
																		$street_address1= $extraido3['street_address1'];
																		$street_address2= $extraido3['street_address2'];
																		$city           = $extraido3['city'];
																		$statedir       = $extraido3['statedir'];
																		$zip_code       = $extraido3['zip_code'];
																		
																		echo $street_address1." ".$street_address2;?><br><?php echo $city.", ".$statedir." ".$zip_code;?><br>
																	<?php
																	}
																	else{
																		echo "";
																		echo "";
																	}
																	?>
																</td>
															</tr>
															<tr>
																<th>estatus</th>
																<td>
																<?php
																		if($_SESSION['data_admi'] == 1)
																		{
																		?>
																				<span class="badge bg-success">Active</span>
																		<?php
																		}else{
																		?>
																				<span class="badge bg-warning">Inactive</span>
																		<?php
																		}
																		?>
																</td>
															</tr>
															<tr>
																<th>Ayuda</th>
																<td>
																	<a style="color: #3b7ddd;" id="txt_reset" onclick="Reset_pswd(<?php echo $id;?>)">Cambiar contraseña</a>
																</td>
															</tr>
															<?php if($_SESSION['d_admi'] || $_SESSION['tipe_admi']  == 10)
															{
																?>
																<tr>
															    <th>Eliminar</th>
																	<td style="text-align: left;">
																		<a type="button" onclick="Delete(<?php echo $id;?>)"><i style="color: crimson;" class='fas fa-trash-alt'></i></a>
																	</td>
																</tr>
																<?php
															}
															?>
															
														</tbody>
													</table>
													<div class="col-sm-9 col-xl-12 col-xxl-9" style="visibility: hidden;display: none;">
														<strong>About me</strong>
														<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
															magna aliqua.</p>
													</div>
													<strong>Actividad</strong>

													<ul class="timeline mt-2 mb-0">
													<?php
													include "../php/conexion.php";
													$id=$_SESSION['data_id'];
													$query    = "SELECT * FROM orders WHERE  id_user  = '$id' ORDER BY dates DESC";
													$result = mysqli_query($conexion,$query);
													if(mysqli_num_rows($result)>0)
													{
														while ($extraido= mysqli_fetch_array($result))
														{
															$id            = $extraido['id'];
															$id_user       = $extraido ['id_user'];
															$width_inches  = $extraido['width_inches'];
															$height_inches = $extraido ['height_inches'];
															$price         = $extraido['price'];
															$tipe          = $extraido ['tipe'];
															$quantity      = $extraido['quantity'];
															$id_images     = $extraido ['id_images'];
															$txt_details   = $extraido['txt_details'];
															$date          = $extraido['dates'];
															$statusp       = $extraido['statusp'];
															$id_address    = $extraido['id_address'];
															?>
															<li class="timeline-item">
																<strong>Order</strong>
																
																<span class="float-end text-muted text-sm">
																	<?php
																	$date=date_create($date);//"Y/m/d H:i:s
																	$date1=date_format($date,"Y-m-d");
																	$date2=date_format($date,"H:i:s");
																	$datef=$date1."T".$date2;
																	
																	?>
																	<time class="timeago" datetime="<?php echo $datef;?>"><?php echo $datef;?></time>
																</span>
																<p><?php echo $width_inches."\" x ".$height_inches."\" ".$tipe."&nbsp;&nbsp;&nbsp; Qty: ". $quantity." ";?></p>
															</li>
															
															<?php
														}
													}
														?>
														<!--
															<li class="timeline-item">
																<strong>Signed out</strong>
																<span class="float-end text-muted text-sm">
																
																</span>
																<p>Nam pretium turpis et arcu. Duis arcu tortor, suscipit...</p>
															</li>
															<li class="timeline-item">
																<strong>Created invoice #1204</strong>
																<span class="float-end text-muted text-sm">2h ago</span>
																<p>Sed aliquam ultrices mauris. Integer ante arcu...</p>
															</li>
															<li class="timeline-item">
																<strong>Discarded invoice #1147</strong>
																<span class="float-end text-muted text-sm">3h ago</span>
																<p>Nam pretium turpis et arcu. Duis arcu tortor, suscipit...</p>
															</li>
															<li class="timeline-item">
																<strong>Signed in</strong>
																<span class="float-end text-muted text-sm">3h ago</span>
																<p>Curabitur ligula sapien, tincidunt non, euismod vitae...</p>
															</li>
															<li class="timeline-item">
																<strong>Signed up</strong>
																<span class="float-end text-muted text-sm">2d ago</span>
																<p>Sed aliquam ultrices mauris. Integer ante arcu...</p>
															</li>
														-->
													</ul>

												</div>
											</div>
										</div>
									</div>
									
									</div>
								
								</div>
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
	<!--<script>
	$(document).ready(function(){
			$(".timeago").timeago();
	});
	</script>-->
</body>

</html>