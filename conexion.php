<?php

// ===============================
// DATOS DE CONEXIÓN A LA BASE DE DATOS
// ===============================

// Servidor de MySQL de InfinityFree
$servidor = "sql103.infinityfree.com";

// Usuario de la base de datos
$usuario = "if0_41830694";

// Contraseña de la base de datos
$password = "lBAXEEjCQd"; 

// Nombre de la base de datos
$base = "if0_41830694_tienda";

// ===============================
// CONEXIÓN A MYSQL
// ===============================

$conexion = mysqli_connect($servidor, $usuario, $password, $base);

// Si ocurre un error al conectar, se muestra un mensaje y se detiene el programa.
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

?>