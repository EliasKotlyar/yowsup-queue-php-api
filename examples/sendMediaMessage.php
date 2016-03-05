<?php
include("../vendor/autoload.php");
include "config.sample.php";
@include "config.php";

$message = new \Twinsen\YowsupQueue\Models\MediaMessage();
$message->setAddress($sendTestNumber);
$message->setBody("This is a Test-Message!");

$filename = 'testimage.jpg';
$imgbinary = fread(fopen($filename, "r"), filesize($filename));
$imageData = base64_encode($imgbinary);
$imageData = utf8_encode($imageData);
$message->setImageData($imageData);
$api = new \Twinsen\YowsupQueue\Api($host,$port);
$api->sendMessage($message);
