</ /php include 'database.php' ; ?>
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
    <script src="https://cdn.jsdelivr.net/npm/signature_pad@4.0.0/dist/signature_pad.umd.min.js"></script>
</head>

<body>
    <div class="container mt-4 mb-5 text-center">
        <!-- Título y Logo -->
        <div class="container mt-4 mb-5">
            <!-- Título y Logo (centrados solo estos elementos) -->
            <div class="text-center mb-4">
                <h1>Registro de Proveedores <span class="text-morado">Sightlog</span></h1>
                <img src="images/Captura.PNG" alt="Logo Sightlog" style="max-height: 60px; width: auto;" class="mt-2">
            </div>

            <form id="formProveedor" action="procesar.php" method="post" enctype="multipart/form-data">
                <!-- Barra de progreso -->
                <div class="progress mb-4">
                    <div class="progress-bar" role="progressbar" style="width: 8%;" aria-valuenow="8" aria-valuemin="0"
                        aria-valuemax="100">1/16</div>
                </div>

                <!-- Indicador de secciones -->
                <div class="overflow-auto mb-4" style="white-space:nowrap;">
                    <ul class="nav nav-pills flex-nowrap" id="pills-tab" role="tablist" style="min-width:600px;">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-seccion1-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-seccion1" type="button" role="tab" aria-controls="pills-seccion1"
                                aria-selected="true">Información Básica</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-seccion2-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-seccion2" type="button" role="tab" aria-controls="pills-seccion2"
                                aria-selected="false" style="display:none;">Documentación Crítica</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-seccion3-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-seccion3" type="button" role="tab" aria-controls="pills-seccion3"
                                aria-selected="false" style="display:none;">Documentación No Crítica</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-seccion4-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-seccion4" type="button" role="tab" aria-controls="pills-seccion4"
                                aria-selected="false" style="display:none;">Documentación Natural</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-seccion5-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-seccion5" type="button" role="tab" aria-controls="pills-seccion5"
                                aria-selected="false" style="display:none;">
                                Doc. Mandatorios
                            </button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-seccion6-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-seccion6" type="button" role="tab" aria-controls="pills-seccion6"
                                aria-selected="false" style="display:none;">Información de Contacto</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-seccion7-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-seccion7" type="button" role="tab" aria-controls="pills-seccion7"
                                aria-selected="false" style="display:none;">Representante Legal</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-seccion8-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-seccion8" type="button" role="tab" aria-controls="pills-seccion8"
                                aria-selected="false" style="display:none;">Personas Contacto</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-seccion9-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-seccion9" type="button" role="tab" aria-controls="pills-seccion9"
                                aria-selected="false" style="display:none;">Información PEP</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-seccion10-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-seccion10" type="button" role="tab"
                                aria-controls="pills-seccion10" aria-selected="false"
                                style="display:none;">Beneficiarios Finales</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-seccion11-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-seccion11" type="button" role="tab"
                                aria-controls="pills-seccion11" aria-selected="false" style="display:none;">
                                Información Financiera
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-seccion12-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-seccion12" type="button" role="tab"
                                aria-controls="pills-seccion12" aria-selected="false" style="display:none;">
                                Operaciones Internacionales
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-seccion13-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-seccion13" type="button" role="tab"
                                aria-controls="pills-seccion13" aria-selected="false" style="display:none;">
                                Referencia Comercial
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-seccion14-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-seccion14" type="button" role="tab"
                                aria-controls="pills-seccion14" aria-selected="false" style="display:none;">
                                Certificaciones
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-seccion15-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-seccion15" type="button" role="tab"
                                aria-controls="pills-seccion15" aria-selected="false" style="display:none;">
                                Declaraciones y Autorizaciones
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-seccion16-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-seccion16" type="button" role="tab"
                                aria-controls="pills-seccion16" aria-selected="false" style="display:none;">
                                Documentos Requeridos
                            </button>
                        </li>




                    </ul>

                    <!-- Contenido de las secciones -->
                    <div class="tab-content" id="pills-tabContent">


                        <!-- Sección 1: Información Básica -->
                        <div class="tab-pane fade show active" id="pills-seccion1" role="tabpanel"
                            aria-labelledby="pills-seccion1-tab">
                            <div class="card">
                                <div class="card-header bg-primary text-white">
                                    <h5 class="card-title mb-0">Información Básica del Proveedor</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row g-3">
                                        <!-- Razón Social -->
                                        <div class="col-md-12">
                                            <label for="razon_social" class="form-label">Razón Social <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="razon_social"
                                                name="razon_social" required>
                                        </div>

                                        <!-- Tipo de Identificación -->
                                        <div class="col-md-6">
                                            <label for="tipo_identificacion" class="form-label">Tipo de Identificación
                                                <span class="text-danger">*</span></label>
                                            <select class="form-select" id="tipo_identificacion"
                                                name="tipo_identificacion" required>
                                                <option value="" selected disabled>Seleccione...</option>
                                                <option value="Cédula de Ciudadanía">Cédula de Ciudadanía</option>
                                                <option value="Cédula de Extranjería">Cédula de Extranjería</option>
                                                <option value="Pasaporte">Pasaporte</option>
                                                <option value="NIT Diplomático">NIT Diplomático</option>
                                                <option value="Documento de Identidad de Extranjero">Documento de
                                                    Identidad
                                                    de Extranjero</option>
                                                <option value="NIT de Persona Natural">NIT de Persona Natural</option>
                                            </select>
                                        </div>

                                        <!-- Número de Identificación (ID) -->
                                        <div class="col-md-6">
                                            <label for="numero_identificacion" class="form-label">Número de
                                                Identificación
                                                <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="numero_identificacion"
                                                name="numero_identificacion" required>
                                        </div>

                                        <!-- Tipo de Proveedor -->
                                        <div class="col-md-12">
                                            <label for="tipo_proveedor" class="form-label">Tipo de Proveedor <span
                                                    class="text-danger">*</span></label>
                                            <select class="form-select" id="tipo_proveedor" name="tipo_proveedor"
                                                required>
                                                <option value="" selected disabled>Seleccione...</option>
                                                <option value="Proveedor no gran contribuyente (crítico)">Proveedor no
                                                    gran
                                                    contribuyente (crítico)</option>
                                                <option value="Proveedor gran contribuyente (no critico)">Proveedor gran
                                                    contribuyente (no critico)</option>
                                                <option value="Persona natural">Persona natural</option>
                                                <option value="Mandatorio (Aerolinea, Naviera)">Mandatorio (Aerolinea,
                                                    Naviera)</option>
                                            </select>
                                        </div>

                                        <!-- Número de Celular -->
                                        <div class="col-md-6">
                                            <label for="numero_celular" class="form-label">Número de Celular <span
                                                    class="text-danger">*</span></label>
                                            <input type="tel" class="form-control" id="numero_celular"
                                                name="numero_celular" required>
                                        </div>

                                        <!-- Correo Electrónico -->
                                        <div class="col-md-6">
                                            <label for="correo_electronico" class="form-label">Correo Electrónico <span
                                                    class="text-danger">*</span></label>
                                            <input type="email" class="form-control" id="correo_electronico"
                                                name="correo_electronico"
                                                pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$"
                                                title="Por favor ingrese un correo electrónico válido" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Botones de navegación -->
                            <div class="d-flex justify-content-between mt-4">
                                <button type="button" class="btn btn-secondary disabled">Anterior</button>
                                <button type="button" class="btn btn-primary"
                                    onclick="validarSeccion1()">Siguiente</button>
                            </div>
                        </div>

                        <!-- Sección 2: Documentación Proveedor Crítico -->
                        <div class="tab-pane fade" id="pills-seccion2" role="tabpanel"
                            aria-labelledby="pills-seccion2-tab">
                            <div class="card">
                                <div class="card-header bg-primary text-white">
                                    <h5 class="card-title mb-0">REQUISITOS Y FORMATOS (Documentación - Proveedor no Gran
                                        Contribuyente)</h5>
                                </div>
                                <div class="card-body">
                                    <div class="alert alert-info">
                                        <i class="fas fa-info-circle"></i> Asegúrese de subir todos los documentos
                                        requeridos en los formatos aceptados (.PDF, .JPG, .PNG)
                                    </div>

                                    <h6 class="mb-3">7. CARGA DE ARCHIVO (Adjunta la siguiente documentación)</h6>

                                    <div class="row g-3">
                                        <!-- RUT completo vigente -->
                                        <div class="col-md-12">
                                            <label for="rut_vigente" class="form-label">RUT (fecha de expedición menor a
                                                60
                                                días) <span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <input type="file" class="form-control" id="rut_vigente"
                                                    name="rut_vigente" accept=".pdf,.jpg,.png" required>
                                                <select class="form-select" style="max-width: 150px;"
                                                    name="rut_vigente_estado" required>
                                                    <option value="" selected disabled>Estado</option>
                                                    <option value="Completo">Completo</option>
                                                    <option value="No Completado">No Completado</option>
                                                </select>
                                            </div>
                                            <div class="file-info">Formatos aceptados: PDF, JPG, PNG</div>
                                        </div>

                                        <!-- Certificado de existencia y representación legal -->
                                        <div class="col-md-12">
                                            <label for="certificado_existencia" class="form-label">Certificado de
                                                existencia
                                                y representación legal (fecha de expedición no mayor a 30 días) <span
                                                    class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <input type="file" class="form-control" id="certificado_existencia"
                                                    name="certificado_existencia" accept=".pdf,.jpg,.png" required>
                                                <select class="form-select" style="max-width: 150px;"
                                                    name="certificado_existencia_estado" required>
                                                    <option value="" selected disabled>Estado</option>
                                                    <option value="Completo">Completo</option>
                                                    <option value="No Completado">No Completado</option>
                                                </select>
                                            </div>
                                            <div class="file-info">Formatos aceptados: PDF, JPG, PNG</div>
                                        </div>

                                        <!-- Cédula de representante legal -->
                                        <div class="col-md-12">
                                            <label for="cedula_representante" class="form-label">Cédula de representante
                                                legal <span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <input type="file" class="form-control" id="cedula_representante"
                                                    name="cedula_representante" accept=".pdf,.jpg,.png" required>
                                                <select class="form-select" style="max-width: 150px;"
                                                    name="cedula_representante_estado" required>
                                                    <option value="" selected disabled>Estado</option>
                                                    <option value="Completo">Completo</option>
                                                    <option value="No Completado">No Completado</option>
                                                </select>
                                            </div>
                                            <div class="file-info">Formatos aceptados: PDF, JPG, PNG</div>
                                        </div>

                                        <!-- Estados financieros -->
                                        <div class="col-md-12">
                                            <label for="estados_financieros" class="form-label">Estados financieros de
                                                los
                                                últimos 2 años, con sus notas <span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <input type="file" class="form-control" id="estados_financieros"
                                                    name="estados_financieros" accept=".pdf,.jpg,.png" required>
                                                <select class="form-select" style="max-width: 150px;"
                                                    name="estados_financieros_estado" required>
                                                    <option value="" selected disabled>Estado</option>
                                                    <option value="Completo">Completo</option>
                                                    <option value="No Completado">No Completado</option>
                                                </select>
                                            </div>
                                            <div class="file-info">Formatos aceptados: PDF, JPG, PNG</div>
                                        </div>

                                        <!-- Declaración de renta -->
                                        <div class="col-md-12">
                                            <label for="declaracion_renta" class="form-label">Declaración de renta de
                                                los
                                                últimos dos (2) años <span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <input type="file" class="form-control" id="declaracion_renta"
                                                    name="declaracion_renta" accept=".pdf,.jpg,.png" required>
                                                <select class="form-select" style="max-width: 150px;"
                                                    name="declaracion_renta_estado" required>
                                                    <option value="" selected disabled>Estado</option>
                                                    <option value="Completo">Completo</option>
                                                    <option value="No Completado">No Completado</option>
                                                </select>
                                            </div>
                                            <div class="file-info">Formatos aceptados: PDF, JPG, PNG</div>
                                        </div>

                                        <!-- Certificación bancaria -->
                                        <div class="col-md-12">
                                            <label for="certificacion_bancaria" class="form-label">Certificación
                                                bancaria
                                                vigente cantidad 3<span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <input type="file" class="form-control" id="certificacion_bancaria"
                                                    name="certificacion_bancaria[]" accept=".pdf,.jpg,.png" multiple
                                                    required>
                                                <select class="form-select" style="max-width: 150px;"
                                                    name="certificacion_bancaria_estado" required>
                                                    <option value="" selected disabled>Estado</option>
                                                    <option value="Completo">Completo</option>
                                                    <option value="No Completado">No Completado</option>
                                                </select>
                                            </div>
                                            <div class="file-info">Formatos aceptados: PDF, JPG, PNG</div>
                                        </div>

                                        <!-- Referencia comercial -->
                                        <div class="col-md-12">
                                            <label for="referencia_comercial" class="form-label">Referencia comercial
                                                vigente Adjuto minimo 2<span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <input type="file" class="form-control" id="referencia_comercial"
                                                    name="referencia_comercial[]" accept=".pdf,.jpg,.png" multiple
                                                    required>
                                                <select class="form-select" style="max-width: 150px;"
                                                    name="referencia_comercial_estado" required>
                                                    <option value="" selected disabled>Estado</option>
                                                    <option value="Completo">Completo</option>
                                                    <option value="No Completado">No Completado</option>
                                                </select>
                                            </div>
                                            <div class="file-info">Formatos aceptados: PDF, JPG, PNG</div>
                                        </div>

                                        <!-- Certificados de seguridad (opcional) -->
                                        <div class="col-md-12">
                                            <label for="certificados_seguridad" class="form-label">Certificado(s) de
                                                seguridad y/o de pertenencia a gremios o asociaciones (si
                                                aplica)</label>
                                            <div class="input-group">
                                                <input type="file" class="form-control" id="certificados_seguridad"
                                                    name="certificados_seguridad" accept=".pdf,.jpg,.png">
                                                <select class="form-select" style="max-width: 150px;"
                                                    name="certificados_seguridad_estado">
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
                                            <label for="resolucion_habilitacion" class="form-label">Resolución de
                                                habilitación o permisos según la normativa vigente (si aplica)</label>
                                            <div class="input-group">
                                                <input type="file" class="form-control" id="resolucion_habilitacion"
                                                    name="resolucion_habilitacion" accept=".pdf,.jpg,.png">
                                                <select class="form-select" style="max-width: 150px;"
                                                    name="resolucion_habilitacion_estado">
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
                                            <label for="plan_contingencia" class="form-label">Copia del Plan de
                                                contingencia
                                                vigente, o documento firmado por el representante legal donde certifique
                                                que
                                                la organización lo tiene establecido <span
                                                    class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <input type="file" class="form-control" id="plan_contingencia"
                                                    name="plan_contingencia" accept=".pdf,.jpg,.png" required>
                                                <select class="form-select" style="max-width: 150px;"
                                                    name="plan_contingencia_estado" required>
                                                    <option value="" selected disabled>Estado</option>
                                                    <option value="Completo">Completo</option>
                                                    <option value="No Completado">No Completado</option>
                                                </select>
                                            </div>
                                            <div class="file-info">Formatos aceptados: PDF, JPG, PNG</div>
                                        </div>

                                        <!-- Autoevaluación de estándares mínimos de seguridad según la legislación vigente de mini trabajo -->
                                        <div class="col-md-12">
                                            <label for="Autoevaluación" class="form-label">Autoevaluación de estándares
                                                mínimos de seguridad según la legislación vigente de mini trabajo <span
                                                    class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <input type="file" class="form-control" id="Autoevaluación"
                                                    name="Autoevaluación" accept=".pdf,.jpg,.png" required>
                                                <select class="form-select" style="max-width: 150px;"
                                                    name="Autoevaluación" required>
                                                    <option value="" selected disabled>Estado</option>
                                                    <option value="Completo">Completo</option>
                                                    <option value="No Completado">No Completado</option>
                                                </select>
                                            </div>
                                            <div class="file-info">Formatos aceptados: PDF, JPG, PNG</div>
                                        </div>


                                        <!-- Registro fotográfico -->
                                        <div class="col-md-12">
                                            <label for="fachada_nomenclatura" class="form-label">Registro fotográfico de
                                                la
                                                fachada donde se evidencie la nomenclatura registrada en el RUT <span
                                                    class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <input type="file" class="form-control" id="fachada_nomenclatura"
                                                    name="fachada_nomenclatura" accept=".jpg,.png" required>
                                                <select class="form-select" style="max-width: 150px;"
                                                    name="fachada_nomenclatura_estado" required>
                                                    <option value="" selected disabled>Estado</option>
                                                    <option value="Completo">Completo</option>
                                                    <option value="No Completado">No Completado</option>
                                                </select>
                                            </div>
                                            <div class="file-info">Formatos aceptados: JPG, PNG (imágenes solamente)
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- descargar archivos -->

                            <div class="col-md-12 mt-3">
                                <div class="card border-primary">
                                    <div class="card-header bg-primary text-white">
                                        <h6 class="mb-0">Formularios disponibles para descargar</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <?php
                                    $directorio = 'documentos/nocontribuyente/';
                                    if(is_dir($directorio)){
                                        $archivos = array_diff(scandir($directorio), array('..', '.'));
                                        
                                        if(count($archivos) > 0){
                                            foreach($archivos as $archivo){
                                                $ruta_completa = $directorio.$archivo;
                                                if(is_file($ruta_completa)){
                                                    echo '<div class="col-md-4 mb-2">';
                                                    echo '<a href="'.$ruta_completa.'" class="btn btn-outline-primary w-100" download>';
                                                    echo '<i class="fas fa-file-download me-2"></i>'.htmlspecialchars($archivo);
                                                    echo '</a>';
                                                    echo '</div>';
                                                }
                                            }
                                        } else {
                                            echo '<div class="col-12">';
                                            echo '<div class="alert alert-info">No hay archivos disponibles actualmente.</div>';
                                            echo '</div>';
                                        }
                                    } else {
                                        echo '<div class="col-12">';
                                        echo '<div class="alert alert-warning">El directorio no existe o no es accesible.</div>';
                                        echo '</div>';
                                    }
                                    ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Formularios a subir -->
                            <div class="col-md-12">
                                <label for="formularios" class="form-label">Formularios <span
                                        class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="file" class="form-control" id="formularios" name="formularios[]"
                                        accept=".docx,.xlsx" multiple required>
                                    <select class="form-select" style="max-width: 150px;" name="formularios_estado"
                                        required>
                                        <option value="" selected disabled>Estado</option>
                                        <option value="Completo">Completo</option>
                                        <option value="No Completado">No Completado</option>
                                    </select>
                                </div>
                                <div class="file-info">Formatos aceptados: DOCX, XLSX (múltiples archivos permitidos)
                                </div>
                            </div>



                            <!-- Botones de navegación -->
                            <div class="d-flex justify-content-between mt-4">
                                <button type="button" class="btn btn-secondary"
                                    onclick="irASeccion1()">Anterior</button>
                                <button type="button" onclick="validarSeccion2()"
                                    class="btn btn-primary">Avanzar</button>
                            </div>
                        </div>

                        <!-- Sección 3: Documentación Proveedor No Crítico -->
                        <div class="tab-pane fade" id="pills-seccion3" role="tabpanel"
                            aria-labelledby="pills-seccion3-tab">
                            <div class="card">
                                <div class="card-header bg-primary text-white">
                                    <h5 class="card-title mb-0">REQUISITOS Y FORMATOS (Documentación - Proveedor Gran
                                        contribuyente)</h5>
                                </div>
                                <div class="card-body">
                                    <div class="alert alert-info">
                                        <i class="fas fa-info-circle"></i> Asegúrese de subir todos los documentos
                                        requeridos en los formatos aceptados (.PDF, .JPG, .PNG)
                                    </div>

                                    <div class="row g-3">
                                        <!-- RUT completo vigente -->
                                        <div class="col-md-12">
                                            <label for="rut_vigente_nc" class="form-label">RUT (fecha de expedición
                                                menor a
                                                60 días) <span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <input type="file" class="form-control" id="rut_vigente_nc"
                                                    name="rut_vigente_nc" accept=".pdf,.jpg,.png" required>
                                                <select class="form-select" style="max-width: 150px;"
                                                    name="rut_vigente_nc_estado" required>
                                                    <option value="" selected disabled>Estado</option>
                                                    <option value="Completo">Completo</option>
                                                    <option value="No Completado">No Completado</option>
                                                </select>
                                            </div>
                                            <div class="file-info">Formatos aceptados: PDF, JPG, PNG</div>
                                        </div>

                                        <!-- Certificado de existencia y representación legal -->
                                        <div class="col-md-12">
                                            <label for="certificado_existencia_nc" class="form-label">Certificado de
                                                existencia y representación legal (fecha de expedición no mayor a 30
                                                días)
                                                <span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <input type="file" class="form-control" id="certificado_existencia_nc"
                                                    name="certificado_existencia_nc" accept=".pdf,.jpg,.png" required>
                                                <select class="form-select" style="max-width: 150px;"
                                                    name="certificado_existencia_nc_estado" required>
                                                    <option value="" selected disabled>Estado</option>
                                                    <option value="Completo">Completo</option>
                                                    <option value="No Completado">No Completado</option>
                                                </select>
                                            </div>
                                            <div class="file-info">Formatos aceptados: PDF, JPG, PNG</div>
                                        </div>

                                        <!-- Cédula de representante legal -->
                                        <div class="col-md-12">
                                            <label for="cedula_representante_nc" class="form-label">Cédula de
                                                representante
                                                legal <span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <input type="file" class="form-control" id="cedula_representante_nc"
                                                    name="cedula_representante_nc" accept=".pdf,.jpg,.png" required>
                                                <select class="form-select" style="max-width: 150px;"
                                                    name="cedula_representante_nc_estado" required>
                                                    <option value="" selected disabled>Estado</option>
                                                    <option value="Completo">Completo</option>
                                                    <option value="No Completado">No Completado</option>
                                                </select>
                                            </div>
                                            <div class="file-info">Formatos aceptados: PDF, JPG, PNG</div>
                                        </div>



                                        <!-- Certificación bancaria -->
                                        <div class="col-md-12">
                                            <label for="certificacion_bancaria_nc" class="form-label">Certificación
                                                bancaria
                                                vigente cantidad 3<span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <input type="file" class="form-control" id="certificacion_bancaria_nc"
                                                    name="certificacion_bancaria_nc[]" accept=".pdf,.jpg,.png" multiple
                                                    required>
                                                <select class="form-select" style="max-width: 150px;"
                                                    name="certificacion_bancaria_nc_estado" required>
                                                    <option value="" selected disabled>Estado</option>
                                                    <option value="Completo">Completo</option>
                                                    <option value="No Completado">No Completado</option>
                                                </select>
                                            </div>
                                            <div class="file-info">Formatos aceptados: PDF, JPG, PNG</div>
                                        </div>

                                        <!-- Referencia comercial -->
                                        <div class="col-md-12">
                                            <label for="referencia_comercial_nc" class="form-label">Referencia comercial
                                                vigente Adjunto minimo 2 <span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <input type="file" class="form-control" id="referencia_comercial_nc"
                                                    name="referencia_comercial_nc[]" accept=".pdf,.jpg,.png" multiple
                                                    required>
                                                <select class="form-select" style="max-width: 150px;"
                                                    name="referencia_comercial_nc_estado" required>
                                                    <option value="" selected disabled>Estado</option>
                                                    <option value="Completo">Completo</option>
                                                    <option value="No Completado">No Completado</option>
                                                </select>
                                            </div>
                                            <div class="file-info">Formatos aceptados: PDF, JPG, PNG</div>
                                        </div>

                                        <!-- Certificados de seguridad (opcional) -->
                                        <div class="col-md-12">
                                            <label for="certificados_seguridad_nc" class="form-label">Certificado(s) de
                                                seguridad y/o de pertenencia a gremios o asociaciones (si
                                                aplica)</label>
                                            <div class="input-group">
                                                <input type="file" class="form-control" id="certificados_seguridad_nc"
                                                    name="certificados_seguridad_nc" accept=".pdf,.jpg,.png">
                                                <select class="form-select" style="max-width: 150px;"
                                                    name="certificados_seguridad_nc_estado">
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
                                            <label for="resolucion_habilitacion_nc" class="form-label">Resolución de
                                                habilitación o permisos según la normativa vigente (si aplica)</label>
                                            <div class="input-group">
                                                <input type="file" class="form-control" id="resolucion_habilitacion_nc"
                                                    name="resolucion_habilitacion_nc" accept=".pdf,.jpg,.png">
                                                <select class="form-select" style="max-width: 150px;"
                                                    name="resolucion_habilitacion_nc_estado">
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
                                            <label for="plan_contingencia_nc" class="form-label">Copia del Plan de
                                                contingencia vigente, o documento firmado por el representante legal
                                                donde
                                                certifique que la organización lo tiene establecido <span
                                                    class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <input type="file" class="form-control" id="plan_contingencia_nc"
                                                    name="plan_contingencia_nc" accept=".pdf,.jpg,.png" required>
                                                <select class="form-select" style="max-width: 150px;"
                                                    name="plan_contingencia_nc_estado" required>
                                                    <option value="" selected disabled>Estado</option>
                                                    <option value="Completo">Completo</option>
                                                    <option value="No Completado">No Completado</option>
                                                </select>
                                            </div>
                                            <div class="file-info">Formatos aceptados: PDF, JPG, PNG</div>
                                        </div>


                                        <!-- Autoevaluación de estándares mínimos de seguridad según la legislación vigente de mini trabajo -->
                                        <div class="col-md-12">
                                            <label for="Autoevaluación" class="form-label">Autoevaluación de estándares
                                                mínimos de seguridad según la legislación vigente de mini trabajo <span
                                                    class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <input type="file" class="form-control" id="Autoevaluación"
                                                    name="Autoevaluación" accept=".pdf,.jpg,.png" required>
                                                <select class="form-select" style="max-width: 150px;"
                                                    name="Autoevaluación" required>
                                                    <option value="" selected disabled>Estado</option>
                                                    <option value="Completo">Completo</option>
                                                    <option value="No Completado">No Completado</option>
                                                </select>
                                            </div>
                                            <div class="file-info">Formatos aceptados: PDF, JPG, PNG</div>
                                        </div>


                                        <!-- Registro fotográfico -->
                                        <div class="col-md-12">
                                            <label for="fachada_nomenclatura_nc" class="form-label">Registro fotográfico
                                                de
                                                la fachada donde se evidencie la nomenclatura registrada en el RUT <span
                                                    class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <input type="file" class="form-control" id="fachada_nomenclatura_nc"
                                                    name="fachada_nomenclatura_nc" accept=".jpg,.png" required>
                                                <select class="form-select" style="max-width: 150px;"
                                                    name="fachada_nomenclatura_nc_estado" required>
                                                    <option value="" selected disabled>Estado</option>
                                                    <option value="Completo">Completo</option>
                                                    <option value="No Completado">No Completado</option>
                                                </select>
                                            </div>
                                            <div class="file-info">Formatos aceptados: JPG, PNG (imágenes solamente)
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- descargar archivos -->

                            <div class="col-md-12 mt-3">
                                <div class="card border-primary">
                                    <div class="card-header bg-primary text-white">
                                        <h6 class="mb-0">Formularios disponibles para descargar</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <?php
                                    $directorio = 'documentos/contribuyente/';
                                    if(is_dir($directorio)){
                                        $archivos = array_diff(scandir($directorio), array('..', '.'));
                                        
                                        if(count($archivos) > 0){
                                            foreach($archivos as $archivo){
                                                $ruta_completa = $directorio.$archivo;
                                                if(is_file($ruta_completa)){
                                                    echo '<div class="col-md-4 mb-2">';
                                                    echo '<a href="'.$ruta_completa.'" class="btn btn-outline-primary w-100" download>';
                                                    echo '<i class="fas fa-file-download me-2"></i>'.htmlspecialchars($archivo);
                                                    echo '</a>';
                                                    echo '</div>';
                                                }
                                            }
                                        } else {
                                            echo '<div class="col-12">';
                                            echo '<div class="alert alert-info">No hay archivos disponibles actualmente.</div>';
                                            echo '</div>';
                                        }
                                    } else {
                                        echo '<div class="col-12">';
                                        echo '<div class="alert alert-warning">El directorio no existe o no es accesible.</div>';
                                        echo '</div>';
                                    }
                                    ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Formularios a subir -->
                            <div class="col-md-12">
                                <label for="formularios_nc" class="form-label">Formularios <span
                                        class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="file" class="form-control" id="formularios_nc" name="formularios_nc[]"
                                        accept=".docx,.xlsx" multiple required>
                                    <select class="form-select" style="max-width: 150px;" name="formularios_nc_estado"
                                        required>
                                        <option value="" selected disabled>Estado</option>
                                        <option value="Completo">Completo</option>
                                        <option value="No Completado">No Completado</option>
                                    </select>
                                </div>
                                <div class="file-info">Formatos aceptados: DOCX, XLSX (múltiples archivos permitidos)
                                </div>
                            </div>



                            <!-- Botones de navegación -->
                            <div class="d-flex justify-content-between mt-4">
                                <button type="button" class="btn btn-secondary"
                                    onclick="mostrarSeccion(1)">Anterior</button>
                                <button type="button" class="btn btn-primary"
                                    onclick="validarSeccionActual(3,6)">Avanzar</button>
                            </div>
                        </div>



                        <!-- Sección 4: Documentación Proveedor Natural Especial -->
                        <div class="tab-pane fade" id="pills-seccion4" role="tabpanel"
                            aria-labelledby="pills-seccion4-tab">
                            <div class="card">
                                <div class="card-header bg-primary text-white">
                                    <h5 class="card-title mb-0">Documentación - Persona Natural</h5>
                                </div>

                                <div class="card-body">
                                    <div class="alert alert-info">
                                        <i class="fas fa-info-circle"></i> Asegúrese de subir todos los documentos
                                        requeridos en los formatos aceptados (.PDF, .JPG, .PNG)
                                    </div>

                                    <div class="row g-3">
                                        <!-- Cédula de Ciudadanía -->
                                        <div class="col-md-12">
                                            <label for="cedula_ciudadania" class="form-label">1. Cédula de Ciudadanía
                                                <span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <input type="file" class="form-control" id="cedula_ciudadania"
                                                    name="cedula_ciudadania" accept=".pdf,.jpg,.png" required>
                                                <select class="form-select" style="max-width: 150px;"
                                                    name="cedula_ciudadania_estado" required>
                                                    <option value="" selected disabled>Estado</option>
                                                    <option value="Completo">Completo</option>
                                                    <option value="No Completado">No Completado</option>
                                                </select>
                                            </div>
                                            <div class="file-info">Formatos aceptados: PDF, JPG, PNG</div>
                                        </div>

                                        <!-- RUT -->
                                        <div class="col-md-12">
                                            <label for="rut_natural" class="form-label">2. RUT Completo vigente menor a
                                                60
                                                dias <span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <input type="file" class="form-control" id="rut_natural"
                                                    name="rut_natural" accept=".pdf,.jpg,.png" required>
                                                <select class="form-select" style="max-width: 150px;"
                                                    name="rut_natural_estado" required>
                                                    <option value="" selected disabled>Estado</option>
                                                    <option value="Completo">Completo</option>
                                                    <option value="No Completado">No Completado</option>
                                                </select>
                                            </div>
                                            <div class="file-info">Formatos aceptados: PDF, JPG, PNG</div>
                                        </div>

                                        <!-- Certificación bancaria -->
                                        <div class="col-md-12">
                                            <label for="certificacion_bancaria_natural" class="form-label">3.
                                                Certificación
                                                bancaria cantidad 3 <span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <input type="file" class="form-control"
                                                    id="certificacion_bancaria_natural"
                                                    name="certificacion_bancaria_natural[]" accept=".pdf,.jpg,.png"
                                                    multiple required>
                                                <select class="form-select" style="max-width: 150px;"
                                                    name="certificacion_bancaria_natural_estado" required>
                                                    <option value="" selected disabled>Estado</option>
                                                    <option value="Completo">Completo</option>
                                                    <option value="No Completado">No Completado</option>
                                                </select>
                                            </div>
                                            <div class="file-info">Formatos aceptados: PDF, JPG, PNG</div>
                                        </div>


                                        <!-- Registro fotográfico -->
                                        <div class="col-md-12">
                                            <label for="fachada_nomenclatura_natural" class="form-label">Registro
                                                fotográfico de la fachada donde se evidencie la nomenclatura registrada
                                                en
                                                el RUT <span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <input type="file" class="form-control"
                                                    id="fachada_nomenclatura_natural"
                                                    name="fachada_nomenclatura_natural" accept=".jpg,.png" required>
                                                <select class="form-select" style="max-width: 150px;"
                                                    name="fachada_nomenclatura_natur_estado" required>
                                                    <option value="" selected disabled>Estado</option>
                                                    <option value="Completo">Completo</option>
                                                    <option value="No Completado">No Completado</option>
                                                </select>
                                            </div>
                                            <div class="file-info">Formatos aceptados: JPG, PNG (imágenes solamente)
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- descargar archivos -->

                            <div class="col-md-12 mt-3">
                                <div class="card border-primary">
                                    <div class="card-header bg-primary text-white">
                                        <h6 class="mb-0">Formularios disponibles para descargar</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <?php
                                    $directorio = 'documentos/natural/';
                                    if(is_dir($directorio)){
                                        $archivos = array_diff(scandir($directorio), array('..', '.'));
                                        
                                        if(count($archivos) > 0){
                                            foreach($archivos as $archivo){
                                                $ruta_completa = $directorio.$archivo;
                                                if(is_file($ruta_completa)){
                                                    echo '<div class="col-md-4 mb-2">';
                                                    echo '<a href="'.$ruta_completa.'" class="btn btn-outline-primary w-100" download>';
                                                    echo '<i class="fas fa-file-download me-2"></i>'.htmlspecialchars($archivo);
                                                    echo '</a>';
                                                    echo '</div>';
                                                }
                                            }
                                        } else {
                                            echo '<div class="col-12">';
                                            echo '<div class="alert alert-info">No hay archivos disponibles actualmente.</div>';
                                            echo '</div>';
                                        }
                                    } else {
                                        echo '<div class="col-12">';
                                        echo '<div class="alert alert-warning">El directorio no existe o no es accesible.</div>';
                                        echo '</div>';
                                    }
                                    ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Formularios a subir -->
                            <div class="col-md-12">
                                <label for="formularios_natural" class="form-label">Formularios <span
                                        class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="file" class="form-control" id="formularios_natural"
                                        name="formularios_natural[]" accept=".docx,.xlsx" multiple required>
                                    <select class="form-select" style="max-width: 150px;"
                                        name="formularios_natural_estado" required>
                                        <option value="" selected disabled>Estado</option>
                                        <option value="Completo">Completo</option>
                                        <option value="No Completado">No Completado</option>
                                    </select>
                                </div>
                                <div class="file-info">Formatos aceptados: DOCX, XLSX (múltiples archivos permitidos)
                                </div>
                            </div>



                            <!-- Botones de navegación -->
                            <div class="d-flex justify-content-between mt-4">
                                <button type="button" class="btn btn-secondary"
                                    onclick="mostrarSeccion(1)">Anterior</button>
                                <button type="button" class="btn btn-primary"
                                    onclick="validarSeccionActual(4,6)">Avanzar</button>
                            </div>
                        </div>

                        <!-- Nueva Sesión 5 - REQUISITOS Y FORMATOS -->
                        <div class="tab-pane fade" id="pills-seccion5" role="tabpanel"
                            aria-labelledby="pills-seccion5-tab">
                            <div class="card border-primary">
                                <div class="card-header bg-primary text-white">
                                    <h5 class="mb-0">REQUISITOS Y FORMATOS (Documentación y Formatos – Mandatorio)</h5>
                                </div>
                                <div class="card-body">
                                    <div class="alert alert-info">
                                        <strong>Asegúrese de subir todos los documentos requeridos en los formatos
                                            aceptados
                                            (.PDF, .JPG, .PNG)</strong>
                                    </div>

                                    <h6 class="mt-4 mb-3">CARGA DE ARCHIVO (Formulario, adjunta la siguiente
                                        documentación)
                                    </h6>

                                    <!-- RUT -->
                                    <div class="mb-4">
                                        <label class="form-label">RUT completo vigente (menor a 60 días) <span
                                                class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <input type="file" class="form-control" name="rut_vigente"
                                                accept=".pdf,.jpg,.png" required>
                                            <select class="form-select" style="max-width: 150px;"
                                                name="rut_vigente_estado" required>
                                                <option value="" selected disabled>Estado</option>
                                                <option value="Completo">Completo</option>
                                                <option value="No Completado">No Completado</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Certificación Bancaria -->
                                    <div class="mb-4">
                                        <label class="form-label">Certificación bancaria vigente cantidad 3<span
                                                class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <input type="file" class="form-control" name="certificacion_bancaria[]"
                                                accept=".pdf,.jpg,.png" multiple required>
                                            <select class="form-select" style="max-width: 150px;"
                                                name="certificacion_bancaria_estado" required>
                                                <option value="" selected disabled>Estado</option>
                                                <option value="Completo">Completo</option>
                                                <option value="No Completado">No Completado</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Cámara de Comercio -->
                                    <div class="mb-4">
                                        <label class="form-label">Cámara y comercio <span
                                                class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <input type="file" class="form-control" name="camara_comercio"
                                                accept=".pdf,.jpg,.png" required>
                                            <select class="form-select" style="max-width: 150px;"
                                                name="camara_comercio_estado" required>
                                                <option value="" selected disabled>Estado</option>
                                                <option value="Completo">Completo</option>
                                                <option value="No Completado">No Completado</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Cédula representante legal -->
                                    <div class="mb-4">
                                        <label class="form-label">Cédula del representante legal <span
                                                class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <input type="file" class="form-control" name="cedula_representante"
                                                accept=".pdf,.jpg,.png" required>
                                            <select class="form-select" style="max-width: 150px;"
                                                name="cedula_representante_estado" required>
                                                <option value="" selected disabled>Estado</option>
                                                <option value="Completo">Completo</option>
                                                <option value="No Completado">No Completado</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Pregunta SI/NO -->
                                    <div class="mb-4">
                                        <label class="form-label">¿Desea usted diligenciar el presente formulario? <span
                                                class="text-danger">*</span></label>
                                        <select class="form-control" id="desea_diligenciar" name="desea_diligenciar"
                                            required>
                                            <option value="" selected disabled>Seleccione...</option>
                                            <option value="SI">SI</option>
                                            <option value="NO">NO</option>
                                        </select>
                                    </div>

                                    <!-- Campo motivo (solo visible cuando NO) -->
                                    <div class="mb-4" id="motivo_container" style="display: none;">
                                        <label class="form-label">Indique brevemente el motivo de su decisión <span
                                                class="text-danger">*</span></label>
                                        <textarea class="form-control" id="motivo_no" name="motivo_no"
                                            rows="3"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between mt-4">
                                <button type="button" class="btn btn-secondary"
                                    onclick="mostrarSeccion(1)">Anterior</button>
                                <button type="button" class="btn btn-primary"
                                    onclick="validarSesion5()">Avanzar</button>
                            </div>
                        </div>


                        <!-- Sección 6 : Información de Contacto y Empresa -->
                        <div class="tab-pane fade" id="pills-seccion6" role="tabpanel"
                            aria-labelledby="pills-seccion6-tab">
                            <div class="card">
                                <div class="card-header bg-primary text-white">
                                    <h5 class="card-title mb-0">Información de Contacto y Empresa</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row g-3">
                                        <!-- Dirección de Domicilio Principal -->
                                        <div class="col-md-12">
                                            <label for="direccion_domicilio" class="form-label">10. Dirección de
                                                Domicilio
                                                Principal <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="direccion_domicilio"
                                                name="direccion_domicilio" required>
                                        </div>

                                        <!-- País -->
                                        <div class="col-md-6">
                                            <label for="pais" class="form-label">11. País <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="pais" name="pais"
                                                value="Colombia" readonly>
                                        </div>

                                        <!-- Departamento -->
                                        <div class="col-md-6">
                                            <label for="departamento" class="form-label">12. Departamento <span
                                                    class="text-danger">*</span></label>
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
                                                <option value="San Andrés y Providencia">San Andrés y Providencia
                                                </option>
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
                                            <label for="ciudad" class="form-label">13. Ciudad <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="ciudad" name="ciudad" required>
                                        </div>

                                        <!-- Teléfono -->
                                        <div class="col-md-6">
                                            <label for="telefono" class="form-label">14. Teléfono <span
                                                    class="text-danger">*</span></label>
                                            <input type="tel" class="form-control" id="telefono" name="telefono"
                                                required>
                                        </div>

                                        <!-- Email -->
                                        <div class="col-md-6">
                                            <label for="email_contacto" class="form-label">15. E-mail <span
                                                    class="text-danger">*</span></label>
                                            <input type="email" class="form-control" id="email_contacto"
                                                name="email_contacto" required>
                                        </div>

                                        <!-- Código Postal -->
                                        <div class="col-md-6">
                                            <label for="codigo_postal" class="form-label">16. Código Postal</label>
                                            <input type="text" class="form-control" id="codigo_postal"
                                                name="codigo_postal">
                                        </div>

                                        <!-- Años de experiencia -->
                                        <div class="col-md-6">
                                            <label for="anios_experiencia" class="form-label">17. Años de experiencia en
                                                el
                                                mercado <span class="text-danger">*</span></label>
                                            <input type="number" class="form-control" id="anios_experiencia"
                                                name="anios_experiencia" min="0" required>
                                        </div>

                                        <!-- Es Autoretenedor -->
                                        <div class="col-md-6">
                                            <label for="autoretenedor" class="form-label">18. Es Autoretenedor <span
                                                    class="text-danger">*</span></label>
                                            <select class="form-select" id="autoretenedor" name="autoretenedor"
                                                required>
                                                <option value="" selected disabled>Seleccione...</option>
                                                <option value="SI">SI</option>
                                                <option value="NO">NO</option>
                                            </select>
                                        </div>

                                        <!-- Es Gran Contribuyente -->
                                        <div class="col-md-6">
                                            <label for="gran_contribuyente" class="form-label">19. Es Gran Contribuyente
                                                <span class="text-danger">*</span></label>
                                            <select class="form-select" id="gran_contribuyente"
                                                name="gran_contribuyente" required
                                                onchange="toggleCamposContribuyente()">
                                                <option value="" selected disabled>Seleccione...</option>
                                                <option value="SI">SI</option>
                                                <option value="NO">NO</option>
                                            </select>
                                        </div>

                                        <!-- No. Resolución - Gran contribuyente (condicional) -->
                                        <div class="col-md-6" id="grupo_resolucion" style="display: none;">
                                            <label for="numero_resolucion" class="form-label">20. No. Resolución - Gran
                                                contribuyente <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="numero_resolucion"
                                                name="numero_resolucion">
                                        </div>

                                        <!-- Fecha de Resolución (condicional) -->
                                        <div class="col-md-6" id="grupo_fecha_resolucion" style="display: none;">
                                            <label for="fecha_resolucion" class="form-label">21. Fecha de Resolución
                                                <span class="text-danger">*</span></label>
                                            <input type="date" class="form-control" id="fecha_resolucion"
                                                name="fecha_resolucion">
                                        </div>

                                        <!-- Tipo de empresa -->
                                        <div class="col-md-6">
                                            <label for="tipo_empresa" class="form-label">22. Tipo de empresa <span
                                                    class="text-danger">*</span></label>
                                            <select class="form-select" id="tipo_empresa" name="tipo_empresa" required>
                                                <option value="" selected disabled>Seleccione...</option>
                                                <option value="Privada">Privada</option>
                                                <option value="Publica">Pública</option>
                                                <option value="Mixta">Mixta</option>
                                            </select>
                                        </div>

                                        <!-- Tipo de Sociedad -->
                                        <div class="col-md-6">
                                            <label for="tipo_sociedad" class="form-label">23. Tipo de Sociedad <span
                                                    class="text-danger">*</span></label>
                                            <select class="form-select" id="tipo_sociedad" name="tipo_sociedad"
                                                required>
                                                <option value="" selected disabled>Seleccione...</option>
                                                <option value="S.A.S.">S.A.S. – Sociedad por Acciones Simplificada
                                                </option>
                                                <option value="S.A.">S.A. – Sociedad Anónima</option>
                                                <option value="Ltda.">Ltda. – Sociedad de Responsabilidad Limitada
                                                </option>
                                                <option value="S. en C.">S. en C. – Sociedad en Comandita</option>
                                                <option value="S. en C.A.">S. en C.A. – Sociedad en Comandita por
                                                    Acciones
                                                </option>
                                                <option value="E.U.">E.U. – Empresa Unipersonal</option>
                                                <option value="Cooperativas">Cooperativas y Asociaciones Mutuales
                                                </option>
                                                <option value="Persona Juridica">Persona Juridica</option>
                                                <option value="Persona Natural">Persona Natural</option>
                                            </select>
                                        </div>

                                        <!-- Fecha de constitución -->
                                        <div class="col-md-6">
                                            <label for="fecha_constitucion" class="form-label">24. Fecha de la
                                                constitución
                                                de la persona jurídica <span class="text-danger">*</span></label>
                                            <input type="date" class="form-control" id="fecha_constitucion"
                                                name="fecha_constitucion" required>
                                        </div>

                                        <!-- Productos Ofrecidos -->
                                        <div class="col-md-6">
                                            <label for="productos_ofrecidos" class="form-label">
                                                25. Productos Ofrecidos (Objeto contractual) <span
                                                    class="text-danger">*</span>
                                            </label>
                                            <select class="form-select" id="productos_ofrecidos"
                                                name="productos_ofrecidos" required
                                                onchange="toggleOtroCampo(this, 'grupo_otros_productos')">
                                                <option value="" selected disabled>Seleccione...</option>
                                                <option value="Materiales de embalaje">Materiales de embalaje</option>
                                                <option value="Servicio de transporte">Servicio de transporte</option>
                                                <option value="Servicios tecnológicos">Servicios tecnológicos</option>
                                                <option value="Servicios aduaneros">Servicios aduaneros</option>
                                                <option value="Servicios de almacenamiento">Servicios de almacenamiento
                                                </option>
                                                <option value="Otras">Otras</option>
                                            </select>
                                        </div>
                                        <div class="col-md-12" id="grupo_otros_productos" style="display: none;">
                                            <label for="otros_productos" class="form-label">
                                                Especifique otros productos <span class="text-danger">*</span>
                                            </label>
                                            <input type="text" class="form-control" id="otros_productos"
                                                name="otros_productos">
                                        </div>

                                        <!-- Campo "Otras" productos (condicional) -->
                                        <div class="col-md-12" id="grupo_otros_productos" style="display: none;">
                                            <label for="otros_productos" class="form-label">Especifique otros productos
                                                <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="otros_productos"
                                                name="otros_productos">
                                        </div>

                                        <!-- Zona franca -->
                                        <div class="col-md-6">
                                            <label for="zona_franca" class="form-label">26. Se encuentra en una zona
                                                franca
                                                <span class="text-danger">*</span></label>
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
                                <button type="button" class="btn btn-secondary"
                                    onclick="mostrarSeccion(seccionAnteriorA6)">Anterior</button>
                                <button type="button" class="btn btn-primary"
                                    onclick="validarSeccionGenerico(6,7)">Siguiente</button>
                            </div>
                        </div>


                        <!-- Sección 7: Información del Representante Legal Principal -->
                        <div class="tab-pane fade" id="pills-seccion7" role="tabpanel"
                            aria-labelledby="pills-seccion7-tab">
                            <div class="card">
                                <div class="card-header bg-primary text-white">
                                    <h5 class="card-title mb-0">INFORMACIÓN DEL REPRESENTANTE LEGAL PRINCIPAL</h5>
                                </div>
                                <div class="card-body">
                                    <div class="alert alert-warning">
                                        <i class="fas fa-exclamation-circle"></i> Nota: Esta pregunta es obligatoria,
                                        por lo
                                        tanto se debe responder al menos una fila completa, de lo contrario el sistema
                                        no
                                        dejará continuar.
                                    </div>

                                    <div class="row g-3">
                                        <!-- Nombres y Apellidos -->
                                        <div class="col-md-12">
                                            <label for="representante_nombres" class="form-label">27. Nombres y
                                                Apellidos
                                                <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="representante_nombres"
                                                name="representante_nombres" required>
                                        </div>

                                        <!-- Tipo de Identificación -->
                                        <div class="col-md-6">
                                            <label for="representante_tipo_id" class="form-label">28. Tipo de
                                                Identificación
                                                <span class="text-danger">*</span></label>
                                            <select class="form-select" id="representante_tipo_id"
                                                name="representante_tipo_id" required>
                                                <option value="" selected disabled>Seleccione...</option>
                                                <option value="Cedula">Cédula</option>
                                                <option value="Cedula de Extranjería">Cédula de Extranjería</option>
                                                <option value="Diplomático">Diplomático</option>
                                                <option value="Documento de identidad Extranjeros">Documento de
                                                    identidad
                                                    Extranjeros</option>
                                                <option value="Identidad Fiscal Extranjero">Identidad Fiscal Extranjero
                                                </option>
                                                <option value="Nit">Nit</option>
                                                <option value="Nit de Personas Naturales">Nit de Personas Naturales
                                                </option>
                                                <option value="Nuip">Nuip</option>
                                                <option value="Pasaporte">Pasaporte</option>
                                                <option value="Pasaporte ONU">Pasaporte ONU</option>
                                            </select>
                                        </div>

                                        <!-- Número de Identificación -->
                                        <div class="col-md-6">
                                            <label for="representante_numero_id" class="form-label">29. Número de
                                                Identificación <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="representante_numero_id"
                                                name="representante_numero_id" required pattern="[0-9]+"
                                                title="El valor debe ser un número">
                                        </div>

                                        <!-- Tipo de representante legal -->
                                        <div class="col-md-6">
                                            <label for="representante_tipo" class="form-label">30. Tipo de representante
                                                legal <span class="text-danger">*</span></label>
                                            <select class="form-select" id="representante_tipo"
                                                name="representante_tipo" required
                                                onchange="toggleOtroCampo(this, 'grupo_otro_representante')">
                                                <option value="" selected disabled>Seleccione...</option>
                                                <option value="Representante Legal Principal">Representante Legal
                                                    Principal
                                                </option>
                                                <option value="Representante Suplente">Representante Suplente</option>
                                                <option value="Apoderado Legal">Apoderado Legal</option>
                                                <option value="Gerente General">Gerente General</option>
                                                <option value="Otras">Otras</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6" id="grupo_otro_representante" style="display: none;">
                                            <label for="otro_tipo_representante" class="form-label">Especifique otro
                                                tipo de
                                                representante <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="otro_tipo_representante"
                                                name="otro_tipo_representante">
                                        </div>

                                        <!-- Campo "Otras" tipo de representante (condicional) -->
                                        <div class="col-md-6" id="grupo_otro_representante" style="display: none;">
                                            <label for="otro_tipo_representante" class="form-label">Especifique otro
                                                tipo de
                                                representante <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="otro_tipo_representante"
                                                name="otro_tipo_representante">
                                        </div>

                                        <!-- Maneja Recursos públicos -->
                                        <div class="col-md-6">
                                            <label for="maneja_recursos_publicos" class="form-label">31. ¿Maneja
                                                Recursos
                                                públicos? <span class="text-danger">*</span></label>
                                            <select class="form-select" id="maneja_recursos_publicos"
                                                name="maneja_recursos_publicos" required>
                                                <option value="" selected disabled>Seleccione...</option>
                                                <option value="SI">SI</option>
                                                <option value="NO">NO</option>
                                            </select>
                                        </div>

                                        <!-- Goza de reconocimiento publico -->
                                        <div class="col-md-6">
                                            <label for="reconocimiento_publico" class="form-label">32. ¿Goza de
                                                reconocimiento público? <span class="text-danger">*</span></label>
                                            <select class="form-select" id="reconocimiento_publico"
                                                name="reconocimiento_publico" required>
                                                <option value="" selected disabled>Seleccione...</option>
                                                <option value="SI">SI</option>
                                                <option value="NO">NO</option>
                                            </select>
                                        </div>

                                        <!-- Ostenta algún grado de poder publico -->
                                        <div class="col-md-6">
                                            <label for="poder_publico" class="form-label">33. ¿Ostenta algún grado de
                                                poder
                                                público? <span class="text-danger">*</span></label>
                                            <select class="form-select" id="poder_publico" name="poder_publico"
                                                required>
                                                <option value="" selected disabled>Seleccione...</option>
                                                <option value="SI">SI</option>
                                                <option value="NO">NO</option>
                                            </select>
                                        </div>

                                        <!-- Es servidor publico -->
                                        <div class="col-md-6">
                                            <label for="servidor_publico" class="form-label">34. ¿Es servidor público?
                                                <span class="text-danger">*</span></label>
                                            <select class="form-select" id="servidor_publico" name="servidor_publico"
                                                required>
                                                <option value="" selected disabled>Seleccione...</option>
                                                <option value="SI">SI</option>
                                                <option value="NO">NO</option>
                                            </select>
                                        </div>

                                        <!-- Vinculo con persona políticamente expuesta -->
                                        <div class="col-md-6">
                                            <label for="vinculo_ppe" class="form-label">35. ¿Existe algún vínculo entre
                                                usted y una persona políticamente expuesta? <span
                                                    class="text-danger">*</span></label>
                                            <select class="form-select" id="vinculo_ppe" name="vinculo_ppe" required>
                                                <option value="" selected disabled>Seleccione...</option>
                                                <option value="SI">SI</option>
                                                <option value="NO">NO</option>
                                            </select>
                                        </div>

                                        <!-- Nacionalidad -->
                                        <div class="col-md-6">
                                            <label for="representante_nacionalidad" class="form-label">36. Nacionalidad
                                                <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="representante_nacionalidad"
                                                name="representante_nacionalidad" required>
                                        </div>

                                        <!-- País domicilio principal -->
                                        <div class="col-md-6">
                                            <label for="representante_pais_domicilio" class="form-label">37. País
                                                domicilio
                                                principal <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="representante_pais_domicilio"
                                                name="representante_pais_domicilio" required>
                                        </div>

                                        <!-- Email -->
                                        <div class="col-md-6">
                                            <label for="representante_email" class="form-label">38. Email <span
                                                    class="text-danger">*</span></label>
                                            <input type="email" class="form-control" id="representante_email"
                                                name="representante_email" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Botones de navegación -->
                            <div class="d-flex justify-content-between mt-4">
                                <button type="button" class="btn btn-secondary"
                                    onclick="mostrarSeccion(6)">Anterior</button>
                                <button type="button" class="btn btn-primary"
                                    onclick="validarSeccionGenerico(7,8)">Siguiente</button>
                            </div>
                        </div>

                        <!-- Sección 8: Personas de Contacto -->
                        <div class="tab-pane fade" id="pills-seccion8" role="tabpanel"
                            aria-labelledby="pills-seccion8-tab">
                            <div class="card">
                                <div class="card-header bg-primary text-white">
                                    <h5 class="card-title mb-0">PERSONAS DE CONTACTO</h5>
                                </div>
                                <div class="card-body">
                                    <div class="alert alert-warning">
                                        <i class="fas fa-exclamation-circle"></i> Nota: Esta pregunta es obligatoria,
                                        por lo
                                        tanto se debe responder al menos una fila completa, de lo contrario el sistema
                                        no
                                        dejará continuar.
                                    </div>

                                    <div id="contactos-container">
                                        <!-- Contenedor dinámico para múltiples contactos -->
                                        <div class="contacto-form row g-3 mb-4 border-bottom pb-3">
                                            <div class="col-md-12">
                                                <label class="form-label">39. Nombres y Apellidos <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="contacto_nombres[]"
                                                    required>
                                            </div>

                                            <div class="col-md-6">
                                                <label class="form-label">40. Cargo <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="contacto_cargo[]"
                                                    required>
                                            </div>

                                            <div class="col-md-6">
                                                <label class="form-label">41. Teléfono/Celular <span
                                                        class="text-danger">*</span></label>
                                                <input type="tel" class="form-control" name="contacto_telefono[]"
                                                    required>
                                            </div>

                                            <div class="col-md-12">
                                                <label class="form-label">42. E-mail <span
                                                        class="text-danger">*</span></label>
                                                <input type="email" class="form-control" name="contacto_email[]"
                                                    required>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="button" class="btn btn-secondary mt-3" onclick="agregarContacto()">
                                        <i class="fas fa-plus"></i> Agregar otra persona de contacto
                                    </button>
                                </div>
                            </div>

                            <!-- Botones de navegación -->
                            <div class="d-flex justify-content-between mt-4">
                                <button type="button" class="btn btn-secondary"
                                    onclick="mostrarSeccion(7)">Anterior</button>
                                <button type="button" class="btn btn-primary"
                                    onclick="validarSeccionGenerico(8,9)">Siguiente</button>
                            </div>
                        </div>



                        <!-- Sección 9: Conocimiento Mejorado de PEP -->
                        <div class="tab-pane fade" id="pills-seccion9" role="tabpanel"
                            aria-labelledby="pills-seccion9-tab">
                            <div class="card">
                                <div class="card-header bg-primary text-white">
                                    <h5 class="card-title mb-0">CONOCIMIENTO MEJORADO DE PERSONA EXPUESTA POLÍTICAMENTE
                                        (PEP)</h5>
                                </div>
                                <div class="card-body">
                                    <div class="alert alert-info mb-4">
                                        <p><strong>DEFINICIÓN:</strong> PERSONA EXPUESTA POLÍTICAMENTE (PEP): son
                                            servidores
                                            públicos de cualquier sistema de nomenclatura y clasificación de empleos de
                                            la
                                            administración pública nacional y territorial, cuando en los cargos que
                                            ocupen,
                                            tengan en las funciones del área a la que pertenecen o en las de ficha del
                                            empleo que ocupan, bajo su responsabilidad directa o por delegación, la
                                            dirección general, de formulación de políticas institucionales y de adopción
                                            de
                                            planes, programas y proyectos, y el manejo directo de bienes, dineros o
                                            valores
                                            del estado.</p>
                                        <p class="mb-0">Estos pueden ser a través de ordenación de gasto, contratación
                                            pública, gerencia de proyectos de inversión, pagos, liquidaciones,
                                            administración de bienes muebles e inmuebles. Incluye también a las PEP
                                            Extranjeras y las PEP de organizaciones Internacionales. Estos terceros
                                            ostentaran esa calidad (activo) durante el ejercicio de su cargo y por dos
                                            (2)
                                            años más a su dejación. Ver Decreto 1081 de 2015 (Modificado por Decreto
                                            1674 de
                                            2016) y Decreto 830 del 2021</p>
                                    </div>

                                    <div class="alert alert-warning">
                                        <i class="fas fa-exclamation-circle"></i> Nota: Esta pregunta es obligatoria,
                                        por lo
                                        tanto se debe responder al menos una fila completa, de lo contrario el sistema
                                        no
                                        dejará continuar.
                                    </div>

                                    <div class="row g-3">
                                        <!-- Pregunta 43 -->
                                        <div class="col-md-12">
                                            <label for="pep_recursos_publicos" class="form-label">43. ¿Usted o alguno de
                                                los
                                                Representantes Legales, miembros de la Junta Directiva, Revisor Fiscal,
                                                Accionista/Socio; manejan o han manejado recursos públicos en los
                                                últimos 2
                                                años? <span class="text-danger">*</span></label>
                                            <select class="form-select" id="pep_recursos_publicos"
                                                name="pep_recursos_publicos" required onchange="toggleCamposPEP()">
                                                <option value="" selected disabled>Seleccione...</option>
                                                <option value="SI">SI</option>
                                                <option value="NO">NO</option>
                                                <option value="N/A">N/A</option>
                                            </select>
                                        </div>

                                        <!-- Pregunta 44 -->
                                        <div class="col-md-12">
                                            <label for="pep_cargo_publico" class="form-label">44. ¿Usted o alguno de los
                                                Representantes Legales, miembros de la Junta Directiva, Revisor Fiscal,
                                                Accionista/Socio; tiene o ha desempeñado un cargo público en los últimos
                                                dos
                                                años? <span class="text-danger">*</span></label>
                                            <select class="form-select" id="pep_cargo_publico" name="pep_cargo_publico"
                                                required onchange="toggleCamposPEP()">
                                                <option value="" selected disabled>Seleccione...</option>
                                                <option value="SI">SI</option>
                                                <option value="NO">NO</option>
                                                <option value="N/A">N/A</option>
                                            </select>
                                        </div>

                                        <!-- Pregunta 45 -->
                                        <div class="col-md-12">
                                            <label for="pep_relacion" class="form-label">45. ¿Usted o alguno de los
                                                Representantes Legales, miembros de la Junta Directiva, Revisor Fiscal,
                                                Accionista/Socio; es familiar, asesor o cercano a una persona que cumpla
                                                con
                                                las características descritas en la definición de PEP y en las preguntas
                                                1 y
                                                2? <span class="text-danger">*</span></label>
                                            <select class="form-select" id="pep_relacion" name="pep_relacion" required
                                                onchange="toggleCamposPEP()">
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
                                                <label for="pep_nombres" class="form-label">46. Nombres y apellidos de
                                                    la
                                                    PEP <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="pep_nombres"
                                                    name="pep_nombres">
                                            </div>

                                            <!-- Pregunta 47 -->
                                            <div class="col-md-6">
                                                <label for="pep_tipo_identificacion" class="form-label">47. Tipo de
                                                    identificación <span class="text-danger">*</span></label>
                                                <select class="form-select" id="pep_tipo_identificacion"
                                                    name="pep_tipo_identificacion"
                                                    onchange="toggleOtroCampo(this, 'grupo_otro_tipo_pep')">
                                                    <option value="" selected disabled>Seleccione...</option>
                                                    <option value="Cedula">Cédula</option>
                                                    <option value="Cedula de Extranjería">Cedula de Extranjería</option>
                                                    <option value="Diplomático">Diplomático</option>
                                                    <option value="Documento de identidad de extranjero">Documento de
                                                        identidad de extranjero</option>
                                                    <option value="Identidad Fiscal de Extranjero">Identidad Fiscal de
                                                        Extranjero</option>
                                                    <option value="Nit">Nit</option>
                                                    <option value="Nit de Personas Naturales">Nit de Personas Naturales
                                                    </option>
                                                    <option value="Pasaporte">Pasaporte</option>
                                                    <option value="Pasaporte ONU">Pasaporte ONU</option>
                                                    <option value="Otras">Otras</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6" id="grupo_otro_tipo_pep" style="display: none;">
                                                <label for="pep_otro_tipo_identificacion" class="form-label">Especifique
                                                    otro tipo <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control"
                                                    id="pep_otro_tipo_identificacion"
                                                    name="pep_otro_tipo_identificacion">
                                            </div>

                                            <!-- Campo para otro tipo de identificación PEP -->
                                            <div class="col-md-6" id="grupo_otro_tipo_pep" style="display: none;">
                                                <label for="pep_otro_tipo_identificacion" class="form-label">Especifique
                                                    otro tipo <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control"
                                                    id="pep_otro_tipo_identificacion"
                                                    name="pep_otro_tipo_identificacion">
                                            </div>

                                            <!-- Pregunta 48 -->
                                            <div class="col-md-6">
                                                <label for="pep_numero_identificacion" class="form-label">48. Número de
                                                    identificación <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="pep_numero_identificacion"
                                                    name="pep_numero_identificacion">
                                            </div>

                                            <!-- Pregunta 49 -->
                                            <div class="col-md-6">
                                                <label for="pep_pais_domicilio" class="form-label">49. País domicilio
                                                    <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="pep_pais_domicilio"
                                                    name="pep_pais_domicilio">
                                            </div>

                                            <!-- Pregunta 50 -->
                                            <div class="col-md-6">
                                                <label for="pep_cargo" class="form-label">50. Cargo <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="pep_cargo" name="pep_cargo">
                                            </div>

                                            <!-- Pregunta 51 -->
                                            <div class="col-md-6">
                                                <label for="pep_entidad_publica" class="form-label">51. Nombre de
                                                    entidad
                                                    pública <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="pep_entidad_publica"
                                                    name="pep_entidad_publica">
                                            </div>

                                            <!-- Pregunta 52 -->
                                            <div class="col-md-6">
                                                <label for="pep_activo" class="form-label">52. Activo <span
                                                        class="text-danger">*</span></label>
                                                <select class="form-select" id="pep_activo" name="pep_activo">
                                                    <option value="" selected disabled>Seleccione...</option>
                                                    <option value="SI">SI</option>
                                                    <option value="NO">NO</option>
                                                    <option value="N/A">N/A</option>
                                                </select>
                                            </div>

                                            <!-- Pregunta 53 -->
                                            <div class="col-md-6">
                                                <label for="pep_fecha_desvinculacion" class="form-label">53. Fecha
                                                    desvinculación <span class="text-danger">*</span></label>
                                                <input type="date" class="form-control" id="pep_fecha_desvinculacion"
                                                    name="pep_fecha_desvinculacion">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Botones de navegación -->
                            <div class="d-flex justify-content-between mt-4">
                                <button type="button" class="btn btn-secondary"
                                    onclick="mostrarSeccion(8)">Anterior</button>
                                <button type="button" class="btn btn-primary"
                                    onclick="validarSeccionGenerico(9,10)">Siguiente</button>
                            </div>
                        </div>


                        <!-- Sección 10: Conocimiento de Beneficiarios Finales -->
                        <div class="tab-pane fade" id="pills-seccion10" role="tabpanel"
                            aria-labelledby="pills-seccion10-tab">
                            <div class="card">
                                <div class="card-header bg-primary text-white">
                                    <h5 class="card-title mb-0">CONOCIMIENTO DE BENEFICIARIOS FINALES</h5>
                                </div>
                                <div class="card-body">
                                    <div class="alert alert-info mb-4">
                                        <p><strong>DEFINICIÓN:</strong> BENEFICIARIO FINAL: Es la(s) persona(s)
                                            natural(es)
                                            que finalmente posee(n) o controla(n) a un cliente o a la persona natural en
                                            cuyo nombre se realiza una transacción. Incluye también a la(s) persona(s)
                                            que
                                            ejerzan el control efectivo y/o final, directa o indirectamente, sobre una
                                            persona jurídica.</p>
                                    </div>

                                    <div class="alert alert-warning">
                                        <i class="fas fa-exclamation-circle"></i> Nota: Esta pregunta es obligatoria,
                                        por lo
                                        tanto se debe responder al menos una fila completa, de lo contrario el sistema
                                        no
                                        dejará continuar.
                                    </div>

                                    <div class="row g-3">
                                        <!-- Pregunta 54 -->
                                        <div class="col-md-12">
                                            <label for="sistema_conocimiento_terceros" class="form-label">54. ¿Cuenta
                                                con un
                                                sistema/metodología para el conocimiento de sus
                                                terceros/contrapartes/asociados de negocio y entre ellos a sus socios
                                                y/o
                                                accionistas? <span class="text-danger">*</span></label>
                                            <select class="form-select" id="sistema_conocimiento_terceros"
                                                name="sistema_conocimiento_terceros" required>
                                                <option value="" selected disabled>Seleccione...</option>
                                                <option value="SI">SI</option>
                                                <option value="NO">NO</option>
                                                <option value="N/A">N/A</option>
                                            </select>
                                        </div>

                                        <!-- Pregunta 55 -->
                                        <div class="col-md-12">
                                            <label for="politicas_identificacion" class="form-label">55. ¿Cuenta con
                                                políticas establecidas para la identificación de beneficiarios finales?
                                                <span class="text-danger">*</span></label>
                                            <select class="form-select" id="politicas_identificacion"
                                                name="politicas_identificacion" required>
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
                                <button type="button" class="btn btn-secondary"
                                    onclick="mostrarSeccion(9)">Anterior</button>
                                <button type="button" class="btn btn-primary"
                                    onclick="validarSeccionGenerico(10,11)">Siguiente</button>
                            </div>
                        </div>


                        <!-- Sección 11: Información Financiera -->
                        <div class="tab-pane fade" id="pills-seccion11" role="tabpanel"
                            aria-labelledby="pills-seccion11-tab">
                            <div class="card">
                                <div class="card-header bg-primary text-white">
                                    <h5 class="card-title mb-0">INFORMACIÓN FINANCIERA</h5>
                                </div>
                                <div class="card-body">
                                    <div class="alert alert-warning">
                                        <i class="fas fa-exclamation-circle"></i> Nota: Esta pregunta es obligatoria,
                                        por lo
                                        tanto se debe responder al menos una fila completa, de lo contrario el sistema
                                        no
                                        dejará continuar.
                                    </div>

                                    <div class="row g-3">
                                        <!-- Pregunta 56 -->
                                        <div class="col-md-12">
                                            <label for="actividad_economica" class="form-label">56. Describir actividad
                                                económica principal <span class="text-danger">*</span></label>
                                            <textarea class="form-control" id="actividad_economica"
                                                name="actividad_economica" rows="3" required></textarea>
                                        </div>

                                        <!-- Pregunta 57 -->
                                        <div class="col-md-6">
                                            <label for="sector_economico" class="form-label">57. Sector Económico <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="sector_economico"
                                                name="sector_economico" required>
                                        </div>

                                        <!-- Pregunta 58 -->
                                        <div class="col-md-6">
                                            <label for="divisa_reporte" class="form-label">58. Divisa del Reporte <span
                                                    class="text-danger">*</span></label>
                                            <select class="form-select" id="divisa_reporte" name="divisa_reporte"
                                                required>
                                                <option value="" selected disabled>Seleccione...</option>
                                                <option value="USD">USD</option>
                                                <option value="EUR">EUR</option>
                                                <option value="COP">COP</option>
                                            </select>
                                        </div>

                                        <!-- Pregunta 59 -->
                                        <div class="col-md-6">
                                            <label for="otros_ingresos" class="form-label">59. Total, otros ingresos
                                                <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="otros_ingresos"
                                                name="otros_ingresos" required>
                                        </div>

                                        <!-- Pregunta 60 -->
                                        <div class="col-md-6">
                                            <label for="costos_gastos" class="form-label">60. Total, Costos y Gastos
                                                <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="costos_gastos"
                                                name="costos_gastos" required>
                                        </div>

                                        <div class="col-12">
                                            <h6 class="mt-4 mb-3">61. Por favor indicar Información financiera con corte
                                                a
                                                31 de diciembre del año inmediatamente anterior, expresada en miles</h6>
                                        </div>

                                        <!-- Pregunta 61 -->
                                        <div class="col-md-6">
                                            <label for="total_activos" class="form-label">Total Activos <span
                                                    class="text-danger">*</span></label>
                                            <input type="number" class="form-control" id="total_activos"
                                                name="total_activos" required min="0" step="1">
                                        </div>

                                        <!-- Pregunta 62 -->
                                        <div class="col-md-6">
                                            <label for="total_pasivos" class="form-label">Total Pasivos <span
                                                    class="text-danger">*</span></label>
                                            <input type="number" class="form-control" id="total_pasivos"
                                                name="total_pasivos" required min="0" step="1">
                                        </div>

                                        <!-- Pregunta 63 -->
                                        <div class="col-md-6">
                                            <label for="total_patrimonio" class="form-label">Total Patrimonio <span
                                                    class="text-danger">*</span></label>
                                            <input type="number" class="form-control" id="total_patrimonio"
                                                name="total_patrimonio" required min="0" step="1">
                                        </div>

                                        <!-- Pregunta 64 -->
                                        <div class="col-md-6">
                                            <label for="total_ingresos" class="form-label">Total Ingresos act. principal
                                                <span class="text-danger">*</span></label>
                                            <input type="number" class="form-control" id="total_ingresos"
                                                name="total_ingresos" required min="0" step="1">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Botones de navegación -->
                            <div class="d-flex justify-content-between mt-4">
                                <button type="button" class="btn btn-secondary"
                                    onclick="mostrarSeccion(10)">Anterior</button>
                                <button type="button" class="btn btn-primary"
                                    onclick="validarSeccionGenerico(11,12)">Siguiente</button>
                            </div>
                        </div>


                        <!-- Sección 12: Operaciones Internacionales -->
                        <div class="tab-pane fade" id="pills-seccion12" role="tabpanel"
                            aria-labelledby="pills-seccion12-tab">
                            <div class="card">
                                <div class="card-header bg-primary text-white">
                                    <h5 class="card-title mb-0">OPERACIONES INTERNACIONALES</h5>
                                </div>
                                <div class="card-body">
                                    <div class="alert alert-warning">
                                        <i class="fas fa-exclamation-circle"></i> Nota: Esta pregunta es obligatoria,
                                        por lo
                                        tanto se debe responder al menos una fila completa, de lo contrario el sistema
                                        no
                                        dejará continuar.
                                    </div>

                                    <div class="row g-3">
                                        <!-- Pregunta 65 -->
                                        <div class="col-md-12">
                                            <label for="operaciones_internacionales" class="form-label">65. ¿Realiza
                                                operaciones internacionales o en moneda extranjera? <span
                                                    class="text-danger">*</span></label>
                                            <select class="form-select" id="operaciones_internacionales"
                                                name="operaciones_internacionales" required
                                                onchange="toggleOperacionesInternacionales()">
                                                <option value="" selected disabled>Seleccione...</option>
                                                <option value="SI">SI</option>
                                                <option value="NO">NO</option>
                                                <option value="N/A">N/A</option>
                                            </select>
                                        </div>

                                        <!-- Campos condicionales para operaciones internacionales -->
                                        <div id="detalle_operaciones_internacionales" style="display: none;">
                                            <div class="col-12 mt-3 mb-2">
                                                <h6>66. Si marcó SI favor diligenciar la siguiente información (de lo
                                                    contrario indicar N/A):</h6>
                                            </div>

                                            <!-- Pregunta 66 -->
                                            <div class="col-md-6">
                                                <label for="importaciones" class="form-label">Importaciones <span
                                                        class="text-danger">*</span></label>
                                                <select class="form-select" id="importaciones" name="importaciones">
                                                    <option value="" selected disabled>Seleccione...</option>
                                                    <option value="SI">SI</option>
                                                    <option value="NO">NO</option>
                                                    <option value="N/A">N/A</option>
                                                </select>
                                            </div>

                                            <!-- Pregunta 67 -->
                                            <div class="col-md-6">
                                                <label for="exportaciones" class="form-label">Exportaciones <span
                                                        class="text-danger">*</span></label>
                                                <select class="form-select" id="exportaciones" name="exportaciones">
                                                    <option value="" selected disabled>Seleccione...</option>
                                                    <option value="SI">SI</option>
                                                    <option value="NO">NO</option>
                                                    <option value="N/A">N/A</option>
                                                </select>
                                            </div>

                                            <!-- Pregunta 68 -->
                                            <div class="col-md-6">
                                                <label for="inversiones" class="form-label">Inversiones <span
                                                        class="text-danger">*</span></label>
                                                <select class="form-select" id="inversiones" name="inversiones">
                                                    <option value="" selected disabled>Seleccione...</option>
                                                    <option value="SI">SI</option>
                                                    <option value="NO">NO</option>
                                                    <option value="N/A">N/A</option>
                                                </select>
                                            </div>

                                            <!-- Pregunta 69 -->
                                            <div class="col-md-6">
                                                <label for="pago_servicios" class="form-label">Pago de Servicios <span
                                                        class="text-danger">*</span></label>
                                                <select class="form-select" id="pago_servicios" name="pago_servicios">
                                                    <option value="" selected disabled>Seleccione...</option>
                                                    <option value="SI">SI</option>
                                                    <option value="NO">NO</option>
                                                    <option value="N/A">N/A</option>
                                                </select>
                                            </div>

                                            <!-- Pregunta 70 -->
                                            <div class="col-md-12">
                                                <label for="otra_operacion" class="form-label">70. Otra, ¿Cuál? <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="otra_operacion"
                                                    name="otra_operacion">
                                            </div>

                                            <!-- Pregunta 71 -->
                                            <div class="col-md-12">
                                                <label for="tipo_mercancia" class="form-label">71. Indicar tipo de
                                                    mercancías importadas y/o exportadas <span
                                                        class="text-danger">*</span></label>
                                                <textarea class="form-control" id="tipo_mercancia" name="tipo_mercancia"
                                                    rows="2"></textarea>
                                            </div>

                                            <!-- Pregunta 72 -->
                                            <div class="col-md-12">
                                                <label for="obligaciones_tributarias" class="form-label">72. ¿Es usted
                                                    sujeto de obligaciones tributarias en otro país o grupo de países?
                                                    <span class="text-danger">*</span></label>
                                                <select class="form-select" id="obligaciones_tributarias"
                                                    name="obligaciones_tributarias">
                                                    <option value="" selected disabled>Seleccione...</option>
                                                    <option value="SI">SI</option>
                                                    <option value="NO">NO</option>
                                                    <option value="N/A">N/A</option>
                                                </select>
                                            </div>

                                            <!-- Preguntas 73-77 -->
                                            <div class="col-12 mt-4">
                                                <h6>73. Nombres y apellidos o razón social (Relacionar a continuación
                                                    personas o empresas beneficiarias finales de las operaciones de
                                                    comercio
                                                    exterior o Indicar N/A si no aplica)</h6>
                                            </div>

                                            <div class="row g-3">
                                                <!-- Pregunta 73 -->
                                                <div class="col-md-6">
                                                    <label for="beneficiario_nombre" class="form-label">Nombres y
                                                        apellidos
                                                        o razón social <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="beneficiario_nombre"
                                                        name="beneficiario_nombre">
                                                </div>

                                                <!-- Pregunta 74 -->
                                                <div class="col-md-6">
                                                    <label for="beneficiario_tipo_id" class="form-label">74. Tipo de
                                                        identificación <span class="text-danger">*</span></label>
                                                    <select class="form-select" id="beneficiario_tipo_id"
                                                        name="beneficiario_tipo_id"
                                                        onchange="toggleOtroTipoIdentificacion('beneficiario')">
                                                        <option value="" selected disabled>Seleccione...</option>
                                                        <option value="Cedula Ciudadanía">Cédula de Ciudadanía</option>
                                                        <option value="Cedula de Extranjería">Cédula de Extranjería
                                                        </option>
                                                        <option value="Diplomático">Diplomático</option>
                                                        <option value="Documento de identidad Extranjeros">Documento de
                                                            identidad Extranjeros</option>
                                                        <option value="Identidad Fiscal Extranjero">Identidad Fiscal
                                                            Extranjero</option>
                                                        <option value="Nit">Nit</option>
                                                        <option value="Nit de Personas Naturales">Nit de Personas
                                                            Naturales
                                                        </option>
                                                        <option value="Pasaporte">Pasaporte</option>
                                                        <option value="Pasaporte ONU">Pasaporte ONU</option>
                                                        <option value="Otras">Otras</option>
                                                    </select>
                                                </div>

                                                <!-- Campo para otro tipo de identificación -->
                                                <div class="col-md-6" id="grupo_otro_tipo_beneficiario"
                                                    style="display: none;">
                                                    <label for="beneficiario_otro_tipo" class="form-label">Especifique
                                                        otro
                                                        tipo <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="beneficiario_otro_tipo"
                                                        name="beneficiario_otro_tipo">
                                                </div>

                                                <!-- Pregunta 75 -->
                                                <div class="col-md-6">
                                                    <label for="beneficiario_numero_id" class="form-label">75. Número de
                                                        identificación <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="beneficiario_numero_id"
                                                        name="beneficiario_numero_id">
                                                </div>

                                                <!-- Pregunta 76 -->
                                                <div class="col-md-6">
                                                    <label for="beneficiario_pais" class="form-label">76. País domicilio
                                                        <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="beneficiario_pais"
                                                        name="beneficiario_pais">
                                                </div>

                                                <!-- Pregunta 77 -->
                                                <div class="col-md-6">
                                                    <label for="beneficiario_direccion" class="form-label">77. Dirección
                                                        <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="beneficiario_direccion"
                                                        name="beneficiario_direccion">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Botones de navegación -->
                            <div class="d-flex justify-content-between mt-4">
                                <button type="button" class="btn btn-secondary"
                                    onclick="mostrarSeccion(11)">Anterior</button>
                                <button type="button" class="btn btn-primary"
                                    onclick="validarSeccionGenerico(12,13)">Siguiente</button>
                            </div>
                        </div>


                        <!-- Contenido de la sesión 13 -->
                        <div class="tab-pane fade" id="pills-seccion13" role="tabpanel"
                            aria-labelledby="pills-seccion13-tab">
                            <div class="card">
                                <div class="card-header bg-primary text-white">
                                    <h5 class="card-title mb-0">REFERENCIA COMERCIAL</h5>
                                </div>
                                <div class="card-body">
                                    <div class="alert alert-warning">
                                        <i class="fas fa-exclamation-circle"></i> Nota: Debe completar al menos una
                                        referencia comercial completa.
                                    </div>

                                    <div class="row g-3">
                                        <!-- Pregunta 78 -->
                                        <div class="col-md-12">
                                            <label for="nombre_razon_social" class="form-label">78. Nombre o razón
                                                social
                                                <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="nombre_razon_social"
                                                name="referencias[nombre_razon_social]" required>
                                        </div>

                                        <!-- Pregunta 79 -->
                                        <div class="col-md-12">
                                            <label for="ciudad_domicilio" class="form-label">79. Ciudad Domicilio
                                                Principal
                                                <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="ciudad_domicilio"
                                                name="referencias[ciudad_domicilio]" required>
                                        </div>

                                        <!-- Pregunta 80 -->
                                        <div class="col-md-12">
                                            <label for="nombre_contacto" class="form-label">80. Nombre y Apellido del
                                                Contacto <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="nombre_contacto"
                                                name="referencias[nombre_contacto]" required>
                                        </div>

                                        <!-- Pregunta 81 -->
                                        <div class="col-md-12">
                                            <label for="cargo_contacto" class="form-label">81. Cargo <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="cargo_contacto"
                                                name="referencias[cargo_contacto]" required>
                                        </div>

                                        <!-- Pregunta 82 -->
                                        <div class="col-md-12">
                                            <label for="telefono_contacto" class="form-label">82. Teléfono / Celular de
                                                Contacto <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="telefono_contacto"
                                                name="referencias[telefono_contacto]" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Botones de navegación (idénticos a otras sesiones) -->
                            <div class="d-flex justify-content-between mt-4">
                                <button type="button" class="btn btn-secondary"
                                    onclick="mostrarSeccion(12)">Anterior</button>
                                <button type="button" class="btn btn-primary"
                                    onclick="validarSeccionGenerico(13,14)">Siguiente</button>
                            </div>
                        </div>




                        <!-- Contenido de la sesión 14 -->
                        <div class="tab-pane fade" id="pills-seccion14" role="tabpanel"
                            aria-labelledby="pills-seccion14-tab">
                            <div class="card">
                                <div class="card-header bg-primary text-white">
                                    <h5 class="card-title mb-0">CERTIFICACIONES</h5>
                                </div>
                                <div class="card-body">
                                    <div class="alert alert-warning">
                                        <i class="fas fa-exclamation-circle"></i> Nota: Esta pregunta es obligatoria,
                                        por lo
                                        tanto se debe responder al menos una fila completa, de lo contrario el sistema
                                        no
                                        dejará continuar con el guardado
                                    </div>

                                    <div class="row g-3">
                                        <!-- Pregunta 83 -->
                                        <div class="col-md-12">
                                            <label for="gestion_calidad" class="form-label">83. ¿Dispone de un sistema
                                                de
                                                gestión de calidad certificado? <span
                                                    class="text-danger">*</span></label>
                                            <select class="form-select" id="gestion_calidad"
                                                name="certificaciones[gestion_calidad]" required
                                                onchange="toggleOtroCampo(this, 'otro_gestion_calidad')">
                                                <option value="" selected disabled>Seleccione...</option>
                                                <option value="SI">SI</option>
                                                <option value="NO">NO</option>
                                                <option value="N/A">N/A</option>
                                                <option value="OTRAS">OTRAS</option>
                                            </select>
                                            <div id="otro_gestion_calidad" style="display: none;" class="mt-2">
                                                <input type="text" class="form-control"
                                                    name="certificaciones[otro_gestion_calidad]"
                                                    placeholder="Especifique cual">
                                            </div>
                                        </div>

                                        <!-- Pregunta 84 -->
                                        <div class="col-md-12">
                                            <label for="seguridad_suministro" class="form-label">84. ¿Dispone de un
                                                sistema
                                                de Gestión de seguridad de la cadena de suministro certificado? <span
                                                    class="text-danger">*</span></label>
                                            <select class="form-select" id="seguridad_suministro"
                                                name="certificaciones[seguridad_suministro]" required
                                                onchange="toggleOtroCampo(this, 'otro_seguridad_suministro')">
                                                <option value="" selected disabled>Seleccione...</option>
                                                <option value="SI">SI</option>
                                                <option value="NO">NO</option>
                                                <option value="N/A">N/A</option>
                                                <option value="OTRAS">OTRAS</option>
                                            </select>
                                            <div id="otro_seguridad_suministro" style="display: none;" class="mt-2">
                                                <input type="text" class="form-control"
                                                    name="certificaciones[otro_seguridad_suministro]"
                                                    placeholder="Especifique cual">
                                            </div>
                                        </div>

                                        <!-- Pregunta 85 -->
                                        <div class="col-md-12">
                                            <label for="operador_economico" class="form-label">85. ¿Cuenta con
                                                certificación
                                                de Operador Económico Autorizado? <span
                                                    class="text-danger">*</span></label>
                                            <select class="form-select" id="operador_economico"
                                                name="certificaciones[operador_economico]" required>
                                                <option value="" selected disabled>Seleccione...</option>
                                                <option value="SI">SI</option>
                                                <option value="NO">NO</option>
                                                <option value="N/A">N/A</option>
                                            </select>
                                        </div>
                                        <!-- Pregunta 86 (oculta por defecto) -->
                                        <div class="col-md-12" id="resolucion_vigencia_group" style="display:none;">
                                            <label for="resolucion_vigencia" class="form-label">86. Indique Nro. de
                                                resolución y vigencia o N/A: <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="resolucion_vigencia"
                                                name="certificaciones[resolucion_vigencia]">
                                        </div>

                                        <!-- Pregunta 87 -->
                                        <div class="col-md-12">
                                            <label for="sistema_sarlaft" class="form-label">87. ¿Cuenta con un sistema
                                                SAGRILAFT/SARLAFT/SIPLAFT? <span class="text-danger">*</span></label>
                                            <select class="form-select" id="sistema_sarlaft"
                                                name="certificaciones[sistema_sarlaft]" required
                                                onchange="toggleOtroCampo(this, 'otro_sistema_sarlaft')">
                                                <option value="" selected disabled>Seleccione...</option>
                                                <option value="SI">SI</option>
                                                <option value="NO">NO</option>
                                                <option value="N/A">N/A</option>
                                                <option value="OTRAS">OTRAS</option>
                                            </select>
                                            <div id="otro_sistema_sarlaft" style="display: none;" class="mt-2">
                                                <input type="text" class="form-control"
                                                    name="certificaciones[otro_sistema_sarlaft]"
                                                    placeholder="Especifique cual">
                                            </div>
                                        </div>

                                        <!-- Pregunta 88 -->
                                        <div class="col-md-12">
                                            <label for="licencias_ambientales" class="form-label">88. ¿Cuenta con
                                                Licencias
                                                y/o permisos ambientales? <span class="text-danger">*</span></label>
                                            <select class="form-select" id="licencias_ambientales"
                                                name="certificaciones[licencias_ambientales]" required
                                                onchange="toggleOtroCampo(this, 'otro_licencias_ambientales')">
                                                <option value="" selected disabled>Seleccione...</option>
                                                <option value="SI">SI</option>
                                                <option value="NO">NO</option>
                                                <option value="N/A">N/A</option>
                                                <option value="OTRAS">OTRAS</option>
                                            </select>
                                            <div id="otro_licencias_ambientales" style="display: none;" class="mt-2">
                                                <input type="text" class="form-control"
                                                    name="certificaciones[otro_licencias_ambientales]"
                                                    placeholder="Especifique cual">
                                            </div>
                                        </div>

                                        <!-- Pregunta 89 -->
                                        <div class="col-md-12">
                                            <label for="seguridad_salud" class="form-label">89. ¿Cuenta con un sistema
                                                de
                                                gestión de seguridad y salud en el trabajo, documentado e implementado?
                                                <span class="text-danger">*</span></label>
                                            <select class="form-select" id="seguridad_salud"
                                                name="certificaciones[seguridad_salud]" required
                                                onchange="toggleOtroCampo(this, 'otro_seguridad_salud')">
                                                <option value="" selected disabled>Seleccione...</option>
                                                <option value="SI">SI</option>
                                                <option value="NO">NO</option>
                                                <option value="N/A">N/A</option>
                                                <option value="OTRAS">OTRAS</option>
                                            </select>
                                            <div id="otro_seguridad_salud" style="display: none;" class="mt-2">
                                                <input type="text" class="form-control"
                                                    name="certificaciones[otro_seguridad_salud]"
                                                    placeholder="Especifique cual">
                                            </div>
                                        </div>
                                        <!-- Pregunta 90 (oculta por defecto) -->
                                        <div class="col-md-12" id="avance_ss_group" style="display:none;">
                                            <label for="avance_ss" class="form-label">90. Indicar % Avance o N/A <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="avance_ss"
                                                name="certificaciones[avance_ss]">
                                        </div>

                                        <!-- Pregunta 91 -->
                                        <div class="col-md-12">
                                            <label for="calidad_laboratorios" class="form-label">91. ¿Cuenta con un
                                                sistema
                                                de gestión de calidad para laboratorios bajo la norma vigente? <span
                                                    class="text-danger">*</span></label>
                                            <select class="form-select" id="calidad_laboratorios"
                                                name="certificaciones[calidad_laboratorios]" required
                                                onchange="toggleOtroCampo(this, 'otro_calidad_laboratorios')">
                                                <option value="" selected disabled>Seleccione...</option>
                                                <option value="SI">SI</option>
                                                <option value="NO">NO</option>
                                                <option value="N/A">N/A</option>
                                                <option value="OTRAS">OTRAS</option>
                                            </select>
                                            <div id="otro_calidad_laboratorios" style="display: none;" class="mt-2">
                                                <input type="text" class="form-control"
                                                    name="certificaciones[otro_calidad_laboratorios]"
                                                    placeholder="Especifique cual">
                                            </div>
                                        </div>

                                        <!-- Pregunta 92 -->
                                        <div class="col-md-12" style="display:none;">
                                            <label for="detalle_certificaciones" class="form-label">92. Indicar cual(es)
                                                y %
                                                Avance o N/A <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="detalle_certificaciones"
                                                name="certificaciones[detalle_certificaciones]" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Botones de navegación (IGUALES a sesión 11) -->
                            <div class="d-flex justify-content-between mt-4">
                                <button type="button" class="btn btn-secondary"
                                    onclick="mostrarSeccion(13)">Anterior</button>
                                <button type="button" class="btn btn-primary"
                                    onclick="irASeccion15Desde14()">Siguiente</button>
                            </div>
                        </div>


                        <!-- Contenido de la sesión 15 -->
                        <div class="tab-pane fade" id="pills-seccion15" role="tabpanel"
                            aria-labelledby="pills-seccion15-tab">
                            <div class="card">
                                <div class="card-header bg-primary text-white">
                                    <h5 class="card-title mb-0">DECLARACIONES Y AUTORIZACIONES</h5>
                                </div>
                                <div class="card-body">
                                    <div class="alert alert-warning">
                                        <i class="fas fa-exclamation-circle"></i> Nota: Sin marcar "Acepto" no podrá
                                        continuar con el proceso
                                    </div>

                                    <div class="mb-4">
                                        <h6>TRATAMIENTO DE DATOS PERSONALES:</h6>
                                        <div class="border p-3 mb-3 bg-light"
                                            style="max-height: 200px; overflow-y: auto;">
                                            <p>El firmante del presente formulario, en nombre propio y/o en nombre de la
                                                entidad que representa, autoriza a intramar shipping ("intramar
                                                shipping") y
                                                a los terceros que utilice como encargados del tratamiento de bases de
                                                datos
                                                de todos los representantes legales, directivos, socios o accionistas,
                                                revisores fiscales y contadores de la compañía, lo cual incluye;
                                                recolectarlos, almacenarlos, administrarlos, utilizarlos, destruirlos,
                                                así
                                                como transferirlos o transmitirlos a sus matrices, filiales y/o
                                                subsidiarias
                                                extranjeras en la forma en que es permitido por la ley, así como en
                                                cumplimiento de su obligación legal de prevenir y controlar el lavado de
                                                activos y la financiación del terrorismo, el soborno transnacional, la
                                                corrupción y demás delitos fuentes. Esta información será utilizada por
                                                intramar shipping con el propósito de que pueda cumplir con las
                                                obligaciones
                                                contractuales y legales a su cargo ,conforme a la relación comercial
                                                entre
                                                nosotros existente.</p>
                                            <p>Manifiesto que conozco las políticas de intramar shipping sobre
                                                protección y
                                                administración de datos personales y que he leído el Manual de
                                                Protección y
                                                Uso de Bases de Datos Personales que se encuentra disponible en la
                                                página
                                                web <a href="https://www.intramar.com.co/"
                                                    target="_blank">https://www.intramar.com.co/</a></p>
                                        </div>

                                        <h6>AVISO DE PRIVACIDAD:</h6>
                                        <div class="border p-3 mb-3 bg-light"
                                            style="max-height: 200px; overflow-y: auto;">
                                            <p>De conformidad con lo dispuesto en la Ley 1581 de 2012 y demás normas
                                                aplicables, le informamos que los datos personales que usted nos ha
                                                entregado, así como fotos y videos que se realicen al interior de
                                                nuestras
                                                instalaciones, son confidenciales y serán usados únicamente para la
                                                Compañía
                                                intramar shipping de Colombia S.A., de acuerdo a lo establecido en el
                                                "Manual de Protección y Uso de Bases de Datos Personales", que contiene
                                                las
                                                políticas establecidas por nuestra Compañía para el tratamiento de
                                                datos.
                                                Dicho manual puede ser consultado en la página web: <a
                                                    href="https://www.intramar.com.co/"
                                                    target="_blank">https://www.intramar.com.co/</a></p>
                                            <p>NOTA: Usted podrá actualizar, rectificar, corregir o solicitar la
                                                supresión
                                                de sus datos enviando un correo electrónico a -------------------</p>
                                        </div>

                                        <h6>ORIGEN DE FONDOS Y ADMINISTRACIÓN DE RIESGO DE LAVADO DE ACTIVOS:</h6>
                                        <div class="border p-3 mb-3 bg-light"
                                            style="max-height: 200px; overflow-y: auto;">
                                            <p>Conforme a la información ingresada, actuando en nombre propio y/o como
                                                representante legal de la persona jurídica que pretende vincularse a
                                                intramar shipping ("intramar shipping") dando certeza de que lo aquí
                                                consignado es información veraz y verificable, declaro que: (i) los
                                                recursos, dineros o activos empleados para el suministro de bienes y/o
                                                servicios a intramar shipping tienen una procedencia lícita y no están
                                                vinculados con el lavado de activos ni sus delitos fuente, ni serán
                                                utilizados para efectos de financiar actividad este terroristas o
                                                cualquier
                                                otra conducta delictiva, según la normatividad penal aplicable, (ii) que
                                                los
                                                socios o administradores de la Sociedad no han sido incluidos en listas
                                                de
                                                control de riesgo de lavado de activos y financiación del terrorismo
                                                nacionales o internacionales vinculantes para Colombia entre las que se
                                                encuentran la lista de la Oficina de Control de Activos en el Exterior –
                                                OFAC y la lista de sanciones del Consejo de Seguridad de la Organización
                                                de
                                                las Naciones Unidas, entre otras; (iii) no incurriremos en actividades
                                                relacionadas con fraude, soborno y/o corrupción u otras acciones
                                                contrarias
                                                a la normatividad penal aplicable;(iv) no usarán a intramar shipping o
                                                la
                                                relación comercial con ésta para cometer actos ilícitos; (v) no
                                                permitiremos
                                                que terceros efectúen transacciones a nuestro nombre con fondos
                                                provenientes
                                                de actividades ilícitas contempladas en la normatividad penal vigente,
                                                ni
                                                efectuaremos transacciones destinadas a tales actividades a favor de
                                                personas relacionadas con las mismas; (vi) autorizo expresamente a
                                                intramar
                                                shipping para consultar toda la documentación presentada.</p>
                                        </div>

                                        <h6>93. OTRAS DECLARACIONES:</h6>
                                        <div class="border p-3 mb-3 bg-light"
                                            style="max-height: 200px; overflow-y: auto;">
                                            <p>En nombre propio y/o en nombre de la persona jurídica que represento,
                                                declaro
                                                que: (i) la empresa que represento cumple con los requisitos mínimos de
                                                seguridad de la cadena de suministro y en su operación realiza practicas
                                                que
                                                permiten mitigar el riesgo de actividades ilícitas o incidentes de
                                                contaminación; (ii) en el desarrollo de nuestras actividades cumplimos
                                                con
                                                los lineamentos de la organización internacional del trabajo (OIT),
                                                respetamos los derechos laborales de cada uno de los empleados y en
                                                ningún
                                                caso incurrimos en conductas de abuso o explotación laboral; (iii)
                                                cumplimos
                                                con la legislación ambiental vigente y desarrollamos buenas prácticas
                                                ambientales; (iv) en la actualidad los representantes, socios o sus
                                                miembros
                                                de junta directiva, no tienen ningún parentesco o conflicto de intereses
                                                con
                                                la persona responsable de negociar el bien o servicio y si en el futuro
                                                se
                                                llegara a presentar esta situación me comprometo a reportar a intramar
                                                shipping en su canal de denuncia habilitado.</p>
                                            <p>Con mi firma declaro que cuento con las autorizaciones y facultades
                                                necesarias para entregar a intramar shipping la información y datos
                                                personales aquí suministrados. Declaro que esta información es correcta
                                                y me
                                                comprometo a mantenerla actualizada, autorizando intramar shipping
                                                también
                                                que se compruebe la veracidad de la misma.</p>
                                            <p>NOTA: El diligenciamiento de este formato no compromete a METECNO DE
                                                COLOMBIA
                                                S.A para iniciar el vínculo contractual, comercial o cualquier otro
                                                vínculo.
                                            </p>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="acepta_declaraciones"
                                                id="acepta_si" value="SI" required>
                                            <label class="form-check-label" for="acepta_si">Acepto</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="acepta_declaraciones"
                                                id="acepta_no" value="NO">
                                            <label class="form-check-label" for="acepta_no">No Acepto</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Botones de navegación (IGUALES a sesión 11) -->
                            <div class="d-flex justify-content-between mt-4">
                                <button type="button" class="btn btn-secondary"
                                    onclick="anteriorSeccion15()">Anterior</button>
                                <button type="button" class="btn btn-primary"
                                    onclick="validarSeccionGenerico(15,16)">Siguiente</button>
                            </div>
                        </div>


                        <!-- Contenido de la sesión 16 -->
                        <div class="tab-pane fade" id="pills-seccion16" role="tabpanel"
                            aria-labelledby="pills-seccion16-tab">
                            <div class="card">
                                <div class="card-header bg-primary text-white">
                                    <h5 class="card-title mb-0">DOCUMENTOS REQUERIDOS</h5>
                                </div>
                                <div class="card-body">
                                    <div class="alert alert-info">
                                        <i class="fas fa-info-circle"></i> ESTIMADO PROVEEDOR: Para que el proceso de
                                        registro y/o actualización se dé por concluido, después de dar click en la
                                        opción
                                        GUARDAR Y ENVIAR ARCHIVO, por favor no cerrar la ventana y a continuación se
                                        habilitará la opción para firmar formulario y adjuntar los siguientes
                                        documentos:
                                    </div>

                                    <ol class="list-group list-group-numbered mb-4">
                                    </ol>

                                    <div class="alert alert-light border mb-4">
                                        <p>En Intramar estamos comprometidos con mantener un ambiente íntegro y
                                            transparente, por lo cual ponemos a su disposición nuestra línea de
                                            transparencia habilitada en la página web: <a
                                                href="https://www.intramar.com.co/"
                                                target="_blank">https://www.intramar.com.co/</a> de transparencia para
                                            informar situaciones o preocupaciones que generen inquietud referente a
                                            prácticas comerciales indebidas, incumplimiento de políticas y
                                            procedimientos o
                                            cualquier otra actividad que afecte el entorno laboral o vaya en contra de
                                            nuestro código de conducta y de nuestras políticas de administración de
                                            riesgo
                                            de lavado de activos y la de prevención ante la corrupción y soborno
                                            transaccional.</p>
                                    </div>

                                    <div class="alert alert-warning mb-4">
                                        <p><strong>NOTA:</strong> En este formato solo es admisible la firma del
                                            Representante Legal - (huella opcional). En constancia de haber leído,
                                            entendido
                                            y aceptado lo anterior, firmo el presente documento en la fecha <span
                                                id="fecha-actual"><?php echo date('d/m/Y H:i'); ?></span></p>
                                    </div>

                                    <!-- Firma Digital -->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-label">Firma Digital <span
                                                    class="text-danger">*</span></label>
                                            <div class="card">
                                                <div class="card-body">
                                                    <!-- Campo para subir archivo -->
                                                    <div class="mb-3">
                                                        <input type="file" class="form-control" id="firmaUpload"
                                                            name="firma_imagen"
                                                            accept="image/png, image/jpeg, application/pdf" required>
                                                        <small class="text-muted">Formatos aceptados: PNG, JPG, PDF
                                                            (Máx.
                                                            2MB)</small>
                                                    </div>

                                                    <!-- Vista previa -->
                                                    <div id="firmaPreviewContainer" style="display: none;">
                                                        <p>Vista previa de la firma:</p>
                                                        <img id="firmaPreviewImg" src="#" alt="Vista previa de firma"
                                                            class="img-fluid"
                                                            style="max-height: 150px; border: 1px solid #ddd; padding: 5px; display:none;">
                                                        <embed id="firmaPreviewPDF" type="application/pdf"
                                                            style="width:100%; max-width:400px; height:150px; border:1px solid #ddd; display:none;" />
                                                        <button type="button" id="removeFirma"
                                                            class="btn btn-danger btn-sm mt-2">
                                                            <i class="fas fa-trash-alt me-1"></i> Eliminar Firma
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Botones de navegación (IGUALES a sesión 11) -->
                                    <div class="d-flex justify-content-between mt-4">
                                        <button type="button" class="btn btn-secondary"
                                            onclick="anteriorSeccion16()">Anterior</button>
                                        <button type="button" class="btn btn-success"
                                            onclick="validarSeccionGenerico(15,16)">Guardar y Enviar</button>
                                    </div>
                                </div>

                                <!-- Las demás secciones (15-16) irían aquí -->
                            </div>
            </form>
        </div>

        <!-- Bootstrap JS y dependencias -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

        <script>
        // Número total de secciones (ajusta si agregas/quitas secciones)
        let seccionAnteriorA6 = 1; // Por defecto
        const totalSecciones = 16;
        let seccionAnteriorA16 = 5; // Valor por defecto

        // ----------- NAVEGACIÓN ENTRE SECCIONES (Bootstrap Tabs) -----------
        function mostrarSeccion(numero) {
            const tabBtn = document.getElementById(`pills-seccion${numero}-tab`);
            if (tabBtn) tabBtn.style.display = 'block';
            const tabInstance = new bootstrap.Tab(tabBtn);
            tabInstance.show();
            const porcentaje = (numero / totalSecciones) * 100;
            document.querySelector('.progress-bar').style.width = `${porcentaje}%`;
            document.querySelector('.progress-bar').textContent = `${numero}/${totalSecciones}`;
            document.querySelector('.progress-bar').setAttribute('aria-valuenow', porcentaje);
        }

        // ----------- NAVEGACIÓN GENÉRICA PARA BOTONES "Siguiente" Y "Anterior" -----------
        function navTab(tabId) {
            const tabBtn = document.getElementById(tabId);
            if (tabBtn) tabBtn.style.display = 'block';
            const tabInstance = new bootstrap.Tab(tabBtn);
            tabInstance.show();
            const num = parseInt(tabId.replace(/\D/g, ''));
            if (!isNaN(num)) {
                const porcentaje = (num / totalSecciones) * 100;
                document.querySelector('.progress-bar').style.width = `${porcentaje}%`;
                document.querySelector('.progress-bar').textContent = `${num}/${totalSecciones}`;
                document.querySelector('.progress-bar').setAttribute('aria-valuenow', porcentaje);
            }
        }

        // ----------- FUNCIONES DE NAVEGACIÓN PERSONALIZADAS -----------
        function irASeccion6() {
            mostrarSeccion(6);
        }

        function irASeccion1() {
            mostrarSeccion(1);
        }

        function regresarASeccionAnterior() {
            mostrarSeccion(5);
        }

        function anteriorSeccionEspecial() {
            mostrarSeccion(6);
        } // Ajusta según tu flujo

        // ----------- VALIDACIÓN Y AVANCE DE SECCIÓN 1 -----------
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
                let siguienteSeccionNumero = 2;
                if (tipoProveedor === 'Proveedor no gran contribuyente (crítico)') siguienteSeccionNumero = 2;
                else if (tipoProveedor === 'Proveedor gran contribuyente (no critico)') siguienteSeccionNumero = 3;
                else if (tipoProveedor === 'Persona natural') siguienteSeccionNumero = 4;
                else if (tipoProveedor === 'Mandatorio (Aerolinea, Naviera)') siguienteSeccionNumero = 5;
                mostrarSeccion(siguienteSeccionNumero);
            } else {
                alert('Por favor complete todos los campos requeridos.');
            }
        }
        // ----------- VALIDACIÓN Y AVANCE DE SECCIÓN 2 -----------
        function validarSeccion2() {
            const inputs = document.querySelectorAll('#pills-seccion2 [required]');
            let valido = true;
            inputs.forEach(input => {
                if (!input.value) {
                    input.classList.add('is-invalid');
                    valido = false;
                } else {
                    input.classList.remove('is-invalid');
                }
            });
            if (valido) {
                seccionAnteriorA6 = 2;
                mostrarSeccion(6);
            } else {
                alert('Por favor complete todos los campos requeridos.');
            }
        }

        // ----------- VALIDACIÓN Y AVANCE DE SECCIÓN 3 Y 4 (GENÉRICA) -----------
        function validarSeccionActual(numSeccion, numSiguiente) {
            const inputs = document.querySelectorAll(`#pills-seccion${numSeccion} [required]`);
            let valido = true;
            inputs.forEach(input => {
                if (!input.value) {
                    input.classList.add('is-invalid');
                    valido = false;
                } else {
                    input.classList.remove('is-invalid');
                }
            });
            if (valido) {
                // Guardar de dónde viene si va para la 6
                if (numSeccion === 3 && numSiguiente === 6) {
                    seccionAnteriorA6 = 3;
                }
                if (numSeccion === 4 && numSiguiente === 6) {
                    seccionAnteriorA6 = 4;
                }
                mostrarSeccion(numSiguiente);
            } else {
                alert('Por favor complete todos los campos requeridos.');
            }
        }

        // ----------- VALIDACIÓN Y AVANCE DE SECCIÓN 6 - 15  (GENÉRICA) -----------
        function validarSeccionGenerico(numActual, numSiguiente) {
            const inputs = document.querySelectorAll(`#pills-seccion${numActual} [required]`);
            let valido = true;
            inputs.forEach(input => {
                if (!input.value || (input.type === "checkbox" && !input.checked)) {
                    input.classList.add('is-invalid');
                    valido = false;
                } else {
                    input.classList.remove('is-invalid');
                }
            });

            // Validación especial para la sesión 15 (declaraciones)
            if (numActual === 15) {
                const acepta = document.getElementById('acepta_si').checked;
                if (!acepta) {
                    alert('Debe aceptar las declaraciones para continuar.');
                    valido = false;
                }
            }

            if (valido) {
                // Si vas de la 15 a la 16, guarda el origen
                if (numActual === 15 && numSiguiente === 16) {
                    seccionAnteriorA16 = 15;
                }
                mostrarSeccion(numSiguiente);
            } else {
                alert('Por favor complete todos los campos requeridos.');
            }
        }

        function anteriorSeccion16() {
            if (seccionAnteriorA16 === 5) {
                mostrarSeccion(5);
            } else if (seccionAnteriorA16 === 15) {
                mostrarSeccion(15);
            } else {
                mostrarSeccion(1); // fallback
            }
        }

        function anteriorSeccion15() {
            if (seccionAnteriorA16 === 16) {
                mostrarSeccion(16);
            } else {
                mostrarSeccion(14);
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            activarEstadoAutomatico('pills-seccion2');
            activarEstadoAutomatico('pills-seccion3');
            activarEstadoAutomatico('pills-seccion4');
            activarEstadoAutomatico('pills-seccion5');
            // Si quieres para la 4, 5, etc. solo agrega:
            // activarEstadoAutomatico('pills-seccion4');
        });

        // ----------- VALIDACIONES DE OTRAS SECCIONES (EJEMPLO) -----------
        function validarSesion5() {
            let valido = true;
            const inputs = document.querySelectorAll('#pills-seccion5 [required]');
            inputs.forEach(input => {
                if (!input.value || (input.type === "checkbox" && !input.checked)) {
                    input.classList.add('is-invalid');
                    valido = false;
                } else {
                    input.classList.remove('is-invalid');
                }
            });

            const desea = document.getElementById('desea_diligenciar').value;
            if (!desea) {
                document.getElementById('desea_diligenciar').classList.add('is-invalid');
                valido = false;
            } else {
                document.getElementById('desea_diligenciar').classList.remove('is-invalid');
            }

            if (desea === "NO") {
                const motivo = document.getElementById('motivo_no');
                if (!motivo.value.trim()) {
                    motivo.classList.add('is-invalid');
                    valido = false;
                } else {
                    motivo.classList.remove('is-invalid');
                }
            }

            if (valido) {
                if (desea === "SI") {
                    mostrarSeccion(6);
                } else if (desea === "NO") {
                    seccionAnteriorA16 = 5;
                    mostrarSeccion(16);
                }
            } else {
                alert('Por favor complete todos los campos obligatorios.');
            }
        }
        // ----------- BOTÓN ANTERIOR DE SECCIÓN 6 -----------
        function regresarASeccionAnterior() {
            mostrarSeccion(seccionAnteriorA6);
        }

        // ----------- FUNCIONES DE VALIDACIÓN DE SECCIONES SIGUIENTES (EJEMPLO) -----------
        function validarYAvanzar() {
            const currentTab = document.querySelector('.tab-pane.active');
            const inputs = currentTab.querySelectorAll('[required]');
            let valido = true;
            inputs.forEach(input => {
                if (!input.value) {
                    input.classList.add('is-invalid');
                    valido = false;
                } else {
                    input.classList.remove('is-invalid');
                }
            });
            if (valido) {
                // Ajusta el número de sección destino según tu flujo
                mostrarSeccion(7);
            } else {
                alert('Por favor complete todos los campos requeridos.');
            }
        }

        // ----------- CAMPOS CONDICIONALES (EJEMPLO) -----------
        function toggleCamposContribuyente() {
            const select = document.getElementById('gran_contribuyente');
            const grupoResolucion = document.getElementById('grupo_resolucion');
            const grupoFecha = document.getElementById('grupo_fecha_resolucion');
            if (select.value === 'SI') {
                grupoResolucion.style.display = 'block';
                grupoFecha.style.display = 'block';
            } else {
                grupoResolucion.style.display = 'none';
                grupoFecha.style.display = 'none';
            }
        }

        function avanzarSegunDeseaDiligenciar() {
            const desea = document.getElementById('desea_diligenciar').value;
            if (desea === "SI") {
                mostrarSeccion(6);
            } else if (desea === "NO") {
                mostrarSeccion(16);
            } else {
                alert(
                    "Por favor seleccione una opción en la pregunta '¿Desea usted diligenciar el presente formulario?'"
                );
            }
        }

        function toggleOtrosProductos() {
            const select = document.getElementById('productos_ofrecidos');
            const grupoOtros = document.getElementById('grupo_otros_productos');
            if (select.value === 'Otras') {
                grupoOtros.style.display = 'block';
            } else {
                grupoOtros.style.display = 'none';
            }
        }
        document.getElementById('desea_diligenciar')?.addEventListener('change', function() {
            const motivo = document.getElementById('motivo_container');
            if (this.value === 'NO') {
                motivo.style.display = 'block';
                document.getElementById('motivo_no').setAttribute('required', 'required');
            } else {
                motivo.style.display = 'none';
                document.getElementById('motivo_no').removeAttribute('required');
            }
        });


        document.getElementById('firmaUpload').addEventListener('change', function(e) {
            const file = e.target.files[0];
            const previewContainer = document.getElementById('firmaPreviewContainer');
            const imgPreview = document.getElementById('firmaPreviewImg');
            const pdfPreview = document.getElementById('firmaPreviewPDF');

            if (!file) {
                previewContainer.style.display = 'none';
                imgPreview.style.display = 'none';
                pdfPreview.style.display = 'none';
                return;
            }

            const fileType = file.type;
            const reader = new FileReader();

            if (fileType === 'application/pdf') {
                reader.onload = function(e) {
                    imgPreview.style.display = 'none';
                    pdfPreview.style.display = 'block';
                    pdfPreview.src = e.target.result;
                    previewContainer.style.display = 'block';
                };
                reader.readAsDataURL(file);
            } else if (fileType.startsWith('image/')) {
                reader.onload = function(e) {
                    pdfPreview.style.display = 'none';
                    imgPreview.style.display = 'block';
                    imgPreview.src = e.target.result;
                    previewContainer.style.display = 'block';
                };
                reader.readAsDataURL(file);
            } else {
                previewContainer.style.display = 'none';
                imgPreview.style.display = 'none';
                pdfPreview.style.display = 'none';
            }
        });

        document.getElementById('removeFirma').addEventListener('click', function() {
            const input = document.getElementById('firmaUpload');
            input.value = '';
            document.getElementById('firmaPreviewContainer').style.display = 'none';
            document.getElementById('firmaPreviewImg').style.display = 'none';
            document.getElementById('firmaPreviewPDF').style.display = 'none';
        });


        function toggleOtroCampo(select, idCampo) {
            const campo = document.getElementById(idCampo);
            if (!campo) return;
            if (select.value === "Otras" || select.value === "OTRAS") {
                campo.style.display = "block";
                const input = campo.querySelector('input, textarea');
                if (input) input.setAttribute('required', 'required');
            } else {
                campo.style.display = "none";
                const input = campo.querySelector('input, textarea');
                if (input) input.removeAttribute('required');
            }
        }

        function agregarContacto() {
            // Selecciona el contenedor de contactos
            const container = document.getElementById('contactos-container');
            // Selecciona el primer formulario de contacto como plantilla
            const primerContacto = container.querySelector('.contacto-form');
            // Clona el formulario
            const nuevoContacto = primerContacto.cloneNode(true);

            // Limpia los valores de los inputs en el clon
            nuevoContacto.querySelectorAll('input').forEach(input => {
                input.value = '';
                input.classList.remove('is-invalid');
            });

            // Agrega el clon al contenedor
            container.appendChild(nuevoContacto);
        }

        function toggleCamposPEP() {
            const p43 = document.getElementById('pep_recursos_publicos').value;
            const p44 = document.getElementById('pep_cargo_publico').value;
            const p45 = document.getElementById('pep_relacion').value;
            const detalle = document.getElementById('campos_pep_detalle');
            if (p43 === 'SI' || p44 === 'SI' || p45 === 'SI') {
                detalle.style.display = 'block';
                // Hacer requeridos los campos internos si quieres
                detalle.querySelectorAll('input, select, textarea').forEach(el => el.setAttribute('required',
                    'required'));
            } else {
                detalle.style.display = 'none';
                detalle.querySelectorAll('input, select, textarea').forEach(el => el.removeAttribute('required'));
            }
        }


        function toggleOperacionesInternacionales() {
            const select = document.getElementById('operaciones_internacionales');
            const detalle = document.getElementById('detalle_operaciones_internacionales');
            if (select.value === 'SI') {
                detalle.style.display = 'block';
                // Hacer requeridos los campos internos
                detalle.querySelectorAll('input, select, textarea').forEach(el => el.setAttribute('required',
                    'required'));
            } else {
                detalle.style.display = 'none';
                detalle.querySelectorAll('input, select, textarea').forEach(el => el.removeAttribute('required'));
            }
        }

        // Mostrar pregunta 86 si en 85 selecciona "SI"
        document.getElementById('operador_economico').addEventListener('change', function() {
            const resolucion = document.getElementById('resolucion_vigencia_group');
            if (this.value === 'SI') {
                resolucion.style.display = 'block';
                document.getElementById('resolucion_vigencia').setAttribute('required', 'required');
            } else {
                resolucion.style.display = 'none';
                document.getElementById('resolucion_vigencia').removeAttribute('required');
            }
        });

        // Mostrar pregunta 90 si en 89 selecciona "SI" u "OTRAS"
        document.getElementById('seguridad_salud').addEventListener('change', function() {
            const avance = document.getElementById('avance_ss_group');
            if (this.value === 'SI' || this.value === 'OTRAS') {
                avance.style.display = 'block';
                document.getElementById('avance_ss').setAttribute('required', 'required');
            } else {
                avance.style.display = 'none';
                document.getElementById('avance_ss').removeAttribute('required');
            }
        });

        function validarSeccionGenerico(numActual, numSiguiente) {
            const inputs = document.querySelectorAll(`#pills-seccion${numActual} [required]`);
            let valido = true;
            inputs.forEach(input => {
                if (!input.value || (input.type === "checkbox" && !input.checked)) {
                    input.classList.add('is-invalid');
                    valido = false;
                } else {
                    input.classList.remove('is-invalid');
                }
            });

            // Validación especial para la sesión 15 (declaraciones)
            if (numActual === 15) {
                const acepta = document.getElementById('acepta_si').checked;
                if (!acepta) {
                    alert('Debe aceptar las declaraciones para continuar.');
                    valido = false;
                }
            }

            if (valido) {
                // Si vas de la 15 a la 16, guarda el origen
                if (numActual === 15 && numSiguiente === 16) {
                    seccionAnteriorA16 = 15;
                }
                mostrarSeccion(numSiguiente);
            } else {
                alert('Por favor complete todos los campos requeridos.');
            }
        }

        function anteriorSeccion15() {
            if (seccionAnteriorA6 === 16) {
                mostrarSeccion(16);
            } else {
                mostrarSeccion(14);
            }
        }

        document.getElementById('calidad_laboratorios').addEventListener('change', function() {
            const detalle = document.getElementById('detalle_certificaciones').closest('.col-md-12');
            if (this.value === 'SI' || this.value === 'OTRAS') {
                detalle.style.display = 'block';
                document.getElementById('detalle_certificaciones').setAttribute('required', 'required');
            } else {
                detalle.style.display = 'none';
                document.getElementById('detalle_certificaciones').removeAttribute('required');
            }
        });

        function irASeccion15Desde14() {
            seccionAnteriorA6 = 14;
            validarSeccionGenerico(14, 15);
        }

        function irASeccion15Desde16() {
            seccionAnteriorA6 = 16;
            mostrarSeccion(15);
        }

        function anteriorSeccion16() {
            if (seccionAnteriorA16 === 15) {
                mostrarSeccion(15);
            } else if (seccionAnteriorA16 === 5) {
                mostrarSeccion(5);
            } else {
                mostrarSeccion(1); // fallback
            }
        }

        function anteriorSeccion15() {
            if (seccionAnteriorA16 === 16) {
                mostrarSeccion(16);
            } else {
                mostrarSeccion(14);
            }
        }

        function activarEstadoAutomatico(tabId) {
            const tab = document.getElementById(tabId);
            if (!tab) return;
            // Busca todos los inputs file dentro de la sección
            tab.querySelectorAll('input[type="file"]').forEach(input => {
                input.addEventListener('change', function() {
                    // Busca el select de estado que esté en el mismo grupo (input-group o col)
                    let selectEstado = input.parentElement.querySelector('select');
                    // Si no está en el mismo nivel, busca en el siguiente hermano
                    if (!selectEstado) {
                        const next = input.parentElement.nextElementSibling;
                        if (next && next.tagName === 'SELECT') selectEstado = next;
                    }
                    // Si encuentra el select y hay archivo, cambia a "Completo"
                    if (selectEstado && input.files.length > 0) {
                        selectEstado.value = "Completo";
                    }
                });
            });
        }

        // Activa el cambio automático para todas las secciones que lo requieran
        document.addEventListener('DOMContentLoaded', function() {
            activarEstadoAutomatico('pills-seccion2');
            activarEstadoAutomatico('pills-seccion3');
            activarEstadoAutomatico('pills-seccion4');
            activarEstadoAutomatico('pills-seccion5');
            // Agrega más si tienes más secciones con archivos
        });
        </script>