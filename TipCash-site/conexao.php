<?php
$Host = "143.106.241.3:3306";
$dBName = "cl17137";
$dBPassword = "cl*07032002";
$con = mysqli_connect($Host, $dBName, $dBPassword, $dBName);
if(!$con)
{
    echo("Conexão falhou: (".$con->mysql_errno.") ".$con -> connect_error);
}
?>