<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cursos</title>
</head>
<body>
    <h2>Alta de curso</h2>
    <form action="alta_curso.php" method="POST">
        <input type="text" name="nombre_curso" />
        <input type="submit" value="Alta Curso"/>
    </form>
    <h2>Alta de alumno</h2>
    <?php include('obtener_cursos.php'); ?>
    <form>
        <input type="text" name="name"/>
        <input type="text" name="email"/>
        <select name="codigo_curso">
            <?php 
                var_dump($cursos);
                foreach($cursos as $curso) {
                    echo "<option value=" . $curso['id'] .">" . $curso['nombre_curso'] . "</select>";
                }
            ?>
        </select>
        <input type="submit" value="Submit"/>
    </form>
</body>
</html>