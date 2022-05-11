<!DOCTYPE HTML>
<html lang="es">
<?php 

error_reporting(0);
include('dbconnection.php');
if(isset($_POST['submit']))
  {

	$name=$_POST['name'];
	$email=$_POST['email'];
	$services=$_POST['services'];
	$adate=$_POST['adate'];
	$atime=$_POST['atime'];
	$phone=$_POST['phone'];
	$aptnumber = mt_rand(100000000, 999999999);
  
	$query=mysqli_query($con,"insert into tblappointment(AptNumber,Name,Email,PhoneNumber,AptDate,AptTime,Services) value('$aptnumber','$name','$email','$phone','$adate','$atime','$services')");
	if ($query) {

 echo "<script>alert('Su cita se ha realizado con exito')</script>";	
  }
  else
	{
	  $msg="Algo salió mal. Inténtalo de nuevo";
	}

  
}

?>
	<head>
		<title>PinkPointer</title>
		<meta charset="utf-8" />
		
		
		<link rel="shortcut icon" href="/images/logo_perro.png">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/style.css" />
		<link rel="stylesheet" href="assets/css/styles.css"/>
		<link rel="stylesheet" href="assets/css/bootstrap.css" />

		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
		<!-- Minified JS library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<!-- Compiled and minified Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script> 
			<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
		  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
		
<!-- Cookie Consent by https://www.PrivacyPolicies.com -->
<script type="text/javascript" src="//www.privacypolicies.com/public/cookie-consent/4.0.0/cookie-consent.js" charset="UTF-8"></script>
<script type="text/javascript" charset="UTF-8">
document.addEventListener('DOMContentLoaded', function () {
cookieconsent.run({"notice_banner_type":"simple","consent_type":"implied","palette":"light","language":"es","page_load_consent_levels":["strictly-necessary","functionality","tracking","targeting"],"notice_banner_reject_button_hide":false,"preferences_center_close_button_hide":false,"page_refresh_confirmation_buttons":false,"website_name":"PinkPointer"});
});
</script>

<noscript>Cookie Consent by <a href="https://www.privacypolicies.com/" rel="nofollow noopener">Privacy Policies Generator website</a></noscript>
<!-- End Cookie Consent -->
	
	</head>


	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
				<header>
					<a style="float:right;background: linear-gradient(90deg, #bf2263, #4c266b);" class="button primary" href="./admin/index.php">Admin</a> 
					
					<div class="overlay">
	
	
					<div id="logo">
                    <img id= "perro" src="./images/logo_perro.png">

                    </div>
	
			
	<h1 style="font-size:56px">PinkPointer</h1>
	<h2 style="font-size:38px">Peluqueria canina</h2>
	
	
	
</div>			
						
							
					</header>

				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="#intro" class="active">Sobre Nosotros</a></li>
							<li><a href="#first">Servicios</a></li>
							<li><a href="#second">Contacto</a></li>
							
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">

						<!-- Introduction -->
							<section id="intro" class="main special">
					
										<header class="major">
											<h2>Sobre Nosotros</h2>
										</header>
										<h1 ><span style="font-size: 28px; color:darksalmon">Una peluqueria canina y felina adaptada a sus clientes</span><br>
											objetivo principal,
										   la salud y bienestar psíquico y psicológico de todos los animales que pasan por nuestras manos,
										   <br> adaptando nuestras instalaciones para obtener la mayor seguridad y comodidad para vuestras mascotas. </h1>
												   
										   </div>
										   
										   
										   <div id="myCarousel" class="carousel slide" data-ride="carousel">
											   <!-- Indicators -->
											   <ol class="carousel-indicators">
												   <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
												   <li data-target="#myCarousel" data-slide-to="1"></li>
												   <li data-target="#myCarousel" data-slide-to="2"></li>
												   <li data-target="#myCarousel" data-slide-to="3"></li>
												   <li data-target="#myCarousel" data-slide-to="4"></li>
											   </ol>
										   
											   <!-- Wrapper for slides -->
											   <div class="carousel-inner">
												   <div class="item active">
													   <img src="./images/citas.jpg" alt="">
													   <h2>Baño y Peluqueria</h2>
													   <div class="carousel-caption">
														   <h2>Baño y Peluqueria</h2>
														   <h3 >
														   Queremos dejar lo más guapo posible a tu perro.
                                                          </h3>
													   </div>
												   </div>
											 
												   <div class="item">
													   <img src="./images/pointer.jpg" alt="">
													   <h2>Tratamiento especial antiparásitos</h2>
													   <div style="float:right" class="carousel-caption">
														   <h2>Tratamiento especial antiparásitos</h2>
														   <h3>Con nuestros tratamientos tu mascota dejara de rascarse</h3>
													   </div>
												   </div>
												   
												   <div class="item">
													   <img src="./images/cat.jpg" alt="">
													   <h2>Peluqueria felina</h2>
													   <div style="float:right" class="carousel-caption">
														   <h2>Peluqueria felina</h2>
														   <h3>Baño y corte de uñas para felinos</h3>
													   </div>
												   </div>
												   <div class="item">
													   <img src="./images/cocker-spaniel-g4706fc17f_640.jpg" alt="">
													   <h2>Corte de pelo<br> especial razas</h2>
													   <div style="float:right" class="carousel-caption">
														   <h2>Corte de pelo<br> especial razas</h2>
														   <h3>Corte de pelo personalizado</h3>
													   </div>
												   </div>
												   <div class="item">
													   <img src="./images/Pomerania_Comercial.png" alt="">
													   <h2>Corte y peinados <br> especiales</h2>
													   <div style="float:right" class="carousel-caption">
														   <h2>Corte y peinados <br> especiales</h2>
														   <h3>Para los mas coquetos</h3>
													   </div>
												   </div>
										   
											   </div>
										   
											   <!-- Controls -->
											   <a class="left carousel-control" href="#myCarousel" data-slide="prev">
												   <span class="glyphicon glyphicon-chevron-left"></span>
												   <span class="sr-only">Previous</span>
											   </a>
											   <a class="right carousel-control" href="#myCarousel" data-slide="next">
												   <span class="glyphicon glyphicon-chevron-right"></span>
												   <span class="sr-only">Next</span>
											   </a>
										   </div> 	

									
							</section>

						<!-- First Section -->
							<section id="first" class="main special">
								<header class="major">
									<h2>Servicios</h2>
								</header>
							
								<div class="container-fluid">
                                <div class="row">
								<div class="servicios">
								<h2 class="text-center my-5 titulo">Nuestros Servicios</h2>
								
										
								 <div><table style="font-size: 24px;" class="table"> <thead> <tr> <th>#</th> <th>Servicios</th> <th>Precios</th> </tr> </thead> <tbody>
								<?php
								$ret=mysqli_query($con,"select *from  tblservices");
								$cnt=1;
								while ($row=mysqli_fetch_array($ret)) {
								
								?>
								
								<tr> <th ><?php echo $cnt;?></th> <td><?php  echo $row['ServiceName'];?></td> <td><?php  echo $row['Cost'];?> €</td> </tr>   <?php 
								$cnt=$cnt+1;
								}?></tbody> </table></div>
											
								
								</div>
								
								</div>
								</div>
								
								<br><br><br>
								
								<div class="container-fluid">
                                <div class="row">
								<div class="reserva">
									<h2 class="text-center my-5 titulo">Reserva tu Cita</h2>
								
									<form action="#" method="post" class="appointment-form">
														<div class="row">
														  <div class="col-sm-12">
															<div class="form-group">
													  <label class="col-sm-4 col-lg-4 col-form-label">Nombre:</label> 
																  <input style="width: 80%; font-size:21px" type="text" class="form-control" id="name" placeholder="Nombre" name="name" required="true">
																</div>
														  </div>
														  <div class="col-sm-12">
															<div class="form-group">
													  <label class="col-sm-4 col-lg-4 col-form-label">Correo:</label>
																  <input style="width: 80% ; font-size:21px" type="email" class="form-control" id="appointment_email" placeholder="Correo" name="email" required="true">
																</div>
														  </div>
															<div class="col-sm-12">
															<div class="form-group">
													  <label class="col-sm-4 col-lg-4 col-form-label">Servicio:</label>
																  <div class="select-wrap">
															  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
															  <select style="width: 80% ; font-size:21px" name="services" id="services" required="true" class="form-control">
																  <option value="">Selecciona Nuestros Servicios</option>
																  <?php $query=mysqli_query($con,"select * from tblservices");
											  while($row=mysqli_fetch_array($query))
											  {
											  ?>
															   <option value="<?php echo $row['ServiceName'];?>"><?php echo $row['ServiceName'];?></option>
															   <?php } ?> 
															  </select>
															</div>
																</div>
													</div>
													<br>
								
														  <div class="form-group row">
														<label class="col-sm-4 col-lg-4 col-form-label">Fecha:</label>
														<div class="col-sm-8 col-lg-8">
															<input style="width: 80% ; font-size:21px" type="date" name="adate" id='adate' required="true" class="form-control">
														</div>
													</div>
								<br>
													<div class="form-group row">
														<label class="col-sm-4 col-lg-4 col-form-label">Hora:</label>
														<div class="col-sm-8 col-lg-8">
															<input  style="width: 80% ; font-size:21px" type="time"  name="atime" id='atime' class="form-control">
														</div>
													
														  </div>
								
														  <div class="col-sm-12">
															<div class="form-group">
													  <label class="col-sm-4 col-lg-4 col-form-label">Telefono:</label>
															  <input style="width: 70% ; font-size:21px"  type="text" class="form-control" id="phone" name="phone" placeholder="Teléfono" required="true" maxlength="10" pattern="[0-9]+">
															</div>
														  </div>
														  
														  <div class="form-group">
															<button style="color:aliceblue; margin-top:20px" type="submit" name="submit" class="close-session" >Crear Cita</button>
													</div>
												  </div>
													  </form>
												  </div>
								</div>
								</div>
								
								
								
								
								
								
								
								
								
								
							</section>

						<!-- Second Section -->
							<section id="second" class="main special">
								<header class="major">
									<h2>Contacto</h2>
								</header>
							
								<div class="mapa">

<h2 class="text-center my-5 titulo">Estamos Aqui</h2>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3177.139173906898!2d-2.066383085345798!3d37.22067095161871!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbd001f4a89f11335!2zMzfCsDEzJzE0LjQiTiAywrAwMyc1MS4xIlc!5e0!3m2!1ses!2ses!4v1647339363662!5m2!1ses!2ses" width="100%" height="500" style="border-top-left-radius: 20px;
    border-top-right-radius: 10px;
    border-bottom-right-radius: 50px;
    border-bottom-left-radius: 30px;" allowfullscreen="" loading="lazy"></iframe>



</div>

<h2 class="text-center my-5 titulo">Contacta con Nosotros</h2>
<div style="position:fixed; right:10px; bottom:10px; text-align:center; padding:3px">
<a href="https://api.whatsapp.com/send?phone=+34651773223">
<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/WhatsApp.svg/240px-WhatsApp.svg.png" width="50" height="50"></a>
</div>







							</section>

						
							

					</div>

				<!-- Footer -->
					<footer class="footer">
						
						<section>
							<h2>Contacto</h2>
							<dl class="alt">
								<h3>Dirección</h3>
								<h3>Poligo Industrial La Redonda, Lubrin, Almeria ESPAÑA</h3>
								<h3>Telefono</h3>
								<h2>654789987</h2>
								<h2>Email</h2>
								<h3><a  href="mailto:pinkpointer8@gmail.com">pinkpointerfoc@gmail.com</a></h3>
  <a href="http://www.facebook.com/profile.php?id=100080269268670" target="_blank"><img alt="Siguenos en Facebook" src="https://lh3.googleusercontent.com/-NSLbC_ztNls/T6VX0g6z8AI/AAAAAAAAA0A/_vyIBrmZbuY/s48/facebook48.png" width=48 height=48  /></a>
							</dl>
							
						</section>

					
						
      <h2>Legal</h2>
      
      <ul>
        <h3>
          <a href="https://www.privacypolicies.com/live/2a8adebf-2a1e-49f2-affd-b763eb7fea30">Politica de Privacidad</a>
        </h3>
        
        <h3>
          <a href="https://policies.google.com/terms?hl=es">Terminos de uso</a>
        </h3>
        
        
      </ul>
    
						<h2 class="copyright">&copy; Web Diseñada por: Juana Fernandez </h2>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

			
			<script src="js/jquery.min.js"></script>
			<script src="js/jquery-migrate-3.0.1.min.js"></script>
			<script src="js/popper.min.js"></script>
			<script src="js/bootstrap.min.js"></script>
			<script src="js/jquery.easing.1.3.js"></script>
			<script src="js/jquery.waypoints.min.js"></script>
			<script src="js/jquery.stellar.min.js"></script>
			<script src="js/owl.carousel.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>
			<script src="js/aos.js"></script>
			<script src="js/jquery.animateNumber.min.js"></script>
			<script src="js/bootstrap-datepicker.js"></script>
			<script src="js/jquery.timepicker.min.js"></script>
			<script src="js/scrollax.min.js"></script>
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
			<script src="js/google-map.js"></script>
			<script src="js/main.js"></script>

	</body>
</html>