	<?php

require_once('clinicro.php');

$email = $_GET['username'];
$parola = $_GET['parola'];


echo "<br>";

$my_query = "";

$my_query = "select * from admin where username = '$username' and parola = '$parola'"; 


$result = mysqli_query($connection, $my_query);


if(mysqli_num_rows($result) > 0){    
	echo "<script> alert ('Ati fost autentificat cu succes');window.location='index.html'</script>";
}
else{
    echo "<script> alert('E-mail-ul / parola introdusa este invalida'); window.location ='index2.php' </script>";
}


/*if(mysqli_num_rows($result) > 0){    
	echo "<script> alert ('Ati fost autentificat cu succes');</script>";
	

		if ($nivel = 'admin') {
			header('location: proiect/admin/index.php');
		*//*elseif($nivel = 'medic'){
			header('location: preclinic/add-doctor.html');
		}elseif	($nivel=''){
			header('location: index.html');
		}*/
		

?>