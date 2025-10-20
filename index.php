<?php
$apiUrl = "http://localhost:1337/api/comidas?populate=*";
$response = file_get_contents($apiUrl);
$data = json_decode($response, true);
$comidas = $data['data'] ?? [];
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Restaurante Delicia</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
  <div class="container py-5">
    <h1 class="text-center mb-4">🍕 Menú del Restaurante</h1>
    <div class="row">
      <?php if (empty($comidas)): ?>
        <p class="text-center text-muted">No hay comidas disponibles.</p>
      <?php else: ?>
        <?php foreach ($comidas as $comida): ?>
          <?php
            $nombre = $comida['nombre'];
            $precio = $comida['precio'];
            $categoria = $comida['categoria'] ?? 'Sin categoría';
            $disponible = $comida['disponible'] ?? false;

            // Extraer descripción (texto plano desde los bloques)
            $descripcion = '';
            if (!empty($comida['descripcion'][0]['children'][0]['text'])) {
              $descripcion = $comida['descripcion'][0]['children'][0]['text'];
            }

            // Imagen (usa la versión mediana si existe)
            $imagen = $comida['imagen']['formats']['medium']['url'] 
                      ?? $comida['imagen']['url'] 
                      ?? '';
            $imagenUrl = $imagen ? "http://localhost:1337" . $imagen : "https://via.placeholder.com/400x300?text=Sin+Imagen";
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
</body>
</html>
