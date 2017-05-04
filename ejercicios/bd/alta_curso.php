<?php
$dbopts = parse_url(getenv('DATABASE_URL'));

$conn = new PDO('pgsql:host=' . $dbopts['host'] .';port=' . $dbopts['port'] .  ';dbname=' . ltrim($dbopts["path"],'/'), $dbopts['user'], $dbopts['pass']);

if ($_POST['alta_curso']) {
    $nombre_curso = $_POST['nombre_curso'];

 $sql = "insert into cursos (nombre_curso) values (?)";
 $cmd = $conn->prepare($sql);
 $cmd->execute(array($nombre_curso));

} else if ($_POST['alta_alumno']) {
  
    $sql = "insert into alumnos (nombre, email, codigo_curso) values (?, ?, ?)";
 $cmd = $conn->prepare($sql);
 $cmd->execute(array($_POST['nombre'], $_POST['email'], $_POST['codigo_curso']));
}


$conn = null;
