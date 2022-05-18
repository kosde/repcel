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
	<link rel="shortcut icon" href="../../assets/Logo_2.png"> 
	

	<title>Acme Sticker</title>

	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
	<!--<link rel="canonical" href="https://demo.adminkit.io/" />
	<script src="js/settings.js"></script>-->
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
    </script>
</head>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="dashboard.php">
          <span class="align-middle">Acme Sticker</span>
        </a>

		<ul class="sidebar-nav">
					<li class="sidebar-item">
						<a class="sidebar-link" href="dashboard.php">
							<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
						</a>
					</li>
					<li class="sidebar-item active">
						<a class="sidebar-link" href="orders.php">
							<i class="align-middle" data-feather="check-circle"></i> <span class="align-middle">Orders</span>
						</a>
					</li>
					
					<li class="sidebar-item">
						<a class="sidebar-link" href="customers.php">
							<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Customers</span>
						</a>
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="sales.php">
							<i class="align-middle" data-feather="bar-chart-2"></i> <span class="align-middle">Sales</span>
						</a>
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="settings.php">
							<i class="align-middle" data-feather="settings"></i> <span class="align-middle">Settings</span>
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
									<span class="indicator"></span>
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
							</div>-->
						</li>
						<!--
						<li class="nav-item dropdown">
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
						</li>-->
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
								<span class="text-dark"><?php echo $_SESSION['e_admi'];?></span>
							</a>
							<div class="dropdown-menu dropdown-menu-end">
								<a class="dropdown-item" href="settings.php"><i class="align-middle me-1" data-feather="user"></i> Settings</a>
								<a class="dropdown-item" href="#" style="display: none;visibility: hidden;"><i class="align-middle me-1" data-feather="pie-chart"></i> Analytics</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="priv/logout.php">Log out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>

			<main class="content">
				<div class="container-fluid p-0">

					<div class="row mb-2 mb-xl-3">
						<div class="col-auto d-none d-sm-block">
							<h3>Orders</h3>
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
					<div class="row">
						<div class="col-xl-12 col-xxl-12 d-flex">
							<div class="w-100">
								<div class="row">
								<?php
									if(isset($_SESSION['email_admi']))
									{
									?>
										<main style="position: relative;width: 100% !important;background-color:white;" >
											<div class="content">
												<div class="container">
													<?php
													$conexion =  mysqli_connect("localhost","u4g4jzvgram6g","^(3@uzE24H3C","db8qd64hszcs9u");
													require_once "../../vendor/autoload.php";
													require_once "../../config_cloud.php";
													$query    = "SELECT * FROM orders ORDER BY id DESC";
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
																$query_user    = "SELECT * FROM users WHERE id='$id_user'";
																$result_user   = mysqli_query($conexion,$query_user);
																$extraido2     = mysqli_fetch_array($result_user);
																$name          = $extraido2['usrname'];
																$email         = $extraido2['email'];
																$code          = $extraido2['code'];
																$phone         = $extraido2['phone'];
																//id	id_user	country	full_name	company	street_address1	street_address2	city	zip_code	statedir
																$query_address = "SELECT * FROM address_t WHERE id='$id_address'";
																$result_address= mysqli_query($conexion,$query_address);
																$extraido3     = mysqli_fetch_array($result_address);
																$country       = $extraido3['country'];
																$full_name     = $extraido3['full_name'];
																$company       = $extraido3['company'];
																$street_address1= $extraido3['street_address1'];
																$street_address2= $extraido3['street_address2'];
																$city          = $extraido3['city'];
																$statedir      = $extraido3['statedir'];
																$zip_code      = $extraido3['zip_code'];
																$query_images  = "SELECT * FROM images WHERE id ='$id_images'";
																$result_images = mysqli_query($conexion,$query_images);
																$extraido4     = mysqli_fetch_array($result_images);
															
															?>
															<form action="../php/sendproof.php" class="orderslist .col-md-12 " method="post" enctype="multipart/form-data" style="padding-bottom:100px;">
																<div class="col-md-12 d-inline-block">
																	<div class="col-md-4 d-inline-block">
																		<h2 class="col-md-2">Order</h2>
																	</div>
																	<label class="col-md-6 ">
																		<h2 style="text-align: right;"><?php echo $id;?></h2>
																	</label>
																</div>
																<h4 class="customerinfo">Customer Info</h4>
																<div style="width: 250px;float: right;">
																	<?php
																	if( $_SESSION['e_admi'] == 1 || $_SESSION['tipe_admi']  == 10)
																	{
																	
																		if($statusp == 2)
																		{
																		?>
																		<input class="button yellow large pr-4" style="width: 100%;margin-bottom: 10px;" id="printB_<?php echo $id;?>" onclick="Printing_alert(<?php echo $id;?>)" type="button" value="Printing alert">
																		<div class="figure" style="width: 100%;margin-bottom: 10px;">
																		
																			<input type="text" style="width: 100%;" placeholder=" Input traking number" class="figure" id="traking_n<?php echo $id;?>" name="traking_n<?php echo $id;?>">
																			<input class="button green large pr-4 figure" style="width: 100%;margin-bottom: 10px;" id="traking_b<?php echo $id;?>" onclick="Traking_number(<?php echo $id;?>)" type="button" value="Submit traking number">
																		</div>
																		<?php
																		}
																		if($statusp == 7)
																		{
																		?>
																		<input class="button yellow large pr-4" style="width: 100%;margin-bottom: 10px;background-color: azure;color: darkgray disabled id="printB_<?php echo $id;?>" onclick="Printing_alert(<?php echo $id;?>)" type="button" value="Printing alert">
																		<div class="figure" style="width: 100%;margin-bottom: 10px;">
																		
																			<input type="text" style="width: 100%;" placeholder=" Input traking number" class="figure" id="traking_n<?php echo $id;?>" name="traking_n<?php echo $id;?>">
																			<input class="button green large pr-4 figure" style="width: 100%;margin-bottom: 10px;" id="traking_b"onclick="Traking_number(<?php echo $id;?>)" type="button" value="Submit traking number">
																		</div>
																		<?php
																		}
																		if($statusp == 8)
																		{
																		?>
																		<input class="button yellow large pr-4" style="width: 100%;margin-bottom: 10px;background-color: azure;color: darkgray;" disabled id="printB_<?php echo $id;?>" onclick="Printing_alert(<?php echo $id;?>)" type="button" value="Printing alert">
																		<div class="figure" style="width: 100%;margin-bottom: 10px;">
																		
																			<input type="text" style="width: 100%;" placeholder=" Input traking number"  class="figure" id="traking_n<?php echo $id;?>" name="traking_n<?php echo $id;?>">
																			<input class="button green large pr-4 figure" style="width: 100%;margin-bottom: 10px;background-color: azure;color: darkgray;" disabled id="traking_b"onclick="Traking_number(<?php echo $id;?>)" type="button" value="Submit traking number">
																		</div>
																		<?php
																		}
																	}
																	?>
																</div>
																<div>
																	<div class="dataorder" style="display: grid;">
																		<label class="campos">Name:</label><small class="field-help-message dateuser">&nbsp;&nbsp; <?php echo $name;?></small>
																		<input type="text" id="name<?php echo $id;?>" style="display: none;" name ="name"value="<?php echo $name;?>">
																		<input type="text" name="id_order" value="<?php echo $id;?>" style="display: none;" >
																		<label class="campos">Email:</label><small class="field-help-message dateuser">&nbsp;&nbsp; <?php echo $email;?></small>
																		<label class="campos">Phone:</label><small class="field-help-message dateuser">&nbsp;&nbsp; <?php echo $phone;?></small>
																	</div>
																	<h4 style="text-align: center;">Order details</h4>
																	<div class="dataorder" style="padding: 10px 0 10px 0;margin: 30px 0 30px 0;">
																		<label class="campos">Date received:</label><small class="field-help-message dateuser" style="width: 80%;">&nbsp;&nbsp; <?php echo $date;?></small>
																		<div class="dataorder col-md-12 ">
																			<label class="field-help-message dateuser">Shipping Adress: </label><small>&nbsp;&nbsp; <?php echo  $country." " . $full_name." " .$company." " .$street_address1." " .$street_address2." ". $zip_code." " .$city.",". $statedir;?></small>
																		</div>
																		<?php
																			if($statusp ==6)
																			{
																				?>
																					<label class="campos"></label><small class="field-help-message dateuser" style="width: 80%;font-size: 20px;text-align: center;">Reorder</small>
																				<?php
																			}
																		?>
																		<?php
																			if($statusp ==4)
																			{
																				?>
																				<img class="img_approved" alt="Approved" src="/assets/cancelled.png" style="height: 262px;padding-left: 20%;z-index: 99999;position: absolute;
																				-webkit-transform: translateY(19%);-ms-transform: translateY(19%); -moz-transform: translateY(19%);  -o-transform: translateY(19%);">
																				<?php
																			}
																		?>
																	</div>
																	<div class="dataorder" style="padding: 10px 0 10px 0;margin: 30px 0 30px 0; width: 350px;float: left;">
																		<div style="float: left;height: 80px;width: 60px;padding: 10px 0 0 30px;">
																			<?php
																				$name_image = $extraido4['nombre'];
																				$extension = pathinfo($name_image , PATHINFO_EXTENSION);
																				$nombre_base = basename($name_image , '.'.$extension);  
																				$imagen = cl_image_tag($nombre_base,array("format" => "png","width"=>60));
																			?>
																			<?php echo $imagen; ?>
																	</div>
																		<div style="padding-left: 35%; width:300px;">
																			<label class="campos fontBold">Product:</label><small class="field-help-message dateuser" style="width: 90%;">&nbsp;&nbsp; <?php echo $tipe . $_SESSION['e_admi'].$_SESSION['tipe_admi'];?></small> <br>
																			<label class="campos fontBold">Size:</label><small class="field-help-message dateuser" style="width: 90%;">&nbsp;&nbsp; <?php echo $width_inches."\" x ".$height_inches ."\"";?></small><br>
																			<label class="campos fontBold">Qty:</label><small class="field-help-message dateuser" style="width: 90%;">&nbsp;&nbsp; <?php echo $quantity;?></small><br>
																			<label class="campos fontBold">Sticker Detail:</label><small class="field-help-message dateuser" style="width: 80%;">&nbsp;&nbsp; <?php echo $txt_details;?></small>
																		</div>
																	</div>
																	<div class="dataorder" style="padding: 10px 0 10px 0;margin: 30px 0 30px 0; width: 600px;float: right;">
																		<label class="campos fontBold">Proof</label>
																		<div style="height: 80px;width: 60px;position: absolute;">
																			<?php
																			if($statusp !=6 && $statusp !=4)
																			{
																				$query_coments = "SELECT * FROM coments WHERE  	id_orders ='$id' AND coment_client ='1'";
																				$coments_result= mysqli_query($conexion,$query_coments);
																				$coments_cont = mysqli_num_rows($coments_result);
																				$coment_proof  = 0;
																				$cont=1;
																				while ($extraido5 = mysqli_fetch_array($coments_result))
																				{
																					$id_coments    = $extraido5['id'];
																					$id_orders     = $extraido5['id_orders'];
																					$coment_usr    = $extraido5['coment_usr'];
																					$coment_client = $extraido5['coment_client'];
																					$date_coment   = $extraido5['date_coment'];
																					$file_coment   = $extraido5['file_coment'];
																					$link          = $extraido5['link'];
																					if($cont==$coments_cont)
																					{
																						?>
																								<img style="height:100%; filter: drop-shadow(0 2px 5px rgba(0, 0, 0, 0.7));" class="zoom" id="<?php echo $id_coments;?>" src="<?php echo($link);?>.png">
																							</div>
																							<div style="float:right;width: 190px;padding-right: 20px;">
																								<?php
																								//if( $_SESSION['e_admi'] == 1 || $_SESSION['tipe_admi']  == 10)
																								//{
																									?>
																								<!--<input type="file" style="width: 100%;" name="Imagen" id="imgInp echo $id;" > onchange="inputf(this, //echo $id;?>)">-->
																								<a href="#" id="removefile_id<?php echo $id;?>" onclick="removefile(<?php echo $id;?>)" style="position: absolute;display: none;"><i class='fas fa-times-circle'></i></a> 
																								<label for="">Link</label>
																								<input type="text" name="email" id="email<?php echo $id;?>" value="<?php echo $email;?>" style="display: none;">
																								<input type="text" name="link2" id="link2<?php echo $id;?>" value="<?php echo $link;?>" style="display: none;">
																								<input type="text" name="name" id="nameU<?php echo $id;?>" value="<?php echo $name;?>" style="display: none;">
																								<input type="text" name="code" id="code<?php echo $id;?>" value="<?php echo $code;?>" style="display: none;">
																								<input type="text" name="phone" id="phone<?php echo $id;?>" value="<?php echo $phone;?>" style="display: none;">
																								<input type="text" name="id_user" id="id_user<?php echo $id;?>" value="<?php echo $id_user;?>" style="display: none;">
																								<input type="text" name="link" id="txt<?php echo $id;?>"style="width: 100%;">
																								<label for="">Coment</label>
																								<?php
																								$extension = pathinfo($name_image , PATHINFO_EXTENSION);
																								$nombre_base = basename($name_image , '.'.$extension);  
																								$tag = cl_image_tag($name_image,  array('flags'=>'attachment:'.$nombre_base, 'fetch_format'=>$extension));
																								//echo $tag;
																								
																								preg_match('/ src=(".*?"|\'.*?\'|.*?)[ >]/i', $tag, $m);
																								$src = $m[1];
																								//$src = preg_match('/<img src=\"(.*?)\".*\/>/', $tag , $results);
																								//echo $src;
																								
																								?>
																								<textarea id="coment<?php echo $id;?>" name="coment" style="font-family:'Gotham-Light';width: 100%;"></textarea>
																								<div type="button" class="btn btn-outline-primary" id="button<?php echo $id;?>" onclick="SendProof(<?php echo $id;?>)">Send</div>
																								<div type="button" class="btn btn-outline-primary" id="button<?php echo $id;?>" onclick="Download(<?php echo $src;?>)">Download</div>
																								<?php
																								//}
																								?>
																							</div>
																						<?php
																					}
																					$cont++;
																				}
																				if($coment_proof==1)
																				{
																				
																				}
																			}
																			else{
																				?>
																						<img style="height:100%;">
																					</div>
																					<div style="float:right;width: 190px;padding-right: 20px;">
																					</div>
																				<?php
																			}
																			if($statusp == 6)
																			{
																				$query_artwork =  "SELECT * FROM artworks WHERE id='$id_images'";
																				$verificar_coment = mysqli_query($conexion, $query_artwork);
																				while($extraido= mysqli_fetch_array($verificar_coment))
																				{
																					$id             = $extraido['id'];
																					$id_user        = $extraido['id_user'];
																					$name_image     = $extraido['name_image'];
																					$width_inches   = $extraido['width_inches'];
																					$height_inches  = $extraido['height_inches'];
																					$dates          = $extraido['dates'];
																					$tipe           = $extraido['tipe'];
																					$link           = $extraido['link'];
																					$id_order       = $extraido['id_order'];
																				}
																				?>
																						<img style="width: 60%;filter: drop-shadow(0 2px 5px rgba(0, 0, 0, 0.7));" class="" id="<?php echo $id;?>" src="<?php echo($link);?>.png">
																				<?php
																			}
																			?>
																		
																		
																	</div>
																</div>
															</form>
														<?php
														}
													}
													?><!--
													<form action="" class="orderslist">
														<div class="button secondary large" style="float: left;"><h2>Order</h2></div>
														<label class="dataorder numberorder"><h2 style="text-align: left;padding-left: 20px;">#  $id</h2></label>
														<h4 class="customerinfo">Customer Info</h4>
														<div>
															<div class="dataorder">
																<label class="campos">Name:</label><small class="field-help-message dateuser">$name</small>
																<label class="campos">Email:</label><small class="field-help-message dateuser">$email</small>
																<label class="campos">Phone:</label><small class="field-help-message dateuser">$phone</small>
															</div>
															<h4>Order details</h4>
															<div class="dataorder" style="padding: 10px 0 10px 0;margin: 30px 0 30px 0;">
																<label class="campos">Date received:</label><small class="field-help-message dateuser" style="width: 80%;">$date</small>
															</div>
															<div class="dataorder" style="padding: 10px 0 10px 0;margin: 30px 0 30px 0;">
																<div style="float: left;height: 80px;width: 60px;padding: 10px;">
																	<img src="" alt="" style="width: 60px;">
																</div>
																<div style="padding-left: 20%;">
																	<label class="campos">Product:</label><small class="field-help-message dateuser" style="width: 85%;">$tipe</small>
																	<label class="campos">Size:</label><small class="field-help-message dateuser" style="width: 90%;">$width_inches $height_inches</small>
																	<label class="campos">Qty:</label><small class="field-help-message dateuser" style="width: 90%;">$quantity</small>
																	<label class="campos">Sticker Detail:</label><small class="field-help-message dateuser" style="width: 80%;">$txt_details</small>
																</div>
															</div>
															<div class="dataorder" style="padding: 10px 0 10px 0;margin: 30px 0 30px 0;">
																<label class="campos">Shipping Adress:</label><small class="field-help-message dateuser" style="width: 80%;"s>$country $full_name $company $street_address1 $street_address2 $zip_code</small>
															</div>
														</div>
													</form>-->
												</div>
											</div>
										</main>
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
								</div>
								<table>
									<tr>
										<?php
										if($pag>1)
										{
											?>
												<td class="prev" title="Previous"><a href="contact_all.php?pag=<?php echo $ant; ?>"><<<</a></td>
											<?php
										}else
										{
											?>
												<td class="prev" style="visibility: hidden;" title="Previous"><a href="contact_all.php?pag=<?php echo $ant; ?>"><<<</a></td>
											<?php
										}
										?>
										<td class="" title="number" style="text-align: center;"><?php echo $pag; ?></td>
										<?php
										if($pag+2<$cantidad)
										{
											?>
												<td class="next" title="Next" style="float: right;"><a href="contact_all.php?pag=<?php echo $sig; ?>"> >>></a></td>
											<?php
										}
										else{
											?>
												<td class="next" style="visibility: hidden;" title="Next" style="float: right;"><a href="">>>></a></td>
											<?php
										}
										?>
									</tr>
								</table>
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
								<a href="index.html" class="text-muted"><strong>Acme Sticker</strong></a> &copy;
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
			var ctx = document.getElementById("chartjs-dashboard-line").getContext("2d");
			var gradient = ctx.createLinearGradient(0, 0, 0, 225);
			gradient.addColorStop(0, "rgba(215, 227, 244, 1)");
			gradient.addColorStop(1, "rgba(215, 227, 244, 0)");
			// Line chart
			new Chart(document.getElementById("chartjs-dashboard-line"), {
				type: "line",
				data: {
					labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
					datasets: [{
						label: "Sales ($)",
						fill: true,
						backgroundColor: gradient,
						borderColor: window.theme.primary,
						data: [
							2115,
							1562,
							1584,
							1892,
							1587,
							1923,
							2566,
							2448,
							2805,
							3438,
							2917,
							3327
						]
					}]
				},
				options: {
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
								color: "rgba(0,0,0,0.0)"
							}
						}],
						yAxes: [{
							ticks: {
								stepSize: 1000
							},
							display: true,
							borderDash: [3, 3],
							gridLines: {
								color: "rgba(0,0,0,0.0)"
							}
						}]
					}
				}
			});
		});
	</script>
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
			// Bar chart
			new Chart(document.getElementById("chartjs-dashboard-bar"), {
				type: "bar",
				data: {
					labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
					datasets: [{
						label: "This year",
						backgroundColor: window.theme.primary,
						borderColor: window.theme.primary,
						hoverBackgroundColor: window.theme.primary,
						hoverBorderColor: window.theme.primary,
						data: [54, 67, 41, 55, 62, 45, 55, 73, 60, 76, 48, 79],
						barPercentage: .75,
						categoryPercentage: .5
					}]
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
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var markers = [{
					coords: [31.230391, 121.473701],
					name: "Shanghai"
				},
				{
					coords: [28.704060, 77.102493],
					name: "Delhi"
				},
				{
					coords: [6.524379, 3.379206],
					name: "Lagos"
				},
				{
					coords: [35.689487, 139.691711],
					name: "Tokyo"
				},
				{
					coords: [23.129110, 113.264381],
					name: "Guangzhou"
				},
				{
					coords: [40.7127837, -74.0059413],
					name: "New York"
				},
				{
					coords: [34.052235, -118.243683],
					name: "Los Angeles"
				},
				{
					coords: [41.878113, -87.629799],
					name: "Chicago"
				},
				{
					coords: [51.507351, -0.127758],
					name: "London"
				},
				{
					coords: [40.416775, -3.703790],
					name: "Madrid "
				}
			];
			var map = new jsVectorMap({
				map: "world",
				selector: "#world_map",
				zoomButtons: true,
				markers: markers,
				markerStyle: {
					initial: {
						r: 9,
						strokeWidth: 7,
						stokeOpacity: .4,
						fill: window.theme.primary
					},
					hover: {
						fill: window.theme.primary,
						stroke: window.theme.primary
					}
				}
			});
			window.addEventListener("resize", () => {
				map.updateSize();
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
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

</body>

</html>