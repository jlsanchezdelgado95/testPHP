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
    $resultado = $mysqli->query("SELECT * FROM contactos WHERE idContacto = $id")->fetch_all();
    $nombre = $resultado[0][1];
    $apellidos = $resultado[0][2];
    $direccion = $resultado[0][3];
    $telefono = $resultado[0][4];

    ?>
    <form action="editarContacto.php?id=<?php echo $id ?>" method="post">
        <p>Su nombre: <input type="text" required name="nombre" placeholder=<?php echo $nombre ?> /></p>
        <p>Sus apellidos: <input type="text" name="apellidos" placeholder=<?php echo $apellidos ?> /></p>
        <p>Su direccion: <input type="text" name="direccion" placeholder=<?php echo $direccion ?> /></p>
        <p>Su teléfono: <input type="number" required name="telefono" placeholder=<?php echo $telefono ?> /></p>
        <p><input type="submit" /></p>
    </form>
</body>