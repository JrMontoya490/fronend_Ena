<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Conócenos | Restaurante El Comal</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/estilos.css">
</head>

<body class="d-flex flex-column min-vh-100">
  <?php include 'includes/header.php'; ?>

  <main class="flex-grow-1">
    <div class="container py-5">

      <!-- Título principal -->
      <section class="text-center mb-5">
        <h1 class="display-5 fw-bold text-danger">Conócenos</h1>
        <p class="text-muted fs-5">Nuestra historia, pasión y compromiso con la comida tradicional</p>
        <hr class="w-25 mx-auto" style="border-top: 3px solid #b22222;">
      </section>

      <!-- Historia -->
      <section class="row align-items-center mb-5">
        <div class="col-md-6 mb-4 mb-md-0">
          <img src="imagenes/comal-historia.jpg" alt="Historia del restaurante El Comal"
            class="img-fluid rounded shadow-lg">
        </div>
        <div class="col-md-6">
          <h2 class="text-danger mb-3">Nuestra Historia</h2>
          <p class="text-justify">
           El restaurante "El Comal", ubicado en Santa Elena, inició como un pequeño puesto de pupusas fundado
           por Don Néstor, quien con esfuerzo logro abrir su propios local en 2017 cerca de la embajada americana.
           con el tiempo su negocio fue creciendo gracias al apoyo de colaboradoras como Karen, Sandra y Griselda,
           quienes además de sus funciones también ayudaban en tareas generales.
          </p>
          <p class="text-justify">
            Con el paso del tiempo, hemos crecido gracias al cariño de nuestros clientes, 
            convirtiéndonos en un punto de encuentro para quienes disfrutan de la buena comida, el ambiente familiar 
            y la calidez que solo un comal encendido puede brindar.
          </p>
        </div>
      </section>

      <!-- Misión, Visión, Valores -->
      <section class="text-center mb-5">
        <div class="row gy-4">
          <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm p-3">
              <img src="imagenes/mision.jpg" class="rounded-circle mx-auto mb-3" alt="Misión" width="150" height="150">
              <h4 class="text-danger">Misión</h4>
              <p>Brindar una experiencia gastronómica auténtica, rescatando los sabores tradicionales de nuestra tierra con un servicio cálido y familiar.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm p-3">
              <img src="imagenes/vision.jpg" class="rounded-circle mx-auto mb-3" alt="Visión" width="150" height="150">
              <h4 class="text-danger">Visión</h4>
              <p>Ser el restaurante de referencia en comida típica, reconocido por su calidad, sabor y compromiso con la cultura salvadoreña.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm p-3">
              <img src="imagenes/valores.jpg" class="rounded-circle mx-auto mb-3" alt="Valores" width="150" height="150">
              <h4 class="text-danger">Valores</h4>
              <p>Tradición, respeto, honestidad y amor por nuestra cultura.</p>
            </div>
          </div>
        </div>
      </section>

      <!-- Frase final -->
      <section class="text-center mt-5">
        <blockquote class="blockquote">
          <p class="fst-italic fs-5">“En cada plato servimos una historia, una tradición y un pedacito de El Salvador.”</p>
        </blockquote>
      </section>
    </div>
  </main>

  <?php include 'includes/footer.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
