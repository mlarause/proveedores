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
                                                        onchange="toggleOtroCampo(this, 'grupo_otro_tipo_beneficiario')">
                                                        <option value="" selected disabled>Seleccione...</option>
                                                        <option value="Cedula Ciudadanía">Cédula de Ciudadanía</option>
                                                        <option value="Cedula de Extranjería">Cédula de Extranjería
                                                        </option>
                                                        <option value="Diplomático">Diplomático</option>
                                                        <optio value="Documento de identidad Extranjeros">Documento de
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