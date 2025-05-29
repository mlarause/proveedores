<?php
$host = 'localhost';
$dbname = 'proveedores';
$username = 'root';
$password = '';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Crear tabla con número de identificación como clave primaria
    $sql = "CREATE TABLE IF NOT EXISTS proveedores (
        numero_identificacion VARCHAR(50) PRIMARY KEY,
        razon_social VARCHAR(255) NOT NULL,
        tipo_identificacion VARCHAR(50) NOT NULL,
        tipo_proveedor VARCHAR(50) NOT NULL,
        numero_celular VARCHAR(20) NOT NULL,
        correo_electronico VARCHAR(100) NOT NULL,
        
        -- Campos para proveedores críticos
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
        
        -- Campos para proveedores no críticos
        rut_vigente_nc_path VARCHAR(255),
        rut_vigente_nc_estado VARCHAR(20),
        certificado_existencia_nc_path VARCHAR(255),
        certificado_existencia_nc_estado VARCHAR(20),
        certificacion_bancaria_nc_path VARCHAR(255),
        certificacion_bancaria_nc_estado VARCHAR(20),
        referencia_comercial_nc_path VARCHAR(255),
        referencia_comercial_nc_estado VARCHAR(20),
        certificados_seguridad_nc_path VARCHAR(255),
        certificados_seguridad_nc_estado VARCHAR(20),
        resolucion_habilitacion_nc_path VARCHAR(255),
        resolucion_habilitacion_nc_estado VARCHAR(20),
        plan_contingencia_nc_path VARCHAR(255),
        plan_contingencia_nc_estado VARCHAR(20),
        
        -- Campos para proveedores naturales
        cedula_ciudadania_path VARCHAR(255),
        cedula_ciudadania_estado VARCHAR(20),
        rut_natural_path VARCHAR(255),
        rut_natural_estado VARCHAR(20),
        certificacion_bancaria_natural_path VARCHAR(255),
        certificacion_bancaria_natural_estado VARCHAR(20),
        
        fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        ultima_actualizacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        estado VARCHAR(20) DEFAULT 'Pendiente'
    )";
    
    $conn->exec($sql);
    
} catch(PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>