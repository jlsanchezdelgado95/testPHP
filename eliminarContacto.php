<!DOCTYPE html>
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

<?php
$mysqli = new mysqli("127.0.0.1", "root", "root", "agenda", 3306);
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
$id = $_GET["id"];//Recojo el id del contacto
if (!$mysqli->query("DELETE FROM contactos WHERE idContacto = '$id'")) {
    echo "Falla el borrado: (" . $mysqli->errno . ") " . $mysqli->error;
} else {
    echo "<meta http-equiv='refresh' content='0;url=index.php'>";
}

?>