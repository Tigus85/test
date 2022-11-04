<?php

try{
    $database = new PDO("mysql:host=localhost;dbname=etienne;charset=utf8","root","");
}catch(Exception $e){
    die("Error : ".$e->getMessage());
}

$req = $database->prepare("SELECT * FROM user");
$req->execute();