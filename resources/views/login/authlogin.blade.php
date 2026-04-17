<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background: linear-gradient(135deg, rgb(217, 84, 230), #f5d4fa);
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: Arial, sans-serif;
    }

    .card-login {
      width: 100%;
      max-width: 400px;
      padding: 30px;
      border-radius: 15px;
      background: white;
      box-shadow: 0 10px 25px rgba(0,0,0,0.2);
    }

    .titulo {
      text-align: center;
      margin-bottom: 20px;
      color: rgb(217, 84, 230);
      font-weight: bold;
    }

    .form-control:focus {
      border-color: rgb(217, 84, 230);
      box-shadow: 0 0 0 0.2rem rgba(217, 84, 230, 0.25);
    }

    .btn-roxo {
      background-color: rgb(217, 84, 230);
      border: none;
      transition: 0.3s;
      color: white;
    }

    .btn-roxo:hover {
      background-color: rgb(190, 60, 200);
    }

    .link {
      color: rgb(217, 84, 230);
      text-decoration: none;
    }

    .link:hover {
      text-decoration: underline;
    }
  </style>
</head>

<body>

  <div class="card-login">
    <h3 class="titulo">Entrar</h3>

    <!-- ERRO -->
    @if(session('error'))
      <div class="alert alert-danger">
        {{ session('error') }}
      </div>
    @endif

    <!-- VALIDAÇÃO -->
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul class="mb-0">
          @foreach ($errors->all() as $erro)
            <li>{{ $erro }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
      @csrf

      <div class="mb-3">
        <label class="form-label">E-mail</label>
        <input 
          type="email" 
          name="email" 
          class="form-control" 
          placeholder="Digite seu e-mail"
          value="{{ old('email') }}"
          required>
      </div>

      <div class="mb-3">
        <label class="form-label">Senha</label>
        <input 
          type="password" 
          name="password" 
          class="form-control" 
          placeholder="Digite sua senha"
          required>
      </div>

      <button type="submit" class="btn btn-roxo w-100">
        Entrar
      </button>
    </form>

    <div class="text-center mt-3">
      <small>
        Não tem conta? 
        <a href="{{ route('register.form') }}" class="link">Cadastre-se</a>
      </small>
    </div>
  </div>

</body>
</html>