<?php

$dbopts = parse_url(getenv('DATABASE_URL'));

$conn = new PDO('pgsql:host=' . $dbopts['host'] .';port=' . $dbopts['port'] .  ';dbname=' . ltrim($dbopts["path"],'/'), $dbopts['user'], $dbopts['pass']);


function get_cant_alumnos($conn) {
    $sql = "SELECT count(*) FROM ejer15";
    $cmd = $conn->prepare($sql);
    $cmd->execute();
    return $cmd->fetch();
}

echo "Cantidad de alumnos: " . get_cant_alumnos($conn) . "<br>";


// desconectar
$conn = null;