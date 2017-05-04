<?php
$dbopts = parse_url(getenv('DATABASE_URL'));

$conn = new PDO('pgsql:host=' . $dbopts['host'] .';port=' . $dbopts['port'] .  ';dbname=' . ltrim($dbopts["path"],'/'), $dbopts['user'], $dbopts['pass']);

$get_cant_mujeres_20_30 = "SELECT count(*) from ejer15 WHERE sexo = 'F' and edad >= 20 and edad <= 30";


$get_cant_mujeres_casadas_30_40 = "SELECT count(*) from ejer15 WHERE sexo = 'F' and edad >= 30 and edad <= 40 and estado_civil = 'C'";


$get_mujeres_casadas = "select count(*) from ejer15 WHERE sexo = 'F' and estado_civil = 'C'";


$get_cant_varones = "SELECT count(*) FROM ejer15 WHERE sexo = 'M'";


$get_varones_solteros_25 = "SELECT count(*) from ejer15 where sexo = 'M' and edad = 25";

$get_varones_casados = "SELECT count(*) from ejer15 WHERE sexo = 'M' and estado_civil = 'C'";

function get_count($sql, $conn) {
    $cmd = $conn->prepare($sql);
    $cmd->execute();
    return $cmd->fetch()['count'];
}

echo "Cantidad de mujeres entre 20 y 30 años: " . get_count($get_cant_mujeres_20_30, $conn) . "<br>";
echo "Cantidad de mujeres casadas entre 30 y 40 años" . get_count($get_cant_mujeres_casadas_30_40, $conn) . "<br>";
echo "Cantidad de mujeres casadas: " . get_count($get_mujeres_casadas, $conn). "<br>";
echo "Total de varones: " . get_count($get_cant_varones, $conn). "<br>";
echo "Total de varones solteros con edad de 25 años: " . get_count($get_varones_solteros_25, $conn). "<br>";
echo "Total de varones casados: " . get_count($get_varones_casados, $conn). "<br>";



// cierro la conexion
$conn = null;