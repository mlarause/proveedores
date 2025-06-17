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