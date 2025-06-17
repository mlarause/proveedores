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