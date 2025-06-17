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