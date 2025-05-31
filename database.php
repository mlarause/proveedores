<?php
// database.php

$servername = "localhost";
$username = "root";
$password = " ";
$dbname = "proveedores";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Tabla para información básica (Sección 1)
$sql = "CREATE TABLE IF NOT EXISTS proveedores (
    numero_identificacion VARCHAR(50) PRIMARY KEY,
    razon_social VARCHAR(255) NOT NULL,
    tipo_identificacion VARCHAR(50) NOT NULL,
    tipo_proveedor ENUM('Proveedor Crítico', 'Proveedor No Crítico', 'Proveedor Natural Especial') NOT NULL,
    numero_celular VARCHAR(20) NOT NULL,
    correo_electronico VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === FALSE) {
    echo "Error creando tabla proveedores: " . $conn->error;
}

// Tabla para documentación crítica (Sección 2)
$sql = "CREATE TABLE IF NOT EXISTS documentacion_critica (
    id INT AUTO_INCREMENT PRIMARY KEY,
    proveedor_id INT NOT NULL,
    rut_vigente VARCHAR(255),
    rut_vigente_estado ENUM('Completo', 'No Completado'),
    certificado_existencia VARCHAR(255),
    certificado_existencia_estado ENUM('Completo', 'No Completado'),
    estados_financieros VARCHAR(255),
    estados_financieros_estado ENUM('Completo', 'No Completado'),
    declaracion_renta VARCHAR(255),
    declaracion_renta_estado ENUM('Completo', 'No Completado'),
    certificacion_bancaria VARCHAR(255),
    certificacion_bancaria_estado ENUM('Completo', 'No Completado'),
    referencia_comercial VARCHAR(255),
    referencia_comercial_estado ENUM('Completo', 'No Completado'),
    certificados_seguridad VARCHAR(255),
    certificados_seguridad_estado ENUM('Completo', 'No Completado', 'No Aplica'),
    resolucion_habilitacion VARCHAR(255),
    resolucion_habilitacion_estado ENUM('Completo', 'No Completado', 'No Aplica'),
    plan_contingencia VARCHAR(255),
    plan_contingencia_estado ENUM('Completo', 'No Completado'),
    fachada_nomenclatura VARCHAR(255),
    fachada_nomenclatura_estado ENUM('Completo', 'No Completado'),
    FOREIGN KEY (proveedor_id) REFERENCES proveedores(numero_identificacion) ON DELETE CASCADE
)";

if ($conn->query($sql) === FALSE) {
    echo "Error creando tabla documentacion_critica: " . $conn->error;
}

// Tabla para documentación no crítica (Sección 3)
$sql = "CREATE TABLE IF NOT EXISTS documentacion_no_critica (
    id INT AUTO_INCREMENT PRIMARY KEY,
    proveedor_id INT NOT NULL,
    rut_vigente_nc VARCHAR(255),
    rut_vigente_nc_estado ENUM('Completo', 'No Completado'),
    certificado_existencia_nc VARCHAR(255),
    certificado_existencia_nc_estado ENUM('Completo', 'No Completado'),
    certificacion_bancaria_nc VARCHAR(255),
    certificacion_bancaria_nc_estado ENUM('Completo', 'No Completado'),
    referencia_comercial_nc VARCHAR(255),
    referencia_comercial_nc_estado ENUM('Completo', 'No Completado'),
    certificados_seguridad_nc VARCHAR(255),
    certificados_seguridad_nc_estado ENUM('Completo', 'No Completado', 'No Aplica'),
    resolucion_habilitacion_nc VARCHAR(255),
    resolucion_habilitacion_nc_estado ENUM('Completo', 'No Completado', 'No Aplica'),
    plan_contingencia_nc VARCHAR(255),
    plan_contingencia_nc_estado ENUM('Completo', 'No Completado'),
   FOREIGN KEY (proveedor_id) REFERENCES proveedores(numero_identificacion) ON DELETE CASCADE
)";

if ($conn->query($sql) === FALSE) {
    echo "Error creando tabla documentacion_no_critica: " . $conn->error;
}

// Tabla para documentación natural (Sección 4)
$sql = "CREATE TABLE IF NOT EXISTS documentacion_natural (
    id INT AUTO_INCREMENT PRIMARY KEY,
    proveedor_id INT NOT NULL,
    cedula_ciudadania VARCHAR(255),
    cedula_ciudadania_estado ENUM('Completo', 'No Completado'),
    rut_natural VARCHAR(255),
    rut_natural_estado ENUM('Completo', 'No Completado'),
    certificacion_bancaria_natural VARCHAR(255),
    certificacion_bancaria_natural_estado ENUM('Completo', 'No Completado'),
    FOREIGN KEY (proveedor_id) REFERENCES proveedores(numero_identificacion) ON DELETE CASCADE
)";

if ($conn->query($sql) === FALSE) {
    echo "Error creando tabla documentacion_natural: " . $conn->error;
}

// Tabla para información de contacto y empresa (Sección 5)
$sql = "CREATE TABLE IF NOT EXISTS informacion_contacto (
    id INT AUTO_INCREMENT PRIMARY KEY,
    proveedor_id INT NOT NULL,
    direccion_domicilio VARCHAR(255) NOT NULL,
    pais VARCHAR(100) NOT NULL DEFAULT 'Colombia',
    departamento VARCHAR(100) NOT NULL,
    ciudad VARCHAR(100) NOT NULL,
    telefono VARCHAR(20) NOT NULL,
    email_contacto VARCHAR(255) NOT NULL,
    codigo_postal VARCHAR(20),
    anios_experiencia INT NOT NULL,
    autoretenedor ENUM('SI', 'NO') NOT NULL,
    gran_contribuyente ENUM('SI', 'NO') NOT NULL,
    numero_resolucion VARCHAR(100),
    fecha_resolucion DATE,
    tipo_empresa ENUM('Privada', 'Publica', 'Mixta') NOT NULL,
    tipo_sociedad VARCHAR(100) NOT NULL,
    fecha_constitucion DATE NOT NULL,
    productos_ofrecidos VARCHAR(255) NOT NULL,
    otros_productos VARCHAR(255),
    zona_franca ENUM('SI', 'NO') NOT NULL,
    FOREIGN KEY (proveedor_id) REFERENCES proveedores(numero_identificacion) ON DELETE CASCADE
)";

if ($conn->query($sql) === FALSE) {
    echo "Error creando tabla informacion_contacto: " . $conn->error;
}

// Tabla para representante legal (Sección 6)
$sql = "CREATE TABLE IF NOT EXISTS representantes_legales (
    id INT AUTO_INCREMENT PRIMARY KEY,
    proveedor_id INT NOT NULL,
    nombres_apellidos VARCHAR(255) NOT NULL,
    tipo_identificacion VARCHAR(50) NOT NULL,
    numero_identificacion VARCHAR(50) NOT NULL,
    tipo_representante VARCHAR(50) NOT NULL,
    otro_tipo_representante VARCHAR(255),
    maneja_recursos_publicos ENUM('SI', 'NO') NOT NULL,
    reconocimiento_publico ENUM('SI', 'NO') NOT NULL,
    poder_publico ENUM('SI', 'NO') NOT NULL,
    servidor_publico ENUM('SI', 'NO') NOT NULL,
    vinculo_ppe ENUM('SI', 'NO') NOT NULL,
    nacionalidad VARCHAR(100) NOT NULL,
    pais_domicilio VARCHAR(100) NOT NULL,
    email VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
   FOREIGN KEY (proveedor_id) REFERENCES proveedores(numero_identificacion) ON DELETE CASCADE
)";

if ($conn->query($sql) === FALSE) {
    echo "Error creando tabla representantes_legales: " . $conn->error;
}

// Tabla para personas de contacto (Sección 7)
$sql = "CREATE TABLE IF NOT EXISTS personas_contacto (
    id INT AUTO_INCREMENT PRIMARY KEY,
    proveedor_id VARCHAR(50) NOT NULL,
    nombres_apellidos VARCHAR(255) NOT NULL,
    cargo VARCHAR(100) NOT NULL,
    telefono_celular VARCHAR(20) NOT NULL,
    email VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (proveedor_id) REFERENCES proveedores(numero_identificacion) ON DELETE CASCADE
)";

if ($conn->query($sql) === FALSE) {
    echo "Error creando tabla personas_contacto: " . $conn->error;
}


// Tabla para información PEP (Sección 8)
$sql = "CREATE TABLE IF NOT EXISTS informacion_pep (
    id INT AUTO_INCREMENT PRIMARY KEY,
    proveedor_id VARCHAR(50) NOT NULL,
    maneja_recursos_publicos ENUM('SI', 'NO', 'N/A') NOT NULL,
    desempenado_cargo_publico ENUM('SI', 'NO', 'N/A') NOT NULL,
    relacion_con_pep ENUM('SI', 'NO', 'N/A') NOT NULL,
    pep_nombres VARCHAR(255),
    pep_tipo_identificacion VARCHAR(50),
    pep_otro_tipo_identificacion VARCHAR(50),
    pep_numero_identificacion VARCHAR(50),
    pep_pais_domicilio VARCHAR(100),
    pep_cargo VARCHAR(100),
    pep_entidad_publica VARCHAR(255),
    pep_activo VARCHAR(50),
    pep_fecha_desvinculacion DATE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (proveedor_id) REFERENCES proveedores(numero_identificacion) ON DELETE CASCADE
)";

if ($conn->query($sql) === FALSE) {
    echo "Error creando tabla informacion_pep: " . $conn->error;
}



// Tabla para información de Beneficiarios Finales (Sección 9)
$sql = "CREATE TABLE IF NOT EXISTS beneficiarios_finales (
    id INT AUTO_INCREMENT PRIMARY KEY,
    proveedor_id VARCHAR(50) NOT NULL,
    sistema_conocimiento_terceros ENUM('SI', 'NO', 'N/A') NOT NULL,
    politicas_identificacion ENUM('SI', 'NO', 'N/A') NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (proveedor_id) REFERENCES proveedores(numero_identificacion) ON DELETE CASCADE
)";

if ($conn->query($sql) === FALSE) {
    echo "Error creando tabla beneficiarios_finales: " . $conn->error;
}


// Tabla para información financiera (Sección 10)
$sql = "CREATE TABLE IF NOT EXISTS informacion_financiera (
    id INT AUTO_INCREMENT PRIMARY KEY,
    proveedor_id VARCHAR(50) NOT NULL,
    actividad_economica TEXT NOT NULL,
    sector_economico VARCHAR(100) NOT NULL,
    divisa_reporte ENUM('USD', 'EUR', 'COP') NOT NULL,
    otros_ingresos DECIMAL(15,2) NOT NULL,
    costos_gastos DECIMAL(15,2) NOT NULL,
    total_activos DECIMAL(15,2) NOT NULL,
    total_pasivos DECIMAL(15,2) NOT NULL,
    total_patrimonio DECIMAL(15,2) NOT NULL,
    total_ingresos DECIMAL(15,2) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (proveedor_id) REFERENCES proveedores(numero_identificacion) ON DELETE CASCADE
)";

if ($conn->query($sql) === FALSE) {
    echo "Error creando tabla informacion_financiera: " . $conn->error;
}

// Tabla para operaciones internacionales (Sección 11)
$sql = "CREATE TABLE IF NOT EXISTS operaciones_internacionales (
    id INT AUTO_INCREMENT PRIMARY KEY,
    proveedor_id VARCHAR(50) NOT NULL,
    realiza_operaciones ENUM('SI', 'NO', 'N/A') NOT NULL,
    importaciones ENUM('SI', 'NO', 'N/A'),
    exportaciones ENUM('SI', 'NO', 'N/A'),
    inversiones ENUM('SI', 'NO', 'N/A'),
    pago_servicios ENUM('SI', 'NO', 'N/A'),
    otra_operacion VARCHAR(255),
    tipo_mercancia TEXT,
    obligaciones_tributarias ENUM('SI', 'NO', 'N/A'),
    beneficiario_nombre VARCHAR(255),
    beneficiario_tipo_id VARCHAR(50),
    beneficiario_otro_tipo VARCHAR(50),
    beneficiario_numero_id VARCHAR(50),
    beneficiario_pais VARCHAR(100),
    beneficiario_direccion TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (proveedor_id) REFERENCES proveedores(numero_identificacion) ON DELETE CASCADE
)";

if ($conn->query($sql) === FALSE) {
    echo "Error creando tabla operaciones_internacionales: " . $conn->error;
}
// ... (aquí puedes agregar las tablas para las siguientes secciones cuando las desarrolles)

echo "Tablas creadas o verificadas correctamente";
?>