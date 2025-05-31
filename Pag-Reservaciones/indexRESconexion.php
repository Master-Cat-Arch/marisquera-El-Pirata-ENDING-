<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
        // Conexión a la base de datos
        $conexion = new mysqli('localhost', 'eicomlxp_DatosPlatillos', 'pxhkVJq57wXQqS6yr8Bb', 'eicomlxp_DatosPlatillos');
        $conexion->set_charset('utf8mb4');

            if ($conexion->connect_error) {
                echo json_encode(['error' => 'Error de conexión a la base de datos :v']);
                exit;
            }
        // Verificar conexión
        if ($conexion->connect_error) {
            die("Error de conexión a la DB: " . $conexión->connect_error);
        }
                    // Capturar datos del formulario
                    $nombre = $_POST['Nombre'] ?? '';
                    $email = $_POST['Correo'] ?? '';
                    $telefono1 = $_POST['Telefono1'] ?? '';
                    $telefono2 = $_POST['Telefono2'] ?? '';
                    $fecha = $_POST['Fecha'] ?? '';
                    $detalles = $_POST['Detalles'] ?? '';

                    // Validar longitud de los números de teléfono
                    if (strlen($telefono1) > 15 || strlen($telefono2) > 15) {
                        die("El número de teléfono no puede exceder los 15 caracteres.");
                    }

                    // Validar formato de correo electrónico
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        die("El correo electrónico no es válido.");
                    }
                    // capturar Nombre de Usuario como foreing key de la tabla Usuarios.
                    $Nombre_Usuario = $conexion->prepare("SELECT usuario FROM Usuarios WHERE id = ?");
                    $Nombre_Usuario->bind_param("i", $_POST['id']);
                    $Nombre_Usuario->execute();
                    $resultado = $Nombre_Usuario->get_result();
                    if ($resultado->num_rows > 0) {
                        $usuario = $resultado->fetch_assoc();
                        $nombre_usuario = $usuario['usuario'];
                    } else {
                        die("Usuario no encontrado.");
                    }
                    $Nombre_Usuario->close();
    /* Validar datos extra (opcional)
    if (empty($nombre) || empty($telefono1) || empty($fecha) || empty($detalles)) {
        die("Por favor, llena todos los campos.");
    }*/

        // Insertar datos en la base de datos
        $stmt = $conexion->prepare("INSERT INTO Reservaciones (Nombre, Correo, Telefono1, Telefono2, Fecha, Detalles Usuario) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $nombre, $email, $telefono1, $telefono2, $fecha, $detalles);

        if ($stmt->execute()) {
            echo "Datos guardados correctamente.";
        } else {
            echo "Error al guardar los datos: " . $stmt->error;
        }

        $stmt->close();
        $conexion->close();
?>