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
	<link rel="canonical" href="https://demo.adminkit.io/ui-general.html"/>
	<title>Repcel</title>
	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a38c16a07e.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

	<script src="https://code.jquery.com/jquery-3.4.1.min.js" type="text/javascript"></script>
	<script src="js/jquery.timeago.js" type="text/javascript"></script>
    <style>
        input[type=number] { 
            -webkit-appearance: textfield !important;
            margin: 0;
            -moz-appearance:textfield !important;
        }
		.opacidad
		{
			opacity: .5 !important;
		}
		.oculto
		{
			display: none;
			visibility: hidden;
		}
    </style>
</head>
<?php
//if(isset($_SESSION['email_admi']))
//{
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
							<h3>Caja</h3>
						</div>
					</div>
					<div class="row justify-content-center mt-3 mb-2">
						
					</div>
					<div class="tab-content">
						<div class="tab-pane fade show active">
							<div class="row">
								<div class=" col-md-12">
                                    <div class="card">
                                        <div class="card-header pb-0">
                                            <h5 class="card-title mb-0">Ventas / Gastos</h5>
                                        </div>
                                        <div class="card-body col-md-12">
                                            <div class="row" style="height: 100px;">
                                                <div class="col-md-10">
                                                </div>
                                                <div class="col-md-2">
                                                    <button type="submit" class="btn btn-primary" style="width: auto;">Generar Corte</button>
                                                </div>
                                            </div>
                                            <!--<form action="" method="get">-->
											<div class="spinner-border text-primary me-2 oculto" style="position: absolute;left: 50%;top: 50%;" role="status" id="cargando">
												<span class="visually-hidden">Loading...</span>
											</div>
											<div id="forma">												
                                                <div class="row" style="height: 100px;">
                                                    <div class="col-md-9">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text">N° de Nota</span>
                                                            <input type="text" id="n_nota" class="form-control" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="mb-3 col-md-4" style="margin-left: auto;margin-right: auto;">
                                                        <label class="form-label" for="inputState">Accion</label>
                                                        <select id="id_pago" class="form-control">
                                                            <option></option>
                                                            <option>Salida</option>
                                                            <option>Ingreso</option>                                                    
                                                        </select>
                                                    </div>
                                                    <div class="mb-3 col-md-4"  style="margin: auto;">
                                                        <div class="input-group">
                                                            <label class="form-label" for="inputCity">Monto</label>
                                                            <div class="input-group mb-3">
                                                                <span class="input-group-text">$</span>
                                                                <input type="number" class="form-control" id="monto" value="0">
                                                                <span class="input-group-text">.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 col-md-4" style="margin-left: auto;margin-right: auto;">
                                                        <label class="form-label" for="inputState">Tipo de pago</label>
                                                        <select id="tipo_pago" class="form-control">
                                                            <option></option>
                                                            <option>Efectivo</option>
                                                            <option>Tarjeta crédito / débito</option>
                                                            <option>Transferecia /depósito</option>                                                     
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h5 class="form-label card-title">Concepto</h5>
                                                        <textarea class="form-control" rows="2" id="concepto"></textarea>
                                                    </div>
                                                    <div class="col-md-6">
                                                    </div>
                                                </div>
                                                <div class="row" style="height: 100px;">
                                                    <div class="col-md-10">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <button onclick="agregar_a_caja()" id="agregar" class="btn btn-primary" style="width: auto;">Agregar</button>
                                                    </div>
                                                </div>
											</div>
											<script>
												function agregar_a_caja()
												{
													document.getElementById("forma").classList.add('opacidad');		
													document.getElementById("cargando").classList.remove('oculto');
													document.getElementById("agregar").disabled = true;		

													var id_nota 	= document.getElementById("n_nota").value;
													var accion 		= document.getElementById("id_pago").value;
													var monto 		= document.getElementById("monto").value;
													var tipo 		= document.getElementById("tipo_pago").value;
													var concepto 	= document.getElementById("concepto").value;

													var form_data = new FormData();
													form_data.append('id_nota', id_nota);
													form_data.append('accion', accion);
													form_data.append('monto', monto);
													form_data.append('tipo', tipo);
													form_data.append('concepto', concepto);
													$.ajax({
														type: 'POST',
														url: 'priv/agregar_caja.php',
														contentType: false,
														processData: false,
														data: form_data,
														success:function(response) 
														{															
															document.getElementById("forma").classList.remove('opacidad');		
															document.getElementById("cargando").classList.add('oculto');
															document.getElementById("agregar").disabled = false;	
															//$("#historial").load(location.href + " #historial>*", "");
															window.location.href = window.location.href;
															document.getElementById("n_nota").value		="";
															document.getElementById("id_pago").value	="";
															document.getElementById("monto").value		="";
															document.getElementById("tipo_pago").value	="";
															document.getElementById("concepto").value	="";	
														},
														onFailure: function(response){
														}
													});
												}
											</script>
											<script>
												$(document).ready(function(){
														
													jQuery.timeago.settings.strings = {
														prefixAgo: "hace",
														prefixFromNow: "dentro de",
														suffixAgo: "",
														suffixFromNow: "",
														seconds: "menos de un minuto",
														minute: "un minuto",
														minutes: "unos %d minutos",
														hour: "una hora",
														hours: "%d horas",
														day: "un día",
														days: "%d días",
														month: "un mes",
														months: "%d meses",
														year: "un año",
														years: "%d años"
													};
													$(".timeago").timeago();
													
												});
											</script>
                                            <!--</form>-->
											<div class="col-xl-12" id="historial">
												<div class="card-body">
													<div class="g-0">
														<strong style="width: 100%;text-align: center;display: inline-block;">Historial</strong>
														<ul class="timeline mt-2 mb-0">
															<!--<li class="timeline-item">
																<strong>Signed out</strong>
																<span class="float-end text-muted text-sm">30m ago</span> ORDER BY fecha DESC
																<p>Nam pretium turpis et arcu. Duis arcu tortor, suscipit...</p>
															</li>-->
															<?php
																include "../php/conexion.php";
																$hoy_i 		= date("Y-m-d 00:00:00");
																$hoy_f 		= date("Y-m-d 23:59:59");
																$query 		= "SELECT * FROM caja WHERE fecha BETWEEN '". $hoy_i. "' AND '".$hoy_f."' ORDER BY id DESC";
																$result 	= mysqli_query($conexion,$query);
																if(mysqli_num_rows($result)>0)
																{
																	while ($extraido= mysqli_fetch_array($result))
																	{
																		$id_nota        = $extraido['id_nota'];
																		$accion       	= $extraido['accion'];
																		$monto  		= $extraido['monto'];
																		$tipo 			= $extraido['tipo'];
																		$concepto       = $extraido['concepto'];
																		$date          	= $extraido['fecha'];
																		$date			= date_create($date);
																		$date1			= date_format($date,"Y-m-d");
																		$date2			= date_format($date,"H:i:s");
																		$datef			= $date1."T".$date2."";	
																		?>
																			<li class="timeline-item">
																				<strong><?php echo $accion;?></strong>
																				<span class="float-end text-muted text-sm">
																					<time class="timeago" datetime="<?php echo $datef;?>"><?php echo $datef;?></time>
																				</span>
																				<p><?php 
																					if($id_nota)
																						$id_nota = "N° nota ".$id_nota."<br>";
																					else
																						$id_nota = "";
																					echo $id_nota." $".$monto." ".$tipo."<br>Concepto: ". $concepto." ";
																					echo "<script>
																							$('.timeago').timeago();
																						</script>";
																					?>
																				</p>
																			</li>
																		<?php
																	}
																}
																else
																{
																	?>
																		<strong>Aun no hay gastos</strong>
																	<?php
																}
															?>
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
					<div id="corte">
						<div class="row">
							<div class="col-12">
								<div class="card">
									<div class="card-body m-sm-3 m-md-5">
										<div class="mb-4">
											Hello <strong>Charles Hall</strong>,
											<br />
											This is the receipt for a payment of <strong>$268.00</strong> (USD) you made to AdminKit Demo.
										</div>

										<div class="row">
											<div class="col-md-6">
												<div class="text-muted">Payment No.</div>
												<strong>741037024</strong>
											</div>
											<div class="col-md-6 text-md-end">
												<div class="text-muted">Payment Date</div>
												<strong>October 2, 2018 - 03:45 pm</strong>
											</div>
										</div>

										<hr class="my-4" />

										<div class="row mb-4">
											<div class="col-md-6">
												<div class="text-muted">Client</div>
												<strong>
													Charles Hall
												</strong>
												<p>
													4183 Forest Avenue <br>
													New York City <br>
													10011 <br>
													USA <br>
													<a href="#">
														chris.wood@gmail.com
													</a>
												</p>
											</div>
											<div class="col-md-6 text-md-end">
												<div class="text-muted">Payment To</div>
												<strong>
													AdminKit Demo LLC
												</strong>
												<p>
													354 Roy Alley <br>
													Denver <br>
													80202 <br>
													USA <br>
													<a href="#">
														info@adminkit.com
													</a>
												</p>
											</div>
										</div>

										<table class="table table-sm">
											<thead>
												<tr>
													<th>Description</th>
													<th>Quantity</th>
													<th class="text-end">Amount</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>AdminKit Demo Theme Customization</td>
													<td>2</td>
													<td class="text-end">$150.00</td>
												</tr>
												<tr>
													<td>Monthly Subscription </td>
													<td>3</td>
													<td class="text-end">$25.00</td>
												</tr>
												<tr>
													<td>Additional Service</td>
													<td>1</td>
													<td class="text-end">$100.00</td>
												</tr>
												<tr>
													<th>&nbsp;</th>
													<th>Subtotal </th>
													<th class="text-end">$275.00</th>
												</tr>
												<tr>
													<th>&nbsp;</th>
													<th>Shipping </th>
													<th class="text-end">$8.00</th>
												</tr>
												<tr>
													<th>&nbsp;</th>
													<th>Discount </th>
													<th class="text-end">5%</th>
												</tr>
												<tr>
													<th>&nbsp;</th>
													<th>Total </th>
													<th class="text-end">$268.85</th>
												</tr>
											</tbody>
										</table>

										<div class="text-center">
											<p class="text-sm">
												<strong>Extra note:</strong>
												Please send all items at the same time to the shipping address.
												Thanks in advance.
											</p>

											<a href="#" class="btn btn-primary">
												Print this receipt
											</a>
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
	

</body>
<?php
/*}
else{
	echo'
		<script>
			window.location = "index";
		</script>
		';
}*/
?>
</html>