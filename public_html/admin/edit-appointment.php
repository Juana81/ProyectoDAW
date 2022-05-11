<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['bpmsaid']==0)) {
  header('location:logout.php');
  } else{

if(isset($_POST['submit']))
  {
	  $numb =$_POST['AptNumber'];
   $nam=$_POST['Name'];
    $email=$_POST['Email'];
   $phone=$_POST['PhoneNumber'];
   $date=$_POST['AptDate'];
   $time=$_POST['AptTime'];
   $serv=$_POST['Services'];
   $appd=$_POST['ApplyDate'];

   

   
   $eid=$_GET['editid'];
     
    $query=mysqli_query($con, "Update  tblappointment set AptNumber='$numb', Name='$nam',Email='$email',PhoneNumber='$phone',AptDate='$date',AptTime='$time',Services='$serv',ApplyDate='$appd'  where ID='$eid' ");
    if ($query) {
    $msg="Información de Cita Actualizada.";
  }
  else
    {
      $msg="Algo salió mal. Inténtalo de nuevo.";
    }

  
}
  ?>
<!DOCTYPE HTML>
<html>
<head>
<title> Editar Cliente</title>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--//webfonts--> 
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
		<!--left-fixed -navigation-->
		 <?php include_once('includes/sidebar.php');?>
		<!--left-fixed -navigation-->
		<!-- header-starts -->
	 <?php include_once('includes/header.php');?>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<h3 class="title1">Editar Información de Cita</h3>
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
							<h4>Actualizar Información de Cita:</h4>
						</div>
						<div class="form-body">
							<form method="post">
								<p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
  <?php
 $cid=$_GET['editid'];
$ret=mysqli_query($con,"select * from  tblappointment where ID='$cid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?> 

  
							 <div class="form-group"> <label for="exampleInputEmail1">Número de Cita</label> <input type="text" class="form-control" id="AptNumber" name="AptNumber"  value="<?php  echo $row['AptNumber'];?>" required="true"> </div>
							  <div class="form-group"> <label for="exampleInputEmail1">Nombre del Cliente</label> <input type="text" id="name" name="Name" class="form-control"  value="<?php  echo $row['Name'];?>" required="true"> </div>
							 <div class="form-group"> <label for="exampleInputEmail1">Correo Electronico</label> <input type="text" id="email" name="Email" class="form-control"  value="<?php  echo $row['Email'];?>" required="true"> </div>
							 <div class="form-group"> <label for="exampleInputPassword1">Numero de Telefono</label> <input type="text" id="PhoneNumber" name="PhoneNumber" class="form-control"  value="<?php  echo $row['PhoneNumber'];?>" required="true"> </div>
							 <div class="form-group"> <label for="exampleInputPassword1">Fecha Cita</label> <input type="text" id="AptDate" name="AptDate" class="form-control"  value="<?php  echo $row['AptDate'];?>" required="true"> </div>
							 <div class="form-group"> <label for="exampleInputPassword1">Hora Cita</label> <input type="text" id="AptTime" name="AptTime" class="form-control"  value="<?php  echo $row['AptTime'];?>" required="true"> </div>
							 <div class="form-group"> <label for="exampleInputEmail1">Servicio Solicitado</label> <input type="text" id="Services" name="Services" class="form-control"  value="<?php  echo $row['Services'];?>" required="true"> </div>
							 <div class="form-group"> <label for="exampleInputPassword1">Fecha Solicitud</label> <input type="text" id="ApplyDate" name="ApplyDate" class="form-control"  value="<?php  echo $row['ApplyDate'];?>" required="true"> </div>
                   

							 <?php } ?>
							  <button type="submit" name="submit" class="btn btn-default">Actualizar Información Cita</button> </form> 
						</div>
						
					</div>
				
				
			</div>
		</div>
		 <?php include_once('includes/footer.php');?>
	</div>
	<!-- Classie -->
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
</body>
</html>
<?php } ?>