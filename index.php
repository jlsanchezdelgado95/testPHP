<html>

<head>
    <meta charset="utf-8" />
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Listado de contactos</a></li>
                <li><a href="formulario.html">Añadir Contacto</a></li>
            </ul>
        </nav>
    </header>
</body>
<!-- Tabla Contactos -->

<?php
$mysql = new mysqli("127.0.0.1", "root", "root", "agenda", 3306);
if ($mysql->connect_errno) {
    echo "Fallo al conectar MySQL" . $mysql->connect_errno . $mysql->connect_error;
}

$resultado = $mysql->query("SELECT * FROM contactos")-> fetch_all();

echo "<table>";
echo "<tr>";
echo "  <th> Nombre  </th>";
echo "  <th> Apellido </th>";
echo "  <th> Direccíon </th>";
echo "  <th> Teléfono </th>";
echo "</tr>";
echo "<tr>";
foreach ($resultado as $key => $value) {
    $id = $resultado[$key][0];
    //Listado Contacto(Index)
    foreach ($resultado[$key] as $i => $value) {
        if (!$i == 0) {//Controlo que no me salga el campo key
            echo "<td> <a href='verContacto.php?id=$id'>" . $resultado[$key][$i] . "</a></td>";
        }
    }
    echo "<td><a href='formularioUpdate.php?id=$id'>Editar Contacto</a></td>";
    echo "<td><a href='preguntaEliminar.php?id=$id'>Eliminar Contacto</a></td>";
    echo "</tr>";
}
echo "</table>";

?>

</html>