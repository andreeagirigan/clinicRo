<?php


require_once('clinicro.php');

$numeUser = $_GET['numeUser'];
$adresa = $_GET['adresa'];
$oras = $_GET['oras'];
$gen = $_GET['gen'];
$email = $_GET['email'];
$parola = $_GET['parola'];


echo "<br>";
$my_query = "";
$my_query = "select * from useri where email = '$email' "; 
$result = mysqli_query($connection, $my_query);

if(mysqli_num_rows($result) > 0){
    echo "Exista deja un utilizator inregistrat cu aceasta adresa de e-mail.";
}

else{
    $my_query = "INSERT INTO useri (numeUser, adresa, oras, gen, email) VALUES ('$numeUser', '$adresa', $oras', '$gen', '$email', '$parola'  )";
    echo "<br>";
    $result = mysqli_query($connection, $my_query);
    if($result){
        echo "<script> alert('User-ul a fost adaugat cu succes! Dupa apasarea butonului ok, veti fi redirectionat catre pagina de logare'); window.location ='index2.php' </script>";
    }
    else{
        echo "<script> alert('A aparut o eroare la interogarea bazei de date'); window.location ='index2.php' </script>";
    }
}






?>



