-- Tabla de Proveedores (Sesión 1)
CREATE TABLE IF NOT EXISTS proveedores (
    numero_identificacion VARCHAR(50) PRIMARY KEY,
    razon_social VARCHAR(255) NOT NULL,
    tipo_identificacion VARCHAR(50) NOT NULL,
    tipo_proveedor ENUM('Proveedor Crítico', 'Proveedor No Crítico', 'Proveedor Natural Especial') NOT NULL,
    numero_celular VARCHAR(20) NOT NULL,
    correo_electronico VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Documentación Crítica (Sesión 2)
CREATE TABLE IF NOT EXISTS documentacion_critica (
    id INT AUTO_INCREMENT PRIMARY KEY,
    proveedor_id VARCHAR(50) NOT NULL,
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
);

-- Documentación No Crítica (Sesión 3)
CREATE TABLE IF NOT EXISTS documentacion_no_critica (
    id INT AUTO_INCREMENT PRIMARY KEY,
    proveedor_id VARCHAR(50) NOT NULL,
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
);

-- Documentación Natural (Sesión 4)
CREATE TABLE IF NOT EXISTS documentacion_natural (
    id INT AUTO_INCREMENT PRIMARY KEY,
    proveedor_id VARCHAR(50) NOT NULL,
    cedula_ciudadania VARCHAR(255),
    cedula_ciudadania_estado ENUM('Completo', 'No Completado'),
    rut_natural VARCHAR(255),
    rut_natural_estado ENUM('Completo', 'No Completado'),
    certificacion_bancaria_natural VARCHAR(255),
    certificacion_bancaria_natural_estado ENUM('Completo', 'No Completado'),
    FOREIGN KEY (proveedor_id) REFERENCES proveedores(numero_identificacion) ON DELETE CASCADE
);

-- Información de Contacto y Empresa (Sesión 5)
CREATE TABLE IF NOT EXISTS informacion_contacto (
    id INT AUTO_INCREMENT PRIMARY KEY,
    proveedor_id VARCHAR(50) NOT NULL,
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
);

-- Representante Legal (Sesión 6)
CREATE TABLE IF NOT EXISTS representantes_legales (
    id INT AUTO_INCREMENT PRIMARY KEY,
    proveedor_id VARCHAR(50) NOT NULL,
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
);

-- Personas de Contacto (Sesión 7)
CREATE TABLE IF NOT EXISTS personas_contacto (
    id INT AUTO_INCREMENT PRIMARY KEY,
    proveedor_id VARCHAR(50) NOT NULL,
    nombres_apellidos VARCHAR(255) NOT NULL,
    cargo VARCHAR(100) NOT NULL,
    telefono_celular VARCHAR(20) NOT NULL,
    email VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (proveedor_id) REFERENCES proveedores(numero_identificacion) ON DELETE CASCADE
);

-- Información PEP (Sesión 8)
CREATE TABLE IF NOT EXISTS informacion_pep (
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
);

-- Beneficiarios Finales (Sesión 9)
CREATE TABLE IF NOT EXISTS beneficiarios_finales (
    id INT AUTO_INCREMENT PRIMARY KEY,
    proveedor_id VARCHAR(50) NOT NULL,
    sistema_conocimiento_terceros ENUM('SI', 'NO', 'N/A') NOT NULL,
    politicas_identificacion ENUM('SI', 'NO', 'N/A') NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (proveedor_id) REFERENCES proveedores(numero_identificacion) ON DELETE CASCADE
);

-- Información Financiera (Sesión 10)
CREATE TABLE IF NOT EXISTS informacion_financiera (
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
);

-- Operaciones Internacionales (Sesión 11)
CREATE TABLE IF NOT EXISTS operaciones_internacionales (
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
);

-- Referencia Comercial (Sesión 12)
CREATE TABLE IF NOT EXISTS referencias_comerc (
    id INT AUTO_INCREMENT PRIMARY KEY,
    proveedor_id VARCHAR(50) NOT NULL,
    nom_razon_social VARCHAR(100) NOT NULL,
    ciudad_dom VARCHAR(100) NOT NULL,
    nom_contacto VARCHAR(100) NOT NULL,
    cargo_contacto VARCHAR(100) NOT NULL,
    tel_contacto VARCHAR(20) NOT NULL,
    FOREIGN KEY (proveedor_id) REFERENCES proveedores(numero_identificacion) ON DELETE CASCADE
);

-- Certificaciones (Sesión 13)
CREATE TABLE IF NOT EXISTS certificaciones (
    id INT AUTO_INCREMENT PRIMARY KEY,
    proveedor_id VARCHAR(50) NOT NULL,
    gestion_calidad VARCHAR(10) NOT NULL,
    otro_gestion_calidad VARCHAR(100),
    seguridad_suministro VARCHAR(10) NOT NULL,
    otro_seguridad_suministro VARCHAR(100),
    operador_economico VARCHAR(10) NOT NULL,
    resolucion_vigencia VARCHAR(100) NOT NULL,
    sistema_sarlaft VARCHAR(10) NOT NULL,
    otro_sistema_sarlaft VARCHAR(100),
    licencias_ambientales VARCHAR(10) NOT NULL,
    otro_licencias_ambientales VARCHAR(100),
    seguridad_salud VARCHAR(10) NOT NULL,
    otro_seguridad_salud VARCHAR(100),
    avance_ss VARCHAR(50) NOT NULL,
    calidad_laboratorios VARCHAR(10) NOT NULL,
    otro_calidad_laboratorios VARCHAR(100),
    detalle_certificaciones TEXT NOT NULL,
    FOREIGN KEY (proveedor_id) REFERENCES proveedores(numero_identificacion) ON DELETE CASCADE
);

-- Declaraciones y Autorizaciones (Sesión 14)
CREATE TABLE IF NOT EXISTS declaraciones_autorizaciones (
    id INT AUTO_INCREMENT PRIMARY KEY,
    proveedor_id VARCHAR(50) NOT NULL,
    acepta_declaraciones ENUM('SI', 'NO') NOT NULL,
    fecha_aceptacion DATETIME NOT NULL,
    ip_aceptacion VARCHAR(45) NOT NULL,
    FOREIGN KEY (proveedor_id) REFERENCES proveedores(numero_identificacion) ON DELETE CASCADE
);

-- Documentos Proveedor (Sesión 15)
CREATE TABLE IF NOT EXISTS documentos_proveedor (
    id INT AUTO_INCREMENT PRIMARY KEY,
    proveedor_id VARCHAR(50) NOT NULL,
    firma_imagen VARCHAR(255) NOT NULL,
    nombre_firmante VARCHAR(100) NOT NULL,
    identificacion_firmante VARCHAR(50) NOT NULL,
    fecha_firma DATETIME NOT NULL,
    FOREIGN KEY (proveedor_id) REFERENCES proveedores(numero_identificacion) ON DELETE CASCADE
);

-- Archivos Adjuntos (Sesión 16 y otros)
CREATE TABLE IF NOT EXISTS archivos_proveedor (
    id INT AUTO_INCREMENT PRIMARY KEY,
    proveedor_id VARCHAR(50) NOT NULL,
    nombre_archivo VARCHAR(255) NOT NULL,
    tipo_archivo VARCHAR(50) NOT NULL,
    tamano_archivo INT NOT NULL,
    ruta_archivo VARCHAR(255) NOT NULL,
    fecha_subida DATETIME NOT NULL,
    FOREIGN KEY (proveedor_id) REFERENCES proveedores(numero_identificacion) ON DELETE CASCADE
);