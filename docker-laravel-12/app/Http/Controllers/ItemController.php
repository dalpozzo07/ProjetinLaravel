<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
class ItemController extends Controller
{
    public function index()
{
    return response()->json(Item::all());
}

public function store(Request $request)
{
    $item = Item::create($request->validate([
        'name' => 'required|string',
        'valor' => 'required|integer',
        'latitude' => 'required|numeric',
        'longitude' => 'required|numeric',
        'explorer_id' => 'required|integer',
    ]));

    return response()->json($item, 201);
}
 public function update(Request $request, $id)
{
    
    $items = Item::find($id);

    if (!$items) {
        return response()->json(['message' => 'item not found'], 404);
    }

    
    $items->name = $request->input('name', $items->name);
    $items->valor = (int) $request->input('valor', $items->valor);
    $items->longitude = (float) $request->input('longitude', $items->longitude);
    $items->latitude = (float) $request->input('latitude', $items->latitude);
    $items->explorer_id = (int) $request->input('explorer_id', $items->idade);

    $items->save();

    return response()->json($items);
}
}
