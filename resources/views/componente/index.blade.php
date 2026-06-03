<div>
    <form action="{{ route('componente.add') }}" method="post">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" value="{{ old('nome') }}">
        <br>
        <br>
        <label for="hora_inicio">Hora de Início</label>
        <input type="date" name="hora_inicio" id="hora_inicio" >
        <br>
        <br>
        <label for="hora_fim">Hora de Término</label>
        <input type="date" name="hora_fim" id="hora_fim" >

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
            <td>Nome do Componente</td>
            <td colspan="2">Ações</td>
        </tr>
        @isset($componentes)
            @foreach($componentes as $componente)
                    <tr>
                        <td>
                            <h3>{{ $componente->nome }}, {{ $componente->hora_inicio }}, {{ $componente->hora_fim }}</h3>
                        </td>
                        <td>
                            <form action="{{ route('componente.remove', ['id' => $componente->id]) }}" method="GET">
                                <button type="submit">Remover</button>
                            </form>
                        </td>
                        <td>
                        <form action="{{ route('componente.atualizar', ['id' => $componente->id]) }}" method="GET">
                                <button type="submit">Atualizar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
        @endisset
    </table>

</div>
