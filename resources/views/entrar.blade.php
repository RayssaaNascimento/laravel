<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Escolha seu Cadastro | Beth Cientista</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(180deg, #7000a8 0%, #b400d4 55%, #ef6c73 100%);
            padding: 20px;
        }

        .container {
            width: 100%;
            max-width: 550px;
            background: linear-gradient(180deg, #f8d7ff, #ffe2d2);
            padding: 45px;
            border-radius: 30px;
            box-shadow: 0 20px 45px rgba(0, 0, 0, .30);
            text-align: center;
        }

        .logo {
            width: 90px;
            height: 90px;
            margin: 0 auto 20px;
            border-radius: 50%;
            overflow: hidden;
            border: 4px solid white;
            box-shadow: 0 8px 20px rgba(0, 0, 0, .20);
        }

        .logo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        h1 {
            color: #222;
            font-size: 34px;
            font-weight: 800;
            margin-bottom: 10px;
        }

        p {
            color: #666;
            font-size: 17px;
            margin-bottom: 35px;
        }

        .botoes {
            display: flex;
            gap: 20px;
            width: 100%;
        }

        /* Esta classe corrige o problema do tamanho dos links no Laravel */
        .link-botao {
            flex: 1;
            text-decoration: none;
            display: block;
        }

        .botao {
            width: 100%;
            border: none;
            padding: 16px;
            border-radius: 30px;
            font-size: 18px;
            font-weight: 700;
            cursor: pointer;
            transition: .3s;
            display: block;
            text-align: center;
        }

        .professor {
            background: #8b2cf5;
            color: white;
            box-shadow: 0 7px 18px rgba(139, 44, 245, .30);
        }

        .aluno {
            background: #ff7a00;
            color: white;
            box-shadow: 0 7px 18px rgba(255, 122, 0, .30);
        }

        /* Efeito de hover aplicado através do link pai */
        .link-botao:hover .botao {
            transform: translateY(-4px);
            filter: brightness(1.08);
        }

        @media(max-width: 600px) {
            .container {
                padding: 30px 22px;
            }

            .botoes {
                flex-direction: column;
                gap: 15px;
            }

            .link-botao {
                width: 100%;
            }

            h1 {
                font-size: 28px;
            }
        }
    </style>
</head>

<body>

    <div class="container">

        <div class="logo">
            <img src="{{ asset('Beth.jpg') }}" alt="Beth Cientista">
        </div>

        <h1>ENTRE NA SUA CONTA</h1>

        <p>Escolha o tipo de conta que deseja acessar</p>

        <div class="botoes">
            <!-- Os links controlam a largura e os botões internos preenchem 100% do espaço -->
            <a href="{{ route('loginaluno') }}" class="link-botao">
                <button type="button" class="botao aluno">Aluno</button>
            </a>
            
            <a href="{{ route('loginprofessor') }}" class="link-botao">
                <button type="button" class="botao professor">Professor</button>
            </a>
        </div>

    </div>

</body>

</html>