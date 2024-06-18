<?php
function conni(){

    $hostname="localhost";
    $usuario="root";
    $password="";
    $name="zona gamer";

    $conectar = mysqli_connect($hostname, $usuario, $password, $name);
    return $conectar;
}
?>