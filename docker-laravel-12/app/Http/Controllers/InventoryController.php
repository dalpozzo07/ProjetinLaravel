<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;

class InventoryController extends Controller
{
    public function index()
{
    return response()->json(Inventory::with(['explorer', 'items'])->get());
}

public function store(Request $request)
{
    $inventory = Inventory::create($request->validate([
        'explorer_id' => 'required|exists:explorers,id',
        'items_id' => 'required|exists:items,id',
    ]));

    return response()->json($inventory, 201);
}

}
