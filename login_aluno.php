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
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/footer.css">
</head>
<body>
    <?php include 'templates/header.php'; ?>
    <main>
        <section>
            <img src="logo.png" alt="Logo">
            <h2>Nome do Site</h2>
            <ul>
                <li><b>Plano de Treino Personalizado:</b></li>
                <p>Encontre sua rotina com vídeos e guias para cada exercício.</p>
                <li><b>Comunicação Direta:</b></li>
                <p>Converse com seu personal, receba feedbacks e ajuste seu plano quando precisar.</p>
                <li><b>Monitore seu Progresso:</b></li>
                <p>Acompanhe sua evolução com dados e gráficos para ver seus resultados.</p>
                <li><b>Conteúdos Exclusivos:</b></li>
                <p>Acesse materiais de apoio, dicas de nutrição e guias de técnicas.</p>
            </ul>
        </section>
        <section>
            <form action= "" method = "post">
                <h2>Entrar no Espaço do Aluno</h2>
                <p>Preencha com os campos para prosseguir com seu login</p><br>
                <input type="text" id="email" name="email">
                <input type="password" id="senha" name="senha"><br>
                Não tem conta?<a href="">Crie uma!</a>
                <a href="">Esqueci a senha</a>
                <button>Avançar</button>
            </form>
        </section>
    </main>

    <?php include 'templates/footer.php'; ?>
    <script src="js/navbar-scroll.js"></script>
</body>
</html>