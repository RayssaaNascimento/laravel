<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="{{ ('iconbeth.ico') }}" type="image/x-icon">
  <title>Beth Cientista</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>

<style>
  body {
  font-family: Arial;
}
img {
  max-width: 100%;
}
</style>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="index.html">Beth Cientista</a>

    <div class="collapse navbar-collapse">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="{{ route('pagina-principal') }}">Página Principal</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('pagina-conteudos') }}">Conteúdos</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('pagina-contato') }}">Contato</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('pagina-login') }}">Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- HERO -->
<header class="bg-primary text-white text-center p-5">
  <h1>Plataforma Beth Cientista</h1>
  <p>Divulgação científica feita por jovens</p>
</header>

<!-- OBJETIVO -->
<section class="container my-5 text-center">
  <h2>Objetivo</h2>
  <p>
    Plataforma educacional para organizar conteúdos científicos produzidos por estudantes,
    promovendo inclusão e protagonismo.
  </p>
</section>

<div class="container mt-5">

  <div class="row g-4">

    <!-- Desenvolvimento de Sistemas -->
    <div class="col-md-6 col-lg-3" id="ds">
      <div class="card h-100">
        <img src="https://static.cdninstagram.com/rsrc.php/v5/yp/l/0,cross/nKvgHBgwSrGbgrNkRAHfEEWAcQkLAlwy9P_NAqbozHHDPvJg89IT9OsfgQe914iiBfONMKn3YhINqddoA3wRPOftU49pVNahkCkQvuWABIjhhRs97xFZK--hBruhBENOpKm_.css">
        <div class="card-body">
          <h5 class="card-title">Desenvolvimento de Sistemas</h5>
          <p class="card-text">
            Aprenda programação, criação de sites, aplicativos e bancos de dados.
            Ideal para quem quer trabalhar com tecnologia.
          </p>
          <a href="#" class="btn btn-primary">Saiba mais</a>
        </div>
      </div>
    </div>

    <!-- Administração -->
    <div class="col-md-6 col-lg-3" id="adm">
      <div class="card h-100">
        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978" class="card-img-top" alt="Administração">
        <div class="card-body">
          <h5 class="card-title">Administração</h5>
          <p class="card-text">
            Estude gestão de empresas, marketing, finanças e liderança.
            Prepare-se para atuar no mundo corporativo.
          </p>
          <a href="#" class="btn btn-primary">Saiba mais</a>
        </div>
      </div>
    </div>

    <!-- Meio Ambiente -->
    <div class="col-md-6 col-lg-3" id="ma">
      <div class="card h-100">
        <img src="https://images.unsplash.com/photo-1501004318641-b39e6451bec6" class="card-img-top" alt="Meio Ambiente">
        <div class="card-body">
          <h5 class="card-title">Meio Ambiente</h5>
          <p class="card-text">
            Aprenda sobre sustentabilidade, preservação ambiental e gestão de recursos naturais.
          </p>
          <a href="#" class="btn btn-primary">Saiba mais</a>
        </div>
      </div>
    </div>

    <!-- Farmácia -->
    <div class="col-md-6 col-lg-3" id="farmacia">
      <div class="card h-100">
        <img src="https://images.unsplash.com/photo-1587854692152-cbe660dbde88" class="card-img-top" alt="Farmácia">
        <div class="card-body">
          <h5 class="card-title">Farmácia</h5>
          <p class="card-text">
            Conheça medicamentos, manipulação farmacêutica e cuidados com a saúde.
          </p>
          <a href="#" class="btn btn-primary">Saiba mais</a>
        </div>
      </div>
    </div>

  </div>

</div>


<script>
  function filtrar(categoria) {
  let itens = document.querySelectorAll(".item");

  itens.forEach(item => {
    if (categoria === "todos") {
      item.style.display = "block";
    } else if (item.classList.contains(categoria)) {
      item.style.display = "block";
    } else {
      item.style.display = "none";
    }
  });
}

</script>

<footer class="bg-dark text-white text-center mt-5 p-4">
  <p>© 2026 Beth Cientista</p>
</footer>

</body>
</html>