<?php
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['register'];
$recp="pantamsai_pa@srmuniv.edu.in";
$subject="Contact Form";
$body="From:\n$email\nMessage:\n$message";
mail($recp,$subject,$body);
?>