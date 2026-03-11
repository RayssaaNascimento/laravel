<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cursos - Portal de Cursos</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="index.html">Portal de Cursos</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="menu">
      <ul class="navbar-nav ms-auto">

        <li class="nav-item">
          <a class="nav-link" href="{{ route('pagina-principal') }}">Página Principal</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ route('pagina-sobre') }}">Sobre</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" href="{{ route('pagina-cursos') }}">Cursos</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ route('pagina-contato') }}">Contato</a>
        </li>

      </ul>
    </div>
  </div>
</nav>


<!-- TÍTULO -->
<div class="container mt-5 text-center">
  <h1>Nossos Cursos</h1>
  <p class="lead">Conheça nossas áreas de formação profissional.</p>
</div>


<!-- LISTA DE CURSOS -->
<div class="container mt-4">
  <div class="row g-4">

    <!-- Desenvolvimento de Sistemas -->
    <div class="col-md-6 col-lg-3">
      <div class="card h-100">
        <img src="https://images.unsplash.com/photo-1518770660439-4636190af475" class="card-img-top" alt="Programação">
        <div class="card-body">
          <h5 class="card-title">Desenvolvimento de Sistemas</h5>
          <p class="card-text">
            Curso voltado para programação, desenvolvimento web, aplicativos e bancos de dados.
          </p>

          <ul>
            <li>Duração: 2 anos</li>
            <li>Área: Tecnologia</li>
            <li>Modalidade: Técnico</li>
          </ul>

          <a href="#" class="btn btn-primary">Ver detalhes</a>
        </div>
      </div>
    </div>

    <!-- Administração -->
    <div class="col-md-6 col-lg-3">
      <div class="card h-100">
        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978" class="card-img-top" alt="Administração">
        <div class="card-body">
          <h5 class="card-title">Administração</h5>
          <p class="card-text">
            Formação em gestão empresarial, marketing, finanças e organização de empresas.
          </p>

          <ul>
            <li>Duração: 2 anos</li>
            <li>Área: Negócios</li>
            <li>Modalidade: Técnico</li>
          </ul>

          <a href="#" class="btn btn-primary">Ver detalhes</a>
        </div>
      </div>
    </div>

    <!-- Meio Ambiente -->
    <div class="col-md-6 col-lg-3">
      <div class="card h-100">
        <img src="https://images.unsplash.com/photo-1501004318641-b39e6451bec6" class="card-img-top" alt="Meio Ambiente">
        <div class="card-body">
          <h5 class="card-title">Meio Ambiente</h5>
          <p class="card-text">
            Curso focado em sustentabilidade, preservação ambiental e gestão de recursos naturais.
          </p>

          <ul>
            <li>Duração: 2 anos</li>
            <li>Área: Ambiental</li>
            <li>Modalidade: Técnico</li>
          </ul>

          <a href="#" class="btn btn-primary">Ver detalhes</a>
        </div>
      </div>
    </div>

    <!-- Farmácia -->
    <div class="col-md-6 col-lg-3">
      <div class="card h-100">
        <img src="https://images.unsplash.com/photo-1587854692152-cbe660dbde88" class="card-img-top" alt="Farmácia">
        <div class="card-body">
          <h5 class="card-title">Farmácia</h5>
          <p class="card-text">
            Aprenda sobre medicamentos, manipulação farmacêutica e atendimento em farmácias.
          </p>

          <ul>
            <li>Duração: 2 anos</li>
            <li>Área: Saúde</li>
            <li>Modalidade: Técnico</li>
          </ul>

          <a href="#" class="btn btn-primary">Ver detalhes</a>
        </div>
      </div>
    </div>

  </div>
</div>


<!-- SEÇÃO EXTRA -->
<div class="container mt-5 text-center">
  <h2>Por que estudar conosco?</h2>
  <p class="lead">
    Professores qualificados, infraestrutura moderna e cursos voltados para o mercado de trabalho.
  </p>
</div>


<!-- RODAPÉ -->
<footer class="bg-dark text-light text-center mt-5 p-4">
  <p>© 2026 Portal de Cursos - Todos os direitos reservados</p>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>