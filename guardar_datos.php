<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "comercio";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
// Obtiene los datos del formulario
$nombre_usuario = $conn->real_escape_string($_POST['nombre']);
$correo_usuario = $conn->real_escape_string($_POST['email']);
$telefono = $_POST['telefono'];
$nombre_tienda = $_POST['nombreTienda'];
$pais = $_POST['pais'];
$direccion_tienda = $_POST['direccionTienda'];

// Prepara y ejecuta la consulta SQL para insertar datos utilizando una consulta preparada
$sql = $conn->prepare("INSERT INTO tiendas (nombre_usuario, correo_usuario, telefono, nombre_tienda, pais, direccion_tienda) VALUES (?, ?, ?, ?, ?, ?)");
$sql->bind_param("ssssss", $nombre_usuario, $correo_usuario, $telefono, $nombre_tienda, $pais, $direccion_tienda);

if ($sql->execute()) {
    echo "Datos guardados correctamente.";
} else {
    echo "Error al guardar los datos: " . $sql->error;
}

// Cierra la conexión a la base de datos
$conn->close();

?>
