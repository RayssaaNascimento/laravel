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
    background-color: #dfc3ff;
  font-family: Arial;
}
img {
  max-width: 100%;
}
.navbar{
    background-color:rgb(150, 63, 187);
}
footer{
  background-color:rgb(150, 63, 187);;
}
</style>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg">
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

<!-- HERO
<header class="bg-primary text-white text-center p-5">
  <h1>Plataforma Beth Cientista</h1>
  <p>Divulgação científica feita por jovens</p>
</header> -->

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
        <img src="https://scontent-gru1-1.cdninstagram.com/v/t51.82787-15/656479884_18079422560079169_5213478945901942677_n.webp?_nc_cat=101&ig_cache_key=MzQ3OTQ2OTg4Mzg5NTc3NTc5MQ%3D%3D.3-ccb7-5&ccb=7-5&_nc_sid=58cdad&efg=eyJ2ZW5jb2RlX3RhZyI6InhwaWRzLjEwODB4MTA4MC5zZHIuQzMifQ%3D%3D&_nc_ohc=YYi_oKZNW70Q7kNvwFwaRz9&_nc_oc=Adr4kBPE2Bju8EnG-9qXpUK2-FTA6KuC-2B7mEHt9QMfnHTnFQSmHiy9fQDYhzYy1ao&_nc_ad=z-m&_nc_cid=0&_nc_zt=23&_nc_ht=scontent-gru1-1.cdninstagram.com&_nc_gid=oRnrRPaiBGDNeB76FZ56rA&_nc_ss=7a32e&oh=00_Afz8PM_B_2JvcUpy49OYnOTR7EskH2k1uzdTHgbZ_0CKgQ&oe=69C8C9D8">
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
        <img src="https://scontent-gru2-1.cdninstagram.com/v/t51.82787-15/641290553_18069016970286275_6727285818343248772_n.webp?_nc_cat=109&ig_cache_key=MzQ3OTQ2OTg4MzgwMzQyOTM3Mw%3D%3D.3-ccb7-5&ccb=7-5&_nc_sid=58cdad&efg=eyJ2ZW5jb2RlX3RhZyI6InhwaWRzLjEwODB4MTA4MC5zZHIuQzMifQ%3D%3D&_nc_ohc=jyHkYnNEfhsQ7kNvwGzbWjr&_nc_oc=AdqUT8WqakI1dBEQW1aVntTZPNKUZatOqRWZBZx11ETZlDwwxgeyCQqRJbl4-56FuaQ&_nc_ad=z-m&_nc_cid=0&_nc_zt=23&_nc_ht=scontent-gru2-1.cdninstagram.com&_nc_gid=oRnrRPaiBGDNeB76FZ56rA&_nc_ss=7a32e&oh=00_Afz9Z3_mpN0Yd3roEZK8XPhwfF3ETLUtRDT3Q_SRjJcwrA&oe=69C89EC8" class="card-img-top" alt="Administração">
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
        <img src="https://scontent-gru2-2.cdninstagram.com/v/t51.29350-15/462938135_1290503401940702_3288637433269926282_n.webp?stp=dst-jpg_e35_tt6&_nc_cat=102&ig_cache_key=MzQ3OTQ2OTg4Mzg4NzQ1MDI1OQ%3D%3D.3-ccb7-5&ccb=7-5&_nc_sid=58cdad&efg=eyJ2ZW5jb2RlX3RhZyI6InhwaWRzLjEwODB4MTA4MC5zZHIuZGVmYXVsdF9pbWFnZS5DMyJ9&_nc_ohc=Vdpkt0T60iAQ7kNvwHVWZQv&_nc_oc=Adr2MZdAmxvCHjsI4oQRcA2YBewF7fNrs04YlhXBNO5qpsYTGLe_YXdQZUWipvNjJMQ&_nc_ad=z-m&_nc_cid=0&_nc_zt=23&_nc_ht=scontent-gru2-2.cdninstagram.com&_nc_gid=oRnrRPaiBGDNeB76FZ56rA&_nc_ss=7a32e&oh=00_AfytNR3z9fMKwhB23rMViNfO9PT3rdmjAIlm5KXeD4t0WQ&oe=69C8A46A" class="card-img-top" alt="Meio Ambiente">
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
        <img src="https://scontent-gru1-2.cdninstagram.com/v/t51.82787-15/656284772_18090018536157734_1922849885316014330_n.webp?_nc_cat=108&ig_cache_key=MzQ3OTQ2OTg4Mzg5NTgwNjQ5MQ%3D%3D.3-ccb7-5&ccb=7-5&_nc_sid=58cdad&efg=eyJ2ZW5jb2RlX3RhZyI6InhwaWRzLjEwODB4MTA4MC5zZHIuQzMifQ%3D%3D&_nc_ohc=DtM6_xShwu0Q7kNvwHHz057&_nc_oc=AdrEPBlZWPB6Y3Y4-Q116iakXczbmySAPp5Z09Nb7IGeVA6nGIPlPD7qA-7IFRxjYfM&_nc_ad=z-m&_nc_cid=0&_nc_zt=23&_nc_ht=scontent-gru1-2.cdninstagram.com&_nc_gid=oRnrRPaiBGDNeB76FZ56rA&_nc_ss=7a32e&oh=00_AfyHucZN3ccXklaEx7z2XP2lQT9-e4TUNCTVHAUEC7z69A&oe=69C8C657" class="card-img-top" alt="Farmácia">
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

<footer class="text-white text-center mt-5 p-4">
  <p>© 2026 Beth Cientista</p>
</footer>

</body>
</html>