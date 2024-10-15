<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombres = $_POST['nombre'];
    $apellido_paterno = $_POST['apellido'];
    $apellido_materno = $_POST['apellidoM'];
    $email = $_POST['email'];
    $fecha_nacimiento = $_POST['Fnacimiento'];
    $telefono = $_POST['telefono'];
    $genero = $_POST['genero'];
    $password = $_POST['Contraseña'];
    $password2 = $_POST['password2'];
    if ($password !== $password2) {
        echo "<h2>Las contraseñas no coinciden</h2>";
        exit();
    }

    try {
        $conexion = new PDO("sqlsrv:server=DESKTOP-VJAS3QG\SQLEXPRESS;database=db_autosiglo_v2");
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO Persona (NOMBRES, AP_PATERNO, AP_MATERNO, FECHA_NACIMIENTO, CORREO_ELECTRONICO, TELEFONO, ID_GENERO) 
                VALUES (:nombres, :apellido_paterno, :apellido_materno, :fecha_nacimiento, :email, :telefono, :genero)";
        
        $stmt = $conexion->prepare($sql);
        $stmt->bindParam(':nombres', $nombres);
        $stmt->bindParam(':apellido_paterno', $apellido_paterno);
        $stmt->bindParam(':apellido_materno', $apellido_materno);
        $stmt->bindParam(':fecha_nacimiento', $fecha_nacimiento);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':telefono', $telefono);
        $stmt->bindParam(':genero', $genero);
        
        if ($stmt->execute()) {
            $id_persona = $conexion->lastInsertId();
            $sql_usuario = "INSERT INTO Usuario (ID_PERSONA, NICKNAME, CONTRASEÑA, ID_ROL) 
                            VALUES (:id_persona, :email, :password, 2)"; // ID_ROL = 2 para usuario regular
            
            $stmt_usuario = $conexion->prepare($sql_usuario);
            $hashed_password = password_hash($password, PASSWORD_BCRYPT); // Hashear la contraseña
            $stmt_usuario->bindParam(':id_persona', $id_persona);
            $stmt_usuario->bindParam(':email', $email);
            $stmt_usuario->bindParam(':password', $hashed_password);
            
            if ($stmt_usuario->execute()) {
                echo "<h2>Registro exitoso</h2>";
            } else {
                echo "<h2>Error al registrar al usuario</h2>";
            }
        } else {
            echo "<h2>Error al registrar a la persona</h2>";
        }

    } catch (PDOException $e) {
        echo "Error en la conexión: " . $e->getMessage();
    }
}
?>