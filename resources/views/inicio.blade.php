<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Beth Cientista</title>
    <link rel="icon" type="image/jpeg" href="{{ asset('images/beth-logo.jpeg') }}">

    {{-- CSS da página --}}
    <link rel="stylesheet" href="{{ asset('css/inicio.css') }}">

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;500;600;700&family=Luckiest+Guy&display=swap" rel="stylesheet">

    {{-- Ícones --}}
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>

<body>

    {{-- =========================================================
        HEADER
    ========================================================== --}}
    <header class="site-header">

        <div class="header-noise"></div>

        <div class="header-container">

            {{-- Logo --}}
            <a href="{{ url('/') }}" class="brand">

                <div class="brand-logo">
                    <img
                        src="{{ asset('Beth.jpg') }}"
                        alt="Beth Cientista"
                    >
                </div>

                <div class="brand-text">
                    <h1>Beth Cientista</h1>
                    <span>Divulgação Científica</span>
                </div>

            </a>

            {{-- Navegação --}}
            <nav class="main-nav">

                <a href="{{ url('/inicio') }}" class="nav-link active">
                    Início
                </a>

                <span class="nav-divider"></span>

                <a href="{{ url('/sobre') }}" class="nav-link">
                    Sobre Nós
                </a>

                <span class="nav-divider"></span>

                <a href="{{ url('/galeria') }}" class="nav-link">
                    Galeria
                </a>

                <span class="nav-divider"></span>

                <a href="{{ url('/biblioteca') }}" class="nav-link">
                    Biblioteca
                </a>

                <span class="nav-divider"></span>

                <a href="{{ url('/mencoes-honrosas') }}" class="nav-link">
                    Menções Honrosas
                </a>

                <a href="{{ asset('loginaluno/cadastro') }}" class="btn-participe">
                    Faça Parte
                </a>

                <a href="{{ asset('loginaluno/index') }}" class="btn-login">
                    <i class="fa-solid fa-right-to-bracket"></i>
                    Entrar
                </a>

            </nav>

            {{-- Menu mobile --}}
            <button class="mobile-menu-button" id="mobileMenuButton">
                <i class="fa-solid fa-bars"></i>
            </button>

        </div>

        {{-- Menu mobile --}}
        <div class="mobile-menu" id="mobileMenu">

            <a href="{{ url('/') }}">Início</a>
            <a href="{{ url('/sobre') }}">Sobre Nós</a>
            <a href="{{ url('/galeria') }}">Galeria</a>
            <a href="{{ url('/biblioteca') }}">Biblioteca</a>
            <a href="{{ url('/mencoes-honrosas') }}">Menções Honrosas</a>

            <div class="mobile-menu-buttons">

                <a href="{{ url('/login') }}" class="btn-participe">
                    Faça Parte
                </a>

                <a href="{{ asset('loginaluno/index') }}" class="btn-login">
                    <i class="fa-solid fa-right-to-bracket"></i>
                    Entrar
                </a>

            </div>

        </div>

    </header>


    {{-- =========================================================
        CONTEÚDO PRINCIPAL
    ========================================================== --}}
    <main class="home-page">

        {{-- Elementos decorativos --}}
        <div class="background-decoration decoration-one"></div>
        <div class="background-decoration decoration-two"></div>
        <div class="background-decoration decoration-three"></div>

        <div class="blob blob-purple">
            <svg viewBox="0 0 200 200">
                <path
                    fill="#bc10c0"
                    d="M44.7,-76.4C58.8,-69.2,71.8,-59.1,79.6,-45.8C87.4,-32.6,90,-16.3,88.5,-0.9C87,14.6,81.4,29.2,73.1,42.8C64.8,56.4,53.8,69,40.1,76.7C26.4,84.4,13.2,87.2,-0.5,88.1C-14.2,89,-28.4,88,-41.2,81.4C-54,74.8,-65.4,62.6,-73.3,48.4C-81.2,34.2,-85.6,17.1,-85.8,-0.1C-86,-17.3,-82,-34.6,-74.1,-49C-66.2,-63.4,-54.4,-74.9,-40.6,-82.3C-26.8,-89.7,-11.4,-93,2.8,-97.5C17,-102,34,-107.6,44.7,-76.4Z"
                    transform="translate(100 100)"
                />
            </svg>
        </div>

        <div class="blob blob-orange">
            <svg viewBox="0 0 200 200">
                <path
                    fill="#F97316"
                    d="M39.5,-65.3C51.4,-58.5,61.3,-47.7,67.8,-35.2C74.3,-22.7,77.4,-8.5,76.8,5.6C76.2,19.7,71.9,33.7,64.3,46.3C56.7,58.9,45.8,70.1,33,76C20.2,81.9,5.5,82.5,-9.1,78.8C-23.7,75.1,-38.2,67.1,-49.9,56.3C-61.6,45.5,-70.5,31.9,-74.8,16.8C-79.1,1.7,-78.8,-14.9,-73.6,-29.7C-68.4,-44.5,-58.3,-57.5,-45.8,-64C-33.3,-70.5,-19.4,-70.5,-5.7,-69.8C8,-69.1,27.6,-72.1,39.5,-65.3Z"
                    transform="translate(100 100)"
                />
            </svg>
        </div>


        {{-- =====================================================
            HERO
        ====================================================== --}}
        <section class="hero-section">

            <div class="hero-container">

                {{-- Texto --}}
                <div class="hero-content">

                    <h2 class="hero-title">
                        Bem-vindo a Beth Cientista!
                    </h2>

                    <p class="hero-subtitle">
                        Divulgação científica feita por jovens,
                        para jovens
                    </p>

                    {{-- Busca --}}
                    <div class="search-wrapper">

                        <div class="search-box">

                            <i class="fa-solid fa-magnifying-glass"></i>

                            <input
                                type="text"
                                id="searchInput"
                                placeholder="Buscar conteúdos incríveis..."
                                autocomplete="off"
                            >

                        </div>

                    </div>

                </div>


                {{-- Mascote --}}
                <div class="hero-mascot">

                    <div class="mascot-star">
                        <i class="fa-solid fa-star"></i>
                    </div>

                    <div class="mascot-microscope">
                        <i class="fa-solid fa-microscope"></i>
                    </div>

                    <div class="mascot-glow mascot-glow-one"></div>
                    <div class="mascot-glow mascot-glow-two"></div>

                    <img
                        src="{{ asset('images/beth-mascote.png') }}"
                        alt="Beth Cientista"
                    >

                </div>

            </div>

        </section>


        {{-- =====================================================
            CATEGORIAS
        ====================================================== --}}
        <section class="categories-section">

            <div class="content-container">

                <h3 class="section-title">
                    <span>
                        Escolha sua Aventura!
                    </span>
                </h3>

                <div class="categories-grid">

                    <button
                        class="category-card category-all active"
                        data-category="Todos"
                    >

                        <div class="category-card-background"></div>

                        <div class="category-content">

                            <i class="fa-solid fa-lightbulb"></i>

                            <h4>Todos</h4>

                        </div>

                    </button>


                    <button
                        class="category-card category-stars"
                        data-category="Beth nas Estrelas"
                    >

                        <div class="category-card-background"></div>

                        <div class="category-content">

                            <i class="fa-solid fa-star"></i>

                            <h4>Beth nas Estrelas</h4>

                        </div>

                    </button>


                    <button
                        class="category-card category-anatomy"
                        data-category="Beth Anatomy"
                    >

                        <div class="category-card-background"></div>

                        <div class="category-content">

                            <i class="fa-solid fa-microscope"></i>

                            <h4>Beth Anatomy</h4>

                        </div>

                    </button>


                    <button
                        class="category-card category-indica"
                        data-category="Beth Indica"
                    >

                        <div class="category-card-background"></div>

                        <div class="category-content">

                            <i class="fa-solid fa-book"></i>

                            <h4>Beth Indica</h4>

                        </div>

                    </button>

                </div>

            </div>

        </section>


        {{-- =====================================================
            ORDENAR
        ====================================================== --}}
        <section class="sort-section">

            <div class="sort-box">

                <i class="fa-regular fa-calendar"></i>

                <span>Ordenar por:</span>

                <div class="sort-buttons">

                    <button
                        class="sort-button active"
                        data-sort="recent"
                    >
                        Mais Recentes
                    </button>

                    <button
                        class="sort-button"
                        data-sort="oldest"
                    >
                        Mais Antigas
                    </button>

                </div>

            </div>

        </section>


        {{-- =====================================================
            CONTEÚDOS
        ====================================================== --}}
        <section class="posts-section">

            <div class="content-container">

                <h3 class="posts-title" id="postsTitle">
                    Todos os Conteúdos
                </h3>

                <div class="posts-grid" id="postsGrid">


                    {{-- POST 1 --}}
                    <article
                        class="post-card"
                        data-category="Beth nas Estrelas"
                        data-date="2026-03-15"
                    >

                        <div class="post-image-wrapper">

                            <div class="post-category-icon stars">
                                <i class="fa-solid fa-star"></i>
                            </div>

                            <img
                                src="https://images.unsplash.com/photo-1462331940025-496dfbfc7564?w=800&q=80"
                                alt="A Física dos Buracos Negros"
                            >

                            <div class="image-overlay"></div>

                        </div>

                        <div class="post-content">

                            <div class="post-meta">

                                <span class="post-category stars-bg">
                                    Beth nas Estrelas
                                </span>

                                <span class="post-date">
                                    15/03/2026
                                </span>

                            </div>

                            <h4>
                                A Física dos Buracos Negros
                            </h4>

                            <p>
                                Descubra os mistérios fascinantes dos
                                buracos negros e como eles dobram o
                                espaço-tempo.
                            </p>

                            <div class="post-footer">

                                <span>
                                    Por Maria Silva
                                </span>

                                <button class="read-more stars-button">
                                    Ler mais
                                </button>

                            </div>

                        </div>

                    </article>


                    {{-- POST 2 --}}
                    <article
                        class="post-card"
                        data-category="Beth Anatomy"
                        data-date="2026-03-12"
                    >

                        <div class="post-image-wrapper">

                            <div class="post-category-icon anatomy">
                                <i class="fa-solid fa-microscope"></i>
                            </div>

                            <img
                                src="https://images.unsplash.com/photo-1628348068343-c6a848d2b6dd?w=800&q=80"
                                alt="Sistema Cardiovascular Humano"
                            >

                            <div class="image-overlay"></div>

                        </div>

                        <div class="post-content">

                            <div class="post-meta">

                                <span class="post-category anatomy-bg">
                                    Beth Anatomy
                                </span>

                                <span class="post-date">
                                    12/03/2026
                                </span>

                            </div>

                            <h4>
                                O Sistema Cardiovascular Humano
                            </h4>

                            <p>
                                Uma viagem pelos vasos sanguíneos e o
                                coração, explorando como nosso corpo
                                mantém a vida.
                            </p>

                            <div class="post-footer">

                                <span>
                                    Por João Santos
                                </span>

                                <button class="read-more anatomy-button">
                                    Ler mais
                                </button>

                            </div>

                        </div>

                    </article>


                    {{-- POST 3 --}}
                    <article
                        class="post-card"
                        data-category="Beth Indica"
                        data-date="2026-03-10"
                    >

                        <div class="post-image-wrapper">

                            <div class="post-category-icon indica">
                                <i class="fa-solid fa-book"></i>
                            </div>

                            <img
                                src="https://images.unsplash.com/photo-1495446815901-a7297e633e8d?w=800&q=80"
                                alt="Uma Breve História do Tempo"
                            >

                            <div class="image-overlay"></div>

                        </div>

                        <div class="post-content">

                            <div class="post-meta">

                                <span class="post-category indica-bg">
                                    Beth Indica
                                </span>

                                <span class="post-date">
                                    10/03/2026
                                </span>

                            </div>

                            <h4>
                                Livro: Uma Breve História do Tempo
                            </h4>

                            <p>
                                Stephen Hawking nos leva a uma jornada
                                pelo cosmos nesta obra essencial.
                            </p>

                            <div class="post-footer">

                                <span>
                                    Por Ana Costa
                                </span>

                                <button class="read-more indica-button">
                                    Ler mais
                                </button>

                            </div>

                        </div>

                    </article>


                    {{-- POST 4 --}}
                    <article
                        class="post-card"
                        data-category="Beth nas Estrelas"
                        data-date="2026-03-08"
                    >

                        <div class="post-image-wrapper">

                            <div class="post-category-icon stars">
                                <i class="fa-solid fa-star"></i>
                            </div>

                            <img
                                src="https://images.unsplash.com/photo-1466781783364-36c955e42a7f?w=800&q=80"
                                alt="Importância da Fotossíntese"
                            >

                            <div class="image-overlay"></div>

                        </div>

                        <div class="post-content">

                            <div class="post-meta">

                                <span class="post-category stars-bg">
                                    Beth nas Estrelas
                                </span>

                                <span class="post-date">
                                    08/03/2026
                                </span>

                            </div>

                            <h4>
                                A Importância da Fotossíntese
                            </h4>

                            <p>
                                Como as plantas convertem luz solar em
                                energia e por que isso é crucial para a
                                vida na Terra.
                            </p>

                            <div class="post-footer">

                                <span>
                                    Por Pedro Almeida
                                </span>

                                <button class="read-more stars-button">
                                    Ler mais
                                </button>

                            </div>

                        </div>

                    </article>


                    {{-- POST 5 --}}
                    <article
                        class="post-card"
                        data-category="Beth Anatomy"
                        data-date="2026-03-05"
                    >

                        <div class="post-image-wrapper">

                            <div class="post-category-icon anatomy">
                                <i class="fa-solid fa-microscope"></i>
                            </div>

                            <img
                                src="https://images.unsplash.com/photo-1559757175-5700dde675bc?w=800&q=80"
                                alt="Neurociência"
                            >

                            <div class="image-overlay"></div>

                        </div>

                        <div class="post-content">

                            <div class="post-meta">

                                <span class="post-category anatomy-bg">
                                    Beth Anatomy
                                </span>

                                <span class="post-date">
                                    05/03/2026
                                </span>

                            </div>

                            <h4>
                                Neurociência: O Cérebro em Ação
                            </h4>

                            <p>
                                Entenda como bilhões de neurônios
                                trabalham juntos para criar pensamentos
                                e memórias.
                            </p>

                            <div class="post-footer">

                                <span>
                                    Por Carla Mendes
                                </span>

                                <button class="read-more anatomy-button">
                                    Ler mais
                                </button>

                            </div>

                        </div>

                    </article>


                    {{-- POST 6 --}}
                    <article
                        class="post-card"
                        data-category="Beth Indica"
                        data-date="2026-03-01"
                    >

                        <div class="post-image-wrapper">

                            <div class="post-category-icon indica">
                                <i class="fa-solid fa-book"></i>
                            </div>

                            <img
                                src="https://images.unsplash.com/photo-1419242902214-272b3f66ee7a?w=800&q=80"
                                alt="Cosmos"
                            >

                            <div class="image-overlay"></div>

                        </div>

                        <div class="post-content">

                            <div class="post-meta">

                                <span class="post-category indica-bg">
                                    Beth Indica
                                </span>

                                <span class="post-date">
                                    01/03/2026
                                </span>

                            </div>

                            <h4>
                                Documentário: Cosmos -
                                Uma Odisseia do Espaço-Tempo
                            </h4>

                            <p>
                                Neil deGrasse Tyson nos guia através do
                                universo nesta série imperdível.
                            </p>

                            <div class="post-footer">

                                <span>
                                    Por Lucas Ferreira
                                </span>

                                <button class="read-more indica-button">
                                    Ler mais
                                </button>

                            </div>

                        </div>

                    </article>

                </div>


                {{-- Nenhum resultado --}}
                <div
                    class="no-results"
                    id="noResults"
                    style="display: none;"
                >

                    <i class="fa-solid fa-magnifying-glass"></i>

                    <h4>
                        Oops! Nenhum conteúdo encontrado.
                    </h4>

                    <p>
                        Tente buscar por outra coisa!
                    </p>

                </div>

            </div>

        </section>

    </main>


    {{-- =========================================================
        FOOTER
    ========================================================== --}}
    <footer class="site-footer">

        <div class="footer-decoration"></div>

        <div class="footer-container">

            <div class="footer-message">

                <i class="fa-solid fa-heart"></i>

                <p>
                    Feito com amor para os futuros cientistas do mundo.
                </p>

                <i class="fa-solid fa-heart"></i>

            </div>

            <a
                href="https://www.instagram.com/bethacientista/"
                target="_blank"
                rel="noopener noreferrer"
                class="instagram-button"
            >

                <i class="fa-brands fa-instagram"></i>

                <span>
                    @bethacientista
                </span>

                <i class="fa-solid fa-sparkles"></i>

            </a>

            <p class="footer-copy">
                Beth Cientista - 2026
            </p>

        </div>

    </footer>


    {{-- =========================================================
        JAVASCRIPT
    ========================================================== --}}
    <script>

        document.addEventListener('DOMContentLoaded', function () {

            const searchInput =
                document.getElementById('searchInput');

            const postsGrid =
                document.getElementById('postsGrid');

            const posts =
                Array.from(
                    postsGrid.querySelectorAll('.post-card')
                );

            const categoryButtons =
                document.querySelectorAll('.category-card');

            const sortButtons =
                document.querySelectorAll('.sort-button');

            const postsTitle =
                document.getElementById('postsTitle');

            const noResults =
                document.getElementById('noResults');

            let selectedCategory = 'Todos';
            let selectedSort = 'recent';


            /*
            |--------------------------------------------------------------------------
            | Filtrar conteúdos
            |--------------------------------------------------------------------------
            */

            function filterPosts() {

                const search =
                    searchInput.value
                        .toLowerCase()
                        .trim();


                let visiblePosts = posts.filter(function (post) {

                    const category =
                        post.dataset.category;

                    const title =
                        post.querySelector('h4')
                            .textContent
                            .toLowerCase();

                    const description =
                        post.querySelector('p')
                            .textContent
                            .toLowerCase();


                    const categoryMatch =
                        selectedCategory === 'Todos' ||
                        category === selectedCategory;


                    const searchMatch =
                        title.includes(search) ||
                        description.includes(search);


                    return categoryMatch && searchMatch;

                });


                /*
                |--------------------------------------------------------------------------
                | Ordenação
                |--------------------------------------------------------------------------
                */

                visiblePosts.sort(function (a, b) {

                    const dateA =
                        new Date(a.dataset.date);

                    const dateB =
                        new Date(b.dataset.date);


                    if (selectedSort === 'recent') {

                        return dateB - dateA;

                    }

                    return dateA - dateB;

                });


                /*
                |--------------------------------------------------------------------------
                | Atualizar cards
                |--------------------------------------------------------------------------
                */

                posts.forEach(function (post) {

                    post.style.display = 'none';

                });


                visiblePosts.forEach(function (post) {

                    post.style.display = '';

                    postsGrid.appendChild(post);

                });


                /*
                |--------------------------------------------------------------------------
                | Título
                |--------------------------------------------------------------------------
                */

                postsTitle.textContent =
                    selectedCategory === 'Todos'
                        ? 'Todos os Conteúdos'
                        : selectedCategory;


                /*
                |--------------------------------------------------------------------------
                | Nenhum resultado
                |--------------------------------------------------------------------------
                */

                if (visiblePosts.length === 0) {

                    noResults.style.display = 'block';

                } else {

                    noResults.style.display = 'none';

                }

            }


            /*
            |--------------------------------------------------------------------------
            | Pesquisa
            |--------------------------------------------------------------------------
            */

            searchInput.addEventListener(
                'input',
                filterPosts
            );


            /*
            |--------------------------------------------------------------------------
            | Categorias
            |--------------------------------------------------------------------------
            */

            categoryButtons.forEach(function (button) {

                button.addEventListener(
                    'click',
                    function () {

                        categoryButtons.forEach(
                            function (item) {

                                item.classList.remove(
                                    'active'
                                );

                            }
                        );


                        button.classList.add('active');


                        selectedCategory =
                            button.dataset.category;


                        filterPosts();

                    }
                );

            });


            /*
            |--------------------------------------------------------------------------
            | Ordenação
            |--------------------------------------------------------------------------
            */

            sortButtons.forEach(function (button) {

                button.addEventListener(
                    'click',
                    function () {

                        sortButtons.forEach(
                            function (item) {

                                item.classList.remove(
                                    'active'
                                );

                            }
                        );


                        button.classList.add('active');


                        selectedSort =
                            button.dataset.sort;


                        filterPosts();

                    }
                );

            });


            /*
            |--------------------------------------------------------------------------
            | Menu mobile
            |--------------------------------------------------------------------------
            */

            const mobileButton =
                document.getElementById(
                    'mobileMenuButton'
                );

            const mobileMenu =
                document.getElementById(
                    'mobileMenu'
                );


            mobileButton.addEventListener(
                'click',
                function () {

                    mobileMenu.classList.toggle('open');

                }
            );


        });

    </script>

</body>
</html>