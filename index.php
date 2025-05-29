<?php include 'database.php'; ?>
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
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            border-radius: 10px 10px 0 0 !important;
        }
        .form-label {
            font-weight: 500;
        }
        .nav-pills .nav-link {
            color: #495057;
            margin: 0 5px;
        }
        .nav-pills .nav-link.active {
            background-color: #0d6efd;
            color: white;
        }
        .is-invalid {
            border-color: #dc3545;
        }
        .invalid-feedback {
            color: #dc3545;
            display: none;
            font-size: 0.875em;
        }
        .is-invalid ~ .invalid-feedback {
            display: block;
        }
        .btn-primary {
            background-color: #0d6efd;
            border-color: #0d6efd;
        }
        .btn-primary:hover {
            background-color: #0b5ed7;
            border-color: #0a58ca;
        }
        .file-info {
            font-size: 0.8rem;
            color: #6c757d;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <div class="container mt-4 mb-5">
        <h1 class="text-center mb-4">Registro de Proveedores</h1>
        
        <form id="formProveedor" action="procesar.php" method="post" enctype="multipart/form-data">
            <!-- Barra de progreso -->
            <div class="progress mb-4">
                <div class="progress-bar" role="progressbar" style="width: 6.66%;" aria-valuenow="6.66" aria-valuemin="0" aria-valuemax="100">1/15</div>
            </div>
            
            <!-- Indicador de secciones -->
            <ul class="nav nav-pills mb-4 justify-content-center" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-seccion1-tab" data-bs-toggle="pill" data-bs-target="#pills-seccion1" type="button" role="tab" aria-controls="pills-seccion1" aria-selected="true">Información Básica</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-seccion2-tab" data-bs-toggle="pill" data-bs-target="#pills-seccion2" type="button" role="tab" aria-controls="pills-seccion2" aria-selected="false">Documentación</button>
                </li>
                <!-- Las otras 13 secciones irían aquí -->
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
                                
                                <!-- Número de Identificación -->
                                <div class="col-md-6">
                                    <label for="numero_identificacion" class="form-label">Número de Identificación <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="numero_identificacion" name="numero_identificacion" required placeholder="Ingrese identificación sin dígito de verificación, puntos o separadores">
                                </div>
                                
                                <!-- Tipo de Proveedor -->
                                <div class="col-md-12">
                                    <label for="tipo_proveedor" class="form-label">Tipo de Proveedor <span class="text-danger">*</span></label>
                                    <select class="form-select" id="tipo_proveedor" name="tipo_proveedor" required>
                                        <option value="" selected disabled>Seleccione...</option>
                                        <option value="Proveedor Crítico">Proveedor Crítico – Suministra bienes o servicios esenciales para la operación de la empresa (Ej. transporte, logística, embalaje)</option>
                                        <option value="Proveedor No Crítico (Administrativo)">Proveedor No Crítico (Administrativo) – Provee bienes o servicios de soporte (Ej. papelería, suministros de oficina, consultoría)</option>
                                        <option value="Proveedor Natural Especial">Proveedor Natural Especial – Persona natural que ofrece un servicio especializado o esporádico (Ej. asesoría externa, capacitaciones)</option>
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
                        <button type="button" class="btn btn-primary" onclick="siguienteSeccion()">Siguiente</button>
                    </div>
                </div>
                
                <!-- Sección 2: Requisitos y Formatos -->
                <div class="tab-pane fade" id="pills-seccion2" role="tabpanel" aria-labelledby="pills-seccion2-tab">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <h5 class="card-title mb-0">Documentación Requerida - Proveedor Crítico</h5>
                        </div>
                        <div class="card-body">
                            <div class="alert alert-info">
                                <i class="fas fa-info-circle"></i> Asegúrese de subir todos los documentos requeridos en los formatos aceptados (.PDF, .JPG, .PNG)
                            </div>
                            
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
                        <button type="button" class="btn btn-secondary" onclick="anteriorSeccion()">Anterior</button>
                        <button type="button" class="btn btn-primary" onclick="siguienteSeccion()">Siguiente</button>
                    </div>
                </div>
                
                <!-- Las otras 13 secciones irían aquí -->
            </div>
        </form>
    </div>

    <!-- Bootstrap JS y dependencias -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <script>
        // Función para avanzar a la siguiente sección
        function siguienteSeccion() {
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
                const seccionActualId = seccionActual.id;
                const seccionNumero = parseInt(seccionActualId.replace('pills-seccion', ''));
                const siguienteSeccionNumero = seccionNumero + 1;
                
                // Actualizar barra de progreso
                const porcentaje = (siguienteSeccionNumero / 15) * 100;
                document.querySelector('.progress-bar').style.width = `${porcentaje}%`;
                document.querySelector('.progress-bar').textContent = `${siguienteSeccionNumero}/15`;
                document.querySelector('.progress-bar').setAttribute('aria-valuenow', porcentaje);
                
                // Cambiar a la siguiente pestaña
                const siguienteTab = document.querySelector(`#pills-seccion${siguienteSeccionNumero}-tab`);
                if (siguienteTab) {
                    const tabInstance = new bootstrap.Tab(siguienteTab);
                    tabInstance.show();
                } else {
                    alert('Has llegado a la última sección disponible por ahora.');
                }
            } else {
                alert('Por favor complete todos los campos requeridos.');
            }
        }

        // Función para retroceder a la sección anterior
        function anteriorSeccion() {
            const seccionActual = document.querySelector('.tab-pane.active');
            const seccionActualId = seccionActual.id;
            const seccionNumero = parseInt(seccionActualId.replace('pills-seccion', ''));
            const anteriorSeccionNumero = seccionNumero - 1;
            
            if (anteriorSeccionNumero > 0) {
                // Actualizar barra de progreso
                const porcentaje = (anteriorSeccionNumero / 15) * 100;
                document.querySelector('.progress-bar').style.width = `${porcentaje}%`;
                document.querySelector('.progress-bar').textContent = `${anteriorSeccionNumero}/15`;
                document.querySelector('.progress-bar').setAttribute('aria-valuenow', porcentaje);
                
                // Cambiar a la pestaña anterior
                const anteriorTab = document.querySelector(`#pills-seccion${anteriorSeccionNumero}-tab`);
                const tabInstance = new bootstrap.Tab(anteriorTab);
                tabInstance.show();
            }
        }

        // Validación de archivos
        document.querySelectorAll('input[type="file"]').forEach(input => {
            input.addEventListener('change', function() {
                const allowedExtensions = /(\.pdf|\.jpg|\.png)$/i;
                if (this.value && !allowedExtensions.exec(this.value)) {
                    alert('Por favor suba archivos solo con extensión .pdf, .jpg o .png');
                    this.value = '';
                    return false;
                }
                
                // Mostrar nombre del archivo seleccionado
                if (this.files && this.files[0]) {
                    const fileName = this.files[0].name;
                    const fileInfo = this.closest('.col-md-12').querySelector('.file-info');
                    if (fileInfo) {
                        fileInfo.textContent = `Archivo seleccionado: ${fileName}`;
                    }
                }
            });
        });

        // Validación en tiempo real para el número de identificación
        document.getElementById('numero_identificacion').addEventListener('input', function(e) {
            this.value = this.value.replace(/[^0-9]/g, '');
        });
    </script>
</body>
</html>