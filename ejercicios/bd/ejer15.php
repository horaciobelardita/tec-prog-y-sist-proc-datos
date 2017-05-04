<?php

$dbopts = parse_url(getenv('DATABASE_URL'));

$conn = new PDO('pgsql:host=' . $dbopts['host'] .';port=' . $dbopts['port'] .  ';dbname=' . ltrim($dbopts["path"],'/'), $dbopts['user'], $dbopts['pass']);


function get_cant_alumnos($conn) {
    $sql = "SELECT count(*) FROM ejer15";
    $cmd = $conn->prepare($sql);
    $cmd->execute();
    return $cmd->fetch()['count'];
}

function get_cant_varones($conn) {
    $sql = "SELECT count(*) FROM ejer15 WHERE sexo = 'M'";
    $cmd = $conn->prepare($sql);
    $cmd->execute();
    return $cmd->fetch()['count'];
}

function get_cant_mujeres_solteras($conn) {
    $sql = "SELECT count(*) FROM ejer15 WHERE sexo = 'F' and estado_civil = 'S'";
    $cmd = $conn->prepare($sql);
    $cmd->execute();
    return $cmd->fetch()['count'];
}

echo "Cantidad de alumnos: " . get_cant_alumnos($conn) . "<br>";
echo "Cantidad de varones: " . get_cant_varones($conn) . "<br>";
echo "Cantidad de mujeres solteras: " . get_cant_mujeres_solteras($conn) . "<br>";



// desconectar
$conn = null;