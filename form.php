<?php
//get data from form
$word = $_POST['word'];
$variant = $_POST['variant'];
$kleur = $_POST['kleur'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$street_name = $_POST['street_name'];
$street_number = $_POST['street_number'];
$add_number = $_POST['add_number'];
$postal_code = $_POST['postal_code'];
$city = $_POST['city'];
$email = $_POST['email'];
$number = $_POST['phone'];

$to = "bestellingen.punnik@gmail.com";
$subject = "Nieuwe Bestelling";
$txt ="Name = ". $first_name . "\r\n  Email = " . $email . "\r\n Message =" . $variant;
$headers = "From: noreply@punnikteam.com" . "\r\n" .
    "CC: vandeveljari@outlook.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
echo "Bedankt!";