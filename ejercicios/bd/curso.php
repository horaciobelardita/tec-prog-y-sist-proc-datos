<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cursos</title>
</head>
<body>
    <h2>Alta de curso</h2>
    <form action="alta_curso.php" method="POST">
        <input type="text" name="nombre_curso" id="nombre_curso" />
        <input type="submit" value="Alta Curso" name="alta_curso" onClick="validar(event);"/>
    </form>
    <h2>Alta de alumno</h2>
    <?php include('obtener_cursos.php'); ?>
    <form action="alta_curso.php" method="POST">
        <input type="text" name="name"/>
        <input type="text" name="email"/>
        <select name="codigo_curso">
            <?php 
                foreach($cursos as $curso) {
                    echo "<option value=" . $curso['id'] .">" . $curso['nombre_curso'] . "</option>";
                }
            ?>
        </select>
        <input type="submit" value="Submit" name="alta_alumno"/>
    </form>
    <?php include('obtener_alumnos.php'); ?>
    <table>
        <thead>
            <tr>
                <th>
                    Nombre
                </th>
                <th>
                    Email
                </th>
                <th>
                    Cursando
                </th>
            </tr>
        </thead>
        <tbody>
        <?php 
            foreach ($alumnos as $alumno) {
                echo "<tr>";
                echo "<td>" . $alumno['nombre'] . "</td>";
                echo "<td>" . $alumno['email'] . "</td>";
                echo "<td>" . $cursos[$alumno['codigo_curso']]['nombre_curso'] . "</td>";
                echo "</tr>";
                
            }
        
        ?>
        </tbody>
    </table>
    <script>
        function validar(event) {
            event.preventDefault();
            var nombre_curso = document.getElementById("nombre_curso").value;
            if (! nombre_curso.trim()) 
            {
                alert("No");
    
            }        
            
            
        }
          
    </script>
</body>
</html>