<?php
namespace Vista;

class Vista {

    public function mostarTipoAgresiones($tiposAgresiones) {
        ?>
        <!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Recursos sobre Agresiones</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
            <style>
                .bg-purple {
                    background-color: #6a1b9a !important;
                }
                .btn-purple {
                    background-color: #6a1b9a;
                    border-color: #6a1b9a;
                    color: white;
                }
                .btn-purple:hover {
                    background-color: #7e33a7;
                    color: white;
                }
                .card-body {
                    padding: 2rem;
                }
                .mb-3 {
                    margin-bottom: 1.5rem;
                }
                .tipo-container {
                    margin-bottom: 1.5rem;
                }
                .tipo-title-container {
                    display: flex;
                    align-items: center;
                    gap: 1rem;
                }
                .tipo-title {
                    font-size: 1.5rem;
                    font-weight: bold;
                    color: #6a1b9a;
                }
                .tipo-description {
                    font-size: 1.1rem;
                    line-height: 1.6;
                    padding-left: 1.5rem;
                }
            </style>
        </head>
        <body>
            <div class="container mt-5">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card shadow-sm">
                            <div class="card-header bg-purple text-white text-center">
                                <h3>Tipos de agresiones</h3>
                            </div>
                            <div class="card-body">

                                <!-- Mostrar tipos de agresiones -->
                                <?php foreach ($tiposAgresiones as $tipo): ?>
                                    <div class="tipo-container">
                                        <div class="tipo-title-container">
                                            <span class="tipo-title"><?= htmlspecialchars($tipo["nombre"]) ?></span>
                                            <a href="#" class="btn btn-purple btn-sm">Eliminar</a>
                                        </div>
                                        <p class="tipo-description">
                                            <?= htmlspecialchars($tipo["observaciones"]) ?>
                                        </p>
                                    </div>
                                <?php endforeach; ?>
                                <a href="#" class="btn btn-purple btn-sm">Añadir agresion</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bootstrap JS -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
        </body>
        </html>
        <?php
    }
}


?>
<?php 

public function vistaeliminarTipoAgresion($idTipoAgresion){
?>



<?php
}
?>

<?php
public function vista_anadiragresion(){
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir Nueva Agresión</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .bg-purple {
            background-color: #6a1b9a !important;
            /* Color más */
        }

        .btn-purple {
            background-color: #6a1b9a;
            border-color: #6a1b9a;
            color: white;
            /* Texto blanco */
        }

        .btn-purple:hover {
            background-color: #7e33a7;
            color: white;
            /* Texto blanco en estado hover */
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-header bg-purple text-white text-center">
                        <h3>Añadir Nueva Agresión</h3>
                    </div>
                    <div class="card-body">
                        <form>
                            <!-- Contacto -->
                            <div class="mb-3">
                                <label for="contacto" class="form-label">Tu contacto (opcional)</label>
                                <input type="text" class="form-control" id="contacto"
                                    placeholder="Escribe tus datos de contacto si lo deseas">
                            </div>

                            <!-- Tipo de Agresión -->
                            <div class="mb-3">
                                <label for="tipo" class="form-label">Tipo de Agresión <span
                                        class="text-danger">*</span></label>
                                <select class="form-select" id="tipo" onchange="mostrarDescripcion()" required>
                                    <option value="" disabled selected>Elige un tipo</option>
                                    <option value="fisico">Físico</option>
                                    <option value="psicologico">Psicológico</option>
                                    <option value="virtual">Virtual</option>
                                    <option value="otro">Otro</option>
                                </select>
                            </div>

                            <!-- Descripción del Tipo -->
                            <div class="mb-3" id="descripcion-tipo-container" style="display: none;">
                                <label for="descripcion-tipo" class="form-label">Sobre este tipo de agresión:</label>
                                <textarea class="form-control" id="descripcion-tipo" rows="3" readonly></textarea>
                            </div>

                            <!-- Explicación -->
                            <div class="mb-3">
                                <label for="explicacion" class="form-label">Explicación <span
                                        class="text-danger">*</span></label>
                                <textarea class="form-control" id="explicacion" rows="4"
                                    placeholder="Escribe la explicación de la agresión..." required></textarea>
                                <div class="invalid-feedback">
                                    Por favor, ingresa la explicación de la agresión.
                                </div>
                            </div>

                            <!-- Botón de Enviar -->
                            <button type="submit" class="btn btn-purple w-100">Guardar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
   
</body>

</html>



<?php
}
?>


