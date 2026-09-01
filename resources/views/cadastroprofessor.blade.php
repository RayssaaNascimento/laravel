<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cadastro de Professor | Beth Cientista</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
          rel="stylesheet">

</head>

<style>

/* =========================
   CONFIGURAÇÕES GERAIS
========================= */

*{

    margin:0;
    padding:0;
    box-sizing:border-box;

    font-family:'Poppins',sans-serif;

}

body{

    min-height:100vh;

    display:flex;
    justify-content:center;
    align-items:center;

    padding:40px 20px;

    background:
    linear-gradient(
        180deg,
        #7000a8 0%,
        #b400d4 55%,
        #ef6c73 100%
    );

}

/* =========================
   BOLINHAS
========================= */

body::before{

    content:"";

    position:fixed;

    width:10px;
    height:10px;

    background:white;

    border-radius:50%;

    opacity:.7;

    top:12%;
    left:12%;

    box-shadow:

    180px 100px white,
    500px 50px white,
    750px 200px white,
    900px 500px white,
    100px 600px white,
    650px 650px white;

}

/* =========================
   CARD
========================= */

.cadastro{

    width:100%;
    max-width:550px;

    background:
    linear-gradient(
        180deg,
        #f8d7ff,
        #ffe2d2
    );

    padding:40px;

    border-radius:30px;

    box-shadow:
    0 20px 45px rgba(0,0,0,.30);

    position:relative;

    z-index:2;

}

/* =========================
   LOGO
========================= */

.logo{

    width:90px;
    height:90px;

    margin:0 auto 15px;

    border-radius:50%;

    background:white;

    overflow:hidden;

    border:4px solid white;

    box-shadow:
    0 8px 20px rgba(0,0,0,.20);

}

.logo img{

    width:100%;
    height:100%;

    object-fit:cover;

}

/* =========================
   TÍTULO
========================= */

h1{

    text-align:center;

    color:#222;

    font-size:36px;

    font-weight:800;

}

.subtitulo{

    text-align:center;

    color:#666;

    font-size:17px;

    margin-top:8px;

    margin-bottom:30px;

}

/* =========================
   TIPO DE CADASTRO
========================= */

.tipo{

    display:flex;

    justify-content:center;

    margin-bottom:30px;

}

.tipo span{

    background:
    linear-gradient(
        90deg,
        #8b2cf5,
        #6e20d9
    );

    color:white;

    padding:10px 30px;

    border-radius:30px;

    font-weight:700;

    box-shadow:
    0 5px 12px rgba(100,30,200,.25);

}

/* =========================
   CAMPOS
========================= */

.campo{

    margin-bottom:20px;

}

.campo label{

    display:block;

    color:#333;

    font-size:17px;

    font-weight:700;

    margin-bottom:8px;

}

.campo input,
.campo select{

    width:100%;

    padding:14px 16px;

    border:none;

    border-radius:15px;

    background:#f3f3f3;

    color:#333;

    font-size:16px;

    outline:none;

    transition:.3s;

}

.campo input:focus,
.campo select:focus{

    background:white;

    box-shadow:
    0 0 0 2px #ff7a00;

}

/* =========================
   BOTÕES
========================= */

.botoes{

    display:flex;

    gap:15px;

    margin-top:25px;

    align-items: center;
    justify-content: center;

}

.btn{

    flex:1;

    border:none;

    padding:14px;

    border-radius:30px;

    font-size:17px;

    font-weight:700;

    cursor:pointer;

    transition:.3s;
    
    /* Correções para a tag <a> se comportar como botão */
    text-align: center;
    text-decoration: none;

}

/* CADASTRAR */

.btn-cadastrar{

    background:#ff7a00;

    color:white;

    box-shadow:
    0 7px 18px rgba(255,122,0,.30);

}

.btn-cadastrar:hover{

    background:#ff9500;

    transform:translateY(-3px);

}

/* VOLTAR */

.btn-voltar{

    background:white;

    color:#ff7a00;

    border:2px solid #ff7a00;

}

.btn-voltar:hover{

    background:#ff7a00;

    color:white;

    transform:translateY(-3px);

}

/* =========================
   RESPONSIVO
========================= */

@media(max-width:600px){

    .cadastro{

        padding:28px 22px;

    }

    h1{

        font-size:29px;

    }

    .botoes{

        flex-direction:column;
        width: 100%;

    }
    
    .btn {
        width: 100%;
    }

}

</style>

<body>

<div class="cadastro">

    <div class="logo">

        <img src="{{ asset('Beth.jpg') }}" alt="Beth Cientista">

    </div>

    <h1>CADASTRO</h1>

    <p class="subtitulo">
        Crie sua conta de professor
    </p>

    <div class="tipo">

        <span>
            PROFESSOR
        </span>

    </div>

        <!-- MENSAGENS DE ERRO DO LARAVEL -->
        @if ($errors->any())
            <div id="mensagem" class="erro">
                @foreach ($errors->all() as $error)
                    <p>⚠️ {{ $error }}</p>
                @endforeach
            </div>
        @endif

        <!-- FORMULÁRIO -->
        <form action="{{ route('loginprofessor.adicionar') }}" method="POST">
            @csrf 

            <!-- NOME -->
            <div class="campo">
                <label>Nome Completo</label>
                <input type="text" name="nome" value="{{ old('nome') }}" placeholder="Digite seu nome" required>
            </div>

            <!-- EMAIL -->
            <div class="campo">
                <label>Email</label>
                <input type="email" name="email" value="{{ old('email') }}" placeholder="seu.email@exemplo.com" required>
            </div>

            <!-- SENHA -->
            <div class="campo">
                <label>Senha</label>
                <input type="password" name="senha" placeholder="********" required>
            </div>

            <!-- NÍVEL -->
            <div class="campo">
                <label>Código exclusivo de Professor</label>
                <input type="text" name="code" id="code" required>
            </div>

            <!-- LINK PARA VOLTAR / ENTRAR -->
           <div class="botoes">
               <a href="{{ route('fp') }}"><button type="button" class="btn btn-voltar">Voltar</button></a>
               <a href="{{ route('professor') }}"><button type="submit" class="btn btn-cadastrar">Cadastrar Professor</button></a>
           </div>
            
        </form>

</div>

</body>

</html>

