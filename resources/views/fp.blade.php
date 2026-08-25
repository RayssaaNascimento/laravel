<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Faça Parte - Beth Cientista</title>

  <link rel="preconnect" href="https://googleapis.com">
  <link href="https://googleapis.com/css2?family=Baloo+2:wght@400;600;700;800&display=swap" rel="stylesheet">

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

background:
        linear-gradient(
        180deg,
    #7000a8 0%,
    #b400d4 55%,
    #ef6c73 100%
    );

}

.container{

    width:90%;
    max-width:550px;

    background:
        linear-gradient(
        180deg,
    #f8d7ff,
    #ffe2d2
    );

    padding:45px;

    border-radius:30px;

    box-shadow:
        0 20px 45px rgba(0,0,0,.30);

    text-align:center;

}

.logo{

    width:90px;
    height:90px;

    margin:0 auto 20px;

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

    color:#222;

    font-size:34px;

    font-weight:800;

    margin-bottom:10px;

}

p{

    color:#666;

    font-size:17px;

    margin-bottom:35px;

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

.join-box{
    width:430px;
    background:linear-gradient(180deg,#f8d7ff,#ffe2d2);
    padding:35px;
    border-radius:30px;
    box-shadow:0 15px 35px rgba(0,0,0,.25);
    text-align: center;
}
h1{
    font-size:36px;
    color:#1e1e1e;
    font-weight:800;
    margin-bottom: 5px;
}

.botao {
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

.aluno {
    background: #8b2cf5;
    box-shadow: 0 8px 18px rgba(139, 44, 245, 0.35);
}

.aluno:hover {
    background: #a14fff;
    transform: translateY(-3px);
}

.professor {
    background: #ff7a00;
    box-shadow: 0 8px 18px rgba(255,122,0,.35);
    margin-bottom: 10px; /* Menor margem no último item */
}

.professor:hover {
    background: #ff9500;
    transform: translateY(-3px);
}

@media(max-width:768px){
    h1{
        font-size:30px;
    }
    .join-btn {
        font-size: 18px;
        padding: 13px;
    }
}
</style>        

</head>
<body>

<div class="container">

    <div class="logo">

        <img
            src="{{ asset('Beth.jpg') }}"
            alt="Beth Cientista"
        >

    </div>

    <h1>CRIAR CONTA</h1>

    <p>
        Escolha o tipo de conta que deseja criar
    </p>

            <a href="{{ route('cadastroprofessor') }}" class="botao aluno">
                Professor ↗
            </a>
    
            <a href="{{ route('cadastroaluno') }}" class="botao professor" >
                Aluno ↗
            </a>


    </div>

</body>
</html>