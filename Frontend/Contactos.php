<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Contáctanos | Restaurante El Comal</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <!-- Íconos de Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="css/estilos.css">
</head>

<body class="d-flex flex-column min-vh-100">
  <?php include 'includes/header.php'; ?>

  <main class="flex-grow-1">
    <div class="container py-5">

      <!-- Encabezado -->
      <section class="text-center mb-5">
        <h1 class="display-5 fw-bold text-danger">Contáctanos</h1>
        <p class="text-muted fs-5">Queremos saber de ti. Envíanos tus comentarios o visítanos en nuestro restaurante.</p>
        <hr class="w-25 mx-auto" style="border-top: 3px solid #b22222;">
      </section>

      <div class="row g-4">
        <!-- Formulario -->
        <div class="col-md-6">
          <div class="card shadow-sm border-0">
            <div class="card-body">
              <h4 class="text-danger mb-3">📩 Envíanos un mensaje</h4>
              <form action="enviar_contacto.php" method="POST">
                <div class="mb-3">
                  <label for="nombre" class="form-label fw-semibold">Nombre</label>
                  <input type="text" class="form-control" id="nombre" name="nombre" required>
                </div>
                <div class="mb-3">
                  <label for="correo" class="form-label fw-semibold">Correo electrónico</label>
                  <input type="email" class="form-control" id="correo" name="correo" required>
                </div>
                <div class="mb-3">
                  <label for="mensaje" class="form-label fw-semibold">Mensaje</label>
                  <textarea class="form-control" id="mensaje" name="mensaje" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-danger w-100 fw-semibold">Enviar mensaje</button>
              </form>
            </div>
          </div>
        </div>

        <!-- Información de contacto -->
        <div class="col-md-6">
          <div class="card shadow-sm border-0">
            <div class="card-body">
              <h4 class="text-danger mb-3">📍 Información</h4>
              <ul class="list-unstyled fs-6">
                <li><strong>Dirección:</strong> Calle Principal #12, San Salvador, El Salvador</li>
                <li><strong>Teléfono:</strong> +503 2522-2000</li>
                <li><strong>Correo:</strong> contacto@elcomal.com.sv</li>
                <li><strong>Horario:</strong> Lunes a Sábado, 7:00 a.m. - 8:00 p.m.</li>
                <li><strong>Horario:</strong> Domingo, 11:00 a.m. - 8:30 p.m.</li>
              </ul>

              <hr>

              <h5 class="text-danger mb-3 text-center">📱 Síguenos en redes sociales</h5>
              <div class="d-flex justify-content-center gap-4 fs-2">
                <a href="https://www.facebook.com/elcomaltipicos/?locale=es_LA" target="_blank" class="text-decoration-none text-primary" title="Facebook">
                  <i class="bi bi-facebook"></i>
                </a>
                <a href="https://www.instagram.com/elcomalsantaelena/?hl=es" target="_blank" class="text-decoration-none text-danger" title="Instagram">
                  <i class="bi bi-instagram"></i>
                </a>
                <a href="https://wa.me/50378210702" target="_blank" class="text-decoration-none text-success" title="WhatsApp">
                  <i class="bi bi-whatsapp"></i>
                </a>
              </div>

              <hr>

              <h5 class="text-danger mb-3">🌎 Encuéntranos</h5>
              <div class="ratio ratio-16x9">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d199.72305783638615!2d-89.263783!3d13.6523885!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f632fbc3b8d8489%3A0x1c7394ad03621aed!2sEl%20Comal%20Santa%20Elena!5e1!3m2!1ses!2ssv!4v1761497643612!5m2!1ses!2ssv" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                  
                </iframe>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </main>

  <?php include 'includes/footer.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>