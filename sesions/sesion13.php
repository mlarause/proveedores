  <div class="tab-pane fade" id="pills-seccion13" role="tabpanel" aria-labelledby="pills-seccion13-tab">
      <div class="card">
          <div class="card-header bg-primary text-white">
              <h5 class="card-title mb-0">REFERENCIA COMERCIAL</h5>
          </div>
          <div class="card-body">
              <div class="alert alert-warning">
                  <i class="fas fa-exclamation-circle"></i> Nota: Debe completar al menos una
                  referencia comercial completa y minino 2 referencias.
              </div>

              <div class="row g-3">
                  <!-- Pregunta 78 -->
                  <div class="col-md-12">
                      <label for="nombre_razon_social" class="form-label">78. Nombre o razón
                          social
                          <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="nombre_razon_social"
                          name="referencias[nombre_razon_social]" required>
                  </div>

                  <!-- Pregunta 79 -->
                  <div class="col-md-12">
                      <label for="ciudad_domicilio" class="form-label">79. Ciudad Domicilio
                          Principal
                          <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="ciudad_domicilio" name="referencias[ciudad_domicilio]"
                          required>
                  </div>

                  <!-- Pregunta 80 -->
                  <div class="col-md-12">
                      <label for="nombre_contacto" class="form-label">80. Nombre y Apellido del
                          Contacto <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="nombre_contacto" name="referencias[nombre_contacto]"
                          required>
                  </div>

                  <!-- Pregunta 81 -->
                  <div class="col-md-12">
                      <label for="cargo_contacto" class="form-label">81. Cargo <span
                              class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="cargo_contacto" name="referencias[cargo_contacto]"
                          required>
                  </div>

                  <!-- Pregunta 82 -->
                  <div class="col-md-12">
                      <label for="telefono_contacto" class="form-label">82. Teléfono / Celular de
                          Contacto <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="telefono_contacto"
                          name="referencias[telefono_contacto]" required>
                  </div>
              </div>
              <div id="contenedor-referencias13"></div>
              <button type="button" class="btn btn-secondary mt-3" onclick="agregarReferencia13()">Agregar otra referencia
                  comercial</button>





          </div>
      </div>
  





  <!-- Botones de navegación (idénticos a otras sesiones) -->
  <div class="d-flex justify-content-between mt-4">
      <button type="button" class="btn btn-secondary" onclick="mostrarSeccion(12)">Anterior</button>
      <button type="button" class="btn btn-primary" onclick="validarSeccionGenerico(13,14)">Siguiente</button>
  </div>
  </div>