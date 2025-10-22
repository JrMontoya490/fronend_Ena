<?php
include 'includes/config.php';
$data = getApiData("/api/comidas?populate=*");
$comidas = $data['data'] ?? [];
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Restaurante El Comal</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">

<?php include 'includes/header.php'; ?>
<div class="container py-5">
  <h1 class="text-center mb-4">🍕 Menú del Restaurante</h1>
  <div class="row">
    <?php if (empty($comidas)): ?>
    <p class="text-center text-muted">No hay comidas disponibles o la API no está accesible.</p>
<?php else: ?>
    <?php foreach ($comidas as $comida): ?>
        <?php
            // Como los datos ya no están dentro de "attributes", los leemos directamente
            $nombre = $comida['nombre'] ?? 'Plato sin nombre';
            $precio = $comida['precio'] ?? 0.00;
            $categoria = $comida['categoria'] ?? 'Sin categoría';

            // Descripción (puede venir como un array anidado)
            $descripcion = '';
            if (!empty($comida['descripcion'][0]['children'][0]['text'])) {
                $descripcion = $comida['descripcion'][0]['children'][0]['text'];
            }

            // Imagen: usamos la versión "medium" si existe
            $imagen = $comida['imagen']['formats']['medium']['url']
                        ?? $comida['imagen']['url']
                        ?? '';

            // Si no hay imagen, usamos una de respaldo
            $imagenUrl = $imagen
                ? htmlspecialchars($imagen)
                : "https://via.placeholder.com/400x300?text=Sin+Imagen";
        ?>
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm h-100">
                <img src="<?= $imagenUrl ?>" class="card-img-top" alt="<?= htmlspecialchars($nombre) ?>">
                <div class="card-body">
                    <h5 class="card-title"><?= htmlspecialchars($nombre) ?></h5>
                    <p class="card-text"><?= htmlspecialchars($descripcion) ?></p>
                    <p class="fw-bold">💲<?= number_format($precio, 2) ?></p>
                    <span class="badge bg-secondary"><?= htmlspecialchars($categoria) ?></span>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
<?php endif; ?>
  </div>
</div>

<?php include 'includes/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
