<div>
    <form action="{{ route('administrador.save') }}" method="post">
        @csrf

        <input type="hidden" name="id" value="{{ $administrador->id }}">

        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" value="{{ $administrador->nome }}">
        <br>
        <br>
        <label for="email">E-mail</label>
        <input type="text" name="email" id="email" value="{{ $administrador->email }}">
        <br>
        <br>
        <label for="telefone">Telefone</label>
        <input type="text" name="telefone" id="telefone" value="{{ $administrador->telefone }}">
        <br>
        <br>
        <label for="cpf">CPF</label>
        <input type="text" name="cpf" id="cpf" value="{{ $administrador->cpf }}">
        <br>
        <br>
        <label for="usuario">Usuário</label>
        <input type="text" name="usuario" id="usuario" value="{{ $administrador->usuario }}">
        <br>
        <br>
        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha" value="{{ $administrador->senha }}">
        <br>
        <br>
        <label for="status">Status</label>
        <input type="text" name="status" id="status" value="{{ $administrador->status }}">

        <button type="submit">Salvar</button>
        @isset($success)
            <h1>{{ $success }}</h1>
        @endisset
    </form>
</div>

