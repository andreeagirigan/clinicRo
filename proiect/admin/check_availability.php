<?php 
require_once("include/config.php");
if(!empty($_POST["email"])) {
	$email= $_POST["email"];
	
		$result =mysql_query("SELECT email FROM admin WHERE email='$email'");
		$count=mysql_num_rows($result);
		echo $count;
if($count>0)
{
echo "<span style='color:red'> Adresa de email exista deja.</span>";
 echo "<script>$('#submit').prop('disabled',true);</script>";
} else{
	
	echo "<span style='color:green'> Adresa de email poate fi utilizata..</span>";
 echo "<script>$('#submit').prop('disabled',false);</script>";
}
}


?>
