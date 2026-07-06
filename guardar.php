<?php

// Incluye el archivo que realiza la conexión con la base de datos.
include("conexion.php");

// ===============================
// OBTENER LOS DATOS DEL FORMULARIO
// ===============================

// Cada variable recibe el valor enviado mediante el método POST.

$producto = $_POST["producto"];
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$dni = $_POST["dni"];
$direccion = $_POST["direccion"];
$ciudad = $_POST["ciudad"];

// ===============================
// CONSULTA SQL
// ===============================

// Inserta un nuevo pedido en la tabla pedidos.

$sql = "INSERT INTO pedidos (producto, nombre, email, dni, direccion, ciudad)
VALUES ('$producto', '$nombre', '$email', '$dni', '$direccion', '$ciudad')";

// ===============================
// EJECUTAR LA CONSULTA
// ===============================

if (mysqli_query($conexion, $sql)) {

    // Si el pedido se guardó correctamente,
    // vuelve al index mostrando un mensaje de éxito.

    header("Location: index.php?ok=1");
    exit();

} else {

    // Si ocurre un error, muestra el mensaje correspondiente.

    echo "Error al guardar el pedido: " . mysqli_error($conexion);

}

// ===============================
// CERRAR LA CONEXIÓN
// ===============================

mysqli_close($conexion);

?>