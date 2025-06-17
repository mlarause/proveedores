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
                                            <div class="col-12 text-end">
                                                <button type="button" class="btn btn-danger btn-sm eliminar-contacto"
                                                    onclick="eliminarContacto(this)">
                                                    <i class="fas fa-trash"></i> Eliminar
                                                </button>
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