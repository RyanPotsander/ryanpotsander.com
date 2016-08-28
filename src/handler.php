<?php

$message = $_POST["message"]; 
$name = $_POST["name"]; 
$timestamp = strval($_SERVER['REQUEST_TIME']);
/*
$dir = "/home5/ryanpots/public_html/messages/";
*/

$dir = "/messages"
$filename = $name . $timestamp;


file_put_contents($dir.$filename, $message);

?> 