<<<<<<< HEAD
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Taurus - Cadastro</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
      font-family: Arial, sans-serif;
    }
    /* Navbar */
    .navbar {
      border-bottom: 1px solid #ddd;
    }
    .navbar-brand {
      font-weight: bold;
      font-size: 24px;
    }
    .navbar-brand span {
      color: orange;
    }
    /* Painel esquerdo */
    .left-panel {
      padding: 40px;
    }
    .left-panel .logo {
      font-size: 28px;
      font-weight: bold;
      margin-bottom: 20px;
    }
    .left-panel .logo span {
      color: orange;
    }
    .left-panel ul li {
      margin-bottom: 15px;
    }
    /* Formulário */
    .form-container {
      background: #fff;
      border: 1px solid #ccc;
      border-radius: 8px;
      padding: 30px;
      box-shadow: 0px 4px 10px rgba(0,0,0,0.05);
    }
    .form-container h5 {
      text-align: center;
      letter-spacing: 3px;
      font-weight: bold;
      margin-bottom: 10px;
    }
    .form-container p {
      text-align: center;
      margin-bottom: 30px;
      font-size: 14px;
      color: #555;
    }
    .form-label {
      font-weight: bold;
      font-size: 14px;
    }
    .btn-custom {
      background-color: #444;
      color: #fff;
      width: 100%;
      font-weight: bold;
      letter-spacing: 2px;
    }
    /* Botões de dias */
    .days-selector .btn {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      font-weight: bold;
      margin: 5px;
    }
    /* Rodapé */
    footer {
      border-top: 1px solid #ddd;
      padding: 20px;
      text-align: center;
      margin-top: 40px;
      font-size: 14px;
      color: #666;
    }
    footer .logo {
      font-size: 20px;
      font-weight: bold;
      margin-top: 10px;
    }
    footer .logo span {
      color: orange;
    }
  </style>
</head>
<body>
  <?php include 'templates/header.php'; ?>
  <!-- Navbar -->
  <nav class="navbar navbar-light bg-white px-4">
    <div class="container-fluid justify-content-between">
      <a class="navbar-brand mx-auto" href="#">
        TAU<span>RUS</span>
      </a>
      <div>
        <a href="#" class="text-dark text-decoration-none me-2">Entrar</a>
        <i class="bi bi-person"></i>
      </div>
    </div>
  </nav>

  <div class="container-fluid mt-4">
    <div class="row justify-content-center">
      <!-- Lado esquerdo -->
      <div class="col-md-5 left-panel">
        <div class="logo">TAU<span>RUS</span></div>
        <ul>
          <li><strong>Planos de Treino Personalizados:</strong><br>
            Encontre exercícios com vídeos e guias para cada exercício.
          </li>
          <li><strong>Comunicação Direta:</strong><br>
            Converse com seu personal, receba feedbacks e ajuste seus planos quando precisar.
          </li>
          <li><strong>Monitore seu Progresso:</strong><br>
            Acompanhe seus resultados com dados e gráficos para ver sua evolução.
          </li>
          <li><strong>Conteúdos Exclusivos:</strong><br>
            Acesse materiais de apoio, dicas de nutrição e guias de referência.
          </li>
        </ul>
      </div>

      <!-- Lado direito (formulário) -->
      <div class="col-md-5 d-flex align-items-center justify-content-center">
        <div class="form-container w-100">
          <h5>CADASTRO</h5>
          <p>Preencha os campos para prosseguir com seu cadastro</p>

          <form>
            <div class="mb-3">
              <label class="form-label">PESO</label>
              <input type="text" class="form-control" placeholder="Ex: 70kg">
            </div>
            <div class="mb-3">
              <label class="form-label">ALTURA</label>
              <input type="text" class="form-control" placeholder="Ex: 1,75m">
            </div>
            <div class="mb-3">
              <label class="form-label">VOCÊ PRATICA EXERCÍCIOS?</label>
              <select class="form-select">
                <option>Sim, Pratico profissionalmente</option>
                <option>Sim, Pratico com frequência</option>
                <option>Sim, Pratico esporadicamente</option>
                <option>Não Pratico</option>
                <option>Não, Sou sedentário</option>
              </select>
            </div>
            <div class="mb-3">
              <label class="form-label">QUAIS DIAS NA SEMANA VOCÊ TEM DISPONIBILIDADE?</label>
              <div class="d-flex flex-wrap days-selector">
                <button type="button" class="btn btn-outline-dark">S</button>
                <button type="button" class="btn btn-outline-dark">T</button>
                <button type="button" class="btn btn-outline-dark">Q</button>
                <button type="button" class="btn btn-outline-dark">Q</button>
                <button type="button" class="btn btn-outline-dark">S</button>
                <button type="button" class="btn btn-outline-dark">S</button>
                <button type="button" class="btn btn-outline-dark">D</button>
              </div>
            </div>
            <button type="submit" class="btn btn-custom mt-3">CONCLUIR</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Rodapé -->
  <footer>
    <p>Copyright © 2024 Taurus Company. Todos os direitos reservados.</p>
    <div class="logo">TAU<span>RUS</span></div>
  </footer>

  <!-- Bootstrap JS + Ícones -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</body>
</html>
=======
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Taurus - Cadastro</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
      font-family: Arial, sans-serif;
    }
    /* Navbar */
    .navbar {
      border-bottom: 1px solid #ddd;
    }
    .navbar-brand {
      font-weight: bold;
      font-size: 24px;
    }
    .navbar-brand span {
      color: orange;
    }
    /* Painel esquerdo */
    .left-panel {
      padding: 40px;
    }
    .left-panel .logo {
      font-size: 28px;
      font-weight: bold;
      margin-bottom: 20px;
    }
    .left-panel .logo span {
      color: orange;
    }
    .left-panel ul li {
      margin-bottom: 15px;
    }
    /* Formulário */
    .form-container {
      background: #fff;
      border: 1px solid #ccc;
      border-radius: 8px;
      padding: 30px;
      box-shadow: 0px 4px 10px rgba(0,0,0,0.05);
    }
    .form-container h5 {
      text-align: center;
      letter-spacing: 3px;
      font-weight: bold;
      margin-bottom: 10px;
    }
    .form-container p {
      text-align: center;
      margin-bottom: 30px;
      font-size: 14px;
      color: #555;
    }
    .form-label {
      font-weight: bold;
      font-size: 14px;
    }
    .btn-custom {
      background-color: #444;
      color: #fff;
      width: 100%;
      font-weight: bold;
      letter-spacing: 2px;
    }
    /* Botões de dias */
    .days-selector .btn {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      font-weight: bold;
      margin: 5px;
    }
    /* Rodapé */
    footer {
      border-top: 1px solid #ddd;
      padding: 20px;
      text-align: center;
      margin-top: 40px;
      font-size: 14px;
      color: #666;
    }
    footer .logo {
      font-size: 20px;
      font-weight: bold;
      margin-top: 10px;
    }
    footer .logo span {
      color: orange;
    }
  </style>
</head>
<body>
  <?php include 'templates/header.php'; ?>
  <!-- Navbar -->
  <nav class="navbar navbar-light bg-white px-4">
    <div class="container-fluid justify-content-between">
      <a class="navbar-brand mx-auto" href="#">
        TAU<span>RUS</span>
      </a>
      <div>
        <a href="#" class="text-dark text-decoration-none me-2">Entrar</a>
        <i class="bi bi-person"></i>
      </div>
    </div>
  </nav>

  <div class="container-fluid mt-4">
    <div class="row justify-content-center">
      <!-- Lado esquerdo -->
      <div class="col-md-5 left-panel">
        <div class="logo">TAU<span>RUS</span></div>
        <ul>
          <li><strong>Planos de Treino Personalizados:</strong><br>
            Encontre exercícios com vídeos e guias para cada exercício.
          </li>
          <li><strong>Comunicação Direta:</strong><br>
            Converse com seu personal, receba feedbacks e ajuste seus planos quando precisar.
          </li>
          <li><strong>Monitore seu Progresso:</strong><br>
            Acompanhe seus resultados com dados e gráficos para ver sua evolução.
          </li>
          <li><strong>Conteúdos Exclusivos:</strong><br>
            Acesse materiais de apoio, dicas de nutrição e guias de referência.
          </li>
        </ul>
      </div>

      <!-- Lado direito (formulário) -->
      <div class="col-md-5 d-flex align-items-center justify-content-center">
        <div class="form-container w-100">
          <h5>CADASTRO</h5>
          <p>Preencha os campos para prosseguir com seu cadastro</p>

          <form>
            <div class="mb-3">
              <label class="form-label">PESO</label>
              <input type="text" class="form-control" placeholder="Ex: 70kg">
            </div>
            <div class="mb-3">
              <label class="form-label">ALTURA</label>
              <input type="text" class="form-control" placeholder="Ex: 1,75m">
            </div>
            <div class="mb-3">
              <label class="form-label">VOCÊ PRATICA EXERCÍCIOS?</label>
              <select class="form-select">
                <option>Sim, Pratico profissionalmente</option>
                <option>Sim, Pratico com frequência</option>
                <option>Sim, Pratico esporadicamente</option>
                <option>Não Pratico</option>
                <option>Não, Sou sedentário</option>
              </select>
            </div>
            <div class="mb-3">
              <label class="form-label">QUAIS DIAS NA SEMANA VOCÊ TEM DISPONIBILIDADE?</label>
              <div class="d-flex flex-wrap days-selector">
                <button type="button" class="btn btn-outline-dark">S</button>
                <button type="button" class="btn btn-outline-dark">T</button>
                <button type="button" class="btn btn-outline-dark">Q</button>
                <button type="button" class="btn btn-outline-dark">Q</button>
                <button type="button" class="btn btn-outline-dark">S</button>
                <button type="button" class="btn btn-outline-dark">S</button>
                <button type="button" class="btn btn-outline-dark">D</button>
              </div>
            </div>
            <button type="submit" class="btn btn-custom mt-3">CONCLUIR</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Rodapé -->
  <footer>
    <p>Copyright © 2024 Taurus Company. Todos os direitos reservados.</p>
    <div class="logo">TAU<span>RUS</span></div>
  </footer>

  <!-- Bootstrap JS + Ícones -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</body>
</html>
>>>>>>> 004215f25672ac83730ffc94f0b2d41340155a72
