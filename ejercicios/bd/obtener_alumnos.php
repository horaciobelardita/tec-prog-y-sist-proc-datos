<?php
$dbopts = parse_url(getenv('DATABASE_URL'));

$conn = new PDO('pgsql:host=' . $dbopts['host'] .';port=' . $dbopts['port'] .  ';dbname=' . ltrim($dbopts["path"],'/'), $dbopts['user'], $dbopts['pass']);

$sql = "SELECT * from alumnos";

$cmd = $conn->prepare($sql);

$cmd->execute();

$alumnos = $cmd->fetchAll();

$conn = null;

?>