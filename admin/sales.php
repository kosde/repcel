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
					<li class="sidebar-item active">
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
							<a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
								<div class="position-relative">
									<i class="align-middle" data-feather="bell"></i>
									<!--<span class="indicator">4</span>-->
								</div>
							</a>
						<!--
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="alertsDropdown">
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
						-->
						</li>
						<li class="nav-item dropdown">
							<!--
								<a class="nav-icon dropdown-toggle" href="#" id="messagesDropdown" data-bs-toggle="dropdown">
									<div class="position-relative">
										<i class="align-middle" data-feather="message-square"></i>
									</div>
								</a>
							-->
							<!--
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
							</div>-->
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

					<h1 class="h3 mb-3">Ventas</h1>

					<div class="row">
						<div class="col-12 col-lg-6">
							<div class="card flex-fill w-100">
								<div class="card-header">
									<h5 class="card-title">Ventas por año</h5>
									<!--<h6 class="card-subtitle text-muted">A line chart is a way of plotting data points on a line.</h6>-->
								</div>
								<div class="card-body">
									<div class="chart">
										<canvas id="chartjs-line"></canvas>
									</div>
								</div>
							</div>
						</div>

						<div class="col-12 col-lg-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Dias de mas venta</h5>
									<!--<h6 class="card-subtitle text-muted">A bar chart provides a way of showing data values represented as vertical bars.</h6>-->
								</div>
								<div class="card-body">
									<div class="chart">
										<canvas id="chartjs-bar"></canvas>
									</div>
								</div>
							</div>
						</div>

						<div class="col-12 col-lg-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Articulo mas vendido</h5>
									<!--<h6 class="card-subtitle text-muted">Pie charts are excellent at showing the relational proportions between data.</h6>-->
								</div>
								<div class="card-body">
									<div class="chart chart-sm">
										<canvas id="chartjs-pie"></canvas>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Celulares</h5>
									<!--<h6 class="card-subtitle text-muted">Pie charts are excellent at showing the relational proportions between data.</h6>-->
								</div>
								<div class="card-body">
									<div class="chart chart-sm">
										<canvas id="chartjs_celulares"></canvas>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-4">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Iphone</h5>
									<!--<h6 class="card-subtitle text-muted">Pie charts are excellent at showing the relational proportions between data.</h6>-->
								</div>
								<div class="card-body">
									<div class="chart chart-sm">
										<canvas id="chartjs_iphone"></canvas>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-4">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Motorola</h5>
									<!--<h6 class="card-subtitle text-muted">Pie charts are excellent at showing the relational proportions between data.</h6>-->
								</div>
								<div class="card-body">
									<div class="chart chart-sm">
										<canvas id="chartjs_motorola"></canvas>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-4">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Samnsung</h5>
									<!--<h6 class="card-subtitle text-muted">Pie charts are excellent at showing the relational proportions between data.</h6>-->
								</div>
								<div class="card-body">
									<div class="chart chart-sm">
										<canvas id="chartjs_samnsung"></canvas>
									</div>
								</div>
							</div>
						</div>
					<!--
						<div class="col-12 col-lg-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Doughnut Chart</h5>
									<h6 class="card-subtitle text-muted">Doughnut charts are excellent at showing the relational proportions between data.</h6>
								</div>
								<div class="card-body">
									<div class="chart chart-sm">
										<canvas id="chartjs-doughnut"></canvas>
									</div>
								</div>
							</div>
						</div>

						<div class="col-12 col-lg-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Radar Chart</h5>
									<h6 class="card-subtitle text-muted">A radar chart is a way of showing multiple data points and the variation between them.</h6>
								</div>
								<div class="card-body">
									<div class="chart">
										<canvas id="chartjs-radar"></canvas>
									</div>
								</div>
							</div>
						</div>

						<div class="col-12 col-lg-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Polar Area Chart</h5>
									<h6 class="card-subtitle text-muted">Polar area charts are similar to pie charts, but each segment has the same angle.</h6>
								</div>
								<div class="card-body">
									<div class="chart">
										<canvas id="chartjs-polar-area"></canvas>
									</div>
								</div>
							</div>
						</div>
					-->
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
	<!--
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var form_data = new FormData();
            form_data.append('id_user',"26");
			var datas=[0,0,0,0,0,0,0,0,0,0,0,0];
			var orders=[0,0,0,0,0,0,0,0,0,0,0,0];
			$.ajax({
                type: 'POST',
                url: 'priv/sales_year',
                contentType: false,
                processData: false,
                data: form_data,
                success:function(response) {
					var test = /['"{}]+/g;
					var cad = response.split(",")
					for (var i = 0; i < cad.length; i+=1) 
					{
						var mes = cad[i].replace(test,'');
						var sep = mes.split(":");
						datas[i] = sep[1];  
					}
                },
                onFailure: function(response){
                    alert("fail");
                }
            });
			$.ajax({
                type: 'POST',
                url: 'priv/orders_year',
                contentType: false,
                processData: false,
                data: form_data,
                success:function(response) {
					var test = /['"{}]+/g;
					var cad = response.split(",")
					for (var i = 0; i < cad.length; i+=1) 
					{
						var mes = cad[i].replace(test,'');
						var sep = mes.split(":");
						orders[i] = sep[1];  
					}
                },
                onFailure: function(response){
                    alert("fail");
                }
            });
			setTimeout(function(){
			new Chart(document.getElementById("chartjs-line"), {
				type: "line",
				data: 
				{
					labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
					datasets: [{
						label: "Sales ($)",
						fill: true,
						backgroundColor: "transparent",
						borderColor: window.theme.primary,
						data:datas
					}, {
						label: "Orders",
						fill: true,
						backgroundColor: "transparent",
						borderColor: "#adb5bd",
						borderDash: [4, 4],
						data: orders
					}]
				},
				options: 
				{
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					tooltips: {
						intersect: false
					},
					hover: {
						intersect: true
					},
					plugins: {
						filler: {
							propagate: false
						}
					},
					scales: {
						xAxes: [{
							reverse: true,
							gridLines: {
								color: "rgba(0,0,0,0.05)"
							}
						}],
						yAxes: [{
							ticks: {
								stepSize: 500
							},
							display: true,
							borderDash: [5, 5],
							gridLines: {
								color: "rgba(0,0,0,0)",
								fontColor: "#fff"
							}
						}]
					}
				}
			});
			}, 1000);
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Bar chart
			/*
			Monday 	Mon. 	Mo.
			Tuesday 	Tue. 	Tu.
			Wednesday 	Wed. 	We.
			Thursday 	Thu. 	Th.
			Friday 	Fri. 	Fr.
			weekend
			(2 days) 	Saturday 	Sat. 	Sa.
			Sunday
			*/
			var form_data = new FormData();
            form_data.append('id_user',"26");
			var days=["Dom","Lun","Mart","Mierc","Juev","Vier","Sab"];
			var count=[0,0,0,0,0,0,0];
			$.ajax({
                type: 'POST',
                url: 'priv/sales_week',
                contentType: false,
                processData: false,
                data: form_data,
                success:function(response) {
					var test = /['"{}]+/g;
					var cad = response.split(",")
					for (var i = 0; i < cad.length; i+=1) 
					{
						var mes = cad[i].replace(test,'');
						var sep = mes.split(":");
						//count[i] = sep[1];  
						//alert(sep[0]);
						if(sep[0] == "Sunday")
						{
							count[0]=sep[1];
						}
						if(sep[0] == "Monday")
						{
							count[1]=sep[1];
						}
						if(sep[0] == "Tuesday")
						{
							count[2]=sep[1];
						}
						if(sep[0] == "Wednesday")
						{
							count[3]=sep[1];
						}
						if(sep[0] == "Thursday")
						{
							count[4]=sep[1];
						}
						if(sep[0] == "Friday")
						{
							count[5]=sep[1];
						}
						if(sep[0] == "Saturday")
						{
							count[6]=sep[1];
						}

					}
                },
                onFailure: function(response){
                    alert("fail");
                }
            });
			setTimeout(function(){
			new Chart(document.getElementById("chartjs-bar"), {
				type: "bar",
				data: {
					labels: days,
					datasets: [{
						backgroundColor: window.theme.primary,
						borderColor: window.theme.primary,
						hoverBackgroundColor: window.theme.primary,
						hoverBorderColor: window.theme.primary,
						data: count,
						barPercentage: .75,
						categoryPercentage: .5
					}/*, {
						label: "This year",
						backgroundColor: "#dee2e6",
						borderColor: "#dee2e6",
						hoverBackgroundColor: "#dee2e6",
						hoverBorderColor: "#dee2e6",
						data: [69, 66, 24, 48, 52, 51, 44, 53, 62, 79, 51, 68],
						barPercentage: .75,
						categoryPercentage: .5
					}*/]
				},
				options: {
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					scales: {
						yAxes: [{
							gridLines: {
								display: false
							},
							stacked: false,
							ticks: {
								stepSize: 20
							}
						}],
						xAxes: [{
							stacked: false,
							gridLines: {
								color: "transparent"
							}
						}]
					}
				}
			});
			}, 1000);
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Doughnut chart
			new Chart(document.getElementById("chartjs-doughnut"), {
				type: "doughnut",
				data: {
					labels: ["Social", "Search Engines", "Direct", "Other"],
					datasets: [{
						data: [260, 125, 54, 146],
						backgroundColor: [
							window.theme.primary,
							window.theme.success,
							window.theme.warning,
							"#dee2e6"
						],
						borderColor: "transparent"
					}]
				},
				options: {
					maintainAspectRatio: false,
					cutoutPercentage: 65,
					legend: {
						display: false
					}
				}
			});
		});
	</script>-->
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var names=[0,0,0,0,0,0,0,0,0];
			var counts=[0,0,0,0,0,0,0,0,0];
			$.ajax({
                type: 'POST',
                url: 'priv/products_year.php',
                contentType: false,
                processData: false,
                success:function(response) {
					console.log(response);
					var test = /['"{}]+/g;
					var cad = response.split(",")
					for (var i = 0; i < cad.length; i+=1) 
					{
						var mes = cad[i].replace(test,'');
						var sep = mes.split(":");
						names[i]=sep[0]; 
						counts[i] = sep[1];  
					}
                },
                onFailure: function(response){
                    alert("fail");
                }
            });
			setTimeout(function(){
			new Chart(document.getElementById("chartjs-pie"), {
				type: "pie",
				data: {
					labels: names,
					datasets: [{
						data: counts,
						backgroundColor: [
							window.theme.primary,
							window.theme.warning,
							window.theme.success,
							window.theme.primary,
							window.theme.warning,
							window.theme.danger,
							window.theme.primary,
							window.theme.success,
							window.theme.danger
						],
						borderColor: "transparent"
					}]
				},
				options: {
					maintainAspectRatio: false,
					legend: {
						display: false
					}
				}
			});
			}, 1000);
		});

		document.addEventListener("DOMContentLoaded", function() {
			var names=[0,0,0,0,0,0,0,0,0];
			var counts=[0,0,0,0,0,0,0,0,0];
			$.ajax({
                type: 'POST',
                url: 'priv/chart_celulares.php',
                contentType: false,
                processData: false,
                success:function(response) {
					console.log(response);
					var test = /['"{}]+/g;
					var cad = response.split(",")
					for (var i = 0; i < cad.length; i+=1) 
					{
						var mes = cad[i].replace(test,'');
						var sep = mes.split(":");
						names[i]=sep[0]; 
						counts[i] = sep[1];  
					}
                },
                onFailure: function(response){
                    alert("fail");
                }
            });
			setTimeout(function(){
			new Chart(document.getElementById("chartjs_celulares"), {
				type: "pie",
				data: {
					labels: names,
					datasets: [{
						data: counts,
						backgroundColor: [
							window.theme.primary,
							window.theme.warning,
							window.theme.success,
							window.theme.primary,
							window.theme.warning,
							window.theme.danger,
							window.theme.primary,
							window.theme.success,
							window.theme.danger
						],
						borderColor: "transparent"
					}]
				},
				options: {
					maintainAspectRatio: false,
					legend: {
						display: false
					}
				}
			});
			}, 1000);
		});
		/*    Iphone      */
		document.addEventListener("DOMContentLoaded", function() {
			var names=[0,0,0,0,0,0,0,0,0];
			var counts=[0,0,0,0,0,0,0,0,0];
			$.ajax({
                type: 'POST',
                url: 'priv/chart_iphone.php',
                contentType: false,
                processData: false,
                success:function(response) {
					console.log(response);
					var test = /['"{}]+/g;
					var cad = response.split(",")
					for (var i = 0; i < cad.length; i+=1) 
					{
						var mes = cad[i].replace(test,'');
						var sep = mes.split(":");
						names[i]=sep[0]; 
						counts[i] = sep[1];  
					}
                },
                onFailure: function(response){
                    alert("fail");
                }
            });
			setTimeout(function(){
			new Chart(document.getElementById("chartjs_iphone"), {
				type: "pie",
				data: {
					labels: names,
					datasets: [{
						data: counts,
						backgroundColor: [
							window.theme.primary,
							window.theme.warning,
							window.theme.success,
							window.theme.primary,
							window.theme.warning,
							window.theme.danger,
							window.theme.primary,
							window.theme.success,
							window.theme.danger,
							window.theme.primary,
							window.theme.warning,
							window.theme.success,
							window.theme.primary,
							window.theme.warning,
							window.theme.danger,
							window.theme.primary,
							window.theme.success,
							window.theme.danger
						],
						borderColor: "transparent"
					}]
				},
				options: {
					maintainAspectRatio: false,
					legend: {
						display: false
					}
				}
			});
			}, 1000);
		});
		/*    Motorola      */
		document.addEventListener("DOMContentLoaded", function() {
			var names=[0,0,0,0,0,0,0,0,0];
			var counts=[0,0,0,0,0,0,0,0,0];
			$.ajax({
                type: 'POST',
                url: 'priv/chart_motorola.php',
                contentType: false,
                processData: false,
                success:function(response) {
					console.log(response);
					var test = /['"{}]+/g;
					var cad = response.split(",")
					for (var i = 0; i < cad.length; i+=1) 
					{
						var mes = cad[i].replace(test,'');
						var sep = mes.split(":");
						names[i]=sep[0]; 
						counts[i] = sep[1];  
					}
                },
                onFailure: function(response){
                    alert("fail");
                }
            });
			setTimeout(function(){
			new Chart(document.getElementById("chartjs_motorola"), {
				type: "pie",
				data: {
					labels: names,
					datasets: [{
						data: counts,
						backgroundColor: [
							window.theme.primary,
							window.theme.warning,
							window.theme.success,
							window.theme.primary,
							window.theme.warning,
							window.theme.danger,
							window.theme.primary,
							window.theme.success,
							window.theme.danger,
							window.theme.primary,
							window.theme.warning,
							window.theme.success,
							window.theme.primary,
							window.theme.warning,
							window.theme.danger,
							window.theme.primary,
							window.theme.success,
							window.theme.danger
						],
						borderColor: "transparent"
					}]
				},
				options: {
					maintainAspectRatio: false,
					legend: {
						display: false
					}
				}
			});
			}, 1000);
		});
		/*    Samnsung      */
		document.addEventListener("DOMContentLoaded", function() {
			var names=[0,0,0,0,0,0,0,0,0];
			var counts=[0,0,0,0,0,0,0,0,0];
			$.ajax({
                type: 'POST',
                url: 'priv/chart_samnsung.php',
                contentType: false,
                processData: false,
                success:function(response) {
					console.log(response);
					var test = /['"{}]+/g;
					var cad = response.split(",")
					for (var i = 0; i < cad.length; i+=1) 
					{
						var mes = cad[i].replace(test,'');
						var sep = mes.split(":");
						names[i]=sep[0]; 
						counts[i] = sep[1];  
					}
                },
                onFailure: function(response){
                    alert("fail");
                }
            });
			setTimeout(function(){
			new Chart(document.getElementById("chartjs_samnsung"), {
				type: "pie",
				data: {
					labels: names,
					datasets: [{
						data: counts,
						backgroundColor: [
							window.theme.primary,
							window.theme.warning,
							window.theme.success,
							window.theme.primary,
							window.theme.warning,
							window.theme.danger,
							window.theme.primary,
							window.theme.success,
							window.theme.danger,
							window.theme.primary,
							window.theme.warning,
							window.theme.success,
							window.theme.primary,
							window.theme.warning,
							window.theme.danger,
							window.theme.primary,
							window.theme.success,
							window.theme.danger
						],
						borderColor: "transparent"
					}]
				},
				options: {
					maintainAspectRatio: false,
					legend: {
						display: false
					}
				}
			});
			}, 1000);
		});
	</script>
	<!--
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Radar chart
			new Chart(document.getElementById("chartjs-radar"), {
				type: "radar",
				data: {
					labels: ["Speed", "Reliability", "Comfort", "Safety", "Efficiency"],
					datasets: [{
						label: "Model X",
						backgroundColor: "rgba(0, 123, 255, 0.2)",
						borderColor: window.theme.primary,
						pointBackgroundColor: window.theme.primary,
						pointBorderColor: "#fff",
						pointHoverBackgroundColor: "#fff",
						pointHoverBorderColor: window.theme.primary,
						data: [70, 53, 82, 60, 33]
					}, {
						label: "Model S",
						backgroundColor: "rgba(220, 53, 69, 0.2)",
						borderColor: window.theme.danger,
						pointBackgroundColor: window.theme.danger,
						pointBorderColor: "#fff",
						pointHoverBackgroundColor: "#fff",
						pointHoverBorderColor: window.theme.danger,
						data: [35, 38, 65, 85, 84]
					}]
				},
				options: {
					maintainAspectRatio: false
				}
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Polar Area chart
			new Chart(document.getElementById("chartjs-polar-area"), {
				type: "polarArea",
				data: {
					labels: ["Speed", "Reliability", "Comfort", "Safety", "Efficiency"],
					datasets: [{
						label: "Model S",
						data: [35, 38, 65, 70, 24],
						backgroundColor: [
							window.theme.primary,
							window.theme.success,
							window.theme.danger,
							window.theme.warning,
							window.theme.info
						]
					}]
				},
				options: {
					maintainAspectRatio: false
				}
			});
		});
	</script>-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
<?php
}
else{
	echo'
		<script>
			window.location = "index.php";
		</script>
		';
}
?>
</html>