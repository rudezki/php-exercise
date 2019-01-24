<?php 
$to = "rudezki@gmail.com";
$nimi = $_POST["nimi"];
$sposti = $_POST["sposti"];
$kiitos = "kiitos.html";
$palaute = "palaute.html";
$kysely = $nimi . " , " . $sposti . " , Palaute:" . $palaute;
   mail($to,"Kyselyn palautus",$kysely);
   header("Location: $kiitos");
?>