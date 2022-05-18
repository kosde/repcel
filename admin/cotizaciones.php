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
					<li class="sidebar-item active">
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
					<div class="row justify-content-center mt-3 mb-2">
						<div class="col-auto">
							<nav class="nav btn-group">
								<?php
									include "../php/conexion.php";

									$query    = "SELECT * FROM tienda";
									$validar  = mysqli_query($conexion,$query);
									$todos 	  = mysqli_num_rows($validar);
									
									/*
										$query    = "SELECT * FROM tienda WHERE categoria = 'Cargadores'";
										$validar  = mysqli_query($conexion,$query);
										$entregados= mysqli_num_rows($validar);

										$query    = "SELECT * FROM tienda WHERE categoria = 'Audifonos'";
										$validar  = mysqli_query($conexion,$query);
										$pendiente= mysqli_num_rows($validar);

										$query    = "SELECT * FROM tienda WHERE categoria = '2'";
										$validar  = mysqli_query($conexion,$query);
										$aprobado = mysqli_num_rows($validar);
									*/
								?>
								<a href="#all" class="btn btn-outline-primary active" data-bs-toggle="tab">Todos (<?php echo $todos;?>)</a>
							</nav>
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
																<h5 class="card-title mb-0"></h5>
															</div>
															<div class="card-body" id="usr">
																<?php
																	require '../vendor/autoload.php';
                                                                    $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load("ListadepreciosFebrero.xlsx");
                                                                    $worksheet = $spreadsheet->getActiveSheet();

                                                                    echo '<table class="table table-striped" id="cotizaciones_all">';
                                                                    echo '<thead>
                                                                            <tr>
                                                                                <th class="col-md-4">Descripción</th>
                                                                                <th class="col-md-4">$ Comercial</th>
                                                                                <th class="col-md-4">$ Premium</th>
                                                                            </tr>
                                                                        </thead>';
                                                                    echo '<tbody>' . PHP_EOL;
																	$band_no_aplica = 0;
                                                                    foreach ($worksheet->getRowIterator() as $row) 
                                                                    {
                                                                        echo '<tr>' . PHP_EOL;
                                                                        $cellIterator = $row->getCellIterator();
                                                                        $cellIterator->setIterateOnlyExistingCells(FALSE); 
                                                                        // Esto recorre todas las celdas,
                                                                        // incluso si no se establece un valor de celda.
                                                                        // De forma predeterminada, solo las celdas que tienen un valor
                                                                        // se repetirá en la iteración.
                                                                        foreach ($cellIterator as $cell) 
                                                                        {
																			if($cell->getValue() == "EXIT")
																			{
																				$band_no_aplica = 1;
																			}
																			if($band_no_aplica == 0)
																			{
																				if (is_numeric($cell->getValue())) 
																				{
																					if($cell->getValue()*2+200>2000)
																					{
																						$precio = $cell->getValue()/2;
																						$Total = $cell->getValue()+$precio;
																						$Total = round(($Total*1.16)*1.036);
																						echo '<td>' . $Total . '</td>' . PHP_EOL;
																					}
																					else
																					{
																						$Total = $cell->getValue()*2+200;
																						$Total = round(($Total*1.16)*1.036);
																						echo '<td>' . $Total . '</td>' . PHP_EOL;
																					}
																				}
																				else
																				{
																					echo '<td>' . $cell->getValue() . '</td>' . PHP_EOL;
																				}
																			}
                                                                            else
																			{
																				echo '<td>' .  $cell->getValue() . '</td>' . PHP_EOL;
																			}
                                                                        }
                                                                        echo '</tr>' . PHP_EOL;
                                                                    }
                                                                    echo '</tbody></table>' . PHP_EOL;

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
			$("#cotizaciones_all").DataTable({
				responsive: true,
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