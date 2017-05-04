<?php
$dbopts = parse_url(getenv('DATABASE_URL'));

$conn = new PDO('pgsql:host=' . $dbopts['host'] .';port=' . $dbopts['port'] .  ';dbname=' . ltrim($dbopts["path"],'/'), $dbopts['user'], $dbopts['pass']);

$nombre_curso = $_POST['nombre_curso'];

 $sql = "insert into cursos (nombre_curso) values " . $nombre_curso;
 $cmd = $conn->prepare($sql);
 $cmd->execute();


$conn = null;
