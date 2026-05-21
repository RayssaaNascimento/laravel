<div>
    <form action="{{ route('curso.add') }}" method="post">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">
        <br>
        <br>
        <label for="periodo">Período</label>
        <input type="text" name="periodo" id="periodo">

        <button type="submit">Salvar</button>
        @isset($success)
            <h1>{{ $success }}</h1>
        @endisset
    </form>

    @isset($cursos)
            @foreach($cursos as $curso)
                <h3>{{ $curso->nome }}, {{ $curso->periodo }}</h3>
            @endforeach
    @endisset
</div>

