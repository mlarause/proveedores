
        // Número total de secciones (ajusta si agregas/quitas secciones)
        let seccionAnteriorA6 = 1; // Por defecto
        const totalSecciones = 16;
        let seccionAnteriorA16 = 5; // Valor por defecto

        // ----------- NAVEGACIÓN ENTRE SECCIONES (Bootstrap Tabs) -----------
        function mostrarSeccion(numero) {
            // Guarda el origen de la 6 solo si vienes de 2, 3, 4 o 5
            if (numero === 6) {
                const actual = document.querySelector('.tab-pane.active');
                if (actual) {
                    const id = actual.id;
                    const match = id && id.match(/pills-seccion(\d+)/);
                    if (match) {
                        const origen = parseInt(match[1]);
                        if ([2, 3, 4, 5].includes(origen)) {
                            seccionAnteriorA6 = origen;
                        }
                    }
                }
            }
            const tabBtn = document.getElementById(`pills-seccion${numero}-tab`);
            if (tabBtn) tabBtn.style.display = 'block';
            const tabInstance = new bootstrap.Tab(tabBtn);
            tabInstance.show();
            const porcentaje = (numero / totalSecciones) * 100;
            document.querySelector('.progress-bar').style.width = `${porcentaje}%`;
            document.querySelector('.progress-bar').textContent = `${numero}/${totalSecciones}`;
            document.querySelector('.progress-bar').setAttribute('aria-valuenow', porcentaje);
        }

        // ----------- NAVEGACIÓN GENÉRICA PARA BOTONES "Siguiente" Y "Anterior" -----------
        function navTab(tabId) {
            const tabBtn = document.getElementById(tabId);
            if (tabBtn) tabBtn.style.display = 'block';
            const tabInstance = new bootstrap.Tab(tabBtn);
            tabInstance.show();
            const num = parseInt(tabId.replace(/\D/g, ''));
            if (!isNaN(num)) {
                const porcentaje = (num / totalSecciones) * 100;
                document.querySelector('.progress-bar').style.width = `${porcentaje}%`;
                document.querySelector('.progress-bar').textContent = `${num}/${totalSecciones}`;
                document.querySelector('.progress-bar').setAttribute('aria-valuenow', porcentaje);
            }
        }

        // ----------- FUNCIONES DE NAVEGACIÓN PERSONALIZADAS -----------


        function irASeccion1() {
            mostrarSeccion(1);
        }

        function regresarASeccionAnterior() {
            mostrarSeccion(5);
        }

        function anteriorSeccionEspecial() {
            mostrarSeccion(6);
        } // Ajusta según tu flujo

        // ----------- VALIDACIÓN Y AVANCE DE SECCIÓN 1 -----------
        function validarSeccion1() {
            const inputsRequeridos = document.querySelectorAll('#pills-seccion1 [required]');
            let valido = true;
            inputsRequeridos.forEach(input => {
                if (!input.value) {
                    input.classList.add('is-invalid');
                    valido = false;
                } else {
                    input.classList.remove('is-invalid');
                }
            });
            if (valido) {
                const tipoProveedor = document.getElementById('tipo_proveedor').value;
                let siguienteSeccionNumero = 2;
                if (tipoProveedor === 'Proveedor no gran contribuyente (crítico)') siguienteSeccionNumero = 2;
                else if (tipoProveedor === 'Proveedor gran contribuyente (no critico)') siguienteSeccionNumero = 3;
                else if (tipoProveedor === 'Persona natural') siguienteSeccionNumero = 4;
                else if (tipoProveedor === 'Mandatorio (Aerolinea, Naviera)') siguienteSeccionNumero = 5;
                mostrarSeccion(siguienteSeccionNumero);
            } else {
                alert('Por favor complete todos los campos requeridos.');
            }
        }
        // ----------- VALIDACIÓN Y AVANCE DE SECCIÓN 2 -----------
        function validarSeccion2() {
            const inputs = document.querySelectorAll('#pills-seccion2 [required]');
            let valido = true;
            inputs.forEach(input => {
                if (!input.value) {
                    input.classList.add('is-invalid');
                    valido = false;
                } else {
                    input.classList.remove('is-invalid');
                }
            });
            if (valido) {
                seccionAnteriorA6 = 2;
                mostrarSeccion(6);
            } else {
                alert('Por favor complete todos los campos requeridos.');
            }
        }

        // ----------- VALIDACIÓN Y AVANCE DE SECCIÓN 3 Y 4 (GENÉRICA) -----------
        function validarSeccionActual(numSeccion, numSiguiente) {
            const inputs = document.querySelectorAll(`#pills-seccion${numSeccion} [required]`);
            let valido = true;
            inputs.forEach(input => {
                if (!input.value) {
                    input.classList.add('is-invalid');
                    valido = false;
                } else {
                    input.classList.remove('is-invalid');
                }
            });
            if (valido) {
                // Guardar de dónde viene si va para la 6
                if (numSeccion === 3 && numSiguiente === 6) {
                    seccionAnteriorA6 = 3;
                }
                if (numSeccion === 4 && numSiguiente === 6) {
                    seccionAnteriorA6 = 4;
                }
                mostrarSeccion(numSiguiente);
            } else {
                alert('Por favor complete todos los campos requeridos.');
            }
        }

        // ----------- VALIDACIÓN Y AVANCE DE SECCIÓN 6 - 15  (GENÉRICA) -----------
        function validarSeccionGenerico(numActual, numSiguiente) {
            const inputs = document.querySelectorAll(`#pills-seccion${numActual} [required]`);
            let valido = true;
            inputs.forEach(input => {
                // Solo valida si el campo está visible
                if (input.offsetParent !== null) {
                    if (!input.value || (input.type === "checkbox" && !input.checked)) {
                        input.classList.add('is-invalid');
                        valido = false;
                    } else {
                        input.classList.remove('is-invalid');
                    }
                }
            });

            // Validación especial para la sesión 15 (declaraciones)
            if (numActual === 15) {
                const acepta = document.getElementById('acepta_si').checked;
                if (!acepta) {
                    alert('Debe aceptar las declaraciones para continuar.');
                    valido = false;
                }
            }

            if (valido) {
                // Si vas de la 15 a la 16, guarda el origen
                if (numActual === 15 && numSiguiente === 16) {
                    seccionAnteriorA16 = 15;
                }
                // Si vas a la 6 desde 2, 3, 4, 5 o 14, guarda el origen
                if (numSiguiente === 6 && [2, 3, 4, 5].includes(numActual)) {
                    seccionAnteriorA6 = numActual;
                }
                mostrarSeccion(numSiguiente);
            } else {
                alert('Por favor complete todos los campos requeridos.');
            }
        }

        function anteriorSeccion15() {
            if (seccionAnteriorA16 === 16) {
                mostrarSeccion(16);
            } else {
                mostrarSeccion(14);
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            activarEstadoAutomatico('pills-seccion2');
            activarEstadoAutomatico('pills-seccion3');
            activarEstadoAutomatico('pills-seccion4');
            activarEstadoAutomatico('pills-seccion5');
            // Si quieres para la 4, 5, etc. solo agrega:
            // activarEstadoAutomatico('pills-seccion4');
        });

        // ----------- VALIDACIONES DE OTRAS SECCIONES (EJEMPLO) -----------
        function validarSesion5() {
            let valido = true;
            const inputs = document.querySelectorAll('#pills-seccion5 [required]');
            inputs.forEach(input => {
                if (!input.value || (input.type === "checkbox" && !input.checked)) {
                    input.classList.add('is-invalid');
                    valido = false;
                } else {
                    input.classList.remove('is-invalid');
                }
            });

            const desea = document.getElementById('desea_diligenciar').value;
            if (!desea) {
                document.getElementById('desea_diligenciar').classList.add('is-invalid');
                valido = false;
            } else {
                document.getElementById('desea_diligenciar').classList.remove('is-invalid');
            }

            if (desea === "NO") {
                const motivo = document.getElementById('motivo_no');
                if (!motivo.value.trim()) {
                    motivo.classList.add('is-invalid');
                    valido = false;
                } else {
                    motivo.classList.remove('is-invalid');
                }
            }

            if (valido) {
                if (desea === "SI") {
                    mostrarSeccion(6);
                } else if (desea === "NO") {
                    seccionAnteriorA16 = 5;
                    mostrarSeccion(16);
                }
            } else {
                alert('Por favor complete todos los campos obligatorios.');
            }
        }
        // ----------- BOTÓN ANTERIOR DE SECCIÓN 6 -----------
        function regresarASeccionAnterior() {
            mostrarSeccion(seccionAnteriorA6);
        }

        // ----------- FUNCIONES DE VALIDACIÓN DE SECCIONES SIGUIENTES (EJEMPLO) -----------
        function validarYAvanzar() {
            const currentTab = document.querySelector('.tab-pane.active');
            const inputs = currentTab.querySelectorAll('[required]');
            let valido = true;
            inputs.forEach(input => {
                if (!input.value) {
                    input.classList.add('is-invalid');
                    valido = false;
                } else {
                    input.classList.remove('is-invalid');
                }
            });
            if (valido) {
                // Ajusta el número de sección destino según tu flujo
                mostrarSeccion(7);
            } else {
                alert('Por favor complete todos los campos requeridos.');
            }
        }

        // ----------- CAMPOS CONDICIONALES (EJEMPLO) -----------
        function toggleCamposContribuyente() {
            const select = document.getElementById('gran_contribuyente');
            const grupoResolucion = document.getElementById('grupo_resolucion');
            const grupoFecha = document.getElementById('grupo_fecha_resolucion');
            if (select.value === 'SI') {
                grupoResolucion.style.display = 'block';
                grupoFecha.style.display = 'block';
            } else {
                grupoResolucion.style.display = 'none';
                grupoFecha.style.display = 'none';
            }
        }

        function avanzarSegunDeseaDiligenciar() {
            const desea = document.getElementById('desea_diligenciar').value;
            if (desea === "SI") {
                mostrarSeccion(6);
            } else if (desea === "NO") {
                mostrarSeccion(16);
            } else {
                alert(
                    "Por favor seleccione una opción en la pregunta '¿Desea usted diligenciar el presente formulario?'"
                );
            }
        }

        function toggleOtrosProductos() {
            const select = document.getElementById('productos_ofrecidos');
            const grupoOtros = document.getElementById('grupo_otros_productos');
            if (select.value === 'Otras') {
                grupoOtros.style.display = 'block';
            } else {
                grupoOtros.style.display = 'none';
            }
        }
        document.getElementById('desea_diligenciar')?.addEventListener('change', function() {
            const motivo = document.getElementById('motivo_container');
            if (this.value === 'NO') {
                motivo.style.display = 'block';
                document.getElementById('motivo_no').setAttribute('required', 'required');
            } else {
                motivo.style.display = 'none';
                document.getElementById('motivo_no').removeAttribute('required');
            }
        });


        document.getElementById('firmaUpload').addEventListener('change', function(e) {
            const file = e.target.files[0];
            const previewContainer = document.getElementById('firmaPreviewContainer');
            const imgPreview = document.getElementById('firmaPreviewImg');
            const pdfPreview = document.getElementById('firmaPreviewPDF');

            if (!file) {
                previewContainer.style.display = 'none';
                imgPreview.style.display = 'none';
                pdfPreview.style.display = 'none';
                return;
            }

            const fileType = file.type;
            const reader = new FileReader();

            if (fileType === 'application/pdf') {
                reader.onload = function(e) {
                    imgPreview.style.display = 'none';
                    pdfPreview.style.display = 'block';
                    pdfPreview.src = e.target.result;
                    previewContainer.style.display = 'block';
                };
                reader.readAsDataURL(file);
            } else if (fileType.startsWith('image/')) {
                reader.onload = function(e) {
                    pdfPreview.style.display = 'none';
                    imgPreview.style.display = 'block';
                    imgPreview.src = e.target.result;
                    previewContainer.style.display = 'block';
                };
                reader.readAsDataURL(file);
            } else {
                previewContainer.style.display = 'none';
                imgPreview.style.display = 'none';
                pdfPreview.style.display = 'none';
            }
        });

        document.getElementById('removeFirma').addEventListener('click', function() {
            const input = document.getElementById('firmaUpload');
            input.value = '';
            document.getElementById('firmaPreviewContainer').style.display = 'none';
            document.getElementById('firmaPreviewImg').style.display = 'none';
            document.getElementById('firmaPreviewPDF').style.display = 'none';
        });


        function toggleOtroCampo(select, idCampo) {
            const campo = document.getElementById(idCampo);
            if (!campo) return;
            if (select.value === "Otras" || select.value === "OTRAS") {
                campo.style.display = "block";
                const input = campo.querySelector('input, textarea');
                if (input) input.setAttribute('required', 'required');
            } else {
                campo.style.display = "none";
                const input = campo.querySelector('input, textarea');
                if (input) input.removeAttribute('required');
            }
        }

        function agregarContacto() {
            // Selecciona el contenedor de contactos
            const container = document.getElementById('contactos-container');
            // Selecciona el primer formulario de contacto como plantilla
            const primerContacto = container.querySelector('.contacto-form');
            // Clona el formulario
            const nuevoContacto = primerContacto.cloneNode(true);

            // Limpia los valores de los inputs en el clon
            nuevoContacto.querySelectorAll('input').forEach(input => {
                input.value = '';
                input.classList.remove('is-invalid');
            });

            // Agrega el clon al contenedor
            container.appendChild(nuevoContacto);
        }

        function toggleCamposPEP() {
            const p43 = document.getElementById('pep_recursos_publicos').value;
            const p44 = document.getElementById('pep_cargo_publico').value;
            const p45 = document.getElementById('pep_relacion').value;
            const detalle = document.getElementById('campos_pep_detalle');
            if (p43 === 'SI' || p44 === 'SI' || p45 === 'SI') {
                detalle.style.display = 'block';
                // Hacer requeridos los campos internos
                detalle.querySelectorAll('input, select, textarea').forEach(el => el.setAttribute('required',
                    'required'));
            } else {
                detalle.style.display = 'none';
                detalle.querySelectorAll('input, select, textarea').forEach(el => el.removeAttribute('required'));
            }
        }

        function toggleOperacionesInternacionales() {
            const select = document.getElementById('operaciones_internacionales');
            const detalle = document.getElementById('detalle_operaciones_internacionales');
            if (select.value === 'SI') {
                detalle.style.display = 'block';
                // Hacer requeridos los campos internos
                detalle.querySelectorAll('input, select, textarea').forEach(el => el.setAttribute('required',
                    'required'));
            } else {
                detalle.style.display = 'none';
                detalle.querySelectorAll('input, select, textarea').forEach(el => el.removeAttribute('required'));
            }
        }

        // Mostrar pregunta 86 si en 85 selecciona "SI"
        document.getElementById('operador_economico').addEventListener('change', function() {
            const resolucion = document.getElementById('resolucion_vigencia_group');
            if (this.value === 'SI') {
                resolucion.style.display = 'block';
                document.getElementById('resolucion_vigencia').setAttribute('required', 'required');
            } else {
                resolucion.style.display = 'none';
                document.getElementById('resolucion_vigencia').removeAttribute('required');
            }
        });

        // Mostrar pregunta 90 si en 89 selecciona "SI" u "OTRAS"
        document.getElementById('seguridad_salud').addEventListener('change', function() {
            const avance = document.getElementById('avance_ss_group');
            if (this.value === 'SI' || this.value === 'OTRAS') {
                avance.style.display = 'block';
                document.getElementById('avance_ss').setAttribute('required', 'required');
            } else {
                avance.style.display = 'none';
                document.getElementById('avance_ss').removeAttribute('required');
            }
        });



        function anteriorSeccion15() {
            if (seccionAnteriorA6 === 16) {
                mostrarSeccion(16);
            } else {
                mostrarSeccion(14);
            }
        }

        document.getElementById('calidad_laboratorios').addEventListener('change', function() {
            const detalle = document.getElementById('detalle_certificaciones').closest('.col-md-12');
            if (this.value === 'SI' || this.value === 'OTRAS') {
                detalle.style.display = 'block';
                document.getElementById('detalle_certificaciones').setAttribute('required', 'required');
            } else {
                detalle.style.display = 'none';
                document.getElementById('detalle_certificaciones').removeAttribute('required');
            }
        });

        function irASeccion15Desde14() {
            seccionAnteriorA6 = 14;
            validarSeccionGenerico(14, 15);
        }

        function irASeccion15Desde16() {
            seccionAnteriorA6 = 16;
            mostrarSeccion(15);
        }

        function anteriorSeccion16() {
            if (seccionAnteriorA16 === 15) {
                mostrarSeccion(15);
            } else if (seccionAnteriorA16 === 5) {
                mostrarSeccion(5);
            } else {
                mostrarSeccion(1); // fallback
            }
        }

        function anteriorSeccion15() {
            if (seccionAnteriorA16 === 16) {
                mostrarSeccion(16);
            } else {
                mostrarSeccion(14);
            }
        }

        function activarEstadoAutomatico(tabId) {
            const tab = document.getElementById(tabId);
            if (!tab) return;
            // Busca todos los inputs file dentro de la sección
            tab.querySelectorAll('input[type="file"]').forEach(input => {
                input.addEventListener('change', function() {
                    // Busca el select de estado que esté en el mismo grupo (input-group o col)
                    let selectEstado = input.parentElement.querySelector('select');
                    // Si no está en el mismo nivel, busca en el siguiente hermano
                    if (!selectEstado) {
                        const next = input.parentElement.nextElementSibling;
                        if (next && next.tagName === 'SELECT') selectEstado = next;
                    }
                    // Si encuentra el select y hay archivo, cambia a "Completo"
                    if (selectEstado && input.files.length > 0) {
                        selectEstado.value = "Completo";
                    }
                });
            });
        }

        // Activa el cambio automático para todas las secciones que lo requieran
        document.addEventListener('DOMContentLoaded', function() {
            activarEstadoAutomatico('pills-seccion2');
            activarEstadoAutomatico('pills-seccion3');
            activarEstadoAutomatico('pills-seccion4');
            activarEstadoAutomatico('pills-seccion5');
            // Agrega más si tienes más secciones con archivos
        });

        function eliminarContacto(btn) {
            const contacto = btn.closest('.contacto-form');
            const container = document.getElementById('contactos-container');
            // Solo elimina si hay más de un formulario de contacto
            if (container.querySelectorAll('.contacto-form').length > 1) {
                contacto.remove();
            } else {
                alert('Debe haber al menos una persona de contacto.');
            }
        }

        // Muestra la pregunta 53 solo si en la 52 seleccionan "NO"
        document.getElementById('pep_activo').addEventListener('change', function() {
            var mostrar = this.value === 'NO';
            var grupo = document.getElementById('grupo_fecha_desvinculacion');
            var input = document.getElementById('pep_fecha_desvinculacion');
            grupo.style.display = mostrar ? 'block' : 'none';
            // Solo es requerido si está visible
            if (mostrar) {
                input.setAttribute('required', 'required');
            } else {
                input.removeAttribute('required');
                input.value = '';
            }
        });
