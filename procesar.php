<?php
include 'database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        // Directorio para guardar archivos
        $uploadDir = 'uploads/' . date('Y') . '/' . date('m') . '/';
        if (!file_exists($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }
        
        // Función para procesar archivos
        function procesarArchivo($fileInput, $uploadDir) {
            if (isset($_FILES[$fileInput]) && $_FILES[$fileInput]['error'] === UPLOAD_ERR_OK) {
                $fileExtension = pathinfo($_FILES[$fileInput]['name'], PATHINFO_EXTENSION);
                $fileName = uniqid() . '.' . $fileExtension;
                $filePath = $uploadDir . $fileName;
                
                if (move_uploaded_file($_FILES[$fileInput]['tmp_name'], $filePath)) {
                    return $filePath;
                }
            }
            return null;
        }
        
        // Procesar archivos de la sección 2
        $rut_vigente_path = procesarArchivo('rut_vigente', $uploadDir);
        $certificado_existencia_path = procesarArchivo('certificado_existencia', $uploadDir);
        $estados_financieros_path = procesarArchivo('estados_financieros', $uploadDir);
        $declaracion_renta_path = procesarArchivo('declaracion_renta', $uploadDir);
        $certificacion_bancaria_path = procesarArchivo('certificacion_bancaria', $uploadDir);
        $referencia_comercial_path = procesarArchivo('referencia_comercial', $uploadDir);
        $certificados_seguridad_path = procesarArchivo('certificados_seguridad', $uploadDir);
        $resolucion_habilitacion_path = procesarArchivo('resolucion_habilitacion', $uploadDir);
        $plan_contingencia_path = procesarArchivo('plan_contingencia', $uploadDir);
        $fachada_nomenclatura_path = procesarArchivo('fachada_nomenclatura', $uploadDir);
        
        // Insertar en la base de datos
        $stmt = $conn->prepare("INSERT INTO proveedores (
            razon_social, tipo_identificacion, numero_identificacion, tipo_proveedor, 
            numero_celular, correo_electronico,
            rut_vigente_path, rut_vigente_estado,
            certificado_existencia_path, certificado_existencia_estado,
            estados_financieros_path, estados_financieros_estado,
            declaracion_renta_path, declaracion_renta_estado,
            certificacion_bancaria_path, certificacion_bancaria_estado,
            referencia_comercial_path, referencia_comercial_estado,
            certificados_seguridad_path, certificados_seguridad_estado,
            resolucion_habilitacion_path, resolucion_habilitacion_estado,
            plan_contingencia_path, plan_contingencia_estado,
            fachada_nomenclatura_path, fachada_nomenclatura_estado
        ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        
        $stmt->execute([
            $_POST['razon_social'],
            $_POST['tipo_identificacion'],
            $_POST['numero_identificacion'],
            $_POST['tipo_proveedor'],
            $_POST['numero_celular'],
            $_POST['correo_electronico'],
            $rut_vigente_path,
            $_POST['rut_vigente_estado'],
            $certificado_existencia_path,
            $_POST['certificado_existencia_estado'],
            $estados_financieros_path,
            $_POST['estados_financieros_estado'],
            $declaracion_renta_path,
            $_POST['declaracion_renta_estado'],
            $certificacion_bancaria_path,
            $_POST['certificacion_bancaria_estado'],
            $referencia_comercial_path,
            $_POST['referencia_comercial_estado'],
            $certificados_seguridad_path,
            $_POST['certificados_seguridad_estado'],
            $resolucion_habilitacion_path,
            $_POST['resolucion_habilitacion_estado'],
            $plan_contingencia_path,
            $_POST['plan_contingencia_estado'],
            $fachada_nomenclatura_path,
            $_POST['fachada_nomenclatura_estado']
        ]);
        
        // Redireccionar a una página de éxito
        header('Location: index.php?success=1');
        exit();
        
    } catch(PDOException $e) {
        echo "Error al guardar los datos: " . $e->getMessage();
    }
} else {
    header('Location: index.php');
    exit();
}
?>