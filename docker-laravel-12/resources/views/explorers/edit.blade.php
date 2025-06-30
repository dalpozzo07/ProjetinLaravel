<form action="{{ route('explorers.update', $explorer->id) }}" method="POST">
    @csrf
    @method('PUT')
    
    <input type="text" name="name" value="{{ $explorer->name }}">
    <input type="number" name="idade" value="{{ $explorer->idade }}">
    <input type="number" step="0.000001" name="latitude" value="{{ $explorer->latitude }}">
    <input type="number" step="0.000001" name="longitude" value="{{ $explorer->longitude }}">
    <button type="submit">Atualizar</button>
</form>
