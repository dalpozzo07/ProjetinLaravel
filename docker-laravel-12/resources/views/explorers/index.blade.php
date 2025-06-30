<!DOCTYPE html>
<html>
<head>
    <title>Exploradores</title>
</head>
<body>
    <h1>Lista de Exploradores</h1>

    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Idade</th>
                <th>Latitude</th>
                <th>Longitude</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($explorers as $explorer)
                <tr>
                    <td>{{ $explorer->name }}</td>
                    <td>{{ $explorer->idade }}</td>
                    <td>{{ $explorer->latitude }}</td>
                    <td>{{ $explorer->longitude }}</td>
                    <td>
                        <a href="{{ route('explorers.edit', $explorer->id) }}">Editar</a>

                        <!-- Excluir (opcional) -->
                        <form action="{{ route('explorers.destroy', $explorer->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <br>
    <a href="{{ route('explorers.create') }}">Registrar novo explorador</a>
</body>
</html>
