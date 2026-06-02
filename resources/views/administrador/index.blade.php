<div>
    <form action="{{ route('administrador.add') }}" method="post">
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
        <br>
        <br>
        <label for="cpf">CPF</label>
        <input type="text" name="cpf" id="cpf">
        <br>
        <br>
        <label for="usuario">Usuário</label>
        <input type="text" name="usuario" id="usuario">
        <br>
        <br>
        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha">
        <br>
        <br>
        <label for="status">Status</label>
        <input type="text" name="status" id="status">

        <button type="submit">Salvar</button>
        @isset($success)
            <h1>{{ $success }}</h1>
        @endisset
    </form>

    <table border="1">
        <tr>
            <td>Nome do Administrador</td>
            <td colspan="2">Ações</td>
        </tr>
        @isset($administradores)administrador
            @foreach($administradores as $administrador)
                    <tr>
                        <td>
                            <h3>{{ $administrador->nome }}, {{ $administrador->email }}, {{ $administrador->telefone }},
                    {{ $administrador->cpf }}, {{ $administrador->usuario }}, {{ $administrador->senha }}, 
                    {{ $administrador->status }}</h3>
                        </td>
                        <td>
                            <form action="{{ route('administrador.remove', ['id' => $administrador->id]) }}" method="GET">
                                <button type="submit">Remover</button>
                            </form>
                        </td>
                        <td>
                        <form action="{{ route('administrador.atualizar', ['id' => $administrador->id]) }}" method="GET">
                                <button type="submit">Atualizar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
        @endisset
    </table>

</div>
