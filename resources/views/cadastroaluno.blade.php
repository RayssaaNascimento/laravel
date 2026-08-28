<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beth Cientista - Cadastro</title>
    <!-- Importando a fonte Poppins externa -->
    <link rel="preconnect" href="https://googleapis.com">
    <link rel="preconnect" href="https://gstatic.com" crossorigin>
    <link href="https://googleapis.com/css2?family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet">
    
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
            background:
                linear-gradient(
                    180deg,
                    #7000a8 0%,
                    #b400d4 55%,
                    #ef6c73 100%
                );
            display:flex;
            justify-content:center;
            align-items:center;
            padding:30px;
        }

        /* =========================
           FUNDO (Estrelas/Pontos)
        ========================= */
        body::before{
            content:"";
            position:fixed;
            width:10px;
            height:10px;
            background:white;
            border-radius:50%;
            top:15%;
            left:12%;
            opacity:.7;
            box-shadow:
                200px 100px white,
                500px 40px white,
                750px 200px white,
                100px 500px white,
                850px 550px white,
                600px 650px white;
        }

        /* =========================
           CONTAINER
        ========================= */
        .cadastro-container{
            width:100%;
            display:flex;
            justify-content:center;
        }

        /* =========================
           CARD
        ========================= */
        .cadastro-card{
            width:460px;
            background:
                linear-gradient(
                    180deg,
                    #f9d9ff,
                    #ffe2d2
                );
            padding:40px;
            border-radius:30px;
            box-shadow:
                0 15px 40px rgba(0,0,0,.28);
            position:relative;
            z-index:2;
        }

        /* =========================
           LOGO
        ========================= */
        .logo{
            text-align:center;
            margin-bottom:25px;
        }

        .logo img{
            width:85px;
            height:85px;
            object-fit:cover;
            border-radius:50%;
            background:white;
            padding:4px;
            border:4px solid white;
            box-shadow:
                0 6px 15px rgba(0,0,0,.2);
        }

        .logo h1{
            margin-top:12px;
            color:#222;
            font-size:30px;
            font-weight:800;
        }

        .logo p{
            color:#666;
            font-size:14px;
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
            outline:none;
            border-radius:14px;
            background:#f1f1f1;
            color:#333;
            font-size:16px;
            transition:.3s;
        }

        .campo input:focus,
        .campo select:focus{
            background:white;
            box-shadow:
                0 0 0 3px rgba(255,122,0,.25);
        }

        .campo input::placeholder{
            color:#999;
        }

        /* =========================
           SELECT
        ========================= */
        .campo select{
            cursor:pointer;
        }

        /* =========================
           BOTÃO CADASTRAR
        ========================= */
        .btn-cadastrar{
            width:100%;
            border:none;
            padding:15px;
            border-radius:30px;
            background:#ff7a00;
            color:white;
            font-size:20px;
            font-weight:700;
            cursor:pointer;
            box-shadow:
                0 7px 18px rgba(255,122,0,.35);
            transition:.3s;
        }

        .btn-cadastrar:hover{
            background:#ff9200;
            transform:translateY(-3px);
        }

        /* =========================
           BOTÃO VOLTAR
        ========================= */
        .btn-voltar{
            width:100%;
            margin-top:15px;
            padding:12px;
            border:none;
            background:transparent;
            color:#5b21b6;
            font-size:15px;
            font-weight:600;
            cursor:pointer;
            transition:.3s;
        }

        .btn-voltar:hover{
            color:#ff7a00;
        }

        /* =========================
           MENSAGENS DE ERRO
        ========================= */
        #mensagem{
            text-align:center;
            margin-bottom:15px;
            font-size:14px;
            font-weight:600;
            padding: 10px;
            border-radius: 10px;
            background: rgba(217, 48, 37, 0.1);
        }

        .erro{
            color:#d93025;
        }

        /* =========================
           RESPONSIVO
        ========================= */
        @media(max-width:600px){
            body{
                padding:15px;
            }

            .cadastro-card{
                width:100%;
                padding:30px 25px;
                border-radius:25px;
            }

            .logo h1{
                font-size:25px;
            }
        }
    </style>
</head>
<body>

<div class="cadastro-container">
    <div class="cadastro-card">
        
        <!-- LOGO E APRESENTAÇÃO -->
        <div class="logo">
            <img src="{{ asset('Beth.jpg') }}" alt="Beth Cientista">
            <h1>BETH CIENTISTA</h1>
            <p>Crie sua conta na plataforma</p>
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
        <form action="{{ route('loginaluno.adicionar') }}" method="POST">
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


            <!-- ÁREA CIENTÍFICA -->
            <div class="campo">
                <label>Área Científica</label>
                <select name="area_cientifica" required>
                    <option value="" disabled {{ old('area_cientifica') == '' ? 'selected' : '' }}>Selecione uma área</option>
                    <option value="Biologia" {{ old('area_cientifica') == 'Biologia' ? 'selected' : '' }}>Biologia</option>
                    <option value="Química" {{ old('area_cientifica') == 'Química' ? 'selected' : '' }}>Química</option>
                    <option value="Física" {{ old('area_cientifica') == 'Física' ? 'selected' : '' }}>Física</option>
                    <option value="Astronomia" {{ old('area_cientifica') == 'Astronomia' ? 'selected' : '' }}>Astronomia</option>
                    <option value="Anatomia" {{ old('area_cientifica') == 'Anatomia' ? 'selected' : '' }}>Anatomia</option>
                </select>
            </div>

            <!-- BOTÃO CADASTRAR -->
             <a href="{{ route('aluno') }}"><button type="submit" class="btn-cadastrar">↗ Criar Conta</button></a>
            
            
        </form>

        <!-- LINK PARA VOLTAR / ENTRAR -->
        <a href="{{ route('loginaluno') }}" style="text-decoration: none;">
            <button type="button" class="btn-voltar">Já possui conta? Entrar</button>
        </a>
        
    </div>
</div>

</body>
</html>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cadastro de Aluno | Beth Cientista</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
          rel="stylesheet">

</head>

<style>

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

body::after{

    content:"";

    position:fixed;

    width:8px;
    height:8px;

    background:white;

    border-radius:50%;

    opacity:.7;

    bottom:10%;
    right:12%;

}

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

.logo{

    width:90px;
    height:90px;

    margin:0 auto 15px;

    border-radius:50%;

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

    padding:10px 35px;

    border-radius:30px;

    font-weight:700;

    box-shadow:
        0 5px 12px rgba(100,30,200,.25);

}

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

.botoes{

    display:flex;

    gap:15px;

    margin-top:25px;

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

}

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

#mensagem{

    display:none;

    margin-top:20px;

    padding:15px;

    border-radius:15px;

    text-align:center;

    font-weight:600;

}

.sucesso{

    display:block !important;

    background:#d8f8df;

    color:#24733a;

    border:1px solid #8bd39b;

}

.erro{

    display:block !important;

    background:#ffe0e0;

    color:#a83232;

    border:1px solid #f0a0a0;

}

@media(max-width:600px){

    .cadastro{

        padding:28px 22px;

    }

    h1{

        font-size:29px;

    }

    .botoes{

        flex-direction:column;

    }

}

</style>

<body>

<div class="cadastro">

    <div class="logo">

        <img
            src="{{ asset('Beth.jpg') }}"
            alt="Beth Cientista"
        >

    </div>

    <h1>CADASTRO</h1>

    <p class="subtitulo">
        Crie sua conta de aluno
    </p>

    <div class="tipo">

        <span>
            ALUNO CLUBISTA
        </span>

    </div>

    <form id="formCadastro">

        <div class="campo">

            <label for="nome">
                Nome completo
            </label>

            <input
                type="text"
                id="nome"
                placeholder="Digite seu nome completo"
                required
            >

        </div>

        <div class="campo">

            <label for="email">
                E-mail
            </label>

            <input
                type="email"
                id="email"
                placeholder="aluno@exemplo.com"
                required
            >

        </div>

        <div class="campo">

            <label for="senha">
                Senha
            </label>

            <input
                type="password"
                id="senha"
                placeholder="Digite sua senha"
                required
            >

        </div>

        <div class="botoes">

            <button
                type="submit"
                class="btn btn-cadastrar"
            >
                Cadastrar Aluno
            </button>

        </div>

        <div id="mensagem"></div>

    </form>

</div>

<script>

const formulario = document.getElementById("formCadastro");

formulario.addEventListener("submit", function(event){

    event.preventDefault();

    const nome = document.getElementById("nome").value.trim();

    const email = document.getElementById("email").value.trim();

    const senha = document.getElementById("senha").value;

    const mensagem = document.getElementById("mensagem");


    /*
    =========================
    VALIDAR CAMPOS
    =========================
    */

    if(nome === "" || email === "" || senha === ""){

        mensagem.innerText = "Preencha todos os campos.";

        mensagem.className = "erro";

        return;

    }


    /*
    =========================
    CADASTRO REALIZADO
    =========================
    */

    mensagem.innerText = "Aluno cadastrado com sucesso!";

    mensagem.className = "sucesso";


    /*
    =========================
    REDIRECIONAR
    =========================
    */

    setTimeout(function(){

    

    }, 1000);

});



</script>

</body>

</html>
