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
	<script>
		function send_email_reset()
        {
			var email = "21";
            var form_data2 = new FormData();                  
            form_data2.append('email', email);
            $.ajax({
                type: 'POST',
                url: 'priv/recover.php',
                contentType: false,
                processData: false,
                data: form_data2,
                success:function(response) {
					$("#password").load(location.href + " #password>*", "");
                },
                onFailure: function(response){
                }
            });

        }
		function update_pasword()
        {
			var actual = document.getElementById("inputPasswordCurrent").value;
			var psw1 = document.getElementById("inputPasswordNew").value;
			var psw2 = document.getElementById("inputPasswordNew2").value;//email_admin
			var email_admin = document.getElementById("email_admin").value;//email_admin
            var form_data2 = new FormData();                  
            form_data2.append('actual', actual);
			form_data2.append('psw1', psw1);
			form_data2.append('psw2', psw2);
			form_data2.append('email_admin', email_admin);
            $.ajax({
                type: 'POST',
                url: 'priv/update_psw.php',
                contentType: false,
                processData: false,
                data: form_data2,
                success:function(response) {
					$("#passwordupdate").load(location.href + " #passwordupdate>*", "");
                },
                onFailure: function(response){
                }
            });

        }
		function close_errorpsw()
		{
			var form_data2 = new FormData();                  
            form_data2.append('actual', 'si	');
			$.ajax({
                type: 'POST',
                url: 'priv/close_errorpsw.php',
                contentType: false,
                processData: false,
                data: form_data2,
                success:function(response) {
                },
                onFailure: function(response){
                }
            });
		}
		function show_add_new_usr()
		{
			document.getElementById('add_new_usr').style.visibility = "visible";
        	document.getElementById('add_new_usr').style.display = "block";
			var current_offset = parseInt(document.getElementById('add_new_usr').style.left);
    		document.getElementById('add_new_usr').style.left = current_offset + 10 + "px";
		}
		function close_add_new_usr()
		{
			document.getElementById('add_new_usr').style.visibility = "hidden";
        	document.getElementById('add_new_usr').style.display = "none";
		}
		function Pause(id,num)
        {
            var form_data = new FormData(); 
            form_data.append('num',num);
            form_data.append('id_user',id);
            $.ajax({
                type: 'POST',
                url: 'priv/pause_usr.php',
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
		function save_new_usr()
		{
			var name = document.getElementById("inputFirstName").value;
			var company = document.getElementById("inputEmail4").value;
			var address2 = document.getElementById("inputPasswordNew").value;//email_admin
			var address3 = document.getElementById("inputPasswordNew2").value;//email_admin
			var View = document.getElementById("View");//email_admin
			var Edit = document.getElementById("Edit");//email_admin
			var Delete = document.getElementById("Delete");//email_admin
			if(address2==address3)
			{
				var form_data2 = new FormData();                  
				form_data2.append('name', name);
				form_data2.append('company', company);
				form_data2.append('address2', address2);
				form_data2.append('View', View.checked);
				form_data2.append('Edit', Edit.checked);
				form_data2.append('Delete', Delete.checked);
				$.ajax({
					type: 'POST',
					url: 'priv/save_new_usr.php',
					contentType: false,
					processData: false,
					data: form_data2,
					success:function(response) {
						$("#account").load(location.href + " #account>*", "");
					},
					onFailure: function(response){
					}
				});
			}else
			{
				document.getElementById('error_save_new_usr').style.visibility = "visible";
        		document.getElementById('error_save_new_usr').style.display = "block";
			}
		}
		function save_edit_usr()
		{
			var id = document.getElementById("idE").value;
			var name = document.getElementById("inputFirstNameE").value;
			var company = document.getElementById("inputEmail4E").value;
			var address2 = document.getElementById("inputPasswordNewE").value;//email_admin
			var address3 = document.getElementById("inputPasswordNew2E").value;//email_admin
			var View = document.getElementById("ViewE");//email_admin
			var Edit = document.getElementById("EditE");//email_admin
			var Delete = document.getElementById("DeleteE");//email_admin

			if(address2==address3)
			{
				var form_data2 = new FormData(); 
				form_data2.append('id_user',id);                 
				form_data2.append('name',name);
				form_data2.append('company',company);
				form_data2.append('address2',address2);
				form_data2.append('View',View.checked);
				form_data2.append('Edit',Edit.checked);
				form_data2.append('Delete',Delete.checked);
				$.ajax({
					type: 'POST',
					url: 'priv/save_edit_usr.php',
					contentType: false,
					processData: false,
					data: form_data2,
					success:function(response) {
						//alert(response);
						$("#account").load(location.href + " #account>*", "");
					},
					onFailure: function(response){
					}
				});
			}else
			{
				document.getElementById('error_save_new_usr').style.visibility = "visible";
        		document.getElementById('error_save_new_usr').style.display = "block";
			}
		}
		function display_info(id)//edit_new_usr
		{
			document.getElementById('edit_new_usr').style.visibility = "visible";
        	document.getElementById('edit_new_usr').style.display = "block";
			var form_data2 = new FormData();                  
			form_data2.append('id', id);
			$.ajax({
				type: 'POST',
				url: 'priv/edit_usr.php',
				contentType: false,
				processData: false,
				data: form_data2,
				success:function(response) {
					var test = /['"{}]+/g;
					var cad = response.split(",")
					//idE
					document.getElementById("idE").value=id;
					for (var i = 0; i < cad.length; i+=1) 
					{
						var mes = cad[i].replace(test,'');
						var sep = mes.split(":");
						if(i==0)
						{
							document.getElementById("inputFirstNameE").value = sep[1];
						}
						if(i==1)
						{
							document.getElementById("inputEmail4E").value = sep[1];
						}
						if(i==2)
						{
							//document.getElementById("inputPasswordNewE").value = sep[1];
							//alert(sep[1]);
						}
						if(i==3)
						{
							if(sep[1]==0)
							{
								$('#ViewE').attr('checked', false);
							}
							else
							{
								$('#ViewE').attr('checked', true);
							}
						}
						if(i==4)
						{
							if(sep[1]==0)
							{
								$('#EditE').attr('checked', false);
							}
							else
							{
								$('#EditE').attr('checked', true);
							}
						}
						if(i==5)
						{
							if(sep[1]==0)
							{
								$('#DeleteE').attr('checked', false);
							}
							else
							{
								$('#DeleteE').attr('checked', true);
							}
						}
					}
				},
				onFailure: function(response){
				}
			});
			/*
				var modal = document.getElementById("EditAddress");
				modal.style.display = "block";            
				$('input[name="name"]').val(document.getElementById("ups_ul_add2"+id).value);
				$('input[name="company"]').val(document.getElementById("ups_ul_country"+id).value);
				var pass = document.getElementById("ups_ul_name"+id).value;
				var tipe = document.getElementById("ups_ul_company"+id).value;
				var num = Number(parseInt(tipe,10)).toString(2);
				//alert(num[0]);
				var v=0,e=0,d=0;
				if(num.toString().length==1)
				{
					d = num;
				}
				if(num.toString().length==2)
				{
					d = num[1];
					e = num[0];
				}
				if(num.toString().length==3)
				{
					d = num[2];
					e = num[1];
					v = num[0];
				}
				if(v==0)
				{
					$('#View').attr('checked', false);
				}
				else
				{
					$('#View').attr('checked', true);
				}
				if(e==0)
				{
					$('#Edit').attr('checked', false);
				}
				else
				{
					$('#Edit').attr('checked', true);
				}
				if(e==0)
				{
					$('#Delete').attr('checked', false);
				}
				else
				{
					$('#Delete').attr('checked', true);
				}
			// alert(d+" "+e+" "+v);
					
				$('#id').val(id);
				
				var country = document.getElementById("ups_ul_country"+id).value;
				var sel = document.getElementById('shipping_country_id');
				var opts = sel.options;
				for (j = 0; j<sel.length; j++) 
				{ 
					if (opts[j].value == country) 
					{
						sel.selectedIndex = j;
						break;
					}
				}
				$('#shipping_country_id :nth-child('+j+')').prop('selected', true).trigger('change');   
			*/ 
		}
		function close_edit_new_usr()
		{
			document.getElementById('edit_new_usr').style.visibility = "hidden";
        	document.getElementById('edit_new_usr').style.display = "none";
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
				<a class="sidebar-brand" href="dashboard">
					<span class="align-middle">Repcel</span>
				</a>

				<ul class="sidebar-nav">
					<li class="sidebar-item ">
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
					
					<li class="sidebar-item active">
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

				<form class="d-none d-sm-inline-block">
					<div class="input-group input-group-navbar">
						<input type="text" class="form-control" placeholder="Search…" aria-label="Search">
						<button class="btn" type="button">
							<i class="align-middle" data-feather="search"></i>
						</button>
					</div>
				</form>

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
								<i class="align-middle" data-feather="settings"></i>
							</a>
							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
								<!--<img src="img/avatars/avatar.jpg" class="avatar img-fluid rounded me-1" alt="<?php// echo $_SESSION['e_admi'];?>" /> -->
								<?php
									if(isset($_SESSION['email_admi']))
									{
										if($_SESSION['source_admi'] == "google")
										{
									?>
												<img src="<?php echo ($_SESSION['avatar_admi']);?>"  class="avatar img-fluid rounded me-1" >
									<?php
										}
										if(isset($_SESSION['avatar_admi']) && $_SESSION['avatar_admi'] != null && !isset($_SESSION['source_admi']))
										{
									?>
												<img src="data:image/png;base64,<?php echo base64_encode($_SESSION['avatar_admi']);?>"  class="avatar img-fluid rounded me-1" >
									<?php
										}
										if(!isset($_SESSION['avatar_admi']) || $_SESSION['avatar_admi'] == null )
										{
									?>
												<img src="/assets/avatar.png"  class="avatar img-fluid rounded me-1">
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

					<h1 class="h3 mb-3">Configuración</h1>

					<div class="row">
						<div class="col-md-3 col-xl-2">

							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Configuración del perfil</h5>
								</div>

								<div class="list-group list-group-flush" role="tablist">
									<?php
									if(!isset($_GET["email"]))
									{
										if($_SESSION['tipe_admi']  == 10)
										{
										?>
									
											<a class="list-group-item list-group-item-action active" data-bs-toggle="list" href="#account" role="tab">
											Cuentas
											</a>
											<a class="list-group-item list-group-item-action " data-bs-toggle="list" href="#password" role="tab">
											Contraseña
											</a>
										<?php
										}
										else
										{
											?>
											<!--
											<a class="list-group-item list-group-item-action active" data-bs-toggle="list" href="#password" role="tab">
											Contraseña
											</a>
											No tienes los permisos para acceder a esta seccion contacta a tu administrador
											-->
											
											<?php
										}
									}
									?>
									<?php
									if(isset($_GET["email"]))
									{
										if($_SESSION['tipe_admi']  == 10)
										{
										?>
									
											<a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#account" role="tab">
											Cuentas
											</a>
											<a class="list-group-item list-group-item-action active" data-bs-toggle="list" href="#password" role="tab">
											Contraseña
											</a>
										<?php
										}
										else
										{
											?>
											<!--
											<a class="list-group-item list-group-item-action active" data-bs-toggle="list" href="#password" role="tab">
											Contraseña
											</a>-->
											<?php
										}
									}
									?>
								</div>
							</div>
						</div>

						<div class="col-md-9 col-xl-10">
							<div class="tab-content">
								<?php
								if($_SESSION['tipe_admi']  == 10)
								{
									if(!isset($_GET["email"]))
									{
									?>
										<div class="tab-pane fade show active" id="account" role="tabpanel">
									<?php
									}else
									{
									?>
										<div class="tab-pane fade" id="account" role="tabpanel">
									<?php
									}
									?>

										<div class="card">
											<div class="card-header">

												<h5 class="card-title mb-0">Cuentas</h5>
											</div>
											<div class="card-body">
												<div class="card-header">
													<button type="submit" class="btn btn-primary" onclick="show_add_new_usr()">Agregar nuevo usuario</button>
												</div>
												<form>
													<div class="row">
														

													<div class="col-xl-8">
														<div class="card">
															<div class="card-body" id="usr">
																<?php
																$conexion =  mysqli_connect("localhost","ujrujqoxugjcs","#ceudics*vd5","dbm7i5zgqipvm1");
																$validar  = mysqli_query($conexion,"SELECT * FROM users WHERE id !='1'");
																if(mysqli_num_rows($validar)>0)
																{
																	?>
																	<table class="table table-striped" style="width:100%">
																	<thead>
																		<tr>
																			<th class="col-md-2">Nombre</th>
																			<th class="col-md-2">Correo</th>
																			<th class="col-md-2" style="text-align: center;">estatus</th>
																		</tr>
																	</thead>
																	<tbody>
																	<?php
																	while ($extraido= mysqli_fetch_array($validar))
																	{
																		$id          = $extraido['id'];
																		$usrname     = $extraido ['usrname'];
																		$email       = $extraido['email'];
																		$tipe        = $extraido['tipe'];
																		$avatar      = $extraido['avatar'];		
																		$admi      	 = $extraido['admi'];															
																		
																		?>
																		
																			<tr>
																					<td onclick="display_info(<?php echo $id;?>)" style="cursor: pointer;"><?php
																					if($usrname==""){
																						echo "Guest";
																					} else
																					{
																						echo $usrname ;
																					}?></td>
																					<td><?php echo $email ;?></td>
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
																				if( $_SESSION['e_admi'] == 1 || $_SESSION['tipe_admi'] == 10)
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

													
												</form>

											</div>
										</div>

										<div class="card" >
											<div class="card-header">

												<h5 class="card-title mb-0">Informacion de usuario</h5>
											</div>
											<div class="card-body" id="add_new_usr" style="visibility: hidden;display: none;">
												<form>
													<div class="alert alert-danger alert-dismissible" role="alert" style="visibility: hidden;display: none;" id="error_save_new_usr">
														<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" onclick="close_errorpsw()"></button>
														<div class="alert-message text-md-center">
															<strong>Las contraseñas que ingresaste no coinciden</strong>
														</div>
													</div>
													<div class="row">
														<div class="mb-3">
															<label class="form-label" for="inputFirstName">Nombre</label>
															<input type="text" class="form-control" id="inputFirstName" placeholder="First name">
														</div>
													</div>
													<div class="mb-3">
														<label class="form-label" for="inputEmail4">Correo</label>
														<input type="email" class="form-control" id="inputEmail4" placeholder="Email">
													</div>
													<div class="mb-3">
														<label class="form-label" for="inputPasswordNew">Contraseña</label>
														<input type="password" class="form-control" id="inputPasswordNew" placeholder="Password">
													</div>
													<div class="mb-3">
														<label class="form-label" for="inputPasswordNew2">Verifica la contraseña</label>
														<input type="password" class="form-control" id="inputPasswordNew2" placeholder="Verify password">
													</div>
													<div class="mb-3">
														<label class="form-label" for="inputPasswordNew2">Permisos</label>
														<div class="field text " style="display: inline-block;width: 100%;position: relative;">
															<input type="checkbox" name="View" id="View"><label class="labelfiel" style="width: 30%;padding-left: 10px;">Ver</label>
														</div>
														<div class="field text " style="display: inline-block;width: 100%;position: relative;">
															<input type="checkbox" name="Edit" id="Edit"><label class="labelfiel" style="width: 30%;padding-left: 10px;">Editar</label>
														</div>
														<div class="field text " style="display: inline-block;width: 100%;position: relative;">
															<input type="checkbox" name="Delete" id="Delete"><label class="labelfiel" style="width: 30%;padding-left: 10px;">Eliminar</label>
														</div>
													</div>
													<button type="button" onclick="close_add_new_usr()" class="btn btn-danger">Cancelar</button>
													<button type="button" onclick="save_new_usr()" style="float: right;" class="btn btn-primary">Guardar cambios</button>
												</form>

											</div>
											<div class="card-body" id="edit_new_usr" style="visibility: hidden;display: none;">
													<form>
														<div class="alert alert-danger alert-dismissible" role="alert" style="visibility: hidden;display: none;" id="error_save_new_usr">
															<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" onclick="close_errorpsw()"></button>
															<div class="alert-message text-md-center">
																<strong>Las contraseñas que ingresaste no coinciden</strong>
															</div>
														</div>
														<div class="row">
															<div class="mb-3">
																<label class="form-label" for="inputFirstName">Nombre</label>
																<input type="text" class="form-control" id="inputFirstNameE" placeholder="First name">
																<input type="text" class="form-control" id="idE" placeholder="First name" style="display: none;">
															</div>
														</div>
														<div class="mb-3">
															<label class="form-label" for="inputEmail4">Correo</label>
															<input type="email" class="form-control" id="inputEmail4E" placeholder="Email">
														</div>
														<div class="mb-3">
															<label class="form-label" for="inputPasswordNew">Contraseña</label>
															<input type="password" class="form-control" id="inputPasswordNewE" placeholder="Password">
														</div>
														<div class="mb-3">
															<label class="form-label" for="inputPasswordNew2">Verifica la contraseña</label>
															<input type="password" class="form-control" id="inputPasswordNew2E" placeholder="Verify password">
														</div>
														<div class="mb-3">
															<label class="form-label" for="inputPasswordNew2">Permisos</label>
															<div class="field text " style="display: inline-block;width: 100%;position: relative;">
																<input type="checkbox" name="View" id="ViewE"><label class="labelfiel" style="width: 30%;padding-left: 10px;">Ver</label>
															</div>
															<div class="field text " style="display: inline-block;width: 100%;position: relative;">
																<input type="checkbox" name="Edit" id="EditE"><label class="labelfiel" style="width: 30%;padding-left: 10px;">Editar</label>
															</div>
															<div class="field text " style="display: inline-block;width: 100%;position: relative;">
																<input type="checkbox" name="Delete" id="DeleteE"><label class="labelfiel" style="width: 30%;padding-left: 10px;">Eliminar</label>
															</div>
														</div>
														<button type="button" onclick="close_edit_new_usr()" class="btn btn-danger">Cancelar</button>
														<button type="button" onclick="save_edit_usr()" style="float: right;" class="btn btn-primary">Guardar cambios</button>
													</form>
												</div>
										</div>
										<!--
										<div class="card" id="edit_new_usr" style="visibility: hidden;display: none;">
												<div class="card-header">

													<h5 class="card-title mb-0">User info</h5>
												</div>
												<div class="card-body">
													<form>
														<div class="alert alert-danger alert-dismissible" role="alert" style="visibility: hidden;display: none;" id="error_save_new_usr">
															<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" onclick="close_errorpsw()"></button>
															<div class="alert-message text-md-center">
																<strong>The passwords you typed do not match or are not filled in</strong>
															</div>
														</div>
														<div class="row">
															<div class="mb-3">
																<label class="form-label" for="inputFirstName">Name</label>
																<input type="text" class="form-control" id="inputFirstNameE" placeholder="First name">
															</div>
														</div>
														<div class="mb-3">
															<label class="form-label" for="inputEmail4">Email</label>
															<input type="email" class="form-control" id="inputEmail4E" placeholder="Email">
														</div>
														<div class="mb-3">
															<label class="form-label" for="inputPasswordNew">Password</label>
															<input type="password" class="form-control" id="inputPasswordNewE" placeholder="Password">
														</div>
														<div class="mb-3">
															<label class="form-label" for="inputPasswordNew2">Verify password</label>
															<input type="password" class="form-control" id="inputPasswordNew2E" placeholder="Verify password">
														</div>
														<div class="mb-3">
															<label class="form-label" for="inputPasswordNew2">Permissions</label>
															<div class="field text " style="display: inline-block;width: 100%;position: relative;">
																<input type="checkbox" name="View" id="ViewE"><label class="labelfiel" style="width: 30%;padding-left: 10px;">View</label>
															</div>
															<div class="field text " style="display: inline-block;width: 100%;position: relative;">
																<input type="checkbox" name="Edit" id="EditE"><label class="labelfiel" style="width: 30%;padding-left: 10px;">Edit</label>
															</div>
															<div class="field text " style="display: inline-block;width: 100%;position: relative;">
																<input type="checkbox" name="Delete" id="DeleteE"><label class="labelfiel" style="width: 30%;padding-left: 10px;">Delete</label>
															</div>
														</div>
														<button type="button" onclick="close_edit_new_usr()" class="btn btn-danger">Cancel</button>
														<button type="button" onclick="save_new_usr()" style="float: right;" class="btn btn-primary">Save changes</button>
													</form>
												</div>
											</div>
										</div>
															-->
									</div>
								
								
								<?php
								}
								if($_SESSION['tipe_admi']  == 10)
								{
									if(!isset($_GET["email"]))
									{
									?>
										<div class="tab-pane fade" id="password" role="tabpanel">
									<?php
									}else
									{
									?>
										<div class="tab-pane fade show active" id="password" role="tabpanel">
									<?php
									}
								}
								else
								{
								?>
									<div class="tab-pane fade show active" id="password" role="tabpanel">
								<?php
								}
								?>
									<div class="card" id="passwordupdate">
										<div class="card-body">
											<?php
											if($_SESSION["errorpsw"]==1)
											{
												?>
												<div class="alert alert-danger alert-dismissible" role="alert">
													<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" onclick="close_errorpsw()"></button>
													<div class="alert-message text-md-center">
														<strong>Las contraseñas que ingresaste no coinciden</strong>
													</div>
												</div>
												<?php
											}
											?>
											<?php
											if($_SESSION["errorpsw"]==2)
											{
												?>
												<div class="alert alert-danger alert-dismissible" role="alert">
													<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" onclick="close_errorpsw()"></button>
													<div class="alert-message text-md-center">
														<strong>Las contraseñas que ingresaste es incorrecta</strong>
													</div>
												</div>
												<?php
											}
											?>
											<?php
											if($_SESSION["errorpsw"]==3)
											{
												?>
												<div class="alert alert-danger alert-dismissible" role="alert">
													<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" onclick="close_errorpsw()"></button>
													<div class="alert-message text-md-center">
														<strong>Ocurrio un error en el sistema, intenta de nuevo o contracta al administrador</strong>
													</div>
												</div>
												<?php
											}
											?>
											<?php
											if($_SESSION["errorpsw"]==4)
											{
												?>
												<div class="alert alert-success alert-dismissible" role="alert">
													<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" onclick="close_errorpsw()"></button>
													<div class="alert-message text-md-center">
														<strong>La contraseña se cambio con exito</strong>
													</div>
												</div>
												<?php
												
											}
											?>
											<h5 class="card-title">Contraseña</h5>
											<form>
												<?php
												if(isset($_GET['email']))
												{
													?>
														<div class="mb-3">
															<label class="form-label" for="inputPasswordCurrent">Contraseña actual</label>
															<input type="password" class="form-control" id="inputPasswordCurrent">
															<input type="password" class="form-control" id="email_admin" style="visibility:hidden;display:none;" value="<?php echo $_SESSION['email_admi'];?>">
															<!--<small><a href="#">Forgot your password?</a></small>-->
														</div>
														<div class="mb-3">
															<label class="form-label" for="inputPasswordNew">Nueva contraseña</label>
															<input type="password" class="form-control" id="inputPasswordNew">
														</div>
														<div class="mb-3">
															<label class="form-label" for="inputPasswordNew2">Verifica la contraseña</label>
															<input type="password" class="form-control" id="inputPasswordNew2">
														</div>
														<div class="btn btn-primary m-sm-auto d-md-block col-md-3" onclick="update_pasword()">Guardar cambios</div>
													<?php
												}
												if(isset($_SESSION['reset_pass_admi']) && $_SESSION['reset_pass_admi']==1 && !isset($_GET['email']))
												{
													?>
														<p class='text-md-center'>Se envio a <?php echo $_SESSION['email_admi']; ?> un link para cambiar la contraseña.</p>
													<?php
												}
												if(!isset($_SESSION['reset_pass_admi']) && !isset($_GET['email']))
												{
													?>
													<p>No tienes los permisos para acceder a esta seccion contacta a tu administrador</p>
														<!--<div onclick="send_email_reset()" class="btn btn-primary m-sm-auto d-md-block col-md-3">Cambiar contraseña</div>-->
													<?php
												}
												?>
												<!--
													<div class="mb-3">
														<label class="form-label" for="inputPasswordCurrent">Current password</label>
														<input type="password" class="form-control" id="inputPasswordCurrent">
														<small><a href="#">Forgot your password?</a></small>
													</div>
													<div class="mb-3">
														<label class="form-label" for="inputPasswordNew">New password</label>
														<input type="password" class="form-control" id="inputPasswordNew">
													</div>
													<div class="mb-3">
														<label class="form-label" for="inputPasswordNew2">Verify password</label>
														<input type="password" class="form-control" id="inputPasswordNew2">
													</div>
													<button type="submit" class="btn btn-primary">Save changes</button>
												-->
											</form>

										</div>
									</div>

									<!-- -->

									<!-- -->
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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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