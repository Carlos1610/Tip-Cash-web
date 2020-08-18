<?php

$servername = "localhost";
$dBUusername = "root";
$dBPassword = "";
$dBName = "registro";

$coon = mysqli_connect($servername, $servername, $dBPassword, $dBName);

if(!$conn)
{
    die("Conexão falhou: ".mysqli_connect_error());
}