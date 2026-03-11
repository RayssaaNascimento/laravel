<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contato - Portal de Cursos</title>

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
          <a class="nav-link" href="{{ route('pagina-cursos') }}">Cursos</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" href="{{ route('pagina-contato') }}">Contato</a>
        </li>

      </ul>
    </div>
  </div>
</nav>


<!-- TÍTULO -->
<div class="container mt-5 text-center">
  <h1>Entre em Contato</h1>
  <p class="lead">Estamos prontos para ajudar você com qualquer dúvida.</p>
</div>


<!-- CONTATO -->
<div class="container mt-5">
  <div class="row g-4">

    <!-- INFORMAÇÕES -->
    <div class="col-md-5">
      <h3>Informações de Contato</h3>

      <p><strong>📍 Endereço:</strong><br>
      Rua Exemplo, 123 - Centro<br>
      São Paulo - SP</p>

      <p><strong>📞 Telefone:</strong><br>
      (11) 4000-0000</p>

      <p><strong>📧 Email:</strong><br>
      contato@portalcursos.com</p>

      <p><strong>🕒 Horário de Atendimento:</strong><br>
      Segunda a Sexta<br>
      08:00 às 18:00</p>

    </div>


    <!-- FORMULÁRIO -->
    <div class="col-md-7">
      <h3>Envie uma Mensagem</h3>

      <form>

        <div class="mb-3">
          <label class="form-label">Nome</label>
          <input type="text" class="form-control" placeholder="Digite seu nome">
        </div>

        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="email" class="form-control" placeholder="Digite seu email">
        </div>

        <div class="mb-3">
          <label class="form-label">Assunto</label>
          <input type="text" class="form-control" placeholder="Assunto da mensagem">
        </div>

        <div class="mb-3">
          <label class="form-label">Mensagem</label>
          <textarea class="form-control" rows="4" placeholder="Digite sua mensagem"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Enviar Mensagem</button>

      </form>
    </div>

  </div>
</div>


<!-- MAPA (EXEMPLO) -->
<div class="container mt-5">
  <h3 class="text-center mb-3">Nossa Localização</h3>

  <div class="ratio ratio-16x9">
    <iframe src="https://maps.google.com/maps?q=sao%20paulo&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
  </div>
</div>


<!-- RODAPÉ -->
<footer class="bg-dark text-light text-center mt-5 p-4">
  <p>© 2026 Portal de Cursos - Todos os direitos reservados</p>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>