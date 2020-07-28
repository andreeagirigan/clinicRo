<?php
include('include/config.php');
if(!empty($_POST["idspecializare"])) 
{

 $sql=mysqli_query($con,"SELECT numeDoctor,id from doctori where specializare='".$_POST['idspecializare']."'");?>
 <option selected="selected">Selecteaza doctorul </option>
 <?php
 while($row=mysqli_fetch_array($sql))
 	{?>
  <option value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['numeDoctor']); ?></option>
  <?php
}
}


if(!empty($_POST["doctor"])) 
{

 $sql=mysqli_query($con,"SELECT taxeDoctor from doctori where id='".$_POST['doctor']."'");
 while($row=mysqli_fetch_array($sql))
 	{?>
 <option value="<?php echo htmlentities($row['taxeDoctor']); ?>"><?php echo htmlentities($row['taxeDoctor']); ?></option>
  <?php
}
}

?>

