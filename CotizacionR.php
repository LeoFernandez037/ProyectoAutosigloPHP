<?php
try {
    $conexion = new PDO("sqlsrv:server=DESKTOP-VJAS3QG\\SQLEXPRESS;database=db_autosiglo_v2");
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error en la conexión: " . $e->getMessage());
}

$marca = $_POST['marca'];
$traccion = $_POST['traccion'];
$carga = $_POST['carga'];
$kilometraje = $_POST['kilometraje'];
$condicion = $_POST['condicion'];

try {
    $sql = "SELECT * FROM Auto WHERE TRACCION = :traccion AND ID_COLOR = :carga AND NUMERO_CHASIS = :marca";
    $stmt = $conexion->prepare($sql);
    $stmt->bindParam(':marca', $marca);
    $stmt->bindParam(':traccion', $traccion);
    $stmt->bindParam(':carga', $carga);
    $stmt->bindParam(':kilometraje', $kilometraje);
    $stmt->bindParam(':condicion', $condicion);
    $stmt->execute();
    if ($stmt->rowCount() > 0) {
        header("Location: Mostrar_datos.php?marca=" . urlencode($marca) . "&traccion=" . urlencode($traccion) . "&carga=" . urlencode($carga));
        exit(); 
    } else {
        echo "No se encontraron datos en la base de datos.";
    }
} catch (PDOException $e) {
    echo "Error al consultar la base de datos: " . $e->getMessage();
}
?>
