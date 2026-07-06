<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>TP - Integrador</title>
    <link href="style.css" rel="stylesheet">
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/1170/1170678.png">
</head>

<body>
<?php

    if (isset($_GET["ok"])) {
    echo "<h3 style='color:green; text-align:center;'>
            ¡Ha realizado un pedido correctamente!
          </h3>";
    }
?>
<!-- ===============================
     ENCABEZADO DE LA PÁGINA
================================ -->
<header>
    <h1 class="titulo">
        Tienda 
    </h1>
    <p class="subtitulo">
        Realice un pedido o consulte el estado de su pedido abajo!
    </p>
</header>
<div class="container">
        <!-- FORMULARIO: Seguimiento -->
    <div class="form-box">
        <h2>Consultar Seguimiento</h2>
        <form action="buscar.php" method="post">
            <label for="dni_buscar">DNI</label>
            <input type="text" id="dni_buscar" name="dni_buscar" required>
            <label for="mail_buscar">Email</label>
            <input type="email" id="mail_buscar" name="mail_buscar" required>
            <button type="submit">Consultar</button>
        </form>
    </div>
    <!-- FORMULARIO: Pedido -->
    <div class="form-box">
        <h2>Realizar Pedido</h2>
        <form action="guardar.php" method="post">
            <label for="producto">Producto</label>
            <select id="producto" name="producto" required>
                <option value="">Seleccione un producto</option>
                <option value="CPU Ryzen 9 7950x">CPU Ryzen 9 7950x</option>
                <option value="Teclado Kumara k552">Teclado Kumara k552</option>
                <option value="Logitech g733">Logitech g733</option>
                <option value="Monitor ACER 27 pulgadas">Monitor ACER 27 pulgadas</option>
                <option value="GPU RTX 4090">GPU RTX 4090</option>
            </select>

            <label for="nombre">Nombre y Apellido</label>
                <input type="text" id="nombre" name="nombre" required>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
                <label for="dni">DNI</label>
                <input type="text" id="dni" name="dni" required>
                <label for="direccion">Dirección</label>
                <input type="text" id="direccion" name="direccion" required>
                <label for="ciudad">Ciudad</label>
                <input type="text" id="ciudad" name="ciudad" required>
                <button type="submit">Enviar Pedido</button>
        </form>
    </div>

    </div>
       <footer>
        <p><strong>Trabajo Práctico Integrador</strong></p>
        <p>Curso: Introducción a la Programación en PHP 2</p>
        <p>Profesor: Terradillos Jorge Nicolás</p>
        <p>Universidad Nacional de Quilmes</p>
        <p>Alumno: Bava Demian</p>
    </footer>
</body>
</html>