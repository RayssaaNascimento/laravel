<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sobre - Portal de Cursos</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">Portal de Cursos</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="menu">
      <ul class="navbar-nav ms-auto">

        <li class="nav-item">
          <a class="nav-link" href="{{ route('pagina-principal') }}">Página Principal</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" href="{{ route('pagina-sobre') }}">Sobre</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ route('pagina-cursos') }}">Cursos</a>
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
  <h1>Sobre o Portal de Cursos</h1>
  <p class="lead">Conheça mais sobre nossa instituição e nossa missão educacional.</p>
</div>


<!-- SOBRE -->
<div class="container mt-5">
  <div class="row align-items-center">

    <div class="col-md-6">
      <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1" 
           class="img-fluid rounded" 
           alt="Instituição de ensino">
    </div>

    <div class="col-md-6">
      <h2>Nossa História</h2>
      <p>
        O Portal de Cursos foi criado com o objetivo de oferecer formação de qualidade
        para estudantes que desejam ingressar no mercado de trabalho. Nossa instituição
        reúne cursos técnicos e profissionalizantes nas áreas mais procuradas pelas empresas.
      </p>

      <p>
        Com uma equipe de professores qualificados e infraestrutura moderna,
        buscamos preparar nossos alunos com conhecimento teórico e prático,
        contribuindo para o desenvolvimento profissional e pessoal.
      </p>
    </div>

  </div>
</div>


<!-- MISSÃO VISÃO VALORES -->
<div class="container mt-5">
  <div class="row text-center g-4">

    <div class="col-md-4">
      <div class="card h-100">
        <div class="card-body">
          <h4>Missão</h4>
          <p>
            Oferecer educação de qualidade que prepare os alunos para os desafios
            do mercado de trabalho e para o desenvolvimento da sociedade.
          </p>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card h-100">
        <div class="card-body">
          <h4>Visão</h4>
          <p>
            Ser referência em ensino técnico e profissionalizante,
            formando profissionais capacitados e inovadores.
          </p>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card h-100">
        <div class="card-body">
          <h4>Valores</h4>
          <p>
            Ética, responsabilidade, inovação, respeito ao meio ambiente
            e compromisso com a educação.
          </p>
        </div>
      </div>
    </div>

  </div>
</div>


<!-- EQUIPE -->
<div class="container mt-5 text-center">
  <h2>Nossa Equipe</h2>
  <p>Profissionais experientes dedicados ao ensino e à formação dos alunos.</p>

  <div class="row g-4 mt-3">

    <div class="col-md-4">
      <div class="card">
        <img src="https://images.unsplash.com/photo-1607746882042-944635dfe10e" class="card-img-top">
        <div class="card-body">
          <h5>Maria Silva</h5>
          <p>Coordenadora Acadêmica</p>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card">
        <img src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5" class="card-img-top">
        <div class="card-body">
          <h5>João Oliveira</h5>
          <p>Professor de Tecnologia</p>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card">
        <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956" class="card-img-top">
        <div class="card-body">
          <h5>Ana Costa</h5>
          <p>Professora de Administração</p>
        </div>
      </div>
    </div>

  </div>
</div>


<!-- RODAPÉ -->
<footer class="bg-dark text-light text-center mt-5 p-4">
  <p>© 2026 Portal de Cursos - Todos os direitos reservados</p>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>