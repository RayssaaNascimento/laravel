<div>
    <form action="{{ route('professor.add') }}" method="post">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">

        <label for="nome">Email</label>
        <input type="text" name="email" id="email">

        <label for="nome">Telefone</label>
        <input type="text" name="telefone" id="telefone">

        <button type="submit">Salvar</button>
        @isset($success)
            <h1>{{ $success }}</h1>
        @endisset
    </form>

    @isset($professores)
            @foreach($professores as $professor)
                <h3>{{ $professor->nome }}, {{ $professor->email }}, {{ $professor->telefone }}</h3>
            @endforeach
    @endisset
</div>
