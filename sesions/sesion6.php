 <div class="tab-pane fade" id="pills-seccion6" role="tabpanel"
                            aria-labelledby="pills-seccion6-tab">
                            <div class="card">
                                <div class="card-header bg-primary text-white">
                                    <h5 class="card-title mb-0">Información de Contacto y Empresa</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row g-3">
                                        <!-- Dirección de Domicilio Principal -->
                                        <div class="col-md-12">
                                            <label for="direccion_domicilio" class="form-label">10. Dirección de
                                                Domicilio
                                                Principal <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="direccion_domicilio"
                                                name="direccion_domicilio" required>
                                        </div>

                                        <!-- País -->
                                        <div class="col-md-6">
                                            <label for="pais" class="form-label">11. País <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="pais" name="pais"
                                                value="Colombia" readonly>
                                        </div>

                                        <!-- Departamento -->
                                        <div class="col-md-6">
                                            <label for="departamento" class="form-label">12. Departamento <span
                                                    class="text-danger">*</span></label>
                                            <select class="form-select" id="departamento" name="departamento" required>
                                                <option value="" selected disabled>Seleccione...</option>
                                                <option value="Amazonas">Amazonas</option>
                                                <option value="Antioquia">Antioquia</option>
                                                <option value="Arauca">Arauca</option>
                                                <option value="Atlántico">Atlántico</option>
                                                <option value="Bolívar">Bolívar</option>
                                                <option value="Boyacá">Boyacá</option>
                                                <option value="Caldas">Caldas</option>
                                                <option value="Caquetá">Caquetá</option>
                                                <option value="Casanare">Casanare</option>
                                                <option value="Cauca">Cauca</option>
                                                <option value="Cesar">Cesar</option>
                                                <option value="Chocó">Chocó</option>
                                                <option value="Córdoba">Córdoba</option>
                                                <option value="Cundinamarca">Cundinamarca</option>
                                                <option value="Guainía">Guainía</option>
                                                <option value="Guaviare">Guaviare</option>
                                                <option value="Huila">Huila</option>
                                                <option value="La Guajira">La Guajira</option>
                                                <option value="Magdalena">Magdalena</option>
                                                <option value="Meta">Meta</option>
                                                <option value="Nariño">Nariño</option>
                                                <option value="Norte de Santander">Norte de Santander</option>
                                                <option value="Putumayo">Putumayo</option>
                                                <option value="Quindío">Quindío</option>
                                                <option value="Risaralda">Risaralda</option>
                                                <option value="San Andrés y Providencia">San Andrés y Providencia
                                                </option>
                                                <option value="Santander">Santander</option>
                                                <option value="Sucre">Sucre</option>
                                                <option value="Tolima">Tolima</option>
                                                <option value="Valle del Cauca">Valle del Cauca</option>
                                                <option value="Vaupés">Vaupés</option>
                                                <option value="Vichada">Vichada</option>
                                            </select>
                                        </div>

                                        <!-- Ciudad -->
                                        <div class="col-md-6">
                                            <label for="ciudad" class="form-label">13. Ciudad <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="ciudad" name="ciudad" required>
                                        </div>

                                        <!-- Teléfono -->
                                        <div class="col-md-6">
                                            <label for="telefono" class="form-label">14. Teléfono <span
                                                    class="text-danger">*</span></label>
                                            <input type="tel" class="form-control" id="telefono" name="telefono"
                                                required>
                                        </div>

                                        <!-- Email -->
                                        <div class="col-md-6">
                                            <label for="email_contacto" class="form-label">15. E-mail <span
                                                    class="text-danger">*</span></label>
                                            <input type="email" class="form-control" id="email_contacto"
                                                name="email_contacto" required>
                                        </div>

                                        <!-- Código Postal -->
                                        <div class="col-md-6">
                                            <label for="codigo_postal" class="form-label">16. Código Postal</label>
                                            <input type="text" class="form-control" id="codigo_postal"
                                                name="codigo_postal">
                                        </div>

                                        <!-- Años de experiencia -->
                                        <div class="col-md-6">
                                            <label for="anios_experiencia" class="form-label">17. Años de experiencia en
                                                el
                                                mercado <span class="text-danger">*</span></label>
                                            <input type="number" class="form-control" id="anios_experiencia"
                                                name="anios_experiencia" min="0" required>
                                        </div>

                                        <!-- Es Autoretenedor -->
                                        <div class="col-md-6">
                                            <label for="autoretenedor" class="form-label">18. Es Autoretenedor <span
                                                    class="text-danger">*</span></label>
                                            <select class="form-select" id="autoretenedor" name="autoretenedor"
                                                required>
                                                <option value="" selected disabled>Seleccione...</option>
                                                <option value="SI">SI</option>
                                                <option value="NO">NO</option>
                                            </select>
                                        </div>

                                        <!-- Es Gran Contribuyente -->
                                        <div class="col-md-6">
                                            <label for="gran_contribuyente" class="form-label">19. Es Gran Contribuyente
                                                <span class="text-danger">*</span></label>
                                            <select class="form-select" id="gran_contribuyente"
                                                name="gran_contribuyente" required
                                                onchange="toggleCamposContribuyente()">
                                                <option value="" selected disabled>Seleccione...</option>
                                                <option value="SI">SI</option>
                                                <option value="NO">NO</option>
                                            </select>
                                        </div>

                                        <!-- No. Resolución - Gran contribuyente (condicional) -->
                                        <div class="col-md-6" id="grupo_resolucion" style="display: none;">
                                            <label for="numero_resolucion" class="form-label">20. No. Resolución - Gran
                                                contribuyente <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="numero_resolucion"
                                                name="numero_resolucion">
                                        </div>

                                        <!-- Fecha de Resolución (condicional) -->
                                        <div class="col-md-6" id="grupo_fecha_resolucion" style="display: none;">
                                            <label for="fecha_resolucion" class="form-label">21. Fecha de Resolución
                                                <span class="text-danger">*</span></label>
                                            <input type="date" class="form-control" id="fecha_resolucion"
                                                name="fecha_resolucion">
                                        </div>

                                        <!-- Tipo de empresa -->
                                        <div class="col-md-6">
                                            <label for="tipo_empresa" class="form-label">22. Tipo de empresa <span
                                                    class="text-danger">*</span></label>
                                            <select class="form-select" id="tipo_empresa" name="tipo_empresa" required>
                                                <option value="" selected disabled>Seleccione...</option>
                                                <option value="Privada">Privada</option>
                                                <option value="Publica">Pública</option>
                                                <option value="Mixta">Mixta</option>
                                            </select>
                                        </div>

                                        <!-- Tipo de Sociedad -->
                                        <div class="col-md-6">
                                            <label for="tipo_sociedad" class="form-label">23. Tipo de Sociedad <span
                                                    class="text-danger">*</span></label>
                                            <select class="form-select" id="tipo_sociedad" name="tipo_sociedad"
                                                required>
                                                <option value="" selected disabled>Seleccione...</option>
                                                <option value="S.A.S.">S.A.S. – Sociedad por Acciones Simplificada
                                                </option>
                                                <option value="S.A.">S.A. – Sociedad Anónima</option>
                                                <option value="Ltda.">Ltda. – Sociedad de Responsabilidad Limitada
                                                </option>
                                                <option value="S. en C.">S. en C. – Sociedad en Comandita</option>
                                                <option value="S. en C.A.">S. en C.A. – Sociedad en Comandita por
                                                    Acciones
                                                </option>
                                                <option value="E.U.">E.U. – Empresa Unipersonal</option>
                                                <option value="Cooperativas">Cooperativas y Asociaciones Mutuales
                                                </option>
                                                <option value="Persona Juridica">Persona Juridica</option>
                                                <option value="Persona Natural">Persona Natural</option>
                                            </select>
                                        </div>

                                        <!-- Fecha de constitución -->
                                        <div class="col-md-6">
                                            <label for="fecha_constitucion" class="form-label">24. Fecha de la
                                                constitución
                                                de la persona jurídica <span class="text-danger">*</span></label>
                                            <input type="date" class="form-control" id="fecha_constitucion"
                                                name="fecha_constitucion" required>
                                        </div>

                                        <!-- Productos Ofrecidos -->
                                        <div class="col-md-6">
                                            <label for="productos_ofrecidos" class="form-label">
                                                25. Productos Ofrecidos (Objeto contractual) <span
                                                    class="text-danger">*</span>
                                            </label>
                                            <select class="form-select" id="productos_ofrecidos"
                                                name="productos_ofrecidos" required
                                                onchange="toggleOtroCampo(this, 'grupo_otros_productos')">
                                                <option value="" selected disabled>Seleccione...</option>
                                                <option value="Materiales de embalaje">Materiales de embalaje</option>
                                                <option value="Servicio de transporte">Servicio de transporte</option>
                                                <option value="Servicios tecnológicos">Servicios tecnológicos</option>
                                                <option value="Servicios aduaneros">Servicios aduaneros</option>
                                                <option value="Servicios de almacenamiento">Servicios de almacenamiento
                                                </option>
                                                <option value="Otras">Otras</option>
                                            </select>
                                        </div>
                                        <div class="col-md-12" id="grupo_otros_productos" style="display: none;">
                                            <label for="otros_productos" class="form-label">
                                                Especifique otros productos <span class="text-danger">*</span>
                                            </label>
                                            <input type="text" class="form-control" id="otros_productos"
                                                name="otros_productos">
                                        </div>

                                        <!-- Campo "Otras" productos (condicional) -->
                                        <div class="col-md-12" id="grupo_otros_productos" style="display: none;">
                                            <label for="otros_productos" class="form-label">Especifique otros productos
                                                <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="otros_productos"
                                                name="otros_productos">
                                        </div>

                                        <!-- Zona franca -->
                                        <div class="col-md-6">
                                            <label for="zona_franca" class="form-label">26. Se encuentra en una zona
                                                franca
                                                <span class="text-danger">*</span></label>
                                            <select class="form-select" id="zona_franca" name="zona_franca" required>
                                                <option value="" selected disabled>Seleccione...</option>
                                                <option value="SI">SI</option>
                                                <option value="NO">NO</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Botones de navegación -->
                            <div class="d-flex justify-content-between mt-4">
                                <button type="button" class="btn btn-secondary"
                                    onclick="mostrarSeccion(seccionAnteriorA6)">Anterior</button>
                                <button type="button" class="btn btn-primary"
                                    onclick="validarSeccionGenerico(6,7)">Siguiente</button>
                            </div>
                        </div>