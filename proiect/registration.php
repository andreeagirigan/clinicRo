<?php
include_once('include/config.php');
if(isset($_POST['submit']))
{
$nume=$_POST['nume_user'];
$adresa=$_POST['adresa'];
$oras=$_POST['oras'];
$gen=$_POST['gen'];
$email=$_POST['email'];
$parola=($_POST['parola']);
$query=mysqli_query($con,"INSERT into useri(numeUser,adresa,oras,gen,email,parola) values('$nume','$adresa','$oras','$gen','$email','$parola')");
if($query)
{
	echo "<script>alert('Te-ai inregistrat cu succes. Acum te poti loga');</script>";
	//header('location:user-login.php');
}
}
?>


<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Inregistrare pacient</title>
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
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
		
		
		

	</head>

	<body class="login">
		<!-- start: REGISTRATION -->
		<div class="row">
			<div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
				<div class="logo margin-top-30">
				<a href="../index.htmlssss"><h2>Inregistrare pacient</h2></a>
				</div>
				<!-- start: REGISTER BOX -->
				<div class="box-register">
					<form name="registration" id="registration"  method="post">
						<fieldset>
							<legend>
								Cont nou
							</legend>
							<p>
								Completeaza mai jos informatiile personale
							</p>
							<div class="form-group">
								<input type="text" class="form-control" name="nume_user" placeholder="Nume" required>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="adresa" placeholder="Adresa" required>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="oras" placeholder="Oras" required>
							</div>
							<div class="form-group">
								<label class="block">
									Gen
								</label>
								<div class="clip-radio radio-primary">
									<input type="radio" id="rg-female" name="gen" value="feminin" >
									<label for="rg-female">
										Feminin
									</label>
									<input type="radio" id="rg-male" name="gen" value="masculin">
									<label for="rg-male">
										Masculin
									</label>
								</div>
							</div>
							<p>
								Completeaza mai jos detaliile contului
							</p>
							<div class="form-group">
								<span class="input-icon">
									<input type="email" class="form-control" name="email" id="email" onBlur="userAvailability()"  placeholder="Email" required>
									<i class="fa fa-envelope"></i> </span>
									 <span id="user-availability-status1" style="font-size:12px;"></span>
							</div>
							<div class="form-group">
								<span class="input-icon">
									<input type="parola" class="form-control" id="parola" name="parola" placeholder="Parola" required>
									<i class="fa fa-lock"></i> </span>
							</div>
							<div class="form-group">
								<span class="input-icon">
									<input type="parola" class="form-control" name="parola_again" placeholder="Introduceti din nou parola" required>
									<i class="fa fa-lock"></i> </span>
							</div>
							<div class="form-group">
								<div class="checkbox clip-check check-primary">
									<input type="checkbox" id="agree" value="agree">
									<label for="agree">
										Accept
									</label>
								</div>
							</div>
							<div class="form-actions">
								<p>
									Detii deja un cont
									<a href="user-login.php">
										Logheaza-te
									</a>
								</p>
								<button type="submit" class="btn btn-primary pull-right" id="submit" name="submit">
									Trimite <i class="fa fa-arrow-circle-right"></i>
								</button>
							</div>
						</fieldset>
					</form>



				</div>

			</div>
		</div>
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="vendor/switchery/switchery.min.js"></script>
		<script src="vendor/jquery-validation/jquery.validate.min.js"></script>
		<script src="assets/js/main.js"></script>
		<script src="assets/js/login.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				Login.init();
			});
		</script>
		
	<script>
function userAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'email='+$("#email").val(),
type: "POST",
success:function(data){
$("#user-availability-status1").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>	
		
	</body>
	<!-- end: BODY -->
</html>