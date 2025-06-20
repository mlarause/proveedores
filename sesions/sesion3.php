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
                                <label for="formularios_nc" class="form-label">Los formularios deben enviarse con firma certificada para ser válidos<span
                                        class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="file" class="form-control" id="formularios_nc" name="formularios_nc[]"
                                        accept=".pdf" multiple required>
                                    <select class="form-select" style="max-width: 150px;" name="formularios_nc_estado"
                                        required>
                                        <option value="" selected disabled>Estado</option>
                                        <option value="Completo">Completo</option>
                                        <option value="No Completado">No Completado</option>
                                    </select>
                                </div>
                                <div class="file-info">La descarga está habilitada unicamente en formato PDF
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