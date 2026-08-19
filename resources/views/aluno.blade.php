<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Minha Área | Beth Cientista</title>

    <link
        rel="icon"
        type="image/jpeg"
        href="{{ asset('images/beth-logo.jpeg') }}"
    >

    <link
        rel="stylesheet"
        href="{{ asset('css/aluno.css') }}"
    >

    {{-- FONTES DO PROJETO --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link
        rel="preconnect"
        href="https://fonts.gstatic.com"
        crossorigin
    >

    <link
        href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;500;600;700&family=Kavoon&family=Luckiest+Guy&display=swap"
        rel="stylesheet"
    >

    {{-- ÍCONES --}}
    <script src="https://unpkg.com/lucide@latest"></script>

</head>


<body>


    {{-- =====================================================
        HEADER
    ====================================================== --}}

    <header class="site-header">

        <div class="header-noise"></div>


        <div class="header-container">


            {{-- LOGO --}}

            <a
                href="{{ url('/') }}"
                class="brand"
            >

                <div class="brand-image-wrapper">

                    <img
                        src="{{ asset('Beth.jpg') }}"
                        alt="Beth Cientista"
                        class="brand-image"
                    >

                </div>


                <div class="brand-text">

                    <h1>
                        Beth Cientista
                    </h1>

                    <p>
                        Divulgação Científica
                    </p>

                </div>

            </a>



            {{-- MENU DESKTOP --}}

            <nav class="main-navigation">


                <a
                    href="{{ url('/') }}"
                    class="nav-link"
                >
                    Início
                </a>


                <span class="nav-divider"></span>


                <a
                    href="{{ url('/sobre-nos') }}"
                    class="nav-link"
                >
                    Sobre Nós
                </a>


                <span class="nav-divider"></span>


                <a
                    href="{{ url('/galeria') }}"
                    class="nav-link"
                >
                    Galeria
                </a>


                <span class="nav-divider"></span>


                <a
                    href="{{ url('/biblioteca') }}"
                    class="nav-link"
                >
                    Biblioteca
                </a>


                <span class="nav-divider"></span>


                <a
                    href="{{ url('/mencoes-honrosas') }}"
                    class="nav-link"
                >
                    Menções Honrosas
                </a>



                {{-- MINHA ÁREA --}}

                <a
                    href="{{ url('/aluno') }}"
                    class="nav-area-button active"
                >

                    <i data-lucide="user"></i>

                    <span>
                        Minha Área
                    </span>

                </a>



                {{-- SAIR
                    Removido route('logout') porque a rota
                    ainda não está configurada.
                --}}

                <a
                    href="#"
                    class="logout-button"
                >
                    Sair
                </a>

            </nav>



            {{-- MENU MOBILE --}}

            <button
                type="button"
                class="mobile-menu-button"
                id="mobileMenuButton"
            >

                <i data-lucide="menu"></i>

            </button>

        </div>



        {{-- MENU MOBILE --}}

        <nav
            class="mobile-navigation"
            id="mobileNavigation"
        >

            <a href="{{ url('/') }}">
                Início
            </a>

            <a href="{{ url('/sobre-nos') }}">
                Sobre Nós
            </a>

            <a href="{{ url('/galeria') }}">
                Galeria
            </a>

            <a href="{{ url('/biblioteca') }}">
                Biblioteca
            </a>

            <a href="{{ url('/mencoes-honrosas') }}">
                Menções Honrosas
            </a>

            <a href="{{ url('/aluno') }}">
                Minha Área
            </a>

            <a href="#">
                Sair
            </a>

        </nav>

    </header>



    {{-- =====================================================
        CONTEÚDO PRINCIPAL
    ====================================================== --}}

    <main class="student-page">

        <div class="student-container">


            {{-- =================================================
                PERFIL DO ALUNO
            ================================================== --}}

            <section class="profile-card">

                <div class="profile-content">


                    <div class="profile-avatar-area">

                        <div class="profile-avatar">

                            <i data-lucide="user"></i>

                        </div>


                        <span class="clubista-badge">
                            Clubista
                        </span>

                    </div>



                    <div class="profile-text">

                        <h2>
                            Maria Silva
                        </h2>

                        <p>
                            Bem-vindo(a) à sua área!
                        </p>

                    </div>


                </div>

            </section>



            {{-- =================================================
                ABAS
            ================================================== --}}

            <section class="student-tabs">


                <div class="tabs-list">


                    {{-- PUBLICAÇÕES --}}

                    <button
                        type="button"
                        class="tab-button active"
                        data-tab="posts"
                    >

                        <i data-lucide="file-text"></i>

                        <span>
                            Minhas Publicações
                        </span>

                    </button>



                    {{-- CALENDÁRIO --}}

                    <button
                        type="button"
                        class="tab-button"
                        data-tab="calendar"
                    >

                        <i data-lucide="calendar"></i>

                        <span>
                            Calendário
                        </span>

                    </button>



                    {{-- MATERIAL --}}

                    <button
                        type="button"
                        class="tab-button"
                        data-tab="materials"
                    >

                        <i data-lucide="book-open"></i>

                        <span>
                            Material de Apoio
                        </span>

                    </button>


                </div>



                {{-- =================================================
                    MINHAS PUBLICAÇÕES
                ================================================== --}}

                <div
                    class="tab-panel active"
                    id="posts"
                >


                    <div class="section-heading">


                        <h3>
                            Gerenciar Publicações
                        </h3>



                        <button
                            type="button"
                            class="new-post-button"
                            id="openPostModal"
                        >

                            <i data-lucide="plus"></i>

                            <span>
                                Nova Publicação
                            </span>

                        </button>


                    </div>



                    <div
                        class="posts-list"
                        id="postsList"
                    >


                        {{-- PUBLICAÇÃO APROVADA --}}

                        <article class="publication-card">


                            <div class="publication-information">


                                <div class="publication-title-row">

                                    <h4>
                                        A Física dos Buracos Negros
                                    </h4>


                                    <span class="status-badge approved">
                                        Aprovado
                                    </span>

                                </div>



                                <div class="publication-meta">

                                    <span>
                                        Beth nas Estrelas
                                    </span>

                                    <span class="bullet">
                                        •
                                    </span>

                                    <span>
                                        15/03/2026
                                    </span>

                                </div>


                            </div>



                            <div class="publication-actions">


                                <button
                                    type="button"
                                    class="icon-button"
                                    title="Editar"
                                >

                                    <i data-lucide="edit"></i>

                                </button>


                            </div>


                        </article>



                        {{-- RASCUNHO --}}

                        <article class="publication-card">


                            <div class="publication-information">


                                <div class="publication-title-row">

                                    <h4>
                                        Rascunho sobre DNA
                                    </h4>


                                    <span class="status-badge draft">
                                        Rascunho
                                    </span>

                                </div>



                                <div class="publication-meta">

                                    <span>
                                        Beth Anatomy
                                    </span>

                                    <span class="bullet">
                                        •
                                    </span>

                                    <span>
                                        20/03/2026
                                    </span>

                                </div>


                            </div>



                            <div class="publication-actions">


                                <button
                                    type="button"
                                    class="icon-button"
                                    title="Editar"
                                >

                                    <i data-lucide="edit"></i>

                                </button>



                                <button
                                    type="button"
                                    class="icon-button delete"
                                    title="Excluir"
                                >

                                    <i data-lucide="trash-2"></i>

                                </button>


                            </div>


                        </article>


                    </div>

                </div>



                {{-- =================================================
                    CALENDÁRIO
                ================================================== --}}

                <div
                    class="tab-panel"
                    id="calendar"
                >


                    <div class="content-card">


                        <div class="content-card-header">

                            <h3>
                                Calendário de Publicações
                            </h3>

                        </div>



                        <div class="content-card-body">

                            <div class="calendar-list">


                                <div class="calendar-item your-event">

                                    <div>

                                        <strong>
                                            25/04/2026
                                        </strong>

                                        <p>
                                            Maria Silva (Você)
                                        </p>

                                        <span class="category-badge">
                                            Beth nas Estrelas
                                        </span>

                                    </div>


                                    <span class="your-turn">
                                        Sua vez!
                                    </span>

                                </div>



                                <div class="calendar-item">

                                    <div>

                                        <strong>
                                            28/04/2026
                                        </strong>

                                        <p>
                                            João Santos
                                        </p>

                                        <span class="category-badge">
                                            Beth Anatomy
                                        </span>

                                    </div>

                                </div>



                                <div class="calendar-item">

                                    <div>

                                        <strong>
                                            02/05/2026
                                        </strong>

                                        <p>
                                            Ana Costa
                                        </p>

                                        <span class="category-badge">
                                            Beth Indica
                                        </span>

                                    </div>

                                </div>



                                <div class="calendar-item your-event">

                                    <div>

                                        <strong>
                                            08/05/2026
                                        </strong>

                                        <p>
                                            Maria Silva (Você)
                                        </p>

                                        <span class="category-badge">
                                            Beth Indica
                                        </span>

                                    </div>


                                    <span class="your-turn">
                                        Sua vez!
                                    </span>

                                </div>


                            </div>

                        </div>

                    </div>

                </div>



                {{-- =================================================
                    MATERIAL DE APOIO
                ================================================== --}}

                <div
                    class="tab-panel"
                    id="materials"
                >


                    <div class="content-card">


                        <div class="content-card-header">

                            <h3>
                                Materiais de Apoio
                            </h3>

                        </div>



                        <div class="content-card-body">


                            <div class="materials-list">


                                <div class="material-item">


                                    <div class="material-left">


                                        <div class="material-icon">

                                            <i data-lucide="book-open"></i>

                                        </div>



                                        <div>

                                            <h4>
                                                Guia de Escrita Científica
                                            </h4>


                                            <div class="material-meta">

                                                <span class="type-badge">
                                                    PDF
                                                </span>

                                                <span>
                                                    •
                                                </span>

                                                <span>
                                                    01/04/2026
                                                </span>

                                            </div>

                                        </div>


                                    </div>



                                    <a
                                        href="#"
                                        class="open-material-button"
                                    >
                                        Abrir
                                    </a>


                                </div>



                                <div class="material-item">


                                    <div class="material-left">


                                        <div class="material-icon">

                                            <i data-lucide="book-open"></i>

                                        </div>



                                        <div>

                                            <h4>
                                                Como Citar Fontes Científicas
                                            </h4>


                                            <div class="material-meta">

                                                <span class="type-badge">
                                                    Vídeo
                                                </span>

                                                <span>
                                                    •
                                                </span>

                                                <span>
                                                    28/03/2026
                                                </span>

                                            </div>

                                        </div>


                                    </div>



                                    <a
                                        href="#"
                                        class="open-material-button"
                                    >
                                        Abrir
                                    </a>


                                </div>



                                <div class="material-item">


                                    <div class="material-left">


                                        <div class="material-icon">

                                            <i data-lucide="book-open"></i>

                                        </div>



                                        <div>

                                            <h4>
                                                Dicas de Pesquisa em Bases de Dados
                                            </h4>


                                            <div class="material-meta">

                                                <span class="type-badge">
                                                    Documento
                                                </span>

                                                <span>
                                                    •
                                                </span>

                                                <span>
                                                    25/03/2026
                                                </span>

                                            </div>

                                        </div>


                                    </div>



                                    <a
                                        href="#"
                                        class="open-material-button"
                                    >
                                        Abrir
                                    </a>


                                </div>



                                <div class="material-item">


                                    <div class="material-left">


                                        <div class="material-icon">

                                            <i data-lucide="book-open"></i>

                                        </div>



                                        <div>

                                            <h4>
                                                Normas de Publicação
                                            </h4>


                                            <div class="material-meta">

                                                <span class="type-badge">
                                                    PDF
                                                </span>

                                                <span>
                                                    •
                                                </span>

                                                <span>
                                                    20/03/2026
                                                </span>

                                            </div>

                                        </div>


                                    </div>



                                    <a
                                        href="#"
                                        class="open-material-button"
                                    >
                                        Abrir
                                    </a>


                                </div>


                            </div>

                        </div>

                    </div>

                </div>


            </section>

        </div>

    </main>



    {{-- =====================================================
        MODAL NOVA PUBLICAÇÃO
    ====================================================== --}}

    <div
        class="modal-overlay"
        id="postModal"
    >


        <div class="post-modal">


            <div class="modal-header">

                <h2>
                    Criar Nova Publicação
                </h2>


                <button
                    type="button"
                    class="modal-close"
                    id="closePostModal"
                >

                    <i data-lucide="x"></i>

                </button>

            </div>



            <div class="modal-body">


                <div class="form-group">

                    <label for="postTitle">
                        Título
                    </label>

                    <input
                        type="text"
                        id="postTitle"
                        placeholder="Digite o título da publicação"
                    >

                </div>



                <div class="form-group">

                    <label for="postCategory">
                        Categoria
                    </label>


                    <select id="postCategory">

                        <option value="">
                            Selecione uma categoria
                        </option>

                        <option value="Beth nas Estrelas">
                            Beth nas Estrelas
                        </option>

                        <option value="Beth Anatomy">
                            Beth Anatomy
                        </option>

                        <option value="Beth Indica">
                            Beth Indica
                        </option>

                    </select>

                </div>



                <div class="form-group">

                    <label for="postContent">
                        Conteúdo
                    </label>


                    <textarea
                        id="postContent"
                        rows="8"
                        placeholder="Escreva o conteúdo da sua publicação..."
                    ></textarea>

                </div>



                <div class="modal-actions">

                    <button
                        type="button"
                        class="cancel-button"
                        id="cancelPost"
                    >
                        Cancelar
                    </button>


                    <button
                        type="button"
                        class="save-button"
                        id="savePost"
                    >
                        Salvar Rascunho
                    </button>

                </div>


            </div>

        </div>

    </div>



    {{-- =====================================================
        JAVASCRIPT
    ====================================================== --}}

    <script>

        /*
        |--------------------------------------------------------------------------
        | ÍCONES
        |--------------------------------------------------------------------------
        */

        lucide.createIcons();



        /*
        |--------------------------------------------------------------------------
        | MENU MOBILE
        |--------------------------------------------------------------------------
        */

        const mobileMenuButton =
            document.getElementById('mobileMenuButton');

        const mobileNavigation =
            document.getElementById('mobileNavigation');


        if (mobileMenuButton) {

            mobileMenuButton.addEventListener(
                'click',
                function () {

                    mobileNavigation.classList.toggle('show');

                }
            );

        }



        /*
        |--------------------------------------------------------------------------
        | ABAS
        |--------------------------------------------------------------------------
        */

        const tabButtons =
            document.querySelectorAll('.tab-button');

        const tabPanels =
            document.querySelectorAll('.tab-panel');


        tabButtons.forEach(function (button) {

            button.addEventListener(
                'click',
                function () {

                    const target =
                        button.dataset.tab;


                    tabButtons.forEach(function (item) {

                        item.classList.remove('active');

                    });


                    tabPanels.forEach(function (panel) {

                        panel.classList.remove('active');

                    });


                    button.classList.add('active');


                    const selectedPanel =
                        document.getElementById(target);


                    if (selectedPanel) {

                        selectedPanel.classList.add('active');

                    }

                }
            );

        });



        /*
        |--------------------------------------------------------------------------
        | MODAL
        |--------------------------------------------------------------------------
        */

        const modal =
            document.getElementById('postModal');

        const openModal =
            document.getElementById('openPostModal');

        const closeModal =
            document.getElementById('closePostModal');

        const cancelModal =
            document.getElementById('cancelPost');


        function showModal() {

            modal.classList.add('show');

            document.body.classList.add('modal-open');

        }


        function hideModal() {

            modal.classList.remove('show');

            document.body.classList.remove('modal-open');

        }


        if (openModal) {

            openModal.addEventListener(
                'click',
                showModal
            );

        }


        if (closeModal) {

            closeModal.addEventListener(
                'click',
                hideModal
            );

        }


        if (cancelModal) {

            cancelModal.addEventListener(
                'click',
                hideModal
            );

        }


        if (modal) {

            modal.addEventListener(
                'click',
                function (event) {

                    if (event.target === modal) {

                        hideModal();

                    }

                }
            );

        }



        /*
        |--------------------------------------------------------------------------
        | SALVAR NOVA PUBLICAÇÃO
        |--------------------------------------------------------------------------
        */

        const savePost =
            document.getElementById('savePost');


        if (savePost) {

            savePost.addEventListener(
                'click',
                function () {


                    const title =
                        document
                            .getElementById('postTitle')
                            .value
                            .trim();


                    const category =
                        document
                            .getElementById('postCategory')
                            .value;


                    if (!title || !category) {

                        alert(
                            'Preencha o título e a categoria.'
                        );

                        return;

                    }


                    const today =
                        new Date()
                            .toLocaleDateString('pt-BR');


                    const post =
                        document.createElement('article');


                    post.className =
                        'publication-card';


                    post.innerHTML = `

                        <div class="publication-information">

                            <div class="publication-title-row">

                                <h4>
                                    ${title}
                                </h4>

                                <span class="status-badge draft">
                                    Rascunho
                                </span>

                            </div>

                            <div class="publication-meta">

                                <span>
                                    ${category}
                                </span>

                                <span class="bullet">
                                    •
                                </span>

                                <span>
                                    ${today}
                                </span>

                            </div>

                        </div>

                        <div class="publication-actions">

                            <button
                                type="button"
                                class="icon-button"
                                title="Editar"
                            >

                                <i data-lucide="edit"></i>

                            </button>

                            <button
                                type="button"
                                class="icon-button delete"
                                title="Excluir"
                            >

                                <i data-lucide="trash-2"></i>

                            </button>

                        </div>

                    `;


                    document
                        .getElementById('postsList')
                        .prepend(post);


                    document
                        .getElementById('postTitle')
                        .value = '';


                    document
                        .getElementById('postCategory')
                        .value = '';


                    document
                        .getElementById('postContent')
                        .value = '';


                    hideModal();


                    lucide.createIcons();

                }
            );

        }



        /*
        |--------------------------------------------------------------------------
        | EXCLUIR PUBLICAÇÃO
        |--------------------------------------------------------------------------
        */

        document.addEventListener(
            'click',
            function (event) {


                const button =
                    event.target.closest(
                        '.icon-button.delete'
                    );


                if (!button) {

                    return;

                }


                const card =
                    button.closest(
                        '.publication-card'
                    );


                if (
                    confirm(
                        'Deseja realmente excluir esta publicação?'
                    )
                ) {

                    card.remove();

                }

            }
        );

    </script>

</body>

</html>