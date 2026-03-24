<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>Conteúdos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container">

<h1 class="text-center my-4">Conteúdos</h1>

<!-- FILTRO -->
<div class="text-center mb-4">
  <button class="btn btn-primary" onclick="filtrar('todos')">Todos</button>
  <button class="btn btn-success" onclick="filtrar('estrelas')">Beth nas Estrelas</button>
  <button class="btn btn-danger" onclick="filtrar('anatomy')">Beth Anatomy</button>
</div>

<div class="row">

  <div class="col-md-4 item estrelas">
    <div class="card">
      <img src="https://via.placeholder.com/300">
      <div class="card-body">
        <h5>Galáxias</h5>
      </div>
    </div>
  </div>

  <div class="col-md-4 item anatomy">
    <div class="card">
      <img src="https://via.placeholder.com/300">
      <div class="card-body">
        <h5>Corpo Humano</h5>
      </div>
    </div>
  </div>

</div>

<script src="script.js"></script>
</body>
</html>