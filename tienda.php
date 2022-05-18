<!DOCTYPE html>
<html lang="en">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>Repcel</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
<!-- site icons -->
<link rel="icon" href="images/fevicon/fevicon.png" type="image/gif" />
<!-- bootstrap css -->
<link rel="stylesheet" href="css/bootstrap.min.css" />
<!-- Site css -->
<link rel="stylesheet" href="css/style.css" />
<!-- responsive css -->
<link rel="stylesheet" href="css/responsive.css" />
<!-- colors css -->
<link rel="stylesheet" href="css/colors1.css" />
<!-- custom css -->
<link rel="stylesheet" href="css/custom.css" />
<!-- wow Animation css -->
<link rel="stylesheet" href="css/animate.css" />
<!-- revolution slider css -->
<link rel="stylesheet" type="text/css" href="revolution/css/settings.css" />
<link rel="stylesheet" type="text/css" href="revolution/css/layers.css" />
<link rel="stylesheet" type="text/css" href="revolution/css/navigation.css" />
</head>
<body id="default_theme" class="it_service">
<!-- loader -->
<div class="bg_load"> <img class="loader_animation" src="images/loaders/loader_1.png" alt="#"/> </div>
<!-- end loader -->
<!-- header -->
<header id="default_header" class="header_style_1">
  <!-- header bottom -->
  <div class="header_bottom">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
          <!-- logo start -->
          <div class="logo"> <a href="it_home.html"><img src="images/logos/it_logo.png" alt="logo" /></a> </div>
          <!-- logo end -->
        </div>
        <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
        <!-- menu start -->
          <div class="menu_side">
            <div id="navbar_menu">
              <ul class="first-ul">
                <li><a class="active" href="index.html">Inicio</a></li>
                <li><a href="#servicios">Servicios</a></li>
                <li><a href="#nosotros">Nosotros</a></li> 
                <li><a href="#nosotros">Tienda</a></li>      
                <li> <a href="#contacto">Contacto</a></li>
              </ul>
            </div>
            <div class="search_icon">
              <ul>
                <li><a href="#" data-toggle="modal" data-target="#search_bar"><i class="fa fa-search" aria-hidden="true"></i></a></li>
              </ul>
            </div>
          </div>
        <!-- menu end -->
        </div>
      </div>
    </div>
  </div>
  <!-- header bottom end -->
</header>
<style>
.box img
{
	width: 100%;
	height: auto;
}

@supports(object-fit: cover)
{
	.box img
	{
	height: 100%;
	object-fit: cover;
	object-position: center center;
	}
}
</style>
<!-- end header -->
<!-- inner page banner 
<div id="inner_banner" class="section inner_banner_section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="title-holder">
            <div class="title-holder-cell text-left">
              <h1 class="page-title">Shop Page</h1>
              <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li class="active">Shop</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
end inner page banner -->
<!-- section -->
<div class="section padding_layout_1 product_list_main">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="side_bar">
          <div class="side_bar_blog">
            <h4>Buscar</h4>
            <div class="side_bar_search">
              <div class="input-group stylish-input-group">
                <input class="form-control" id="buscar_producto" placeholder="Buscar productos" type="text">
                <span class="input-group-addon">
                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </span> </div>
            </div>
          </div>
          <div class="side_bar_blog">
            <h4>OUR SERVICE</h4>
            <div class="categary">
              <ul>
                <li><a href="it_data_recovery.html"><i class="fa fa-angle-right"></i> Data recovery</a></li>
                <li><a href="it_computer_repair.html"><i class="fa fa-angle-right"></i> Computer repair</a></li>
                <li><a href="it_mobile_service.html"><i class="fa fa-angle-right"></i> Mobile service</a></li>
                <li><a href="it_network_solution.html"><i class="fa fa-angle-right"></i> Network solutions</a></li>
                <li><a href="it_techn_support.html"><i class="fa fa-angle-right"></i> Technical support</a></li>
              </ul>
            </div>
          </div>
          <!--
            <div class="side_bar_blog">
              <h4>RECENT NEWS</h4>
              <div class="categary">
                <ul>
                  <li><a href="it_data_recovery.html"><i class="fa fa-angle-right"></i> Land lights let be divided</a></li>
                  <li><a href="it_computer_repair.html"><i class="fa fa-angle-right"></i> Seasons over bearing air</a></li>
                  <li><a href="it_mobile_service.html"><i class="fa fa-angle-right"></i> Greater open after grass</a></li>
                  <li><a href="it_network_solution.html"><i class="fa fa-angle-right"></i> Gathered was divide second</a></li>
                </ul>
              </div>
            </div>
            <div class="side_bar_blog">
              <h4>TAG</h4>
              <div class="tags">
                <ul>
                  <li><a href="#">Bootstrap</a></li>
                  <li><a href="#">HTML5</a></li>
                  <li><a href="#">Wordpress</a></li>
                  <li><a href="#">Bootstrap</a></li>
                  <li><a href="#">HTML5</a></li>
                </ul>
              </div>
            </div>
          -->
        </div>
      </div>
      <div class="col-md-9">
      <?php
      include "php/conexion.php";
      $query    = "SELECT * FROM tienda ORDER BY id DESC";
      $validar  = mysqli_query($conexion,$query);
      if(mysqli_num_rows($validar)>0)
      {
        ?>
        <table class="table table-striped" style="width:100%" id="tienda_all">
          <thead>
            <tr>
              <th class="col-md-4"></th>
              <th class="col-md-4"></th>
              <th class="col-md-4"></th>
            </tr>
          </thead>
          <tbody>
            <?php
              $cont       = 0;
              while ($extraido= mysqli_fetch_array($validar))
              {
                $id				  = $extraido['id'];
                $nombre			= $extraido['nombre']; 	
                $categoria	= $extraido['categoria']; 	
                $cantidad		= $extraido['cantidad']; 	
                $coste			= $extraido['coste']; 	
                $precio			= $extraido['precio']; 	
                $imagen			= $extraido['imagen']; 	
                if($cont > 2)
                {
                  $cont = 0;
                }
                if($cont == 0)
                {
                ?>
                  <tr style="background-color: transparent !important;">
                <?php
                }//col-md-4 col-sm-6 col-xs-12 margin_bottom_30_all
                ?>
                  <td>
                    <div class="">
                      <div class="product_list" style="background: #f3f3f3;">
                        <div class="product_img box"> <img src="data:image/png;base64,<?php echo base64_encode($imagen);?>" alt=""> </div>
                        <div class="product_detail_btm">
                          <div class="center">
                            <h4><a href="it_shop_detail.html" style="color: #000;"><?php echo $categoria."<br>".$nombre;?></a></h4>
                          </div>
                          <!--
                            <div class="starratin">
                              <div class="center"> 
                                <i class="fa fa-star" aria-hidden="true"></i> 
                                <i class="fa fa-star" aria-hidden="true"></i> 
                                <i class="fa fa-star" aria-hidden="true"></i> 
                                <i class="fa fa-star" aria-hidden="true"></i> 
                                <i class="fa fa-star-o" aria-hidden="true"></i> 
                              </div>
                            </div>
                          -->
                          <div class="product_price">
                            <p><span class="precio_tienda"><?php echo "$ " .$precio;?></span></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
                  <?php
                  if($cont > 2)
                  {
                  ?>
                    </tr>
                  <?php
                  }
                $cont++;
              }
            ?>
          </tbody>
        </table>
        <?php
      }
      ?>
      <!--
        <div class="row">
          <a href="#">
            <div class="col-md-4 col-sm-6 col-xs-12 margin_bottom_30_all">
              <div class="product_list">
                <div class="product_img"> <img class="img-responsive" src="images/it_service/1.jpg" alt=""> </div>
                <div class="product_detail_btm">
                  <div class="center">
                    <h4><a href="it_shop_detail.html">Norton Internet Security</a></h4>
                  </div>
                  <div class="starratin">
                    <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
                  </div>
                  <div class="product_price">
                    <p><span class="old_price">$15.00</span> – <span class="new_price">$25.00</span></p>
                  </div>
                </div>
              </div>
            </div>
          </a>
          <div class="col-md-4 col-sm-6 col-xs-12 margin_bottom_30_all">
            <div class="product_list">
              <div class="product_img"> <img class="img-responsive" src="images/it_service/2.jpg" alt=""> </div>
              <div class="product_detail_btm">
                <div class="center">
                  <h4><a href="it_shop_detail.html">Kaspersky Internet Security</a></h4>
                </div>
                <div class="starratin">
                  <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
                </div>
                <div class="product_price">
                  <p><span class="old_price">$24.99</span><span class="new_price"> $12.49</span></p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12 margin_bottom_30_all">
            <div class="product_list">
              <div class="product_img"> <img class="img-responsive" src="images/it_service/3.jpg" alt=""> </div>
              <div class="product_detail_btm">
                <div class="center">
                  <h4><a href="it_shop_detail.html">Mcafee Livesafe Antivirus</a></h4>
                </div>
                <div class="starratin">
                  <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
                </div>
                <div class="product_price">
                  <p><span class="old_price">$24.99</span><span class="new_price"> $12.49</span></p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12 margin_bottom_30_all">
            <div class="product_list">
              <div class="product_img"> <img class="img-responsive" src="images/it_service/4.jpg" alt=""> </div>
              <div class="product_detail_btm">
                <div class="center">
                  <h4><a href="it_shop_detail.html">Norton Internet Security</a></h4>
                </div>
                <div class="starratin">
                  <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
                </div>
                <div class="product_price">
                  <p><span class="old_price">$15.00</span> – <span class="new_price">$25.00</span></p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12 margin_bottom_30_all">
            <div class="product_list">
              <div class="product_img"> <img class="img-responsive" src="images/it_service/5.jpg" alt=""> </div>
              <div class="product_detail_btm">
                <div class="center">
                  <h4><a href="it_shop_detail.html">Norton Internet Security</a></h4>
                </div>
                <div class="starratin">
                  <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
                </div>
                <div class="product_price">
                  <p><span class="old_price">$15.00</span> – <span class="new_price">$25.00</span></p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12 margin_bottom_30_all">
            <div class="product_list">
              <div class="product_img"> <img class="img-responsive" src="images/it_service/6.jpg" alt=""> </div>
              <div class="product_detail_btm">
                <div class="center">
                  <h4><a href="it_shop_detail.html">Kaspersky Internet Security</a></h4>
                </div>
                <div class="starratin">
                  <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
                </div>
                <div class="product_price">
                  <p><span class="old_price">$24.99</span><span class="new_price"> $12.49</span></p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12 margin_bottom_30_all">
            <div class="product_list">
              <div class="product_img"> <img class="img-responsive" src="images/it_service/7.jpg" alt=""> </div>
              <div class="product_detail_btm">
                <div class="center">
                  <h4><a href="it_shop_detail.html">Mcafee Livesafe Antivirus</a></h4>
                </div>
                <div class="starratin">
                  <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
                </div>
                <div class="product_price">
                  <p><span class="old_price">$24.99</span><span class="new_price"> $12.49</span></p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12 margin_bottom_30_all">
            <div class="product_list">
              <div class="product_img"> <img class="img-responsive" src="images/it_service/8.jpg" alt=""> </div>
              <div class="product_detail_btm">
                <div class="center">
                  <h4><a href="it_shop_detail.html">Norton Internet Security</a></h4>
                </div>
                <div class="starratin">
                  <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
                </div>
                <div class="product_price">
                  <p><span class="old_price">$15.00</span> – <span class="new_price">$25.00</span></p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12 margin_bottom_30_all">
            <div class="product_list">
              <div class="product_img"> <img class="img-responsive" src="images/it_service/1.jpg" alt=""> </div>
              <div class="product_detail_btm">
                <div class="center">
                  <h4><a href="it_shop_detail.html">Norton Internet Security</a></h4>
                </div>
                <div class="starratin">
                  <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
                </div>
                <div class="product_price">
                  <p><span class="old_price">$15.00</span> – <span class="new_price">$25.00</span></p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12 margin_bottom_30_all">
            <div class="product_list">
              <div class="product_img"> <img class="img-responsive" src="images/it_service/2.jpg" alt=""> </div>
              <div class="product_detail_btm">
                <div class="center">
                  <h4><a href="it_shop_detail.html">Kaspersky Internet Security</a></h4>
                </div>
                <div class="starratin">
                  <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
                </div>
                <div class="product_price">
                  <p><span class="old_price">$24.99</span><span class="new_price"> $12.49</span></p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12 margin_bottom_30_all">
            <div class="product_list">
              <div class="product_img"> <img class="img-responsive" src="images/it_service/3.jpg" alt=""> </div>
              <div class="product_detail_btm">
                <div class="center">
                  <h4><a href="it_shop_detail.html">Mcafee Livesafe Antivirus</a></h4>
                </div>
                <div class="starratin">
                  <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
                </div>
                <div class="product_price">
                  <p><span class="old_price">$24.99</span><span class="new_price"> $12.49</span></p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12 margin_bottom_30_all">
            <div class="product_list">
              <div class="product_img"> <img class="img-responsive" src="images/it_service/4.jpg" alt=""> </div>
              <div class="product_detail_btm">
                <div class="center">
                  <h4><a href="it_shop_detail.html">Norton Internet Security</a></h4>
                </div>
                <div class="starratin">
                  <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
                </div>
                <div class="product_price">
                  <p><span class="old_price">$15.00</span> – <span class="new_price">$25.00</span></p>
                </div>
              </div>
            </div>
          </div>
        </div>-->
      </div>
    </div>
  </div>
</div>
<!-- end section -->
<!-- footer -->
<footer class="footer_style_2  light_silver" id="contacto">
  <div class="container-fuild">
    <!-- section -->
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="contact_us_section">
            <div class="call_icon"> 
              <img src="images/loaders/logo_gps.png" alt="#" style="-webkit-filter: invert(1);filter: invert(1);height: 90px;width: auto;" /> 
            </div>
            <div class="inner_cont">
              <h2>Visitanos</h2>
              <p>Visita cualquiera de nuestras sucursales</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end section -->
    <div class="row" style="height: 50px;padding-top: 10px;">
      <div class="col-md-12" style="display: inline-flex;">
        <div class="col-md-6">
          <h1 class="large" style="color: white;text-align: center;">Sucursal Aviacion</h1>
        </div>
        <div class="col-md-6">
          <h1 class="large" style="color: white;text-align: center;">Sucursal Lomas</h1>
        </div>      
      </div>
    </div>
    <div class="row">
      <div class="col-md-12" style="display: inline-flex;padding-bottom: 50px;">
        <div class="col-md-6" style="display: inline-flex;">
          <div class="col-md-6">
            <div class="map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2465.980017618323!2d-100.99036288657!3d22.171872896197318!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x838bc2aae60d97f3!2sRepcel!5e0!3m2!1ses-419!2smx!4v1647627050707!5m2!1ses-419!2smx" width="350" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
          </div>
          <div class="col-md-6">
            <div class="main-heading left_text">
              <h2>Dirección</h2>
            </div>
            <p>Pasaje O 424, Industrial Aviacion 1ra Secc, 78140 San Luis, S.L.P.<br>
              <span style="font-size:18px;"><a href="tel:4441828959">Telefono: 444 182 8959</a></span>
            </p>

            <div class="main-heading left_text">
              <h2>Horario</h2>
            </div>
            <p style="font-family: Arial;">
              Lunes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;11:00 am – 20:00 pm <br>
              Martes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;11:00 am – 20:00 pm <br>
              Miércoles&nbsp;&nbsp;&nbsp;11:00 am – 20:00 pm	<br>
              Jueves&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;11:00 am – 20:00 pm <br>
              Viernes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;11:00 am – 20:00 pm	<br>
              Sábado&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;11:00 am – 20:00 pm <br>
            </p>
            <ul class="social_icons">
              <li class="social-icon fb"><a href="https://www.facebook.com/repcellomas" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li class="social-icon gp"><a href="whatsapp://send?text=Tu mensaje&phone=+5214441828959&abid=+5214441828959" target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-6" style="display: inline-flex;">
          <div class="col-md-6">
            <div class="map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3695.774201247091!2d-101.03140858522886!3d22.134583254483776!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842a998c89b05289%3A0xa4063634158f86ad!2sRepcel!5e0!3m2!1ses-419!2smx!4v1647628955847!5m2!1ses-419!2smx" width="350" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
          </div>
          <div class="col-md-6">
            <div class="main-heading left_text">
              <h2>Dirección</h2>
            </div>
            <p>Cordillera de los Alpes 713-1B, Loma Verde, 78214 San Luis, S.L.P.<br>
              <span style="font-size:18px;"><a href="tel:4442829422">Telefono: 444 282 9422</a></span>
            </p>

            <div class="main-heading left_text">
              <h2>Horario</h2>
            </div>
            <p style="font-family: Arial;">
              Lunes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10:00 am – 19:00 pm <br>
              Martes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10:00 am – 19:00 pm <br>
              Miércoles&nbsp;&nbsp;&nbsp;10:00 am – 19:00 pm	<br>
              Jueves&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10:00 am – 19:00 pm <br>
              Viernes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10:00 am – 19:00 pm	<br>
              Sábado&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10:00 am – 16:00 pm <br>
            </p>
            <ul class="social_icons">
              <li class="social-icon fb"><a href="https://www.facebook.com/repcelslp" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li class="social-icon gp"><a href="whatsapp://send?text=Tu mensaje&phone=+5214442829422&abid=+5214442829422" target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-12" style="display: inline-flex;padding-bottom: 15px;">
        <div class="col-md-3">
        </div>
        <div class="col-md-3">
        </div>
        <div class="col-md-3">
        </div>
        <div class="col-md-3">
          <div class="main-heading left_text">
            <h2>Extras</h2>
          </div>
          <div style="display: inline-block;">
            <ul class="social_icons">
              <li class="social-icon gp">
                <a href="https://vm.tiktok.com/ZMLmncDgS/" target="_blank">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tiktok" viewBox="0 0 16 16">
                    <path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3V0Z"/>
                  </svg>
                </a>
              </li>
              <li class="social-icon tw"><a href="https://www.instagram.com/repcel_slp" ><i class="fa fa-instagram" aria-hidden="true"></i></i></a></li>
            </ul>
          </div>
          <ul class="footer-menu">
            <li><a href="it_privacy_policy.html"><i class="fa fa-angle-right"></i> Aviso de Privacidad</a></li>
          </ul>
          <h6 style="color: #666;margin-top: 10px;">REPCEL Copyrights 2022</h6>
          <div class="row main-heading left_text">
            
          </div>
          
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- end footer -->
<!-- js section -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- menu js -->
<script src="js/menumaker.js"></script>
<!-- wow animation -->
<script src="js/wow.js"></script>
<!-- custom js -->
<script src="js/custom.js"></script>
<script src="admin/js/app.js"></script>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="admin/js/datatables.js"></script>
<script>
  
  function filterGlobal () 
  {
    $('#tienda_all').DataTable().search($('#buscar_producto').val(),false,true).draw();			
  }
    
  $(document).ready(function() {
    
    $('#buscar_producto').on( 'keyup', function () {
      filterGlobal();
    });
  });

  document.addEventListener("DOMContentLoaded", function() 
  {
    $("#tienda_all").DataTable({
      responsive: true,
      stateSave: true,
      language: {
        url: '//cdn.datatables.net/plug-ins/1.11.4/i18n/es-mx.json'
      }
    });
    
  });
  document.getElementById('tienda_all_filter').style.visibility = "hidden";
    document.getElementById('tienda_all_filter').style.display = "none";
</script>
<!-- google map js -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
<!-- end google map js -->
</body>
</html>
