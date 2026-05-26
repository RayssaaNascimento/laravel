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
        <input type="text" name="senha" id="senha">
        <br>
        <br>
        <label for="status">Status</label>
        <input type="text" name="status" id="status">


        <button type="submit">Salvar</button>
        @isset($success)
            <h1>{{ $success }}</h1>
        @endisset
    </form>

    @isset($administradores)
            @foreach($administradores as $administrador)
                <h3>{{ $administrador->nome }}, {{ $administrador->email }}, {{ $administrador->telefone }},
                {{ $administrador->cpf }}, {{ $administrador->usuario }}, {{ $administrador->senha }},
                {{ $administrador->status }}
                </h3>
            @endforeach
    @endisset
</div>

