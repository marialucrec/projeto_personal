<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="imagens/favicon.png" type="image/x-icon">
  <title>Nome do Site</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <!-- CSS personalizado -->
  <link href="css/estilo.css" rel="stylesheet">
</head>
<body>
  <?php include 'templates/header.php'; ?>

  <main>
    <section class="hero-text d-flex flex-column justify-content-end align-items-center text-center">
      <div>
        <div class="bg-white text-dark px-3 py-1 shadow mb-2 d-inline-block">
          <span class="fw-bold fs-5">PRONTO(A) PARA COMEÇAR?</span>
        </div>
        <div class="bg-transform text-white px-2 py-2 shadow mb-1">
          <span class="fs-6">AGENDE SUA AULA E COMECE SUA TRANSFORMAÇÃO.</span>
        </div>
        <i class="bi-seta bi-chevron-double-down fs-1 bounce-arrow"></i>
      </div>
    </section>
  </main>

  <?php include 'templates/footer.php'; ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/navbar-scroll.js"></script>
</body>
</html>
