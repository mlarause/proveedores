<//php include 'database.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Proveedores</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Estilos personalizados -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="container mt-4 mb-5">
        <h1 class="text-center mb-4">Registro de Proveedores</h1>
        
        <form id="formProveedor" action="procesar.php" method="post" enctype="multipart/form-data">
            <!-- Barra de progreso -->
            <div class="progress mb-4">
                <div class="progress-bar" role="progressbar" style="width: 8%;" aria-valuenow="8" aria-valuemin="0" aria-valuemax="100">1/15</div>
            </div>
            
            <!-- Indicador de secciones -->
            <ul class="nav nav-pills mb-4 justify-content-center" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-seccion1-tab" data-bs-toggle="pill" data-bs-target="#pills-seccion1" type="button" role="tab" aria-controls="pills-seccion1" aria-selected="true">Información Básica</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-seccion2-tab" data-bs-toggle="pill" data-bs-target="#pills-seccion2" type="button" role="tab" aria-controls="pills-seccion2" aria-selected="false" style="display:none;">Documentación Crítica</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-seccion3-tab" data-bs-toggle="pill" data-bs-target="#pills-seccion3" type="button" role="tab" aria-controls="pills-seccion3" aria-selected="false" style="display:none;">Documentación No Crítica</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-seccion4-tab" data-bs-toggle="pill" data-bs-target="#pills-seccion4" type="button" role="tab" aria-controls="pills-seccion4" aria-selected="false" style="display:none;">Documentación Natural</button>
                </li>
                 <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-seccion5-tab" data-bs-toggle="pill" data-bs-target="#pills-seccion5" type="button" role="tab" aria-controls="pills-seccion5" aria-selected="false">Información de Contacto</button>
                </li>
                <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-seccion6-tab" data-bs-toggle="pill" data-bs-target="#pills-seccion6" type="button" role="tab" aria-controls="pills-seccion6" aria-selected="false" style="display:none;">Representante Legal</button>
                </li>
                <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-seccion7-tab" data-bs-toggle="pill" data-bs-target="#pills-seccion7" type="button" role="tab" aria-controls="pills-seccion7" aria-selected="false" style="display:none;">Personas Contacto</button>
                </li>
                <li class="nav-item" role="presentation">
                 <button class="nav-link" id="pills-seccion8-tab" data-bs-toggle="pill" data-bs-target="#pills-seccion8" type="button" role="tab" aria-controls="pills-seccion8" aria-selected="false" style="display:none;">Información PEP</button>
                </li>
                <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-seccion9-tab" data-bs-toggle="pill" data-bs-target="#pills-seccion9" type="button" role="tab" aria-controls="pills-seccion9" aria-selected="false" style="display:none;">Beneficiarios Finales</button>
                </li>


            </ul>
            
            <!-- Contenido de las secciones -->
            <div class="tab-content" id="pills-tabContent">
                <!-- Sección 1: Información Básica -->
                <div class="tab-pane fade show active" id="pills-seccion1" role="tabpanel" aria-labelledby="pills-seccion1-tab">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <h5 class="card-title mb-0">Información Básica del Proveedor</h5>
                        </div>
                        <div class="card-body">
                            <div class="row g-3">
                                <!-- Razón Social -->
                                <div class="col-md-12">
                                    <label for="razon_social" class="form-label">Razón Social <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="razon_social" name="razon_social" required>
                                </div>
                                
                                <!-- Tipo de Identificación -->
                                <div class="col-md-6">
                                    <label for="tipo_identificacion" class="form-label">Tipo de Identificación <span class="text-danger">*</span></label>
                                    <select class="form-select" id="tipo_identificacion" name="tipo_identificacion" required>
                                        <option value="" selected disabled>Seleccione...</option>
                                        <option value="Cédula de Ciudadanía">Cédula de Ciudadanía</option>
                                        <option value="Cédula de Extranjería">Cédula de Extranjería</option>
                                        <option value="Pasaporte">Pasaporte</option>
                                        <option value="NIT Diplomático">NIT Diplomático</option>
                                        <option value="Documento de Identidad de Extranjero">Documento de Identidad de Extranjero</option>
                                        <option value="NIT de Persona Natural">NIT de Persona Natural</option>
                                    </select>
                                </div>
                                
                                <!-- Número de Identificación (ID) -->
                                <div class="col-md-6">
                                    <label for="numero_identificacion" class="form-label">Número de Identificación <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="numero_identificacion" name="numero_identificacion" required>
                                </div>
                                
                                <!-- Tipo de Proveedor -->
                                <div class="col-md-12">
                                    <label for="tipo_proveedor" class="form-label">Tipo de Proveedor <span class="text-danger">*</span></label>
                                    <select class="form-select" id="tipo_proveedor" name="tipo_proveedor" required>
                                        <option value="" selected disabled>Seleccione...</option>
                                        <option value="Proveedor Crítico">Proveedor Crítico</option>
                                        <option value="Proveedor No Crítico">Proveedor No Crítico</option>
                                        <option value="Proveedor Natural Especial">Proveedor Natural Especial</option>
                                    </select>
                                </div>
                                
                                <!-- Número de Celular -->
                                <div class="col-md-6">
                                    <label for="numero_celular" class="form-label">Número de Celular <span class="text-danger">*</span></label>
                                    <input type="tel" class="form-control" id="numero_celular" name="numero_celular" required>
                                </div>
                                
                                <!-- Correo Electrónico -->
                                <div class="col-md-6">
                                    <label for="correo_electronico" class="form-label">Correo Electrónico <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="correo_electronico" name="correo_electronico" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Botones de navegación -->
                    <div class="d-flex justify-content-between mt-4">
                        <button type="button" class="btn btn-secondary disabled">Anterior</button>
                        <button type="button" class="btn btn-primary" onclick="validarSeccion1()">Siguiente</button>
                    </div>
                </div>
                
                <!-- Sección 2: Documentación Proveedor Crítico -->
                <div class="tab-pane fade" id="pills-seccion2" role="tabpanel" aria-labelledby="pills-seccion2-tab">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <h5 class="card-title mb-0">REQUISITOS Y FORMATOS (Documentación - Proveedor Crítico)</h5>
                        </div>
                        <div class="card-body">
                            <div class="alert alert-info">
                                <i class="fas fa-info-circle"></i> Asegúrese de subir todos los documentos requeridos en los formatos aceptados (.PDF, .JPG, .PNG)
                            </div>
                            
                            <h6 class="mb-3">7. CARGA DE ARCHIVO (Adjunta la siguiente documentación)</h6>
                            
                            <div class="row g-3">
                                <!-- RUT completo vigente -->
                                <div class="col-md-12">
                                    <label for="rut_vigente" class="form-label">RUT completo vigente <span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="rut_vigente" name="rut_vigente" accept=".pdf,.jpg,.png" required>
                                        <select class="form-select" style="max-width: 150px;" name="rut_vigente_estado" required>
                                            <option value="" selected disabled>Estado</option>
                                            <option value="Completo">Completo</option>
                                            <option value="No Completado">No Completado</option>
                                        </select>
                                    </div>
                                    <div class="file-info">Formatos aceptados: PDF, JPG, PNG</div>
                                </div>
                                
                                <!-- Certificado de existencia y representación legal -->
                                <div class="col-md-12">
                                    <label for="certificado_existencia" class="form-label">Certificado de existencia y representación legal (fecha de expedición no mayor a 30 días) <span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="certificado_existencia" name="certificado_existencia" accept=".pdf,.jpg,.png" required>
                                        <select class="form-select" style="max-width: 150px;" name="certificado_existencia_estado" required>
                                            <option value="" selected disabled>Estado</option>
                                            <option value="Completo">Completo</option>
                                            <option value="No Completado">No Completado</option>
                                        </select>
                                    </div>
                                    <div class="file-info">Formatos aceptados: PDF, JPG, PNG</div>
                                </div>
                                
                                <!-- Estados financieros -->
                                <div class="col-md-12">
                                    <label for="estados_financieros" class="form-label">Estados financieros de los últimos 2 años, con sus notas <span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="estados_financieros" name="estados_financieros" accept=".pdf,.jpg,.png" required>
                                        <select class="form-select" style="max-width: 150px;" name="estados_financieros_estado" required>
                                            <option value="" selected disabled>Estado</option>
                                            <option value="Completo">Completo</option>
                                            <option value="No Completado">No Completado</option>
                                        </select>
                                    </div>
                                    <div class="file-info">Formatos aceptados: PDF, JPG, PNG</div>
                                </div>
                                
                                <!-- Declaración de renta -->
                                <div class="col-md-12">
                                    <label for="declaracion_renta" class="form-label">Declaración de renta de los últimos dos (2) años <span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="declaracion_renta" name="declaracion_renta" accept=".pdf,.jpg,.png" required>
                                        <select class="form-select" style="max-width: 150px;" name="declaracion_renta_estado" required>
                                            <option value="" selected disabled>Estado</option>
                                            <option value="Completo">Completo</option>
                                            <option value="No Completado">No Completado</option>
                                        </select>
                                    </div>
                                    <div class="file-info">Formatos aceptados: PDF, JPG, PNG</div>
                                </div>
                                
                                <!-- Certificación bancaria -->
                                <div class="col-md-12">
                                    <label for="certificacion_bancaria" class="form-label">Certificación bancaria vigente <span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="certificacion_bancaria" name="certificacion_bancaria" accept=".pdf,.jpg,.png" required>
                                        <select class="form-select" style="max-width: 150px;" name="certificacion_bancaria_estado" required>
                                            <option value="" selected disabled>Estado</option>
                                            <option value="Completo">Completo</option>
                                            <option value="No Completado">No Completado</option>
                                        </select>
                                    </div>
                                    <div class="file-info">Formatos aceptados: PDF, JPG, PNG</div>
                                </div>
                                
                                <!-- Referencia comercial -->
                                <div class="col-md-12">
                                    <label for="referencia_comercial" class="form-label">Referencia comercial vigente <span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="referencia_comercial" name="referencia_comercial" accept=".pdf,.jpg,.png" required>
                                        <select class="form-select" style="max-width: 150px;" name="referencia_comercial_estado" required>
                                            <option value="" selected disabled>Estado</option>
                                            <option value="Completo">Completo</option>
                                            <option value="No Completado">No Completado</option>
                                        </select>
                                    </div>
                                    <div class="file-info">Formatos aceptados: PDF, JPG, PNG</div>
                                </div>
                                
                                <!-- Certificados de seguridad (opcional) -->
                                <div class="col-md-12">
                                    <label for="certificados_seguridad" class="form-label">Certificado(s) de seguridad y/o de pertenencia a gremios o asociaciones (si aplica)</label>
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="certificados_seguridad" name="certificados_seguridad" accept=".pdf,.jpg,.png">
                                        <select class="form-select" style="max-width: 150px;" name="certificados_seguridad_estado">
                                            <option value="" selected disabled>Estado</option>
                                            <option value="Completo">Completo</option>
                                            <option value="No Completado">No Completado</option>
                                            <option value="No Aplica">No Aplica</option>
                                        </select>
                                    </div>
                                    <div class="file-info">Formatos aceptados: PDF, JPG, PNG</div>
                                </div>
                                
                                <!-- Resolución de habilitación (opcional) -->
                                <div class="col-md-12">
                                    <label for="resolucion_habilitacion" class="form-label">Resolución de habilitación o permisos según la normativa vigente (si aplica)</label>
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="resolucion_habilitacion" name="resolucion_habilitacion" accept=".pdf,.jpg,.png">
                                        <select class="form-select" style="max-width: 150px;" name="resolucion_habilitacion_estado">
                                            <option value="" selected disabled>Estado</option>
                                            <option value="Completo">Completo</option>
                                            <option value="No Completado">No Completado</option>
                                            <option value="No Aplica">No Aplica</option>
                                        </select>
                                    </div>
                                    <div class="file-info">Formatos aceptados: PDF, JPG, PNG</div>
                                </div>
                                
                                <!-- Plan de contingencia -->
                                <div class="col-md-12">
                                    <label for="plan_contingencia" class="form-label">Copia del Plan de contingencia vigente, o documento firmado por el representante legal donde certifique que la organización lo tiene establecido <span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="plan_contingencia" name="plan_contingencia" accept=".pdf,.jpg,.png" required>
                                        <select class="form-select" style="max-width: 150px;" name="plan_contingencia_estado" required>
                                            <option value="" selected disabled>Estado</option>
                                            <option value="Completo">Completo</option>
                                            <option value="No Completado">No Completado</option>
                                        </select>
                                    </div>
                                    <div class="file-info">Formatos aceptados: PDF, JPG, PNG</div>
                                </div>
                                
                                <!-- Registro fotográfico -->
                                <div class="col-md-12">
                                    <label for="fachada_nomenclatura" class="form-label">Registro fotográfico de la fachada donde se evidencie la nomenclatura registrada en el RUT <span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="fachada_nomenclatura" name="fachada_nomenclatura" accept=".jpg,.png" required>
                                        <select class="form-select" style="max-width: 150px;" name="fachada_nomenclatura_estado" required>
                                            <option value="" selected disabled>Estado</option>
                                            <option value="Completo">Completo</option>
                                            <option value="No Completado">No Completado</option>
                                        </select>
                                    </div>
                                    <div class="file-info">Formatos aceptados: JPG, PNG (imágenes solamente)</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Botones de navegación -->
                    <div class="d-flex justify-content-between mt-4">
                        <button type="button" class="btn btn-secondary" onclick="irASeccion1()">Anterior</button>
                       <button type="button" onclick="irASeccion5()" class="btn btn-primary">Avanzar</button>
                    </div>
                </div>
                
                <!-- Sección 3: Documentación Proveedor No Crítico -->
                <div class="tab-pane fade" id="pills-seccion3" role="tabpanel" aria-labelledby="pills-seccion3-tab">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <h5 class="card-title mb-0">REQUISITOS Y FORMATOS (Documentación - Proveedor No Crítico)</h5>
                        </div>
                        <div class="card-body">
                            <div class="alert alert-info">
                                <i class="fas fa-info-circle"></i> Asegúrese de subir todos los documentos requeridos en los formatos aceptados (.PDF, .JPG, .PNG)
                            </div>
                            
                            <div class="row g-3">
                                <!-- RUT completo vigente -->
                                <div class="col-md-12">
                                    <label for="rut_vigente_nc" class="form-label">RUT completo vigente <span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="rut_vigente_nc" name="rut_vigente_nc" accept=".pdf,.jpg,.png" required>
                                        <select class="form-select" style="max-width: 150px;" name="rut_vigente_nc_estado" required>
                                            <option value="" selected disabled>Estado</option>
                                            <option value="Completo">Completo</option>
                                            <option value="No Completado">No Completado</option>
                                        </select>
                                    </div>
                                    <div class="file-info">Formatos aceptados: PDF, JPG, PNG</div>
                                </div>
                                
                                <!-- Certificado de existencia y representación legal -->
                                <div class="col-md-12">
                                    <label for="certificado_existencia_nc" class="form-label">Certificado de existencia y representación legal (fecha de expedición no mayor a 30 días) <span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="certificado_existencia_nc" name="certificado_existencia_nc" accept=".pdf,.jpg,.png" required>
                                        <select class="form-select" style="max-width: 150px;" name="certificado_existencia_nc_estado" required>
                                            <option value="" selected disabled>Estado</option>
                                            <option value="Completo">Completo</option>
                                            <option value="No Completado">No Completado</option>
                                        </select>
                                    </div>
                                    <div class="file-info">Formatos aceptados: PDF, JPG, PNG</div>
                                </div>
                                
                                <!-- Certificación bancaria -->
                                <div class="col-md-12">
                                    <label for="certificacion_bancaria_nc" class="form-label">Certificación bancaria vigente <span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="certificacion_bancaria_nc" name="certificacion_bancaria_nc" accept=".pdf,.jpg,.png" required>
                                        <select class="form-select" style="max-width: 150px;" name="certificacion_bancaria_nc_estado" required>
                                            <option value="" selected disabled>Estado</option>
                                            <option value="Completo">Completo</option>
                                            <option value="No Completado">No Completado</option>
                                        </select>
                                    </div>
                                    <div class="file-info">Formatos aceptados: PDF, JPG, PNG</div>
                                </div>
                                
                                <!-- Referencia comercial -->
                                <div class="col-md-12">
                                    <label for="referencia_comercial_nc" class="form-label">Referencia comercial vigente <span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="referencia_comercial_nc" name="referencia_comercial_nc" accept=".pdf,.jpg,.png" required>
                                        <select class="form-select" style="max-width: 150px;" name="referencia_comercial_nc_estado" required>
                                            <option value="" selected disabled>Estado</option>
                                            <option value="Completo">Completo</option>
                                            <option value="No Completado">No Completado</option>
                                        </select>
                                    </div>
                                    <div class="file-info">Formatos aceptados: PDF, JPG, PNG</div>
                                </div>
                                
                                <!-- Certificados de seguridad (opcional) -->
                                <div class="col-md-12">
                                    <label for="certificados_seguridad_nc" class="form-label">Certificado(s) de seguridad y/o de pertenencia a gremios o asociaciones (si aplica)</label>
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="certificados_seguridad_nc" name="certificados_seguridad_nc" accept=".pdf,.jpg,.png">
                                        <select class="form-select" style="max-width: 150px;" name="certificados_seguridad_nc_estado">
                                            <option value="" selected disabled>Estado</option>
                                            <option value="Completo">Completo</option>
                                            <option value="No Completado">No Completado</option>
                                            <option value="No Aplica">No Aplica</option>
                                        </select>
                                    </div>
                                    <div class="file-info">Formatos aceptados: PDF, JPG, PNG</div>
                                </div>
                                
                                <!-- Resolución de habilitación (opcional) -->
                                <div class="col-md-12">
                                    <label for="resolucion_habilitacion_nc" class="form-label">Resolución de habilitación o permisos según la normativa vigente (si aplica)</label>
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="resolucion_habilitacion_nc" name="resolucion_habilitacion_nc" accept=".pdf,.jpg,.png">
                                        <select class="form-select" style="max-width: 150px;" name="resolucion_habilitacion_nc_estado">
                                            <option value="" selected disabled>Estado</option>
                                            <option value="Completo">Completo</option>
                                            <option value="No Completado">No Completado</option>
                                            <option value="No Aplica">No Aplica</option>
                                        </select>
                                    </div>
                                    <div class="file-info">Formatos aceptados: PDF, JPG, PNG</div>
                                </div>
                                
                                <!-- Plan de contingencia -->
                                <div class="col-md-12">
                                    <label for="plan_contingencia_nc" class="form-label">Copia del Plan de contingencia vigente, o documento firmado por el representante legal donde certifique que la organización lo tiene establecido <span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="plan_contingencia_nc" name="plan_contingencia_nc" accept=".pdf,.jpg,.png" required>
                                        <select class="form-select" style="max-width: 150px;" name="plan_contingencia_nc_estado" required>
                                            <option value="" selected disabled>Estado</option>
                                            <option value="Completo">Completo</option>
                                            <option value="No Completado">No Completado</option>
                                        </select>
                                    </div>
                                    <div class="file-info">Formatos aceptados: PDF, JPG, PNG</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Botones de navegación -->
                     <div class="d-flex justify-content-between mt-4">
                        <button type="button" class="btn btn-secondary" onclick="irASeccion1()">Anterior</button>
                        <button type="button" onclick="irASeccion5()" class="btn btn-primary">Avanzar</button>
                    </div>
                </div>
                
                <!-- Sección 4: Documentación Proveedor Natural Especial -->
                <div class="tab-pane fade" id="pills-seccion4" role="tabpanel" aria-labelledby="pills-seccion4-tab">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <h5 class="card-title mb-0">Documentación - Proveedor Natural Especial</h5>
                        </div>

                        <div class="card-body">
                            <div class="alert alert-info">
                                <i class="fas fa-info-circle"></i> Asegúrese de subir todos los documentos requeridos en los formatos aceptados (.PDF, .JPG, .PNG)
                            </div>
                            
                            <div class="row g-3">
                                <!-- Cédula de Ciudadanía -->
                                <div class="col-md-12">
                                    <label for="cedula_ciudadania" class="form-label">1. Cédula de Ciudadanía <span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="cedula_ciudadania" name="cedula_ciudadania" accept=".pdf,.jpg,.png" required>
                                        <select class="form-select" style="max-width: 150px;" name="cedula_ciudadania_estado" required>
                                            <option value="" selected disabled>Estado</option>
                                            <option value="Completo">Completo</option>
                                            <option value="No Completado">No Completado</option>
                                        </select>
                                    </div>
                                    <div class="file-info">Formatos aceptados: PDF, JPG, PNG</div>
                                </div>
                                
                                <!-- RUT -->
                                <div class="col-md-12">
                                    <label for="rut_natural" class="form-label">2. RUT <span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="rut_natural" name="rut_natural" accept=".pdf,.jpg,.png" required>
                                        <select class="form-select" style="max-width: 150px;" name="rut_natural_estado" required>
                                            <option value="" selected disabled>Estado</option>
                                            <option value="Completo">Completo</option>
                                            <option value="No Completado">No Completado</option>
                                        </select>
                                    </div>
                                    <div class="file-info">Formatos aceptados: PDF, JPG, PNG</div>
                                </div>
                                
                                <!-- Certificación bancaria -->
                                <div class="col-md-12">
                                    <label for="certificacion_bancaria_natural" class="form-label">3. Certificación bancaria <span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="certificacion_bancaria_natural" name="certificacion_bancaria_natural" accept=".pdf,.jpg,.png" required>
                                        <select class="form-select" style="max-width: 150px;" name="certificacion_bancaria_natural_estado" required>
                                            <option value="" selected disabled>Estado</option>
                                            <option value="Completo">Completo</option>
                                            <option value="No Completado">No Completado</option>
                                        </select>
                                    </div>
                                    <div class="file-info">Formatos aceptados: PDF, JPG, PNG</div>
                                </div>
                            </div>
                          <div class="d-flex justify-content-between mt-4">
                        <button type="button" class="btn btn-secondary" onclick="irASeccion1()">Anterior</button>
                       <button type="button" onclick="irASeccion5()" class="btn btn-primary">Avanzar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
                    
                    
                      <!-- Sección 5: Información de Contacto y Empresa -->
                <div class="tab-pane fade" id="pills-seccion5" role="tabpanel" aria-labelledby="pills-seccion5-tab">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <h5 class="card-title mb-0">Información de Contacto y Empresa</h5>
                        </div>
                        <div class="card-body">
                            <div class="row g-3">
                                <!-- Dirección de Domicilio Principal -->
                                <div class="col-md-12">
                                    <label for="direccion_domicilio" class="form-label">10. Dirección de Domicilio Principal <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="direccion_domicilio" name="direccion_domicilio" required>
                                </div>
                                
                                <!-- País -->
                                <div class="col-md-6">
                                    <label for="pais" class="form-label">11. País <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="pais" name="pais" value="Colombia" readonly>
                                </div>
                                
                                <!-- Departamento -->
                                <div class="col-md-6">
                                    <label for="departamento" class="form-label">12. Departamento <span class="text-danger">*</span></label>
                                    <select class="form-select" id="departamento" name="departamento" required>
                                        <option value="" selected disabled>Seleccione...</option>
                                        <option value="Amazonas">Amazonas</option>
                                        <option value="Antioquia">Antioquia</option>
                                        <option value="Arauca">Arauca</option>
                                        <option value="Atlántico">Atlántico</option>
                                        <option value="Bolívar">Bolívar</option>
                                        <option value="Boyacá">Boyacá</option>
                                        <option value="Caldas">Caldas</option>
                                        <option value="Caquetá">Caquetá</option>
                                        <option value="Casanare">Casanare</option>
                                        <option value="Cauca">Cauca</option>
                                        <option value="Cesar">Cesar</option>
                                        <option value="Chocó">Chocó</option>
                                        <option value="Córdoba">Córdoba</option>
                                        <option value="Cundinamarca">Cundinamarca</option>
                                        <option value="Guainía">Guainía</option>
                                        <option value="Guaviare">Guaviare</option>
                                        <option value="Huila">Huila</option>
                                        <option value="La Guajira">La Guajira</option>
                                        <option value="Magdalena">Magdalena</option>
                                        <option value="Meta">Meta</option>
                                        <option value="Nariño">Nariño</option>
                                        <option value="Norte de Santander">Norte de Santander</option>
                                        <option value="Putumayo">Putumayo</option>
                                        <option value="Quindío">Quindío</option>
                                        <option value="Risaralda">Risaralda</option>
                                        <option value="San Andrés y Providencia">San Andrés y Providencia</option>
                                        <option value="Santander">Santander</option>
                                        <option value="Sucre">Sucre</option>
                                        <option value="Tolima">Tolima</option>
                                        <option value="Valle del Cauca">Valle del Cauca</option>
                                        <option value="Vaupés">Vaupés</option>
                                        <option value="Vichada">Vichada</option>
                                    </select>
                                </div>
                                
                                <!-- Ciudad -->
                                <div class="col-md-6">
                                    <label for="ciudad" class="form-label">13. Ciudad <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="ciudad" name="ciudad" required>
                                </div>
                                
                                <!-- Teléfono -->
                                <div class="col-md-6">
                                    <label for="telefono" class="form-label">14. Teléfono <span class="text-danger">*</span></label>
                                    <input type="tel" class="form-control" id="telefono" name="telefono" required>
                                </div>
                                
                                <!-- Email -->
                                <div class="col-md-6">
                                    <label for="email_contacto" class="form-label">15. E-mail <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="email_contacto" name="email_contacto" required>
                                </div>
                                
                                <!-- Código Postal -->
                                <div class="col-md-6">
                                    <label for="codigo_postal" class="form-label">16. Código Postal</label>
                                    <input type="text" class="form-control" id="codigo_postal" name="codigo_postal">
                                </div>
                                
                                <!-- Años de experiencia -->
                                <div class="col-md-6">
                                    <label for="anios_experiencia" class="form-label">17. Años de experiencia en el mercado <span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" id="anios_experiencia" name="anios_experiencia" min="0" required>
                                </div>
                                
                                <!-- Es Autoretenedor -->
                                <div class="col-md-6">
                                    <label for="autoretenedor" class="form-label">18. Es Autoretenedor <span class="text-danger">*</span></label>
                                    <select class="form-select" id="autoretenedor" name="autoretenedor" required>
                                        <option value="" selected disabled>Seleccione...</option>
                                        <option value="SI">SI</option>
                                        <option value="NO">NO</option>
                                    </select>
                                </div>
                                
                                <!-- Es Gran Contribuyente -->
                                <div class="col-md-6">
                                    <label for="gran_contribuyente" class="form-label">19. Es Gran Contribuyente <span class="text-danger">*</span></label>
                                    <select class="form-select" id="gran_contribuyente" name="gran_contribuyente" required onchange="toggleCamposContribuyente()">
                                        <option value="" selected disabled>Seleccione...</option>
                                        <option value="SI">SI</option>
                                        <option value="NO">NO</option>
                                    </select>
                                </div>
                                
                                <!-- No. Resolución - Gran contribuyente (condicional) -->
                                <div class="col-md-6" id="grupo_resolucion" style="display: none;">
                                    <label for="numero_resolucion" class="form-label">20. No. Resolución - Gran contribuyente <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="numero_resolucion" name="numero_resolucion">
                                </div>
                                
                                <!-- Fecha de Resolución (condicional) -->
                                <div class="col-md-6" id="grupo_fecha_resolucion" style="display: none;">
                                    <label for="fecha_resolucion" class="form-label">21. Fecha de Resolución <span class="text-danger">*</span></label>
                                    <input type="date" class="form-control" id="fecha_resolucion" name="fecha_resolucion">
                                </div>
                                
                                <!-- Tipo de empresa -->
                                <div class="col-md-6">
                                    <label for="tipo_empresa" class="form-label">22. Tipo de empresa <span class="text-danger">*</span></label>
                                    <select class="form-select" id="tipo_empresa" name="tipo_empresa" required>
                                        <option value="" selected disabled>Seleccione...</option>
                                        <option value="Privada">Privada</option>
                                        <option value="Publica">Pública</option>
                                        <option value="Mixta">Mixta</option>
                                    </select>
                                </div>
                                
                                <!-- Tipo de Sociedad -->
                                <div class="col-md-6">
                                    <label for="tipo_sociedad" class="form-label">23. Tipo de Sociedad <span class="text-danger">*</span></label>
                                    <select class="form-select" id="tipo_sociedad" name="tipo_sociedad" required>
                                        <option value="" selected disabled>Seleccione...</option>
                                        <option value="S.A.S.">S.A.S. – Sociedad por Acciones Simplificada</option>
                                        <option value="S.A.">S.A. – Sociedad Anónima</option>
                                        <option value="Ltda.">Ltda. – Sociedad de Responsabilidad Limitada</option>
                                        <option value="S. en C.">S. en C. – Sociedad en Comandita</option>
                                        <option value="S. en C.A.">S. en C.A. – Sociedad en Comandita por Acciones</option>
                                        <option value="E.U.">E.U. – Empresa Unipersonal</option>
                                        <option value="Cooperativas">Cooperativas y Asociaciones Mutuales</option>
                                        <option value="Persona Juridica">Persona Juridica</option>
                                        <option value="Persona Natural">Persona Natural</option>
                                    </select>
                                </div>
                                
                                <!-- Fecha de constitución -->
                                <div class="col-md-6">
                                    <label for="fecha_constitucion" class="form-label">24. Fecha de la constitución de la persona jurídica <span class="text-danger">*</span></label>
                                    <input type="date" class="form-control" id="fecha_constitucion" name="fecha_constitucion" required>
                                </div>
                                
                                <!-- Productos Ofrecidos -->
                                <div class="col-md-6">
                                    <label for="productos_ofrecidos" class="form-label">25. Productos Ofrecidos (Objeto contractual) <span class="text-danger">*</span></label>
                                    <select class="form-select" id="productos_ofrecidos" name="productos_ofrecidos" required onchange="toggleOtrosProductos()">
                                        <option value="" selected disabled>Seleccione...</option>
                                        <option value="Materiales de embalaje">Materiales de embalaje</option>
                                        <option value="Servicio de transporte">Servicio de transporte</option>
                                        <option value="Servicios tecnológicos">Servicios tecnológicos</option>
                                        <option value="Servicios aduaneros">Servicios aduaneros</option>
                                        <option value="Servicios de almacenamiento">Servicios de almacenamiento</option>
                                        <option value="Otras">Otras</option>
                                    </select>
                                </div>
                                
                                <!-- Campo "Otras" productos (condicional) -->
                                <div class="col-md-12" id="grupo_otros_productos" style="display: none;">
                                    <label for="otros_productos" class="form-label">Especifique otros productos <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="otros_productos" name="otros_productos">
                                </div>
                                
                                <!-- Zona franca -->
                                <div class="col-md-6">
                                    <label for="zona_franca" class="form-label">26. Se encuentra en una zona franca <span class="text-danger">*</span></label>
                                    <select class="form-select" id="zona_franca" name="zona_franca" required>
                                        <option value="" selected disabled>Seleccione...</option>
                                        <option value="SI">SI</option>
                                        <option value="NO">NO</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Botones de navegación -->
                    <div class="d-flex justify-content-between mt-4">
                       <button type="button" class="btn btn-secondary" onclick="regresarASeccionAnterior()">Anterior</button>
                        <button type="button" class="btn btn-primary" onclick="validarYAvanzar()">Siguiente</button>
                    </div>
                </div>
            
                
                <!-- Sección 6: Información del Representante Legal Principal -->
                <div class="tab-pane fade" id="pills-seccion6" role="tabpanel" aria-labelledby="pills-seccion6-tab">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <h5 class="card-title mb-0">INFORMACIÓN DEL REPRESENTANTE LEGAL PRINCIPAL</h5>
                        </div>
                        <div class="card-body">
                            <div class="alert alert-warning">
                                <i class="fas fa-exclamation-circle"></i> Nota: Esta pregunta es obligatoria, por lo tanto se debe responder al menos una fila completa, de lo contrario el sistema no dejará continuar.
                            </div>
                            
                            <div class="row g-3">
                                <!-- Nombres y Apellidos -->
                                <div class="col-md-12">
                                    <label for="representante_nombres" class="form-label">27. Nombres y Apellidos <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="representante_nombres" name="representante_nombres" required>
                                </div>
                                
                                <!-- Tipo de Identificación -->
                                <div class="col-md-6">
                                    <label for="representante_tipo_id" class="form-label">28. Tipo de Identificación <span class="text-danger">*</span></label>
                                    <select class="form-select" id="representante_tipo_id" name="representante_tipo_id" required>
                                        <option value="" selected disabled>Seleccione...</option>
                                        <option value="Cedula">Cédula</option>
                                        <option value="Cedula de Extranjería">Cédula de Extranjería</option>
                                        <option value="Diplomático">Diplomático</option>
                                        <option value="Documento de identidad Extranjeros">Documento de identidad Extranjeros</option>
                                        <option value="Identidad Fiscal Extranjero">Identidad Fiscal Extranjero</option>
                                        <option value="Nit">Nit</option>
                                        <option value="Nit de Personas Naturales">Nit de Personas Naturales</option>
                                        <option value="Nuip">Nuip</option>
                                        <option value="Pasaporte">Pasaporte</option>
                                        <option value="Pasaporte ONU">Pasaporte ONU</option>
                                    </select>
                                </div>
                                
                                <!-- Número de Identificación -->
                                <div class="col-md-6">
                                    <label for="representante_numero_id" class="form-label">29. Número de Identificación <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="representante_numero_id" name="representante_numero_id" required pattern="[0-9]+" title="El valor debe ser un número">
                                </div>
                                
                                <!-- Tipo de representante legal -->
                                <div class="col-md-6">
                                    <label for="representante_tipo" class="form-label">30. Tipo de representante legal <span class="text-danger">*</span></label>
                                    <select class="form-select" id="representante_tipo" name="representante_tipo" required onchange="toggleOtroRepresentante()">
                                        <option value="" selected disabled>Seleccione...</option>
                                        <option value="Representante Legal Principal">Representante Legal Principal</option>
                                        <option value="Representante Suplente">Representante Suplente</option>
                                        <option value="Apoderado Legal">Apoderado Legal</option>
                                        <option value="Gerente General">Gerente General</option>
                                        <option value="Otras">Otras</option>
                                    </select>
                                </div>
                                
                                <!-- Campo "Otras" tipo de representante (condicional) -->
                                <div class="col-md-6" id="grupo_otro_representante" style="display: none;">
                                    <label for="otro_tipo_representante" class="form-label">Especifique otro tipo de representante <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="otro_tipo_representante" name="otro_tipo_representante">
                                </div>
                                
                                <!-- Maneja Recursos públicos -->
                                <div class="col-md-6">
                                    <label for="maneja_recursos_publicos" class="form-label">31. ¿Maneja Recursos públicos? <span class="text-danger">*</span></label>
                                    <select class="form-select" id="maneja_recursos_publicos" name="maneja_recursos_publicos" required>
                                        <option value="" selected disabled>Seleccione...</option>
                                        <option value="SI">SI</option>
                                        <option value="NO">NO</option>
                                    </select>
                                </div>
                                
                                <!-- Goza de reconocimiento publico -->
                                <div class="col-md-6">
                                    <label for="reconocimiento_publico" class="form-label">32. ¿Goza de reconocimiento público? <span class="text-danger">*</span></label>
                                    <select class="form-select" id="reconocimiento_publico" name="reconocimiento_publico" required>
                                        <option value="" selected disabled>Seleccione...</option>
                                        <option value="SI">SI</option>
                                        <option value="NO">NO</option>
                                    </select>
                                </div>
                                
                                <!-- Ostenta algún grado de poder publico -->
                                <div class="col-md-6">
                                    <label for="poder_publico" class="form-label">33. ¿Ostenta algún grado de poder público? <span class="text-danger">*</span></label>
                                    <select class="form-select" id="poder_publico" name="poder_publico" required>
                                        <option value="" selected disabled>Seleccione...</option>
                                        <option value="SI">SI</option>
                                        <option value="NO">NO</option>
                                    </select>
                                </div>
                                
                                <!-- Es servidor publico -->
                                <div class="col-md-6">
                                    <label for="servidor_publico" class="form-label">34. ¿Es servidor público? <span class="text-danger">*</span></label>
                                    <select class="form-select" id="servidor_publico" name="servidor_publico" required>
                                        <option value="" selected disabled>Seleccione...</option>
                                        <option value="SI">SI</option>
                                        <option value="NO">NO</option>
                                    </select>
                                </div>
                                
                                <!-- Vinculo con persona políticamente expuesta -->
                                <div class="col-md-6">
                                    <label for="vinculo_ppe" class="form-label">35. ¿Existe algún vínculo entre usted y una persona políticamente expuesta? <span class="text-danger">*</span></label>
                                    <select class="form-select" id="vinculo_ppe" name="vinculo_ppe" required>
                                        <option value="" selected disabled>Seleccione...</option>
                                        <option value="SI">SI</option>
                                        <option value="NO">NO</option>
                                    </select>
                                </div>
                                
                                <!-- Nacionalidad -->
                                <div class="col-md-6">
                                    <label for="representante_nacionalidad" class="form-label">36. Nacionalidad <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="representante_nacionalidad" name="representante_nacionalidad" required>
                                </div>
                                
                                <!-- País domicilio principal -->
                                <div class="col-md-6">
                                    <label for="representante_pais_domicilio" class="form-label">37. País domicilio principal <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="representante_pais_domicilio" name="representante_pais_domicilio" required>
                                </div>
                                
                                <!-- Email -->
                                <div class="col-md-6">
                                    <label for="representante_email" class="form-label">38. Email <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="representante_email" name="representante_email" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Botones de navegación -->
                    <button type="button" class="btn btn-secondary" onclick="anteriorSeccionEspecial()">Anterior</button>
                        <button type="button" class="btn btn-primary" onclick="validarYAvanzar()">Siguiente</button>
                    </div>
                </div>

                <!-- Sección 7: Personas de Contacto -->
                <div class="tab-pane fade" id="pills-seccion7" role="tabpanel" aria-labelledby="pills-seccion7-tab">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <h5 class="card-title mb-0">PERSONAS DE CONTACTO</h5>
                        </div>
                        <div class="card-body">
                            <div class="alert alert-warning">
                                <i class="fas fa-exclamation-circle"></i> Nota: Esta pregunta es obligatoria, por lo tanto se debe responder al menos una fila completa, de lo contrario el sistema no dejará continuar.
                            </div>
                            
                            <div id="contactos-container">
                                <!-- Contenedor dinámico para múltiples contactos -->
                                <div class="contacto-form row g-3 mb-4 border-bottom pb-3">
                                    <div class="col-md-12">
                                        <label class="form-label">39. Nombres y Apellidos <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="contacto_nombres[]" required>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <label class="form-label">40. Cargo <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="contacto_cargo[]" required>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <label class="form-label">41. Teléfono/Celular <span class="text-danger">*</span></label>
                                        <input type="tel" class="form-control" name="contacto_telefono[]" required>
                                    </div>
                                    
                                    <div class="col-md-12">
                                        <label class="form-label">42. E-mail <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control" name="contacto_email[]" required>
                                    </div>
                                </div>
                            </div>
                            
                            <button type="button" class="btn btn-secondary mt-3" onclick="agregarContacto()">
                                <i class="fas fa-plus"></i> Agregar otra persona de contacto
                            </button>
                        </div>
                    </div>
                    
                    <!-- Botones de navegación -->
                    <button type="button" class="btn btn-secondary" onclick="anteriorSeccionEspecial()">Anterior</button>
                        <button type="button" class="btn btn-primary" onclick="validarSeccion7()">Siguiente</button>
                    </div>
                </div>

                <!-- Sección 8: Conocimiento Mejorado de PEP -->
                <div class="tab-pane fade" id="pills-seccion8" role="tabpanel" aria-labelledby="pills-seccion8-tab">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h5 class="card-title mb-0">CONOCIMIENTO MEJORADO DE PERSONA EXPUESTA POLÍTICAMENTE (PEP)</h5>
        </div>
        </div>
                        <div class="card-body">
                            <div class="alert alert-info mb-4">
                                <p><strong>DEFINICIÓN:</strong> PERSONA EXPUESTA POLITICAMENTE (PEP): son servidores públicos de cualquier sistema de nomenclatura y clasificación de empleos de la administración pública nacional y territorial, cuando en los cargos que ocupen, tengan en las funciones del área a la que pertenecen o en las de ficha del empleo que ocupan, bajo su responsabilidad directa o por delegación, la dirección general, de formulación de políticas institucionales y de adopción de planes, programas y proyectos, y el manejo directo de bienes, dineros o valores del estado.</p>
                                <p class="mb-0">Estos pueden ser a través de ordenación de gasto, contratación pública, gerencia de proyectos de inversión, pagos, liquidaciones, administración de bienes muebles e inmuebles. Incluye también a las PEP Extranjeras y las PEP de organizaciones Internacionales. Estos terceros ostentaran esa calidad (activo) durante el ejercicio de su cargo y por dos (2) años más a su dejación. Ver Decreto 1081 de 2015 (Modificado por Decreto 1674 de 2016) y Decreto 830 del 2021</p>
                            </div>
                            
                            <div class="alert alert-warning">
                                <i class="fas fa-exclamation-circle"></i> Nota: Esta pregunta es obligatoria, por lo tanto se debe responder al menos una fila completa, de lo contrario el sistema no dejará continuar.
                            </div>
                            
                            <div class="row g-3">
                                <!-- Pregunta 43 -->
                                <div class="col-md-12">
                                    <label for="pep_recursos_publicos" class="form-label">43. ¿Usted o alguno de los Representantes Legales, miembros de la Junta Directiva, Revisor Fiscal, Accionista/Socio; manejan o han manejado recursos públicos en los últimos 2 años? <span class="text-danger">*</span></label>
                                    <select class="form-select" id="pep_recursos_publicos" name="pep_recursos_publicos" required onchange="toggleCamposPEP()">
                                        <option value="" selected disabled>Seleccione...</option>
                                        <option value="SI">SI</option>
                                        <option value="NO">NO</option>
                                        <option value="N/A">N/A</option>
                                    </select>
                                </div>
                                
                                <!-- Pregunta 44 -->
                                <div class="col-md-12">
                                    <label for="pep_cargo_publico" class="form-label">44. ¿Usted o alguno de los Representantes Legales, miembros de la Junta Directiva, Revisor Fiscal, Accionista/Socio; tiene o ha desempeñado un cargo público en los últimos dos años? <span class="text-danger">*</span></label>
                                    <select class="form-select" id="pep_cargo_publico" name="pep_cargo_publico" required onchange="toggleCamposPEP()">
                                        <option value="" selected disabled>Seleccione...</option>
                                        <option value="SI">SI</option>
                                        <option value="NO">NO</option>
                                        <option value="N/A">N/A</option>
                                    </select>
                                </div>
                                
                                <!-- Pregunta 45 -->
                                <div class="col-md-12">
                                    <label for="pep_relacion" class="form-label">45. ¿Usted o alguno de los Representantes Legales, miembros de la Junta Directiva, Revisor Fiscal, Accionista/Socio; es familiar, asesor o cercano a una persona que cumpla con las características descritas en la definición de PEP y en las preguntas 1 y 2? <span class="text-danger">*</span></label>
                                    <select class="form-select" id="pep_relacion" name="pep_relacion" required onchange="toggleCamposPEP()">
                                        <option value="" selected disabled>Seleccione...</option>
                                        <option value="SI">SI</option>
                                        <option value="NO">NO</option>
                                        <option value="N/A">N/A</option>
                                    </select>
                                </div>
                                
                                <!-- Campos condicionales (se muestran si alguna respuesta es SI) -->
                                <div id="campos_pep_detalle" style="display: none;">
                                    <h5 class="mt-4 mb-3">Información de la PEP</h5>
                                    
                                    <!-- Pregunta 46 -->
                                    <div class="col-md-12">
                                        <label for="pep_nombres" class="form-label">46. Nombres y apellidos de la PEP <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="pep_nombres" name="pep_nombres">
                                    </div>
                                    
                                    <!-- Pregunta 47 -->
                                    <div class="col-md-6">
                                        <label for="pep_tipo_identificacion" class="form-label">47. Tipo de identificación <span class="text-danger">*</span></label>
                                        <select class="form-select" id="pep_tipo_identificacion" name="pep_tipo_identificacion" onchange="toggleOtroTipoPEP()">
                                            <option value="" selected disabled>Seleccione...</option>
                                            <option value="Cedula">Cédula</option>
                                            <option value="Cedula de Extranjería">Cédula de Extranjería</option>
                                            <option value="Diplomático">Diplomático</option>
                                            <option value="Documento de identidad de extranjero">Documento de identidad de extranjero</option>
                                            <option value="Identidad Fiscal de Extranjero">Identidad Fiscal de Extranjero</option>
                                            <option value="Nit">Nit</option>
                                            <option value="Nit de Personas Naturales">Nit de Personas Naturales</option>
                                            <option value="Pasaporte">Pasaporte</option>
                                            <option value="Otras">Otras</option>
                                        </select>
                                    </div>
                                    
                                    <!-- Campo para otro tipo de identificación PEP -->
                                    <div class="col-md-6" id="grupo_otro_tipo_pep" style="display: none;">
                                        <label for="pep_otro_tipo_identificacion" class="form-label">Especifique otro tipo <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="pep_otro_tipo_identificacion" name="pep_otro_tipo_identificacion">
                                    </div>
                                    
                                    <!-- Pregunta 48 -->
                                    <div class="col-md-6">
                                        <label for="pep_numero_identificacion" class="form-label">48. Número de identificación <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="pep_numero_identificacion" name="pep_numero_identificacion">
                                    </div>
                                    
                                    <!-- Pregunta 49 -->
                                    <div class="col-md-6">
                                        <label for="pep_pais_domicilio" class="form-label">49. País domicilio <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="pep_pais_domicilio" name="pep_pais_domicilio">
                                    </div>
                                    
                                    <!-- Pregunta 50 -->
                                    <div class="col-md-6">
                                        <label for="pep_cargo" class="form-label">50. Cargo <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="pep_cargo" name="pep_cargo">
                                    </div>
                                    
                                    <!-- Pregunta 51 -->
                                    <div class="col-md-6">
                                        <label for="pep_entidad_publica" class="form-label">51. Nombre de entidad pública <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="pep_entidad_publica" name="pep_entidad_publica">
                                    </div>
                                    
                                    <!-- Pregunta 52 -->
                                    <div class="col-md-6">
                                        <label for="pep_activo" class="form-label">52. Activo <span class="text-danger">*</span></label>
                                        <select class="form-select" id="pep_activo" name="pep_activo">
                                            <option value="" selected disabled>Seleccione...</option>
                                            <option value="SI">SI</option>
                                            <option value="NO">NO</option>
                                            <option value="N/A">N/A</option>
                                        </select>
                                    </div>
                                    
                                    <!-- Pregunta 53 -->
                                    <div class="col-md-6">
                                        <label for="pep_fecha_desvinculacion" class="form-label">53. Fecha desvinculación <span class="text-danger">*</span></label>
                                        <input type="date" class="form-control" id="pep_fecha_desvinculacion" name="pep_fecha_desvinculacion">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Botones de navegación -->
                     <div class="d-flex justify-content-between mt-4">
        <button type="button" class="btn btn-secondary" onclick="anteriorSeccion()">Anterior</button>
        <button type="button" class="btn btn-primary" onclick="validarSeccion8()">Siguiente</button>
    </div>
</div>



       <!-- Sección 9: Conocimiento de Beneficiarios Finales -->
<div class="tab-pane fade" id="pills-seccion9" role="tabpanel" aria-labelledby="pills-seccion9-tab">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h5 class="card-title mb-0">CONOCIMIENTO DE BENEFICIARIOS FINALES</h5>
        </div>
        <div class="card-body">
            <div class="alert alert-info mb-4">
                <p><strong>DEFINICIÓN:</strong> BENEFICIARIO FINAL: Es la(s) persona(s) natural(es) que finalmente posee(n) o controla(n) a un cliente o a la persona natural en cuyo nombre se realiza una transacción. Incluye también a la(s) persona(s) que ejerzan el control efectivo y/o final, directa o indirectamente, sobre una persona jurídica.</p>
            </div>
            
            <div class="alert alert-warning">
                <i class="fas fa-exclamation-circle"></i> Nota: Esta pregunta es obligatoria, por lo tanto se debe responder al menos una fila completa, de lo contrario el sistema no dejará continuar.
            </div>
            
            <div class="row g-3">
                <!-- Pregunta 54 -->
                <div class="col-md-12">
                    <label for="sistema_conocimiento_terceros" class="form-label">54. ¿Cuenta con un sistema/metodología para el conocimiento de sus terceros/contrapartes/asociados de negocio y entre ellos a sus socios y/o accionistas? <span class="text-danger">*</span></label>
                    <select class="form-select" id="sistema_conocimiento_terceros" name="sistema_conocimiento_terceros" required>
                        <option value="" selected disabled>Seleccione...</option>
                        <option value="SI">SI</option>
                        <option value="NO">NO</option>
                        <option value="N/A">N/A</option>
                    </select>
                </div>
                
                <!-- Pregunta 55 -->
                <div class="col-md-12">
                    <label for="politicas_identificacion" class="form-label">55. ¿Cuenta con políticas establecidas para la identificación de beneficiarios finales? <span class="text-danger">*</span></label>
                    <select class="form-select" id="politicas_identificacion" name="politicas_identificacion" required>
                        <option value="" selected disabled>Seleccione...</option>
                        <option value="SI">SI</option>
                        <option value="NO">NO</option>
                        <option value="N/A">N/A</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Botones de navegación -->
     <div class="d-flex justify-content-between mt-4">
        <button type="button" class="btn btn-secondary" onclick="anteriorSeccion()">Anterior</button>
        <button type="button" class="btn btn-primary" onclick="validarSeccion9()">Siguiente</button>
    </div>
</div>

                
                <!-- Las demás secciones (10-15) irían aquí -->
            </div>
        </form>
    </div>

    <!-- Bootstrap JS y dependencias -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>

        let seccionAnterior = 1;
        let totalSecciones = 15;
        // Función para ir a la sección 1 desde cualquier sección
        function irASeccion1() {
            // Ocultar todas las pestañas de documentación
            document.querySelectorAll('#pills-tab li.nav-item:not(:first-child)').forEach(item => {
                item.style.display = 'none';
            });
            
            // Actualizar barra de progreso
            document.querySelector('.progress-bar').style.width = '25%';
            document.querySelector('.progress-bar').textContent = '1/4';
            document.querySelector('.progress-bar').setAttribute('aria-valuenow', 25);
            
            // Cambiar a la pestaña 1
            const seccion1Tab = document.querySelector('#pills-seccion1-tab');
            const tabInstance = new bootstrap.Tab(seccion1Tab);
            tabInstance.show();
        }

        // Función para validar la sección 1 y avanzar a la sección correspondiente
        function validarSeccion1() {
    const inputsRequeridos = document.querySelectorAll('#pills-seccion1 [required]');
    let valido = true;
    
    inputsRequeridos.forEach(input => {
        if (!input.value) {
            input.classList.add('is-invalid');
            valido = false;
        } else {
            input.classList.remove('is-invalid');
        }
    });
    
    if (valido) {
        const tipoProveedor = document.getElementById('tipo_proveedor').value;
        let siguienteSeccionNumero = 2; // Por defecto para Proveedor Crítico
        
        if (tipoProveedor === 'Proveedor No Crítico') {
            siguienteSeccionNumero = 3;
        } else if (tipoProveedor === 'Proveedor Natural Especial') {
            siguienteSeccionNumero = 4;
        }
        
        // Guardar la sección anterior
        seccionAnterior = siguienteSeccionNumero;
        
        // Ocultar todas las pestañas de documentación
        document.querySelectorAll('#pills-tab li.nav-item:not(:first-child)').forEach(item => {
            item.style.display = 'none';
        });
        
        // Mostrar solo la pestaña correspondiente
        document.getElementById(`pills-seccion${siguienteSeccionNumero}-tab`).style.display = 'block';
        
        // Actualizar barra de progreso
        const porcentaje = (siguienteSeccionNumero / totalSecciones) * 100;
        document.querySelector('.progress-bar').style.width = `${porcentaje}%`;
        document.querySelector('.progress-bar').textContent = `${siguienteSeccionNumero}/${totalSecciones}`;
        document.querySelector('.progress-bar').setAttribute('aria-valuenow', porcentaje);
        
        // Cambiar a la pestaña correspondiente
        const siguienteTab = document.querySelector(`#pills-seccion${siguienteSeccionNumero}-tab`);
        const tabInstance = new bootstrap.Tab(siguienteTab);
        tabInstance.show();
    } else {
        alert('Por favor complete todos los campos requeridos.');
    }
}
        // Función para ir directamente a la sección 5
        function irASeccion5() {
    // Guardar la sección actual como anterior
    const seccionActual = document.querySelector('.tab-pane.active').id.replace('pills-seccion', '');
    seccionAnterior = parseInt(seccionActual);
    
    // Mostrar la pestaña 5 si estaba oculta
    document.getElementById('pills-seccion5-tab').style.display = 'block';
    
    // Actualizar barra de progreso
    const porcentaje = (5 / totalSecciones) * 100;
    document.querySelector('.progress-bar').style.width = `${porcentaje}%`;
    document.querySelector('.progress-bar').textContent = `5/${totalSecciones}`;
    document.querySelector('.progress-bar').setAttribute('aria-valuenow', porcentaje);
    
    // Cambiar a la pestaña 5
    const seccion5Tab = document.querySelector('#pills-seccion5-tab');
    const tabInstance = new bootstrap.Tab(seccion5Tab);
    tabInstance.show();
}
        
        // Función para avanzar a la siguiente sección (genérica)
        function validarYAvanzar() {
            const seccionActual = document.querySelector('.tab-pane.active');
            const inputsRequeridos = seccionActual.querySelectorAll('[required]');
            let valido = true;
            
            inputsRequeridos.forEach(input => {
                if (!input.value) {
                    input.classList.add('is-invalid');
                    valido = false;
                } else {
                    input.classList.remove('is-invalid');
                }
            });
            
            if (valido) {
                siguienteSeccion();
            } else {
                alert('Por favor complete todos los campos requeridos.');
            }
        }
        // Función para mostrar/ocultar campos de Gran Contribuyente
        function toggleCamposContribuyente() {
            const esGranContribuyente = document.getElementById('gran_contribuyente').value === 'SI';
            document.getElementById('grupo_resolucion').style.display = esGranContribuyente ? 'block' : 'none';
            document.getElementById('grupo_fecha_resolucion').style.display = esGranContribuyente ? 'block' : 'none';
            
            // Hacer requeridos o no los campos según la selección
            document.getElementById('numero_resolucion').required = esGranContribuyente;
            document.getElementById('fecha_resolucion').required = esGranContribuyente;
        }
        
        // Función para mostrar/ocultar campo "Otros productos"
        function toggleOtrosProductos() {
            const productosSeleccionados = document.getElementById('productos_ofrecidos').value === 'Otras';
            document.getElementById('grupo_otros_productos').style.display = productosSeleccionados ? 'block' : 'none';
            document.getElementById('otros_productos').required = productosSeleccionados;
        }
        
        // Función para validar la sección 5
        function validarSeccion5() {
            const inputsRequeridos = document.querySelectorAll('#pills-seccion5 [required]');
            let valido = true;
            
            inputsRequeridos.forEach(input => {
                if (!input.value) {
                    input.classList.add('is-invalid');
                    valido = false;
                } else {
                    input.classList.remove('is-invalid');
                }
            });
            
            return valido;
        }
        // Función para avanzar a la siguiente sección
        function siguienteSeccion() {
    const seccionActual = document.querySelector('.tab-pane.active');
    const seccionActualId = seccionActual.id;
    const seccionNumero = parseInt(seccionActualId.replace('pills-seccion', ''));
    const siguienteSeccionNumero = seccionNumero + 1;
    
    // Guardar la sección anterior
    seccionAnterior = seccionNumero;
    
    // Mostrar la siguiente pestaña si estaba oculta
    if (document.getElementById(`pills-seccion${siguienteSeccionNumero}-tab`)) {
        document.getElementById(`pills-seccion${siguienteSeccionNumero}-tab`).style.display = 'block';
    }
    
    // Actualizar barra de progreso
    const porcentaje = (siguienteSeccionNumero / totalSecciones) * 100;
    document.querySelector('.progress-bar').style.width = `${porcentaje}%`;
    document.querySelector('.progress-bar').textContent = `${siguienteSeccionNumero}/${totalSecciones}`;
    document.querySelector('.progress-bar').setAttribute('aria-valuenow', porcentaje);
    
    // Cambiar a la siguiente pestaña
    const siguienteTab = document.querySelector(`#pills-seccion${siguienteSeccionNumero}-tab`);
    if (siguienteTab) {
        const tabInstance = new bootstrap.Tab(siguienteTab);
        tabInstance.show();
    }
}

        function regresarASeccionAnterior() {
    // Mostrar la pestaña correspondiente
    document.getElementById(`pills-seccion${seccionAnterior}-tab`).style.display = 'block';
    
    // Actualizar barra de progreso
    const porcentaje = (seccionAnterior / totalSecciones) * 100;
    document.querySelector('.progress-bar').style.width = `${porcentaje}%`;
    document.querySelector('.progress-bar').textContent = `${seccionAnterior}/${totalSecciones}`;
    document.querySelector('.progress-bar').setAttribute('aria-valuenow', porcentaje);
    
    // Cambiar a la pestaña anterior
    const anteriorTab = document.querySelector(`#pills-seccion${seccionAnterior}-tab`);
    const tabInstance = new bootstrap.Tab(anteriorTab);
    tabInstance.show();
}

// Función para mostrar/ocultar campo "Otro tipo de representante"
function toggleOtroRepresentante() {
    const tipoRepresentante = document.getElementById('representante_tipo').value;
    const grupoOtro = document.getElementById('grupo_otro_representante');
    const campoOtro = document.getElementById('otro_tipo_representante');
    
    if (tipoRepresentante === 'Otras') {
        grupoOtro.style.display = 'block';
        campoOtro.required = true;
    } else {
        grupoOtro.style.display = 'none';
        campoOtro.required = false;
        campoOtro.value = '';
    }
}

// Función para agregar nuevo formulario de contacto
function agregarContacto() {
    const container = document.getElementById('contactos-container');
    const newContact = document.createElement('div');
    newContact.className = 'contacto-form row g-3 mb-4 border-bottom pb-3';
    newContact.innerHTML = `
        <div class="col-md-12">
            <label class="form-label">39. Nombres y Apellidos <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="contacto_nombres[]" required>
        </div>
        
        <div class="col-md-6">
            <label class="form-label">40. Cargo <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="contacto_cargo[]" required>
        </div>
        
        <div class="col-md-6">
            <label class="form-label">41. Teléfono/Celular <span class="text-danger">*</span></label>
            <input type="tel" class="form-control" name="contacto_telefono[]" required>
        </div>
        
        <div class="col-md-12">
            <label class="form-label">42. E-mail <span class="text-danger">*</span></label>
            <input type="email" class="form-control" name="contacto_email[]" required>
        </div>
        
        <div class="col-12 text-end">
            <button type="button" class="btn btn-danger btn-sm" onclick="eliminarContacto(this)">
                <i class="fas fa-trash"></i> Eliminar
            </button>
        </div>
    `;
    container.appendChild(newContact);
}

// Función para eliminar un formulario de contacto
function eliminarContacto(btn) {
    if (document.querySelectorAll('.contacto-form').length > 1) {
        btn.closest('.contacto-form').remove();
    } else {
        alert('Debe mantener al menos una persona de contacto');
    }
}

// Función para validar la sección 7
function validarSeccion7() {
    let valido = true;
    
    // Validar cada campo requerido
    document.querySelectorAll('#pills-seccion7 [required]').forEach(input => {
        if (!input.value) {
            input.classList.add('is-invalid');
            valido = false;
        } else {
            input.classList.remove('is-invalid');
        }
    });
    
    // Validar al menos un contacto completo
    const contactos = document.querySelectorAll('.contacto-form');
    let contactosCompletos = 0;
    
    contactos.forEach(contacto => {
        const campos = contacto.querySelectorAll('[required]');
        const completo = Array.from(campos).every(campo => campo.value);
        if (completo) contactosCompletos++;
    });
    
    if (valido && contactosCompletos > 0) {
        siguienteSeccion();
    } else {
        alert('Por favor complete al menos una fila completa de información de contacto y todos los campos requeridos.');
    }
}

// Función para mostrar/ocultar campos detalle PEP
function toggleCamposPEP() {
    const recursosPublicos = document.getElementById('pep_recursos_publicos').value;
    const cargoPublico = document.getElementById('pep_cargo_publico').value;
    const relacionPEP = document.getElementById('pep_relacion').value;
    const camposDetalle = document.getElementById('campos_pep_detalle');
    
    // Mostrar campos si alguna respuesta es "SI"
    if (recursosPublicos === 'SI' || cargoPublico === 'SI' || relacionPEP === 'SI') {
        camposDetalle.style.display = 'block';
        
        // Hacer requeridos los campos de detalle
        document.querySelectorAll('#campos_pep_detalle [required]').forEach(campo => {
            campo.required = true;
        });
    } else {
        camposDetalle.style.display = 'none';
        
        // Quitar requerido y limpiar campos
        document.querySelectorAll('#campos_pep_detalle [required]').forEach(campo => {
            campo.required = false;
            if (campo.type !== 'select-one') campo.value = '';
        });
    }
}

// Función para mostrar campo "otro tipo" de identificación PEP
function toggleOtroTipoPEP() {
    const tipoIdentificacion = document.getElementById('pep_tipo_identificacion').value;
    const grupoOtro = document.getElementById('grupo_otro_tipo_pep');
    
    if (tipoIdentificacion === 'Otras') {
        grupoOtro.style.display = 'block';
        document.getElementById('pep_otro_tipo_identificacion').required = true;
    } else {
        grupoOtro.style.display = 'none';
        document.getElementById('pep_otro_tipo_identificacion').required = false;
        document.getElementById('pep_otro_tipo_identificacion').value = '';
    }
}

// Función para validar la sección 8
function validarSeccion8() {
    let valido = true;
    
    // Validar campos principales
    const camposPrincipales = [
        'pep_recursos_publicos',
        'pep_cargo_publico',
        'pep_relacion'
    ];
    
    camposPrincipales.forEach(id => {
        const campo = document.getElementById(id);
        if (!campo.value) {
            campo.classList.add('is-invalid');
            valido = false;
        } else {
            campo.classList.remove('is-invalid');
        }
    });
    
    // Validar campos detalle si aplica
    if (document.getElementById('campos_pep_detalle').style.display === 'block') {
        document.querySelectorAll('#campos_pep_detalle [required]').forEach(campo => {
            if (!campo.value) {
                campo.classList.add('is-invalid');
                valido = false;
            } else {
                campo.classList.remove('is-invalid');
            }
        });
    }
    
    if (valido) {
        siguienteSeccion();
    } else {
        alert('Por favor complete todos los campos requeridos.');
    }
}


// Función única para manejar el "Anterior" en secciones 6-15
function anteriorSeccionEspecial() {
    const seccionActual = document.querySelector('.tab-pane.active').id.replace('pills-seccion', '');
    const seccionNumero = parseInt(seccionActual);
    
    // Solo para secciones 6-15
    if (seccionNumero >= 6 && seccionNumero <= 15) {
        const seccionAnterior = seccionNumero - 1;
        
        // Mostrar pestaña anterior si estaba oculta
        document.getElementById(`pills-seccion${seccionAnterior}-tab`).style.display = 'block';
        
        // Actualizar barra de progreso
        const porcentaje = (seccionAnterior / totalSecciones) * 100;
        document.querySelector('.progress-bar').style.width = `${porcentaje}%`;
        document.querySelector('.progress-bar').textContent = `${seccionAnterior}/${totalSecciones}`;
        
        // Cambiar a pestaña anterior
        const tabInstance = new bootstrap.Tab(document.querySelector(`#pills-seccion${seccionAnterior}-tab`));
        tabInstance.show();
    }
}

// Función para validar la sección 9
function validarSeccion9() {
    const inputsRequeridos = [
        'sistema_conocimiento_terceros',
        'politicas_identificacion'
    ];
    
    let valido = true;
    
    inputsRequeridos.forEach(id => {
        const campo = document.getElementById(id);
        if (!campo.value) {
            campo.classList.add('is-invalid');
            valido = false;
        } else {
            campo.classList.remove('is-invalid');
        }
    });
    
    if (valido) {
        siguienteSeccion();
    } else {
        alert('Por favor responda todas las preguntas requeridas.');
    }
}// Función para corregir títulos
/*function corregirTitulos() {
    // Corregir título sección 8
    const titulo8 = document.querySelector('#pills-seccion8 .card-title');
    if (titulo8) titulo8.textContent = "CONOCIMIENTO MEJORADO DE PERSONA EXPUESTA POLÍTICAMENTE (PEP)";
    
    // Corregir título sección 9
    const titulo9 = document.querySelector('#pills-seccion9 .card-title');
    if (titulo9) titulo9.textContent = "CONOCIMIENTO DE BENEFICIARIOS FINALES";
}*/

// Función para validar sección 8 (igual que validarSeccion7)
function validarSeccion8() {
    // Validar campos requeridos
    const valido = validarCamposRequeridos('pills-seccion8');
    
    if (valido) {
        // Navegación idéntica a sesión 7
        document.getElementById('pills-seccion9-tab').style.display = 'block';
        actualizarProgreso(9);
        const tab = new bootstrap.Tab(document.getElementById('pills-seccion9-tab'));
        tab.show();
    }
}

// Función para validar sección 9 (igual que validarSeccion7)
function validarSeccion9() {
    // Validar campos requeridos
    const valido = validarCamposRequeridos('pills-seccion9');
    
    if (valido) {
        // Navegación idéntica a sesión 7
        document.getElementById('pills-seccion10-tab').style.display = 'block';
        actualizarProgreso(10);
        const tab = new bootstrap.Tab(document.getElementById('pills-seccion10-tab'));
        tab.show();
    }
}

// Función auxiliar (usada en sesión 7)
function validarCamposRequeridos(seccionId) {
    let valido = true;
    document.querySelectorAll(`#${seccionId} [required]`).forEach(input => {
        if (!input.value) {
            input.classList.add('is-invalid');
            valido = false;
        } else {
            input.classList.remove('is-invalid');
        }
    });
    return valido;
}

// Función auxiliar (usada en sesión 7)
function actualizarProgreso(seccion) {
    const porcentaje = (seccion / 15) * 100;
    const barra = document.querySelector('.progress-bar');
    barra.style.width = `${porcentaje}%`;
    barra.textContent = `${seccion}/15`;
}


                

        // Validación en tiempo real para el número de identificación
        document.getElementById('numero_identificacion').addEventListener('input', function(e) {
            this.value = this.value.replace(/[^0-9]/g, '');
        });
    </script>
</body>
</html>