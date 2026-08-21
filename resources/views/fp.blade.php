<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Faça Parte - Beth Cientista</title>

  <link rel="preconnect" href="https://googleapis.com">
  <link href="https://googleapis.com/css2?family=Baloo+2:wght@400;600;700;800&display=swap" rel="stylesheet">

  <style>
      @import url('https://googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap');

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins',sans-serif;
}

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

body{
    display:flex;
    justify-content:center;
    align-items:center;
    min-height:100vh;
    background:linear-gradient(180deg,#6f00a8 0%,#b316d1 55%,#ef6b72 100%);
    overflow:hidden;
    position:relative;
}

/*==========================
BOLINHAS DO FUNDO
==========================*/
body::before,
body::after{
    content:"";
    position:absolute;
    width:10px;
    height:10px;
    background:white;
    border-radius:50%;
    opacity:.7;
}

body::before{
    top:12%;
    left:15%;
    box-shadow:
    200px 80px white,
    500px 150px white,
    800px 50px white,
    950px 320px white,
    120px 500px white,
    650px 620px white,
    980px 700px white;
}

body::after{
    bottom:8%;
    right:12%;
}

/*==========================
CARD CENTRAL
==========================*/
.join-box{
    width:430px;
    background:linear-gradient(180deg,#f8d7ff,#ffe2d2);
    padding:35px;
    border-radius:30px;
    box-shadow:0 15px 35px rgba(0,0,0,.25);
    text-align: center;
}
/*==========================
TEXTOS
==========================*/
h1{
    font-size:36px;
    color:#1e1e1e;
    font-weight:800;
    margin-bottom: 5px;
}

.subtitle{
    color:#555;
    font-size:16px;
    margin-bottom: 35px;
    line-height: 1.4;
}

label {
    display: block;
    color: #333;
    font-weight: 700;
    margin-bottom: 12px;
    font-size: 18px;
    text-align: left;
}

/*==========================
BOTÕES DE INSCRIÇÃO
==========================*/
.join-btn {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    border: none;
    color: white;
    padding: 15px;
    border-radius: 30px;
    font-size: 20px;
    font-weight: 700;
    cursor: pointer;
    transition: .3s;
    text-decoration: none;
    margin-bottom: 20px;
}

/* Botão Aluno (Roxo) */
.student-btn {
    background: #8b2cf5;
    box-shadow: 0 8px 18px rgba(139, 44, 245, 0.35);
}

.student-btn:hover {
    background: #a14fff;
    transform: translateY(-3px);
}

/* Botão Professor (Laranja) */
.teacher-btn {
    background: #ff7a00;
    box-shadow: 0 8px 18px rgba(255,122,0,.35);
    margin-bottom: 10px; /* Menor margem no último item */
}

.teacher-btn:hover {
    background: #ff9500;
    transform: translateY(-3px);
}

/*==========================
RESPONSIVO
==========================*/
@media(max-width:768px){
    .join-box{
        width:92%;
        padding:25px;
    }
    h1{
        font-size:30px;
    }
    .subtitle{
        font-size:15px;
    }
    .join-btn {
        font-size: 18px;
        padding: 13px;
    }
}
</style>        

</head>
<body>

    <div class="join-box">

        <!-- Grupo de Avatares mostrando os dois perfis lado a lado -->
        <div class="logo">
            <img src="{{ asset('Beth.jpg') }}" alt="Beth Cientista">
            <h1>BETH CIENTISTA</h1>
            <p>Escolha como deseja entrar:</p>
        </div>

        <!-- Botão para Aluno -->
        <a href="{{ route('cadastroaluno') }}" class="join-btn student-btn">
            Cadastrar como aluno ↗
        </a>

        <!-- Botão para Professor -->
        <a href="{{ route('cadastroprofessor') }}" class="join-btn teacher-btn">
            Cadastrar como professor ↗
        </a>

    </div>

</body>
</html>
