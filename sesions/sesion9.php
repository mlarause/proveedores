 <div class="tab-pane fade" id="pills-seccion9" role="tabpanel"
                            aria-labelledby="pills-seccion9-tab">
                            <div class="card">
                                <div class="card-header bg-primary text-white">
                                    <h5 class="card-title mb-0">CONOCIMIENTO MEJORADO DE PERSONA EXPUESTA POLÍTICAMENTE
                                        (PEP)</h5>
                                </div>
                                <div class="card-body">
                                    <div class="alert alert-info mb-4">
                                        <p><strong>DEFINICIÓN:</strong> PERSONA EXPUESTA POLÍTICAMENTE (PEP): son
                                            servidores
                                            públicos de cualquier sistema de nomenclatura y clasificación de empleos de
                                            la
                                            administración pública nacional y territorial, cuando en los cargos que
                                            ocupen,
                                            tengan en las funciones del área a la que pertenecen o en las de ficha del
                                            empleo que ocupan, bajo su responsabilidad directa o por delegación, la
                                            dirección general, de formulación de políticas institucionales y de adopción
                                            de
                                            planes, programas y proyectos, y el manejo directo de bienes, dineros o
                                            valores
                                            del estado.</p>
                                        <p class="mb-0">Estos pueden ser a través de ordenación de gasto, contratación
                                            pública, gerencia de proyectos de inversión, pagos, liquidaciones,
                                            administración de bienes muebles e inmuebles. Incluye también a las PEP
                                            Extranjeras y las PEP de organizaciones Internacionales. Estos terceros
                                            ostentaran esa calidad (activo) durante el ejercicio de su cargo y por dos
                                            (2)
                                            años más a su dejación. Ver Decreto 1081 de 2015 (Modificado por Decreto
                                            1674 de
                                            2016) y Decreto 830 del 2021</p>
                                    </div>

                                    <div class="alert alert-warning">
                                        <i class="fas fa-exclamation-circle"></i> Nota: Esta pregunta es obligatoria,
                                        por lo
                                        tanto se debe responder al menos una fila completa, de lo contrario el sistema
                                        no
                                        dejará continuar.
                                    </div>

                                    <div class="row g-3">
                                        <!-- Pregunta 43 -->
                                        <div class="col-md-12">
                                            <label for="pep_recursos_publicos" class="form-label">43. ¿Usted o alguno de
                                                los
                                                Representantes Legales, miembros de la Junta Directiva, Revisor Fiscal,
                                                Accionista/Socio; manejan o han manejado recursos públicos en los
                                                últimos 2
                                                años? <span class="text-danger">*</span></label>
                                            <select class="form-select" id="pep_recursos_publicos"
                                                name="pep_recursos_publicos" required onchange="toggleCamposPEP()">
                                                <option value="" selected disabled>Seleccione...</option>
                                                <option value="SI">SI</option>
                                                <option value="NO">NO</option>
                                                <option value="N/A">N/A</option>
                                            </select>
                                        </div>

                                        <!-- Pregunta 44 -->
                                        <div class="col-md-12">
                                            <label for="pep_cargo_publico" class="form-label">44. ¿Usted o alguno de los
                                                Representantes Legales, miembros de la Junta Directiva, Revisor Fiscal,
                                                Accionista/Socio; tiene o ha desempeñado un cargo público en los últimos
                                                dos
                                                años? <span class="text-danger">*</span></label>
                                            <select class="form-select" id="pep_cargo_publico" name="pep_cargo_publico"
                                                required onchange="toggleCamposPEP()">
                                                <option value="" selected disabled>Seleccione...</option>
                                                <option value="SI">SI</option>
                                                <option value="NO">NO</option>
                                                <option value="N/A">N/A</option>
                                            </select>
                                        </div>

                                        <!-- Pregunta 45 -->
                                        <div class="col-md-12">
                                            <label for="pep_relacion" class="form-label">45. ¿Usted o alguno de los
                                                Representantes Legales, miembros de la Junta Directiva, Revisor Fiscal,
                                                Accionista/Socio; es familiar, asesor o cercano a una persona que cumpla
                                                con
                                                las características descritas en la definición de PEP y en las preguntas
                                                1 y
                                                2? <span class="text-danger">*</span></label>
                                            <select class="form-select" id="pep_relacion" name="pep_relacion" required
                                                onchange="toggleCamposPEP()">
                                                <option value="" selected disabled>Seleccione...</option>
                                                <option value="SI">SI</option>
                                                <option value="NO">NO</option>
                                                <option value="N/A">N/A</option>
                                            </select>
                                        </div>

                                        <!-- Campos condicionales (se muestran si alguna respuesta es SI) -->
                                        <div id="campos_pep_detalle" style="display: none;">
                                            <h5 class="mt-4 mb-3">Información de la PEP</h5>

                                            <!-- Pregunta 46 -->
                                            <div class="col-md-12">
                                                <label for="pep_nombres" class="form-label">46. Nombres y apellidos de
                                                    la
                                                    PEP <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="pep_nombres"
                                                    name="pep_nombres">
                                            </div>

                                            <!-- Pregunta 47 -->
                                            <div class="col-md-6">
                                                <label for="pep_tipo_identificacion" class="form-label">47. Tipo de
                                                    identificación <span class="text-danger">*</span></label>
                                                <select class="form-select" id="pep_tipo_identificacion"
                                                    name="pep_tipo_identificacion"
                                                    onchange="toggleOtroCampo(this, 'grupo_otro_tipo_pep')">
                                                    <option value="" selected disabled>Seleccione...</option>
                                                    <option value="Cedula">Cédula</option>
                                                    <option value="Cedula de Extranjería">Cedula de Extranjería</option>
                                                    <option value="Diplomático">Diplomático</option>
                                                    <option value="Documento de identidad de extranjero">Documento de
                                                        identidad de extranjero</option>
                                                    <option value="Identidad Fiscal de Extranjero">Identidad Fiscal de
                                                        Extranjero</option>
                                                    <option value="Nit">Nit</option>
                                                    <option value="Nit de Personas Naturales">Nit de Personas Naturales
                                                    </option>
                                                    <option value="Pasaporte">Pasaporte</option>
                                                    <option value="Pasaporte ONU">Pasaporte ONU</option>
                                                    <option value="Otras">Otras</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6" id="grupo_otro_tipo_pep" style="display: none;">
                                                <label for="pep_otro_tipo_identificacion" class="form-label">Especifique
                                                    otro tipo <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control"
                                                    id="pep_otro_tipo_identificacion"
                                                    name="pep_otro_tipo_identificacion">
                                            </div>

                                            <!-- Campo para otro tipo de identificación PEP -->
                                            <div class="col-md-6" id="grupo_otro_tipo_pep" style="display: none;">
                                                <label for="pep_otro_tipo_identificacion" class="form-label">Especifique
                                                    otro tipo <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control"
                                                    id="pep_otro_tipo_identificacion"
                                                    name="pep_otro_tipo_identificacion">
                                            </div>

                                            <!-- Pregunta 48 -->
                                            <div class="col-md-6">
                                                <label for="pep_numero_identificacion" class="form-label">48. Número de
                                                    identificación <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="pep_numero_identificacion"
                                                    name="pep_numero_identificacion">
                                            </div>

                                            <!-- Pregunta 49 -->
                                            <div class="col-md-6">
                                                <label for="pep_pais_domicilio" class="form-label">49. País domicilio
                                                    <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="pep_pais_domicilio"
                                                    name="pep_pais_domicilio">
                                            </div>

                                            <!-- Pregunta 50 -->
                                            <div class="col-md-6">
                                                <label for="pep_cargo" class="form-label">50. Cargo <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="pep_cargo" name="pep_cargo">
                                            </div>

                                            <!-- Pregunta 51 -->
                                            <div class="col-md-6">
                                                <label for="pep_entidad_publica" class="form-label">51. Nombre de
                                                    entidad
                                                    pública <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="pep_entidad_publica"
                                                    name="pep_entidad_publica">
                                            </div>

                                            <!-- Pregunta 52 -->
                                            <div class="col-md-6">
                                                <label for="pep_activo" class="form-label">52. Activo <span
                                                        class="text-danger">*</span></label>
                                                <select class="form-select" id="pep_activo" name="pep_activo">
                                                    <option value="" selected disabled>Seleccione...</option>
                                                    <option value="SI">SI</option>
                                                    <option value="NO">NO</option>
                                                    <option value="N/A">N/A</option>
                                                </select>
                                            </div>

                                            <!-- Pregunta 53 -->
                                            <div class="col-md-6" id="grupo_fecha_desvinculacion" style="display:none;">
                                                <label for="pep_fecha_desvinculacion" class="form-label">53. Fecha
                                                    desvinculación <span class="text-danger">*</span></label>
                                                <input type="date" class="form-control" id="pep_fecha_desvinculacion"
                                                    name="pep_fecha_desvinculacion">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Botones de navegación -->
                            <div class="d-flex justify-content-between mt-4">
                                <button type="button" class="btn btn-secondary"
                                    onclick="mostrarSeccion(8)">Anterior</button>
                                <button type="button" class="btn btn-primary"
                                    onclick="validarSeccionGenerico(9,10)">Siguiente</button>
                            </div>
                        </div>