<?php
// Conectar a la base de datos SQL Server
try {
    $conexion = new PDO("sqlsrv:server=DESKTOP-VJAS3QG\\SQLEXPRESS;database=db_autosiglo_v2");
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error en la conexión: " . $e->getMessage());
}

$marca = $_GET['marca'];
$traccion = $_GET['traccion'];
$carga = $_GET['carga'];
$kilometraje = $_GET['kilometraje'];
$condicion = $_GET['condicion'];

try {
    $sql = "SELECT * FROM Auto WHERE TRACCION = :traccion AND ID_COLOR = :carga AND NUMERO_CHASIS = :marca";
    $stmt = $conexion->prepare($sql);
    
    $stmt->bindParam(':traccion', $traccion);
    $stmt->bindParam(':carga', $carga);
    $stmt->bindParam(':marca', $marca);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $datos = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($datos as $dato) {
            echo "ID Auto: " . $dato['ID_AUTO'] . "<br>";
            echo "Número de Chasis: " . $dato['NUMERO_CHASIS'] . "<br>";
            echo "Tracción: " . $dato['TRACCION'] . "<br>";
            echo "ID Color: " . $dato['ID_COLOR'] . "<br>";
            // Muestra más campos según sea necesario
            echo "<hr>";
        }
    } else {
        echo "No se encontraron datos.";
    }
} catch (PDOException $e) {
    echo "Error al consultar la base de datos: " . $e->getMessage();
}
?>
