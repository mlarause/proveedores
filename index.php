</ /php include 'database.php' ; ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Proveedores</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Estilos personalizados -->
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/signature_pad@4.0.0/dist/signature_pad.umd.min.js"></script>
</head>

<body class="justificar-todo">
    <div class="container mt-4 mb-5">
        <!-- Título y Logo -->
        <div class="container mt-4 mb-5">
            <!-- Título y Logo (centrados solo estos elementos) -->
            <div class="text-center mb-4">

                <h1>Registro de Proveedores <span class="text-morado">SIGHTLOG</span></h1>
                <img src="images/Captura.PNG" alt="Logo Sightlog" style="max-height: 60px; width: auto;" class="mt-2">
                <img src="images/Captura2.PNG" alt="Logo Sightlog" style="max-height: 60px; width: auto;" class="mt-2">
                <img src="images/Captura3.PNG" alt="Logo Sightlog" style="max-height: 60px; width: auto;" class="mt-2">
            </div>

            <form id="formProveedor" action="procesar.php" method="post" enctype="multipart/form-data">
                <!-- Barra de progreso -->
                <div class="progress mb-4">
                    <div class="progress-bar" role="progressbar" style="width: 8%;" aria-valuenow="8" aria-valuemin="0"
                        aria-valuemax="100">1/16</div>
                </div>

                <!-- Indicador de secciones -->
                <div class="overflow-auto mb-4" style="white-space:nowrap;">
                    <ul class="nav nav-pills flex-nowrap" id="pills-tab" role="tablist" style="min-width:600px;">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-seccion1-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-seccion1" type="button" role="tab" aria-controls="pills-seccion1"
                                aria-selected="true">Información Básica</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-seccion2-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-seccion2" type="button" role="tab" aria-controls="pills-seccion2"
                                aria-selected="false" style="display:none;">Documentación Crítica</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-seccion3-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-seccion3" type="button" role="tab" aria-controls="pills-seccion3"
                                aria-selected="false" style="display:none;">Documentación No Crítica</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-seccion4-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-seccion4" type="button" role="tab" aria-controls="pills-seccion4"
                                aria-selected="false" style="display:none;">Documentación Natural</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-seccion5-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-seccion5" type="button" role="tab" aria-controls="pills-seccion5"
                                aria-selected="false" style="display:none;">
                                Doc. Mandatorios
                            </button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-seccion6-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-seccion6" type="button" role="tab" aria-controls="pills-seccion6"
                                aria-selected="false" style="display:none;">Información de Contacto</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-seccion7-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-seccion7" type="button" role="tab" aria-controls="pills-seccion7"
                                aria-selected="false" style="display:none;">Representante Legal</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-seccion8-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-seccion8" type="button" role="tab" aria-controls="pills-seccion8"
                                aria-selected="false" style="display:none;">Personas Contacto</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-seccion9-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-seccion9" type="button" role="tab" aria-controls="pills-seccion9"
                                aria-selected="false" style="display:none;">Información PEP</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-seccion10-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-seccion10" type="button" role="tab"
                                aria-controls="pills-seccion10" aria-selected="false"
                                style="display:none;">Beneficiarios Finales</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-seccion11-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-seccion11" type="button" role="tab"
                                aria-controls="pills-seccion11" aria-selected="false" style="display:none;">
                                Información Financiera
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-seccion12-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-seccion12" type="button" role="tab"
                                aria-controls="pills-seccion12" aria-selected="false" style="display:none;">
                                Operaciones Internacionales
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-seccion13-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-seccion13" type="button" role="tab"
                                aria-controls="pills-seccion13" aria-selected="false" style="display:none;">
                                Referencia Comercial
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-seccion14-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-seccion14" type="button" role="tab"
                                aria-controls="pills-seccion14" aria-selected="false" style="display:none;">
                                Certificaciones
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-seccion15-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-seccion15" type="button" role="tab"
                                aria-controls="pills-seccion15" aria-selected="false" style="display:none;">
                                Declaraciones y Autorizaciones
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-seccion16-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-seccion16" type="button" role="tab"
                                aria-controls="pills-seccion16" aria-selected="false" style="display:none;">
                                Documentos Requeridos
                            </button>
                        </li>




                    </ul>

                    <!-- Contenido de las secciones -->
                    <div class="tab-content" id="pills-tabContent">


                        <!-- Sección 1: Información Básica -->
                    <?php include 'sesions/sesion1.php'; ?>

                        <!-- Sección 2: Documentación Proveedor Crítico -->
                    <?php include 'sesions/sesion2.php'; ?>

                        <!-- Sección 3: Documentación Proveedor No Crítico -->
                     <?php include 'sesions/sesion3.php'; ?>



                        <!-- Sección 4: Documentación Proveedor Natural Especial -->
                    <?php include 'sesions/sesion4.php'; ?>

                        <!-- Nueva Sesión 5 - Mandatorio -->
                    <?php include 'sesions/sesion5.php'; ?>


                        <!-- Sección 6 : Información de Contacto y Empresa -->
                    <?php include 'sesions/sesion6.php'; ?>


                        <!-- Sección 7: Información del Representante Legal Principal -->
                    <?php include 'sesions/sesion7.php'; ?>

                        <!-- Sección 8: Personas de Contacto -->
                    <?php include 'sesions/sesion8.php'; ?>



                        <!-- Sección 9: Conocimiento Mejorado de PEP -->
                    <?php include 'sesions/sesion9.php'; ?>


                        <!-- Sección 10: Conocimiento de Beneficiarios Finales -->
                    <?php include 'sesions/sesion10.php'; ?>


                        <!-- Sección 11: Información Financiera -->
                    <?php include 'sesions/sesion11.php'; ?> 


                        <!-- Sección 12: Operaciones Internacionales -->
                     <?php include 'sesions/sesion12.php'; ?>


                        <!-- Contenido de la sesión 13 -->
                      <?php include 'sesions/sesion13.php'; ?>


                        <!-- Contenido de la sesión 14 -->
                     <?php include 'sesions/sesion14.php'; ?>


                        <!-- Contenido de la sesión 15 -->
                     <?php include 'sesions/sesion15.php'; ?>


                        <!-- Contenido de la sesión 16 -->
                     <?php include 'sesions/sesion16.php'; ?>

        <!-- Bootstrap JS y dependencias -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

        <script>
        // Número total de secciones (ajusta si agregas/quitas secciones)
        let seccionAnteriorA6 = 1; // Por defecto
        const totalSecciones = 16;
        let seccionAnteriorA16 = 5; // Valor por defecto
        let contadorReferencia13 = 1;

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

   function plantillaReferencia13(idx) {
    return `
    <div class="row g-3 referencia13 border rounded p-3 mb-3 mt-4 position-relative" data-idx="${idx}">
        <div class="col-md-12">
            <label class="form-label">78. Nombre o razón social <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="referencias13[${idx}][nombre_razon_social]" required>
        </div>
        <div class="col-md-12">
            <label class="form-label">79. Ciudad Domicilio Principal <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="referencias13[${idx}][ciudad_domicilio]" required>
        </div>
        <div class="col-md-12">
            <label class="form-label">80. Nombre y Apellido del Contacto <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="referencias13[${idx}][nombre_contacto]" required>
        </div>
        <div class="col-md-12">
            <label class="form-label">81. Cargo <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="referencias13[${idx}][cargo_contacto]" required>
        </div>
        <div class="col-md-12">
            <label class="form-label">82. Teléfono / Celular de Contacto <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="referencias13[${idx}][telefono_contacto]" required>
        </div>
        <div class="col-12 d-flex justify-content-end mt-3">
            <button type="button" class="btn btn-danger eliminar-referencia13" onclick="eliminarReferencia13(${idx})">
                <i class="fas fa-trash-alt"></i> Eliminar
            </button>
        </div>
    </div>
    `;
}

function agregarReferencia13() {
    const contenedor = document.getElementById('contenedor-referencias13');
    contenedor.insertAdjacentHTML('beforeend', plantillaReferencia13(contadorReferencia13));
    contadorReferencia13++;
}

function eliminarReferencia13(idx) {
    // Cuenta la referencia estática (la que no tiene data-idx) y las dinámicas
    const referenciasEstaticas = document.querySelectorAll('.row.g-3.referencia13:not([data-idx])');
    const referenciasDinamicas = document.querySelectorAll('.referencia13[data-idx]');
    const total = referenciasEstaticas.length + referenciasDinamicas.length;

    // Solo permite eliminar si quedan más de 2 referencias en total
    if (total > 2) {
        const ref = document.querySelector(`.referencia13[data-idx="${idx}"]`);
        if (ref) ref.remove();
    } else {
        alert('Debe haber al menos dos referencias comerciales.');
    }
}

document.addEventListener('DOMContentLoaded', function() {
    if (document.getElementById('contenedor-referencias13')) {
        agregarReferencia13();
    }
});

document.getElementById('gestion_calidad').addEventListener('change', function() {
    const campos = document.getElementById('campos_certificado_calidad');
    if (this.value === 'SI') {
        campos.style.display = 'block';
        document.getElementById('numero_certificado_calidad').setAttribute('required', 'required');
        document.getElementById('fecha_vigencia_calidad').setAttribute('required', 'required');
    } else {
        campos.style.display = 'none';
        document.getElementById('numero_certificado_calidad').removeAttribute('required');
        document.getElementById('fecha_vigencia_calidad').removeAttribute('required');
    }
});

document.getElementById('seguridad_suministro').addEventListener('change', function() {
    const campos84 = document.getElementById('campos_certificado_calidad_84');
    if (this.value === 'SI') {
        campos84.style.display = 'block';
        document.getElementById('numero_certificado_calidad_84').setAttribute('required', 'required');
        document.getElementById('fecha_vigencia_calidad_84').setAttribute('required', 'required');
    } else {
        campos84.style.display = 'none';
        document.getElementById('numero_certificado_calidad_84').removeAttribute('required');
        document.getElementById('fecha_vigencia_calidad_84').removeAttribute('required');
    }
});

// Activa el cambio automático de estado para los adjuntos de la 83 y 84
document.addEventListener('DOMContentLoaded', function() {
    // Para la pregunta 83
    document.getElementById('certificado_gestion_calidad')?.addEventListener('change', function() {
        const selectEstado = document.querySelector('select[name="certificaciones[certificado_gestion_calidad_estado]"]');
        if (selectEstado && this.files.length > 0) {
            selectEstado.value = "Completo";
        }
    });
    // Para la pregunta 84
    document.getElementById('certificado_gestion_ambiental_84')?.addEventListener('change', function() {
        const selectEstado = document.querySelector('select[name="certificaciones[certificado_gestion_ambiental_estado_84]"]');
        if (selectEstado && this.files.length > 0) {
            selectEstado.value = "Completo";
        }
    });
});

// Mostrar/ocultar campos adicionales SOLO para la pregunta 85
document.getElementById('operador_economico').addEventListener('change', function() {
    const campos = document.getElementById('campos_operador_economico');
    if (this.value === 'SI') {
        campos.style.display = 'block';
        document.getElementById('numero_certificado_operador').setAttribute('required', 'required');
        document.getElementById('fecha_vigencia_operador').setAttribute('required', 'required');
        document.getElementById('certificado_operador_economico').setAttribute('required', 'required');
    } else {
        campos.style.display = 'none';
        document.getElementById('numero_certificado_operador').removeAttribute('required');
        document.getElementById('fecha_vigencia_operador').removeAttribute('required');
        document.getElementById('certificado_operador_economico').removeAttribute('required');
        // Limpia los campos si se ocultan
        document.getElementById('numero_certificado_operador').value = '';
        document.getElementById('fecha_vigencia_operador').value = '';
        document.getElementById('certificado_operador_economico').value = '';
        const selectEstado = document.querySelector('select[name="certificaciones[certificado_operador_economico_estado]"]');
        if (selectEstado) selectEstado.value = '';
    }
});

// Cambio automático de estado para el adjunto de la 85
document.getElementById('certificado_operador_economico')?.addEventListener('change', function() {
    const selectEstado = document.querySelector('select[name="certificaciones[certificado_operador_economico_estado]"]');
    if (selectEstado && this.files.length > 0) {
        selectEstado.value = "Completo";
    }
});
        </script>