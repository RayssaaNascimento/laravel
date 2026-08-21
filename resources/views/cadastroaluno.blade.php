<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Cadastro - Beth Cientista</title>

<link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;600;700;800&display=swap" rel="stylesheet">

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

        /* CONFIGURAÇÃO PARA ESCONDER A ÁREA CIENTÍFICA NO INÍCIO */
        #campo-area {
            display: none;
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

            <!-- NÍVEL -->
            <div class="campo">
                <label for="nivel">Nível</label>
                <select id="nivel" name="nivel" required>
                    <option value="" disabled {{ old('nivel') == '' ? 'selected' : '' }}>Selecione seu nível</option>
                    <option value="Aluno Clubista" {{ old('nivel') == 'Aluno Clubista' ? 'selected' : '' }}>
                        Aluno Clubista
                    </option>
                    <option value="Professor" {{ old('nivel') == 'Professor' ? 'selected' : '' }}>
                        Professor
                    </option>
                </select>
            </div>

            <!-- ÁREA CIENTÍFICA (COM ID PARA O SCRIPT CONTROLAR) -->
            <div class="campo" id="campo-area">
                <label>Área Científica</label>
                <select id="select-area" name="area_cientifica">
                    <option value="" disabled {{ old('area_cientifica') == '' ? 'selected' : '' }}>Selecione uma área</option>
                    <option value="Biologia" {{ old('area_cientifica') == 'Biologia' ? 'selected' : '' }}>Biologia</option>
                    <option value="Química" {{ old('area_cientifica') == 'Química' ? 'selected' : '' }}>Química</option>
                    <option value="Física" {{ old('area_cientifica') == 'Física' ? 'selected' : '' }}>Física</option>
                    <option value="Astronomia" {{ old('area_cientifica') == 'Astronomia' ? 'selected' : '' }}>Astronomia</option>
                    <option value="Anatomia" {{ old('area_cientifica') == 'Anatomia' ? 'selected' : '' }}>Anatomia</option>
                </select>
            </div>

            <!-- BOTÃO CADASTRAR -->
            <button type="submit" class="btn-cadastrar">↗ Criar Conta</button>
            
        </form>

        <!-- LINK PARA VOLTAR / ENTRAR -->
        <a href="{{ route('loginaluno.index') }}" style="text-decoration: none;">
            <button type="button" class="btn-voltar">Já possui conta? Entrar</button>
        </a>
        
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
    const selectNivel = document.getElementById("nivel");
    const campoArea = document.getElementById("campo-area");
    const selectArea = document.getElementById("select-area");

    function controlarVisibilidade() {
        if (selectNivel.value === "Aluno Clubista") {
            campoArea.style.display = "block";
            selectArea.setAttribute("required", "required"); // Torna obrigatório se aparecer
        } else {
            campoArea.style.display = "none";
            selectArea.removeAttribute("required"); // Tira a obrigação se sumir
            selectArea.value = ""; // Limpa a seleção anterior
        }
    }

    // Executa quando o usuário muda a opção na caixinha de Nível
    selectNivel.addEventListener("change", controlarVisibilidade);

    // Executa assim que a página carrega (ajuda se o Laravel voltar com erro e manter os campos preenchidos)
    controlarVisibilidade();
});
</script>




</body>
</html>