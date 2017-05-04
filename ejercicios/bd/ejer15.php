<?php

$dbopts = parse_url(getenv('DATABASE_URL'));

$conn = new PDO('pgsql:host=' . $dbopts['host'] .';port=' . $dbopts['port'] .  ';dbname=' . ltrim($dbopts["path"],'/'), $dbopts['user'], $dbopts['pass']);

// write sql query
$sql = "SELECT * FROM ejer15";

// execute query and store the results
$cmd = $conn->prepare($sql);
$cmd->execute();
$alumnos = $cmd->fetchAll();
// loop through the data
foreach ($alumnos as $alumno) {
    echo $alumno['nya'] . "<br>";
}
// display titles using echo

// disconnect
$conn = null;