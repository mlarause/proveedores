-- Crear base de datos
CREATE DATABASE IF NOT EXISTS calidad CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE calidad;

-- SESION 1: Información Básica del Proveedor
CREATE TABLE sesion1 (
    id VARCHAR(30) PRIMARY KEY, -- Número de identificación
    razon_social VARCHAR(255) NOT NULL,
    tipo_identificacion VARCHAR(50) NOT NULL,
    numero_identificacion VARCHAR(30) NOT NULL,
    tipo_proveedor VARCHAR(100) NOT NULL,
    numero_celular VARCHAR(30) NOT NULL,
    correo_electronico VARCHAR(100) NOT NULL
);

-- SESION 2: Proveedor no Gran Contribuyente
CREATE TABLE sesion2 (
    id VARCHAR(30),
    rut_vigente_ruta VARCHAR(255),
    rut_vigente_estado VARCHAR(30),
    certificado_existencia_ruta VARCHAR(255),
    certificado_existencia_estado VARCHAR(30),
    cedula_representante_ruta VARCHAR(255),
    cedula_representante_estado VARCHAR(30),
    estados_financieros_ruta VARCHAR(255),
    estados_financieros_estado VARCHAR(30),
    declaracion_renta_ruta VARCHAR(255),
    declaracion_renta_estado VARCHAR(30),
    certificacion_bancaria_ruta VARCHAR(255),
    certificacion_bancaria_estado VARCHAR(30),
    referencia_comercial_ruta VARCHAR(255),
    referencia_comercial_estado VARCHAR(30),
    certificados_seguridad_ruta VARCHAR(255),
    certificados_seguridad_estado VARCHAR(30),
    resolucion_habilitacion_ruta VARCHAR(255),
    resolucion_habilitacion_estado VARCHAR(30),
    plan_contingencia_ruta VARCHAR(255),
    plan_contingencia_estado VARCHAR(30),
    autoevaluacion_ruta VARCHAR(255),
    autoevaluacion_estado VARCHAR(30),
    fachada_nomenclatura_ruta VARCHAR(255),
    fachada_nomenclatura_estado VARCHAR(30),
    formularios_ruta VARCHAR(255),
    formularios_estado VARCHAR(30),
    desea_diligenciar VARCHAR(10),
    motivo_no TEXT,
    PRIMARY KEY (id),
    FOREIGN KEY (id) REFERENCES sesion1(id)
);

-- SESION 3: Proveedor Gran Contribuyente
CREATE TABLE sesion3 (
    id VARCHAR(30),
    rut_vigente_nc_ruta VARCHAR(255),
    rut_vigente_nc_estado VARCHAR(30),
    certificado_existencia_nc_ruta VARCHAR(255),
    certificado_existencia_nc_estado VARCHAR(30),
    cedula_representante_nc_ruta VARCHAR(255),
    cedula_representante_nc_estado VARCHAR(30),
    certificacion_bancaria_nc_ruta VARCHAR(255),
    certificacion_bancaria_nc_estado VARCHAR(30),
    referencia_comercial_nc_ruta VARCHAR(255),
    referencia_comercial_nc_estado VARCHAR(30),
    certificados_seguridad_nc_ruta VARCHAR(255),
    certificados_seguridad_nc_estado VARCHAR(30),
    resolucion_habilitacion_nc_ruta VARCHAR(255),
    resolucion_habilitacion_nc_estado VARCHAR(30),
    plan_contingencia_nc_ruta VARCHAR(255),
    plan_contingencia_nc_estado VARCHAR(30),
    autoevaluacion_nc_ruta VARCHAR(255),
    autoevaluacion_nc_estado VARCHAR(30),
    fachada_nomenclatura_nc_ruta VARCHAR(255),
    fachada_nomenclatura_nc_estado VARCHAR(30),
    formularios_nc_ruta VARCHAR(255),
    formularios_nc_estado VARCHAR(30),
    PRIMARY KEY (id),
    FOREIGN KEY (id) REFERENCES sesion1(id)
);

-- SESION 4: Persona Natural
CREATE TABLE sesion4 (
    id VARCHAR(30),
    cedula_ciudadania_ruta VARCHAR(255),
    cedula_ciudadania_estado VARCHAR(30),
    rut_natural_ruta VARCHAR(255),
    rut_natural_estado VARCHAR(30),
    certificacion_bancaria_natural_ruta VARCHAR(255),
    certificacion_bancaria_natural_estado VARCHAR(30),
    fachada_nomenclatura_natural_ruta VARCHAR(255),
    fachada_nomenclatura_natur_estado VARCHAR(30),
    formularios_natural_ruta VARCHAR(255),
    formularios_natural_estado VARCHAR(30),
    PRIMARY KEY (id),
    FOREIGN KEY (id) REFERENCES sesion1(id)
);

-- SESION 5: Mandatorio (Aerolinea, Naviera)
CREATE TABLE sesion5 (
    id VARCHAR(30),
    rut_vigente_ruta VARCHAR(255),
    rut_vigente_estado VARCHAR(30),
    certificacion_bancaria_ruta VARCHAR(255),
    certificacion_bancaria_estado VARCHAR(30),
    camara_comercio_ruta VARCHAR(255),
    camara_comercio_estado VARCHAR(30),
    cedula_representante_ruta VARCHAR(255),
    cedula_representante_estado VARCHAR(30),
    formularios_natural_ruta VARCHAR(255),
    formularios_natural_estado VARCHAR(30),
    desea_diligenciar VARCHAR(10),
    motivo_no TEXT,
    PRIMARY KEY (id),
    FOREIGN KEY (id) REFERENCES sesion1(id)
);

-- SESION 6: Información de Contacto y Empresa
CREATE TABLE sesion6 (
    id VARCHAR(30),
    direccion_domicilio VARCHAR(255),
    pais VARCHAR(50),
    departamento VARCHAR(50),
    ciudad VARCHAR(50),
    telefono VARCHAR(30),
    email_contacto VARCHAR(100),
    codigo_postal VARCHAR(20),
    anios_experiencia INT,
    autoretenedor VARCHAR(10),
    gran_contribuyente VARCHAR(10),
    numero_resolucion VARCHAR(50),
    fecha_resolucion DATE,
    tipo_empresa VARCHAR(50),
    tipo_sociedad VARCHAR(50),
    fecha_constitucion DATE,
    productos_ofrecidos VARCHAR(100),
    otros_productos VARCHAR(255),
    zona_franca VARCHAR(10),
    PRIMARY KEY (id),
    FOREIGN KEY (id) REFERENCES sesion1(id)
);

-- SESION 7: Información del Representante Legal Principal
CREATE TABLE sesion7 (
    id VARCHAR(30),
    representante_nombres VARCHAR(255),
    representante_tipo_id VARCHAR(50),
    representante_numero_id VARCHAR(30),
    representante_tipo VARCHAR(50),
    otro_tipo_representante VARCHAR(100),
    maneja_recursos_publicos VARCHAR(10),
    reconocimiento_publico VARCHAR(10),
    poder_publico VARCHAR(10),
    servidor_publico VARCHAR(10),
    vinculo_ppe VARCHAR(10),
    representante_nacionalidad VARCHAR(50),
    representante_pais_domicilio VARCHAR(50),
    representante_email VARCHAR(100),
    PRIMARY KEY (id),
    FOREIGN KEY (id) REFERENCES sesion1(id)
);

-- SESION 8: Personas de Contacto (varios por proveedor, tabla hija)
CREATE TABLE sesion8 (
    id INT AUTO_INCREMENT PRIMARY KEY,
    proveedor_id VARCHAR(30) NOT NULL,
    contacto_nombres VARCHAR(255) NOT NULL,
    contacto_cargo VARCHAR(100) NOT NULL,
    contacto_telefono VARCHAR(50) NOT NULL,
    contacto_email VARCHAR(100) NOT NULL,
    FOREIGN KEY (proveedor_id) REFERENCES sesion1(id)
);

-- SESION 9: Conocimiento Mejorado de Persona Expuesta Políticamente (PEP)
CREATE TABLE sesion9 (
    id VARCHAR(30),
    pep_recursos_publicos VARCHAR(10),
    pep_cargo_publico VARCHAR(10),
    pep_relacion VARCHAR(10),
    pep_nombres VARCHAR(255),
    pep_tipo_identificacion VARCHAR(50),
    pep_otro_tipo_identificacion VARCHAR(50),
    pep_numero_identificacion VARCHAR(50),
    pep_pais_domicilio VARCHAR(50),
    pep_cargo VARCHAR(100),
    pep_entidad_publica VARCHAR(100),
    pep_activo VARCHAR(10),
    pep_fecha_desvinculacion DATE,
    PRIMARY KEY (id),
    FOREIGN KEY (id) REFERENCES sesion1(id)
);

-- SESION 10: Conocimiento de Beneficiarios Finales
CREATE TABLE sesion10 (
    id VARCHAR(30),
    sistema_conocimiento_terceros VARCHAR(10),
    politicas_identificacion VARCHAR(10),
    PRIMARY KEY (id),
    FOREIGN KEY (id) REFERENCES sesion1(id)
);

-- SESION 11: Información Financiera
CREATE TABLE sesion11 (
    id VARCHAR(30),
    actividad_economica TEXT,
    sector_economico VARCHAR(100),
    divisa_reporte VARCHAR(10),
    otros_ingresos VARCHAR(50),
    costos_gastos VARCHAR(50),
    total_activos INT,
    total_pasivos INT,
    total_patrimonio INT,
    total_ingresos INT,
    PRIMARY KEY (id),
    FOREIGN KEY (id) REFERENCES sesion1(id)
);

-- SESION 12: Operaciones Internacionales
CREATE TABLE sesion12 (
    id VARCHAR(30),
    operaciones_internacionales VARCHAR(10),
    importaciones VARCHAR(10),
    exportaciones VARCHAR(10),
    inversiones VARCHAR(10),
    pago_servicios VARCHAR(10),
    otra_operacion VARCHAR(255),
    tipo_mercancia TEXT,
    obligaciones_tributarias VARCHAR(10),
    beneficiario_nombre VARCHAR(255),
    beneficiario_tipo_id VARCHAR(50),
    beneficiario_otro_tipo VARCHAR(50),
    beneficiario_numero_id VARCHAR(50),
    beneficiario_pais VARCHAR(50),
    beneficiario_direccion VARCHAR(255),
    PRIMARY KEY (id),
    FOREIGN KEY (id) REFERENCES sesion1(id)
);

-- SESION 13: Referencias Comerciales (varias por proveedor, tabla hija)
CREATE TABLE sesion13 (
    id INT AUTO_INCREMENT PRIMARY KEY,
    proveedor_id VARCHAR(30) NOT NULL,
    nombre_razon_social VARCHAR(255) NOT NULL,
    ciudad_domicilio VARCHAR(255) NOT NULL,
    nombre_contacto VARCHAR(255) NOT NULL,
    cargo_contacto VARCHAR(255) NOT NULL,
    telefono_contacto VARCHAR(50) NOT NULL,
    FOREIGN KEY (proveedor_id) REFERENCES sesion1(id)
);

-- SESION 14: Certificaciones
CREATE TABLE sesion14 (
    id VARCHAR(30),
    gestion_calidad VARCHAR(10),
    otro_gestion_calidad VARCHAR(255),
    numero_certificado_calidad VARCHAR(255),
    fecha_vigencia_calidad DATE,
    certificado_gestion_calidad VARCHAR(255),
    certificado_gestion_calidad_estado VARCHAR(30),
    seguridad_suministro VARCHAR(10),
    otro_seguridad_suministro VARCHAR(255),
    numero_certificado_calidad_84 VARCHAR(255),
    fecha_vigencia_calidad_84 DATE,
    certificado_gestion_ambiental_84 VARCHAR(255),
    certificado_gestion_ambiental_estado_84 VARCHAR(30),
    operador_economico VARCHAR(10),
    numero_certificado_operador VARCHAR(255),
    fecha_vigencia_operador DATE,
    certificado_operador_economico VARCHAR(255),
    certificado_operador_economico_estado VARCHAR(30),
    resolucion_vigencia VARCHAR(255),
    sistema_sarlaft VARCHAR(10),
    otro_sistema_sarlaft VARCHAR(255),
    licencias_ambientales VARCHAR(10),
    otro_licencias_ambientales VARCHAR(255),
    seguridad_salud VARCHAR(10),
    otro_seguridad_salud VARCHAR(255),
    avance_ss VARCHAR(50),
    calidad_laboratorios VARCHAR(10),
    otro_calidad_laboratorios VARCHAR(255),
    detalle_certificaciones VARCHAR(255),
    PRIMARY KEY (id),
    FOREIGN KEY (id) REFERENCES sesion1(id)
);

-- SESION 15: Declaraciones y Autorizaciones
CREATE TABLE sesion15 (
    id VARCHAR(30),
    acepta_declaraciones VARCHAR(10),
    PRIMARY KEY (id),
    FOREIGN KEY (id) REFERENCES sesion1(id)
);

-- SESION 16: Firma Digital
CREATE TABLE sesion16 (
    id VARCHAR(30),
    firma_imagen VARCHAR(255), -- Ruta en SharePoint
    fecha_firma DATETIME,
    PRIMARY KEY (id),
    FOREIGN KEY (id) REFERENCES sesion1(id)
);