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

                                    <!-- descargar archivos -->

                                    <div class="col-md-12 mt-3">
                                        <div class="card border-primary">
                                            <div class="card-header bg-primary text-white">
                                                <h6 class="mb-0">Formularios disponibles para descargar</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <?php
                                    $directorio = 'documentos/mandatorio/';
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
                                        <label for="formularios_natural" class="form-label">Los Formularios deben enviarse con firma certificada para ser válidos <span
                                                class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <input type="file" class="form-control" id="formularios_natural"
                                                name="formularios_natural[]" accept=".pdf" multiple required>
                                            <select class="form-select" style="max-width: 150px;"
                                                name="formularios_natural_estado" required>
                                                <option value="" selected disabled>Estado</option>
                                                <option value="Completo">Completo</option>
                                                <option value="No Completado">No Completado</option>
                                            </select>
                                        </div>
                                        <div class="file-info">La descarga está habilitada únicamente en formato PDF
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