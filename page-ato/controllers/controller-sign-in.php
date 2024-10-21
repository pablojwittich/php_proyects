<?php 
include("../models/connection.php");

if (!empty($_POST["btn-register"])) {
    // Verificar que todos los campos requeridos estén llenos
    if (!empty($_POST["Rname"]) && !empty($_POST["Rsurname"]) && !empty($_POST["Remail"]) && !empty($_POST["Rpass1"]) && !empty($_POST["Rpass2"])) {
        // Verificar que las contraseñas coincidan
        if ($_POST["Rpass1"] != $_POST["Rpass2"]) {
            echo "Las contraseñas tienen que ser iguales";
        } else {
            // Validar el formato del email
            if (!filter_var($_POST["Remail"], FILTER_VALIDATE_EMAIL)) {
                echo "El formato del email no es válido";
            } else {
                // Sanitizar la entrada para prevenir inyecciones SQL
                $name = $_POST["Rname"];
                $surname = $_POST["Rsurname"];
                $email = $_POST["Remail"];
                $pass = password_hash($_POST["Rpass1"], PASSWORD_DEFAULT); // Usar password_hash para mayor seguridad

                // Usar una declaración preparada
                $stmt = $conn->prepare("INSERT INTO users (name, surname, email, password) VALUES (?, ?, ?, ?)");
                $stmt->bind_param("ssss", $name, $surname, $email, $pass);

                // Ejecutar la consulta
                if ($stmt->execute()) {
                    echo "<div>alert('Registrado correctamente')</div>";
                } else {
                    echo "Error al registrar: " . $stmt->error; // Manejo de errores
                }

                // Cerrar la declaración
                $stmt->close();
            }
        }
    } else {
        echo "Algunos campos están vacíos";
    }
} else {
    echo "Acceso denegado";
}

// Cerrar la conexión
$conn->close();

?>
