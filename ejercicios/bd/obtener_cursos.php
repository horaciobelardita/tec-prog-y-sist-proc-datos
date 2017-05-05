<?php
$dbopts = parse_url(getenv('DATABASE_URL'));

$conn = new PDO('pgsql:host=' . $dbopts['host'] .';port=' . $dbopts['port'] .  ';dbname=' . ltrim($dbopts["path"],'/'), $dbopts['user'], $dbopts['pass']);

$sql = "SELECT * from cursos";

$cmd = $conn->prepare($sql);

$cmd->execute();

$cursos = $cmd->fetchAll();


?>