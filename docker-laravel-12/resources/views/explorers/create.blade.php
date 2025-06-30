<form action="{{ route('explorers.store') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Nome do explorador" required>
    <input type="number" step="1" name="idade" placeholder="Idade" required>
    <input type="number" step="0.000001" name="longitude" placeholder="Longitude" required>
    <input type="number" step="0.000001" name="latitude" placeholder="Latitude" required>
    <button type="submit">Salvar</button>
</form>