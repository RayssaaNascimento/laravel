<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        body::before, body::after{ 
            content:''; 
            position:absolute; 
            width:8px; 
            height:8px; 
            background:white; 
            border-radius:50%; 
            opacity:0.6; 
        }
        body::before{ top:15%; left:20%; }
        body::after{ bottom:10%; right:18%; }

        .login-box{ 
            width:400px; 
            padding:35px; 
            border-radius:30px; 
            background: linear-gradient(90deg,#efd4f3,#f7dccf); 
            box-shadow:0 10px 30px rgba(0,0,0,0.25); 
        }
        h1{ 
            text-align:center; 
            margin-top:5px; 
            font-size:30px; 
            color:#111827; 
            font-weight:800; 
            line-height: 1.2;
        }
        .subtitle{ 
            text-align:center; 
            color:#4b5563; 
            font-size:18px; 
            font-weight:700; 
            margin-top:10px; 
            margin-bottom:25px; 
            line-height: 1.4;
        }
        input{ 
            width:100%; 
            padding:14px; 
            border:none; 
            border-radius:15px; 
            background:#ececec; 
            margin-bottom:20px; 
            font-size:24px; 
            font-weight: 700;
            letter-spacing: 4px;
            text-align: center;
            outline:none; 
        }
        input:focus{ 
            border:2px solid #a855f7; 
            background: #ffffff;
        }
        input::placeholder {
            letter-spacing: 4px;
            color: #a3a3a3;
            font-weight: 400;
        }
        .login-btn{ 
            width:100%; 
            padding:13px; 
            border:none; 
            border-radius:30px; 
            background:#ff6b00; 
            color:white; 
            font-size:22px; 
            font-weight:700; 
            cursor:pointer; 
            transition:0.3s; 
            box-shadow:0 5px 15px rgba(255,107,0,0.4); 
            margin-top:10px; 
        }
        .login-btn:hover{ 
            transform:scale(1.03); 
        }
        
        .resend-container {
            text-align: center;
            margin-top: 20px;
        }
        .resend-btn {
            background: none;
            border: none;
            color: #8a00b8;
            font-size: 16px;
            font-weight: 700;
            cursor: pointer;
            text-decoration: underline;
            transition: 0.2s;
        }
        .resend-btn:disabled {
            color: #71717a;
            cursor: not-allowed;
            text-decoration: none;
        }

        .error-box { 
            background-color: #fee2e2; 
            border: 1px solid #fca5a5; 
            color: #991b1b; 
            padding: 15px; 
            border-radius: 15px; 
            margin-bottom: 20px; 
            font-weight: 700; 
        }
        .error-box p { margin: 5px 0; }

        /* CAIXA DE SUCESSO DO REENVIO */
        .success-box {
            background-color: #dcfce7;
            border: 1px solid #86efac;
            color: #166534;
            padding: 15px;
            border-radius: 15px;
            margin-bottom: 20px;
            font-weight: 700;
            text-align: center;
        }

        @media(max-width:500px){ 
            .login-box{ 
                width:90%; 
                padding:25px; 
            } 
            h1{ font-size:30px; } 
            .subtitle{ font-size:16px; } 
        }
    </style>
</head>
<body>

    <div class="login-box">
        <h1>Confirme seu E-mail</h1>
        <p class="subtitle">Enviamos um código de 6 dígitos para o e-mail informado.</p>

        <!-- Mensagem de Sucesso do Reenvio -->
        @if(session('status'))
            <div class="success-box">
                ✨ {{ session('status') }}
            </div>
        @endif

        <!-- Mensagem de Erros gerais -->
        @if($errors->any())
            <div class="error-box">
                @foreach($errors->all() as $error)
                    <p>⚠️ {{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form action="{{ route('loginprofessor.confirmar_codigo') }}" method="POST">
            @csrf
            <input type="text" id="codigo" name="codigo_digitado" placeholder="000000" maxlength="6" required autocomplete="off">
            <button type="submit" class="login-btn">Validar e Cadastrar</button>
        </form>

        <div class="resend-container">
            <form action="{{ route('loginprofessor.reenviar_codigo') }}" method="POST" id="formReenviar">
                @csrf
                <button type="submit" id="btnReenviar" class="resend-btn" disabled>
                    Reenviar código (<span id="contador">60</span>s)
                </button>
            </form>
        </div>
    </div>

    <script>
        const inputCodigo = document.getElementById('codigo');
        inputCodigo.addEventListener('input', (e) => {
            e.target.value = e.target.value.replace(/\D/g, '');
        });

        const btnReenviar = document.getElementById('btnReenviar');
        const contadorTexto = document.getElementById('contador');
        let tempoRestante = 20;

        function atualizarContador() {
            if (tempoRestante > 0) {
                tempoRestante--;
                contadorTexto.textContent = tempoRestante;
                setTimeout(atualizarContador, 1000);
            } else {
                btnReenviar.disabled = false;
                btnReenviar.textContent = "Reenviar código de verificação";
            }
        }

        window.addEventListener('DOMContentLoaded', () => {
            atualizarContador();
        });
    </script>
</body>
</html>
