  <div class="tab-pane fade" id="pills-seccion11" role="tabpanel"
                            aria-labelledby="pills-seccion11-tab">
                            <div class="card">
                                <div class="card-header bg-primary text-white">
                                    <h5 class="card-title mb-0">INFORMACIÓN FINANCIERA</h5>
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
                                        <!-- Pregunta 56 -->
                                        <div class="col-md-12">
                                            <label for="actividad_economica" class="form-label">56. Describir actividad
                                                económica principal <span class="text-danger">*</span></label>
                                            <textarea class="form-control" id="actividad_economica"
                                                name="actividad_economica" rows="3" required></textarea>
                                        </div>

                                        <!-- Pregunta 57 -->
                                        <div class="col-md-6">
                                            <label for="sector_economico" class="form-label">57. Sector Económico <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="sector_economico"
                                                name="sector_economico" required>
                                        </div>

                                        <!-- Pregunta 58 -->
                                        <div class="col-md-6">
                                            <label for="divisa_reporte" class="form-label">58. Divisa del Reporte <span
                                                    class="text-danger">*</span></label>
                                            <select class="form-select" id="divisa_reporte" name="divisa_reporte"
                                                required>
                                                <option value="" selected disabled>Seleccione...</option>
                                                <option value="USD">USD</option>
                                                <option value="EUR">EUR</option>
                                                <option value="COP">COP</option>
                                            </select>
                                        </div>

                                        <!-- Pregunta 59 -->
                                        <div class="col-md-6">
                                            <label for="otros_ingresos" class="form-label">59. Total, otros ingresos
                                                <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="otros_ingresos"
                                                name="otros_ingresos" required>
                                        </div>

                                        <!-- Pregunta 60 -->
                                        <div class="col-md-6">
                                            <label for="costos_gastos" class="form-label">60. Total, Costos y Gastos
                                                <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="costos_gastos"
                                                name="costos_gastos" required>
                                        </div>

                                        <div class="col-12">
                                            <h6 class="mt-4 mb-3">61. Por favor indicar Información financiera con corte
                                                a
                                                31 de diciembre del año inmediatamente anterior, expresada en miles</h6>
                                        </div>

                                        <!-- Pregunta 61 -->
                                        <div class="col-md-6">
                                            <label for="total_activos" class="form-label">Total Activos <span
                                                    class="text-danger">*</span></label>
                                            <input type="number" class="form-control" id="total_activos"
                                                name="total_activos" required min="0" step="1">
                                        </div>

                                        <!-- Pregunta 62 -->
                                        <div class="col-md-6">
                                            <label for="total_pasivos" class="form-label">Total Pasivos <span
                                                    class="text-danger">*</span></label>
                                            <input type="number" class="form-control" id="total_pasivos"
                                                name="total_pasivos" required min="0" step="1">
                                        </div>

                                        <!-- Pregunta 63 -->
                                        <div class="col-md-6">
                                            <label for="total_patrimonio" class="form-label">Total Patrimonio <span
                                                    class="text-danger">*</span></label>
                                            <input type="number" class="form-control" id="total_patrimonio"
                                                name="total_patrimonio" required min="0" step="1">
                                        </div>

                                        <!-- Pregunta 64 -->
                                        <div class="col-md-6">
                                            <label for="total_ingresos" class="form-label">Total Ingresos act. principal
                                                <span class="text-danger">*</span></label>
                                            <input type="number" class="form-control" id="total_ingresos"
                                                name="total_ingresos" required min="0" step="1">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Botones de navegación -->
                            <div class="d-flex justify-content-between mt-4">
                                <button type="button" class="btn btn-secondary"
                                    onclick="mostrarSeccion(10)">Anterior</button>
                                <button type="button" class="btn btn-primary"
                                    onclick="validarSeccionGenerico(11,12)">Siguiente</button>
                            </div>
                        </div>