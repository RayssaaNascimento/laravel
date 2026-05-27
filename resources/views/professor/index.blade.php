<div>
    <form action="{{ route('professor.add') }}" method="post">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">
        <br>
        <br>
        <label for="email">E-mail</label>
        <input type="text" name="email" id="email">
        <br>
        <br>
        <label for="telefone">Telefone</label>
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

    <table border="1">
        <tr>
            <td>Nome do Aluno</td>
            <td colspan="2">Ações</td>
        </tr>
        @isset($professores)
                @foreach($professores as $professor)
                    <tr>
                        <td>
                        <form action="{{ route('professor.remove', ['id' => $professor->id]) }}" method="GET">
                                <button type="submit">Remover</button>
                            </form>
                        </td>
                        <td>
                            <button type="submit">Remover</button>
                        </td>
                        <td>
                            <button type="submit">Atualizar</button>
                        </td>
                    </tr>
                @endforeach
        @endisset
    </professores
</div>

