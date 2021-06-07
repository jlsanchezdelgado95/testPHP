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
<?php
$mysqli = new mysqli("127.0.0.1", "root", "root", "agenda", 3306);
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$id = $_GET["id"];
$resultado = $mysqli->query("SELECT * FROM contactos WHERE idContacto = $id")->fetch_all();
echo "<table>";
echo "<tr>";
echo "  <th> Nombre  </th>";
echo "  <th> Apellido </th>";
echo "  <th> Direccíon </th>";
echo "  <th> Teléfono </th>";
echo "</tr>";
echo "<tr>";
foreach ($resultado[0] as $key => $value) {
    if (!$key == 0) {
        echo "<td>" . $resultado[0][$key] . "</td>";
    }
}
echo "</tr>";
echo "<tr>";

?>