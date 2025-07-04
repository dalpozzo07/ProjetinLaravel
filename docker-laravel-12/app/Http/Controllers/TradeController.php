<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trade;

class TradeController extends Controller
{
 public function index()
{
    return response()->json(Trade::with(['fromExplorer', 'toExplorer', 'items'])->get());
}

public function store(Request $request)
{
    $validated = $request->validate([
        'from_explorer_id' => 'required|exists:explorers,id',
        'to_explorer_id' => 'required|exists:explorers,id',
        'items' => 'required|array',
        'items.*.items_id' => 'required|exists:items,id',
        'items.*.offered_by' => 'required|in:from,to',
    ]);

    $trade = Trade::create([
        'from_explorer_id' => $validated['from_explorer_id'],
        'to_explorer_id' => $validated['to_explorer_id'],
    ]);

   foreach ($validated['items'] as $item) {
    $trade->items()->create([
        'items_id' => $item['items_id'],
        'offered_by' => $item['offered_by'],
    ]);
}

    return response()->json($trade->load('items'), 201);
}

public function update(Request $request, $id)
{
    $validated = $request->validate([
        'status' => 'required|string|in:pendente,aceita,rejeitada,cancelada',
    ]);

    $trade = Trade::find($id);

    if (!$trade) {
        return response()->json(['message' => 'Trade não encontrada.'], 404);
    }

    $trade->status = $validated['status'];
    $trade->save();

    return response()->json(['message' => 'Status atualizado com sucesso.', 'trade' => $trade]);
}


}
