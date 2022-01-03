<?php


require_once "FileService.php";

$url = "https://asdasdasd";
$token = "123";

$service = new FileService($url, $token);


$file = $service->getFile("123");
$files = $service->getFiles();
$fileCreated = $service->createFile();



