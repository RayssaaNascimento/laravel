<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Produtos</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
            padding: 20px;
        }

        h1 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: #fff;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        th, td {
            padding: 12px;
            text-align: center;
        }

        th {
            background-color: #2c3e50;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #e6f2ff;
        }

        .btn {
            padding: 6px 12px;
            border: none;
            cursor: pointer;
            border-radius: 4px;
        }

        .btn-edit {
            background-color: #3498db;
            color: white;
        }

        .btn-delete {
            background-color: #e74c3c;
            color: white;
        }

        .btn-add {
            background-color: #2ecc71;
            color: white;
            margin-bottom: 15px;
        }

        .container {
            max-width: 900px;
            margin: auto;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Lista de Produtos</h1>

    <a href="/produtos/create">
        <button class="btn btn-add">+ Novo Produto</button>
    </a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($produtos as $produto)
                <tr>
                    <td>{{ $produto['id'] }}</td>
                    <td>{{ $produto['nome'] }}</td>
                    <td>R$ {{ number_format($produto['preco'], 2, ',', '.') }}</td>
                    <td>
                        <a href="/produtos/{{ $produto['id'] }}/edit">
                            <button class="btn btn-edit">Editar</button>
                        </a>

                        <form action="/produtos/{{ $produto['id'] }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-delete" onclick="return confirm('Tem certeza que deseja remover?')">
                                Remover
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">Nenhum produto cadastrado.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

</body>
</html>