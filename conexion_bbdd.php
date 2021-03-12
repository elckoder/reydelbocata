<?php

    //$nombre_host = 'db5000299563.hosting-data.io';
	$nombre_host = 'localhost';
    //$nombre_bbdd = 'dbs292702';
	$nombre_bbdd = 'reydelbocata';
    //$usuario = 'dbu151101';
	$usuario = 'jose';
    //$passwd = 'Elcoder@2020';
	$passwd = 'Reydelbocata@2020';

    $connect = mysqli_connect($nombre_host, $usuario, $passwd, $nombre_bbdd);


    if (mysqli_errno($connect)) {
        die('<p>Error al conectar con servidor MySQL: '.mysqli_error($connect).'</p>');
    }

?>