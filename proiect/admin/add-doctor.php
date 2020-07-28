<?php
session_start();
//error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();

if(isset($_POST['submit']))
{	$specializareDoctor=$_POST['specializareDoctor'];
$numeDoc=$_POST['numeDoc'];
$adresaClinica=$_POST['adresaClinica'];
$taxeDoc=$_POST['taxeDoc'];
$contactDoc=$_POST['contactDoc'];
$emailDoc=$_POST['emailDoc'];
$dparola=md5($_POST['dparola']);
$sql=mysqli_query($con,"insert into doctori(specializare,numeDoctor,adresa,taxeDoctor,contactno,emailDoctor,parola) values('$specializareDoctor','$numeDoc','$adresaClinica','$taxeDoc','$contactDoc','$emailDoc','$dparola')");
if($sql)
{
echo "<script>alert('Doctor info added Successfully');</script>";
header('location:manage-doctors.php');

}
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Admin | Adaugare doctor</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta content="" name="description" />
		<meta content="" name="author" />
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" media="screen">
		<link href="vendor/select2/select2.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
<script type="text/javascript">
function valid()
{
 if(document.adddoc.npass.value!= document.adddoc.cfpass.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.adddoc.cfpass.focus();
return false;
}
return true;
}
</script>

	</head>
	<body>
		<div id="app">		
<?php include('include/sidebar.php');?>
			<div class="app-content">
				
						<?php include('include/header.php');?>
						
				<!-- end: TOP NAVBAR -->
				<div class="main-content" >
					<div class="wrap-content container" id="container">
						<!-- start: PAGE TITLE -->
						<section id="page-title">
							<div class="row">
								<div class="col-sm-8">
									<h1 class="mainTitle">Admin | Adaugare doctor</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>Admin</span>
									</li>
									<li class="active">
										<span>Adaugare doctor</span>
									</li>
								</ol>
							</div>
						</section>
						<!-- end: PAGE TITLE -->
						<!-- start: BASIC EXAMPLE -->
						<div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-md-12">
									
									<div class="row margin-top-30">
										<div class="col-lg-8 col-md-12">
											<div class="panel panel-white">
												<div class="panel-heading">
													<h5 class="panel-title">Adaugare doctor</h5>
												</div>
												<div class="panel-body">
									
													<form role="form" name="adddoc" method="post" onSubmit="return valid();">
														<div class="form-group">
															<label for="specializareDoctor">
																Specializare doctor
															</label>
							<select name="specializareDoctor" class="form-control" required="required">
																<option value="">Selecteaza specializarea</option>
<?php $ret=mysqli_query($con,"select * from specializaredoctor");
while($row=mysqli_fetch_array($ret))
{
?>
																<option value="<?php echo htmlentities($row['specializare']);?>">
																	<?php echo htmlentities($row['specializare']);?>
																</option>
																<?php } ?>
																
															</select>
														</div>

<div class="form-group">
															<label for="numeDoctor">
																 Nume doctor
															</label>
					<input type="text" name="numeDoc" class="form-control"  placeholder="Completeaza numele doctorului">
														</div>


<div class="form-group">
															<label for="address">
																 Adresa clinica doctor
															</label>
					<textarea name="adresaClinica" class="form-control"  placeholder="Completeaza adresa clinicii"></textarea>
														</div>
<div class="form-group">
															<label for="fess">
																 Taxa consultatie
															</label>
					<input type="text" name="taxeDoc" class="form-control"  placeholder="Completeaza taxa consultatiei">
														</div>
	
<div class="form-group">
									<label for="fess">
																 Numar de telefon
															</label>
					<input type="text" name="contactDoc" class="form-control"  placeholder="Completeaza numarul de telefon">
														</div>

<div class="form-group">
									<label for="fess">
																 Email
															</label>
					<input type="email" name="emailDoc" class="form-control"  placeholder="Completeaza adresa de email">
														</div>



														
														<div class="form-group">
															<label for="exampleInputPassword1">
																 Parola
															</label>
					<input type="password" name="npass" class="form-control"  placeholder="Parola" required="required">
														</div>
														
<div class="form-group">
															<label for="exampleInputPassword2">
																Confirma parola
															</label>
									<input type="password" name="cfpass" class="form-control"  placeholder="Confirma parola" required="required">
														</div>
														
														
														
														<button type="submit" name="submit" class="btn btn-o btn-primary">
															Trimite
														</button>
													</form>
												</div>
											</div>
										</div>
											
											</div>
										</div>
									<div class="col-lg-12 col-md-12">
											<div class="panel panel-white">
												
												
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- end: BASIC EXAMPLE -->
			
					
					
						
						
					
						<!-- end: SELECT BOXES -->
						
					</div>
				</div>
			</div>
			<!-- start: FOOTER -->

			<!-- end: FOOTER -->
		
			<!-- start: SETTINGS -->
	<?php include('include/setting.php');?>
			<>
			<!-- end: SETTINGS -->
		</div>
		<!-- start: MAIN JAVASCRIPTS -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="vendor/switchery/switchery.min.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="vendor/maskedinput/jquery.maskedinput.min.js"></script>
		<script src="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
		<script src="vendor/autosize/autosize.min.js"></script>
		<script src="vendor/selectFx/classie.js"></script>
		<script src="vendor/selectFx/selectFx.js"></script>
		<script src="vendor/select2/select2.min.js"></script>
		<script src="vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
		<script src="vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: CLIP-TWO JAVASCRIPTS -->
		<script src="assets/js/main.js"></script>
		<!-- start: JavaScript Event Handlers for this page -->
		<script src="assets/js/form-elements.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				FormElements.init();
			});
		</script>
		<!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->
	</body>
</html>
