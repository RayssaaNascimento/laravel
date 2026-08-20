<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Área</title>

    <link rel="stylesheet" href="style.css">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap');

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins',sans-serif;
}

body{
    background:linear-gradient(180deg,#7000a8 0%,#b500d6 55%,#ef6b72 100%);
    min-height:100vh;
}

/* ================= HEADER ================= */

header{

    width:100%;
    background:#ff7a00;

    display:flex;
    justify-content:space-between;
    align-items:center;

    padding:15px 60px;

    box-shadow:0 5px 18px rgba(0,0,0,.25);

    position:sticky;
    top:0;
    z-index:999;

}

.logo{

    display:flex;
    align-items:center;
    gap:15px;

}

.logo img{

    width:60px;
    height:60px;

    border-radius:50%;

    background:white;

}

.logo h2{

    color:white;
    font-size:30px;
    font-weight:800;

}

.logo p{

    color:white;
    font-size:13px;

}

/* ================= NAVBAR ================= */

nav{

    display:flex;
    align-items:center;
    gap:12px;

}

nav button{

    border:none;
    background:white;

    color:#ff7a00;

    padding:10px 18px;

    border-radius:30px;

    font-weight:600;

    cursor:pointer;

    transition:.3s;

}

nav button:hover{

    transform:translateY(-3px);

    background:#ffe3cb;

}

nav .ativo{

    background:#ffd84f;

}

/* ================= MAIN ================= */

main{

    width:85%;

    margin:40px auto;

}

/* ================= PERFIL ================= */

.perfil{

    background:white;

    border-radius:25px;

    padding:35px;

    display:flex;
    align-items:center;
    gap:30px;

    box-shadow:0 10px 25px rgba(0,0,0,.20);

    margin-bottom:35px;

}

.foto{

    width:120px;
    height:120px;

    border-radius:50%;

    background:linear-gradient(180deg,#cf5df7,#ff70b7);

    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;

    color:white;

    position:relative;

}

.foto i{

    font-size:60px;

}

.foto span{

    position:absolute;
    bottom:-12px;

    background:#9b4dff;

    color:white;

    padding:6px 14px;

    border-radius:20px;

    font-size:13px;

    font-weight:600;

}

.perfil h1{

    color:#222;

    font-size:42px;

    margin-bottom:10px;

}

.perfil p{

    color:#666;

    font-size:20px;

}

/* ================= MENU ================= */

.menu-area{

    display:flex;

    gap:20px;

    margin-bottom:35px;

}

.menu-area button{

    flex:1;

    border:none;

    background:white;

    color:#333;

    padding:18px;

    border-radius:18px;

    font-size:17px;

    font-weight:600;

    cursor:pointer;

    transition:.3s;

    box-shadow:0 8px 18px rgba(0,0,0,.15);

}

.menu-area button i{

    margin-right:8px;

}

.menu-area button:hover{

    background:#ff8b00;

    color:white;

}

/* ================= TÍTULO ================= */

.titulo{

    display:flex;
    justify-content:space-between;
    align-items:center;

    margin-bottom:25px;

}

.titulo h2{

    color:white;

    font-size:34px;

}

.titulo button{

    border:none;

    background:#111;

    color:white;

    padding:15px 25px;

    border-radius:15px;

    cursor:pointer;

    font-size:16px;

    transition:.3s;

}

.titulo button:hover{

    background:#ff8b00;

}

/* ================= PUBLICAÇÕES ================= */

.card-publicacao{

    background:white;

    border-radius:22px;

    padding:25px;

    margin-bottom:25px;

    display:flex;
    justify-content:space-between;
    align-items:center;

    box-shadow:0 8px 20px rgba(0,0,0,.20);

    transition:.3s;

}

.card-publicacao:hover{

    transform:translateY(-5px);

}

.card-publicacao h3{

    color:#222;

    font-size:27px;

    margin-bottom:12px;

}

.card-publicacao p{

    color:#666;

    margin-bottom:15px;

}

.card-publicacao span{

    background:#1cc95d;

    color:white;

    padding:8px 18px;

    border-radius:20px;

    font-size:14px;

    font-weight:600;

}

.card-publicacao button{

    width:50px;
    height:50px;

    border:none;

    background:#f5f5f5;

    border-radius:12px;

    cursor:pointer;

    font-size:20px;

    margin-left:12px;

    transition:.3s;

}

.card-publicacao button:hover{

    background:#ff8b00;

    color:white;

}

/* ================= CALENDÁRIO ================= */

#calendario{

    background:white;

    border-radius:20px;

    padding:40px;

    box-shadow:0 10px 20px rgba(0,0,0,.20);

}

#calendario h2{

    color:#333;

    margin-bottom:25px;

}

#calendario input{

    width:100%;

    padding:18px;

    border:2px solid #ddd;

    border-radius:15px;

    font-size:18px;

}

/* ================= MATERIAL ================= */

#material{

    background:white;

    border-radius:20px;

    padding:40px;

    box-shadow:0 10px 20px rgba(0,0,0,.20);

}

#material h2{

    color:#333;

    margin-bottom:20px;

}

#material p{

    color:#666;

    line-height:28px;

}

/* ================= RESPONSIVO ================= */

@media(max-width:1000px){

header{

    flex-direction:column;

    padding:20px;

}

nav{

    flex-wrap:wrap;

    justify-content:center;

    margin-top:20px;

}

main{

    width:95%;

}

.perfil{

    flex-direction:column;

    text-align:center;

}

.menu-area{

    flex-direction:column;

}

.titulo{

    flex-direction:column;

    gap:20px;

}

.card-publicacao{

    flex-direction:column;

    gap:20px;

    text-align:center;

}

}
</style>
<body>

<!-- ================= HEADER ================= -->

<header>

    <div class="logo">
        
      <img src="{{ asset('Beth.jpg') }}">
      
    </div>

        <div>

            <h2>BETH CIENTISTA</h2>

            <p>Divulgação Científica</p>

        </div>

    </div>

    <nav>

        <button onclick="abrirPagina('inicio')">Início</button>

        <button onclick="abrirPagina('sobre')">Sobre Nós</button>

        <button onclick="abrirPagina('galeria')">Galeria</button>

        <button onclick="abrirPagina('biblioteca')">Biblioteca</button>

        <button onclick="abrirPagina('mencoes')">Menções Honrosas</button>

        <button class="ativo">Minha Área</button>

        <button onclick="sair()">Sair</button>

    </nav>

</header>

<!-- ================= PERFIL ================= -->

<main>

<section class="perfil">

    <div class="foto">

        <i class="bi bi-person"></i>

        <span>Clubista</span>

    </div>

    <div>

        <h1>MARIA SILVA</h1>

        <p>Bem-vindo(a) à sua área!</p>

    </div>

</section>

<!-- ================= MENU ================= -->

<section class="menu-area">

<button onclick="mostrarPublicacoes()">

<i class="bi bi-file-earmark-text"></i>

Minhas Publicações

</button>

<button onclick="mostrarCalendario()">

<i class="bi bi-calendar3"></i>

Calendário

</button>

<button onclick="mostrarMateriais()">

<i class="bi bi-book"></i>

Material de Apoio

</button>

</section>

<!-- ================= PUBLICAÇÕES ================= -->

<section id="publicacoes">

<div class="titulo">

<h2>GERENCIAR PUBLICAÇÕES</h2>

<button onclick="novaPublicacao()">

<i class="bi bi-plus-lg"></i>

Nova Publicação

</button>

</div>

<div id="listaPublicacoes">

<!-- Publicações criadas pelo JavaScript -->

</div>

</section>

<!-- ================= CALENDÁRIO ================= -->

<section id="calendario" hidden>

<h2>Calendário</h2>

<input type="date">

</section>

<!-- ================= MATERIAL ================= -->

<section id="material" hidden>

<h2>Material de Apoio</h2>

<p>Arquivos, PDFs e vídeos ficarão aqui.</p>

</section>

</main>

<script>

let publicacoes=[

{

titulo:"A Física dos Buracos Negros",

categoria:"Beth nas Estrelas",

data:"15/03/2026",

status:"Aprovado"

},

{

titulo:"Rascunho sobre DNA",

categoria:"Beth Anatomy",

data:"20/03/2026",

status:"Rascunho"

}

];

function carregarPublicacoes(){

const lista=document.getElementById("listaPublicacoes");

lista.innerHTML="";

publicacoes.forEach((item,index)=>{

lista.innerHTML+=`

<div class="card-publicacao">

<div>

<h3>${item.titulo}</h3>

<p>

${item.categoria}

•

${item.data}

</p>

<span>${item.status}</span>

</div>

<div>

<button onclick="editar(${index})">

<i class="bi bi-pencil-square"></i>

</button>

<button onclick="excluir(${index})">

<i class="bi bi-trash"></i>

</button>

</div>

</div>

`;

});

}

carregarPublicacoes();

function mostrarPublicacoes(){

publicacoesSection=document.getElementById("publicacoes");

calendario=document.getElementById("calendario");

material=document.getElementById("material");

publicacoesSection.hidden=false;

calendario.hidden=true;

material.hidden=true;

}

function mostrarCalendario(){

publicacoes.hidden=true;

calendario.hidden=false;

material.hidden=true;

}

function mostrarMateriais(){

publicacoes.hidden=true;

calendario.hidden=true;

material.hidden=false;

}

function novaPublicacao(){

window.location.href="nova-publicacao.html";

}

function editar(id){

window.location.href="editar-publicacao.html?id="+id;

}

function excluir(id){

if(confirm("Deseja excluir esta publicação?")){

publicacoes.splice(id,1);

carregarPublicacoes();

}

}

function abrirPagina(nome){

window.location.href=nome+".html";

}

function sair(){

window.location.href="login.html";

}

</script>

</body>
</html>