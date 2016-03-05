<?php
include("../vendor/autoload.php");
include "config.sample.php";
@include "config.php";

$message = new \Twinsen\YowsupQueue\Models\SimpleMessage();
$message->setAddress($sendTestNumber);
$message->setBody("This is a Test-Message!");
$api = new \Twinsen\YowsupQueue\Api($host,$port);
$api->sendMessage($message);
