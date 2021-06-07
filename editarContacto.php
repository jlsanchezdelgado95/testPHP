<head>
    <meta charset="utf-8" />
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Listado de contactos</a></li>
            </ul>
        </nav>
    </header>

    <?php
    $mysqli = new mysqli("127.0.0.1", "root", "root", "agenda", 3306);
    if ($mysqli->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    $id = $_GET["id"];
    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $direccion = $_POST["direccion"];
    $telefono = $_POST["telefono"];
    if (!$mysqli->query("UPDATE contactos set nombre = '$nombre', apellidos = '$apellidos', direccion = '$direccion', telefono = '$telefono' WHERE idContacto = '$id'")) {
        echo "Falla la actualizacion: (" . $mysqli->errno . ") " . $mysqli->error;
    } else {
        echo "<meta http-equiv='refresh' content='0;url=index.php'>";
    }

    ?>