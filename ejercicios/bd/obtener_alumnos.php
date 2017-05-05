<?php

$sql = "SELECT * from alumnos";

$cmd = $conn->prepare($sql);

$cmd->execute();

$alumnos = $cmd->fetchAll();

$conn = null;

?>