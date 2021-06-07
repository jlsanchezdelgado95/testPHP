<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
</head>

<body>
    <?php
    $id = $_GET["id"];
    ?>

    <header>
        <nav>
            <ul>
                <li><a href="index.php">Listado de contactos</a></li>
                <li><a href="formulario.html">Añadir Contacto</a></li>
            </ul>
        </nav>
    </header>
    <p>¿Estás seguro que quieres eliminar esté contacto?
        <br>
        <button><a href='eliminarContacto.php?id=<?php echo $id ?>'>Si</a></button><button><a href='index.php'>No</a></button>
</body>