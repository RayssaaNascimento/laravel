<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<title>Área do Professor</title>
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

    background:linear-gradient(180deg,#7000a8 0%,#b400d4 55%,#ef6c73 100%);
    min-height:100vh;

}

/* ================= HEADER ================= */

header{

    width:100%;
    background:#ff7a00;

    display:flex;
    justify-content:space-between;
    align-items:center;

    padding:18px 60px;

    box-shadow:0 5px 18px rgba(0,0,0,.25);

    position:sticky;
    top:0;
    z-index:999;

}

header h2{

    color:white;
    font-size:32px;
    font-weight:800;

}

nav{

    display:flex;
    gap:10px;

}

nav button{

    border:none;

    background:white;

    color:#ff7a00;

    padding:10px 18px;

    border-radius:30px;

    cursor:pointer;

    font-weight:600;

    transition:.3s;

}

nav button:hover{

    background:#ffe5cb;

    transform:translateY(-3px);

}

/* ================= MAIN ================= */

main{

    width:90%;
    margin:45px auto;

}

main h1{

    color:white;

    font-size:48px;

    font-weight:700;

}

main p{

    color:#f5f5f5;

    margin-top:8px;

    margin-bottom:30px;

    font-size:18px;

}

hr{

    display:none;

}

/* ================= MENU ================= */

main > section{

    display:flex;

    gap:15px;

    margin-bottom:35px;

}

main > section button{

    flex:1;

    border:none;

    background:white;

    color:#444;

    padding:18px;

    border-radius:18px;

    font-size:16px;

    font-weight:600;

    cursor:pointer;

    transition:.3s;

    box-shadow:0 8px 18px rgba(0,0,0,.15);

}

main > section button:hover{

    background:#ff8b00;

    color:white;

}

/* ================= SEÇÕES ================= */

#alunos,
#posts,
#calendario{

    background:white;

    padding:35px;

    border-radius:25px;

    box-shadow:0 10px 25px rgba(0,0,0,.20);

}

#alunos h2,
#posts h2,
#calendario h2{

    color:#4b1d91;

    margin-bottom:20px;

}

/* ================= BOTÃO ADICIONAR ================= */

#alunos > button{

    float:right;

    background:#ff7a00;

    color:white;

    border:none;

    padding:12px 25px;

    border-radius:12px;

    cursor:pointer;

    transition:.3s;

    font-weight:600;

}

#alunos > button:hover{

    background:#ff9500;

}

/* ================= TABELA ================= */

table{

    width:100%;

    border-collapse:collapse;

    margin-top:20px;

    overflow:hidden;

    border-radius:15px;

}

table thead{

    background:#ff7a00;

    color:white;

}

table th{

    padding:18px;

    text-align:left;

}

table td{

    padding:18px;

    background:white;

    border-bottom:1px solid #ececec;

}

table tbody tr:hover{

    background:#fafafa;

}

/* ================= BOTÕES DA TABELA ================= */

td button{

    border:none;

    padding:10px 16px;

    border-radius:10px;

    cursor:pointer;

    margin-right:8px;

    transition:.3s;

    font-weight:600;

}

td button:first-child{

    background:#ffd54f;

    color:#333;

}

td button:first-child:hover{

    background:#ffb300;

}

td button:last-child{

    background:#ef5350;

    color:white;

}

td button:last-child:hover{

    background:#d32f2f;

}

/* ================= POSTS ================= */

#posts p{

    color:#666;

    margin-bottom:25px;

}

#posts button{

    background:#4caf50;

    color:white;

    border:none;

    padding:14px 25px;

    border-radius:12px;

    cursor:pointer;

    font-weight:600;

    transition:.3s;

}

#posts button:hover{

    background:#388e3c;

}

/* ================= CALENDÁRIO ================= */

#calendario p{

    color:#666;

    margin-bottom:25px;

}

#calendario button{

    background:#2196f3;

    color:white;

    border:none;

    padding:14px 25px;

    border-radius:12px;

    cursor:pointer;

    transition:.3s;

    font-weight:600;

}

#calendario button:hover{

    background:#1976d2;

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

main > section{

    flex-direction:column;

}

table{

    display:block;

    overflow-x:auto;

}

main h1{

    font-size:36px;

}

}
</style>
<body>

<header>

    <div>
        <h2>BETH CIENTISTA</h2>
    </div>

    <nav>

        <button onclick="abrirPagina('inicio')">Início</button>

        <button onclick="abrirPagina('sobre')">Sobre Nós</button>

        <button onclick="abrirPagina('galeria')">Galeria</button>

        <button onclick="abrirPagina('biblioteca')">Biblioteca</button>

        <button onclick="abrirPagina('mencoes')">Menções Honrosas</button>

        <button onclick="abrirPagina('area')">Minha Área</button>

        <button onclick="sair()">Sair</button>

    </nav>

</header>

<main>

<h1>ÁREA DO PROFESSOR</h1>

<p>Painel de gerenciamento e aprovação</p>

<hr>

<section>

<button onclick="mostrarAlunos()">Alunos</button>

<button onclick="mostrarPosts()">Revisar Posts <span id="contadorPosts">2</span></button>

<button onclick="mostrarCalendario()">Calendário</button>

</section>

<hr>

<div id="conteudo">

<section id="alunos">

<h2>Gerenciar Alunos</h2>

<button onclick="adicionarAluno()">
Adicionar Aluno
</button>

<br><br>

<table border="1" width="100%">

<thead>

<tr>

<th>Nome</th>

<th>Email</th>

<th>Nível</th>

<th>Data de Entrada</th>

<th>Ações</th>

</tr>

</thead>

<tbody id="tabelaAlunos">

</tbody>

</table>

</section>

<section id="posts" hidden>

<h2>Revisão de Posts</h2>

<p>Aqui aparecerão os posts aguardando aprovação.</p>

<button onclick="aprovarTodos()">
Aprovar Todos
</button>

</section>

<section id="calendario" hidden>

<h2>Calendário</h2>

<p>Eventos e aulas.</p>

<button onclick="novoEvento()">
Novo Evento
</button>

</section>

</div>

</main>

<script>

let alunos = [

{
nome:"Maria Silva",
email:"maria@exemplo.com",
nivel:"Clubista",
entrada:"10/01/2026"
},

{
nome:"João Santos",
email:"joao@exemplo.com",
nivel:"Monitor",
entrada:"10/01/2026"
},

{
nome:"Ana Costa",
email:"ana@exemplo.com",
nivel:"Clubista",
entrada:"15/01/2026"
},

{
nome:"Pedro Almeida",
email:"pedro@exemplo.com",
nivel:"Clubista",
entrada:"20/01/2026"
}

];

function carregarTabela(){

const tabela = document.getElementById("tabelaAlunos");

tabela.innerHTML="";

alunos.forEach((aluno,index)=>{

tabela.innerHTML+=`

<tr>

<td>${aluno.nome}</td>

<td>${aluno.email}</td>

<td>${aluno.nivel}</td>

<td>${aluno.entrada}</td>

<td>

<button onclick="editarAluno(${index})">
Editar
</button>

<button onclick="excluirAluno(${index})">
Excluir
</button>

</td>

</tr>

`;

});

}

carregarTabela();

function adicionarAluno(){

let nome = prompt("Nome:");

if(nome==null) return;

let email = prompt("Email:");

if(email==null) return;

let nivel = prompt("Nível:");

if(nivel==null) return;

let entrada = prompt("Data:");

if(entrada==null) return;

alunos.push({

nome,
email,
nivel,
entrada

});

carregarTabela();

}

function editarAluno(indice){

let aluno = alunos[indice];

aluno.nome = prompt("Nome",aluno.nome);

aluno.email = prompt("Email",aluno.email);

aluno.nivel = prompt("Nível",aluno.nivel);

aluno.entrada = prompt("Data",aluno.entrada);

carregarTabela();

}

function excluirAluno(indice){

if(confirm("Deseja excluir este aluno?")){

alunos.splice(indice,1);

carregarTabela();

}

}

function mostrarAlunos(){

document.getElementById("alunos").hidden=false;

document.getElementById("posts").hidden=true;

document.getElementById("calendario").hidden=true;

}

function mostrarPosts(){

document.getElementById("alunos").hidden=true;

document.getElementById("posts").hidden=false;

document.getElementById("calendario").hidden=true;

}

function mostrarCalendario(){

document.getElementById("alunos").hidden=true;

document.getElementById("posts").hidden=true;

document.getElementById("calendario").hidden=false;

}

function aprovarTodos(){

alert("Todos os posts foram aprovados.");

document.getElementById("contadorPosts").innerText="0";

}

function novoEvento(){

alert("Abrir formulário de novo evento.");

}

function abrirPagina(pagina){

alert("Abrir página: "+pagina);

}

function sair(){

if(confirm("Deseja sair?")){

window.location.href="login.html";

}

}

</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>
</html>