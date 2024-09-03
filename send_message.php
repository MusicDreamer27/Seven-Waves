<?php
// Datos de conexión a la base de datos
$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$basedatos = "mailport";

// Crear conexión
$conn = new mysqli($servidor, $usuario, $contrasena, $basedatos);

// Verificar si la conexión fue exitosa
if ($conn->connect_errno) {
    die("Error de conexión: " . $conn->connect_error);
}

// Verificar si las claves existen en $_POST y asignar valores
$name = isset($_POST['name']) ? $conn->real_escape_string($_POST['name']) : '';
$email = isset($_POST['email']) ? $conn->real_escape_string($_POST['email']) : '';
$recipients = isset($_POST['recipients']) ? $conn->real_escape_string($_POST['recipients']) : '';
$message = isset($_POST['message']) ? $conn->real_escape_string($_POST['message']) : '';

// Insertar datos en la base de datos
$sql = "INSERT INTO mensajesenviados (name, email, recipients, message) VALUES ('$name', '$email', '$recipients', '$message')";

// Ejecutar la consulta y verificar el resultado
if ($conn->query($sql) === TRUE) {
    echo "Mensaje enviado y guardado correctamente.";
} else {
    echo "Error al guardar el mensaje: " . $conn->error;
}

// Cerrar conexión
$conn->close();
?>