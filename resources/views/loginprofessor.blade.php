<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Beth Cientista</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;600;700;800&display=swap" rel="stylesheet">

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap');

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      background: linear-gradient(180deg, #6f00a8 0%, #b316d1 55%, #ef6b72 100%);
      overflow: hidden;
      position: relative;
    }

    body::before,
    body::after {
      content: "";
      position: absolute;
      width: 10px;
      height: 10px;
      background: white;
      border-radius: 50%;
      opacity: .7;
    }

    body::before {
      top: 12%;
      left: 15%;
      box-shadow:
        200px 80px white,
        500px 150px white,
        800px 50px white,
        950px 320px white,
        120px 500px white,
        650px 620px white,
        980px 700px white;
    }

    body::after {
      bottom: 8%;
      right: 12%;
    }

    .login-box {
      width: 430px;
      background: linear-gradient(180deg, #f8d7ff, #ffe2d2);
      padding: 35px;
      border-radius: 30px;
      box-shadow: 0 15px 35px rgba(0, 0, 0, .25);
    }

    .avatar {
      width: 110px;
      height: 110px;
      margin: auto;
      border-radius: 50%;
      overflow: hidden;
      border: 5px solid white;
      box-shadow: 0 8px 20px rgba(0, 0, 0, .20);
    }

    .avatar img {
      width: 100%;
      height: 100%;
      object-fit: cover; 
    }

    h1 {
      text-align: center;
      margin-top: 20px;
      font-size: 40px;
      color: #1e1e1e;
      font-weight: 800;
    }

    .subtitle {
      text-align: center;
      color: #555;
      font-size: 18px;
      margin: 12px 0 30px;
    }

    label {
      display: block;
      color: #333;
      font-weight: 700;
      margin-bottom: 8px;
      font-size: 18px;
    }

    .access {
      display: flex;
      gap: 15px;
      margin-bottom: 25px;
    }

    .access button {
      flex: 1;
      border: none;
      padding: 12px;
      border-radius: 25px;
      font-size: 16px;
      font-weight: 600;
      cursor: pointer;
      transition: .3s;
    }

    .student {
      background: #8b2cf5;
      color: white;
    }

    .teacher {
      background: #ececec;
      color: #333;
    }

    .access button:hover {
      transform: translateY(-3px);
    }

    input {
      width: 100%;
      padding: 15px;
      border: none;
      border-radius: 15px;
      background: #f2f2f2;
      margin-bottom: 22px;
      font-size: 16px;
      outline: none;
      transition: .3s;
    }

    input:focus {
      background: white;
      box-shadow: 0 0 0 2px #ff8b00;
    }

    .login-btn {
      width: 100%;
      border: none;
      background: #ff7a00;
      color: white;
      padding: 15px;
      border-radius: 30px;
      font-size: 22px;
      font-weight: 700;
      cursor: pointer;
      transition: .3s;
      box-shadow: 0 8px 18px rgba(255, 122, 0, .35);
    }

    .login-btn:hover {
      background: #ff9500;
      transform: translateY(-3px);
    }

    #mensagem {
      text-align: center;
      margin-bottom: 15px;
      font-size: 14px;
      font-weight: 600;
      padding: 10px;
      border-radius: 10px;
      background: rgba(217, 48, 37, 0.1);
    }

    .erro {
      color: #d93025;
    }

    .demo {
      margin-top: 25px;
      background: white;
      border-left: 6px solid #ff8b00;
      padding: 18px;
      border-radius: 15px;
    }

    .demo p {
      color: #555;
      font-size: 15px;
      line-height: 26px;
    }

    @media (max-width: 768px) {
      .login-box {
        width: 92%;
        padding: 25px;
      }

      h1 {
        font-size: 32px;
      }

      .subtitle {
        font-size: 16px;
      }
    }
  </style>
</head>
<body>

  <div class="login-box">

    <div class="avatar">
      <img src="{{ asset('Beth.jpg') }}" alt="Beth Cientista">
    </div>

    <h1>BETH CIENTISTA</h1>

    <div class="subtitle">
      Área exclusive para professores
    </div>

    @if ($errors->any())
      <div id="mensagem" class="erro">
        @foreach ($errors->all() as $error)
          <p>⚠️ {{ $error }}</p>
        @endforeach
      </div>
    @endif

    <form action="{{ route('logar') }}" method="POST">
      @csrf 

      <label for="email">Email</label>
      <input
        type="email"
        id="email"
        name="email"
        value="{{ old('email') }}"
        placeholder="seu.email@exemplo.com"
        required
      >

      <label for="senha">Senha</label>
      <input
        type="password"
        id="senha"
        name="senha"
        placeholder="******"
        required
      >

      <label for="code">Código exclusivo de professor</label>
      <input
        type="text"
        id="code"
        name="code"
        placeholder="Digite o código"
      >

      <button
        type="submit"
        class="login-btn"
        id="entrarBtn"
      >
        ↗ Entrar
      </button>
    </form>

  </div>

</body>
</html>
