<?php
$server='localhost';
$username='root';
$password='';

try{
    $conn=new PDO(
        "mysql:host=$server;dbname=cafe",
        $username,
        $password
    );
    //set the PDO error mode to exception
    $conn -> setATTRIBUTE(
        PDO:: ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );
    //echo"Connected Succesfully" . "<br>";   
}
catch(PDOException $e){
    echo"Connection failed". $e->getMessage();
}