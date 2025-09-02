<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagens/favicon.png" type="image/x-icon">
  <title>Nome do Site</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <!-- CSS personalizado -->
  <link rel="stylesheet" href="css/global.css">
  <link rel="stylesheet" href="css/login.css">
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/footer.css">
</head>
<body class="d-flex flex-column min-vh-100">
    <?php include 'templates/header.php'; ?>

    <main class="container espaçamento-main flex-grow-1">                
        <div class="row">                                                              
            <!-- Seção de recursos -->
            <div class="col-md-6 mt-4">
                <div class="text-right mb-4 fs-2 fw-bold">
                     Nome do<span class="header_cor"> Site</span>
                </div>
                                
                <div class="mb-4">
                    <div class="d-flex align-items-start mb-3">
                        <i class="bi bi-person-video3 fs-3 text-dark me-3"></i>
                        <div>
                            <h5 class="fw-bold mb-1">Plano de Treino Personalizado</h5>
                            <p class="mb-0">Encontre sua rotina com vídeos e guias para cada exercício.</p>
                        </div>
                    </div>

                    <div class="d-flex align-items-start mb-3">
                        <i class="bi bi-chat-dots fs-3 text-dark me-3"></i>
                        <div>
                            <h5 class="fw-bold mb-1">Comunicação Direta</h5>
                            <p class="mb-0">Converse com seu personal, receba feedbacks e ajuste seu plano quando precisar.</p>
                        </div>
                    </div>

                    <div class="d-flex align-items-start mb-3">
                        <i class="bi bi-graph-up fs-3 text-dark me-3"></i>
                        <div>
                            <h5 class="fw-bold mb-1">Monitorar seus Progressos</h5>
                            <p class="mb-0">Acompanhe sua evolução com dados e gráficos para ver seus resultados.</p>
                        </div>
                    </div>

                    <div class="d-flex align-items-start">
                        <i class="bi bi-book fs-3 text-dark me-3"></i>
                        <div>
                            <h5 class="fw-bold mb-1">Conteúdos Exclusivos</h5>
                            <p class="mb-0">Acesse materiais de apoio, dicas de nutrição e guias de técnica.</p>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Seção de login -->
            <div class="col-md-6 mt-1">
                <div class="card shadow">
                    <div class="card-body">
                        <h2 class="card-title text-center">Entrar no Espaço do Aluno</h2>
                        <p class="text-center">Preencha os campos para prosseguir com seu login</p>
                        <form action="" method="post">
                            <div class="mb-3">
                                <label for="email" class="form-label">E-mail</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="senha" class="form-label">Senha</label>
                                <input type="password" class="form-control" id="senha" name="senha" required>
                            </div>
                            <div class="d-flex justify-content-between mb-3">
                                <a href="#">Não tem conta? Crie uma!</a>
                                <a href="#">Esqueci a senha</a>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Avançar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include 'templates/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/navbar-scroll.js"></script>
</body>
</html>