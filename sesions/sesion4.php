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