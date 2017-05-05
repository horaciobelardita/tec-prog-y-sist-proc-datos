<?php

function get_all($tabla, $campo = '*')
{
    $dbopts = parse_url(getenv('DATABASE_URL'));

    $conn = new PDO('pgsql:host=' . $dbopts['host'] . ';port=' . $dbopts['port'] . ';dbname=' . ltrim($dbopts["path"], '/'), $dbopts['user'], $dbopts['pass']);


    $sql = "SELECT " . $campo . " from " . $tabla;

    $cmd = $conn->prepare($sql);

    $cmd->execute();


    $data = $cmd->fetchAll();

    $conn = null;

    return $data;
}


?>