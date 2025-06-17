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