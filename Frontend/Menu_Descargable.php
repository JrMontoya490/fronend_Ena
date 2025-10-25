<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Descarga Nuestro Menú | Restaurante El Comal</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="css/estilos.css">
</head>

<body class="d-flex flex-column min-vh-100">
  <?php include 'includes/header.php'; ?>

  <main class="flex-grow-1">
    <div class="container text-center py-5">
      <h1 class="text-danger fw-bold mb-3">📲 Descarga Nuestro Menú</h1>
      <p class="text-muted mb-4 fs-5">Escanea el código QR o haz clic en el botón para descargar nuestro menú en PDF.</p>
      <hr class="w-25 mx-auto" style="border-top: 3px solid #b22222;">

      <!-- Sección QR -->
      <div class="card shadow-sm border-0 mx-auto" style="max-width: 400px;">
        <div class="card-body">
          <h5 class="text-danger mb-3">Menú en PDF</h5>

          <!-- QR generado (puedes reemplazar el src si prefieres usar tu propio generador) -->
          <?php
            $menuUrl = "https://tusitio.com/archivos/menu.pdf"; // URL real de tu menú PDF
            $qrUrl = "https://api.qrserver.com/v1/create-qr-code/?size=250x250&data=" . urlencode($menuUrl);
          ?>
          <img src="<?= $qrUrl ?>" alt="Código QR del Menú" class="img-fluid mb-3 rounded-3 border">

          <div>
            <a href="<?= $menuUrl ?>" class="btn btn-danger fw-semibold" download>
              <i class="bi bi-file-earmark-pdf"></i> Descargar Menú
            </a>
          </div>
        </div>
      </div>

      <!-- Texto extra -->
      <p class="mt-4 text-muted">¡Llévanos contigo! Escanea el código para tener siempre nuestro menú a mano.</p>
    </div>
  </main>

  <?php include 'includes/footer.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
