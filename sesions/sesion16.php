 <div class="tab-pane fade" id="pills-seccion16" role="tabpanel"
                            aria-labelledby="pills-seccion16-tab">
                            <div class="card">
                                <div class="card-header bg-primary text-white">
                                    <h5 class="card-title mb-0">DOCUMENTOS REQUERIDOS</h5>
                                </div>
                                <div class="card-body">


                                    <ol class="list-group list-group-numbered mb-4">
                                    </ol>

                                    <div class="alert alert-light border mb-4">
                                        <p>En Intramar estamos comprometidos con mantener un entorno íntegro, ético y transparente. Por ello, hemos habilitado una Línea de Transparencia a través de nuestra página web <a
                                                href="https://www.intramar.com.co/"
                                                target="_blank">https://www.intramar.com.co/</a> 
                                                donde podrá reportar de manera confidencial cualquier situación o inquietud relacionada con:
                                                <ul>
                                                <li>Prácticas comerciales indebidas</li>
                                                <li>Incumplimiento de políticas y procedimientos internos</li>
                                                <li>Comportamientos que afecten el entorno laboral</li>
                                                <li>Violaciones a nuestro Código de Conducta</li>
                                                <li>Riesgos asociados al lavado de activos, corrupción o soborno transnacional</li>
                                                </ul>
                                                Adicionalmente, ponemos a su disposición nuestro  <a href="https://www.sightlog.com/contact"> formulario de PQRSF </a> (Peticiones, Quejas, Reclamos, Sugerencias y Felicitaciones), disponible también en la página web, como canal de atención para cualquier comentario relacionado con nuestros servicios.
                                                Su participación es fundamental para seguir construyendo una organización ética, transparente y responsable.
                                                </p>
                                    </div>

                                    <div class="alert alert-warning mb-4">
                                        <p><strong>NOTA:</strong> En este formato solo es admisible la firma del
                                            Representante Legal - En constancia de haber leído,
                                            entendido
                                            y aceptado lo anterior, firmo el presente documento en la fecha 
                                            <?php date_default_timezone_set('America/Bogota'); ?><span
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
                                       <form action="proveedores2/procesar_sesion16.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="numero_identificacion" value="<?php echo $numero_identificacion; ?>">
   
    <button type="submit">Enviar y finalizar</button>
</form>
                                </div>

                                <!-- Las demás secciones (15-16) irían aquí -->
                            </div>
            </form>
        </div>