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
  <link rel="stylesheet" href="css/estilos.css">
</head>
<body class="d-flex flex-column min-vh-100">

<?php include 'includes/header.php'; ?>

<main class="flex-grow-1">
  <div class="container py-4">

    <!-- Carrusel de comidas -->
    <?php if (!empty($comidas)): ?>
    <div id="carruselComidas" class="carousel slide mb-5" data-bs-ride="carousel">
      <div class="carousel-inner rounded-4 shadow-sm">
        <?php $first = true; foreach ($comidas as $comida): 
          $imagen = $comida['imagen']['formats']['medium']['url']
                    ?? $comida['imagen']['url']
                    ?? "https://via.placeholder.com/800x400?text=Sin+Imagen";
          $nombre = htmlspecialchars($comida['nombre'] ?? 'Plato sin nombre');
        ?>
          <div class="carousel-item <?= $first ? 'active' : '' ?>">
            <img src="<?= htmlspecialchars($imagen) ?>" class="d-block w-100" alt="<?= $nombre ?>">
            <div class="carousel-caption">
              <h5><?= $nombre ?></h5>
            </div>
          </div>
        <?php $first = false; endforeach; ?>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carruselComidas" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carruselComidas" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>
    <?php endif; ?>

    <!-- Título -->
    <h1 class="text-center mb-4">🍽️ Nuestro Menú</h1>

    <!-- Botones de filtro -->
    <div class="filter-buttons">
      <button class="btn btn-outline-danger active" data-filter="all">Todo</button>
      <button class="btn btn-outline-danger" data-filter="Desayuno">Desayunos</button>
      <button class="btn btn-outline-danger" data-filter="Almuerzo">Almuerzo</button>
      <button class="btn btn-outline-danger" data-filter="Antojito">Antojitos</button>
      <button class="btn btn-outline-danger" data-filter="Pupusas">Pupusas</button>
    </div>

    <!-- Grid de comidas -->
    <div class="row" id="menuContainer">
      <?php if (empty($comidas)): ?>
        <p class="text-center text-muted">No hay comidas disponibles o la API no está accesible.</p>
      <?php else: ?>
        <?php foreach ($comidas as $comida): 
          $nombre = $comida['nombre'] ?? 'Plato sin nombre';
          $precio = $comida['precio'] ?? 0.00;
          $categoria = $comida['categoria'] ?? 'Sin categoría';
          $descripcion = !empty($comida['descripcion'][0]['children'][0]['text'])
                        ? $comida['descripcion'][0]['children'][0]['text']
                        : '';
          $imagen = $comida['imagen']['formats']['medium']['url']
                    ?? $comida['imagen']['url']
                    ?? '';
          $imagenUrl = $imagen ?: "https://via.placeholder.com/400x300?text=Sin+Imagen";
        ?>
          <div class="col-md-4 mb-4 menu-item show" data-category="<?= htmlspecialchars($categoria) ?>">
            <div class="card shadow-sm h-100">
              <img src="<?= htmlspecialchars($imagenUrl) ?>" class="card-img-top" alt="<?= htmlspecialchars($nombre) ?>">
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
</main>

<?php include 'includes/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  // ==== Filtro por categoría con animación ====
  const buttons = document.querySelectorAll('.filter-buttons .btn');
  const items = document.querySelectorAll('.menu-item');

  buttons.forEach(btn => {
    btn.addEventListener('click', () => {
      buttons.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      const filter = btn.getAttribute('data-filter').toLowerCase();

      items.forEach(item => {
        const category = item.getAttribute('data-category').toLowerCase();
        if (filter === 'all' || category === filter) {
          item.classList.remove('hide');
          item.classList.add('show');
        } else {
          item.classList.remove('show');
          item.classList.add('hide');
        }
      });
    });
  });

  // ==== Animación captions del carrusel ====
  const carouselElement = document.getElementById('carruselComidas');
  const captions = carouselElement.querySelectorAll('.carousel-caption');

  if (captions.length > 0) captions[0].classList.add('show');

  carouselElement.addEventListener('slid.bs.carousel', () => {
    captions.forEach(c => c.classList.remove('show'));
    const activeCaption = carouselElement.querySelector('.carousel-item.active .carousel-caption');
    if (activeCaption) activeCaption.classList.add('show');
  });
</script>

</body>
</html>
