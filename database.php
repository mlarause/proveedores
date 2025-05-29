<?php
$host = 'localhost';
$dbname = 'proveedores';
$username = 'root';
$password = '';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Crear tabla si no existe
    $sql = "CREATE TABLE IF NOT EXISTS proveedores (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    razon_social VARCHAR(255) NOT NULL,
    tipo_identificacion VARCHAR(50) NOT NULL,
    numero_identificacion VARCHAR(50) NOT NULL,
    tipo_proveedor VARCHAR(100) NOT NULL,
    numero_celular VARCHAR(20) NOT NULL,
    correo_electronico VARCHAR(100) NOT NULL,
    
    -- Campos para la sección 2
    rut_vigente_path VARCHAR(255),
    rut_vigente_estado VARCHAR(20),
    certificado_existencia_path VARCHAR(255),
    certificado_existencia_estado VARCHAR(20),
    estados_financieros_path VARCHAR(255),
    estados_financieros_estado VARCHAR(20),
    declaracion_renta_path VARCHAR(255),
    declaracion_renta_estado VARCHAR(20),
    certificacion_bancaria_path VARCHAR(255),
    certificacion_bancaria_estado VARCHAR(20),
    referencia_comercial_path VARCHAR(255),
    referencia_comercial_estado VARCHAR(20),
    certificados_seguridad_path VARCHAR(255),
    certificados_seguridad_estado VARCHAR(20),
    resolucion_habilitacion_path VARCHAR(255),
    resolucion_habilitacion_estado VARCHAR(20),
    plan_contingencia_path VARCHAR(255),
    plan_contingencia_estado VARCHAR(20),
    fachada_nomenclatura_path VARCHAR(255),
    fachada_nomenclatura_estado VARCHAR(20),
    )";
    
    $conn->exec($sql);
    
} catch(PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
?>