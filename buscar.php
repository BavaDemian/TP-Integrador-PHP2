<?php

//=====================================
// CONEXIÓN
//=====================================

include("conexion.php");

//=====================================
// DATOS RECIBIDOS DEL FORMULARIO
//=====================================

$dni=$_POST["dni_buscar"];

$email=$_POST["mail_buscar"];

//=====================================
// CONSULTA
//=====================================

$sql="SELECT * FROM pedidos
WHERE dni='$dni'
AND email='$email'";

$resultado=mysqli_query($conexion,$sql);

//=====================================
// SI EXISTE EL PEDIDO
//=====================================

if(mysqli_num_rows($resultado)>0){

    echo "<script>

    alert('Su pedido está en camino.');

    window.location='index.php';

    </script>";

}
else{

    echo "<script>

    alert('No se ha encontrado el pedido.');

    window.location='index.php';

    </script>";

}

mysqli_close($conexion);

?>