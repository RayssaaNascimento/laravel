<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Verificar E-mail - Beth Cientista</title>
  <link href="https://googleapis.com" rel="stylesheet">

  <style>
    *{
      margin:0;
      padding:0;
      box-sizing:border-box;
      font-family: 'Baloo 2', cursive;
    }

    body{
      height:100vh;
      display:flex;
      justify-content:center;
      align-items:center;
      background: linear-gradient(180deg,#8a00b8,#d61bbd,#ff6b2c);
      overflow:hidden;
      position:relative;
    }

    /* bolinhas */
    body::before,
    body::after{
      content:'';
      position:absolute;
      width:8px;
      height:8px;
      background:white;
      border-radius:50%;
      opacity:0.6;
    }

    body::before{
      top:15%;
      left:20%;
    }

    body::after{
      bottom:10%;
      right:18%;
    }

    .login-box{
      width:400px;
      padding:35px;
      border-radius:30px;
      background: linear-gradient(90deg,#efd4f3,#f7dccf);
      box-shadow:0 10px 30px rgba(0,0,0,0.25);
    }

    .avatar{
      width:90px;
      height:90px;
      border-radius:50%;
      overflow:hidden;
      margin:auto;
      border:4px solid white;
      box-shadow:0 5px 15px rgba(0,0,0,0.2);
    }

    .avatar img{
      width:100%;
      height:100%;
      object-fit:cover;
    }

    h1{
      text-align:center;
      margin-top:15px;
      font-size:42px;
      color:#111827;
      font-weight:800;
    }

    .subtitle{
      text-align:center;
      color:#4b5563;
      font-size:22px;
      font-weight:700;
      margin-top:5px;
      margin-bottom:25px;
    }

    label{
      font-size:28px;
      font-weight:700;
      color:#111827;
      display:block;
      margin-bottom:5px;
      margin-top:10px;
    }

    input, select{
      width:100%;
      padding:14px;
      border:none;
      border-radius:15px;
      background:#ececec;
      margin-bottom:20px;
      font-size:16px;
      outline:none;
    }

    input:focus, select:focus{
      border:2px solid #a855f7;
    }

    .login-btn{
      width:100%;
      padding:13px;
      border:none;
      border-radius:30px;
      background:#ff6b00;
      color:white;
      font-size:26px;
      font-weight:700;
      cursor:pointer;
      transition:0.3s;
      box-shadow:0 5px 15px rgba(255,107,0,0.4);
      margin-top:10px;
    }

    .login-btn:hover{
      transform:scale(1.03);
    }

    /* ESTILO DA CAIXA DE ERRO */
    .error-box {
      background-color: #fee2e2;
      border: 1px solid #fca5a5;
      color: #991b1b;
      padding: 15px;
      border-radius: 15px;
      margin-bottom: 20px;
      font-weight: 700;
    }

    .error-box p {
      margin: 5px 0;
    }

    .demo{
      margin-top:25px;
      background:#fff5ea;
      border:2px solid #ffd7aa;
      padding:18px;
      border-radius:20px;
      text-align:center;
      font-weight:700;
      color:#374151;
    }

    .demo p{
      font-size:17px;
    }

    @media(max-width:500px){
      .login-box{
        width:90%;
        padding:25px;
      }
      h1{
        font-size:32px;
      }
      .subtitle{
        font-size:18px;
      }
    }
  </style>
</head>
<body>
  <div class="box">
    <h1>Confirme seu E-mail</h1>
    <p>Enviamos um código de 6 dígitos para o e-mail informado.</p>

    @if($errors->any())
        <div class="error-box">
            @foreach($errors->all() as $error) <p>⚠️ {{ $error }}</p> @endforeach
        </div>
    @endif

    <form action="{{ route('loginaluno.confirmar_codigo') }}" method="POST">
        @csrf
        <input type="text" name="codigo_digitado" placeholder="000000" maxlength="6" required>
        <button type="submit">Validar e Cadastrar</button>
    </form>
  </div>
</body>
</html>