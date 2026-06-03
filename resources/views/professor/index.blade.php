<div>
    <form action="{{ route('professor.add') }}" method="post">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" value="{{ old('nome') }}">
        <br>
        <br>
        <label for="email">E-mail</label>
        <input type="text" name="email" id="email" value="{{ old('email') }}">
        <br>
        <br>
        <label for="telefone">Telefone</label>
        <input type="text" name="telefone" id="telefone" value="{{ old('telefone') }}">

        <button type="submit">Salvar</button>
        @isset($success)
            <h1>{{ $success }}</h1>
        @endisset
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </form>

    <table border="1">
        <tr>
            <td>Nome do Professor</td>
            <td colspan="2">Ações</td>
        </tr>
        @isset($professores)
            @foreach($professores as $professor)
                    <tr>
                        <td>
                            <h3>{{ $professor->nome }}, {{ $professor->email }}, {{ $professor->telefone }}</h3>
                        </td>
                        <td>
                        <form action="{{ route('professor.remove', ['id' => $professor->id]) }}" method="GET">
                                <button type="submit">Remover</button>
                            </form>
                        </td>
                        <td>
                        <form action="{{ route('professor.atualizar', ['id' => $professor->id]) }}" method="GET">
                                <button type="submit">Atualizar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
        @endisset
    </table>


</div>
