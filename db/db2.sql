CREATE DATABASE IF NOT EXISTS proveedores CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE proveedores;

-- SESIÓN 1: Información Básica del Proveedor
CREATE TABLE sesion1 (
    numero_identificacion VARCHAR(30) PRIMARY KEY,
    razon_social VARCHAR(255) NOT NULL,
    tipo_identificacion VARCHAR(50) NOT NULL,
    tipo_proveedor VARCHAR(100) NOT NULL,
    numero_celular VARCHAR(30),
    correo_electronico VARCHAR(100),
    fecha_registro DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- SESIÓN 2: Documentación Proveedor no Gran Contribuyente
CREATE TABLE sesion2 (
    numero_identificacion VARCHAR(30),
    rut_vigente_ruta VARCHAR(500),
    rut_vigente_estado VARCHAR(30),
    certificado_existencia_ruta VARCHAR(500),
    certificado_existencia_estado VARCHAR(30),
    cedula_representante_ruta VARCHAR(500),
    cedula_representante_estado VARCHAR(30),
    estados_financieros_ruta VARCHAR(500),
    estados_financieros_estado VARCHAR(30),
    declaracion_renta_ruta VARCHAR(500),
    declaracion_renta_estado VARCHAR(30),
    certificacion_bancaria_ruta VARCHAR(500),
    certificacion_bancaria_estado VARCHAR(30),
    referencia_comercial_ruta VARCHAR(500),
    referencia_comercial_estado VARCHAR(30),
    certificados_seguridad_ruta VARCHAR(500),
    certificados_seguridad_estado VARCHAR(30),
    resolucion_habilitacion_ruta VARCHAR(500),
    resolucion_habilitacion_estado VARCHAR(30),
    plan_contingencia_ruta VARCHAR(500),
    plan_contingencia_estado VARCHAR(30),
    fachada_nomenclatura_ruta VARCHAR(500),
    fachada_nomenclatura_estado VARCHAR(30),
    formularios_ruta VARCHAR(500),
    formularios_estado VARCHAR(30),
    autoevaluacion_ruta VARCHAR(500),
    autoevaluacion_estado VARCHAR(30),
    PRIMARY KEY (numero_identificacion),
    FOREIGN KEY (numero_identificacion) REFERENCES sesion1(numero_identificacion) ON DELETE CASCADE
);

-- SESIÓN 3: Documentación Proveedor Gran Contribuyente
CREATE TABLE sesion3 (
    numero_identificacion VARCHAR(30),
    rut_vigente_nc_ruta VARCHAR(500),
    rut_vigente_nc_estado VARCHAR(30),
    certificado_existencia_nc_ruta VARCHAR(500),
    certificado_existencia_nc_estado VARCHAR(30),
    cedula_representante_nc_ruta VARCHAR(500),
    cedula_representante_nc_estado VARCHAR(30),
    certificacion_bancaria_nc_ruta VARCHAR(500),
    certificacion_bancaria_nc_estado VARCHAR(30),
    referencia_comercial_nc_ruta VARCHAR(500),
    referencia_comercial_nc_estado VARCHAR(30),
    certificados_seguridad_nc_ruta VARCHAR(500),
    certificados_seguridad_nc_estado VARCHAR(30),
    resolucion_habilitacion_nc_ruta VARCHAR(500),
    resolucion_habilitacion_nc_estado VARCHAR(30),
    plan_contingencia_nc_ruta VARCHAR(500),
    plan_contingencia_nc_estado VARCHAR(30),
    fachada_nomenclatura_nc_ruta VARCHAR(500),
    fachada_nomenclatura_nc_estado VARCHAR(30),
    formularios_nc_ruta VARCHAR(500),
    formularios_nc_estado VARCHAR(30),
    autoevaluacion_ruta VARCHAR(500),
    autoevaluacion_estado VARCHAR(30),
    PRIMARY KEY (numero_identificacion),
    FOREIGN KEY (numero_identificacion) REFERENCES sesion1(numero_identificacion) ON DELETE CASCADE
);

-- SESIÓN 4: Documentación Persona Natural
CREATE TABLE sesion4 (
    numero_identificacion VARCHAR(30),
    cedula_ciudadania_ruta VARCHAR(500),
    cedula_ciudadania_estado VARCHAR(30),
    rut_natural_ruta VARCHAR(500),
    rut_natural_estado VARCHAR(30),
    certificacion_bancaria_natural_ruta VARCHAR(500),
    certificacion_bancaria_natural_estado VARCHAR(30),
    fachada_nomenclatura_natural_ruta VARCHAR(500),
    fachada_nomenclatura_natur_estado VARCHAR(30),
    formularios_natural_ruta VARCHAR(500),
    formularios_natural_estado VARCHAR(30),
    PRIMARY KEY (numero_identificacion),
    FOREIGN KEY (numero_identificacion) REFERENCES sesion1(numero_identificacion) ON DELETE CASCADE
);

-- SESIÓN 5: Documentación Mandatorio
CREATE TABLE sesion5 (
    numero_identificacion VARCHAR(30),
    rut_vigente_ruta VARCHAR(500),
    rut_vigente_estado VARCHAR(30),
    camara_comercio_ruta VARCHAR(500),
    camara_comercio_estado VARCHAR(30),
    cedula_representante_ruta VARCHAR(500),
    cedula_representante_estado VARCHAR(30),
    certificacion_bancaria_ruta VARCHAR(500),
    certificacion_bancaria_estado VARCHAR(30),
    formularios_natural_ruta VARCHAR(500),
    formularios_natural_estado VARCHAR(30),
    desea_diligenciar VARCHAR(10),
    motivo_no TEXT,
    PRIMARY KEY (numero_identificacion),
    FOREIGN KEY (numero_identificacion) REFERENCES sesion1(numero_identificacion) ON DELETE CASCADE
);

-- SESIÓN 6: Información de Contacto y Empresa
CREATE TABLE sesion6 (
    numero_identificacion VARCHAR(30),
    direccion_domicilio VARCHAR(255),
    pais VARCHAR(100),
    ciudad VARCHAR(100),
    telefono VARCHAR(30),
    correo_contacto VARCHAR(100),
    fecha_constitucion DATE,
    productos_ofrecidos VARCHAR(255),
    otros_productos VARCHAR(255),
    zona_franca VARCHAR(10),
    PRIMARY KEY (numero_identificacion),
    FOREIGN KEY (numero_identificacion) REFERENCES sesion1(numero_identificacion) ON DELETE CASCADE
);

-- SESIÓN 7: Representante Legal
CREATE TABLE sesion7 (
    numero_identificacion VARCHAR(30),
    representante_nombres VARCHAR(255),
    representante_tipo_id VARCHAR(50),
    representante_numero_id VARCHAR(50),
    otro_tipo_representante VARCHAR(100),
    maneja_recursos_publicos VARCHAR(10),
    reconocimiento_publico VARCHAR(10),
    poder_publico VARCHAR(10),
    PRIMARY KEY (numero_identificacion),
    FOREIGN KEY (numero_identificacion) REFERENCES sesion1(numero_identificacion) ON DELETE CASCADE
);

-- SESIÓN 8: Personas de Contacto (pueden ser varias)
CREATE TABLE sesion8 (
    id INT AUTO_INCREMENT PRIMARY KEY,
    numero_identificacion VARCHAR(30),
    nombres_apellidos VARCHAR(255),
    cargo VARCHAR(100),
    telefono VARCHAR(30),
    correo VARCHAR(100),
    FOREIGN KEY (numero_identificacion) REFERENCES sesion1(numero_identificacion) ON DELETE CASCADE
);

-- SESIÓN 9: Conocimiento Mejorado de PEP
CREATE TABLE sesion9 (
    numero_identificacion VARCHAR(30),
    pep_recursos_publicos VARCHAR(10),
    pep_nombres VARCHAR(255),
    pep_tipo_identificacion VARCHAR(50),
    pep_otro_tipo_identificacion VARCHAR(100),
    pep_numero_identificacion VARCHAR(50),
    pep_pais_domicilio VARCHAR(100),
    pep_cargo VARCHAR(255),
    pep_entidad_publica VARCHAR(255),
    pep_activo VARCHAR(10),
    pep_fecha_desvinculacion DATE,
    PRIMARY KEY (numero_identificacion),
    FOREIGN KEY (numero_identificacion) REFERENCES sesion1(numero_identificacion) ON DELETE CASCADE
);

-- SESIÓN 10: Beneficiarios Finales
CREATE TABLE sesion10 (
    numero_identificacion VARCHAR(30),
    sistema_conocimiento_terceros VARCHAR(10),
    politicas_identificacion VARCHAR(10),
    PRIMARY KEY (numero_identificacion),
    FOREIGN KEY (numero_identificacion) REFERENCES sesion1(numero_identificacion) ON DELETE CASCADE
);

-- SESIÓN 11: Información Financiera
CREATE TABLE sesion11 (
    numero_identificacion VARCHAR(30),
    actividad_economica TEXT,
    total_activos DECIMAL(18,2),
    total_pasivos DECIMAL(18,2),
    total_patrimonio DECIMAL(18,2),
    total_ingresos DECIMAL(18,2),
    PRIMARY KEY (numero_identificacion),
    FOREIGN KEY (numero_identificacion) REFERENCES sesion1(numero_identificacion) ON DELETE CASCADE
);

-- SESIÓN 12: Operaciones Internacionales
CREATE TABLE sesion12 (
    numero_identificacion VARCHAR(30),
    operaciones_internacionales VARCHAR(10),
    importaciones VARCHAR(10),
    exportaciones VARCHAR(10),
    inversiones VARCHAR(10),
    otra_operacion VARCHAR(255),
    tipo_mercancia TEXT,
    obligaciones_tributarias VARCHAR(10),
    beneficiario_nombre VARCHAR(255),
    beneficiario_tipo_id VARCHAR(50),
    beneficiario_otro_tipo VARCHAR(100),
    beneficiario_numero_id VARCHAR(50),
    beneficiario_pais VARCHAR(100),
    beneficiario_direccion VARCHAR(255),
    PRIMARY KEY (numero_identificacion),
    FOREIGN KEY (numero_identificacion) REFERENCES sesion1(numero_identificacion) ON DELETE CASCADE
);

-- SESIÓN 13: Referencia Comercial
CREATE TABLE sesion13 (
    numero_identificacion VARCHAR(30),
    nombre_razon_social VARCHAR(255),
    ciudad_domicilio VARCHAR(100),
    nombre_contacto VARCHAR(255),
    cargo_contacto VARCHAR(100),
    telefono_contacto VARCHAR(30),
    PRIMARY KEY (numero_identificacion),
    FOREIGN KEY (numero_identificacion) REFERENCES sesion1(numero_identificacion) ON DELETE CASCADE
);

-- SESIÓN 14: Certificaciones
CREATE TABLE sesion14 (
    numero_identificacion VARCHAR(30),
    gestion_calidad VARCHAR(10),
    otro_gestion_calidad VARCHAR(255),
    seguridad_suministro VARCHAR(10),
    seguridad_salud VARCHAR(10),
    otro_seguridad_salud VARCHAR(255),
    avance_ss VARCHAR(50),
    calidad_laboratorios VARCHAR(10),
    detalle_certificaciones TEXT,
    PRIMARY KEY (numero_identificacion),
    FOREIGN KEY (numero_identificacion) REFERENCES sesion1(numero_identificacion) ON DELETE CASCADE
);

-- SESIÓN 15: Declaraciones y Autorizaciones
CREATE TABLE sesion15 (
    numero_identificacion VARCHAR(30),
    acepta_declaraciones VARCHAR(10),
    fecha_aceptacion DATETIME,
    PRIMARY KEY (numero_identificacion),
    FOREIGN KEY (numero_identificacion) REFERENCES sesion1(numero_identificacion) ON DELETE CASCADE
);

-- SESIÓN 16: Documentos Requeridos (PDF y adjuntos en SharePoint)
CREATE TABLE sesion16 (
    numero_identificacion VARCHAR(30),
    ruta_pdf_sharepoint VARCHAR(500),
    ruta_adjuntos_sharepoint TEXT,
    firma_imagen VARCHAR(500),
    fecha_envio DATETIME DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (numero_identificacion),
    FOREIGN KEY (numero_identificacion) REFERENCES sesion1(numero_identificacion) ON DELETE CASCADE
);